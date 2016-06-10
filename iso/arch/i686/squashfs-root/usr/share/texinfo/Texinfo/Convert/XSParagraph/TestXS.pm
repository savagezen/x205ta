# Copyright 2014, 2015 Free Software Foundation, Inc.
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 3 of the License,
# or (at your option) any later version.
# 
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

package Texinfo::Convert::XSParagraph::TestXS;

use DynaLoader;

use 5.00405;
use strict;
use warnings;

require Exporter;

our @ISA = qw(Exporter DynaLoader);

# Items to export into callers namespace by default. Note: do not export
# names by default without a very good reason. Use EXPORT_OK instead.
# Do not simply export all your public functions/methods/constants.

our %EXPORT_TAGS = ( 'all' => [ qw(

) ] );

our @EXPORT_OK = ( @{ $EXPORT_TAGS{'all'} } );

our @EXPORT = qw(
	
);

BEGIN {
# Possible values for TEXINFO_XS environmental variable:
#
# TEXINFO_XS=omit     # don't try loading xs at all
# TEXINFO_XS=default  # try xs, silent fallback
# TEXINFO_XS=warn     # try xs, warn on failure
# TEXINFO_XS=required # abort if not loadable, no fallback
# TEXINFO_XS=debug    # voluminuous debugging
#
# Other values are treated at the moment as 'default'.

my $TEXINFO_XS = 'debug';
#my $TEXINFO_XS = $ENV{'TEXINFO_XS'};
if (!defined($TEXINFO_XS)) {
  $TEXINFO_XS = '';
}

if ($TEXINFO_XS eq 'omit') {
  # Don't try to use the XS module
  goto FALLBACK;
}

# For verbose information about what's being done
sub _debug($) {
  if ($TEXINFO_XS eq 'debug') {
    my $msg = shift;
    warn $msg . "\n";
  }
}

# For messages to say that XS module couldn't be loaded
sub _fatal($) {
  if ($TEXINFO_XS eq 'debug'
      or $TEXINFO_XS eq 'required'
      or $TEXINFO_XS eq 'warn') {
    my $msg = shift;
    warn $msg . "\n";
  }
}

# We look for the .la and .so files in @INC because this allows us to override
# which modules are used using -I flags to "perl".
sub _find_file($) {
  my $file = shift;
  for my $dir (@INC) {
    _debug "checking $dir/$file";
    if (-f "$dir/$file") {
      _debug "found $dir/$file";
      return ($dir, "$dir/$file");
    }
  }
  return undef;
}

our $disable_XS;
if ($disable_XS) {
  _fatal "use of XS modules was disabled when Texinfo was built";
  goto FALLBACK;
}

my ($libtool_dir, $libtool_archive) = _find_file("TestXS.la");
if (!$libtool_archive) {
  _fatal "couldn't find Libtool archive file";
  goto FALLBACK;
}

my $fh;
open $fh, $libtool_archive;
if (!$fh) {
  _fatal "couldn't open Libtool archive file";
  goto FALLBACK;
}

# Look for the line in TestXS.la giving the name of the loadable object.
my $dlname = undef;
while (my $line = <$fh>) {
  if ($line =~ /^\s*dlname\s*=\s*'([^']+)'\s$/) {
    $dlname = $1;
    last;
  }
}
if (!$dlname) {
  _fatal "couldn't find name of shared object";
  goto FALLBACK;
}

# The *.so file is under .libs in the source directory.
push @DynaLoader::dl_library_path, $libtool_dir;
push @DynaLoader::dl_library_path, "$libtool_dir/.libs";

my $dlpath = DynaLoader::dl_findfile($dlname);
if (!$dlpath) {
  _fatal "couldn't find $dlname";
  goto FALLBACK;
}

#print STDERR "loadable object is at $dlpath\n";

my $module = "TestXS";
our $module_version = '6.0';

my $flags = 0;
my $libref = DynaLoader::dl_load_file($dlpath, $flags);
if (!$libref) {
  _fatal "couldn't load file $dlpath";
  goto FALLBACK;
}
my @undefined_symbols = DynaLoader::dl_undef_symbols();
if ($#undefined_symbols+1 != 0) {
  _fatal "still have undefined symbols after dl_load_file";
}
my $bootname = "boot_$module";
$bootname =~ s/:/_/g;
my $symref = DynaLoader::dl_find_symbol($libref, $bootname);
if (!$symref) {
  _fatal "couldn't find boot_$module symbol";
  goto FALLBACK;
}
my $boot_fn = DynaLoader::dl_install_xsub("${module}::bootstrap",
                                                $symref, $dlname);

if (!$boot_fn) {
  _fatal "couldn't bootstrap";
  goto FALLBACK;
}

push @DynaLoader::dl_shared_objects, $dlpath; # record files loaded

# This is the module bootstrap function, which causes all the other
# functions (XSUB's) provided by the module to become available to
# be called from Perl code.
&$boot_fn($module, $module_version);

if (!TestXS::init ()) {
  _fatal "error initializing";
  goto FALLBACK;
}
goto DONTFALLBACK;

FALLBACK: ;
DONTFALLBACK: ;
} # end BEGIN


# Preloaded methods go here.

#########################################################################

1;
__END__
