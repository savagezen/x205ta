#ifndef _LIBNFTNL_RULE_H_
#define _LIBNFTNL_RULE_H_

#include <stdio.h>
#include <stdint.h>
#include <stdbool.h>
#include <sys/types.h>

#include <libnftnl/common.h>

#ifdef __cplusplus
extern "C" {
#endif

struct nftnl_rule;
struct nftnl_expr;

struct nftnl_rule *nftnl_rule_alloc(void);
void nftnl_rule_free(struct nftnl_rule *);

enum nftnl_rule_attr {
	NFTNL_RULE_FAMILY	= 0,
	NFTNL_RULE_TABLE,
	NFTNL_RULE_CHAIN,
	NFTNL_RULE_HANDLE,
	NFTNL_RULE_COMPAT_PROTO,
	NFTNL_RULE_COMPAT_FLAGS,
	NFTNL_RULE_POSITION,
	NFTNL_RULE_USERDATA,
	__NFTNL_RULE_MAX
};
#define NFTNL_RULE_MAX (__NFTNL_RULE_MAX - 1)

void nftnl_rule_unset(struct nftnl_rule *r, uint16_t attr);
bool nftnl_rule_is_set(const struct nftnl_rule *r, uint16_t attr);
void nftnl_rule_set(struct nftnl_rule *r, uint16_t attr, const void *data);
void nftnl_rule_set_data(struct nftnl_rule *r, uint16_t attr,
			    const void *data, uint32_t data_len);
void nftnl_rule_set_u32(struct nftnl_rule *r, uint16_t attr, uint32_t val);
void nftnl_rule_set_u64(struct nftnl_rule *r, uint16_t attr, uint64_t val);
void nftnl_rule_set_str(struct nftnl_rule *r, uint16_t attr, const char *str);

const void *nftnl_rule_get(const struct nftnl_rule *r, uint16_t attr);
const void *nftnl_rule_get_data(const struct nftnl_rule *r, uint16_t attr,
				   uint32_t *data_len);
const char *nftnl_rule_get_str(const struct nftnl_rule *r, uint16_t attr);
uint8_t nftnl_rule_get_u8(const struct nftnl_rule *r, uint16_t attr);
uint32_t nftnl_rule_get_u32(const struct nftnl_rule *r, uint16_t attr);
uint64_t nftnl_rule_get_u64(const struct nftnl_rule *r, uint16_t attr);

void nftnl_rule_add_expr(struct nftnl_rule *r, struct nftnl_expr *expr);

struct nlmsghdr;

void nftnl_rule_nlmsg_build_payload(struct nlmsghdr *nlh, struct nftnl_rule *t);

int nftnl_rule_parse(struct nftnl_rule *r, enum nftnl_parse_type type,
		   const char *data, struct nftnl_parse_err *err);
int nftnl_rule_parse_file(struct nftnl_rule *r, enum nftnl_parse_type type,
			FILE *fp, struct nftnl_parse_err *err);
int nftnl_rule_snprintf(char *buf, size_t size, struct nftnl_rule *t, uint32_t type, uint32_t flags);
int nftnl_rule_fprintf(FILE *fp, struct nftnl_rule *r, uint32_t type, uint32_t flags);

#define nftnl_rule_nlmsg_build_hdr	nftnl_nlmsg_build_hdr
int nftnl_rule_nlmsg_parse(const struct nlmsghdr *nlh, struct nftnl_rule *t);

int nftnl_expr_foreach(struct nftnl_rule *r,
			  int (*cb)(struct nftnl_expr *e, void *data),
			  void *data);

struct nftnl_expr_iter;

struct nftnl_expr_iter *nftnl_expr_iter_create(struct nftnl_rule *r);
struct nftnl_expr *nftnl_expr_iter_next(struct nftnl_expr_iter *iter);
void nftnl_expr_iter_destroy(struct nftnl_expr_iter *iter);

struct nftnl_rule_list;

struct nftnl_rule_list *nftnl_rule_list_alloc(void);
void nftnl_rule_list_free(struct nftnl_rule_list *list);
int nftnl_rule_list_is_empty(struct nftnl_rule_list *list);
void nftnl_rule_list_add(struct nftnl_rule *r, struct nftnl_rule_list *list);
void nftnl_rule_list_add_tail(struct nftnl_rule *r, struct nftnl_rule_list *list);
void nftnl_rule_list_del(struct nftnl_rule *r);
int nftnl_rule_list_foreach(struct nftnl_rule_list *rule_list, int (*cb)(struct nftnl_rule *t, void *data), void *data);

struct nftnl_rule_list_iter;

struct nftnl_rule_list_iter *nftnl_rule_list_iter_create(struct nftnl_rule_list *l);
struct nftnl_rule *nftnl_rule_list_iter_cur(struct nftnl_rule_list_iter *iter);
struct nftnl_rule *nftnl_rule_list_iter_next(struct nftnl_rule_list_iter *iter);
void nftnl_rule_list_iter_destroy(struct nftnl_rule_list_iter *iter);

/*
 * Compat
 */

struct nft_rule;
struct nft_rule_expr;

struct nft_rule *nft_rule_alloc(void);
void nft_rule_free(struct nft_rule *);

enum {
	NFT_RULE_ATTR_FAMILY	= 0,
	NFT_RULE_ATTR_TABLE,
	NFT_RULE_ATTR_CHAIN,
	NFT_RULE_ATTR_HANDLE,
	NFT_RULE_ATTR_COMPAT_PROTO,
	NFT_RULE_ATTR_COMPAT_FLAGS,
	NFT_RULE_ATTR_POSITION,
	NFT_RULE_ATTR_USERDATA,
	__NFT_RULE_ATTR_MAX
};
#define NFT_RULE_ATTR_MAX (__NFT_RULE_ATTR_MAX - 1)

void nft_rule_attr_unset(struct nft_rule *r, uint16_t attr);
bool nft_rule_attr_is_set(const struct nft_rule *r, uint16_t attr);
void nft_rule_attr_set(struct nft_rule *r, uint16_t attr, const void *data);
void nft_rule_attr_set_data(struct nft_rule *r, uint16_t attr,
			    const void *data, uint32_t data_len);
void nft_rule_attr_set_u32(struct nft_rule *r, uint16_t attr, uint32_t val);
void nft_rule_attr_set_u64(struct nft_rule *r, uint16_t attr, uint64_t val);
void nft_rule_attr_set_str(struct nft_rule *r, uint16_t attr, const char *str);

const void *nft_rule_attr_get(const struct nft_rule *r, uint16_t attr);
const void *nft_rule_attr_get_data(const struct nft_rule *r, uint16_t attr,
				   uint32_t *data_len);
const char *nft_rule_attr_get_str(const struct nft_rule *r, uint16_t attr);
uint8_t nft_rule_attr_get_u8(const struct nft_rule *r, uint16_t attr);
uint32_t nft_rule_attr_get_u32(const struct nft_rule *r, uint16_t attr);
uint64_t nft_rule_attr_get_u64(const struct nft_rule *r, uint16_t attr);

void nft_rule_add_expr(struct nft_rule *r, struct nft_rule_expr *expr);

struct nlmsghdr;

void nft_rule_nlmsg_build_payload(struct nlmsghdr *nlh, struct nft_rule *t);

int nft_rule_parse(struct nft_rule *r, enum nft_parse_type type,
		   const char *data, struct nft_parse_err *err);
int nft_rule_parse_file(struct nft_rule *r, enum nft_parse_type type,
			FILE *fp, struct nft_parse_err *err);
int nft_rule_snprintf(char *buf, size_t size, struct nft_rule *t, uint32_t type, uint32_t flags);
int nft_rule_fprintf(FILE *fp, struct nft_rule *r, uint32_t type, uint32_t flags);

#define nft_rule_nlmsg_build_hdr	nft_nlmsg_build_hdr
int nft_rule_nlmsg_parse(const struct nlmsghdr *nlh, struct nft_rule *t);

int nft_rule_expr_foreach(struct nft_rule *r,
			  int (*cb)(struct nft_rule_expr *e, void *data),
			  void *data);

struct nft_rule_expr_iter;

struct nft_rule_expr_iter *nft_rule_expr_iter_create(struct nft_rule *r);
struct nft_rule_expr *nft_rule_expr_iter_next(struct nft_rule_expr_iter *iter);
void nft_rule_expr_iter_destroy(struct nft_rule_expr_iter *iter);

struct nft_rule_list;

struct nft_rule_list *nft_rule_list_alloc(void);
void nft_rule_list_free(struct nft_rule_list *list);
int nft_rule_list_is_empty(struct nft_rule_list *list);
void nft_rule_list_add(struct nft_rule *r, struct nft_rule_list *list);
void nft_rule_list_add_tail(struct nft_rule *r, struct nft_rule_list *list);
void nft_rule_list_del(struct nft_rule *r);
int nft_rule_list_foreach(struct nft_rule_list *rule_list, int (*cb)(struct nft_rule *t, void *data), void *data);

struct nft_rule_list_iter;

struct nft_rule_list_iter *nft_rule_list_iter_create(struct nft_rule_list *l);
struct nft_rule *nft_rule_list_iter_cur(struct nft_rule_list_iter *iter);
struct nft_rule *nft_rule_list_iter_next(struct nft_rule_list_iter *iter);
void nft_rule_list_iter_destroy(struct nft_rule_list_iter *iter);

#ifdef __cplusplus
} /* extern "C" */
#endif

#endif /* _LIBNFTNL_RULE_H_ */
