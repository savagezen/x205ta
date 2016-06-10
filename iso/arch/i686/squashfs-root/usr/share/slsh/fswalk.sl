% Functions to walk the file system
% Copyright (C) 2012-2014 John E. Davis
%
% This file is part of the S-Lang Library and may be distributed under the
% terms of the GNU General Public License.  See the file COPYING for
% more information.

private define process_dir (w, dir, dir_st);
private define process_dir (w, dir, dir_st)
{
   variable status;
   if (w.dir_method != NULL)
     {
	status = (@w.dir_method) (dir, dir_st, __push_list (w.dir_method_args));
	if (status <= 0)
	  return status;
     }

   foreach (listdir (dir))
     {
	variable file = ();
	file = path_concat (dir, file);
	variable st = (@w.stat_func)(file);
	if (st == NULL)
	  {
	     () = fprintf (stderr, "Unable to stat %s: %s\n", file, errno_string (errno));
	     continue;
	  }
	if (stat_is ("dir", st.st_mode))
	  {
	     status = process_dir (w, file, dir_st);
	     if (status < 0)
	       return status;

	     continue;
	  }

	if (w.file_method == NULL)
	  continue;
	status = (@w.file_method) (file, st, __push_list(w.file_method_args));
	if (status <= 0)
	  return status;
     }
   return 1;
}

private define fswalk (w, start)
{
   variable st = (@w.stat_func)(start);
   ifnot (stat_is ("dir", st.st_mode))
     {
	throw InvalidParmError, "fs_walk: $start is not a directory"$;
     }
   () = process_dir (w, start, st);
}

define fswalk_new ()
{
   if (_NARGS != 2)
     usage ("\
w = fswalk_new (dirfunc, filefunc [; qualifiers]);\n\
w.walk (topdir);\n\
\n\
Qualifiers:\n\
  dargs={args,...}     Additional arguments to be passed to dirfunc\n\
  fargs={args,...}     Additional arguments to be passed to dirfunc\n\
  followlinks[=0|1]    Indicates whethe or not symbolic links will be followed\n\
");

   variable dir_method, file_method;
   (dir_method, file_method) = ();

   variable dir_method_args = qualifier ("dargs", {});
   variable file_method_args = qualifier ("fargs", {});
   if (typeof (dir_method_args) != List_Type)
     dir_method_args = {dir_method_args};
   if (typeof (file_method_args) != List_Type)
     file_method_args = {file_method_args};
   variable followlinks
     = (qualifier_exists ("followlinks") && (0 != qualifier ("followlinks")));

   variable w = struct
     {
	walk = &fswalk,
	file_method = file_method,
	file_method_args = file_method_args,
	dir_method = dir_method,
	dir_method_args = dir_method_args,
	stat_func = (followlinks ? &stat_file : &lstat_file),
     };
   return w;
}
