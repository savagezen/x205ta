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

#ifndef GEOM_H
#define GEOM_H

#include <dal/dal.h>

#include "gauge.h"

struct reiserfs_geom {
	dal_t *dal;
	blk_t start, end;
};

typedef struct reiserfs_geom reiserfs_geom_t;

extern reiserfs_geom_t *reiserfs_geom_create(dal_t *dal, blk_t start,
					     blk_t end);

extern int reiserfs_geom_init(reiserfs_geom_t *geom, dal_t *dal,
			      blk_t start, blk_t end);

extern void reiserfs_geom_free(reiserfs_geom_t *geom);    

extern int reiserfs_geom_fill(reiserfs_geom_t *geom, char c,
			      reiserfs_gauge_t *gauge);

extern blk_t reiserfs_geom_relocate(reiserfs_fs_t *dst_fs,
				    reiserfs_geom_t *dst_geom, 
				    reiserfs_fs_t *src_fs,
				    reiserfs_geom_t *src_geom,
				    reiserfs_gauge_t *gauge);

extern int reiserfs_geom_test_inside(reiserfs_geom_t *geom,
				     blk_t blk);

extern int reiserfs_geom_test_overlap(reiserfs_geom_t *geom1,
				      reiserfs_geom_t *geom2);

extern blk_t reiserfs_geom_len(reiserfs_geom_t *geom);

#endif

