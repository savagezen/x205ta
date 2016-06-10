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

#ifndef FILESYSTEM_H
#define FILESYSTEM_H

#include <dal/dal.h>

#include "path.h"
#include "key.h"

#define FS_FORMAT_3_5				0
#define FS_FORMAT_3_6				2

#define FS_CLEAN 				1
#define FS_DIRTY 				2

#define FS_CONSISTENT 				0
#define FS_CORRUPTED 				1

#define DEFAULT_BLOCK_SIZE			4096
#define DEFAULT_SUPER_OFFSET			64*1024
#define DEFAULT_JOURNAL_SIZE_BS4096		8192
#define DEFAULT_JOURNAL_SIZE_BS1024		8125

typedef struct reiserfs_fs reiserfs_fs_t;

enum reiserfs_hash {
	TEA_HASH  = 1,
	YURA_HASH = 2,
	R5_HASH	  = 3
};

typedef enum reiserfs_hash reiserfs_hash_t;

/* Journal structures */
struct reiserfs_journal_params {
	uint32_t jp_start;
	uint32_t jp_dev;
	uint32_t jp_len;
	uint32_t jp_trans_max;
	uint32_t jp_magic;
	uint32_t jp_max_batch;
	uint32_t jp_max_commit_age;
	uint32_t jp_max_trans_age;
};

typedef struct reiserfs_journal_params reiserfs_journal_params_t;

struct reiserfs_journal_desc {
	uint32_t jd_trans_id;
	uint32_t jd_len;
	uint32_t jd_mount_id;
	uint32_t jd_realblock;
};

typedef struct reiserfs_journal_desc reiserfs_journal_desc_t;

struct reiserfs_journal_commit {
	uint32_t jc_trans_id;
	uint32_t jc_len;
	uint32_t jc_realblock;
};

typedef struct reiserfs_journal_commit reiserfs_journal_commit_t;

struct reiserfs_journal_trans {
	uint32_t jt_mount_id;
	uint32_t jt_trans_id;
	blk_t jt_desc_blocknr;
	blk_t jt_trans_len;
	blk_t jt_commit_blocknr;
	blk_t jt_next_trans_offset;
};

typedef struct reiserfs_journal_trans reiserfs_journal_trans_t;

struct reiserfs_journal {
	uint32_t jh_last_flush_trans_id;
	uint32_t jh_first_unflushed_offset;
	uint32_t jh_mount_id;
	
	reiserfs_journal_params_t jh_params;
};

typedef struct reiserfs_journal reiserfs_journal_t;

/* Superblock structures */
struct reiserfs_super_v1 {
	uint32_t sb_block_count;
	uint32_t sb_free_blocks;
	uint32_t sb_root_block;
	reiserfs_journal_params_t sb_journal;
	uint16_t sb_block_size;
	uint16_t sb_oid_maxsize;
	uint16_t sb_oid_cursize;
	uint16_t sb_umount_state;
	char sb_magic[10];
	uint16_t sb_fs_state;
	uint32_t sb_hash_function_code;
	uint16_t sb_tree_height;
	uint16_t sb_bmap_nr;
	uint16_t sb_format;
	uint16_t sb_reserved_for_journal;
} __attribute__ ((__packed__));

typedef struct reiserfs_super_v1 reiserfs_super_v1_t;

struct reiserfs_super {
	reiserfs_super_v1_t s_v1;
	uint32_t s_inode_generation; 
	uint32_t s_flags;
	char s_uuid[16];
	char s_label[16];
	char s_unused[88];
};

typedef struct reiserfs_super reiserfs_super_t;

/* Filesystem object (directory or file) */
struct reiserfs_object {
	reiserfs_fs_t *fs;
	reiserfs_path_t *path;
	struct stat stat;
	struct key key;
};

typedef struct reiserfs_object reiserfs_object_t;

/* Bitmap */
struct reiserfs_bitmap {
	blk_t bm_start;
	blk_t bm_blocks;
	blk_t bm_used_blocks;
	size_t bm_size;
	char *bm_map;
};

typedef struct reiserfs_bitmap reiserfs_bitmap_t;

/* Balanced tree */
struct reiserfs_tree {
	reiserfs_fs_t *fs;
};

typedef struct reiserfs_tree reiserfs_tree_t;

/* Filesystem structure */
struct reiserfs_fs {
	dal_t *host_dal;
	dal_t *journal_dal;
    
	reiserfs_tree_t *tree;
	reiserfs_super_t *super;
	reiserfs_bitmap_t *bitmap;
	reiserfs_journal_t *journal;
	
	blk_t super_blk;
	uint16_t flags;
};
#endif

