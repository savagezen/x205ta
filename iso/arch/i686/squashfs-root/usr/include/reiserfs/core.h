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

#ifndef CORE_H
#define CORE_H

#include <dal/dal.h>

#include "endian.h"
#include "hashes.h"
#include "block.h"
#include "bitmap.h"
#include "journal.h"
#include "gauge.h"
#include "filesystem.h"

#define FS_CLEAN 				1
#define FS_DIRTY 				2

#define FS_CONSISTENT 				0
#define FS_CORRUPTED 				1

#define FS_SUPER_DIRTY	 			(1)
#define FS_BITMAP_DIRTY  			(1 << 1)
#define FS_JOURNAL_DIRTY 			(1 << 2)

#define is_super_dirty(fs) 			(FS_SUPER_DIRTY & fs->flags)
#define is_bitmap_dirty(fs) 			(FS_BITMAP_DIRTY & fs->flags)
#define is_journal_dirty(fs) 			(FS_JOURNAL_DIRTY & fs->flags)

#define mark_super_dirty(fs) 			(fs->flags |= FS_SUPER_DIRTY)
#define mark_bitmap_dirty(fs) 			(fs->flags |= FS_BITMAP_DIRTY)
#define mark_journal_dirty(fs) 			(fs->flags |= FS_JOURNAL_DIRTY)

#define mark_super_clean(fs) 			(fs->flags &= ~FS_SUPER_DIRTY)
#define mark_bitmap_clean(fs) 			(fs->flags &= ~FS_BITMAP_DIRTY)
#define mark_journal_clean(fs) 			(fs->flags &= ~FS_JOURNAL_DIRTY)

#define SUPER_V1_SIZE 				(sizeof(reiserfs_super_v1_t))
#define SUPER_V2_SIZE 				(sizeof(reiserfs_super_t))

#define get_sb_jp(sb) 				(&((sb)->s_v1.sb_journal))

#define get_sb_block_count(sb) 			get_le32(sb, s_v1.sb_block_count)
#define set_sb_block_count(sb, val) 		set_le32(sb, s_v1.sb_block_count, val)

#define get_sb_free_blocks(sb) 			get_le32(sb, s_v1.sb_free_blocks)
#define set_sb_free_blocks(sb, val) 		set_le32(sb, s_v1.sb_free_blocks, val)

#define get_sb_root_block(sb) 			get_le32(sb, s_v1.sb_root_block)
#define set_sb_root_block(sb, val) 		set_le32(sb, s_v1.sb_root_block, val)

#define get_sb_mount_id(sb) 			get_le32(sb, s_v1.sb_mountid)
#define set_sb_mount_id(sb, val)		set_le32(sb, s_v1.sb_mountid, val)

#define get_sb_block_size(sb) 			get_le16(sb, s_v1.sb_block_size)
#define set_sb_block_size(sb, val) 		set_le16(sb, s_v1.sb_block_size, val)

#define get_sb_oid_maxsize(sb) 			get_le16(sb, s_v1.sb_oid_maxsize)
#define set_sb_oid_maxsize(sb, val) 		set_le16(sb, s_v1.sb_oid_maxsize, val)

#define get_sb_oid_cursize(sb) 			get_le16(sb, s_v1.sb_oid_cursize)
#define set_sb_oid_cursize(sb, val) 		set_le16(sb, s_v1.sb_oid_cursize, val)

#define get_sb_umount_state(sb) 		get_le16(sb, s_v1.sb_umount_state)
#define set_sb_umount_state(sb, val) 		set_le16(sb, s_v1.sb_umount_state, val)

#define get_sb_fs_state(sb) 			get_le16(sb, s_v1.sb_fs_state)
#define set_sb_fs_state(sb, val) 		set_le16(sb, s_v1.sb_fs_state, val)

#define get_sb_hash_code(sb) 			get_le32(sb, s_v1.sb_hash_function_code)
#define set_sb_hash_code(sb, val) 		set_le32(sb, s_v1.sb_hash_function_code, val)

#define get_sb_tree_height(sb) 			get_le16(sb, s_v1.sb_tree_height)
#define set_sb_tree_height(sb, val) 		set_le16(sb, s_v1.sb_tree_height, val)

#define get_sb_bmap_nr(sb) 			get_le16(sb, s_v1.sb_bmap_nr)
#define set_sb_bmap_nr(sb, val) 		set_le16(sb, s_v1.sb_bmap_nr, val)

#define get_sb_format(sb) 			get_le16(sb, s_v1.sb_format)
#define set_sb_format(sb, val)			set_le16(sb, s_v1.sb_format, val)

#define get_sb_reserved_for_journal(sb)		get_le16(sb, s_v1.sb_reserved_for_journal)
#define set_sb_reserved_for_journal(sb,val)	set_le16(sb, s_v1.sb_reserved_for_journal,val)

#define get_sb_objectid_map(sb)						\
	((uint32_t *)((char *)(sb) +					\
		      (sb->s_v1.sb_format == FS_FORMAT_3_6 ?		\
		       SUPER_V2_SIZE : SUPER_V1_SIZE)))

extern int reiserfs_fs_clobber(dal_t *dal);
extern blk_t reiserfs_fs_probe(dal_t *dal);

extern int reiserfs_fs_clobber_skipped(dal_t *dal, reiserfs_gauge_t *gauge);
extern reiserfs_fs_t *reiserfs_fs_open(dal_t *host_dal, dal_t *journal_dal);
extern reiserfs_fs_t *reiserfs_fs_open_fast(dal_t *host_dal, dal_t *journal_dal);

extern reiserfs_fs_t *reiserfs_fs_create(dal_t *host_dal, dal_t *journal_dal, 
					 blk_t start, blk_t max_trans, blk_t len,
					 size_t blocksize, int format, 
					 reiserfs_hash_t hash, const char *label,
					 const char *uuid, blk_t fs_len, 
					 reiserfs_gauge_t *gauge);

extern int reiserfs_fs_sync(reiserfs_fs_t *fs);
extern void reiserfs_fs_close(reiserfs_fs_t *fs);

extern int reiserfs_fs_resize(reiserfs_fs_t *fs, blk_t fs_len,
			      reiserfs_gauge_t *gauge);

extern int reiserfs_fs_check(reiserfs_fs_t *fs, 
			     reiserfs_gauge_t *gauge);

extern reiserfs_fs_t *reiserfs_fs_copy(reiserfs_fs_t *src_fs, dal_t *dst_dal, 
				       reiserfs_gauge_t *gauge);

extern int reiserfs_fs_is_consistent(reiserfs_fs_t *fs);
extern int reiserfs_fs_is_resizeable(reiserfs_fs_t *fs);

extern int reiserfs_fs_format(reiserfs_fs_t *fs);
extern const char *reiserfs_fs_long_format(reiserfs_fs_t *fs);
extern const char *reiserfs_fs_long_format_str(int format);

extern const char *reiserfs_fs_short_format(reiserfs_fs_t *fs);
extern const char *reiserfs_fs_short_format_str(int format);
extern int reiserfs_fs_format_from_str(const char *format);

extern reiserfs_hash_t reiserfs_fs_hash(reiserfs_fs_t *fs);
extern const char *reiserfs_fs_hash_str(reiserfs_hash_t hash);
extern reiserfs_hash_t reiserfs_fs_hash_from_str(const char *hash);

extern int reiserfs_fs_state(reiserfs_fs_t *fs);
extern int reiserfs_fs_state_update(reiserfs_fs_t *fs, uint32_t state);
extern const char *reiserfs_fs_state_str(uint32_t state);

extern size_t reiserfs_fs_block_size(reiserfs_fs_t *fs);

extern blk_t reiserfs_fs_size(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_min_size(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_free_size(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_metadata_size(reiserfs_fs_t *fs);

extern reiserfs_hash_func_t reiserfs_fs_hash_func(reiserfs_hash_t hash_code);
extern uint32_t reiserfs_fs_hash_value(reiserfs_fs_t *fs, const char *name);

extern char *reiserfs_fs_label(reiserfs_fs_t *fs);
extern void reiserfs_fs_label_update(reiserfs_fs_t *fs, const char *label);
extern char *reiserfs_fs_uuid(reiserfs_fs_t *fs);
extern void reiserfs_fs_uuid_update(reiserfs_fs_t *fs, const char *uuid);

extern int reiserfs_fs_set_root(reiserfs_fs_t *fs, blk_t blk);

extern dal_t *reiserfs_fs_host_dal(reiserfs_fs_t *fs);
extern dal_t *reiserfs_fs_journal_dal(reiserfs_fs_t *fs);

extern blk_t reiserfs_fs_journal_size(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_journal_offset(reiserfs_fs_t *fs);
extern int reiserfs_fs_journal_opened (reiserfs_fs_t *fs);

#define reiserfs_fs_journal_relocated(fs) reiserfs_fs_journal_kind(fs)
#define reiserfs_fs_journal_standard(fs) (!reiserfs_fs_journal_kind(fs))

extern int reiserfs_fs_journal_kind(reiserfs_fs_t *fs);
extern const char *reiserfs_fs_journal_kind_str(int is_relocated);

extern int reiserfs_fs_journal_open(reiserfs_fs_t *fs);
extern int reiserfs_fs_journal_reopen(reiserfs_fs_t *fs, dal_t *journal_dal);

extern int reiserfs_fs_journal_create(reiserfs_fs_t *fs, blk_t start, 
				      blk_t len, blk_t max_trans,
				      reiserfs_gauge_t *gauge);

extern int reiserfs_fs_journal_recreate(reiserfs_fs_t *fs, dal_t *journal_dal, 
					blk_t start, blk_t len, blk_t max_trans,
					reiserfs_gauge_t *gauge);

extern int reiserfs_fs_journal_sync(reiserfs_fs_t *fs);
extern void reiserfs_fs_journal_close(reiserfs_fs_t *fs);
extern reiserfs_journal_t *reiserfs_fs_journal(reiserfs_fs_t *fs);

extern int reiserfs_fs_journal_tune(reiserfs_fs_t *fs, dal_t *journal_dal, 
				    blk_t start, blk_t len, blk_t max_trans,
				    reiserfs_gauge_t *gauge);

extern int reiserfs_fs_bitmap_opened(reiserfs_fs_t *fs);
extern void reiserfs_fs_bitmap_use_block(reiserfs_fs_t *fs, blk_t block);
extern void reiserfs_fs_bitmap_unuse_block(reiserfs_fs_t *fs, blk_t block);
extern int reiserfs_fs_bitmap_test_block(reiserfs_fs_t *fs, blk_t block);
extern blk_t reiserfs_fs_bitmap_find_free_block(reiserfs_fs_t *fs, 
						blk_t start);
extern blk_t reiserfs_fs_bitmap_calc_used(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_bitmap_calc_used(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_bitmap_used(reiserfs_fs_t *fs);
extern blk_t reiserfs_fs_bitmap_unused(reiserfs_fs_t *fs);
extern int reiserfs_fs_bitmap_check(reiserfs_fs_t *fs);
extern int reiserfs_fs_bitmap_open(reiserfs_fs_t *fs);
extern int reiserfs_fs_bitmap_create(reiserfs_fs_t *fs, size_t blocksize, 
				     blk_t fs_len);
extern int reiserfs_fs_bitmap_resize(reiserfs_fs_t *fs, blk_t fs_len);
extern int reiserfs_fs_bitmap_sync(reiserfs_fs_t *fs);
extern void reiserfs_fs_bitmap_close(reiserfs_fs_t *fs);
extern int reiserfs_fs_bitmap_reopen(reiserfs_fs_t *fs);
extern reiserfs_bitmap_t *reiserfs_fs_bitmap(reiserfs_fs_t *fs);

extern int reiserfs_fs_super_sync(reiserfs_fs_t *fs);
extern int reiserfs_fs_super_open(reiserfs_fs_t *fs);

extern int reiserfs_fs_super_create(reiserfs_fs_t *fs, int format, 
				    reiserfs_hash_t hash, const char *label,
				    const char *uuid, size_t blocksize, 
				    blk_t start, blk_t len, blk_t fs_len,
				    int relocated, reiserfs_gauge_t *gauge);

extern void reiserfs_fs_super_close(reiserfs_fs_t *fs);

extern reiserfs_super_t *reiserfs_fs_super(reiserfs_fs_t *fs);

extern int reiserfs_fs_tree_open(reiserfs_fs_t *fs);
extern int reiserfs_fs_tree_create(reiserfs_fs_t *fs);
extern void reiserfs_fs_tree_close(reiserfs_fs_t *fs);
extern void *reiserfs_fs_tree(reiserfs_fs_t *fs);

#endif

