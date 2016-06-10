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

#ifndef JOURNAL_H
#define JOURNAL_H

#include <dal/dal.h>

#include "block.h"
#include "gauge.h"
#include "filesystem.h"

#define JOURNAL_MIN_SIZE 			512
#define JOURNAL_MIN_TRANS 			256
#define JOURNAL_MAX_TRANS 			1024
#define JOURNAL_DEF_RATIO 			8
#define JOURNAL_MIN_RATIO 			2
#define JOURNAL_MAX_BATCH   			900
#define JOURNAL_NEED_TUNE 			0xffffffff

#define JOURNAL_MAX_COMMIT_AGE 			30 
#define JOURNAL_MAX_TRANS_AGE 			30

#define get_desc_header(bh) 			((reiserfs_journal_desc_t *)bh->data)
#define get_commit_header(bh) 			((reiserfs_journal_commit_t *)bh->data)

#define get_jp_start(jp) 			get_le32(jp, jp_start)
#define set_jp_start(jp, val)			set_le32(jp, jp_start, val)

#define get_jp_dev(jp) 				get_le32(jp, jp_dev)
#define set_jp_dev(jp, val) 			set_le32(jp, jp_dev, val)

#define get_jp_len(jp)				get_le32(jp, jp_len)
#define set_jp_len(jp, val) 			set_le32(jp, jp_len, val)

#define get_jp_max_trans_len(jp) 		get_le32(jp, jp_trans_max)
#define set_jp_max_trans_len(jp, val)	        set_le32(jp, jp_trans_max, val)

#define get_jp_magic(jp) 			get_le32(jp, jp_magic)
#define set_jp_magic(jp,val) 			set_le32(jp, jp_magic, val)

#define get_jp_max_batch(jp) 			get_le32(jp, jp_max_batch)
#define set_jp_max_batch(jp,val)		set_le32(jp, jp_max_batch, val)

#define get_jp_max_commit_age(jp) 		get_le32(jp, jp_max_commit_age)
#define set_jp_max_commit_age(jp, val) 	        set_le32(jp, jp_max_commit_age, val)

#define get_jp_max_trans_age(jp) 		get_le32(jp, jp_max_trans_age)
#define set_jp_max_trans_age(jp,val) 	        set_le32(jp, jp_max_trans_age, val)

#define get_jh_mount_id(jh) 			get_le32(jh, jh_mount_id)
#define set_jh_mount_id(jh, val)		set_le32(jh, jh_mount_id, val)

#define get_jh_last_flushed(jh) 		get_le32(jh, jh_last_flush_trans_id)
#define set_jh_last_flushed(jh, val) 	        set_le32(jh, jh_last_flush_trans_id, val)

#define get_jh_replay_offset(jh) 		get_le32(jh, jh_first_unflushed_offset)
#define set_jh_replay_offset(jh, val) 	        set_le32(jh, jh_first_unflushed_offset, val)

#define get_jd_magic(bh) 			(bh->data + bh->b_size - 12)
	
#define get_jd_desc_trans_id(bh) 		get_le32(get_desc_header(bh), jd_trans_id)
#define set_jd_desc_trans_id(bh, val)	        set_le32(get_desc_header(bh), jd_trans_id,val)
	
#define get_jd_desc_trans_len(bh) 		get_le32(get_desc_header(bh), jd_len)
#define set_jd_desc_trans_len(bh, val) 	        set_le32(get_desc_header(bh), jd_len, val)

#define get_jd_desc_mount_id(bh) 		get_le32(get_desc_header(bh), jd_mount_id)
#define set_jd_desc_mount_id(bh, val) 	        set_le32(get_desc_header(bh), jd_mount_id,val)

#define get_jc_commit_trans_len(bh) 	        get_le32(get_commit_header(bh), jc_len)
#define set_jc_commit_trans_len(bh,val)	        set_le32(get_commit_header(bh), jc_len,val)

#define get_jc_commit_trans_id(bh) 		get_le32(get_commit_header(bh), jc_trans_id)
#define set_jc_commit_trans_id(bh, val)         set_le32(get_commit_header(bh), jc_trans_id,val)

#define journal_trans_half(blocksize)					\
	((blocksize - sizeof(reiserfs_journal_desc_t) +			\
	  sizeof(uint32_t) - 12) / sizeof (uint32_t))

extern reiserfs_journal_t *reiserfs_jr_open(dal_t *dal, blk_t start,
					    blk_t len,  int relocated);

extern reiserfs_journal_t *reiserfs_jr_create(dal_t *dal, blk_t start, blk_t len, 
					      blk_t max_trans, int relocated,
					      reiserfs_gauge_t *gauge);

extern void reiserfs_jr_close(reiserfs_journal_t *jr);
extern int reiserfs_jr_sync(dal_t *dal, reiserfs_journal_t *jr);

uint32_t reiserfs_jr_max_trans(blk_t max_trans, blk_t len, size_t blocksize);
extern blk_t reiserfs_jr_max_len(dal_t *dal, blk_t start, int relocated);

extern void reiserfs_jr_params_update(reiserfs_journal_params_t *params, 
				      blk_t start, blk_t len, blk_t max_trans,
				      uint32_t dev, size_t blocksize);

extern int reiserfs_jr_params_check(dal_t *dal, blk_t start, blk_t len, 
				    int relocated);

extern blk_t reiserfs_jr_boundary_transactions(dal_t *dal, reiserfs_journal_t *jr, 
					       reiserfs_journal_trans_t *oldest,
					       reiserfs_journal_trans_t *newest, 
					       reiserfs_gauge_t *gauge);

#endif

