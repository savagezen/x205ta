/**
 * Header file for eCryptfs userspace tools.
 * 
 * Copyright (C) 2004-2008 International Business Machines Corp.
 *   Author(s): Michael A. Halcrow <mahalcro@us.ibm.com>
 *
 * The structs here are shared between kernel and userspace, so if you
 * are running a 64-bit kernel, you need to compile your userspace
 * applications as 64-bit binaries.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA
 * 02111-1307, USA.
 */

#ifndef ECRYTPFS_H
#define ECRYTPFS_H

#include <stdint.h>
#include <netdb.h>
#include <limits.h>
#include <termios.h>
#ifndef S_SPLINT_S
#include <stdio.h>
#include <syslog.h>
#endif
#include <pthread.h>
#include <unistd.h>
#ifndef S_SPLINT_S
#include <sys/types.h>
#include <linux/types.h>
#endif

/* Version verification for shared data structures w/ userspace */
#ifndef ECRYPTFS_VERSION_MAJOR
#define ECRYPTFS_VERSION_MAJOR 0x00
#endif
#ifndef ECRYPTFS_VERSION_MINOR
#define ECRYPTFS_VERSION_MINOR 0x04
#endif

#ifndef ECRYPTFS_SUPPORTED_FILE_VERSION
#define ECRYPTFS_SUPPORTED_FILE_VERSION 0x03
#endif

/* These flags indicate which features are supported by the kernel
 * module; userspace tools such as the mount helper read from a sysfs
 * handle in order to determine how to behave. */
#define ECRYPTFS_VERSIONING_PASSPHRASE            0x00000001
#define ECRYPTFS_VERSIONING_PUBKEY                0x00000002
#define ECRYPTFS_VERSIONING_PLAINTEXT_PASSTHROUGH 0x00000004
#define ECRYPTFS_VERSIONING_POLICY                0x00000008
#define ECRYPTFS_VERSIONING_XATTR                 0x00000010
#define ECRYPTFS_VERSIONING_MULTKEY               0x00000020
#define ECRYPTFS_VERSIONING_MISCDEV               0x00000040
#define ECRYPTFS_VERSIONING_HMAC                  0x00000080
#define ECRYPTFS_VERSIONING_FILENAME_ENCRYPTION   0x00000100
#define ECRYPTFS_VERSIONING_GCM                   0x00000200

#define ECRYPTFS_MAX_PASSWORD_LENGTH 64
#define ECRYPTFS_MAX_PASSPHRASE_BYTES ECRYPTFS_MAX_PASSWORD_LENGTH
#define ECRYPTFS_SALT_SIZE 8
#define ECRYPTFS_SALT_SIZE_HEX (ECRYPTFS_SALT_SIZE*2)
#define ECRYPTFS_DEFAULT_SALT_HEX "0011223344556677"
#define ECRYPTFS_DEFAULT_SALT_FNEK_HEX "9988776655443322"
/* The original signature size is only for what is stored on disk; all
 * in-memory representations are expanded hex, so it better adapted to
 * be passed around on the command line */
#define ECRYPTFS_SIG_SIZE 8
#define ECRYPTFS_SIG_SIZE_HEX (ECRYPTFS_SIG_SIZE*2)
#define ECRYPTFS_PASSWORD_SIG_SIZE ECRYPTFS_SIG_SIZE_HEX
#define ECRYPTFS_MAX_KEY_BYTES 64
#define ECRYPTFS_MAX_ENCRYPTED_KEY_BYTES 512
#define ECRYPTFS_DEFAULT_IV_BYTES 16
#define ECRYPTFS_FILE_VERSION 0x03
#define ECRYPTFS_MINIMUM_HEADER_EXTENT_SIZE 8192
#define ECRYPTFS_DEFAULT_EXTENT_SIZE 4096
#define ECRPYTFS_STRING_LENGTH 128
#ifndef MAGIC_ECRYPTFS_MARKER_STR
#define MAGIC_ECRYPTFS_MARKER_STR "3c81b7f5"
#endif
#ifndef MAGIC_ECRYPTFS_MARKER
#define MAGIC_ECRYPTFS_MARKER 0x3c81b7f5
#define MAGIC_ECRYPTFS_MARKER_SIZE_BYTES 8	/* 4*2 */
#endif
#define MAX_NAME_SIZE 128
#define MAX_KEY_MOD_VALUE_SIZE 4096
#define ECRYPTFS_TAG_1_PACKET_TYPE 0x01
#define ECRYPTFS_TAG_3_PACKET_TYPE 0x8C
#define ECRYPTFS_TAG_11_PACKET_TYPE 0xED
#define ECRYPTFS_TAG_64_PACKET_TYPE 0x40
#define ECRYPTFS_TAG_65_PACKET_TYPE 0x41
#define ECRYPTFS_TAG_66_PACKET_TYPE 0x42
#define ECRYPTFS_TAG_67_PACKET_TYPE 0x43
#define ECRYPTFS_MSG_HELO 100
#define ECRYPTFS_MSG_QUIT 101
#define ECRYPTFS_MSG_REQUEST 102
#define ECRYPTFS_MSG_RESPONSE 103
#define ECRYPTFS_MSG_MAX_SIZE 1024
#define ECRYPTFS_MSG_ERROR_COUNT_THRESHOLD 8
#define ECRYPTFS_MAX_KEY_MOD_NAME_BYTES 16

#ifndef SHA512_DIGEST_LENGTH
#define SHA512_DIGEST_LENGTH 64
#endif

#ifndef SHA1_DIGEST_LENGTH
#define SHA1_DIGEST_LENGTH 20
#endif

#define PGP_DIGEST_ALGO_SHA512   10

/* TODO: Put this in configure.in, and make this ECRYPTFS_DEFAULT_KEY_MOD */
#define ECRYPTFS_KEY_MOD_OPENSSL "openssl"

#define ECRYPTFS_NOT_SALTLESS 0
#define ECRYPTFS_SALTLESS 1
/* Hash iterations are intended to make dictionary attacks more difficult */
#define ECRYPTFS_DEFAULT_NUM_HASH_ITERATIONS 65536

#define ECRYPTFS_FILE_SIZE_BYTES (sizeof(uint64_t))

#define ECRYPTFS_TAG_64_PACKET 0x40
#define ECRYPTFS_TAG_65_PACKET 0x41
#define ECRYPTFS_TAG_66_PACKET 0x42
#define ECRYPTFS_TAG_67_PACKET 0x43

#define ecryptfs_syslog(type, fmt, arg...) \
	syslog(type, "%s: " fmt, __FUNCTION__, ## arg);

#define ECRYPTFS_MAX_NUM_CIPHERS 64
#define ECRYPTFS_ECHO_ON 1
#define ECRYPTFS_ECHO_OFF 0

#define ECRYPTFS_AES_BLOCK_SIZE 16
#define ECRYPTFS_AES_KEY_BYTES 16

#define ECRYPTFS_DEFAULT_WRAPPED_PASSPHRASE_FILENAME "wrapped-passphrase"

#define ECRYPTFS_ERROR_INSERT_KEY "Error: Inserting key into the user session keyring failed"
#define ECRYPTFS_ERROR_UNWRAP "Error: Unwrapping passphrase failed"
#define ECRYPTFS_ERROR_UNWRAP_AND_INSERT "Error: Unwrapping passphrase and inserting into the user session keyring failed"
#define ECRYPTFS_ERROR_WRAP "Error: Wrapping passphrase failed"
#define ECRYPTFS_ERROR_FNEK_SUPPORT "Error: Your kernel does not support filename encryption"
#define ECRYPTFS_INFO_CHECK_LOG "Info: Check the system log for more information from libecryptfs"
#define ECRYPTFS_WARN_DEFAULT_SALT "Warning: Using default salt value (undefined in ~/.ecryptfsrc)"

extern int ecryptfs_verbosity;

/**
 * For convenience, we may need to pass around the encrypted session
 * key between kernel and userspace because the authentication token
 * may not be extractable.  For example, the TPM may not release the
 * private key, instead requiring the encrypted data and returning the
 * decrypted data.
 */
struct ecryptfs_session_key {
#define ECRYPTFS_USERSPACE_SHOULD_TRY_TO_DECRYPT 0x00000001
#define ECRYPTFS_USERSPACE_SHOULD_TRY_TO_ENCRYPT 0x00000002
#define ECRYPTFS_CONTAINS_DECRYPTED_KEY 0x00000004
#define ECRYPTFS_CONTAINS_ENCRYPTED_KEY 0x00000008
	int32_t flags;
	int32_t encrypted_key_size;
	int32_t decrypted_key_size;
	uint8_t encrypted_key[ECRYPTFS_MAX_ENCRYPTED_KEY_BYTES];
	uint8_t decrypted_key[ECRYPTFS_MAX_KEY_BYTES];
};

static const char common_salt[ECRYPTFS_SALT_SIZE] =
	{ (char)0x00, (char)0x11, (char)0x22, (char)0x33, (char)0x44,
	  (char)0x55, (char)0x66, (char)0x77 };

struct ecryptfs_password {
	int32_t password_bytes;
	int32_t hash_algo;
	int32_t hash_iterations;
	int32_t session_key_encryption_key_bytes;
#define ECRYPTFS_PERSISTENT_PASSWORD             0x01
#define ECRYPTFS_SESSION_KEY_ENCRYPTION_KEY_SET  0x02
	uint32_t flags;
	/* Iterated-hash concatenation of salt and passphrase */
	uint8_t session_key_encryption_key[ECRYPTFS_MAX_KEY_BYTES];
	uint8_t signature[ECRYPTFS_PASSWORD_SIG_SIZE + 1];
	/* Always in expanded hex */
	uint8_t salt[ECRYPTFS_SALT_SIZE];
};

struct ecryptfs_private_key {
	uint32_t key_size;
	uint32_t data_len;
	uint8_t signature[ECRYPTFS_PASSWORD_SIG_SIZE + 1];
	char key_mod_alias[ECRYPTFS_MAX_KEY_MOD_NAME_BYTES + 1];
	uint8_t data[];
};

enum ecryptfs_token_types {ECRYPTFS_PASSWORD, ECRYPTFS_PRIVATE_KEY};



/* This struct must be identical to that as defined in the kernel. */
struct ecryptfs_auth_tok {
	uint16_t version; /* 8-bit major and 8-bit minor */
	uint16_t token_type;
#define ECRYPTFS_ENCRYPT_ONLY 0x00000001
	uint32_t flags;
	struct ecryptfs_session_key session_key;
	uint8_t reserved[32];
	union {
		struct ecryptfs_password password;
		struct ecryptfs_private_key private_key;
	} token;
}  __attribute__ ((packed));

struct ecryptfs_auth_tok_list {
	struct ecryptfs_auth_tok *auth_tok;
	struct ecryptfs_auth_tok_list *next;
};

struct ecryptfs_name_val_pair {
#define ECRYPTFS_DEFAULT_VALUE_SET	0x00000004
#define ECRYPTFS_PROCESSED      	0x00000008
#define ECRYPTFS_NO_ECHO		0x00000010
	uint32_t flags;
	char *name;
	char *value;
	struct ecryptfs_name_val_pair *parent;
#define NV_MAX_CHILDREN 16
	struct ecryptfs_name_val_pair *children[NV_MAX_CHILDREN];
	struct ecryptfs_name_val_pair *next;
};

void dump_auth_tok( struct ecryptfs_auth_tok *auth_tok );
extern void to_hex( char *dst, char *src, int src_size );
extern void from_hex( char *dst, char *src, int dst_size );
extern int generate_version_from_string(unsigned char *major,
					unsigned char *minor,
					char *version);

struct ecryptfs_daemon_info {
	char socket_file_full_path[PATH_MAX];
};

struct ecryptfs_message {
	uint32_t index;
	uint32_t data_len;
	uint8_t data[];
};

struct transition_node;

/**
 * @id: Internal (to the key module) identifier for this module
 *      parameter. The key module will use the key_mod_param id to
 *      match the given value for this parameter
 * @val: The value provided
 */
struct key_mod_param_val {
	int id;
	char *val;
};

/**
 * @id: Internal (to the key module) identifier for this module
 *      parameter. The key module will use the key_mod_param_val id to
 *      match the given value for this parameter
 * @option: The parameter option
 * @description: A long text description of the parameter option
 * @suggested_val: The value that will presented to the user as the
 *                 one to select
 * @default_val: The value that will be assigned by default if none is
 *               given
 * @val: Pointer to the struct key_mod_param_val provided for this
 *       struct key_mod_param. This is matched based on @id
 */
struct key_mod_param {
	int id;
	uint32_t flags;
	char *option;
	char *description;
	char *suggested_val;
	char *default_val;
	struct key_mod_param_val *val;
};

#define ECRYPTFS_BLOB_TYPE_BLOB 0
#define ECRYPTFS_BLOB_TYPE_HINT 1

#define ECRYPTFS_KEY_MOD_SUCCESS             0
#define ECRYPTFS_KEY_MOD_BADPARAM            1
#define ECRYPTFS_KEY_MOD_BUFTOOSMALL         2
#define ECRYPTFS_KEY_MOD_INSUFFICIENT_PARAMS 3
#define ECRYPTFS_KEY_MOD_DATA_TOO_LARGE      4
#define ECRYPTFS_KEY_MOD_ENCRYPT_FAILED      5
#define ECRYPTFS_KEY_MOD_DECRYPT_FAILED      6
#define ECRYPTFS_KEY_MOD_NO_SUCH_KEY         7
#define ECRYPTFS_KEY_MOD_HINT_INSUFFICIENT   8

struct ecryptfs_ctx_ops {
	int (*prompt)(char *prompt_type, char *prompt, char *input,
		      int input_size);
};

/**
 * @init: Allocates memory on the heap and sets the alias into that
 *        memory; callee will free
 * @get_params:
 * @get_key_data: The first uint32_t (big-endian) bytes indicate the
 *                key type. If key_data_len is 0, then libecryptfs
 *                will call get_key_sig() so that the key module can
 *                generate its own sig.
 * @get_key_sig: Optional. Allows the key module to generate its own
 *               key signature. Used in cases where libecryptfs does
 *               not know about the key type, so @get_key_data is of
 *               no use. @get_key_sig is not called if @get_key_data
 *               returns valid key data.
 * @encrypt: If to is NULL, only fill in to_size with the amount
 *           that the callee needs to allocate.
 * @decrypt: If to is NULL, only fill in to_size with the amount
 *           that the callee needs to allocate.
 * @finalize: Call when the entire key module is shutting down
 */
struct ecryptfs_key_mod_ops {
	int (*init)(char **alias);
	int (*get_gen_key_params)(struct key_mod_param **params,
				  uint32_t *num_params);
	int (*get_gen_key_subgraph_trans_node)(struct transition_node **trans,
					       uint32_t version);
	int (*get_params)(struct key_mod_param **params, uint32_t *num_params);
	int (*get_param_subgraph_trans_node)(struct transition_node **trans,
					     uint32_t version);
	int (*get_blob)(unsigned char *blob, size_t *blob_size,
			struct key_mod_param_val *param_vals,
			uint32_t num_param_vals);
	int (*get_key_data)(unsigned char *key_data, size_t *key_data_len,
			    unsigned char *blob);
	int (*get_key_sig)(unsigned char *sig, unsigned char *blob);
	int (*get_key_hint)(unsigned char *hint, size_t *hint_len,
			    unsigned char *blob);
	int (*encrypt)(char *to, size_t *to_size, char *from, size_t from_size,
		       unsigned char *blob, int blob_type);
	int (*decrypt)(char *to, size_t *to_size, char *from, size_t from_size,
		       unsigned char *blob, int blob_type);
	int (*destroy)(unsigned char *blob);
	int (*finalize)(void);
};

/**
 * @lib_handle:
 * @alias:
 * @lib_path:
 * @trans_into_mod_subgraph:
 * @ops:
 * @param_vals:
 * @num_param_vals:
 * @nvp_head:
 * @next:
 */
struct ecryptfs_key_mod {
	void *lib_handle;
	char *alias;
	char *lib_path;
	struct transition_node *trans_into_mod_subgraph;
	struct transition_node *trans_into_mod_key_gen_subgraph;
	struct ecryptfs_key_mod_ops *ops;
	struct key_mod_param_val *param_vals;
	uint32_t num_param_vals;
	char *blob;
	size_t blob_size;
	struct ecryptfs_key_mod *next;
};

struct ecryptfs_ctx {
	void *ctx_mutex;
	struct ecryptfs_key_mod key_mod_list_head;
	int verbosity;
	int (*get_string)(char **val, char *prompt, int echo);
	FILE *file_in;
	FILE *file_out;
	struct ecryptfs_name_val_pair *nvp_head;
};

enum main_menu_enum {
	MME_NULL,
	MME_MOUNT_PASSPHRASE,
	MME_MOUNT_PUBKEY,
	MME_GEN_PUBKEY,
	MME_ABORT
};

struct val_node;
struct param_node;

struct ecryptfs_nl_ctx {
	int socket_fd;
};

#define ECRYPTFS_DEFAULT_MISCDEV_FULLPATH_0 "/dev/ecryptfs"
#define ECRYPTFS_DEFAULT_MISCDEV_FULLPATH_1 "/dev/misc/ecryptfs"

struct ecryptfs_miscdev_ctx {
	char *miscdev_filename;
	int miscdev_fd;
};

struct ecryptfs_messaging_ctx {
#define ECRYPTFS_MESSAGING_TYPE_NETLINK 0x00000001 /* No longer supported */
#define ECRYPTFS_MESSAGING_TYPE_MISCDEV 0x00000002
	uint32_t type;
#define ECRYPTFS_MESSAGING_STATE_LISTENING 0x00000001
	uint32_t state;
	union {
		struct ecryptfs_miscdev_ctx miscdev_ctx;
		struct ecryptfs_nl_ctx nl_ctx;
	} ctx;
};

struct ecryptfs_crypt_stat_user {
#define ECRYPTFS_STRUCT_INITIALIZED 0x00000001
#define ECRYPTFS_POLICY_APPLIED     0x00000002
#define ECRYPTFS_NEW_FILE           0x00000004
#define ECRYPTFS_ENCRYPTED          0x00000008
#define ECRYPTFS_SECURITY_WARNING   0x00000010
#define ECRYPTFS_ENABLE_HMAC        0x00000020
#define ECRYPTFS_ENCRYPT_IV_PAGES   0x00000040
#define ECRYPTFS_KEY_VALID          0x00000080
#define ECRYPTFS_METADATA_IN_XATTR  0x00000100
#define ECRYPTFS_VIEW_AS_ENCRYPTED  0x00000200
#define ECRYPTFS_KEY_SET            0x00000400
	uint32_t flags;
	unsigned int file_version;
	uint64_t file_size;
	size_t iv_bytes;
	size_t num_header_bytes_at_front;
	size_t extent_size;
	size_t key_size;
	struct ecryptfs_auth_tok_list *ptr_to_auth_tok_list_head;
};

typedef struct binary_data {
	int size;
	unsigned char *data;
} binary_data;

int ecryptfs_get_version(uint32_t *version);
int ecryptfs_supports_passphrase(uint32_t version);
int ecryptfs_supports_pubkey(uint32_t version);
int ecryptfs_supports_plaintext_passthrough(uint32_t version);
int ecryptfs_supports_hmac(uint32_t version);
int ecryptfs_supports_filename_encryption(uint32_t version);
int ecryptfs_supports_policy(uint32_t version);
int ecryptfs_supports_xattr(uint32_t version);
#define ECRYPTFS_ASK_FOR_ALL_MOUNT_OPTIONS 0
#define ECRYPTFS_KEY_MODULE_ONLY 1
int ecryptfs_process_decision_graph(struct ecryptfs_ctx *ctx,
                                    struct val_node **head, uint32_t version,
                                    char *opts_str, int key_module_only);
int ecryptfs_process_key_gen_decision_graph(struct ecryptfs_ctx *ctx,
					    uint32_t version);
int get_string(char *val, int len, int echo);
int get_string_stdin(char **val, char *prompt, int echo);
int stack_pop(struct val_node **head);
int stack_pop_val(struct val_node **head, void **val);
int stack_push(struct val_node **head, void *val);
int ecryptfs_get_key_mod_list(struct ecryptfs_ctx* ctx);
int ecryptfs_parse_rc_file(struct ecryptfs_name_val_pair *nvp_list_head);
int ecryptfs_parse_options(char *opts, struct ecryptfs_name_val_pair *head);
int ecryptfs_eval_decision_graph(struct ecryptfs_ctx *ctx,
				 struct val_node **head,
				 struct param_node *root_node,
				 struct ecryptfs_name_val_pair *nvp_head);
int ecryptfs_add_passphrase_key_to_keyring(char *auth_tok_sig, char *passphrase,
					   char *salt);
int ecryptfs_add_key_module_key_to_keyring(char *auth_tok_sig,
					   struct ecryptfs_key_mod *key_mod);
int ecryptfs_read_salt_hex_from_rc(char *salt_hex);
int ecryptfs_generate_key(void);
int ecryptfs_free_key_mod_list(struct ecryptfs_ctx *ctx);
int create_default_dir(char *home, struct ecryptfs_key_mod *key_mod);
int
create_subdirectory(char *file, char *home, struct ecryptfs_key_mod *key_mod);
int parse_packet(struct ecryptfs_ctx *ctx,
		 struct ecryptfs_message *emsg,
		 struct ecryptfs_message **reply);
int ecryptfs_find_key_mod(struct ecryptfs_key_mod **key_mod,
			  struct ecryptfs_ctx *ctx, char *key_mod_alias);
int generate_passphrase_sig(char *passphrase_sig, char *fekek, char *salt,
			    char *passphrase);
int
generate_payload(struct ecryptfs_auth_tok *auth_tok, char *passphrase_sig,
		 char *salt, char *session_key_encryption_key);
int
ecryptfs_generate_key_payload(struct ecryptfs_auth_tok *auth_tok,
			      struct ecryptfs_key_mod *key_mod, char *sig,
			      size_t blob_size);
int parse_options_file(int fd, struct ecryptfs_name_val_pair *head);
int free_name_val_pairs(struct ecryptfs_name_val_pair *pair);
int ecryptfs_init_messaging(struct ecryptfs_messaging_ctx *mctx, uint32_t type);
int ecryptfs_messaging_exit(struct ecryptfs_messaging_ctx *mctx);
int ecryptfs_nvp_list_union(struct ecryptfs_name_val_pair *dst,
			    struct ecryptfs_name_val_pair *src,
			    struct ecryptfs_name_val_pair *allowed_duplicates);
int ecryptfs_read_salt_hex_from_rc(char *salt_hex);
#define ECRYPTFS_SIG_FLAG_NOENT 0x00000001
int ecryptfs_check_sig(char *auth_tok_sig, char *sig_cache_filename,
		       int *flags);
int ecryptfs_append_sig(char *auth_tok_sig, char *sig_cache_filename);
int __ecryptfs_detect_wrapped_passphrase_file_version(const char *filename,
						      uint8_t *version);
int ecryptfs_wrap_passphrase_file(char *dest, char *wrapping_passphrase,
 			     char *wrapping_salt, char *src);
int ecryptfs_wrap_passphrase(char *filename, char *wrapping_passphrase,
			     char *unused, char *decrypted_passphrase);
int ecryptfs_unwrap_passphrase(char *decrypted_passphrase, char *filename,
			       char *wrapping_passphrase, char *wrapping_salt);
int ecryptfs_insert_wrapped_passphrase_into_keyring(
	char *auth_tok_sig, char *filename, char *wrapping_passphrase,
	char *salt);
char *ecryptfs_get_wrapped_passphrase_filename();
struct ecryptfs_key_mod_ops *passphrase_get_key_mod_ops(void);
int ecryptfs_validate_keyring(void);
#define ECRYPTFS_SHM_KEY 0x3c81b7f5
#define ECRYPTFS_SEM_KEY 0x3c81b7f6
#define ECRYPTFS_SHM_SIZE 4096
#define ECRYPTFS_ZOMBIE_SLEEP_SECONDS 300
int ecryptfs_set_zombie_session_placeholder(void);
int ecryptfs_kill_and_clear_zombie_session_placeholder(void);
int ecryptfs_list_zombie_session_placeholders(void);
int ecryptfs_build_linear_subgraph_from_nvp(struct transition_node **trans_node,
					    struct ecryptfs_key_mod *key_mod);
int ecryptfs_build_linear_subgraph(struct transition_node **trans_node,
				   struct ecryptfs_key_mod *key_mod);
int ecryptfs_generate_sig_from_key_data(unsigned char *sig,
					unsigned char *key_data,
					size_t key_data_len);
int ecryptfs_fill_in_dummy_ops(struct ecryptfs_key_mod_ops *key_mod_ops);
int ecryptfs_register_key_modules(struct ecryptfs_ctx* ctx);
int ecryptfs_write_packet_length(char *dest, size_t size,
				 size_t *packet_size_length);
int ecryptfs_parse_packet_length(unsigned char *data, size_t *size,
				 size_t *length_size);
int ecryptfs_get_proc_mount_point(char **proc_mount_point);
int ecryptfs_send_message(struct ecryptfs_messaging_ctx *mctx,
			  struct ecryptfs_message *msg,
			  unsigned char msg_type, uint16_t msg_flags,
			  uint32_t msg_seq);
int ecryptfs_init_miscdev(struct ecryptfs_miscdev_ctx *miscdev_ctx);
int ecryptfs_send_miscdev(struct ecryptfs_miscdev_ctx *miscdev_ctx,
			  struct ecryptfs_message *msg, uint8_t msg_type,
			  uint16_t msg_flags, uint32_t msg_seq);
void ecryptfs_release_miscdev(struct ecryptfs_miscdev_ctx *miscdev_ctx);
int ecryptfs_run_miscdev_daemon(struct ecryptfs_miscdev_ctx *miscdev_ctx);
struct ecryptfs_ctx_ops *cryptfs_get_ctx_opts(void);
int ecryptfs_parse_stat(struct ecryptfs_crypt_stat_user *crypt_stat, char *buf,
			size_t buf_size);
binary_data ecryptfs_passphrase_blob(char *salt, char *passphrase);
binary_data ecryptfs_passphrase_sig_from_blob(char *blob);
int ecryptfs_add_passphrase_blob_to_keyring(char *blob, char *sig);
int ecryptfs_remove_auth_tok_from_keyring(char *auth_tok_sig);
int ecryptfs_add_auth_tok_to_keyring(struct ecryptfs_auth_tok *auth_tok,
				     char *auth_tok_sig);
int ecryptfs_add_blob_to_keyring(char *blob, char *sig);

int ecryptfs_disable_echo(struct termios *saved_settings);
int ecryptfs_enable_echo(struct termios *saved_settings);
char *ecryptfs_get_passphrase(char *prompt);
int ecryptfs_run_daemon(struct ecryptfs_messaging_ctx *mctx);

#define ECRYPTFS_PRIVATE_DIR "Private"
char *ecryptfs_fetch_private_mnt(char *pw_dir);
int ecryptfs_private_is_mounted(char *dev, char *mnt, char *sig, int mounting);

#endif
