/*
    INI LIBRARY

    Header file for the value object.

    Copyright (C) Dmitri Pal <dpal@redhat.com> 2010

    INI Library is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    INI Library is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with INI Library.  If not, see <http://www.gnu.org/licenses/>.
*/


#ifndef INI_VALUEOBJ_H
#define INI_VALUEOBJ_H

#include "ref_array.h"
#include "simplebuffer.h"
#include "ini_comment.h"

struct value_obj;

#define INI_VALUE_READ      0 /* Value is read from the file */
#define INI_VALUE_CREATED   1 /* Value is created in memory  */

/*
 * Create value from a referenced array.
 *
 * NOTE: arrays and comment are NOT treated as
 * objects that keep reference count.
 * They are created externally and passed in
 * as separate parts that are glued together
 * by the value object.
 * The caller should not free it himself
 * (only in case of failure) since
 * after the call the arrays and comment
 * are owned by the value object and will
 * be freed when it is destroyed.
 */
int value_create_from_refarray(struct ref_array *raw_lines,
                               struct ref_array *raw_lengths,
                               uint32_t line,
                               uint32_t origin,
                               uint32_t key_len,
                               uint32_t boundary,
                               struct ini_comment *ic,
                               struct value_obj **vo);

/* Cleanup callback for lines array */
void value_lines_cleanup_cb(void *elem,
                            ref_array_del_enum type,
                            void *data);

/* Create a pair of arrays */
int value_create_arrays(struct ref_array **raw_lines,
                        struct ref_array **raw_lengths);

/* Add a raw read line to the arrays */
int value_add_to_arrays(const char *strvalue,
                        uint32_t len,
                        struct ref_array *raw_lines,
                        struct ref_array *raw_lengths);

/* Create a pair of arrays */
void value_destroy_arrays(struct ref_array *raw_lines,
                          struct ref_array *raw_lengths);

/* Create value object from string buffer.
 * NOTE: see note above
 * in the description of the
 * value_create_from_refarray function.
 */
int value_create_new(const char *strvalue,
                     uint32_t length,
                     uint32_t origin,
                     uint32_t key_len,
                     uint32_t boundary,
                     struct ini_comment *ic,
                     struct value_obj **vo);

/* Create a copy of the value */
int value_copy(struct value_obj *vo,
               struct value_obj **copy_vo);

/* Destroy a value object */
void value_destroy(struct value_obj *vo);

/* Get concatenated value */
int value_get_concatenated(struct value_obj *vo,
                           const char **fullstr);

/* Get length of the concatenated value */
int value_get_concatenated_len(struct value_obj *vo,
                               uint32_t *len);

/* Get value's origin */
int value_get_origin(struct value_obj *vo,
                     uint32_t *origin);

/* Get value's line */
int value_get_line(struct value_obj *vo,
                   uint32_t *line);

/* Update key length */
int value_set_keylen(struct value_obj *vo,
                     uint32_t key_len);
/* Change boundary */
int value_set_boundary(struct value_obj *vo,
                       uint32_t boundary);

/* Update value */
int value_update(struct value_obj *vo,
                 const char *value,
                 uint32_t length,
                 uint32_t origin,
                 uint32_t boundary);

/* Get comment from the value */
int value_extract_comment(struct value_obj *vo,
                          struct ini_comment **ic);

/* Set comment into the value */
int value_put_comment(struct value_obj *vo,
                      struct ini_comment *ic);

/* Merge comment from one value into another */
int value_merge_comment(struct value_obj *vo_donor,
                        struct value_obj *vo);

/* Serialize value */
int value_serialize(struct value_obj *vo,
                    const char *key,
                    struct simplebuffer *sbobj);

/* Print value */
void value_print(const char *key, struct value_obj *vo);

#endif
