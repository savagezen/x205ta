/*
 * Copyright (C) 2004,2005  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef _DISPLAY_H_
#define _DISPLAY_H_

enum dev_type {
	DEVICE = 0x01,	/* ALL devices */
	RAID   = 0x02,	/* RAID devices */
	NATIVE = 0x04,	/* Native metadata of RAID devices */
	SET    = 0x08,	/* RAID sets */
};

enum active_type {
	D_ALL      = 0x01,	/* All devices */
	D_ACTIVE   = 0x02,	/* Active devices only */
	D_INACTIVE = 0x04,	/* Inactive devices only */
};

extern void display_devices(struct lib_context *lc, enum dev_type type);
extern void display_set(struct lib_context *lc, void *rs,
			enum active_type active, int top);
extern void display_table(struct lib_context *lc, char *rs_name, char *table);
extern int list_formats(struct lib_context *lc, int arg);

#endif
