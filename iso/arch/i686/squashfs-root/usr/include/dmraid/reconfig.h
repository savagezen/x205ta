/*
 * Copyright (C) 2006 Darrick Wong, IBM.
 *                    All rights reserved.
 *
 * Copyright (C) 2006-2008 Heinz Mauelshagen Red Hat GmbH.
 * 		           All rights reserved.
 *
 * See the file LICENSE at the top of this source tree for license information.
 */

#ifndef _RECONFIG_H_
#define _RECONFIG_H_

#include <dmraid/metadata.h>
#include <dmraid/list.h>

/* Type of change that a log entry describes */
enum change_type {
	ADD_TO_SET,
	DELETE_FROM_SET,
	WRITE_METADATA,
	CREATE_CHILD_RD,
	CREATE_RD,
	DELETE_RD,
	CREATE_RS,
	DELETE_RS,
	END_TRANSACTION
};

/* Change log entry */
struct change {
	struct list_head changes;	/* Chain of log entries */
	enum change_type type;

	/* All of these items may be listed as parameters */
	struct raid_set *rs;
	struct raid_dev *rd;

	uint64_t offset;
	uint64_t length;

	struct dev_info *di;

	char *name;
};

extern int add_dev_to_set(struct lib_context *lc, struct raid_set *rs,
			  struct raid_dev *rd);
extern int del_dev_in_set(struct lib_context *lc, struct raid_set *rs,
			  struct raid_dev *rd);
extern int dso_end_rebuild(struct lib_context *lc, int arg);
extern void end_log(struct lib_context *lc, struct list_head *log);
extern int revert_log(struct lib_context *lc, struct list_head *log);
extern int hot_spare_add(struct lib_context *lc, struct raid_set *rs);
extern struct raid_set *find_group(struct lib_context *lc,
				   struct raid_set *sub_rs);
extern int rebuild_raidset(struct lib_context *lc, char *set_name);

#endif
