% Copyright (C) 2012-2014 John E. Davis
%
% This file is part of the S-Lang Library and may be distributed under the
% terms of the GNU General Public License.  See the file COPYING for
% more information.
%---------------------------------------------------------------------------
define reverse (a)
{
#ifexists array_reverse
   a = @a;
   array_reverse (a);
   return a;
#else
   variable i = length (a);
   if (i <= 1)
     return a;

   i--;
   __tmp(a)[[i:0:-1]];
#endif
}

define shift (x, n)
{
   variable len = length(x);
   ifnot (len) return x;

   % allow n to be negative and large
   n = len + n mod len;
   return x[[n:n+len-1] mod len];
}

% This routine rearranges an array according to a permutation.  It
% modifies the indices of the permutation array while running, but
% preserves it upon return.  This code is based upon
% <http://gams.nist.gov/serve.cgi/ModuleComponent/11449/Source/ITL/DPPERM.f>.
define rearrange (a, indices)
{
   variable i, j, n = length (indices);

   if (__is_same (a, indices))
     throw InvalidParmError, "The array to be rearranged must not be the same as the permutation.";

   % Check the permutation and make it 1-based
   _for i (0, n-1, 1)
     {
	j = indices[i];
	if (j < 0) j = -(j+1);
	if ((0 <= j < n)
	    && (indices[j] >= 0))
	  indices[j] = -indices[j]-1;
	else
	  throw InvalidParmError, "Invalid permutation.";
     }

   _for i (0, n-1, 1)
     {
	if (indices[i] >= 0)
	  continue;

	j = i;
	variable j0 = j;
	variable tmp = a[j0];

	variable indices_j = indices[j];
	forever
	  {
	     j0 = j;
	     j = -indices_j-1;	       %  back to 0-based
	     indices[j0] = j;
	     indices_j = indices[j];
	     if (indices_j >= 0)
	       break;
	     a[j0] = a[j];
	  }
	a[j0] = tmp;
     }
}

$1 = path_concat (path_dirname (__FILE__), "help/arrayfuns.hlp");
if (NULL != stat_file ($1))
  add_doc_file ($1);

provide ("arrayfuns");
