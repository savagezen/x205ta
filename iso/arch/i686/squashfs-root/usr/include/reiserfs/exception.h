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

#ifndef EXCEPTION_H
#define EXCEPTION_H

enum reiserfs_exception_type {
	EXCEPTION_INFORMATION 			= 1,
	EXCEPTION_WARNING 			= 2,
	EXCEPTION_ERROR 			= 3,
	EXCEPTION_FATAL 			= 4,
	EXCEPTION_BUG 				= 5,
	EXCEPTION_NO_FEATURE 			= 6
};

typedef enum reiserfs_exception_type reiserfs_exception_type_t;

enum reiserfs_exception_option {
	EXCEPTION_UNHANDLED 			= 1 << 0,
	EXCEPTION_FIX 				= 1 << 1,
	EXCEPTION_YES 				= 1 << 2,
	EXCEPTION_NO 				= 1 << 3,
	EXCEPTION_OK 				= 1 << 4,
	EXCEPTION_RETRY 			= 1 << 5,
	EXCEPTION_IGNORE 			= 1 << 6,
	EXCEPTION_CANCEL 			= 1 << 7
};

typedef enum reiserfs_exception_option reiserfs_exception_option_t;

#define EXCEPTION_OK_CANCEL 			(EXCEPTION_OK + EXCEPTION_CANCEL)
#define EXCEPTION_YES_NO 			(EXCEPTION_YES + EXCEPTION_NO)
#define EXCEPTION_YES_NO_CANCEL 		(EXCEPTION_YES_NO + EXCEPTION_CANCEL)
#define EXCEPTION_IGNORE_CANCEL 		(EXCEPTION_IGNORE + EXCEPTION_CANCEL)
#define EXCEPTION_RETRY_CANCEL  		(EXCEPTION_RETRY + EXCEPTION_CANCEL)
#define EXCEPTION_RETRY_IGNORE_CANCEL 	        (EXCEPTION_RETRY + EXCEPTION_IGNORE_CANCEL)

#define EXCEPTION_OPTION_FIRST			EXCEPTION_FIX
#define EXCEPTION_OPTION_LAST 			EXCEPTION_CANCEL

struct reiserfs_exception {
	char *message;
	reiserfs_exception_type_t type;
	reiserfs_exception_option_t options;
};

typedef struct reiserfs_exception reiserfs_exception_t;

typedef reiserfs_exception_option_t (reiserfs_exception_handler_t) 
(reiserfs_exception_t *ex);

extern int libreiserfs_exception;

extern char *libreiserfs_exception_type_string(reiserfs_exception_type_t type);
extern reiserfs_exception_type_t libreiserfs_exception_type(reiserfs_exception_t *ex);

extern char *libreiserfs_exception_option_string(reiserfs_exception_option_t opt);
extern reiserfs_exception_option_t libreiserfs_exception_option(reiserfs_exception_t *ex);

extern char *libreiserfs_exception_message(reiserfs_exception_t *ex);

extern void libreiserfs_exception_set_handler(reiserfs_exception_handler_t *handler);
extern reiserfs_exception_option_t libreiserfs_exception_default_handler(
	reiserfs_exception_t *ex);

extern reiserfs_exception_option_t libreiserfs_exception_throw(
	reiserfs_exception_type_t type, reiserfs_exception_option_t opt, 
	const char* message, ...);
    
extern reiserfs_exception_option_t libreiserfs_exception_rethrow(void);

extern void libreiserfs_exception_catch(void);
extern void libreiserfs_exception_fetch_all(void);
extern void libreiserfs_exception_leave_all(void);
#endif

