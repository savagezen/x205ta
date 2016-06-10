% Copyright (C) 2012-2014 John E. Davis
%
% This file is part of the S-Lang Library and may be distributed under the
% terms of the GNU General Public License.  See the file COPYING for
% more information.
%---------------------------------------------------------------------------
require ("arrayfuns");

private define user_sort_cmp (cd, i, j)
{
   variable list = cd.list;
   return (@cd.cmp) (list[i], list[j]);
}

private define default_sort_cmp (list, i, j)
{
   if (list[i] > list[j]) return 1;
   if (list[i] == list[j]) return 0;
   return -1;
}


define list_sort (list)
{
   variable dir = qualifier ("dir", 1);
   variable cmp = qualifier ("cmp");

   variable n = length (list);
   variable i;
   if (cmp == NULL)
     i = array_sort (list, &default_sort_cmp, n; dir=dir);
   else
     i = array_sort (struct {list=list, cmp=cmp}, &user_sort_cmp, n; dir=dir);

   variable inplace = qualifier ("inplace", 0);
   if (inplace == 0)
     return i;

   rearrange (list, i);
}

% Heap Implementation

private define heap_length (h)
{
   return length (h.list);
}

private define upheap (list, k, cmp)
{
   variable obj = list[k];
   variable k2 = (k-1)/2;
   while (k && (@cmp)(obj,list[k2]) > 0)
     {
	list[k] = list[k2];
	k = k2;
	k2 = (k-1)/2;
     }
   list[k] = obj;
}

private define downheap (list, k, cmp)
{
   variable obj = list[k];
   variable n = length(list), n2 = n/2;
   n--;
%           0
%       1       2
%   3     4    5     6
% 7  8   9 10 11 12 13 14 
   while (k < n2)
     {
	variable j = 2*k + 1;
	if ((j < n)
	    && ((@cmp)(list[j], list[j+1]) < 0))
	  j++;
	if ((@cmp)(obj, list[j]) >= 0)
	  break;
	list[k] = list[j];
	k = j;
     }
   list[k] = obj;
}


private define heap_add (h, obj)
{
   variable list = h.list;
   list_append (list, obj);
   upheap (list, length(list)-1, h.cmp);
}

private define heap_pop (h)
{
   variable list = h.list;
   variable obj = list[0];
   variable last = list_pop(list, -1);
   if (length (list))
     {
	list[0] = last;
	downheap (list, 0, h.cmp);
     }
   return obj;
}

private define heap_peek (h)
{
   return h.list[0];
}

private define default_heap_cmp (a, b)
{
   if (a > b) return 1;
   if (a < b) return -1;
   return 0;
}

private define default_heap_cmp_rev (a, b)
{
   if (a > b) return -1;
   if (a < b) return 1;
   return 0;
}


define heap_new ()
{
   if (_NARGS == 0)
     usage (`
h = new_heap (list; cmp=&cmpfun, dir=val);
len = h.length();
h.add (item);
top = h.remove();
top = h.replace (item);
`
	    );

   variable list = ();
   variable cmp = qualifier ("cmp");
   variable dir = qualifier ("dir", -1);

   % The conventional interpretation of a heap is that the largest
   % element is at the root, and smaller ones below.  For this reason,
   % dir=-1 (ascending order) is the default for sorting.
   list_sort (list; cmp=cmp, dir=dir, inplace);

   if (cmp == NULL)
     {
	cmp = (dir <= 0) ? &default_heap_cmp : &default_heap_cmp_rev;
     }

   variable h = struct
     {
	list = list,
	cmp = cmp,
	length = &heap_length,
	add = &heap_add,
	remove = &heap_pop,
	peek = &heap_peek,
     };
   return h;
}
