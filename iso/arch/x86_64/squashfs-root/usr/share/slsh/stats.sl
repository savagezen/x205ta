import ("stats");

% This file contains the following public functions:
%
%   ks_test          One sample Kolmogorov test
%   ad_test          Anderson-Darling test
%   ks_test2         Two sample Smirnov test
%   mw_test	     Two sample Mann-Whitney-Wilcoxon test
%   chisqr_test	     Chisqr-test
%   t_test           Student t test
%   t_test2          Two-sample Student t test
%   welch_t_test
%   spearman_r       Two-sample Spearman rank test
%   kendall_tau      Two-sample Kendall tau
%   pearson_r        Pearson's r correlation test
%   correlation      2 sample correlation
%   z_test
%   f_test2          2 sample F test
%   skewness
%   kurtosis
%

define normal_cdf ()
{
   variable m, s, a;
   variable nargs = _NARGS;

   switch (nargs)
     {
      case 1:
	m = NULL, s = NULL;
     }
     {
      case 3:
	(m, s) = ();
     }
     {
	_pop_n (nargs);
	usage ("cdf = normal_cdf (A [, mean, stddev])");
     }
   a = ();

   if (nargs != 1)
     a = (a-m)/double(s);

   if (typeof (a) == Array_Type)
     return array_map (Double_Type, &_normal_cdf, a);

   return _normal_cdf (a);
}

define poisson_cdf ()
{
   variable lam, n;
   if (_NARGS != 2)
     {
	_pop_n (_NARGS);
	usage ("cdf = poisson_cdf (lambda, n)");
     }
   (lam, n) = ();

   if ((typeof (n) == Array_Type) or (typeof (lam) == Array_Type))
     return array_map (Double_Type, &_poisson_cdf, lam, n);

   return _poisson_cdf (lam, n);
}

define sample_mean ()
{
   variable args = __pop_args (_NARGS);
   return mean (__push_args(args));
}

% These functions return the biased stddev
define sample_stddev ()
{
   variable x = ();
   variable n = 1.0*length (x);
   return stddev(x) * sqrt((n-1.0)/n);
}

private define get_mean_stddev (x)
{
   variable m = mean(x);
   variable n = 1.0*length (x);
   variable s = stddev(x) * sqrt((n-1.0)/n);
   return m, s, n;
}

define skewness ()
{
   if (_NARGS != 1)
     usage ("s = %s(A);", _function_name ());
   variable x = ();
   variable m, s, n;
   (m, s, n) = get_mean_stddev (x);

   x = sum (((x - m)/s)^3)/n;

   if ((s == 0.0) && isnan (x))
     x = 0.0;

   return x;
}

define kurtosis ()
{
   if (_NARGS != 1)
     usage ("s = %s(A);", _function_name ());
   variable x = ();
   variable m, s, n;
   (m, s, n) = get_mean_stddev (x);

   x = sum (((x - m)/s)^4)/n - 3.0;

   if ((s == 0.0) && isnan (x))
     x = 0.0;

   return x;
}

define covariance ()
{
   variable n = _NARGS;
   if (n == 0)
     usage ("Sigma = covariance (X1, X2, ..., Xn [;qualifiers])\n" +
	    "Qualifiers:\n" +
	    " mu=[mu1,mu2,..,muN]  (expected values E(Xi))"
	   );

   variable Xs = __pop_list (n);
   variable i, m = length (Xs[0]);
   _for i (0, n-1, 1)
     {
	if (length (Xs[i]) != m)
	  throw InvalidParmError, "Arrays must be of the same size";
     }
   variable mus = qualifier ("mu");
   variable norm = 1.0;
   if (mus == NULL)
     {
	mus = Double_Type[n];
	_for i (0, n-1, 1)
	  mus[i] = mean (Xs[i]);
	norm = m/(m-1.0);
     }
   if (length (mus) != n)
     throw InvalidParmError, "The value mu qualifier has the wrong length";

   variable cov = Double_Type[n,n];
   _for i (0, n-1, 1)
     {
	variable j;
	variable dx_i = Xs[i]-mus[i];
	_for j (i, n-1, 1)
	  {
	     variable c = norm * mean (dx_i*(Xs[j] - mus[j]));
	     cov[i,j] = c;
	     cov[j,i] = c;
	  }
     }
   return cov;
}

% This function assumes the distribution is symmetric
private define map_cdf_to_pval (cdf)
{
   variable side = qualifier ("side", NULL);

   variable pval = cdf;		       %  side="<"
   if (side == ">")
     pval = 1.0 - cdf;
   else if (side != "<")	       %  double-sided
     pval = 2.0 * _min (1.0-pval, pval);

   return pval;
}

% Asymptotically correct.  Stephens 1974
private define ks_test_prob (n, d)
{
   variable sn = sqrt(n);
   variable factor = sn + 0.12 + 0.11/sn;
   return 1-smirnov_cdf (sn * d);
}

private define compute_sorted_z ()
{
   variable nargs = _NARGS;
   variable name = (); nargs--;

   % Usage forms:
   % ks_test (x, fx [,&d])
   if (nargs < 2)
     {
	variable ustr;
	ustr = strcat("d=%s(x, f [,args...])\n",
		      "%% x=random values\n",
		      "%% f=CDF function, or array of points representing the CDF at x\n",
		      "%% args=optional args to CDF function\n");
	usage (ustr, name);
     }
   variable args = __pop_args (nargs-2);
   variable f = ();
   variable x = ();

   if (typeof (f) == Ref_Type)
     f = (@f)(x, __push_args(args));

   variable n = length (f);
   if (n != length (x))
     verror ("%s: x and f should have the same length", name);

   return __tmp(f)[array_sort (f)];
}

define ks_test ()
{
   variable d_ref = NULL;
   if (_NARGS == 2)
     d_ref = ();
   else if (_NARGS != 1)
     usage ("p = ks_test (CDF [,&D]);  %% 1-sample KS test\n",
	    + " Here CDF are the expected CDFs at the corresponding random points.");
   variable cdf = ();

   cdf = __tmp(cdf)[array_sort(cdf)];
   variable n = length (cdf);
   variable nn = 1.0*n;
   variable dplus = max ([1:n]/nn - cdf);
   variable dminus = max (cdf-[0:n-1]/nn);
   variable d = max ([dplus, dminus]);
   if (d_ref != NULL)
     @d_ref = d;

   return ks_test_prob (n, d);
}

#iffalse
% FIXME!!!! I need to verify this
define ad_test ()
{
   variable args = __pop_args (_NARGS);
   variable z = compute_sorted_z (__push_args (args), _function_name());
   variable n = length (z);
   variable ii = [1:2*n:2];
   return -n - (sum(ii*log(z) + (2*n-ii)*log(1.0-z)))/n;
}
#endif

% We want ks_test2_prob to return P(D_mn >= d), where d is the observed value.
% It is known that d can only take on values c/mn where c, m, and n are integers.
% So set d=c/mn.
% kim_jennrich_cdf returns P(D_mn <= c/mn)
% But we want P(D_mn >= c/mn) = 1-P(D_mn < c/mn)
%   P(D_mn <= (c-1)/mn) <= P(D_mn < c/mn) <= P(D_mn <= c/mn)
%   P(D_mn <= (c-1)/mn) <= P(D_mn < c/mn) <= P(D_mn < c/mn) + P(D_mn==c/mn)
%   P(D_mn <= (c-1)/mn) <= P(D_mn < c/mn) + P(D_mn==c/mn)
%
% Since D_mn can only take on values c/mn, it follows that
%   P(D_mn < c/mn) = P(D_mn <= (c-1)/mn)
%
private define ks_test2_prob ()
{
   if (_NARGS != 3)
     usage ("p = %s(m, n, d); %% P(D_mn >= d)", _function_name ());
   variable d, m, n; (m, n, d) = ();

   % See the above note for why 1 is subtracted for the first argument of
   % kim_jennrich.
   variable fm = double (m);
   if (fm * n <= 10000.0)
     return 1.0 - kim_jennrich_cdf (m, n, int (d*m*n + 0.5) - 1);

   % Use asymptotic forms.
   return ks_test_prob ((fm*n)/(fm+n), d);
}

define ks_test2 ()
{
   variable d_ref = NULL;
   if (_NARGS == 3)
     d_ref = ();
   else if (_NARGS != 2)
     usage ("p = %s(X1, X2 [,&D]); %% Two-sample KS test", _function_name ());

   variable xm, xn; (xm, xn) = ();
   variable x = [xn, xm];
   variable n = length (xn);
   variable m = length (xm);
   variable mn = m + n;
   variable c = Int_Type[mn];
   c[[0:n-1]] = 1;

   variable i = array_sort (x);
   x = x[i];
   c = c[i]; c = cumsum (__tmp(c));
   variable dmn = (c/n - [1:mn]/(mn*1.0));
   variable factor = mn/(m*1.0);
   variable dplus = factor * max(dmn);
   variable dminus = factor * min(dmn);
   variable d = max([dplus, -dminus]);

   if (d_ref != NULL)
     @d_ref = d;

   return ks_test2_prob (m, n, d);
}

% This is asymptotically correct
private define kuiper_test_prob (n, d)
{
   variable sn = sqrt(n);
   variable factor = sn + 0.155 + 0.24/sn;
   d = factor * d;
   if (d < 0.4)
     return 1.0;
   if (d > 20.0)
     return 0.0;

   variable x = ([1:100]*d)^2;
   variable p = 2.0*sum ((4.0*x - 1.0) * exp (-2.0*x));
   if (p < 0.0)
     p = 0.0;
   if (p > 1.0)
     p = 1.0;
   return p;
}

define kuiper_test ()
{
   variable d_ref = NULL;
   if (_NARGS == 2)
     d_ref = ();
   else if (_NARGS != 1)
     usage ("p = kuiper_test (CDF [,&D]);  %% 1-sample Kuiper test\n",
	    + " Here CDF are the expected CDFs at the corresponding random points.");
   variable cdf = ();

   cdf = __tmp(cdf)[array_sort(cdf)];
   variable n = length (cdf);
   variable nn = 1.0*n;
   variable dplus = max ([1:n]/nn - cdf);
   variable dminus = max (cdf-[0:n-1]/nn);
   variable d = dplus + dminus;
   if (d_ref != NULL)
     @d_ref = d;

   return kuiper_test_prob (n, d);
}

define kuiper_test2 ()
{
   variable d_ref = NULL;
   if (_NARGS == 3)
     d_ref = ();
   else if (_NARGS != 2)
     usage ("p = %s(X1, X2 [,&D]); %% Two-sample Kuiper test", _function_name ());

   variable xm, xn; (xm, xn) = ();
   variable x = [xn, xm];
   variable n = length (xn);
   variable m = length (xm);
   variable mn = m + n;
   variable c = Int_Type[mn];
   c[[0:n-1]] = 1;

   variable i = array_sort (x);
   x = x[i];
   c = c[i]; c = cumsum (__tmp(c));
   variable dmn = (c/n - [1:mn]/(mn*1.0));
   variable factor = mn/(m*1.0);
   variable dplus = factor * max(dmn);
   variable dminus = factor * min(dmn);
   variable d = dplus - dminus;

   if (d_ref != NULL)
     @d_ref = d;

   return kuiper_test_prob (double(m)*double(n)/double(mn), d);
}

define chisqr_test ()
{
   variable t_ref = NULL;
   variable nr = _NARGS;
   if (nr > 1)
     {
	t_ref = ();
	if (typeof (t_ref) == Ref_Type)
	  nr--;
	else
	  {
	     t_ref;		       %  push it back
	     t_ref = NULL;
	  }
     }

   if (nr < 2)
     {
	usage ("p=%s(X,Y,...,Z [,&T])", _function_name);
     }
   variable args = __pop_args (nr);
   variable datasets = Array_Type[nr];
   variable nc = length (args[0].value);
   variable c = Double_Type[nc];

   _for (0, nr-1, 1)
     {
	variable i = ();
	variable d = args[i].value;
	if (length (d) != nc)
	  verror ("The chisqr test requires datasets to be of the same length");
	datasets[i] = d;
	c += d;
     }
   variable N = sum (c);
   variable t = 0.0;
   _for (0, nr-1, 1)
     {
        i = ();
	d = datasets[i];
	variable e = sum (d)/N * c;
	t += sum((d-e)^2/e);
     }

   if (t_ref != NULL)
     @t_ref = t;

   return 1.0 - chisqr_cdf ((nr-1)*(nc-1), t);
}

% Usage: r = compute_rank (X, [&tie_fun [,&tied_groups]])
% Here, if tied_groups is non-NULL, it will be an array whose length
% represents the number of tied groups, and each element being the number
% within the kth group.
private define compute_rank ()
{
   variable x, tie_fun = &mean, group_ties_ref = NULL;
   if (_NARGS == 3)
     group_ties_ref = ();
   if (_NARGS >= 2)
     tie_fun = ();
   x = ();
   if (tie_fun == NULL)
     tie_fun = &mean;

   variable indx = array_sort (x);
   x = x[indx];
   variable n = length (x);
   variable r = double([1:n]);

   % Worry about ties
   variable ties = where (0 == (shift (x, 1) - x));

   variable m = length (ties);
   variable group_ties = Int_Type[0];
   if (m)
     {
	variable i = 0;
	variable g = 0;
	group_ties = Int_Type[m];
	while (i < m)
	  {
	     variable ties_i = ties[i];
	     variable j = i;
	     j++;
	     variable dties = ties_i - i;
	     while ((j < m) && (dties + j == ties[j]))
	       j++;

	     variable dn = j - i;
	     i = [ties_i:ties_i+dn];
	     r[i] = (@tie_fun)(r[i]);
	     group_ties[g] = dn+1;
	     i = j;
	     g++;
	  }
	group_ties = group_ties[[0:g-1]];
     }

   if (group_ties_ref != NULL)
     @group_ties_ref = group_ties;

   % Now put r back in the order of x before it was sorted.
   return r[array_sort(indx)];
}

% Min sum:  1+2+...+n = n*(n+1)/2
% Max sum:  (m+1) + (m+2) + ... (m+n) = n*m + n*(n+1)/2
% Average: (n*(n+1) + n*m)/2 = n*(n+m+1)/2
define mw_test ()
{
   variable w_ref = NULL;
   if (_NARGS == 3)
     w_ref = ();
   else if (_NARGS != 2)
     {
	usage ("p = %s (X1, Y1 [,&w]);  %% Two-Sample Mann-Whitney",
	       _function_name ());
     }
   variable x, y;
   (x, y) = ();
   variable side = qualifier ("side", NULL);

   variable n = length (x), m = length (y);
   variable N = m+n;
   variable mn = m*n;

   variable gties;
   variable r = compute_rank ([x,y], &mean, &gties);
   variable w = sum (r[[0:n-1]]);

   variable has_ties = length (gties);
#iffalse
   if (has_ties)
     vmessage ("*** Warning: mw_test: ties found--- using asymptotic cdf");
#endif

   variable p;

   if (has_ties || ((m > 50) && (n > 50)))
     {
	% Asymptotic
	variable wstar = w - 0.5*n*(N+1);
	variable vw = (mn/12.0)*(N+1 - sum((gties-1)*gties*(gties+1))/(N*(N-1)));

	p = normal_cdf (wstar/sqrt(vw));

	if (side == ">")
	  p = 1.0 - p;
	else if (side != "<")
	  p = 2 * _min (p, 1.0-p);
     }
   else
     {
	% exact
	if (side == ">")
	  p = 1.0 - mann_whitney_cdf (n, m, w);
	else if (side == "<")
	  p = mann_whitney_cdf (n, m, w);
	else
	  {
	     p = mann_whitney_cdf (n, m, w);
	     p = 2 * _min (p, 1-p);
	  }
     }

   if (w_ref != NULL)
     @w_ref = w;

   return p;
}

define t_test ()
{
   variable x, mu;
   variable tref = NULL;

   if (_NARGS == 2)
     (x,mu) = ();
   else if (_NARGS == 3)
     (x,mu,tref) = ();
   else
     {
	usage ("p = t_test (X, mu [,&t] [; qualifiers]);  %% Student's t-test\n"
	       + "Qualifiers:\n"
	       + " side=\"<\" | \">\""
	      );
     }

   variable n = length (x);
   variable stat = sqrt(n)*((mean(x) - mu)/stddev(x));
   if (tref != NULL) @tref = stat;

   return map_cdf_to_pval (student_t_cdf(stat, n-1) ;; __qualifiers);
}

define t_test2 ()
{
   variable x, y;
   variable tref = NULL;

   if (_NARGS == 2)
     (x,y) = ();
   else if (_NARGS == 3)
     (x,y,tref) = ();
   else
     {
	usage ("p = t_test2 (X, Y [,&t] [; qualifiers]);  %% Student's 2 sample (unpaired) t-test\n"
	       + "Qualifiers:\n"
	       + " side=\"<\" | \">\""
	      );
     }
   variable side = qualifier ("side", NULL);

   variable nx = length (x), mx = mean(x), sx = stddev (x);
   variable ny = length (y), my = mean(y), sy = stddev (y);
   variable df = nx+ny-2;
   variable stat
     = (mx-my)/sqrt((((nx-1)*sx*sx+(ny-1)*sy*sy)*(nx+ny))/(nx*ny*df));

   if (tref != NULL) @tref = stat;

   return map_cdf_to_pval (student_t_cdf(stat, df) ;; __qualifiers);
}

define welch_t_test ()
{
   variable x, y;
   variable tref = NULL;

   if (_NARGS == 2)
     (x,y) = ();
   else if (_NARGS == 3)
     (x,y,tref) = ();
   else
     {
	usage ("p = welch_t_test2 (X, Y [,&t] [; qualifiers]);  %% Welch's 2 sample t-test\n"
	       + "Qualifiers:\n"
	       + " side=\"<\" | \">\""
	      );
     }
   variable side = qualifier ("side", NULL);

   variable nx = length (x), mx = mean(x), sx = stddev (x), vx = sx*sx/nx;
   variable ny = length (y), my = mean(y), sy = stddev (y), vy = sy*sy/ny;
   variable vxvy = vx+vy;
   variable stat = (mx-my)/sqrt(vxvy);
   variable df = (vxvy*vxvy)/((vx*vx)/(nx-1) + (vy*vy)/(ny-1));

   if (tref != NULL) @tref = stat;

   return map_cdf_to_pval (student_t_cdf(stat, df) ;; __qualifiers);
}

define z_test ()
{
   variable x, mu, sigma;
   variable tref = NULL;

   if (_NARGS == 4)
     tref = ();
   else if (_NARGS != 3)
     {
	usage ("p = z_test (X, mu, sigma [,&stat] [; qualifiers]);\n"
	       + "Qualifiers:\n"
	       + " side=\"<\" | \">\""
	      );
     }
   (x, mu, sigma) = ();
   variable side = qualifier ("side", NULL);

   variable n = length (x);
   variable stat = (mean(x)-mu)/(sigma/sqrt(n));
   if (tref != NULL) @tref = stat;

   return map_cdf_to_pval (normal_cdf(stat) ;; __qualifiers);
}

define f_test2 ()
{
   variable x, y;
   variable tref = NULL;

   if (_NARGS == 2)
     (x,y) = ();
   else if (_NARGS == 3)
     (x,y,tref) = ();
   else
     {
	usage ("p = f_test2 (X, Y [,&t] [; qualifiers]);  %% 2 sample F-test\n"
	       + "Qualifiers:\n"
	       + " side=\"<\" | \">\""
	      );
     }
   variable side = qualifier ("side", NULL);

   variable v1 = stddev(x)^2;
   variable v2 = stddev(y)^2;
   variable n1 = length(x)-1;
   variable n2 = length(y)-1;
   variable swap = 0;
   if (v1 < v2)
     {
	swap = 1;
	(v1, v2) = (v2, v1);
	(n1, n2) = (n2, n1);
     }
   variable stat = (v1/v2);

   variable pval = f_cdf (stat, n1, n2);
   if (side == ">")
     {
	if (swap)
	  pval = 1.0 - pval;
     }
   else if (side == "<")
     {
	ifnot (swap)
	  pval = 1.0 - pval;
     }
   else
     pval = 2.0 * _min (1.0-pval, pval);

   if (tref != NULL) @tref = stat;
   return pval;
}

define spearman_r ()
{
   variable w_ref = NULL;
   if (_NARGS == 3)
     w_ref = ();
   else if (_NARGS != 2)
     {
	usage ("p = %s (X1, Y1 [,&r]);  %% Spearman's rank correlation",
	       _function_name ());
     }
   variable x, y;
   (x, y) = ();
   variable n = length (y), m = length (x);

   variable gties_x, gties_y;
   variable rx = compute_rank (x, &mean, &gties_x);
   variable ry = compute_rank (y, &mean, &gties_y);

   variable d = sum ((rx-ry)^2);
   variable cx = sum(gties_x*(gties_x*gties_x-1.0));
   variable cy = sum(gties_y*(gties_y*gties_y-1.0));

   variable den = double(n) * (n+1.0) * (n-1.0);

   variable r = (1.0 - 6.0*(d+(cx+cy)/12.0)/den)
     / sqrt((1.0-cx/den)*(1.0-cy/den));
   if (w_ref != NULL)
     @w_ref = r;

   variable t = r * sqrt ((n-2)/(1-r*r));

   return map_cdf_to_pval (student_t_cdf(t,n-2) ;; __qualifiers);
}

define kendall_tau ()
{
   variable w_ref = NULL;
   if (_NARGS == 3)
     w_ref = ();
   else if (_NARGS != 2)
     {
	usage ("p = %s (X1, Y1 [,&r]);  %% Kendall's tau correlation",
	       _function_name ());
     }

   variable x, y;
   (x, y) = ();
   variable n = length (x);
   if (n != length (y))
     throw InvalidParmError, "Arrays must be the same length for kendall_tau";

   variable i;
   variable nx = 0.0, ny = 0.0, diff=0.0;
   _for i (0, n-2, 1)
     {
	variable j = [i+1:n-1];
	variable dx = sign(x[i] - x[j]);
	variable dy = sign(y[i] - y[j]);
	nx += sum(abs(dx));
	ny += sum(abs(dy));
	diff += sum (dx*dy);	       %  concordant - discordant
     }

   variable tau = diff/(sqrt(nx)*sqrt(ny));

   if (w_ref != NULL)
     @w_ref = tau;

   variable sigma = sqrt((4.0*n+10.0)/(9.0*n*(n-1)));
   return map_cdf_to_pval (normal_cdf(tau/sigma) ;; __qualifiers);
}

define pearson_r ()
{
   variable w_ref = NULL;
   if (_NARGS == 3)
     w_ref = ();
   else if (_NARGS != 2)
     {
	usage ("p = %s (X1, Y1 [,&r] [; qualifiers]);  %% Pearson's r correlation\n", +
	       "Qualifiers:\n" +
	       " side=\"<\" | \">\"",
	       _function_name ());
     }

   variable x, y;
   (x, y) = ();
   variable n = length(x);
   % Note: covariance handles the 1/(N-1) normalization factor
   variable r = covariance (x, y)[0,1]/(stddev(x)*stddev(y));
   if (w_ref != NULL)
     @w_ref = r;

   % This is meaningful only for gaussian distributions
   variable df = length(x)-2;
   r = sqrt(df)*r/sqrt(1-r*r);
   return map_cdf_to_pval (student_t_cdf (r, df) ;; __qualifiers);
}

define correlation ()
{
   if (_NARGS != 2)
     usage ("c = correlation (X, Y);");
   variable x, y; (x,y) = ();
   variable n = length(x);
   if (n != length(y))
     throw InvalidParmError, "Arrays must be the same length";
   variable mx = mean(x), sx = stddev(x), my = mean(y), sy = stddev(y);
   return sum ((x-mx)*(y-my))/((n-1)*sx*sy);
}

provide ("stats");
