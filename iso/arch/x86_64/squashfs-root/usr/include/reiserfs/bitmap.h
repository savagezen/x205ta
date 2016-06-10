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

#ifndef BITMAP_H
#define BITMAP_H

#include <dal/dal.h>

#include "block.h"
#include "filesystem.h"

extern void reiserfs_bm_use_block(reiserfs_bitmap_t *bm, blk_t blk);
extern void reiserfs_bm_unuse_block(reiserfs_bitmap_t *bm, blk_t blk);
extern int reiserfs_bitmap_test_block(reiserfs_bitmap_t *bm, blk_t blk);
extern blk_t reiserfs_bm_find_free_block(reiserfs_bitmap_t *bm, blk_t start);

extern blk_t reiserfs_bm_calc_used(reiserfs_bitmap_t *bm);
extern blk_t reiserfs_bm_calc_unused(reiserfs_bitmap_t *bm);

extern blk_t reiserfs_bm_used(reiserfs_bitmap_t *bm);
extern blk_t reiserfs_bm_unused(reiserfs_bitmap_t *bm);

extern blk_t reiserfs_bm_calc_used_in_area(reiserfs_bitmap_t *bm,
					   blk_t start, blk_t end);

extern blk_t reiserfs_bm_calc_unused_in_area(reiserfs_bitmap_t *bm, blk_t start, 
					     blk_t end);

extern int reiserfs_bm_check(reiserfs_bitmap_t *bm);

extern reiserfs_bitmap_t *reiserfs_bm_alloc(blk_t fs_len);

extern reiserfs_bitmap_t *reiserfs_bm_open (dal_t *dal, blk_t fs_len,
					    blk_t bm_start);

extern reiserfs_bitmap_t *reiserfs_bm_create(blk_t fs_len, blk_t bm_start, 
					     size_t blocksize);

extern int reiserfs_bm_resize(reiserfs_bitmap_t *bm, blk_t fs_len,
			      size_t blocksize);

extern blk_t reiserfs_bm_copy(reiserfs_bitmap_t *dst_bm,
			      reiserfs_bitmap_t *src_bm, 
			      blk_t fs_len, size_t blocksize);

extern reiserfs_bitmap_t *reiserfs_bm_clone(reiserfs_bitmap_t *src_bm);
extern int reiserfs_bm_sync(dal_t *dal, reiserfs_bitmap_t *bm);
extern void reiserfs_bm_close(reiserfs_bitmap_t *bm);
extern void reiserfs_bm_free(reiserfs_bitmap_t *bm);

extern reiserfs_bitmap_t *reiserfs_bm_reopen(dal_t *dal, reiserfs_bitmap_t *bm, 
					     blk_t fs_len);

extern char *reiserfs_bm_map(reiserfs_bitmap_t *bm);

#endif
