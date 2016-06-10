/*
  libdal - a device abstraction library
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

#ifndef DAL_H
#define DAL_H

#include <sys/stat.h>
#include <sys/types.h>

typedef unsigned long blk_t;

struct dal_ops;

struct dal {
	struct dal_ops *ops;
	const void *dev;
	size_t blocksize;
	int flags;
	void *data;
	blk_t len;
};

typedef struct dal dal_t;

struct dal_ops {
	blk_t (*len)(dal_t *);
	int (*read)(dal_t *, void *, blk_t, blk_t);
	int (*write)(dal_t *, void *, blk_t, blk_t);
	int (*sync)(dal_t *);
	int (*flags)(dal_t *);
	int (*equals)(dal_t *, dal_t *);
	int (*stat)(dal_t *, struct stat *);
	dev_t (*dev)(dal_t *);
};

extern blk_t dal_len(dal_t *dal);
extern int dal_sync(dal_t *dal);
extern int dal_flags(dal_t *dal);
extern dev_t dal_dev(dal_t *dal);
extern void dal_realize(dal_t *dal);

extern void dal_free(dal_t *dal);
extern void libdal_free(void *ptr);
extern size_t dal_block_size(dal_t *dal);

extern void *libdal_malloc(size_t size);
extern int libdal_realloc(void **old, size_t size);

extern dal_t *dal_create(struct dal_ops *ops, const void *dev,
			 size_t blocksize, int flags, void *data);

extern int dal_set_block_size(dal_t *dal, size_t blocksize);

extern int dal_equals(dal_t *dal1, dal_t *dal2);
extern int dal_stat(dal_t *dal, struct stat *st);

extern int dal_read(dal_t *dal, void *buff,
		    blk_t block, blk_t count);

extern int dal_write(dal_t *dal, void *buff,
		     blk_t block, blk_t count);

#endif
