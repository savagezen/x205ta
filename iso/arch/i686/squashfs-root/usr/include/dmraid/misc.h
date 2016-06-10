/*
 * Copyright (C) 2004-2010  Heinz Mauelshagen, Red Hat GmbH.
 *                          All rights reserved.
 *
 * Copyright (C) 2007   Intel Corporation. All rights reserved.
 * November, 2007 - additions for Create, Delete, Rebuild & Raid 10. 
 *
 * See file LICENSE at the top of this source tree for license information.
 */

#ifndef _MISC_H_
#define _MISC_H_

#define DM_ASSERT(__cond) do { if (!(__cond)) { printf("ASSERT file:%s line:%d fuction:%s cond: %s\n", __FILE__, __LINE__, __FUNCTION__, #__cond); } } while(0);

/*
 * Library init/exit
 */
extern struct lib_context *libdmraid_init(int argc, char **argv);
extern void libdmraid_exit(struct lib_context *lc);

extern void sysfs_workaround(struct lib_context *lc);
extern void mk_alpha(struct lib_context *lc, char *str, size_t len);
extern void mk_alphanum(struct lib_context *lc, char *str, size_t len);
extern char *get_basename(struct lib_context *lc, char *str);
extern char *get_dirname(struct lib_context *lc, const char *str);
extern char *remove_white_space(struct lib_context *lc, char *str, size_t len);
extern void remove_tail_space(char *str);
extern char *remove_delimiter(char *ptr, char c);
extern void add_delimiter(char **ptr, char c);
extern char *replace_delimiter(char *str, char delim, char c);

extern int mk_dir(struct lib_context *lc, const char *dir);

extern int read_file(struct lib_context *lc, const char *who, char *path,
		     void *buffer, size_t size, loff_t offset);
extern int write_file(struct lib_context *lc, const char *who, char *path,
		      void *buffer, size_t size, loff_t offset);

extern int yes_no_prompt(struct lib_context *lc, const char *prompt, ...);

extern void free_string(struct lib_context *lc, char **string);
extern int p_fmt(struct lib_context *lc, char **string, const char *fmt, ...);

static inline uint64_t
round_down(uint64_t what, unsigned int by)
{
	return what & ~((uint64_t) by - 1);
}

static inline uint64_t
round_up(uint64_t what, unsigned int by)
{
	uint64_t t = round_down(what, by);

	return t == what ? t : t + by;
}

static inline uint64_t
div_up(uint64_t what, unsigned int by)
{
	return round_up(what, by) / by;
}


#ifdef DMRAID_LED
/* Definitions for LED support */
#define LED_OFF		0
#define LED_REBUILD	1

int led(const char *path, int status);
#endif

#endif
