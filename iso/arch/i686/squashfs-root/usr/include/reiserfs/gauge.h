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

#ifndef GAUGE_H
#define GAUGE_H

typedef struct reiserfs_gauge reiserfs_gauge_t;

typedef void
(*reiserfs_gauge_handler_t)(const char *, unsigned int,
			    void *, int, int, int);

typedef enum reiserfs_gauge_kind reiserfs_gauge_kind_t;

struct reiserfs_gauge {
	void *data;
	char name[256];
	unsigned int value;
	reiserfs_gauge_handler_t handler;
	int enabled, determined, update_header, update_footer;
};

extern reiserfs_gauge_t *
libreiserfs_gauge_create(const char *name, 
			 reiserfs_gauge_handler_t handler, void *data);

extern void libreiserfs_gauge_free(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_enable(reiserfs_gauge_t *gauge);
extern void libreiserfs_gauge_disable(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_set_handler(reiserfs_gauge_t *gauge, 
					  reiserfs_gauge_handler_t handler);

extern reiserfs_gauge_handler_t libreiserfs_gauge_handler(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_determined(reiserfs_gauge_t *gauge);
extern void libreiserfs_gauge_undetermined(reiserfs_gauge_t *gauge);
extern int  libreiserfs_gauge_is_determined(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_set_data(reiserfs_gauge_t *gauge, void *data);
extern void* libreiserfs_gauge_data(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_touch(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_set_name(reiserfs_gauge_t *gauge, const char *name);
extern char *libreiserfs_gauge_name(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_set_value(reiserfs_gauge_t *gauge, unsigned int value);
extern unsigned int libreiserfs_gauge_value(reiserfs_gauge_t *gauge);

extern void libreiserfs_gauge_reset(reiserfs_gauge_t *gauge);
extern void libreiserfs_gauge_done(reiserfs_gauge_t *gauge);

#endif
