/*
    Simple buffer

    Basic buffer manipulation routines. Taken from ELAPI code.

    Copyright (C) Dmitri Pal <dpal@redhat.com> 2009

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

#ifndef ELAPI_SIMPLEBUFFER_H
#define ELAPI_SIMPLEBUFFER_H

#include <stdint.h>

#ifndef EOK
#define EOK 0
#endif

/* Generic data structure for the buffer */
struct simplebuffer {
    unsigned char *buffer;
    uint32_t size;
    uint32_t length;
};

/* Function to free data */
void simplebuffer_free(struct simplebuffer *data);

/* Allocate data structure */
int simplebuffer_alloc(struct simplebuffer **data);

/* Function to add memory to the buffer */
int simplebuffer_grow(struct simplebuffer *data,
                      uint32_t len,
                      uint32_t block);

/* Function to add raw data to the end of the buffer.
 * Terminating 0 is not counted in length but appended
 * automatically.
 */
int simplebuffer_add_raw(struct simplebuffer *data,
                         void *data_in,
                         uint32_t len,
                         uint32_t block);


/* Function to add string to the buffer.
 * Same as above just uses string as an argument.
 */
int simplebuffer_add_str(struct simplebuffer *data,
                         const char *str,
                         uint32_t len,
                         uint32_t block);

/* Finction to add CR to the buffer */
int simplebuffer_add_cr(struct simplebuffer *data);


/* Function to write data synchroniusly */
int simplebuffer_write(int fd,
                       struct simplebuffer *data,
                       uint32_t *left);

/* Get buffer */
const unsigned char *simplebuffer_get_buf(struct simplebuffer *data);

/* Get buffer */
void *simplebuffer_get_vbuf(struct simplebuffer *data);


/* Get length */
uint32_t simplebuffer_get_len(struct simplebuffer *data);

#endif
