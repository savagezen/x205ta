#ifndef _LIBNFTNL_BATCH_H_
#define _LIBNFTNL_BATCH_H_

#include <stdint.h>

struct nftnl_batch;

struct nftnl_batch *nftnl_batch_alloc(uint32_t pg_size, uint32_t pg_overrun_size);
int nftnl_batch_update(struct nftnl_batch *batch);
void nftnl_batch_free(struct nftnl_batch *batch);

void *nftnl_batch_buffer(struct nftnl_batch *batch);
uint32_t nftnl_batch_buffer_len(struct nftnl_batch *batch);

int nftnl_batch_iovec_len(struct nftnl_batch *batch);
void nftnl_batch_iovec(struct nftnl_batch *batch, struct iovec *iov, uint32_t iovlen);

/*
 * Compat
 */

struct nft_batch;

struct nft_batch *nft_batch_alloc(uint32_t pg_size, uint32_t pg_overrun_size);
int nft_batch_update(struct nft_batch *batch);
void nft_batch_free(struct nft_batch *batch);

void *nft_batch_buffer(struct nft_batch *batch);
uint32_t nft_batch_buffer_len(struct nft_batch *batch);

int nft_batch_iovec_len(struct nft_batch *batch);
void nft_batch_iovec(struct nft_batch *batch, struct iovec *iov, uint32_t iovlen);

#endif
