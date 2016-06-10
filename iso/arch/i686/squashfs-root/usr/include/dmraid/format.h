/*
 * Copyright (C) 2004-2009  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 * 
 * Copyright (C) 2007,2009   Intel Corporation. All rights reserved.
 * November, 2007 - additions for Create, Delete, Rebuild & Raid 10. 
 * March, 2008 - additions for hot-spare check
 * August, 2008 - additions for Activation, Rebuild check
 * January, 2009 - additions for Activation, Rebuild check
 *
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef	_FORMAT_H_
#define	_FORMAT_H_

#ifdef FORMAT_HANDLER
#undef FORMAT_HANDLER

#include <sys/types.h>
#include <dmraid/list.h>
#include <dmraid/metadata.h>

/* Metadata format handler types. */
enum fmt_type {
	FMT_RAID,
	FMT_PARTITION,
};

/*
 * Various structures for data whipped with the different event types.
 */
/* Event: I/O error */
struct event_io {
	struct raid_set *rs;	/* RAID set of I/O error. */
	struct raid_dev *rd;	/* RAID device of I/O error. */
	uint64_t sector;	/* Sector of the I/O error. */
};

/* Event: RAID device add/remove */
enum rd_action {
	rd_add,
	rd_remove,
};

struct event_rd {
	struct raid_set *rs;
	struct raid_dev *rd;
	enum rd_action action;
};

/*
 * Hot-spare search types list: it can be searched locally/globally 
 */
enum hot_spare_scope {
	t_scope_local = 0x01,
	t_scope_global = 0x02
};

/* Metadata Handler commands */
enum handler_commands {
	UPDATE_REBUILD_STATE,
	GET_REBUILD_STATE,
	GET_REBUILD_DRIVE,
	GET_REBUILD_DRIVE_NO,
	CHECK_HOT_SPARE,
	ALLOW_ACTIVATE,
	ALLOW_REBUILD,
	GET_STATUS,
	GET_DEVICE_IDX,
	GET_NUMBER_OF_DEVICES,
	/* ... */
};

/* Union to return metadata_handler information. */
struct handler_info {
	unsigned short size;

	union {
		char *str;
		void *ptr;
		int8_t i8;
		int16_t i16;
		int32_t i32;
		int64_t i64;
		uint8_t u8;
		uint16_t u16;
		uint32_t u32;
		uint64_t u64;
	} data;
};

/*
 * Virtual interface definition of a metadata format handler.
 */
struct dmraid_format {
	const char *name;	/* Format name */
	const char *descr;	/* Format description */
	const char *caps;	/* Capabilities (RAID levels supported) */
	enum fmt_type format;	/* Format type (RAID, partition) */

	/*
	 * Read RAID metadata off a device and unify it.
	 */
	struct raid_dev *(*read) (struct lib_context * lc,
				  struct dev_info * di);

	/*
	 * Write RAID metadata to a device deunifying it
	 * or erase ondisk metadata if erase != 0.
	 */
	int (*write) (struct lib_context * lc, struct raid_dev * rd, int erase);

	/*
	 * delete RAID metadata to devices.
	 */
	int (*delete) (struct lib_context * lc, struct raid_set * rs);

	/*
	 * create RAID metadata to devices.
	 */
	int (*create) (struct lib_context * lc, struct raid_set * rs);

	/*
	 * Group a RAID device into a set.
	 */
	struct raid_set *(*group) (struct lib_context * lc,
				   struct raid_dev * rd);

	/*
	 * Check consistency of the RAID set metadata.
	 */
	int (*check) (struct lib_context * lc, struct raid_set * rs);

	/* Metadata handler. */
	int (*metadata_handler) (struct lib_context * lc,
				 enum handler_commands command,
				 struct handler_info * info, void *ptr);

	/* 
	 * Hot-spare disk search scope 
	 */
	enum hot_spare_scope scope;

	/*
	 * Display RAID disk metadata native.
	 */
	void (*log) (struct lib_context * lc, struct raid_dev * rd);
};

/* Chain of registered format handlers (needed for library context). */
struct format_list {
	struct list_head list;
	struct dmraid_format *fmt;
};

int register_format_handlers(struct lib_context *lc);
extern void unregister_format_handlers(struct lib_context *lc);


/*
 * Format core function used by (all) metadata format handlers.
 */
#define	NO_CHECK_RD	NULL
extern int check_raid_set(struct lib_context *lc, struct raid_set *rs,
			  unsigned int (*f_devices) (struct raid_dev * rd,
						     void *context),
			  void *f_devices_context,
			  int (*f_check) (struct lib_context * lc,
					  struct raid_set * rs,
					  struct raid_dev * rd, void *context),
			  void *f_check_context, const char *handler);
extern int check_valid_format(struct lib_context *lc, char *fmt);
extern int init_raid_set(struct lib_context *lc, struct raid_set *rs,
			 struct raid_dev *rd, unsigned int stride,
			 unsigned int type, const char *handler);
extern const char **get_format_caps(struct lib_context *lc,
				    struct dmraid_format *fmt);
extern void free_format_caps(struct lib_context *lc, const char **caps);

union read_info {
	void *ptr;
	uint32_t u32;
	uint64_t u64;
};

struct raid_dev *read_raid_dev(struct lib_context *lc,
			       struct dev_info *di,
			       void *(*f_read_metadata) (struct lib_context *
							 lc,
							 struct dev_info * di,
							 size_t * size,
							 uint64_t * offset,
							 union read_info *
							 info), size_t size,
			       uint64_t offset, void (*f_to_cpu) (void *meta),
			       int (*f_is_meta) (struct lib_context * lc,
						 struct dev_info * di,
						 void *meta),
			       void (*f_file_metadata) (struct lib_context *
							lc,
							struct dev_info * di,
							void *meta),
			       int (*f_setup_rd) (struct lib_context * lc,
						  struct raid_dev * rd,
						  struct dev_info * di,
						  void *meta,
						  union read_info * info),
			       const char *handler);

extern void *alloc_meta_areas(struct lib_context *lc, struct raid_dev *rd,
			      const char *who, unsigned int n);
extern void *alloc_private(struct lib_context *lc, const char *who,
			   size_t size);
extern void *alloc_private_and_read(struct lib_context *lc, const char *who,
				    size_t size, char *path, loff_t offset);
extern struct raid_set *join_superset(struct lib_context *lc,
				      char *(*f_name) (struct lib_context * lc,
						       struct raid_dev * rd,
						       unsigned int subset),
				      void (*f_create) (struct raid_set *
							super, void *private),
				      int (*f_set_sort) (struct list_head *
							 pos,
							 struct list_head *
							 new),
				      struct raid_set *rs, struct raid_dev *rd);
extern int register_format_handler(struct lib_context *lc,
				   struct dmraid_format *fmt);
extern int write_metadata(struct lib_context *lc, const char *handler,
			  struct raid_dev *rd, int meta_index, int erase);
extern int log_zero_sectors(struct lib_context *lc, char *path,
			    const char *handler);

#define	to_disk	to_cpu

#define struct_offset(s, member) ((size_t) &((struct s *) 0)->member)

/* Print macros used in log methods. */

/* Undefine this to avoid offsets in metadata logging. */
#define	NATIVE_LOG_OFFSET
#ifdef	NATIVE_LOG_OFFSET
#define	P_FMT	"0x%03x "
#define	P_OFF(x, basevar, y...) \
	((unsigned long) &x - (unsigned long) basevar), y
#else
#define	P_FMT
#define	P_OFF(x, basevar, y...)	y
#endif

#define	P(format, basevar, x, y...) \
	do { log_print(lc, P_FMT format, P_OFF(x, basevar, y)); } while(0)

#define	P2(format, basevar, i, x) \
	do { P(format, basevar, x, i, x); } while(0)
#define	DP(format, basevar, x) \
	do { P(format, basevar, x, x); } while(0)

/*
 * RAID device, set and vendor metadata retrieval macros.
 */
#define	DEVS(rs)	(!list_empty(&((struct raid_set *) (rs))->devs))
#define	SETS(rs)	(!list_empty(&((struct raid_set *) (rs))->sets))

#define	META(rd, type)	((struct type*) ((struct raid_dev*) (rd))->meta_areas->area)
#define	RD(pos)		(list_entry(pos, struct raid_dev, devs))
#define	RS(pos)		(list_entry(pos, struct raid_set, list))
#define RD_RS(rs)	(RD((((struct raid_set*) (rs))->devs.next)))
#define RS_RS(rs)	((struct raid_set*) (rs)->sets.next)

#define	HANDLER_LEN	sizeof(HANDLER)

#endif /* ifdef FORMAT_HANDLER */

#endif
