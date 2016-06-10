/*
 * Copyright (C) 2004,2005  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef	_LOCKING_H
#define	_LOCKING_H

/* I want to be prepared for finer grained locking... */
struct resource {
	char *name;
};

/* Locking abstraction. */
struct lib_context;
struct locking {
	const char *name;
	int (*lock)(struct lib_context *lc, struct resource *res);
	void (*unlock)(struct lib_context *lc, struct resource *res);
	void *private; /* Private context. */
};

extern int init_locking(struct lib_context *lc);
extern int lock_resource(struct lib_context *lc, struct resource *res);
extern void unlock_resource(struct lib_context *lc, struct resource *res);

#endif
