/* irssi-config.h.  Generated from irssi-config.h.in by configure.  */
/* irssi-config.h.in.  Generated from configure.ac by autoheader.  */
/* misc.. */
#define HAVE_IPV6 1
/* #undef HAVE_SOCKS_H */
#define HAVE_STATIC_PERL 1
#define HAVE_GMODULE 1

/* macros/curses checks */
#define HAS_CURSES 1
/* #undef USE_SUNOS_CURSES */
/* #undef USE_BSD_CURSES */
/* #undef USE_SYSV_CURSES */
#define USE_NCURSES 1
/* #undef NO_COLOR_CURSES */
/* #undef SCO_FLAVOR */

/* our own curses checks */
/* #undef HAVE_NCURSES_USE_DEFAULT_COLORS */
/* #undef HAVE_CURSES_IDCOK */
/* #undef HAVE_CURSES_RESIZETERM */
/* #undef HAVE_CURSES_WRESIZE */

/* terminfo/termcap */
#define HAVE_TERMINFO 1

/* What type should be used for uoff_t */
/* #undef UOFF_T_INT */
#define UOFF_T_LONG 1
/* #undef UOFF_T_LONG_LONG */

/* printf()-format for uoff_t, eg. "u" or "lu" or "llu" */
#define PRIuUOFF_T "lu"

/* DANE support */
/* #undef HAVE_DANE */

/* Define to 1 if you have the <dirent.h> header file. */
#define HAVE_DIRENT_H 1

/* Define to 1 if you have the <dlfcn.h> header file. */
#define HAVE_DLFCN_H 1

/* Define to 1 if you have the <inttypes.h> header file. */
#define HAVE_INTTYPES_H 1

/* Define to 1 if you have the <memory.h> header file. */
#define HAVE_MEMORY_H 1

/* Build with OpenSSL support */
#define HAVE_OPENSSL /**/

/* Define to 1 if you have the <openssl/err.h> header file. */
/* #undef HAVE_OPENSSL_ERR_H */

/* Define to 1 if you have the <openssl/ssl.h> header file. */
/* #undef HAVE_OPENSSL_SSL_H */

/* Define to 1 if you have the <regex.h> header file. */
#define HAVE_REGEX_H 1

/* Build with socks support */
/* #undef HAVE_SOCKS */

/* Define to 1 if you have the <stdint.h> header file. */
#define HAVE_STDINT_H 1

/* Define to 1 if you have the <stdlib.h> header file. */
#define HAVE_STDLIB_H 1

/* Define to 1 if you have the <strings.h> header file. */
#define HAVE_STRINGS_H 1

/* Define to 1 if you have the <string.h> header file. */
#define HAVE_STRING_H 1

/* Define to 1 if you have the <sys/ioctl.h> header file. */
#define HAVE_SYS_IOCTL_H 1

/* Define to 1 if you have the <sys/resource.h> header file. */
#define HAVE_SYS_RESOURCE_H 1

/* Define to 1 if you have the <sys/socket.h> header file. */
#define HAVE_SYS_SOCKET_H 1

/* Define to 1 if you have the <sys/stat.h> header file. */
#define HAVE_SYS_STAT_H 1

/* Define to 1 if you have the <sys/time.h> header file. */
#define HAVE_SYS_TIME_H 1

/* Define to 1 if you have the <sys/types.h> header file. */
#define HAVE_SYS_TYPES_H 1

/* Define to 1 if you have the <sys/utsname.h> header file. */
#define HAVE_SYS_UTSNAME_H 1

/* Define to 1 if you have the <unistd.h> header file. */
#define HAVE_UNISTD_H 1

/* Define to the sub-directory where libtool stores uninstalled libraries. */
#define LT_OBJDIR ".libs/"

/* Define to the address where bug reports for this package should be sent. */
#define PACKAGE_BUGREPORT ""

/* Define to the full name of this package. */
#define PACKAGE_NAME "irssi"

/* Define to the full name and version of this package. */
#define PACKAGE_STRING "irssi 0.8.19"

/* Define to the one symbol short name of this package. */
#define PACKAGE_TARNAME "irssi"

/* Define to the home page for this package. */
#define PACKAGE_URL ""

/* Define to the version of this package. */
#define PACKAGE_VERSION "0.8.19"

/* The size of `int', as computed by sizeof. */
#define SIZEOF_INT 4

/* The size of `long', as computed by sizeof. */
#define SIZEOF_LONG 8

/* The size of `long long', as computed by sizeof. */
#define SIZEOF_LONG_LONG 8

/* The size of `off_t', as computed by sizeof. */
#define SIZEOF_OFF_T 8

/* Define to 1 if you have the ANSI C header files. */
#define STDC_HEADERS 1

/* true color support in terminal */
/* #undef TERM_TRUECOLOR */

/* Enable large inode numbers on Mac OS X 10.5.  */
#ifndef _DARWIN_USE_64_BIT_INODE
# define _DARWIN_USE_64_BIT_INODE 1
#endif

/* Number of bits in a file offset, on hosts where this is settable. */
/* #undef _FILE_OFFSET_BITS */

/* Define for large files, on AIX-style hosts. */
/* #undef _LARGE_FILES */

/* Define to 'int' if <sys/socket.h> doesn't define. */
/* #undef socklen_t */
