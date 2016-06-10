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

#ifndef FILE_H
#define FILE_H

#include "filesystem.h"
#include "path.h"

#define MAX_DIRECT_ITEM_LEN(blocksize)					\
	((blocksize) - BLKH_SIZE - 2*IH_SIZE - SD_V1_SIZE - sizeof(uint32_t))

struct reiserfs_file {
	reiserfs_object_t *essence;
    
	uint32_t offset_it;
	uint64_t offset_dt;
    
	uint64_t size;
	uint64_t offset;
};

typedef struct reiserfs_file reiserfs_file_t;

extern reiserfs_file_t *reiserfs_file_open(reiserfs_fs_t *fs,
					   const char *name, 
					   int mode);

extern reiserfs_file_t *reiserfs_link_open(reiserfs_fs_t *fs,
					   const char *name, 
					   int mode);

extern void reiserfs_file_close(reiserfs_file_t *file);

extern uint64_t reiserfs_file_read(reiserfs_file_t *file,
				   void *buffer, uint64_t size);

extern uint64_t reiserfs_file_size(reiserfs_file_t *file);
extern uint64_t reiserfs_file_offset(reiserfs_file_t *file);
extern int reiserfs_file_seek(reiserfs_file_t *file, uint64_t offset);

extern int reiserfs_file_rewind(reiserfs_file_t *file);
extern int reiserfs_file_stat(reiserfs_file_t *file, struct stat *stat);
extern uint32_t reiserfs_file_inode(reiserfs_file_t *file);

#endif

