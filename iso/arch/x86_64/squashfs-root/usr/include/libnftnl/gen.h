#ifndef _LIBNFTNL_GEN_H_
#define _LIBNFTNL_GEN_H_

#include <stdio.h>
#include <stdint.h>
#include <stdbool.h>
#include <sys/types.h>

#include <libnftnl/common.h>

#ifdef __cplusplus
extern "C" {
#endif

struct nftnl_gen;

struct nftnl_gen *nftnl_gen_alloc(void);
void nftnl_gen_free(struct nftnl_gen *);

enum {
	NFTNL_GEN_ID 	= 0,
	__NFTNL_GEN_MAX
};
#define NFTNL_GEN_MAX (__NFTNL_GEN_MAX - 1)

bool nftnl_gen_is_set(const struct nftnl_gen *gen, uint16_t attr);
void nftnl_gen_unset(struct nftnl_gen *gen, uint16_t attr);
void nftnl_gen_set(struct nftnl_gen *gen, uint16_t attr, const void *data);
void nftnl_gen_set_data(struct nftnl_gen *gen, uint16_t attr,
			     const void *data, uint32_t data_len);
const void *nftnl_gen_get(struct nftnl_gen *gen, uint16_t attr);
const void *nftnl_gen_get_data(struct nftnl_gen *gen, uint16_t attr,
				    uint32_t *data_len);

void nftnl_gen_set_u32(struct nftnl_gen *gen, uint16_t attr, uint32_t data);
uint32_t nftnl_gen_get_u32(struct nftnl_gen *gen, uint16_t attr);

struct nlmsghdr;
int nftnl_gen_nlmsg_parse(const struct nlmsghdr *nlh, struct nftnl_gen *gen);

int nftnl_gen_snprintf(char *buf, size_t size, struct nftnl_gen *gen, uint32_t type, uint32_t flags);
int nftnl_gen_fprintf(FILE *fp, struct nftnl_gen *gen, uint32_t type, uint32_t flags);

#define nftnl_gen_nlmsg_build_hdr	nftnl_nlmsg_build_hdr
int nftnl_gen_nlmsg_parse(const struct nlmsghdr *nlh, struct nftnl_gen *gen);

/*
 * Compat
 */

struct nft_gen;

struct nft_gen *nft_gen_alloc(void);
void nft_gen_free(struct nft_gen *);

enum {
	NFT_GEN_ID 	= 0,
	__NFT_GEN_MAX
};
#define NFT_GEN_MAX (__NFT_GEN_MAX - 1)

bool nft_gen_attr_is_set(const struct nft_gen *gen, uint16_t attr);
void nft_gen_attr_unset(struct nft_gen *gen, uint16_t attr);
void nft_gen_attr_set(struct nft_gen *gen, uint16_t attr, const void *data);
void nft_gen_attr_set_data(struct nft_gen *gen, uint16_t attr,
			     const void *data, uint32_t data_len);
const void *nft_gen_attr_get(struct nft_gen *gen, uint16_t attr);
const void *nft_gen_attr_get_data(struct nft_gen *gen, uint16_t attr,
				    uint32_t *data_len);

void nft_gen_attr_set_u32(struct nft_gen *gen, uint16_t attr, uint32_t data);
uint32_t nft_gen_attr_get_u32(struct nft_gen *gen, uint16_t attr);

struct nlmsghdr;
int nft_gen_nlmsg_parse(const struct nlmsghdr *nlh, struct nft_gen *gen);

int nft_gen_snprintf(char *buf, size_t size, struct nft_gen *gen, uint32_t type, uint32_t flags);
int nft_gen_fprintf(FILE *fp, struct nft_gen *gen, uint32_t type, uint32_t flags);

#define nft_gen_nlmsg_build_hdr	nft_nlmsg_build_hdr
int nft_gen_nlmsg_parse(const struct nlmsghdr *nlh, struct nft_gen *gen);

#ifdef __cplusplus
} /* extern "C" */
#endif

#endif /* _LIBNFTNL_GEN_H_ */
