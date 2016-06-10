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

#ifndef TOOLS_H
#define TOOLS_H

#define _ROUND_UP(x,n) (((x)+(n)-1u) & ~((n)-1u))
#define ROUND_UP(x) _ROUND_UP(x,8LL)

typedef int (*reiserfs_comp_func_t)(void *item1, void *item2);

extern inline int reiserfs_tools_set_bit (int nr, void *addr);
extern inline int reiserfs_tools_clear_bit (int nr, void *addr);
extern inline int reiserfs_tools_test_bit(int nr, const void *addr);

extern inline int reiserfs_tools_find_first_zero_bit (const void *vaddr,
						      unsigned size);

extern inline int reiserfs_tools_find_next_zero_bit (const void *vaddr,
						     unsigned size,
						     unsigned offset);

#define REISERFS_3_5_SUPER_SIGNATURE "ReIsErFs"
#define REISERFS_3_6_SUPER_SIGNATURE "ReIsEr2Fs"
#define REISERFS_JR_SUPER_SIGNATURE  "ReIsEr3Fs"

extern int reiserfs_tools_3_5_signature(const char *signature);
extern int reiserfs_tools_3_6_signature(const char *signature);
extern int reiserfs_tools_jr_signature(const char *signature);
extern int reiserfs_tools_any_signature(const char *signature);

extern int reiserfs_tools_power_of_two(unsigned long value);
extern uint32_t reiserfs_tools_random(void);

extern int reiserfs_tools_fast_search(void *needle, void *array,
				      int count, uint32_t width,
				      reiserfs_comp_func_t comp_func,
				      uint32_t *pos);

extern int reiserfs_tools_comp_generic(void *value1, void *value2);

#endif
