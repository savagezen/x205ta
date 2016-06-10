#ifndef _LIBNFTNL_COMMON_H_
#define _LIBNFTNL_COMMON_H_

#include <stdint.h>

enum {
	NFTNL_PARSE_EBADINPUT	= 0,
	NFTNL_PARSE_EMISSINGNODE,
	NFTNL_PARSE_EBADTYPE,
	NFTNL_PARSE_EOPNOTSUPP,
};

enum nftnl_output_type {
	NFTNL_OUTPUT_DEFAULT	= 0,
	NFTNL_OUTPUT_XML,
	NFTNL_OUTPUT_JSON,
};

enum nftnl_output_flags {
	NFTNL_OF_EVENT_NEW	= (1 << 0),
	NFTNL_OF_EVENT_DEL	= (1 << 1),
	NFTNL_OF_EVENT_ANY	= (NFTNL_OF_EVENT_NEW | NFTNL_OF_EVENT_DEL),
};

enum nftnl_cmd_type {
	NFTNL_CMD_UNSPEC		= 0,
	NFTNL_CMD_ADD,
	NFTNL_CMD_INSERT,
	NFTNL_CMD_DELETE,
	NFTNL_CMD_REPLACE,
	NFTNL_CMD_FLUSH,
	NFTNL_CMD_MAX,
};

enum nftnl_parse_type {
	NFTNL_PARSE_NONE		= 0,
	NFTNL_PARSE_XML,
	NFTNL_PARSE_JSON,
	NFTNL_PARSE_MAX,
};

struct nftnl_parse_err;

struct nlmsghdr *nftnl_nlmsg_build_hdr(char *buf, uint16_t cmd, uint16_t family,
				     uint16_t type, uint32_t seq);

struct nftnl_parse_err *nftnl_parse_err_alloc(void);
void nftnl_parse_err_free(struct nftnl_parse_err *);
int nftnl_parse_perror(const char *str, struct nftnl_parse_err *err);

int nftnl_batch_is_supported(void);
void nftnl_batch_begin(char *buf, uint32_t seq);
void nftnl_batch_end(char *buf, uint32_t seq);

/*
 * Compat
 */

enum {
	NFT_PARSE_EBADINPUT	= 0,
	NFT_PARSE_EMISSINGNODE,
	NFT_PARSE_EBADTYPE,
	NFT_PARSE_EOPNOTSUPP,
};

enum nft_output_type {
	NFT_OUTPUT_DEFAULT	= 0,
	NFT_OUTPUT_XML,
	NFT_OUTPUT_JSON,
};

enum nft_output_flags {
	NFT_OF_EVENT_NEW	= (1 << 0),
	NFT_OF_EVENT_DEL	= (1 << 1),
	NFT_OF_EVENT_ANY	= (NFT_OF_EVENT_NEW | NFT_OF_EVENT_DEL),
};

enum nft_cmd_type {
	NFT_CMD_UNSPEC		= 0,
	NFT_CMD_ADD,
	NFT_CMD_INSERT,
	NFT_CMD_DELETE,
	NFT_CMD_REPLACE,
	NFT_CMD_FLUSH,
	NFT_CMD_MAX,
};

enum nft_parse_type {
	NFT_PARSE_NONE		= 0,
	NFT_PARSE_XML,
	NFT_PARSE_JSON,
	NFT_PARSE_MAX,
};

struct nft_parse_err;

struct nlmsghdr *nft_nlmsg_build_hdr(char *buf, uint16_t cmd, uint16_t family,
				     uint16_t type, uint32_t seq);

struct nft_parse_err *nft_parse_err_alloc(void);
void nft_parse_err_free(struct nft_parse_err *);
int nft_parse_perror(const char *str, struct nft_parse_err *err);

int nft_batch_is_supported(void);
void nft_batch_begin(char *buf, uint32_t seq);
void nft_batch_end(char *buf, uint32_t seq);

#endif
