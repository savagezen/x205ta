# - Try to find libproxy
# Once done this will define
#
#  LIBPROXY_FOUND - system has libproxy
#  LIBPROXY_INCLUDE_DIR - the libproxy include directory
#  LIBPROXY_LIBRARIES - libproxy library
#
# Copyright (c) 2010, Dominique Leuenberger
#
# Redistribution and use is allowed according the license terms
# of libproxy, which this file is integrated part of.

# Find proxy.h and the corresponding library (libproxy.so)
FIND_PATH(LIBPROXY_INCLUDE_DIR proxy.h )
FIND_LIBRARY(LIBPROXY_LIBRARIES NAMES proxy )

# Set library version
SET(LIBPROXY_VERSION 0.4.12)
SET(LIBPROXY_VERSION_MAJOR 0)
SET(LIBPROXY_VERSION_MINOR 4)
SET(LIBPROXY_VERSION_PATCH 12)

# Give output, should this be wished (this handles also QUIET and REQUIRED
INCLUDE(FindPackageHandleStandardArgs)
FIND_PACKAGE_HANDLE_STANDARD_ARGS(libproxy DEFAULT_MSG LIBPROXY_LIBRARIES LIBPROXY_INCLUDE_DIR)

