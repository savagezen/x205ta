/*
 * Copyright (C) 2004-2008  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * Copyright (C) 2007   Intel Corporation. All rights reserved.
 * November, 2007 - additions for Create, Delete, Rebuild & Raid 10. 
 * 
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef _LIB_CONTEXT_H_
#define _LIB_CONTEXT_H_

#include <dmraid/list.h>
#include <dmraid/locking.h>
#include <dmraid/misc.h>

enum lc_lists {
	LC_FORMATS = 0,		/* Metadata format handlers. */
	LC_DISK_INFOS,		/* Disks discovered. */
	LC_RAID_DEVS,		/* Raid devices discovered. */
	LC_RAID_SETS,		/* Raid sets grouped. */
	/* Add new lists below here ! */
	LC_LISTS_SIZE,		/* Must be the last enumerator. */
};

/* List access macros. */
#define	LC_FMT(lc)	(lc_list((lc), LC_FORMATS))
#define	LC_DI(lc)	(lc_list((lc), LC_DISK_INFOS))
#define	LC_RD(lc)	(lc_list((lc), LC_RAID_DEVS))
#define	LC_RS(lc)	(lc_list((lc), LC_RAID_SETS))

enum lc_options {
	LC_COLUMN = 0,
	LC_DEBUG,
	LC_DUMP,
	LC_FORMAT,
	LC_GROUP,
	LC_SETS,
	LC_TEST,
	LC_VERBOSE,
	LC_IGNORELOCKING,
	LC_SEPARATOR,
	LC_DEVICES,
	LC_PARTCHAR,
	LC_CREATE,
	LC_REBUILD_SET,
	LC_REBUILD_DISK,
	LC_HOT_SPARE_SET,
	LC_IGNOREMONITORING,	/* Add new options below this one ! */
	LC_OPTIONS_SIZE,	/* Must be the last enumerator. */
};

/* Options access macros. */
/* Return option counter. */
#define	OPT_COLUMN(lc)		(lc_opt(lc, LC_COLUMN))
#define	OPT_CREATE(lc)		(lc_opt(lc, LC_CREATE))
#define	OPT_DEBUG(lc)		(lc_opt(lc, LC_DEBUG))
#define	OPT_DEVICES(lc)		(lc_opt(lc, LC_DEVICES))
#define	OPT_DUMP(lc)		(lc_opt(lc, LC_DUMP))
#define	OPT_FORMAT(lc)		(lc_opt(lc, LC_FORMAT))
#define	OPT_GROUP(lc)		(lc_opt(lc, LC_GROUP))
#define OPT_HOT_SPARE_SET(lc)	(lc_opt(lc, LC_HOT_SPARE_SET))
#define	OPT_IGNORELOCKING(lc)	(lc_opt(lc, LC_IGNORELOCKING))
#define OPT_IGNOREMONITORING(lc) (lc_opt(lc, LC_IGNOREMONITORING))
#define	OPT_PARTCHAR(lc)	(lc_opt(lc, LC_PARTCHAR))
#define OPT_REBUILD_DISK(lc)	(lc_opt(lc, LC_REBUILD_DISK))
#define	OPT_SEPARATOR(lc)	(lc_opt(lc, LC_SEPARATOR))
#define	OPT_SETS(lc)		(lc_opt(lc, LC_SETS))
#define	OPT_TEST(lc)		(lc_opt(lc, LC_TEST))
#define	OPT_VERBOSE(lc)		(lc_opt(lc, LC_VERBOSE))

/* Return option value. */
#define	OPT_STR(lc, o)		(lc->options[o].arg.str)
#define	OPT_STR_COLUMN(lc)	OPT_STR(lc, LC_COLUMN)
#define	OPT_STR_FORMAT(lc)	OPT_STR(lc, LC_FORMAT)
#define	OPT_STR_SEPARATOR(lc)	OPT_STR(lc, LC_SEPARATOR)
#define	OPT_STR_PARTCHAR(lc)	OPT_STR(lc, LC_PARTCHAR)
#define OPT_STR_HOT_SPARE_SET(lc)	OPT_STR(lc, LC_HOT_SPARE_SET)
#define OPT_STR_REBUILD_DISK(lc)	OPT_STR(lc, LC_REBUILD_DISK)

struct lib_version {
	const char *text;
	const char *date;
	struct {
		unsigned int major;
		unsigned int minor;
		unsigned int sub_minor;
		const char *suffix;
	} v;
};

struct lib_options {
	int opt;
	union {
		const char *str;
		uint64_t u64;
		uint64_t u32;
	} arg;
};

struct lib_context {
	struct lib_version version;
	char *cmd;

	/* Option counters used throughout the library. */
	struct lib_options options[LC_OPTIONS_SIZE];

	/*
	 * Lists for:
	 *
	 *      o metadata format handlers the library supports
	 *      o block devices discovered
	 *      o RAID devices discovered
	 *      o RAID sets grouped
	 */
	struct list_head lists[LC_LISTS_SIZE];

	char *locking_name;	/* Locking mechanism selector. */
	struct locking *lock;	/* Resource locking. */

	mode_t mode;		/* File/directrory create modes. */

	struct {
		const char *error;	/* For error mappings. */
	} path;
};


/* Options actions dmraid performs. */
enum action {
	UNDEF = 0x0,
	ACTIVATE = 0x1,
	DEACTIVATE = 0x2,
	FORMAT = 0x4,
	BLOCK_DEVICES = 0x8,
	COLUMN = 0x10,
	DBG = 0x20,
	DUMP = 0x40,
	DMERASE = 0x80,
	GROUP = 0x100,
	HELP = 0x200,
	LIST_FORMATS = 0x400,
#  ifdef	DMRAID_NATIVE_LOG
	NATIVE_LOG = 0x800,
#  endif
	NOPARTITIONS = 0x1000,
	RAID_DEVICES = 0x2000,
	RAID_SETS = 0x4000,
	TEST = 0x8000,
	VERBOSE = 0x10000,
	ACTIVE = 0x20000,
	INACTIVE = 0x40000,
	SEPARATOR = 0x80000,
	VERSION = 0x100000,
	IGNORELOCKING = 0x200000,
	DEL_SETS = 0x400000,
	CREATE = 0x800000,
	REBUILD = 0x1000000,
	SPARE = 0x2000000,
	MEDIA = 0x4000000,
	END_REBUILD = 0x8000000,
	GET_MEMBERS = 0x10000000,
	PARTCHAR = 0x20000000,
	RMPARTITIONS = 0x40000000,
	IGNOREMONITORING = 0x80000000,
};

/* Arguments allowed ? */
enum args {
	NO_ARGS,
	ARGS,
};

/* Define which metadata is needed before we can call post functions. */
enum metadata_need {
	M_NONE = 0x00,
	M_DEVICE = 0x01,
	M_RAID = 0x02,
	M_SET = 0x04,
};

enum id {
	ROOT,
	ANY_ID,
};

enum lock {
	LOCK,
	NO_LOCK,
};

/* 
 * Pre and Post functions to perform for an option.
 */
struct prepost {
	enum action action;
	enum metadata_need metadata;
	enum id id;
	enum lock lock;
	int (*pre) (int arg);
	int arg;
	int (*post) (struct lib_context * lc, int arg);
};




extern struct lib_context *alloc_lib_context(char **argv);
extern void free_lib_context(struct lib_context *lc);
extern int lc_opt(struct lib_context *lc, enum lc_options o);
const char *lc_opt_arg(struct lib_context *lc, enum lc_options o);
const char *lc_stralloc_opt(struct lib_context *lc, enum lc_options o,
			    char *arg);
const char *lc_strcat_opt(struct lib_context *lc, enum lc_options o,
			  char *arg, const char delim);
extern int lc_inc_opt(struct lib_context *lc, int o);
extern struct list_head *lc_list(struct lib_context *lc, int l);

extern const char *libdmraid_date(struct lib_context *lc);
extern const char *libdmraid_version(struct lib_context *lc);


#endif
