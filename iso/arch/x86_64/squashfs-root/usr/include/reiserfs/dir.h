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

#ifndef DIR_H
#define DIR_H

#include "path.h"

struct reiserfs_de_head {
	uint32_t de_offset;
	uint32_t de_dir_id;
	uint32_t de_objectid;
	uint16_t de_location;
	uint16_t de_state;
} __attribute__ ((__packed__));

typedef struct reiserfs_de_head reiserfs_de_head_t;

#define EMPTY_DIR_V2_SIZE (DE_SIZE * 2 + ROUND_UP(strlen (".")) +	\
			   ROUND_UP(strlen ("..")))

#define EMPTY_DIR_V1_SIZE 			(DE_SIZE * 2 + 3)

#define get_de_offset(de) 			get_le32(de, de_offset)
#define set_de_offset(de, val)		set_le32(de, de_offset, val)

#define get_de_dirid(de) 			get_le32(de, de_dir_id)
#define set_de_dirid(de, val)		set_le32(de, de_dir_id, val)

#define get_de_objectid(de) 		get_le32(de, de_objectid)
#define set_de_objectid(de, val) 	set_le32(de, de_objectid, val)

#define get_de_location(de) 		get_le16(de, de_location)
#define set_de_location(de, val) 	set_le16(de, de_location, val)

#define get_de_state(de) 			get_le16(de, de_state)
#define set_de_state(de, val) 		set_le16(de, de_state, val)

#define DE_VISIBLE 					2
	
#define mark_de_visible(de)					\
	reiserfs_tools_set_bit(DE_VISIBLE, &((de)->de_state))
	
#define is_de_visible(de)					\
	reiserfs_tools_test_bit(DE_VISIBLE, &((de)->de_state))
	
#define MAX_NAME_LEN(blocksize)				\
	(blocksize - BLKH_SIZE - IH_SIZE - DE_SIZE)

struct reiserfs_dir {
	reiserfs_object_t *essence;
    
	int32_t local;
	uint32_t offset;
};

typedef struct reiserfs_dir reiserfs_dir_t;

struct reiserfs_dir_entry {
	reiserfs_de_head_t de;
	char de_name[MAX_NAME_LEN(DEFAULT_BLOCK_SIZE)];
};

typedef struct reiserfs_dir_entry reiserfs_dir_entry_t;

extern void reiserfs_dir_close(reiserfs_dir_t *dir);
extern int reiserfs_dir_rewind(reiserfs_dir_t *dir);

extern int reiserfs_dir_seek(reiserfs_dir_t *dir, uint32_t offset);
extern reiserfs_dir_t *reiserfs_dir_open(reiserfs_fs_t *fs, const char *name);

extern uint32_t reiserfs_dir_offset(reiserfs_dir_t *dir);
extern int reiserfs_dir_read(reiserfs_dir_t *dir, reiserfs_dir_entry_t *entry);

extern int reiserfs_dir_find_key(reiserfs_dir_t *dir, uint32_t entry_hash, 
				 struct key *key);

extern int reiserfs_dir_stat(reiserfs_dir_t *dir, struct stat *stat);

extern int reiserfs_dir_entry_hidden(reiserfs_dir_entry_t *entry);

#endif

