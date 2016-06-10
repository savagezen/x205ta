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

#ifndef REISERFS_H
#define REISERFS_H

#ifdef __cplusplus
extern "C" {
#endif

#if !defined(__GNUC__) && (defined(__sparc__) || defined(__sparc_v9__))
# include <sys/int_types.h>
#else
# include <stdint.h>
#endif

#include "block.h"
#include "bitmap.h"
#include "journal.h"
#include "key.h"
#include "endian.h"
#include "filesystem.h"
#include "tree.h"
#include "tools.h"
#include "exception.h"
#include "geom.h"
#include "object.h"
#include "gauge.h"
#include "path.h"
#include "dir.h"
#include "file.h"
#include "core.h"

extern int libreiserfs_get_max_interface_version(void);
extern int libreiserfs_get_min_interface_version(void);
extern const char *libreiserfs_get_version(void);

extern void* libreiserfs_malloc(size_t size);
extern void *libreiserfs_calloc(size_t size, char c);
extern int libreiserfs_realloc(void** ptr, size_t size);
extern void libreiserfs_free(void* ptr);

#ifdef __cplusplus
}
#endif

#endif

