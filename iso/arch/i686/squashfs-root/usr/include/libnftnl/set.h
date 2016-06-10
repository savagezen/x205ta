#ifndef _LIBNFTNL_SET_H_
#define _LIBNFTNL_SET_H_

#include <stdio.h>
#include <stdint.h>
#include <stdbool.h>
#include <sys/types.h>

#include <libnftnl/common.h>

enum nftnl_set_attr {
	NFTNL_SET_TABLE,
	NFTNL_SET_NAME,
	NFTNL_SET_FLAGS,
	NFTNL_SET_KEY_TYPE,
	NFTNL_SET_KEY_LEN,
	NFTNL_SET_DATA_TYPE,
	NFTNL_SET_DATA_LEN,
	NFTNL_SET_FAMILY,
	NFTNL_SET_ID,
	NFTNL_SET_POLICY,
	NFTNL_SET_DESC_SIZE,
	NFTNL_SET_TIMEOUT,
	NFTNL_SET_GC_INTERVAL,
	__NFTNL_SET_MAX
};
#define NFTNL_SET_MAX (__NFTNL_SET_MAX - 1)

struct nftnl_set;

struct nftnl_set *nftnl_set_alloc(void);
void nftnl_set_free(struct nftnl_set *s);

struct nftnl_set *nftnl_set_clone(const struct nftnl_set *set);

bool nftnl_set_is_set(const struct nftnl_set *s, uint16_t attr);
void nftnl_set_unset(struct nftnl_set *s, uint16_t attr);
void nftnl_set_set(struct nftnl_set *s, uint16_t attr, const void *data);
void nftnl_set_set_data(struct nftnl_set *s, uint16_t attr, const void *data,
			   uint32_t data_len);
void nftnl_set_set_u32(struct nftnl_set *s, uint16_t attr, uint32_t val);
void nftnl_set_set_u64(struct nftnl_set *s, uint16_t attr, uint64_t val);
void nftnl_set_set_str(struct nftnl_set *s, uint16_t attr, const char *str);

const void *nftnl_set_get(struct nftnl_set *s, uint16_t attr);
const void *nftnl_set_get_data(struct nftnl_set *s, uint16_t attr,
				  uint32_t *data_len);
const char *nftnl_set_get_str(struct nftnl_set *s, uint16_t attr);
uint32_t nftnl_set_get_u32(struct nftnl_set *s, uint16_t attr);
uint64_t nftnl_set_get_u64(struct nftnl_set *s, uint16_t attr);

struct nlmsghdr;

#define nftnl_set_nlmsg_build_hdr	nftnl_nlmsg_build_hdr
void nftnl_set_nlmsg_build_payload(struct nlmsghdr *nlh, struct nftnl_set *s);
int nftnl_set_nlmsg_parse(const struct nlmsghdr *nlh, struct nftnl_set *s);
int nftnl_set_elems_nlmsg_parse(const struct nlmsghdr *nlh, struct nftnl_set *s);

int nftnl_set_snprintf(char *buf, size_t size, struct nftnl_set *s, uint32_t type, uint32_t flags);
int nftnl_set_fprintf(FILE *fp, struct nftnl_set *s, uint32_t type, uint32_t flags);

struct nftnl_set_list;

struct nftnl_set_list *nftnl_set_list_alloc(void);
void nftnl_set_list_free(struct nftnl_set_list *list);
int nftnl_set_list_is_empty(struct nftnl_set_list *list);
void nftnl_set_list_add(struct nftnl_set *s, struct nftnl_set_list *list);
void nftnl_set_list_add_tail(struct nftnl_set *s, struct nftnl_set_list *list);
void nftnl_set_list_del(struct nftnl_set *s);
int nftnl_set_list_foreach(struct nftnl_set_list *set_list, int (*cb)(struct nftnl_set *t, void *data), void *data);

struct nftnl_set_list_iter;
struct nftnl_set_list_iter *nftnl_set_list_iter_create(struct nftnl_set_list *l);
struct nftnl_set *nftnl_set_list_iter_cur(struct nftnl_set_list_iter *iter);
struct nftnl_set *nftnl_set_list_iter_next(struct nftnl_set_list_iter *iter);
void nftnl_set_list_iter_destroy(struct nftnl_set_list_iter *iter);

int nftnl_set_parse(struct nftnl_set *s, enum nftnl_parse_type type,
		  const char *data, struct nftnl_parse_err *err);
int nftnl_set_parse_file(struct nftnl_set *s, enum nftnl_parse_type type,
		       FILE *fp, struct nftnl_parse_err *err);

/*
 * Set elements
 */

enum {
	NFTNL_SET_ELEM_FLAGS,
	NFTNL_SET_ELEM_KEY,
	NFTNL_SET_ELEM_VERDICT,
	NFTNL_SET_ELEM_CHAIN,
	NFTNL_SET_ELEM_DATA,
	NFTNL_SET_ELEM_TIMEOUT,
	NFTNL_SET_ELEM_EXPIRATION,
	NFTNL_SET_ELEM_USERDATA,
	NFTNL_SET_ELEM_EXPR,
};

struct nftnl_set_elem;

struct nftnl_set_elem *nftnl_set_elem_alloc(void);
void nftnl_set_elem_free(struct nftnl_set_elem *s);

struct nftnl_set_elem *nftnl_set_elem_clone(struct nftnl_set_elem *elem);

void nftnl_set_elem_add(struct nftnl_set *s, struct nftnl_set_elem *elem);

void nftnl_set_elem_unset(struct nftnl_set_elem *s, uint16_t attr);
void nftnl_set_elem_set(struct nftnl_set_elem *s, uint16_t attr, const void *data, uint32_t data_len);
void nftnl_set_elem_set_u32(struct nftnl_set_elem *s, uint16_t attr, uint32_t val);
void nftnl_set_elem_set_u64(struct nftnl_set_elem *s, uint16_t attr, uint64_t val);
void nftnl_set_elem_set_str(struct nftnl_set_elem *s, uint16_t attr, const char *str);

const void *nftnl_set_elem_get(struct nftnl_set_elem *s, uint16_t attr, uint32_t *data_len);
const char *nftnl_set_elem_get_str(struct nftnl_set_elem *s, uint16_t attr);
uint32_t nftnl_set_elem_get_u32(struct nftnl_set_elem *s, uint16_t attr);
uint64_t nftnl_set_elem_get_u64(struct nftnl_set_elem *s, uint16_t attr);

bool nftnl_set_elem_is_set(const struct nftnl_set_elem *s, uint16_t attr);

#define nftnl_set_elem_nlmsg_build_hdr	nftnl_nlmsg_build_hdr
void nftnl_set_elems_nlmsg_build_payload(struct nlmsghdr *nlh, struct nftnl_set *s);
void nftnl_set_elem_nlmsg_build_payload(struct nlmsghdr *nlh, struct nftnl_set_elem *e);

int nftnl_set_elem_parse(struct nftnl_set_elem *e, enum nftnl_parse_type type,
		       const char *data, struct nftnl_parse_err *err);
int nftnl_set_elem_parse_file(struct nftnl_set_elem *e, enum nftnl_parse_type type,
			    FILE *fp, struct nftnl_parse_err *err);
int nftnl_set_elem_snprintf(char *buf, size_t size, struct nftnl_set_elem *s, uint32_t type, uint32_t flags);
int nftnl_set_elem_fprintf(FILE *fp, struct nftnl_set_elem *se, uint32_t type, uint32_t flags);

int nftnl_set_elem_foreach(struct nftnl_set *s, int (*cb)(struct nftnl_set_elem *e, void *data), void *data);

struct nftnl_set_elems_iter;
struct nftnl_set_elems_iter *nftnl_set_elems_iter_create(struct nftnl_set *s);
struct nftnl_set_elem *nftnl_set_elems_iter_cur(struct nftnl_set_elems_iter *iter);
struct nftnl_set_elem *nftnl_set_elems_iter_next(struct nftnl_set_elems_iter *iter);
void nftnl_set_elems_iter_destroy(struct nftnl_set_elems_iter *iter);

int nftnl_set_elems_nlmsg_build_payload_iter(struct nlmsghdr *nlh,
					   struct nftnl_set_elems_iter *iter);

/*
 * Compat
 */

enum {
	NFT_SET_ATTR_TABLE,
	NFT_SET_ATTR_NAME,
	NFT_SET_ATTR_FLAGS,
	NFT_SET_ATTR_KEY_TYPE,
	NFT_SET_ATTR_KEY_LEN,
	NFT_SET_ATTR_DATA_TYPE,
	NFT_SET_ATTR_DATA_LEN,
	NFT_SET_ATTR_FAMILY,
	NFT_SET_ATTR_ID,
	NFT_SET_ATTR_POLICY,
	NFT_SET_ATTR_DESC_SIZE,
	NFT_SET_ATTR_TIMEOUT,
	NFT_SET_ATTR_GC_INTERVAL,
	__NFT_SET_ATTR_MAX
};
#define NFT_SET_ATTR_MAX (__NFT_SET_ATTR_MAX - 1)

struct nft_set;

struct nft_set *nft_set_alloc(void);
void nft_set_free(struct nft_set *s);

struct nft_set *nft_set_clone(const struct nft_set *set);

bool nft_set_attr_is_set(const struct nft_set *s, uint16_t attr);
void nft_set_attr_unset(struct nft_set *s, uint16_t attr);
void nft_set_attr_set(struct nft_set *s, uint16_t attr, const void *data);
void nft_set_attr_set_data(struct nft_set *s, uint16_t attr, const void *data,
			   uint32_t data_len);
void nft_set_attr_set_u32(struct nft_set *s, uint16_t attr, uint32_t val);
void nft_set_attr_set_u64(struct nft_set *s, uint16_t attr, uint64_t val);
void nft_set_attr_set_str(struct nft_set *s, uint16_t attr, const char *str);

const void *nft_set_attr_get(struct nft_set *s, uint16_t attr);
const void *nft_set_attr_get_data(struct nft_set *s, uint16_t attr,
				  uint32_t *data_len);
const char *nft_set_attr_get_str(struct nft_set *s, uint16_t attr);
uint32_t nft_set_attr_get_u32(struct nft_set *s, uint16_t attr);
uint64_t nft_set_attr_get_u64(struct nft_set *s, uint16_t attr);

struct nlmsghdr;

#define nft_set_nlmsg_build_hdr	nft_nlmsg_build_hdr
void nft_set_nlmsg_build_payload(struct nlmsghdr *nlh, struct nft_set *s);
int nft_set_nlmsg_parse(const struct nlmsghdr *nlh, struct nft_set *s);
int nft_set_elems_nlmsg_parse(const struct nlmsghdr *nlh, struct nft_set *s);

int nft_set_snprintf(char *buf, size_t size, struct nft_set *s, uint32_t type, uint32_t flags);
int nft_set_fprintf(FILE *fp, struct nft_set *s, uint32_t type, uint32_t flags);

struct nft_set_list;

struct nft_set_list *nft_set_list_alloc(void);
void nft_set_list_free(struct nft_set_list *list);
int nft_set_list_is_empty(struct nft_set_list *list);
void nft_set_list_add(struct nft_set *s, struct nft_set_list *list);
void nft_set_list_add_tail(struct nft_set *s, struct nft_set_list *list);
void nft_set_list_del(struct nft_set *s);
int nft_set_list_foreach(struct nft_set_list *set_list, int (*cb)(struct nft_set *t, void *data), void *data);

struct nft_set_list_iter;
struct nft_set_list_iter *nft_set_list_iter_create(struct nft_set_list *l);
struct nft_set *nft_set_list_iter_cur(struct nft_set_list_iter *iter);
struct nft_set *nft_set_list_iter_next(struct nft_set_list_iter *iter);
void nft_set_list_iter_destroy(struct nft_set_list_iter *iter);

int nft_set_parse(struct nft_set *s, enum nft_parse_type type,
		  const char *data, struct nft_parse_err *err);
int nft_set_parse_file(struct nft_set *s, enum nft_parse_type type,
		       FILE *fp, struct nft_parse_err *err);

/*
 * Set elements
 */

enum {
	NFT_SET_ELEM_ATTR_FLAGS,
	NFT_SET_ELEM_ATTR_KEY,
	NFT_SET_ELEM_ATTR_VERDICT,
	NFT_SET_ELEM_ATTR_CHAIN,
	NFT_SET_ELEM_ATTR_DATA,
	NFT_SET_ELEM_ATTR_TIMEOUT,
	NFT_SET_ELEM_ATTR_EXPIRATION,
	NFT_SET_ELEM_ATTR_USERDATA,
	NFT_SET_ELEM_ATTR_EXPR,
};

struct nft_set_elem;

struct nft_set_elem *nft_set_elem_alloc(void);
void nft_set_elem_free(struct nft_set_elem *s);

struct nft_set_elem *nft_set_elem_clone(struct nft_set_elem *elem);

void nft_set_elem_add(struct nft_set *s, struct nft_set_elem *elem);

void nft_set_elem_attr_unset(struct nft_set_elem *s, uint16_t attr);
void nft_set_elem_attr_set(struct nft_set_elem *s, uint16_t attr, const void *data, uint32_t data_len);
void nft_set_elem_attr_set_u32(struct nft_set_elem *s, uint16_t attr, uint32_t val);
void nft_set_elem_attr_set_u64(struct nft_set_elem *s, uint16_t attr, uint64_t val);
void nft_set_elem_attr_set_str(struct nft_set_elem *s, uint16_t attr, const char *str);

const void *nft_set_elem_attr_get(struct nft_set_elem *s, uint16_t attr, uint32_t *data_len);
const char *nft_set_elem_attr_get_str(struct nft_set_elem *s, uint16_t attr);
uint32_t nft_set_elem_attr_get_u32(struct nft_set_elem *s, uint16_t attr);
uint64_t nft_set_elem_attr_get_u64(struct nft_set_elem *s, uint16_t attr);

bool nft_set_elem_attr_is_set(const struct nft_set_elem *s, uint16_t attr);

#define nft_set_elem_nlmsg_build_hdr	nft_nlmsg_build_hdr
void nft_set_elems_nlmsg_build_payload(struct nlmsghdr *nlh, struct nft_set *s);
void nft_set_elem_nlmsg_build_payload(struct nlmsghdr *nlh, struct nft_set_elem *e);

int nft_set_elem_parse(struct nft_set_elem *e, enum nft_parse_type type,
		       const char *data, struct nft_parse_err *err);
int nft_set_elem_parse_file(struct nft_set_elem *e, enum nft_parse_type type,
			    FILE *fp, struct nft_parse_err *err);
int nft_set_elem_snprintf(char *buf, size_t size, struct nft_set_elem *s, uint32_t type, uint32_t flags);
int nft_set_elem_fprintf(FILE *fp, struct nft_set_elem *se, uint32_t type, uint32_t flags);

int nft_set_elem_foreach(struct nft_set *s, int (*cb)(struct nft_set_elem *e, void *data), void *data);

struct nft_set_elems_iter;
struct nft_set_elems_iter *nft_set_elems_iter_create(struct nft_set *s);
struct nft_set_elem *nft_set_elems_iter_cur(struct nft_set_elems_iter *iter);
struct nft_set_elem *nft_set_elems_iter_next(struct nft_set_elems_iter *iter);
void nft_set_elems_iter_destroy(struct nft_set_elems_iter *iter);

int nft_set_elems_nlmsg_build_payload_iter(struct nlmsghdr *nlh,
					   struct nft_set_elems_iter *iter);

#endif /* _LIBNFTNL_SET_H_ */
