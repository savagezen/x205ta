/*
 * Copyright (C) 2004-2008  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * Copyright (C) 2007   Intel Corporation. All rights reserved.
 * November, 2007 - additions for Create, Delete, Rebuild & Raid 10. 
 * 
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef	_META_H_
#define	_META_H_

#include <dmraid/list.h>
#include <stdint.h>

/*
 * Unified RAID set types.
 */
enum type {
	t_undef = 0x01,
	t_group = 0x02,		/* To group subsets (eg, Intel Software RAID). */
	t_partition = 0x04,	/* FIXME: remove in favour of kpartx ? */
	t_spare = 0x08,
	t_linear = 0x10,
	t_raid0 = 0x20,
	t_raid1 = 0x40,
	/*
	 * Higher RAID types below not supported (yet)
	 * because of device-mapper constraints.
	 */
	t_raid4 = 0x80,
	t_raid5_ls = 0x100,
	t_raid5_rs = 0x200,
	t_raid5_la = 0x400,
	t_raid5_ra = 0x800,
	t_raid6 = 0x1000,
};

/* Check macros for types. */
#define	T_UNDEF(r)	((r)->type & t_undef)
#define	T_GROUP(r)	((r)->type & t_group)
#define	T_PARTITION(r)	((r)->type & t_partition)
#define	T_SPARE(r)	((r)->type & t_spare)
#define	T_LINEAR(r)	((r)->type & t_linear)
#define	T_RAID0(r)	((r)->type & t_raid0)
#define	T_RAID1(r)	((r)->type & t_raid1)
#define	T_RAID4(r)	((r)->type & t_raid4)
#define	T_RAID5(r)	(((r)->type & t_raid5_ls) || \
			((r)->type & t_raid5_rs) || \
			((r)->type & t_raid5_la) || \
			((r)->type & t_raid5_ra))
#define	T_RAID6(r)	((r)->type & t_raid6)


/* Types for count_devs(). */
enum count_type {
	ct_all = 0,
	ct_dev,
	ct_spare,
};

/*
 * Mapping struct for RAID type unification.
 *
 * Format handler allocates an array and inserts mappings
 * from format specific types to the unified ones above.
 */
struct types {
	unsigned int type;	/* Must be long enough for vendor definition. */
	enum type unified_type;
};

/* RAID disk/set status. */
enum status {
	s_undef = 0x01,
	s_broken = 0x02,	/* Completely broken (not accessible). */
	s_inconsistent = 0x04,	/* RAID disk/set inconsistent (needs
				   synchronization or reconfiguration). */
	/* FIXME: is s_nosync sufficient or do I need s_upgrade (eg, NVidia) */
	s_nosync = 0x08,	/* RAID disk/set *not* in sync
				   (needs synchronization). */
	s_ok = 0x10,		/* Fully operational. */
	s_setup = 0x20,		/* Only during RAID setup transition. */
	s_init = 0x40,		/* RAID set to be created */
	s_config = 0x80,	/* RAID set hasn't been configured */
};

/*
 * Mapping struct for RAID status unification.
 *
 * Format handler allocates an array and inserts mappings
 * from format specific status to the unified ones above.
 */
enum compare { AND, EQUAL };
struct states {
	unsigned int status;
	enum status unified_status;
};

/* Check macros for states. */
#define	S_UNDEF(status)		((status) & s_undef)
#define	S_BROKEN(status)	((status) & s_broken)
#define	S_INCONSISTENT(status)	((status) & s_inconsistent)
#define	S_NOSYNC(status)	((status) & s_nosync)
#define	S_OK(status)		((status) & s_ok)
#define	S_SETUP(status)		((status) & s_setup)


/* find_*() function enums */
enum find {
	FIND_TOP,		/* Search top level RAID sets only. */
	FIND_ALL,		/* Decend all RAID set trees. */
};

/* Device information. */
struct dev_info {
	struct list_head list;	/* Global chain of discovered devices. */

	char *path;		/* Actual device node path. */
	char *serial;		/* ATA/SCSI serial number. */
	uint64_t sectors;	/* Device size. */
};

/* Metadata areas and size stored on a RAID device. */
struct meta_areas {
	uint64_t offset;	/* on disk metadata offset in sectors. */
	size_t size;		/* on disk metadata size in bytes. */
	void *area;		/* pointer to format specific metadata. */
};

/*
 * Abstracted RAID device.
 *
 * A RAID device is a member of a RAID set and can only
 * exist at the lowest level of a RAID set stack (eg, for RAID10).
 */
struct raid_dev {
	struct list_head list;	/* Global chain of RAID devices. */
	struct list_head devs;	/* Chain of devices belonging to set. */

	char *name;		/* Metadata format handler generated
				   name of set this device belongs to. */

	struct dev_info *di;	/* Pointer to dev_info. */
	struct dmraid_format *fmt;	/* Format handler for this device. */

	enum status status;	/* Status of device. */
	enum type type;		/* Type of device. */

	uint64_t offset;	/* Data offset on device. */
	uint64_t sectors;	/* Length of the segment to map. */

	unsigned int areas;	/* # of metadata areas on the device. */
	struct meta_areas *meta_areas;	/* Dynamic array of metadata areas. */

	/*
	 * For format handler use (eg, to keep references between calls).
	 * 
	 * WARNING: non pointer members need to get zeroed before exit,
	 *          because the metadata layer frees private->ptr on cleanup.
	 */
	union {
		void *ptr;
		uint32_t n32;
		uint64_t n64;
	} private;
};

/*
 * Abstracted (hierarchical) RAID set.
 *
 * Can be used to form a tree of subsets with arbitrary depths.
 * Defines RAID attributes for the set as a whole (eg: RAID0, Status).
 */
enum flags {
	f_maximize = 0x01,	/* If set, maximize set capacity,
				   if not set, limit to smallest device. */
	f_partitions = 0x02,	/* Set has partitions. */
};

#define	F_MAXIMIZE(rs)		((rs)->flags & f_maximize)
#define	F_PARTITIONS(rs)	((rs)->flags & f_partitions)

struct raid_set {
	struct list_head list;	/* Chain of independent sets. */

	/*
	 * List of subsets (eg, RAID10) which make up RAID set stacks.
	 *
	 * Lowest level identified by list_empty() here.
	 */
	struct list_head sets;

	/*
	 * List of RAID devices making up a set.
	 *
	 * Higher RAID sets in a stack will have list_empty() here.
	 *
	 * Lowest level will hold device definitions
	 * for arbitrary block devices here.
	 */
	struct list_head devs;
	unsigned int total_devs;	/* The number of devices expected */
	unsigned int found_devs;	/* The number of devices found */

	char *name;		/* Name of the set. */

	uint64_t size;		/* size of a raid set */
	unsigned int stride;	/* Stride size. */
	enum type type;		/* Unified raid type. */
	enum flags flags;	/* Set flags. */
	enum status status;	/* Status of set. */
};

extern struct raid_set *get_raid_set(struct lib_context *lc,
				     struct raid_dev *rd);
extern struct dmraid_format *get_format(struct raid_set *rs);
extern const char *get_type(struct lib_context *lc, enum type type);
extern const char *get_dm_type(struct lib_context *lc, enum type type);
extern const char *get_set_type(struct lib_context *lc, void *rs);
extern const char *get_status(struct lib_context *lc, enum status status);
extern uint64_t total_sectors(struct lib_context *lc, struct raid_set *rs);
extern struct dev_info *alloc_dev_info(struct lib_context *lc, char *path);
extern void free_dev_info(struct lib_context *lc, struct dev_info *di);
extern struct raid_dev *alloc_raid_dev(struct lib_context *lc, const char *who);
extern void free_raid_dev(struct lib_context *lc, struct raid_dev **rd);
extern void list_add_sorted(struct lib_context *lc,
			    struct list_head *to, struct list_head *new,
			    int (*sort) (struct list_head * pos,
					 struct list_head * new));
extern struct raid_set *alloc_raid_set(struct lib_context *lc, const char *who);
extern unsigned int count_sets(struct lib_context *lc, struct list_head *list);
extern unsigned int count_devs(struct lib_context *lc, struct raid_set *rs,
			       enum count_type type);
extern void free_raid_set(struct lib_context *lc, struct raid_set *rs);
extern struct dev_info *find_disk(struct lib_context *lc, const char *dp);
extern struct raid_set *find_set(struct lib_context *lc,
				 struct list_head *list, const char *name,
				 enum find where);
extern struct raid_set *find_or_alloc_raid_set(struct lib_context *lc,
					       char *name, enum find where,
					       struct raid_dev *rd,
					       struct list_head *list,
					       void (*create) (struct raid_set
							       * super,
							       void *private),
					       void *private);
#define	NO_RD		NULL
#define	NO_LIST		NULL
#define	NO_CREATE	NULL
#define	NO_CREATE_ARG	NULL
extern const char *get_set_name(struct lib_context *lc, void *rs);
extern int group_set(struct lib_context *lc, char **name);

enum set_type {
	SETS,
	PARTITIONS,
};

extern void process_sets(struct lib_context *lc,
			 int (*func) (struct lib_context * lc, void *rs,
				      int arg), int arg, enum set_type type);
extern int write_set(struct lib_context *lc, void *rs);
extern int partitioned_set(struct lib_context *lc, void *rs);
extern int base_partitioned_set(struct lib_context *lc, void *rs);
extern void discover_raid_devices(struct lib_context *lc, char **devices);
extern void discover_partitions(struct lib_context *lc);
extern int dso_get_members(struct lib_context *lc, int arg);
extern unsigned int count_devices(struct lib_context *lc, enum dev_type type);
extern enum status rd_status(struct states *states, unsigned int status,
			     enum compare cmp);
extern enum type rd_type(struct types *types, unsigned int type);
extern void file_metadata(struct lib_context *lc, const char *handler,
			  char *path, void *data, size_t size, uint64_t offset);
extern void file_dev_size(struct lib_context *lc, const char *handler,
			  struct dev_info *di);
extern int write_dev(struct lib_context *lc, struct raid_dev *rd, int erase);
/*
 * Erase ondisk metadata.
 */
extern int erase_metadata(struct lib_context *lc);
extern int delete_raidsets(struct lib_context *lc);
extern int lib_perform(struct lib_context *lc, enum action action,
		       struct prepost *p, char **argv);
#endif
