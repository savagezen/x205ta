/*	$OpenBSD: svc_auth.h,v 1.2 1997/09/21 10:46:16 niklas Exp $	*/
/*	$NetBSD: svc_auth.h,v 1.4 1994/10/26 00:57:07 cgd Exp $	*/

/*
 * Copyright (c) 2009, Sun Microsystems, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * - Redistributions of source code must retain the above copyright notice,
 *   this list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 * - Neither the name of Sun Microsystems, Inc. nor the names of its
 *   contributors may be used to endorse or promote products derived
 *   from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 *	from: @(#)svc_auth.h 1.6 86/07/16 SMI
 *	@(#)svc_auth.h	2.1 88/07/29 4.0 RPCSRC
 */

/*
 * svc_auth.h, Service side of rpc authentication.
 *
 * Copyright (C) 1984, Sun Microsystems, Inc.
 */

#ifndef _RPC_SVCAUTH_H
#define _RPC_SVCAUTH_H

struct svc_req;

/*
 * Interface to server-side authentication flavors.
 */
typedef struct svc_authentication_data {
	struct svc_auth_ops {
		int   (*svc_ah_wrap)(struct svc_authentication_data *auth,
				     XDR *xdrs,
				     xdrproc_t xdr_func,
				     caddr_t xdr_ptr);
		int   (*svc_ah_unwrap)(struct svc_authentication_data *auth,
				       XDR *xdrs,
				       xdrproc_t xdr_func,
				       caddr_t xdr_ptr);
		int   (*svc_ah_destroy)(struct svc_authentication_data *auth);
	} *svc_ah_ops;
	caddr_t svc_ah_private;
} SVCAUTH;

#define SVCAUTH_WRAP(auth, xdrs, xfunc, xwhere) \
     ((*((auth)->svc_ah_ops->svc_ah_wrap))(auth, xdrs, xfunc, xwhere))
#define SVCAUTH_UNWRAP(auth, xdrs, xfunc, xwhere) \
     ((*((auth)->svc_ah_ops->svc_ah_unwrap))(auth, xdrs, xfunc, xwhere))
#define SVCAUTH_DESTROY(auth) \
     ((*((auth)->svc_ah_ops->svc_ah_destroy))(auth))

/*
 * Approved way of getting principal of caller
 */
char *svcauth_gss_get_principal	__P((SVCAUTH *auth));

/*
 * Approved way of setting server principal
 */
bool_t
svcauth_gss_set_svc_name(char *principal, char *mechanism, u_int req_time,
			 u_int program, u_int version);

/*
 * Server side authenticator
 */
__BEGIN_DECLS
extern enum auth_stat _authenticate(struct svc_req *__rqst,
				    struct rpc_msg *__msg,
				    bool_t *no_dispatch);
__END_DECLS

#endif /* !_RPC_SVCAUTH_H */
