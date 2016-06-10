/*
  libreiserfs - a library for manipulating reiserfs partitions
  Copyright (C) 2001-2004 Yury Umanets <torque@ukrpost.net>.

  This program is free software; you can redistribute it and/or modify it under
  the terms of the GNU General Public License as published by the Free Software
  Foundation; either version 2 of the License, or (at your option) any later
  version.
                                                                                                 
  This program is distributed in the hope that it will be useful, but WITHOUT
  ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
  FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
  details.
                                                                                                 
  You should have received a copy of the GNU General Public License along with
  this program; if not, write to the Free Software Foundation, Inc., 59 Temple
  Place, Suite 330, Boston, MA 02111-1307 USA
*/

#ifndef HASHES_H
#define HASHES_H

#if !defined(__GNUC__) && (defined(__sparc__) || defined(__sparc_v9__))
# include <sys/int_types.h>
#else
# include <stdint.h>
#endif

#define GET_HASH_VALUE(offset) ((offset) & 0x7fffff80)

typedef uint32_t (*reiserfs_hash_func_t)(const signed char *, int);

extern uint32_t __tea_hash_func(const signed char *name, int len);
extern uint32_t __yura_hash_func(const signed char *name, int len);
extern uint32_t __r5_hash_func(const signed char *name, int len);

#endif

