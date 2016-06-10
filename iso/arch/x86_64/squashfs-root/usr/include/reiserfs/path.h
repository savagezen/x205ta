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

#ifndef PATH_H
#define PATH_H

#include "block.h"

struct reiserfs_path_node {
	struct reiserfs_path_node *parent;
    
	reiserfs_block_t *node;
	unsigned int pos;
};

typedef struct reiserfs_path_node reiserfs_path_node_t;

/* Tree path */
struct reiserfs_path {
	unsigned int length;
	unsigned int max_length;
	reiserfs_path_node_t **nodes;
};

typedef struct reiserfs_path reiserfs_path_t;

extern reiserfs_path_node_t *reiserfs_path_node_create(reiserfs_path_node_t *parent, 
						       reiserfs_block_t *node,
						       unsigned int pos);

extern void reiserfs_path_node_free(reiserfs_path_node_t *node);

extern reiserfs_path_node_t *reiserfs_path_at(reiserfs_path_t *path, 
					      unsigned int pos);
extern reiserfs_path_node_t *reiserfs_path_last(reiserfs_path_t *path);
extern void *reiserfs_path_last_item(reiserfs_path_t *path);
extern reiserfs_path_node_t *reiserfs_path_first(reiserfs_path_t *path);

extern void reiserfs_path_insert(reiserfs_path_t *path, 
				 unsigned int pos, reiserfs_path_node_t *node);
extern void reiserfs_path_remove(reiserfs_path_t *path, 
				 unsigned int pos);

extern void reiserfs_path_inc(reiserfs_path_t *path, 
			      reiserfs_path_node_t *node);

extern void reiserfs_path_dec(reiserfs_path_t *path);

extern reiserfs_path_t *reiserfs_path_create(unsigned int length);
extern void reiserfs_path_clear(reiserfs_path_t *path);
extern void reiserfs_path_free(reiserfs_path_t *path);
extern  reiserfs_path_node_t *reiserfs_path_pop(reiserfs_path_t *path);
extern int reiserfs_path_empty(reiserfs_path_t *path);

#endif
