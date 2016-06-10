/*
 * Copyright (C) 2004-2008  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * Copyright (C) 2007, 2009   Intel Corporation. All rights reserved.
 * November, 2007 - additions for Create, Delete, Rebuild & Raid 10. 
 * April, 2009 - dmreg.h file included
 *
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef _DMRAID_H_
#define _DMRAID_H_

#include <stdint.h>
#include <stdlib.h>
#include <sys/types.h>

/* FIXME: avoid more library internals. */
#include <dmraid/lib_context.h>
#include <dmraid/display.h>
#include <dmraid/format.h>
#include <dmraid/metadata.h>
#include <dmraid/reconfig.h>
#include <dmraid/dmreg.h>

/*
 * Retrieve version identifiers.
 */
extern int dm_version(struct lib_context *lc, char *version, size_t size);

/*
 * Dealing with formats.
 */
extern int check_valid_format(struct lib_context *lc, char *fmt);

/*
 * Dealing with devices.
 */
extern int discover_devices(struct lib_context *lc, char **devnodes);

/*
 * Dealing with RAID sets.
 */
extern char *libdmraid_make_table(struct lib_context *lc, struct raid_set *rs);

enum activate_type {
	A_ACTIVATE,
	A_DEACTIVATE,
	A_RELOAD,
};

extern int change_set(struct lib_context *lc, enum activate_type what,
		      void *rs);

/*
 * Memory allocation
 */
#ifdef	DEBUG_MALLOC

extern void *_dbg_malloc(size_t size, struct lib_context *lc,
			 const char *who, unsigned int line);
extern void *_dbg_realloc(void *ptr, size_t size, struct lib_context *lc,
			  const char *who, unsigned int line);
extern void *_dbg_strdup(const void *ptr, struct lib_context *lc,
			 const char *who, unsigned int line);
extern void _dbg_free(void *ptr, struct lib_context *lc,
		      const char *who, unsigned int line);

#define	dbg_malloc(size)	_dbg_malloc((size), lc, __func__, __LINE__)
#define	dbg_realloc(ptr, size)	_dbg_realloc((ptr), (size), lc, \
					     __func__, __LINE__)
#define	dbg_strdup(ptr)		_dbg_strdup((ptr), lc, __func__, __LINE__)
#define	dbg_strndup(ptr, len)	_dbg_strndup((ptr), len, lc, __func__, __LINE__)
#define	dbg_free(ptr)		_dbg_free((ptr), lc, __func__, __LINE__)

#else

extern void *_dbg_malloc(size_t size);
extern void *_dbg_realloc(void *ptr, size_t size);
extern void *_dbg_strdup(const void *ptr);
extern void *_dbg_strndup(const void *ptr, size_t len);
extern void _dbg_free(void *ptr);

#define	dbg_malloc	_dbg_malloc
#define	dbg_realloc	_dbg_realloc
#define	dbg_strdup	_dbg_strdup
#define	dbg_strndup	_dbg_strndup
#define	dbg_free	_dbg_free

#endif /* #ifdef DEBUG_MALLOC */

#endif
