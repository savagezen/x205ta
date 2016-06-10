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

#ifndef BLOCK_H
#define BLOCK_H

#include <dal/dal.h>

#define MAX_CHILD_SIZE(blocksize) 	  ((blocksize) - BLKH_SIZE)
#define MAX_FREE_SPACE(blocksize) 	  MAX_CHILD_SIZE(blocksize)

#define GET_BLOCK_HEAD(bh)  		  ((reiserfs_block_head_t *)((bh)->data))

struct reiserfs_block_head {       
	uint16_t blk_level;
	uint16_t blk_nr_item;
	uint16_t blk_free_space;
	uint16_t blk_reserved[9];
};

typedef struct reiserfs_block_head reiserfs_block_head_t;

#define BLKH_SIZE 			  (sizeof(reiserfs_block_head_t))

#define get_blkh_level(blkh) 		  get_le16 (blkh, blk_level)
#define set_blkh_level(blkh, val) 	  set_le16 (blkh, blk_level, val)

#define get_blkh_nr_items(blkh)		  get_le16 (blkh, blk_nr_item)
#define set_blkh_nr_items(blkh, val) 	  set_le16 (blkh, blk_nr_item, val)

#define get_blkh_free_space(blkh) 	  get_le16 (blkh, blk_free_space)
#define set_blkh_free_space(blkh, val) 	  set_le16 (blkh, blk_free_space, val)

#define is_leaf_block(blkh)						\
	(get_blkh_level ((reiserfs_block_head_t *)(blkh)) == LEAF_LEVEL)
    
#define is_internal_block(blkh)						\
	((get_blkh_level (((reiserfs_block_head_t *)(blkh))) > LEAF_LEVEL) && \
	 (get_blkh_level (((reiserfs_block_head_t *)(blkh))) <= MAX_HEIGHT))

#define reiserfs_block_reading_failed(blk, action)			\
	do {								\
		libreiserfs_exception_throw(EXCEPTION_ERROR, EXCEPTION_CANCEL, \
					    _("Reading block %lu failed."), blk); \
		action;							\
	} while (0)

#define reiserfs_block_writing_failed(blk, action)			\
	do {								\
		libreiserfs_exception_throw(EXCEPTION_ERROR, EXCEPTION_CANCEL, \
					    _("Writing block %lu failed."), blk); \
		action;							\
	} while (0)

struct reiserfs_block {
	dal_t *dal;
	char *data;
	uint64_t address;
};

typedef struct reiserfs_block reiserfs_block_t;

extern reiserfs_block_t *reiserfs_block_alloc(dal_t *dal, blk_t blk, char c);
extern reiserfs_block_t *reiserfs_block_realloc(reiserfs_block_t *block, blk_t blk);

extern reiserfs_block_t *reiserfs_block_alloc_with_copy(dal_t *dal, blk_t blk,
							void *data);

extern dal_t *reiserfs_block_dal(reiserfs_block_t *block);
extern void reiserfs_block_set_dal(reiserfs_block_t *block, dal_t *dal);

extern blk_t reiserfs_block_location(reiserfs_block_t *block);
extern void reiserfs_block_set_location(reiserfs_block_t *block, blk_t blk);

extern reiserfs_block_t *reiserfs_block_read(dal_t *dal, blk_t blk);
extern int reiserfs_block_write(dal_t *dal, reiserfs_block_t *block);

extern void reiserfs_block_free(reiserfs_block_t *block);

#endif

