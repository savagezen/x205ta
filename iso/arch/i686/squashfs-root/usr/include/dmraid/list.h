/*
 * Copyright (C) 2004-2008  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * Copyright (C) 2007   Intel Corporation. All rights reserved.
 * November, 2007 - additions for Create, Delete, Rebuild & Raid 10. 
 * 
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef _LIST_H
#define _LIST_H

/*
 * Double-linked list definitons and macros.
 */

struct list_head {
	struct list_head *next;
	struct list_head *prev;
};

#define INIT_LIST_HEAD(a)	do { (a)->next = (a)->prev = a; } while(0)

#define	LIST_HEAD(a)	struct list_head a = { .next = &a, .prev = &a }

#define list_empty(pos)	((pos)->next == pos)

static inline void
__list_add(struct list_head *new,
	   struct list_head *prev, struct list_head *next)
{
	next->prev = new;
	new->next = next;
	new->prev = prev;
	prev->next = new;
}

/* Add an element 'new' after position 'pos' to a list. */
#define list_add(new, pos)	__list_add(new, pos, (pos)->next)

/* Add an element 'new' before position 'pos' to a list. */
#define list_add_tail(new, pos)	__list_add(new, (pos)->prev, pos)

/* Delete an element 'pos' from the list. */
#define	list_del(pos) { \
	(pos)->next->prev = (pos)->prev; \
	(pos)->prev->next = (pos)->next; \
	(pos)->next = (pos)->prev = 0; \
}

#define	list_del_init(pos) { \
	list_del(pos); \
	INIT_LIST_HEAD(pos); \
}

/* Pointer to a struct 'type' derived from 'pos' and list_head* 'member'. */
#define list_entry(pos, type, member) \
	((type*) ((char*)pos - (unsigned long)(&((type*)0)->member)))

/* Walk a list. */
#define list_for_each(pos, head) \
	for (pos = (head)->next; pos != head; pos = pos->next)

/* Walk a list by entry. */
#define list_for_each_entry(entry, head, member) \
        for (entry = list_entry((head)->next, typeof(*entry), member); \
             &entry->member != (head); \
             entry = list_entry(entry->member.next, typeof(*entry), member))

/*
 * Walk a list using a temporary pointer,
 * so that elements can be deleted safely.
 */
#define list_for_each_safe(pos, n, head) \
        for (pos = (head)->next, n = pos->next; \
             pos != (head); \
             pos = n, n = pos->next)

#define list_for_each_entry_safe(pos, n, head, member) \
	for (pos = list_entry((head)->next, typeof(*pos), member),\
             n = list_entry(pos->member.next, typeof(*pos), member); \
             &pos->member != (head);   \
pos = n, n = list_entry(pos->member.next, typeof(*pos), member))

#endif
