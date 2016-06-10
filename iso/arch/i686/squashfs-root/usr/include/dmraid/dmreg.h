/*
 * Copyright (C) 2009   Intel Corporation. All rights reserved.
 * Copyright (C) 2009   Heinz Mauelshagen, Red Hat GmbH.
 *			All rights reserved.
 * 
 * See file LICENSE at the top of this source tree for license information.
 * April 2009 - File creation
 */

#ifndef _DMREG_H_
#define _DMREG_H_


enum display_opt { UNREGISTERED, ALL, REGISTERED_WITH_UUID, REGISTERED_NO_UUID };


extern int dm_register_device(char *dev_name, char *dso_name);
extern int dm_unregister_device(char *dev_name, char *dso_name);
extern int dm_all_monitored(enum display_opt);
extern int dm_monitored_events(int *pending, char *dev_name, char *dso);

#endif
