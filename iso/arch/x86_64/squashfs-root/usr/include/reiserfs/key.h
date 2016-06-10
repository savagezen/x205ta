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

#ifndef KEY_H
#define KEY_H

#if !defined(__GNUC__) && (defined(__sparc__) || defined(__sparc_v9__))
# include <sys/int_types.h>
#else
# include <stdint.h>
#endif
	
struct offset_v1 {
	uint32_t k_offset;
	uint32_t k_uniqueness;
} __attribute__ ((__packed__));

struct offset_v2 {
#ifdef WORDS_BIGENDIAN
	uint64_t k_type: 4;
	uint64_t k_offset: 60;
#else    
	uint64_t k_offset: 60;
	uint64_t k_type: 4;
#endif    
} __attribute__ ((__packed__));

struct key {
	uint32_t k_dir_id;
	uint32_t k_objectid;
    
	union {
		struct offset_v1 k_offset_v1;
		struct offset_v2 k_offset_v2;
	} __attribute__ ((__packed__)) u;
    
} __attribute__ ((__packed__));

#define KEY_FORMAT_1 		  	0
#define KEY_FORMAT_2 		  	1

#define KEY_UNIQ_SD		  	0
#define KEY_UNIQ_DR		  	500
#define KEY_UNIQ_DT 		  	0xffffffff
#define KEY_UNIQ_IT		 	0xfffffffe
#define KEY_UNIQ_UN 		  	555

#define KEY_TYPE_SD 		  	0
#define KEY_TYPE_IT 		 	1
#define KEY_TYPE_DT 		  	2
#define KEY_TYPE_DR 		  	3 
#define KEY_TYPE_UN 		        15

#define is_indirect_key(key) 		(reiserfs_key_type(key) == KEY_TYPE_IT)
#define is_direct_key(key)  		(reiserfs_key_type(key) == KEY_TYPE_DT)
#define is_direntry_key(key) 		(reiserfs_key_type(key) == KEY_TYPE_DR)
#define is_stat_data_key(key) 		(reiserfs_key_type(key) == KEY_TYPE_SD)

#define FULL_KEY_LEN 	  		4
#define SHORT_KEY_LEN 	  		2

#define FULL_KEY_SIZE 	  		(sizeof(struct key))
#define SHORT_KEY_SIZE 	  		(sizeof(uint32_t) + sizeof(uint32_t))

/* The common macroses for all item formats */
#define get_key_dirid(k)  		get_le32(k, k_dir_id)
#define set_key_dirid(k,val) 		set_le32(k, k_dir_id, val)

#define get_key_objectid(k) 		get_le32(k, k_objectid)
#define set_key_objectid(k,val)		set_le32(k, k_objectid, val)

/* ITEM_FORMAT_1 */
#define get_key_v1_offset(k) 	  	get_le32(k, u.k_offset_v1.k_offset)
#define set_key_v1_offset(k,val)  	set_le32(k, u.k_offset_v1.k_offset, val)

#define get_key_v1_type(k)    	  	get_le32(k, u.k_offset_v1.k_uniqueness)
#define set_key_v1_type(k,val) 	  	set_le32 (k, u.k_offset_v1.k_uniqueness, val)

#define GET_KEY(bh, pos)  		(&(GET_ITEM_HEAD(bh, pos)->ih_key))

/* ITEM_FORMAT_2 */
extern uint64_t get_key_v2_offset(const struct key *key);
extern void set_key_v2_offset(struct key *key, uint64_t val);

extern uint16_t get_key_v2_type(const struct key *key);
extern void set_key_v2_type(struct key *key, uint64_t val);

extern uint32_t reiserfs_key_format(const struct key *key);
extern uint32_t reiserfs_key_type(const struct key *key);
extern uint64_t reiserfs_key_offset(const struct key *key);

extern uint32_t reiserfs_key_uniq2type(uint32_t uniqueness);
extern uint32_t reiserfs_key_type2uniq(uint32_t type);

extern void reiserfs_key_form_v1(struct key *key, uint32_t dirid, uint32_t objid, 
				 uint32_t offset, uint32_t type);

extern void reiserfs_key_form_v2(struct key *key, uint32_t dirid, uint32_t objid, 
				 uint64_t offset, uint64_t type);

extern void reiserfs_key_form(struct key *key, uint32_t dirid, uint32_t objid, 
			      uint64_t offset, uint64_t type, int format);

extern int reiserfs_key_comp_dirs(void *key1, void *key2);
extern int reiserfs_key_comp_objects(void *key1, void *key2);
extern int reiserfs_key_comp_two_components(void *key1, void *key2);
extern int reiserfs_key_comp_three_components(void *key1, void *key2);
extern int reiserfs_key_comp_four_components(void *key1, void *key2);

#endif

