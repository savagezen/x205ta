% This file not only provides access to the module, it also provides several
% other functions that are easier to implement in slang.  These include:
%
%   whist1d     : weighted 1-d histogram
%   whist2d     : weighted 2-d histogram
%   hist2d_rebin: Rebins a 2-d histogram
%
#ifeval _slang_version < 20000
if (current_namespace () != "")
  import ("histogram", current_namespace ());
else
#endif
 import ("histogram");

define whist1d ()
{
   variable func = NULL;
   variable rev = NULL;

   switch (_NARGS)
     {
      case 4:
	rev = ();
     }
     {
      case 5:
	(rev, func) = ();
     }
     {
	if (_NARGS != 3)
	  usage ("h = %s (pnts, weights, bin-edges [,rev-indices [,func]])", 
		 _function_name);
     }
   
   variable pnts, w, edges;
   (pnts, w, edges) = ();
   
   if (func == NULL)
     func = &sum;

   variable r;
   () = hist1d (pnts, edges, &r);
   
   variable n = length (edges);
   variable h = Double_Type [n];

   _for (0, n-1, 1)
     {
	variable i = ();
	h[i] = (@func) (w[r[i]]);
     }

   if (rev != NULL)
     @rev = r;
   
   return h;
}

define whist2d ()
{
   variable rev = NULL, func = NULL;
   switch (_NARGS)
     {
      case 6:
	rev = ();
     }
     {
      case 7:
	(rev, func) = ();
     }
     {
	if (_NARGS != 5)
	  usage ("img=%s(xpnts, ypnts, weights, xgrid, ygrid [,rev [,func]])",
		 _function_name ());
     }

   variable x, y, w, xgrid, ygrid;
   (x, y, w, xgrid, ygrid) = ();

   if (func == NULL)
     func = &sum;

   variable r; 
   () = hist2d (x, y, xgrid, ygrid, &r);

   variable nx = length (xgrid);
   variable ny = length (ygrid);
   variable img = Double_Type[nx, ny];
   _for (0, nx-1, 1)
     {
	variable i = ();
	_for (0, ny-1, 1)
	  {
	     variable j = ();
	     img[i,j] = (@func)(w[r[i,j]]);
	  }
     }

   if (rev != NULL)
     @rev = r;

   return img;
}

define hist2d_rebin ()
{
   if (_NARGS != 5)
     usage ("new_ijhist=%s(new_igrid,new_jgrid,old_igrid,old_jgrid,old_ijhist)",
	    _function_name);

   variable new_igrid, new_jgrid, old_igrid, old_jgrid, old_hist;
   (new_igrid, new_jgrid, old_igrid, old_jgrid, old_hist) = ();
   
   variable new_ilen = length (new_igrid);
   variable new_jlen = length (new_jgrid);
   variable old_ilen = length (old_igrid);
   variable old_jlen = length (old_jgrid);
   
   variable h_i = hist1d_rebin (new_jgrid, old_jgrid, old_hist[0,*]);
   variable type = _typeof (h_i);
   
   variable new_hist = @Array_Type (type, [old_ilen, new_jlen]);
   
   new_hist[0,*] = h_i;
   _for (1, old_ilen-1, 1)
     {
	variable i = ();
	new_hist[i,*] = hist1d_rebin (new_jgrid, old_jgrid, old_hist[i,*]);
     }
   old_hist = new_hist;
   new_hist = @Array_Type (type, [new_ilen, new_jlen]);
   
   _for (0, new_jlen-1, 1)
     {
	variable j = ();
	new_hist[*,j] = hist1d_rebin (new_igrid, old_igrid, old_hist[*,j]);
     }
   
   return new_hist;
}


#ifexists add_doc_file
$1 = path_concat (path_concat (path_dirname (__FILE__), "help"),
		  "histogram.hlp");
if (NULL != stat_file ($1))
  add_doc_file ($1);
#endif

provide ("histogram");
