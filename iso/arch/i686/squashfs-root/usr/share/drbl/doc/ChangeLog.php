<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="generator" content="HTML::TextToHTML v2.51"/>
</head>
<body>
<p>DRBL project.<br/>
Authors: Steven Shiau &lt;steven <u>at</u> nchc org tw&gt;, Blake, Kuo-Lien Huang (klhaung <u>at</u> gmail com), Ceasar Sun (ceasar <u>at</u> nchc org tw), Jazz Wang (jazz <u>at</u> nchc org tw) and Thomas Tsai (thomas <u>at</u> nchc org tw)
License: GPL<br/>
<a href="http://drbl.org">http://drbl.org</a><br/>
<a href="http://drbl.sourceforge.net">http://drbl.sourceforge.net</a><br/>
<a href="http://drbl.nchc.org.tw">http://drbl.nchc.org.tw</a>
</p>
<p>drbl (2.19.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Add client files for Ubuntu 15.10.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Mar 2016 16:42:39 +0800
</p>
<p>drbl (2.19.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Add support for Debian 8.3.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Mar 2016 10:26:27 +0800
</p>
<p>drbl (2.19.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Remove scientific linux i386 net install in drbl.conf since it does not
    exist.
  </li><li>Fix typos in changelog.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Mar 2016 08:48:48 +0800
</p>
<p>drbl (2.19.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Apply the patch for ru_RU.UTF-8 from
    <a href="https://github.com/stevenshiau/drbl/pull/6.">https://github.com/stevenshiau/drbl/pull/6.</a> Thanks to don Rumata.
  </li><li>Update language files for ocs-match-checksums.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 05 Mar 2016 21:24:16 +0800
</p>
<p>drbl (2.19.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: do not strip the word about kernel or linux-image in 
    pkg-ver-latest
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 02 Mar 2016 13:00:58 +0800
</p>
<p>drbl (2.19.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Use "sort -V" instead of awk in pkg-ver-latest.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 02 Mar 2016 12:35:31 +0800
</p>
<p>drbl (2.19.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Update language files for the checksum results log file prompt.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 18 Feb 2016 21:39:17 +0800
</p>
<p>drbl (2.19.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: gen_CDG_checksums failed to list all files for checksum
    files.
  </li><li>Update language files for better description about checksum.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Feb 2016 10:55:53 +0800
</p>
<p>drbl (2.19.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Update language files for better description about checksum.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Feb 2016 14:35:32 +0800
</p>
<p>drbl (2.19.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Update language files for better description about checksum.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Feb 2016 09:10:46 +0800
</p>
<p>drbl (2.19.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Add "-cmf" &amp; "-gmf" in dialog menu.
  </li><li>Add sha512sum and refine the function gen_CDG_checksums of
    drbl-functions.
  </li><li>Language files were updated for options -gmf and -cmf, etc.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 15 Feb 2016 23:05:28 +0800
</p>
<p>drbl (2.18.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Remove console-common for pkgs list:
    <a href="https://bugs.launchpad.net/ubuntu/+source/cryptsetup/+bug/1528861">https://bugs.launchpad.net/ubuntu/+source/cryptsetup/+bug/1528861</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 20 Jan 2016 13:05:51 +0800
</p>
<p>drbl (2.18.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Functions add_opt_in_pxelinux_cfg_block, 
    remove_opt_in_pxelinux_cfg_block, add_opt_in_grub_efi_cfg_block,
    and remove_opt_in_grub_efi_cfg_block of drbl-functions failed to
    deal with 'locales=' and 'keyboard-layouts='. This makes
    drbl-ocs-live-prep can not preset locales and keyboard-layouts.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 16 Jan 2016 16:01:22 +0800
</p>
<p>drbl (2.18.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>List kmod or module-init-tools in the package for suggestions in
    drbl.conf. This change was due to the change in mkpxeinitrd-net.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 04 Jan 2016 21:00:10 +0800
</p>
<p>drbl (2.18.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package console-common is not included in Clonezilla/DRBL/GParted
    live because it's deprecated:
    <a href="https://bugs.launchpad.net/bugs/1528861">https://bugs.launchpad.net/bugs/1528861</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 24 Dec 2015 21:35:58 +0800
</p>
<p>drbl (2.18.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package perl-modules was replaced by perl in
    PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 22 Dec 2015 20:54:18 +0800
</p>
<p>drbl (2.18.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>[Ceasar Sun]
    Add Conflicts=mkswapfile.service to avoid DRBL service mkswapfile to be
    started in ocsd-run.service.
    Add support for Fedora 22 and 23.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 21 Dec 2015 20:08:04 +0800
</p>
<p>drbl (2.18.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding ocsd files for CentOS 7.2.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 14 Dec 2015 22:22:42 +0800
</p>
<p>drbl (2.18.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>"Shoutdown" should be "Desligar" in language file pt_BR.
    Thanks to Luciano (lboni2 <u>at</u> yahoo com br) for correcting this.
  </li><li>Give warning about grub2 uEFI NB on CentOS 7 for grub2 versions
    2.02-0.17 and 2.02-0.23 in drblsrv.
  </li><li>Add OCS files (ocsd-*.service) for Clonezilla SE clients.
  </li><li>Apply the patches from Ceasar Sun to initial support Fedora &gt;=21.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 12 Dec 2015 08:27:51 +0800
</p>
<p>drbl (2.18.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Switch to use "-scs" instead of "-sc" although "-sc" is still
    working. This will be easier to tell the differences between
    saving and restoring image. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Nov 2015 17:20:27 +0800
</p>
<p>drbl (2.18.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Add options -sc0 and -scr for checking image integrity before
    restoring an image. The former is to check on Clonezilla server,
    and the latter is to check on Clonezilla client.
  </li><li>Language files were updated for options -sc0 and -scr.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 21 Nov 2015 22:42:17 +0800
</p>
<p>drbl (2.18.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding fatresize in the packages list for clonezilla/drbl live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 16 Nov 2015 09:56:40 +0800
</p>
<p>drbl (2.18.1-drbl1) unstable; urgency=low
</p>
<p>  [ Ceasar Sun ]
</p><ul>
  <li>Adding syslinux-common as required pkg in drbl.conf for Debian-like
    Linux. This is used to support Linux Mint.
  </li><li>Adding mdm support for drbl-login-switch.
  </li><li>Adding breakpoints in init.drbl.
  </li><li>Adding support for Linux Mint.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 10 Nov 2015 10:15:05 +0800
</p>
<p>drbl (2.17.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package fatresize in the DRBL/Clonezilla live packages
    list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 03 Nov 2015 17:19:00 +0800
</p>
<p>drbl (2.17.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>More tests about if $GRUB_CONF exists before going on in some
    functions of drbl-functions about grub2 uEFI network boot.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 02 Nov 2015 11:12:09 +0800
</p>
<p>drbl (2.17.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Check if file $GRUB_CONF exists first in 
    hide_reveal_grub_efi_ent and some functions in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 31 Oct 2015 23:24:21 +0800
</p>
<p>drbl (2.17.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>When grub-mkimage or grub-mknetdir not found, drbl-gen-grub-efi-nb 
    shows warning messages only instead of error message because older
    version of GNU/Linux (e.g. CentOS 6) does not support creating
    grub uEFI network boot image.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 31 Oct 2015 21:09:08 +0800
</p>
<p>drbl (2.17.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Test if GRUB_CONF exists before modifying it in tune-clientdir-opt.
  </li><li>Adding support for CentOS 6.7.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 31 Oct 2015 17:04:58 +0800
</p>
<p>drbl (2.17.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding boot parameter "stick-to-pxe-srv" for DRBL live clients.
    This mechanism is used to stick to the PXE server when live-boot
    trying to lease IP address by using the boot parameter
    "stick-to-pxe-srv". It will drop the DHCP server without providing
    filename, so it can partially solve the issue that 2 DHCP servers
    co-exist on the same LAN. By default the max lease loop number is
    10 times. The boot parameter "ethdev-dhcp-max-loop" can be used
    to assign the max number. 
    //NOTE// This mechanism is only for DRBL/Clonezilla SE live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 Oct 2015 09:22:58 +0800
</p>
<p>drbl (2.17.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Suppress the error message in hide_reveal_pxe_img,
    use warning only.
  </li><li>Polish the output messages in hide_reveal_grub_efi_ent.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 20 Oct 2015 11:27:54 +0800
</p>
<p>drbl (2.17.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 12 Oct 2015 19:51:10 +0800
</p>
<p>drbl (2.17.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Update the help message of drbl-live.
  </li><li>Bug fixed: read the ocs_client_no_per_NIC from /etc/ocs/ocs-live.conf in
    higer priority than that of 
    $drbl_setup_path/files/ocs/live-hook/ocs-live-hook.conf in drbl-live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 05 Oct 2015 23:00:40 +0800
</p>
<p>drbl (2.17.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Show Grub CPU and platform in the preconfig of grub uEFI netboot.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 29 Sep 2015 20:27:34 +0800
</p>
<p>drbl (2.17.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Use the same prompt "Local operating system (if available)" for uEFI
    netboot, as that of PXE.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 23 Sep 2015 10:00:48 +0800
</p>
<p>drbl (2.17.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>For all cases, dcs clean the UEFI NB config files because now
    local-disk is always revealed.
  </li><li>Bug fixed: dcs -&gt; local did not switch that for local-disk in grub uEFI
    netboot mode.
  </li><li>Reveal local-disk in the uEFI netboot menu by default. We have listed
    most of the OSes.
  </li><li>Convert the ":" in the MAC address based file name to "-" for grub uEFI
    netboot mode, i.e. something like: grub.cfg-01-00-0c-29-1d-9a-d1, not
    <a href="ftp://grub.cfg/01">grub.cfg:01</a>:00:0c:29:1d:9a:d1
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 22 Sep 2015 21:50:37 +0800
</p>
<p>drbl (2.16.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Update Forcevideo-drbl-live to work with the latest Sid. Thanks
    to Eric Reischer (emr <u>at</u> hev psu edu) for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 21 Sep 2015 22:35:54 +0800
</p>
<p>drbl (2.16.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: wrong info about prompt for grub uEFI netboot.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 21 Sep 2015 14:49:06 +0800
</p>
<p>drbl (2.16.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>More grub2 file system modules were added in drbl-gen-grub-efi-nb so
    that local disk boot is supported for uEFI network boot menu.
  </li><li>Live system hostname is assigned as ocs-client in Clonezilla SE of DRBL
    live, while drbl client is assigned as drbl-client. This is to avoid
    confusion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 20 Sep 2015 13:27:03 +0800
</p>
<p>drbl (2.16.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Since we have used grub embedded preconfig way in drbl-gen-grub-efi-nb 
    to solve this grub uEFI network booting restoring issue in Debian:
    <a href="http://lists.gnu.org/archive/html/help-grub/2015-09/msg00035.html">http://lists.gnu.org/archive/html/help-grub/2015-09/msg00035.html</a>
    Therefore no more disabling efi_netboot_1st_in_nvram in drbl-ocs.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 19 Sep 2015 08:24:16 +0800
</p>
<p>drbl (2.16.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the variable was not protected when writing the preconfig
    file with cat command in drbl-gen-grub-efi-nb.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 19 Sep 2015 07:12:54 +0800
</p>
<p>drbl (2.16.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Forget about condition test for the existing of config file in grub
    embedded preconfig file. Just use configfile module to make that in 
    drbl-gen-grub-efi-nb.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 19 Sep 2015 00:03:33 +0800
</p>
<p>drbl (2.16.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The /tftpboot/nbi_img/grub.cfg/grub.cfg-01:$net_default_mac has higher
    priority than /tftpboot/nbi_img/grub.cfg/grub.cfg. By doing this, we do
    not have to patch the grub2 as described here:
    <a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=793760">https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=793760</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 Sep 2015 14:34:00 +0800
</p>
<p>drbl (2.16.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Change ocs_client_trig_type=proc-cmdline in drbl-ocs.conf when
    running drbl-live start.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 17 Sep 2015 09:58:51 +0800
</p>
<p>drbl (2.16.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Link the kernel and initrd of clonezilla live in /tftpboot/nbi_img/ to
    that of drbl live for DRBL live system.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Sep 2015 20:35:01 +0800
</p>
<p>drbl (2.16.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Switched to use live system for DRBL client due to the missing /tmp
    or /dev/ issue.
  </li><li>Disabled updating initramfs when starting, because
    use_run_in_initrd and use_dev_pts_in_initrd in linuxrc.conf have fit
    the status in Sid.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Sep 2015 09:31:23 +0800
</p>
<p>drbl (2.16.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Live system for Clonezilla jobs in Clonezilla SE was
    not working for the uEFI network booting environment. 
  </li><li>Bug fixed: Program tune-clientdir-opt should not reveal the
    Clonezilla menu. Let dcs to reveal or hide that.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 12 Sep 2015 21:28:33 +0800
</p>
<p>drbl (2.16.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Due to the issue /tmp or /dev missing issue:
    <a href="http://lists.freedesktop.org/archives/systemd-devel/">http://lists.freedesktop.org/archives/systemd-devel/</a>
    2015-September/034175.html
    DRBL live now switch to use drbl-live-ocs-prep for
    Clonezilla SE client, i.e. less use NFS root.
  </li><li>Adding file type "tar" in function gen_CDG_checksums of
    drbl-functions.
  </li><li>Option "-p" was added so that drbl-sl supports the mounted or
    unzipped live dir.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 10 Sep 2015 14:08:53 +0800
</p>
<p>drbl (2.15.31-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Option "-n" should be added for mount command when mounting /dev in
    read-only / (hence read-only /etc).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Sep 2015 11:25:27 +0800
</p>
<p>drbl (2.15.30-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Option "-b" was added was added to drbl-live.
  </li><li>A tag file will be added in /tfptboot/node_root/drbl_ssi/ when
    drbl-live is run.
  </li><li>Default to use "-t devtmpfs" instead of "-t udev" for mount command
    in init.drbl.
  </li><li>The flag TMPFS_RUN was changed to "true" by default in init.drbl
  </li><li>Reverted to create /dev/{console,null} in $drbl_common_root/. 
    It's required in some cases.
  </li><li>Corresponding change was done in drblpush with TMPFS_RUN in
    init.drbl.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Sep 2015 10:09:34 +0800
</p>
<p>drbl (2.15.29-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding support files for Debian 7.9 and 8.2 in
    /usr/share/drbl/setup/files/DBN/
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Sep 2015 12:29:00 +0800
</p>
<p>drbl (2.15.28-drbl1) unstable; urgency=medium
</p>
<ul>
  <li>Client's /etc/fstab was changed. For nfs root, we set
    the option as "rw" so that checkroot.sh in Debian sysvinit
    could update the /etc/mtab.
  </li><li>The /proc in drbl client's /etc/fstab is commented. It's done
    by udevd automatically.
  </li><li>No more creating /dev/{console,null} in $drbl_common_root/. It's
    done by udevd automatically.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Sep 2015 12:17:07 +0800
</p>
<p>drbl (2.15.27-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package strace was added in clonezilla/drbl live system.
  </li><li>Set nosuid,nodev in /etc/fstab for client's /tmp dir.
  </li><li>Disabled workaround for dm after nis in drbl-live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 03 Sep 2015 17:59:33 +0800
</p>
<p>drbl (2.15.26-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Put tmp.mount back for DRBL client. It was disabled in Debian
    patched systemd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 01 Sep 2015 16:49:11 +0800
</p>
<p>drbl (2.15.25-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: DRBL client sometimes failed to mount nfs due to remote-fs
    service starts first. A workaround was added.
    (<a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=768006">https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=768006</a>)
  </li><li>Reverted the previous implementation for /etc/fstab.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 01 Sep 2015 10:05:15 +0800
</p>
<p>drbl (2.15.24-drbl1) unstable; urgency=low
</p>
<ul>
  <li>An insurance to make sure that all mounting in /etc/fstab
    are done.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 28 Aug 2015 17:40:03 +0800
</p>
<p>drbl (2.15.23-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Functions add_opt_in_pxelinux_cfg_block and
    add_opt_in_grub_efi_cfg_block were improved to have an
    option "-n".
  </li><li>Using boot parameters for switching clients' mode
    (text or graphical) in systemd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 27 Aug 2015 11:53:09 +0800
</p>
<p>drbl (2.15.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: For Debian &gt;=8 the file /var/lib/nfs/state was missing
    which caused rpc.statd failing to start in DRBL client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 24 Aug 2015 09:10:44 +0800
</p>
<p>drbl (2.15.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding support for Debian 8.1.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 20 Aug 2015 11:26:59 +0800
</p>
<p>drbl (2.15.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Make sure there is no white space in the end of opt_content in
    function add_opt_in_pxelinux_cfg_block in drbl-functions.
    This could reduce the chance that boot parameters are wrongly
    parsed by Linux kernel.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 17 Aug 2015 21:48:39 +0800
</p>
<p>drbl (2.15.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Files isolinux.bin and memdisk should be extracted and put to
    syslinux in get_syslinux_binary_for_dos_linux of drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 16 Aug 2015 22:54:09 +0800
</p>
<p>drbl (2.15.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package zerofree was added in the packages list for
    DRBL/Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 11 Aug 2015 13:31:33 +0800
</p>
<p>drbl (2.15.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated for the option "-k1", both GPT and
    MBR format are supported.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 11 Aug 2015 10:51:03 +0800
</p>
<p>drbl (2.15.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Disabled efi_netboot_1st_in_nvram when server is Debian or
    Ubuntu due to grub does not have the patch
   (<a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=793760">https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=793760</a>).
  </li><li>Package grub2-efi-modules added in the packages list
    "PKG_TO_QUERY" in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 30 Jul 2015 18:19:57 +0800
</p>
<p>drbl (2.15.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The useless note about option "-z3" was removed. Thanks to
    Marc Grondin (marcfgrondin <u>at</u> gmail com) for reporting this.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 18 Jun 2015 22:40:26 +0800
</p>
<p>drbl (2.15.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 06 Jun 2015 10:06:14 +0800
</p>
<p>drbl (2.15.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Functions confirm_continue_or_not_default_quit,
    confirm_continue_or_not_default_continue, and 
    confirm_continue_no_default_answer were moved from ocs-functions
    to drbl-functions.
  </li><li>Checking the grub2 version in blacklist for CentOS/RHEL when
    running drblsrv.
  </li><li>Language file es_ES was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file sk_SK was updated. Thanks to Ondrej Dzivy Balucha.
  </li><li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois
    Nifenecker.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>drbl-sl should skip ipxe.efi when searching kernel.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 31 May 2015 21:23:00 +0800
</p>
<p>drbl (2.15.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Improvement: better way to get clientdir for GRUB uEFI NB boot
    parameters in udhcpc-post.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 28 May 2015 06:14:29 +0800
</p>
<p>drbl (2.15.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Functions add_opt_in_pxelinux_cfg_block, 
    remove_opt_in_pxelinux_cfg_block, add_opt_in_grub_efi_cfg_block
    and remove_opt_in_grub_efi_cfg_block were moved from
    ocs-functions to drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 27 May 2015 23:06:15 +0800
</p>
<p>drbl (2.15.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package udisks was replaced by udisks2 in
    PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf.
  </li><li>Program tune-clientdir-opt now supports GRUB EFI NB.
  </li><li>Program drbl-gen-grub-efi-nb put more info in the
    uEFI NB bootlader file info.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 27 May 2015 22:30:20 +0800
</p>
<p>drbl (2.15.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The corresponding tag files bootx64.efi.info/bootia32.efi.info
    will be created if the creating command runs successfully.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 24 May 2015 21:29:27 +0800
</p>
<p>drbl (2.15.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Only for those non-stop cases we will clean the GRUB UEFI NB
    config files in dcs. Otherwise the local-disk boot normally
    won't work.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 22 May 2015 22:40:58 +0800
</p>
<p>drbl (2.15.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>If the latest version of fine tune ocs systemd files for
    DRBL clients are not found, the most related one will
    be use. E.g. CO7.1.1503 not found, the existing one
    CO7.0.1406 will be used.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 22 May 2015 09:56:09 +0800
</p>
<p>drbl (2.15.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: wrong if block for local-disk in
    hide_reveal_grub_efi_ent.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 21 May 2015 23:13:12 +0800
</p>
<p>drbl (2.15.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Minor improvement for generate-pxe-menu in the parameters
    while loop.
  </li><li>An option was added to set the menu background mode in
    gen-grub-efi-nb-menu.
  </li><li>GRUB efi modules part_gpt part_msdos boot multiboot were
    added in the bootx64.efi in gen-grub-efi-nb-menu so that
    we can chainloader to EFI on the local disk,
    like "chainloader /EFI/redhat/grub.efi +1".
  </li><li>File drbl-efi-pxe-sw was renamed as drbl-syslinux-efi-pxe-sw.
  </li><li>Thanks to Danny Russ | KSC for helping this GRUB EFI
    network boot solution.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 21 May 2015 22:23:26 +0800
</p>
<p>drbl (2.15.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Due to a bug "error: timeout: could not resolve hardware address"
    (<a href="http://sourceforge.net/p/xcat/bugs/4658/">http://sourceforge.net/p/xcat/bugs/4658/</a>) in grub2-efi modules,
    the grub2-efi-modules or grub2-efi can not be listed in
    PKG_TO_QUERY of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 18 May 2015 17:03:42 +0800
</p>
<p>drbl (2.15.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The package name for grub2-efi modules is grub2-efi-modules,
    not grub2-efi on CentOS.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 18 May 2015 16:48:37 +0800
</p>
<p>drbl (2.15.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>drbl.conf: grub-efi-amd64-bin grub2-efi added in PKG_TO_QUERY.
  </li><li>Suppress the findind error message in drbl-gen-grub-efi-nb.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 18 May 2015 15:41:34 +0800
</p>
<p>drbl (2.15.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>New file set-default-grub-efi-img was added. It will be
    used to set the menuentry for GRUB EFI NB was added.
  </li><li>New file drbl-gen-grub-efi-nb was added so that it can prepare
    GRUB EFI network boot files (/tftpboot/nbi_img/bootx64.efi).
  </li><li>New file gen-grub-efi-nb-menu was added so that it can be used
    to create the GRUB EFI NB config files in 
    /tftpboot/nbi_img/grub-efi.cfg/.
  </li><li>This is the initial version for using GRUB EFI NB as the uEFI
    network boot clients due to the syslinux.efi is not working
    with iPXE clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 18 May 2015 14:30:11 +0800
</p>
<p>drbl (2.14.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding drbl-efi-pxe-sw so it's easier to switch that on CentOS.
  </li><li>Adding the ocs service for CentOS 7.1.1503.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 15 May 2015 09:47:50 +0800
</p>
<p>drbl (2.14.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: some more files (drblsrv-offline and mknic-nbi) need
    to be fixed so that it can be used for Linux kernel version 4.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 14 May 2015 22:28:56 +0800
</p>
<p>drbl (2.14.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: failed to identify the iso file in drbl-sl on Ubuntu
    15.04. Thanks to Jasper Aorangi for reporting this
    (<a href="https://sourceforge.net/p/clonezilla/bugs/225/">https://sourceforge.net/p/clonezilla/bugs/225/</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 May 2015 21:20:09 +0800
</p>
<p>drbl (2.14.9-drbl10) unstable; urgency=low
</p>
<ul>
  <li>Language file hu_HU was updated. Thanks to Michael Munger.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 10 May 2015 20:30:59 +0800
</p>
<p>drbl (2.14.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package tinc in Clonezilla/DRBL live. Thanks to Michael
    Munger (michael <u>at</u> highpoweredhelp com) for suggesting this.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 09 May 2015 12:47:53 +0800
</p>
<p>drbl (2.14.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files for Hungarian were added. Thanks to Greg Marki
    (info.mlc <u>at</u> freemail hu) for providing the files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 06 May 2015 22:38:15 +0800
</p>
<p>drbl (2.14.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Suppress the messages about client's upstart files not found.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 06 May 2015 14:51:26 +0800
</p>
<p>drbl (2.14.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Network installation for Ubuntu has been updated to trusty
    and vivid in drbl.conf.
  </li><li>Initial support for Ubuntu 15.04.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 05 May 2015 17:58:40 +0800
</p>
<p>drbl (2.14.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the original /sbin/init was overwritten in DRBL live
    when running drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 04 May 2015 08:40:12 +0800
</p>
<p>drbl (2.14.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: wrong including path in ocsd-rescue.service for
    Debian machine.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 03 May 2015 17:05:44 +0800
</p>
<p>drbl (2.14.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: if block error in drblpush.
  </li><li>Service drbl-clients-nat.service for systemd should be removed
    when uninstalling.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 03 May 2015 16:40:21 +0800
</p>
<p>drbl (2.14.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating Debian netinstall as jessie in drbl.conf because
    it's in stable status now.
  </li><li>Adding support for Debian Jessie and Sid with systemd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 03 May 2015 15:58:33 +0800
</p>
<p>drbl (2.13.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating language files for S3 and Swift.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 19 Apr 2015 19:28:33 +0800
</p>
<p>drbl (2.13.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package cloudfuse was added in the packages list of Clonezilla
    live.
  </li><li>A mechanism to avoid AWS S3 with ecryptfs was added because there
    is an issue: <a href="https://github.com/s3fs-fuse/s3fs-fuse/issues/166">https://github.com/s3fs-fuse/s3fs-fuse/issues/166</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 16 Apr 2015 13:20:42 +0800
</p>
<p>drbl (2.13.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A mechanism to avoid AWS S3 with ecryptfs was added because there
    is an issue: <a href="https://github.com/s3fs-fuse/s3fs-fuse/issues/166">https://github.com/s3fs-fuse/s3fs-fuse/issues/166</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 11 Apr 2015 19:51:14 +0800
</p>
<p>drbl (2.13.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package s3fs was added in the packages list of Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 03 Apr 2015 23:31:27 +0800
</p>
<p>drbl (2.13.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package ca-certificates was added in the packages list of
    Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 02 Apr 2015 21:51:34 +0800
</p>
<p>drbl (2.13.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package ifenslave was added in the packages list of Clonezilla
    live.
  </li><li>Language files were updated for checking if the image repository
    is writable or not.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 29 Mar 2015 22:12:15 +0800
</p>
<p>drbl (2.13.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating netinstall for opensuse as 13.2.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 25 Mar 2015 19:57:06 +0800
</p>
<p>drbl (2.13.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package zbackup was added in the packages list of Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Mar 2015 19:29:03 +0800
</p>
<p>drbl (2.13.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function drbl_service_ctl was added in drbl-functions so that it
    can be used for start/stop/restart sysv/upstart/systemd service.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 12 Mar 2015 20:48:21 +0800
</p>
<p>drbl (2.13.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Option "-irvd" was added to Clonezilla menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Mar 2015 19:52:41 +0800
</p>
<p>drbl (2.13.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Some ecryptfs-related options from drbl-ocs.conf were moved
    to drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 05 Mar 2015 10:46:28 +0800
</p>
<p>drbl (2.13.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file fr_FR was updated. Thanks to
    Jean-Francois Nifenecker.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 17 Feb 2015 09:07:49 +0800
</p>
<p>drbl (2.13.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file sk_SK was updated. Thanks to Ondrej Dzivy Balucha.
  </li><li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  </li><li>Language file en_US wad updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 16 Feb 2015 13:19:01 +0800
</p>
<p>drbl (2.13.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package gdisk-noicu is now replaced by gdisk in Debian
    respository.
  </li><li>File system ecryptfs is not always built-in, so trying to
    modprobe before checking it.
  </li><li>Bug fixed: grand_jobs_before_exit not grand_task_before_exit.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 Jan 2015 21:51:18 +0800
</p>
<p>drbl (2.13.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package bindfs was added in the packages list of DRBL/Clonezilla live.
  </li><li>Language files were updated for WebDAV image server.
  </li><li>Bindfs middle layer for WebDAV+eCryptfs was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 29 Jan 2015 08:01:36 +0800
</p>
<p>drbl (2.13.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Mergeing the patch from Ceasar to fix the boot haning issue of
    Fedora 21 client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 25 Jan 2015 20:22:20 +0800
</p>
<p>drbl (2.13.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Package refit was removed from DRBL/Clonezilla live packages list
    since it does not exist in Debian repository anymore.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 21 Jan 2015 22:34:45 +0800
</p>
<p>drbl (2.13.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Merged the patch from Ceasar to support Fedora 21.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 19 Jan 2015 13:48:35 +0800
</p>
<p>drbl (2.12.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>An option "exclude_eth_nics" was added in drbl.conf so that some
    network card can be excluded in drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 17 Jan 2015 14:27:50 +0800
</p>
<p>drbl (2.12.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the previous workaround by removing services in
    client's /etc/rcS.d/ causes clients fail to reboot or shutdown.
    Forget it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 16 Jan 2015 22:52:08 +0800
</p>
<p>drbl (2.12.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-clean-dhcpd-leases failed to restart dhcpd service
    for non-systemd environment.
  </li><li>Bug fixed: Somehow the unnecessary services in client's /etc/rcS.d/
    cause the console behaves weird. Removed them.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 16 Jan 2015 18:38:16 +0800
</p>
<p>drbl (2.12.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package ecryptfs-utils is now listed as required package for DRBL.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 14 Jan 2015 20:38:37 +0800
</p>
<p>drbl (2.12.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN8.0.drbl.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 13 Jan 2015 15:52:23 +0800
</p>
<p>drbl (2.12.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding a link file firstboot.DBN7.8.drbl for Debian 7.8.
    Same link files for older versions, too.
  </li><li>Language files were updated for variables changed and drbl-ocs.
  </li><li>Force to show only unencrypted images for Clonezilla SE in
    dcs option.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 12 Jan 2015 23:09:08 +0800
</p>
<p>drbl (2.12.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated for p2v and the menus in ocs-sr.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 07 Jan 2015 12:32:20 +0800
</p>
<p>drbl (2.12.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Variable "target_dir_enc_mntpnt" was changed to shorter one
    "ecrypt_mntpnt" in drbl-functions.
  </li><li>Avoid using "rm -r" if possible.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 06 Jan 2015 16:15:03 +0800
</p>
<p>drbl (2.12.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated for converting encrypted/decrypted
    images.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 05 Jan 2015 13:35:09 +0800
</p>
<p>drbl (2.12.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding return code for function task_ecryptfs_mount_point.
  </li><li>Language files were updated for encrypting and decrypting
    existing images.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 03 Jan 2015 23:43:36 +0800
</p>
<p>drbl (2.12.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package ntpdate in the packages list of Clonezilla/DRBL
    live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 29 Dec 2014 10:59:19 +0800
</p>
<p>drbl (2.12.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_TW.UTF-8 was updated.
  </li><li>Supporting netinstall of Fedora 21.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 27 Dec 2014 16:47:00 +0800
</p>
<p>drbl (2.12.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating msg_encrypt_img_dir_is_now_as in all language files.
  </li><li>The target_dir_enc_mntpnt is just a mounting point. Therefore
    when program exists, just use rmdir not "rm -rf" to avoid
    accidentally removing wrong directory.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Dec 2014 22:44:38 +0800
</p>
<p>drbl (2.12.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding encryption function for Clonezilla image. Now it's OK for
    Clonezilla live, not yet for Clonezilla SE.
  </li><li>Remove zh_TW.BIG5 language option.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 25 Dec 2014 19:12:28 +0800
</p>
<p>drbl (2.11.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>File Known_issues_Big5.txt was removed.
  </li><li>Known_issues.txt and RELEASE-NOTES were updated.
  </li><li>Adding package ecryptfs-utils in the packages list
    of DRBL/Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 25 Dec 2014 10:05:04 +0800
</p>
<p>drbl (2.11.15-drbl2) unstable; urgency=low
</p>
<ul>
  <li>The language files about stable Clonezilla live was updated as i586
    instead of i486.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 10 Dec 2014 20:26:50 +0800
</p>
<p>drbl (2.11.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Now i586 instead of i486 Clonezilla live is in the stable release,
    therefore the corresponding changes were done.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 10 Dec 2014 19:59:49 +0800
</p>
<p>drbl (2.11.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  </li><li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 08 Dec 2014 08:58:30 +0800
</p>
<p>drbl (2.11.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language files sk_SK was updated. Thanks to Ondrej Dzivy Balucha.
  </li><li>Adding support for Debian 7.7.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 05 Dec 2014 10:18:13 +0800
</p>
<p>drbl (2.11.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files tr_TR for bash and perl were updated.
    Thanks to Volkan.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 01 Dec 2014 11:30:32 +0800
</p>
<p>drbl (2.11.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: failed to get the ethernet card for multicast in
    CentOS 7.
  </li><li>Adding comments in the /etc/sysconfig/dhcpd which is not
    used anymore for CentOS/Fedora using systemd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 28 Nov 2014 17:00:13 +0800
</p>
<p>drbl (2.11.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: for CentOS 7, there is no need to copy the modified
    halt and rc.sysinit files for DRBL client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 28 Nov 2014 14:58:13 +0800
</p>
<p>drbl (2.11.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding support for CentOS 6.6.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 28 Nov 2014 09:57:17 +0800
</p>
<p>drbl (2.11.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-etc-hosts failed to put the correct hostname for
    drbl clients in some cases.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 27 Nov 2014 11:41:36 +0800
</p>
<p>drbl (2.11.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: when one of the assigned IP addresses for DRBL clients
    is used by DRBL server, drblpush failed to deploy that completely.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 26 Nov 2014 16:57:10 +0800
</p>
<p>drbl (2.11.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A mechanism to check if i386 library (libc6-i386 or glibc.i686) exists
    on x86-64 system when running makeboot.sh due to syslinux included in
    Clonezilla live is 32-bit.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 25 Nov 2014 09:45:52 +0800
</p>
<p>drbl (2.11.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Supporting i586 linux image kernel for clients on Debian Sid.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 12 Nov 2014 11:31:19 +0800
</p>
<p>drbl (2.11.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Service statd in Ubuntu 14.10 was not started for
    locking files.
  </li><li>The service plymouth should not be set as manual otherwise for
    DRBL client X won't start.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 10 Nov 2014 20:03:03 +0800
</p>
<p>drbl (2.11.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: missing drbl-all-service was restored.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 10 Nov 2014 09:30:06 +0800
</p>
<p>drbl (2.11.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A better mechanism (function is_systemd_init) to detect if systemd
    used as init was implemented.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 09 Nov 2014 11:40:22 +0800
</p>
<p>drbl (2.11.0-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating network installation of Ubuntu as "trusty utopic".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 05 Nov 2014 23:07:17 +0800
</p>
<p>drbl (2.10.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding initial support for Ubuntu 14.10.
  </li><li>Updating drbl-client-boot-default.conf and S00wait-drbl-default
    for Ubuntu DRBL clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 05 Nov 2014 22:40:27 +0800
</p>
<p>drbl (2.10.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: for class C network, using 253 clients was not working.
    Thanks to Eric Frost for reporting this issu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 02 Nov 2014 14:58:00 +0800
</p>
<p>drbl (2.10.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating scientific_netinstall_ver as 7x, and centos_netinstall_ver
    as "6 7" in drbl-ocs.conf.
  </li><li>Adding syslinux-efi in the required packages for Debian. Otherwise
    uEFI network booting client won't work.
  </li><li>Updating drbl-netinstall for CentOS 7 by adding inst.repo boot
    parameter.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 02 Oct 2014 16:38:44 +0800
</p>
<p>drbl (2.10.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating drbl-live-hadoop to version 0.3 from Thomas Tsai.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 29 Sep 2014 16:57:23 +0800
</p>
<p>drbl (2.10.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated for restoring image of a partition
    to different partition.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 28 Sep 2014 17:22:38 +0800
</p>
<p>drbl (2.10.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Comments about uEFI network booting were updaetd in
    generate-pxe-menu.
  </li><li>Reverted to use iproute instead of iproute2 so that Wheezy won't
    fail.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Sep 2014 11:46:10 +0800
</p>
<p>drbl (2.10.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Merging the files supporting systemd for CentOS 7 and Fedora 20
    from Ceasar Sun.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 15 Sep 2014 16:17:49 +0800
</p>
<p>drbl (2.9.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package davfs2 and f2fs-tools were added in the packages list of
    DRBL/Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 05 Sep 2014 16:55:00 +0800
</p>
<p>drbl (2.9.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package iw and list iproute2 instead of iproute in packages
    list of DRBL/Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 04 Sep 2014 14:59:14 +0800
</p>
<p>drbl (2.9.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package sysvinit-core is removed from drbl.conf because Ubuntu
    does not have it yet. We have to add that in the packages list
    when creating Debian-based live system.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 27 Aug 2014 08:47:34 +0800
</p>
<p>drbl (2.9.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A better checking mechaism for sysvinit and systemd packages 
    coexisting on a system is used.
  </li><li>Program drbl-prepare-pxelinux was updated due to new path for
    new syslinux-efi has syslinux.efi in /usr/lib/SYSLINUX.EFI/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Aug 2014 20:47:56 +0800
</p>
<p>drbl (2.9.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A workaround to avoid the bug of dpkg version 1.17.13. It fails to
    update /var/lib/dpkg/available in bootstrap environment. Therefore
    the option --print-avail fails. We switched to use "dpkg -L" in
    function chk_deb_installed of drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 24 Aug 2014 15:14:05 +0800
</p>
<p>drbl (2.9.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Put sysvinit-core in the packages list of clonezilla/debian/gparted
    live of drbl.conf. This is due to the pacakge init has switched to
    the default init system to systemd-sysv. We are not ready for
    that yet.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 22 Aug 2014 22:49:32 +0800
</p>
<p>drbl (2.9.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file tr_TR was added. Thanks to &Atilde;–mer YILDIZ 
    &lt;oyildiz <u>at</u> teknoplan.com.tr&gt; for providing that.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Aug 2014 14:00:56 +0800
</p>
<p>drbl (2.9.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN7.6.drbl for updated Debian Wheezy.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 16 Aug 2014 22:52:34 +0800
</p>
<p>drbl (2.9.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package syslinux-util in PKG_TO_QUERY of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 16 Aug 2014 22:41:43 +0800
</p>
<p>drbl (2.9.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package syslinux-utils is now added in the packages list of
    Clonezilla and DRBL live due to the changes in Debian syslinux
    6.03-pre19 packaging.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 16 Aug 2014 22:39:24 +0800
</p>
<p>drbl (2.9.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package rfkill was added in the packages list of Clonezilla
    and DRBL live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 Aug 2014 09:39:22 +0800
</p>
<p>drbl (2.9.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package fstransform was added in the packages list of
    Clonezilla and DRBL live.
  </li><li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 06 Aug 2014 10:30:14 +0800
</p>
<p>drbl (2.9.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-sha1pass failed due to "use" instead of "require"
    was used. Thanks to monkeyzilla &lt;monkeyzilla <u>at</u> users sf net&gt;
    for reporting it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Jul 2014 17:25:20 +0800
</p>
<p>drbl (2.9.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files sk_SK was updated. Thanks to Ondrej Dzivy Balucha.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  </li><li>Language file es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
  </li><li>Bug fixed: file memdisk of pxelinux 6.x should be put in
    /tftpboot/nbi_img/, not in /tftpboot/nbi_img/bios/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 26 Jun 2014 08:57:00 +0800
</p>
<p>drbl (2.9.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file de_DE was updated. Thanks to Michael Vinzenz.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 24 Jun 2014 07:15:50 +0800
</p>
<p>drbl (2.9.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Jun 2014 09:09:55 +0800
</p>
<p>drbl (2.9.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES was updated by Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 22 Jun 2014 22:54:00 +0800
</p>
<p>drbl (2.9.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program makeboot.sh was patched by Ceasar Sun to support
    xfs, ufs and ffs.
  </li><li>Language files were improved. Thanks to 
    Philippe Prevost &lt;philippe-prevost <u>at</u> hotmail com&gt;.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 22 Jun 2014 22:17:19 +0800
</p>
<p>drbl (2.9.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The usage of drbl-sl was updated to latest version number, and
    the text shown on PXE boot menu for zip should be the same as
    that of iso one.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 01 Jun 2014 11:23:04 +0800
</p>
<p>drbl (2.9.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files for Slovak were added. Thanks to Ondrej Dzivy Balucha &lt;balucha <u>at</u> horizon sk&gt; for providing this.
  </li><li>Bug fixed: The ca_ES of perl file linking was missing in 
    Makefile of language dir.
  </li><li>Switching to use debconf-set-selections to preconfigure settings.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 May 2014 13:43:14 +0800
</p>
<p>drbl (2.9.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A program "drbl-live-hadoop" was added. This is still in testing.
  </li><li>Language files were updated for ocs-img-2-vdk.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 26 May 2014 23:09:41 +0800
</p>
<p>drbl (2.9.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The grep function "NEWER" was renamed as "GREP_NEWER" and defined
    only in drbl-functions, used for all related scripts.
  </li><li>Program drbl-list-tarball was renamed as list_available_tarball.
  </li><li>Program list_latest_tarball was added and used in function 
    get_syslinux_binary_for_dos_linux of drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 21 May 2014 22:43:14 +0800
</p>
<p>drbl (2.8.25-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package diskscan was added in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 17 May 2014 08:53:46 +0800
</p>
<p>drbl (2.8.24-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Starting IP address of the range was not used.
    Thanks to Andrew Parker for reporting this issue
    (<a href="https://sourceforge.net/p/drbl/bugs/12/">https://sourceforge.net/p/drbl/bugs/12/</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 10 May 2014 13:06:06 +0800
</p>
<p>drbl (2.8.23-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The doc URL was changed to drbl.org from drbl.sourceforge.net.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 01 May 2014 21:38:27 +0800
</p>
<p>drbl (2.8.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding modified halt and rc.sysinit for DRBL clients of
    CentOS 6.5.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 27 Apr 2014 13:47:28 +0800
</p>
<p>drbl (2.8.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN7.5.drbl for Debian 7.5.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 26 Apr 2014 23:37:48 +0800
</p>
<p>drbl (2.8.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>It's rpcbind-boot service only, we do not have to modify
    portmap.conf for Ubuntu 12.04.
  </li><li>A workround to keep console in vt 1 when booting for Ubuntu
    12.04 in select-in-client mode.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 26 Apr 2014 20:35:12 +0800
</p>
<p>drbl (2.8.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: when in restoreparts mode, "-t" option should be set by
    default (drbl-functions).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 26 Apr 2014 10:48:05 +0800
</p>
<p>drbl (2.8.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>File set-netboot-1st-efi-nvram should be in Clonezilla.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 23 Apr 2014 14:53:04 +0800
</p>
<p>drbl (2.8.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating comments in drblpush for dhcpd.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 23 Apr 2014 14:47:19 +0800
</p>
<p>drbl (2.8.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating network installation list for Ubuntu as "precise trusty"
    in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 19 Apr 2014 12:16:50 +0800
</p>
<p>drbl (2.8.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Removing "mkdir /run/rpcbind" in init.drbl because it's useless.
  </li><li>The rpcbind-boot.conf instead of rpcbind.conf for drbl clients
    is modified to be start on startup. This fixed the issue that
    when init starts, the dir /run/rpcbind/ does not exist.
  </li><li>The plymouth related part in /etc/init/rc.conf was disabled
    otherwise when select-in-client mode of clonezilla is run in
    vt1, the virtual console will be switched to vt7.
  </li><li>Program drbl-client-root-passwd failed on Ubuntu 14.04, so
    updating the function create_chpasswd_env of drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 19 Apr 2014 11:14:43 +0800
</p>
<p>drbl (2.8.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: "service mountall start" in drbl-client-boot.conf of
    Ubuntu 12.04 drbl client should not be commented. Previous 
    change should be reverted.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 Apr 2014 09:33:57 +0800
</p>
<p>drbl (2.8.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding comment when modifying a file in function switch_upstart_service
    of drbl-functions.
  </li><li>customized plymouth.conf for Ubuntu 12.04 drbl clients was added. 
    This is a workaround to
    <a href="https://bugs.launchpad.net/ubuntu/precise/+source/mountall/+bug/1233610">https://bugs.launchpad.net/ubuntu/precise/+source/mountall/+bug/1233610</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 Apr 2014 09:22:43 +0800
</p>
<p>drbl (2.8.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Appending "-" in the default hostname prefix of drblpush.
  </li><li>Program drbl-etc-hosts was updated to work with the default
    hostname prefix.
  </li><li>The function get_gdm_kdm_conf_filename of drbl-functions was
    updated to find and create the lightdm.conf for Ubuntu 14.04.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 16 Apr 2014 16:21:35 +0800
</p>
<p>drbl (2.8.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding Ubuntu 14.04 support.
  </li><li>The dir /run/rpcbind should be created by init.drbl so that
    when rpcbind service starts, it can touch the files under
    the path.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 16 Apr 2014 14:10:16 +0800
</p>
<p>drbl (2.8.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding variable drbl_nfs_prot in drbl.conf.
  </li><li>Adding nfs4 support in mknic-nbi. The whole
    support for nfs4 in drbl is not ready yet.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 12 Apr 2014 23:59:48 +0800
</p>
<p>drbl (2.8.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Unmounting bind directory under /tftpboot/ if it exists. 
    Otherwise when running "drblsrv -u", it might clean the 
    bind source dir on system.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 12 Apr 2014 16:09:30 +0800
</p>
<p>drbl (2.8.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Mageia's path for vmlinuz and initrd were changed.
    The corresponding changes were done in drbl-netinstall.
  </li><li>The version of netinstall in drbl.conf was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 03 Apr 2014 11:03:16 +0800
</p>
<p>drbl (2.8.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-prepare-pxelinux failed to copy correct *.c32 of
    bios to /tftpboot/nbi_img/. It caused amd64 system failed to boot
    via pxelinux, isolinux or syslinux.
  </li><li>An option "-v" was added to drbl-prepare-pxelinux for verbose
    output.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 01 Apr 2014 19:39:53 +0800
</p>
<p>drbl (2.8.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-sl failed to detect iso file for file
    package &gt;=5.17.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 29 Mar 2014 15:47:34 +0800
</p>
<p>drbl (2.8.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the hostname assignment syntax was not working
    for perl &lt;= 5.14.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 26 Mar 2014 15:59:08 +0800
</p>
<p>drbl (2.8.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The message when searching and copying mbr.bin is suppressed. 
  </li><li>libnet-ip-perl was removed from control file because drbl-ipcalc-range
    was removed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 25 Mar 2014 21:35:59 +0800
</p>
<p>drbl (2.8.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-ipcalc-list was updated by Ceasar Sun for some
    more checking.
  </li><li>Only when old clients-of-*.txt exists it will be moved.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 25 Mar 2014 21:27:50 +0800
</p>
<p>drbl (2.8.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The support for using network class A and B on DRBL server
    was added.
  </li><li>The default rule for hostname of clients was changed to
    ${prefix}${ip//./-}".
  </li><li>The method to disable upstart service of Ubuntu client
    was improved.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 25 Mar 2014 17:59:16 +0800
</p>
<p>drbl (2.8.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Initial support for using network class A and B on DRBL server.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 24 Mar 2014 22:00:16 +0800
</p>
<p>drbl (2.7.40-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES of bash was updated. Thanks to 
    Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
  </li><li>Program drbl-ipcalc-list was updated by Ceasar Sun
    to support option "-r".
  </li><li>Program drbl-ipcalc-range was removed because
    drbl-ipcalc-list has same feature.
  </li><li>Program get-client-ip-list uses drbl-ipcalc-list,
    not drbl-ipcalc-range anymore.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 24 Mar 2014 18:06:08 +0800
</p>
<p>drbl (2.7.39-drbl2) unstable; urgency=low
</p>
<ul>
  <li>Adding libnet-ip-perl in the dependence. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 21 Mar 2014 11:02:51 +0800
</p>
<p>drbl (2.7.39-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-ipcalc-range was missing.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 19 Mar 2014 16:55:29 +0800
</p>
<p>drbl (2.7.38-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-ipcalc-list was tuned so it's easier to read.
  </li><li>A program drbl-ipcalc-range was added, and is used in 
    get-client-ip-list to get correct DRBL class A or B
    layout's clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 19 Mar 2014 10:11:32 +0800
</p>
<p>drbl (2.7.37-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Two options were added to <a href="ftp://makeboot.sh/-L">makeboot.sh:-L</a>  and -U. 
    Patch provided by Ceasar Sun.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 17 Mar 2014 17:43:00 +0800
</p>
<p>drbl (2.7.36-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program get-client-ip-list was updated with missing function "USAGE", 
    and the codes were revised, too.
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 17 Mar 2014 14:30:53 +0800
</p>
<p>drbl (2.7.35-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A workaround to let DRBL live client start lightdm after
    nis was added in drbl-live.
  </li><li>Program drbl-live was rewritten with more functions so 
    it's easier to read.
  </li><li>Usage message of drbl-ipcalc-list was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 15 Mar 2014 22:24:19 +0800
</p>
<p>drbl (2.7.34-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option was improved to avoid some
    runtime error.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 14 Mar 2014 17:32:38 +0800
</p>
<p>drbl (2.7.33-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Variable "messages_shown_preference" in drbl.conf was moved to
    drbl-ocs.conf and renamed as "ocs_prompt_mode".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 14 Mar 2014 10:53:49 +0800
</p>
<p>drbl (2.7.32-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The codes of prepare-files-for-PXE-client were rewritten so that
    it's can be reused for drbl-prepare-pxelinux. 
    An option "-p" was added to put pxelinux-related files only. 
  </li><li>Bug fixed: the "-d" option of drbl-prepare-pxelinux failed to
    process EFI files of syslinux.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 08 Mar 2014 20:22:11 +0800
</p>
<p>drbl (2.7.31-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-list-tarball was added to replace list_available_tbz2
    and list_latest_tbz2.
  </li><li>Program drbl-prepare-pxelinux and the function 
    get_syslinux_binary_for_dos_linux of drbl-functions was modified
    to use syslinux xz tarball instead of bz2 tarball because the
    latest testing one does not provide bz2 format anymore.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 07 Mar 2014 15:19:52 +0800
</p>
<p>drbl (2.7.30-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The network-manager service of DRBL Ubuntu client is disabled.
    This issue exists specially on Ubuntu Saucy.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 05 Mar 2014 21:01:59 +0800
</p>
<p>drbl (2.7.29-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The variable msg_remember_poweroff_reboot_when_ocs_sr_is_done in
    language file ja_JP.UTF-8 was updated to avoid triggering 
    jfbterm crash.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 03 Mar 2014 08:27:09 +0800
</p>
<p>drbl (2.7.28-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option of drbl-functions was updated to accept
    all print characters ([[:print:]]) since now we use eval to run it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 21 Feb 2014 22:05:56 +0800
</p>
<p>drbl (2.7.27-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The prompt about running syslinux in stupid mode in makeboot.sh
    has been updated by adding "-d syslinux".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 18 Feb 2014 21:16:33 +0800
</p>
<p>drbl (2.7.26-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Return status of syslinux/extlinux in makeboot.sh will be checked.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 17 Feb 2014 16:48:15 +0800
</p>
<p>drbl (2.7.25-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN7.4.drbl for Debian 7.4.
  </li><li>Adding unattended option (-b) to makeboot.sh.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 16 Feb 2014 19:32:08 +0800
</p>
<p>drbl (2.7.24-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option of drbl-functions was updated to
    accept more characters, including "[", "]", and ";".
  </li><li>Program parted instead of fdisk is used in makeboot.sh to show
    the destination disk partition layout. 
    Thanks to Ady (ady-sf <u>at</u> hotmail com) for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 09 Feb 2014 12:13:37 +0800
</p>
<p>drbl (2.7.23-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option of drbl-functions was updated to 
    accept pipe sign (|). Thanks to Fuchs (fusi1939 <u>at</u> users sf net)
    for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 06 Feb 2014 20:00:42 +0800
</p>
<p>drbl (2.7.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program makeboot.sh was improved. The directory "/syslinux" on
    the destination partition should be checked. If it does 
    not exist, we should create it. 
    Thanks to Ady (ady-sf <u>at</u> hotmail com) for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 28 Jan 2014 11:22:15 +0800
</p>
<p>drbl (2.7.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function put_syslinux_makeboot_for_usb_flash in drbl-functions
    and drbl-sl have been updated corresponding to the unification
    of syslinux and isolinux dirs in the Clonezilla/DRBL/GParted live
    iso and zip.
  </li><li>A dir "/utils/win64" was added to be used to run syslinux in 
    Win64 env.
  </li><li>An option "-d syslinux" was added when running syslinux in 
    makeboot.sh/makeboot.bat/makeboot64.bat. Thanks to 
    Ady (ady-sf <u>at</u> hotmail com) for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 20 Jan 2014 15:15:07 +0800
</p>
<p>drbl (2.7.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 18 Jan 2014 08:27:16 +0800
</p>
<p>drbl (2.7.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 14 Jan 2014 21:02:45 +0800
</p>
<p>drbl (2.7.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 09 Jan 2014 17:31:53 +0800
</p>
<p>drbl (2.7.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package chntpw in the packages list for Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 06 Jan 2014 17:09:47 +0800
</p>
<p>drbl (2.7.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package bcache-tools in the packages list for 
    Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 03 Jan 2014 13:53:58 +0800
</p>
<p>drbl (2.7.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-prepare-pxelinux supports the path for testing 
    version of syslinux.
  </li><li>Program put_syslinux_makeboot_for_usb_flash put both files 
    for syslinux and isolinux, in order to make versions consistent.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 26 Dec 2013 11:06:40 +0800
</p>
<p>drbl (2.7.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Spanish language file was updated. 
    Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez &lt;jrmc77 <u>at</u> terra es&gt;.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Dec 2013 15:50:20 +0800
</p>
<p>drbl (2.7.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Removing the testing words for options z5p and z6p in 
    language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 18 Dec 2013 14:57:31 +0800
</p>
<p>drbl (2.7.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: mbr.bin should not be put in efi32 or efi64 dirs 
    by drbl-prepare-pxelinux.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 15 Dec 2013 19:38:46 +0800
</p>
<p>drbl (2.7.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN7.3.drbl for Debian 7.3.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 15 Dec 2013 16:23:05 +0800
</p>
<p>drbl (2.7.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-prepare-pxelinux failed to prepare mbr.bin from 
    syslinux 6 on Debian system.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 15 Dec 2013 16:16:53 +0800
</p>
<p>drbl (2.7.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>One more sentence about ocs-cvtimg-comp was added in language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 12 Dec 2013 11:59:36 +0800
</p>
<p>drbl (2.7.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>One more sentence about ocs-cvtimg-comp was added in language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 11 Dec 2013 22:03:38 +0800
</p>
<p>drbl (2.7.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package pv was added in PKG_TO_QUERY of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 10 Dec 2013 20:30:53 +0800
</p>
<p>drbl (2.7.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>One more sentence about ocs-cvtimg-comp was added in language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 10 Dec 2013 14:10:25 +0800
</p>
<p>drbl (2.7.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated by adding some sentences related to 
    ocs-cvtimg-comp.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Dec 2013 22:53:42 +0800
</p>
<p>drbl (2.7.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated by adding some sentences related to ocs-cvtimg-comp.
  </li><li>Comments were added in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Dec 2013 15:44:11 +0800
</p>
<p>drbl (2.7.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated by adding some sentences related
    to ocs-cvtimg-comp.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Dec 2013 11:05:33 +0800
</p>
<p>drbl (2.7.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding pixz in in PKG_FROM_DBN_MINIMAL_NEED of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 07 Dec 2013 11:43:21 +0800
</p>
<p>drbl (2.7.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding isolinux and pxelinux in PKG_FROM_DBN_MINIMAL_NEED of drbl.conf.
    This is used for live system with syslinux version 6.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Nov 2013 10:15:50 +0800
</p>
<p>drbl (2.6.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The "quiet" parameter will only be put for Debian or Ubuntu clients. 
    Not for other distributions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 20 Nov 2013 21:31:31 +0800
</p>
<p>drbl (2.6.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: plymouth.override for Ubuntu &lt;= 13.10 will cause 
    lightdm not starting. Therefore it's only used for Ubuntu &gt;= 13.10.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 20 Nov 2013 18:22:03 +0800
</p>
<p>drbl (2.6.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package htop was added in the Clonezilla live packaegs list.
  </li><li>Auto-login for Ubuntu 13.10 client did not work.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 20 Nov 2013 14:15:17 +0800
</p>
<p>drbl (2.6.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>"PATH" configuration of pxelinux only exists when version &gt;= 5, so 
     program generate-pxe-men should not add it when pxelinux version is &lt; 5.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Nov 2013 21:17:18 +0800
</p>
<p>drbl (2.6.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A better method to disable plymouth service was added for DRBL 
    Ubuntu client.
  </li><li>"quiet" was added in the boot parameters of DRBL clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Nov 2013 20:28:25 +0800
</p>
<p>drbl (2.6.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: plymouth should not be started for DRBL clients on
    Ubuntu 13.10 when Clonezilla job is run.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Nov 2013 16:44:44 +0800
</p>
<p>drbl (2.6.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: mbr.bin of syslinux was not put in
    /usr/share/drbl/syslinux/bios/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 05 Nov 2013 14:42:03 +0800
</p>
<p>drbl (2.6.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Minor bug about udev if block in drblsrv was fixed.
  </li><li>Temporarily removing isolinux and pxelinux from 
    PKG_FROM_DBN_MINIMAL_NEED in drbl.conf due to the 
    local boot issue for pxelinux 6.2
    (<a href="http://www.syslinux.org/archives/2013-October/021010.html">http://www.syslinux.org/archives/2013-October/021010.html</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 29 Oct 2013 11:50:01 +0800
</p>
<p>drbl (2.6.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding CentOS 5.10 support.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 28 Oct 2013 17:00:38 +0800
</p>
<p>drbl (2.6.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Linking pxelinux module files in /tftpboot/nbi_img so it could be
    compatible with older version.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 28 Oct 2013 15:01:25 +0800
</p>
<p>drbl (2.6.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-prepare-pxelinux failed to put the efi part of upstream
    syslinux 6.
  </li><li>Bug fixed: ldlinux.e32 and ldlinux.e64 should not be put in 
    sys_pxelinux_v5p_required_c32 of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 28 Oct 2013 09:52:20 +0800
</p>
<p>drbl (2.6.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-gen-pxe-nbi should not remove
    /tftpboot/nbi_img/{bootx64.efi,bootia32.efi}
  </li><li>Adding more general network booting settings in dhcpd.conf for PXE 
    and EFI clients. However, the config for EFI clients are not ready yet.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 27 Oct 2013 21:31:16 +0800
</p>
<p>drbl (2.6.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The extlinux won't be installed when "drblsrv -i" is run.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 27 Oct 2013 20:47:51 +0800
</p>
<p>drbl (2.6.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Files bootia32.efi and bootx64.efi should be prepared in
    /tftpboot/nbi_img/ in prepare-files-for-PXE-client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 27 Oct 2013 20:32:34 +0800
</p>
<p>drbl (2.6.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN7.2.drbl for Debian 7.2.
  </li><li>Supporting pxelinux 6.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 27 Oct 2013 19:33:25 +0800
</p>
<p>drbl (2.5.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating netinstall versions of Ubuntu and Fedora in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 23 Oct 2013 08:26:23 +0800
</p>
<p>drbl (2.5.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding pause 1 sec in drbl-live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 16 Oct 2013 09:46:04 +0800
</p>
<p>drbl (2.5.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-ssi-client-prepare failed to set the autologin account
    for lightdm.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Oct 2013 08:49:08 +0800
</p>
<p>drbl (2.5.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding option --ipv4 for tftpd-hpa because DRBL now does not support IPv6, 
    and if we force to disable it by adding "ipv6.disable=1" in boot parameter, 
    without using option --ipv4 the tftpd-hpa won't start
    (<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=544089">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=544089</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 11 Oct 2013 20:51:35 +0800
</p>
<p>drbl (2.5.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding a line feed before running mknic-nbi in drbl-live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 10 Oct 2013 13:31:13 +0800
</p>
<p>drbl (2.5.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: mknic-nbi should be run in drbl-live. Because it is 
    run in chroot when DRBL live is created. However, the variable 
    use_run_in_initrd and use_dev_pts_in_initrd in initramfs' /etc/linuxrc.conf
    (i.e. "/usr/lib/mkpxeinitrd-net/initrd-skel/etc/linuxrc.conf") need to be 
    updated in the run time. Otherwise it might cause some modules fail to 
    be loaded.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Oct 2013 15:54:12 +0800
</p>
<p>drbl (2.5.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding makeboot64.bat which runs syslinux64.exe.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 08 Oct 2013 13:21:16 +0800
</p>
<p>drbl (2.5.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: package name is dosfstools instead of mkdosfs
    in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Oct 2013 09:45:35 +0800
</p>
<p>drbl (2.5.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding mkdosfs in the packages list of drbl.conf for Debian system.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Oct 2013 21:44:49 +0800
</p>
<p>drbl (2.5.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding <a href="http://txt2html.sourceforge.net/">txt2html</a> in the packages list of drbl.conf for Debian system.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Oct 2013 11:58:15 +0800
</p>
<p>drbl (2.5.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Making mountkernfs.sh and mountdevsubfs.sh start with
    updating /etc/mtab, otherwise when it's run 2nd time with reload
    (e.g. mountkernfs.sh reload), it will complain. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 02 Oct 2013 15:36:49 +0800
</p>
<p>drbl (2.5.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Removing localepurge in the Clonezilla live packages list. We have to 
    install that in live-hook because localepurge &gt;= 0.7.3 the preseeding 
    has to be done before localepurge is installed 
    (<a href="http://bugs.debian.org/724491">http://bugs.debian.org/724491</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 25 Sep 2013 19:22:18 +0800
</p>
<p>drbl (2.5.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding debconf-utils in the required packages list in drbl.conf 
    due to the need for debconf-set-selections.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 25 Sep 2013 15:36:44 +0800
</p>
<p>drbl (2.5.1-drbl2) unstable; urgency=low
</p>
<ul>
  <li>Removing those not supported release in drbl/setup/files/Ubuntu/, 
    only 12.04, 12.10, 13.04, and 13.10 were kept now.
  </li><li>Adding firstboot for Debian 7.1 DRBL client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Sep 2013 21:25:23 +0800
</p>
<p>drbl (2.5.0-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding support for Ubuntu 13.10.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 22 Sep 2013 15:48:59 +0800
</p>
<p>drbl (2.4.39-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The unnecessary variables wget* in drbl.conf were removed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 16 Sep 2013 19:27:47 +0800
</p>
<p>drbl (2.4.38-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The DRBL URL was changed as <a href="http://drbl.org">http://drbl.org</a> from <a href="http://drbl.sf.net">http://drbl.sf.net</a>
    in drbl-syslinux-netinstall and generate-pxe-menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 12 Sep 2013 11:05:55 +0800
</p>
<p>drbl (2.4.37-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Removing hwinfo from live system packages list in drbl.conf 
    because it's removed from Ubuntu Saucy and we use lshw instead.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Sep 2013 16:05:35 +0800
</p>
<p>drbl (2.4.36-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Removing hal from live system packages list in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Sep 2013 13:33:30 +0800
</p>
<p>drbl (2.4.35-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Minor updates about the the question mark after 
    $msg_are<u>u</u>sure<u>u</u>want_to_continue for language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 07 Sep 2013 09:10:00 +0800
</p>
<p>drbl (2.4.34-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Changed messages_shown_preference="cmd" in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 31 Aug 2013 20:07:25 +0800
</p>
<p>drbl (2.4.33-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Netinstall for Debian Squeeze was removed in drbl.conf, while wheezy
    is kept.
  </li><li>Variable msg_prompt_for_insert_USB_dev_if_necessary and 
    msg_do_not_close_window_until_clone_finish in language files were 
    updated.
  </li><li>A variable messages_shown_preference was added in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 31 Aug 2013 19:54:34 +0800
</p>
<p>drbl (2.4.32-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-all-service failed to stop or restart nfs-server in 
    Fedora 17.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 27 Aug 2013 15:03:40 +0800
</p>
<p>drbl (2.4.31-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: nfs service was not started or stopped by drbl-all-service
    in CentOS 6. Thanks to hihcheng Huang (shihcheng0527 <u>at</u> gmail com) 
    for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 26 Aug 2013 16:47:45 +0800
</p>
<p>drbl (2.4.30-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: option of switch-pxe-menu was changed to avoid confusion.
  </li><li>Variable clonezilla_client_menu_label_prefix was added in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 25 Aug 2013 16:40:47 +0800
</p>
<p>drbl (2.4.29-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Usage of drbl-client-switch was updated.
  </li><li>Two contral variables, ocs_fsck_src_part and ocs_chk_img, were added in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 24 Aug 2013 18:11:32 +0800
</p>
<p>drbl (2.4.28-drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 13 Aug 2013 19:57:42 +0800
</p>
<p>drbl (2.4.27-drbl) unstable; urgency=low
</p>
<ul>
  <li>Using gdisk-noicu in the packages list of Clonezilla live instead
    of gdisk (drbl.conf).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 11 Aug 2013 10:18:48 +0800
</p>
<p>drbl (2.4.26-drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 10 Aug 2013 23:45:05 +0800
</p>
<p>drbl (2.4.25-drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 10 Aug 2013 15:06:14 +0800
</p>
<p>drbl (2.4.24-drbl) unstable; urgency=low
</p>
<ul>
  <li>The netinstall for Ubuntu in drbl.conf was updated as precise and raring.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 09 Aug 2013 09:40:16 +0800
</p>
<p>drbl (2.4.23-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES of bash was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 07 Aug 2013 16:53:11 +0800
</p>
<p>drbl (2.4.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated by adding some sentences related
    to prep-ocsroot.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 28 Jul 2013 11:12:10 +0800
</p>
<p>drbl (2.4.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding efibootmgr in the packages list for quering in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Jul 2013 21:05:58 +0800
</p>
<p>drbl (2.4.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated. Words about updating EFI NVRAM were added.
  </li><li>An option "-iefi" was added in in the restoring dialog menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 23 Jul 2013 16:36:10 +0800
</p>
<p>drbl (2.4.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package "lsof" was added in the packages list of Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 23 Jul 2013 15:16:31 +0800
</p>
<p>drbl (2.4.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package efibootmgr was added in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 19 Jun 2013 14:57:30 +0800
</p>
<p>drbl (2.4.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>CentOS 6.4 support was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 11 Jun 2013 10:05:24 +0800
</p>
<p>drbl (2.4.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: a variable lib_NOT_2_be_copied_2_common_root in drbl.conf 
    was added so that it's easier to exclude the /lib/live/mount dir, 
    the mounting point of Debian live 3.x, when running drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 09 Jun 2013 16:28:44 +0800
</p>
<p>drbl (2.4.15-drbl2) unstable; urgency=low
</p>
<ul>
  <li>Making the desktop icon files of drbl live as executable.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 09 Jun 2013 12:05:27 +0800
</p>
<p>drbl (2.4.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-client-boot.conf for Ubuntu 12.04 and 12.10 should be improved 
    as that for Ubuntu 13.04. Otherwise lightdm won't start in DRBL client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 06 Jun 2013 23:12:39 +0800
</p>
<p>drbl (2.4.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: "-r" option for Clonezilla might be duplicated when
    "-k1" option is enabled.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 26 May 2013 15:07:53 +0800
</p>
<p>drbl (2.4.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: for expert mode, the postrun action for Clonezilla live should be asked, 
    not be skipped. Thanks to SourceJo for reporting this issue 
    (<a href="https://sourceforge.net/p/clonezilla/discussion/Open_discussion/thread/3f3bb67d/?limit=25#5973">https://sourceforge.net/p/clonezilla/discussion/Open_discussion/thread/3f3bb67d/?limit=25#5973</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 25 May 2013 17:12:35 +0800
</p>
<p>drbl (2.4.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the dhcpd.conf created on Ubuntu 12.04 won't be started 
    due to an extra "," in the end of name server list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 17 May 2013 14:57:40 +0800
</p>
<p>drbl (2.4.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Program makeboot.bat was updated with a better mechanism to prevent
    run program on wrong disk.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 16 May 2013 10:12:49 +0800
</p>
<p>drbl (2.4.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding LSB info in modified service networking of DRBL clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 15 May 2013 11:19:40 +0800
</p>
<p>drbl (2.4.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding zfs-fuse in the Clonezilla/DRBL live CD packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 14 May 2013 14:38:53 +0800
</p>
<p>drbl (2.4.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the shared object exposed by the kernel, i.e. linux-vdso.so.1 
    and linux-gate.so.1, should be skipped when copying shared objects to 
    /tftpboot/node_root/ since they do not exist on the file system. 
  </li><li>Package sysklogd was replaced by rsyslog in the Clonezilla/DRBL live CD 
    packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 14 May 2013 09:10:47 +0800
</p>
<p>drbl (2.4.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: We should not overwrite the /etc/init.d/networking of 
    Ubuntu's DRBL client. Since it's linked to /lib/init/upstart-job. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 12 May 2013 19:19:02 +0800
</p>
<p>drbl (2.4.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding support for Debian Sid (ATM it's Jessie). The networking service
    for DRBL clients was added so that it's easier to deal with network 
    status file.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 12 May 2013 19:08:12 +0800
</p>
<p>drbl (2.4.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: function drbl-functions failed to append /sbin/ in the PATH.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 09 May 2013 14:32:48 +0800
</p>
<p>drbl (2.4.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package nwipe in the packages list of Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 07 May 2013 14:23:04 +0800
</p>
<p>drbl (2.4.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The variable sys_pxelinux_required_c32 of drbl.conf was changed to 
    sys_pxelinux_v5p_required_c32.
  </li><li>Updating function put_syslinux_makeboot_for_usb_flash so that the 
    menu.c32/vesamenu.c32/chain.c32 will always the same version with 
    those downloaded c32 files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 06 May 2013 21:04:53 +0800
</p>
<p>drbl (2.4.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Set "greeter-show-manual-login=true" for lightdm of DRBL client in drbl-login-switch.
  </li><li>Function restore_lvm2_udevd_rules was moved from ocs-functions to drbl-functions because it's required for Clonezilla SE.
  </li><li>Function disable_lvm2_udevd_rules was added in drbl-functions because it will be used in drblpush and ocs-lvm2-stop.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 06 May 2013 14:05:08 +0800
</p>
<p>drbl (2.4.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Minor typo in en_US was fixed.
  </li><li>Package lziprecover was added.
  </li><li>Adding Ubuntu 13.04 in this release. Not well tested yet.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 04 May 2013 16:21:39 +0800
</p>
<p>drbl (2.3.28-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Putting OpenSuSe netinstall version as 12.3 in drbl.conf.
 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Apr 2013 21:38:04 +0800
</p>
<p>drbl (2.3.27-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Making ldlinux.c32, libcom32.c32, libutil.c32 downloaded from tarball mode 
    as 644, not vfat's 755.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Apr 2013 21:26:09 +0800
</p>
<p>drbl (2.3.26-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package f2fs-tools was added in the live CD packages list in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 20 Apr 2013 09:14:09 +0800
</p>
<p>drbl (2.3.25-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function put_syslinux_makeboot_for_usb_flash in drbl-functions 
    was updated for Syslinux 5.x. Three more c32 modules are required.
  </li><li>Bug fixed: swapon command should not be run in background in mkswapfile,
    otherwise swap size might be not counted immediately.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Apr 2013 16:02:10 +0800
</p>
<p>drbl (2.3.24-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Suppress nm-tool stderr in drblpush in case the program is not installed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 02 Apr 2013 21:56:31 +0800
</p>
<p>drbl (2.3.23-drbl1) unstable; urgency=low
</p>
<ul>
  <li>If display manager is not found, skip the rest with different prompt
    in drbl-login-switch.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 01 Apr 2013 14:13:24 +0800
</p>
<p>drbl (2.3.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: function set_ocs_sr_extra_param in drbl-functions has been 
    improved. If postrun action is assigned, we should not ask it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 29 Mar 2013 17:12:33 +0800
</p>
<p>drbl (2.3.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez's email address in the language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 29 Mar 2013 08:32:41 +0800
</p>
<p>drbl (2.3.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: i386 version of Clonezilla live was used when running drblpush
    with clonezilla_live_mode option 0. Thanks to Yitzon Belandria 
    &lt;yitzon <u>at</u> gmail com&gt; for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Mar 2013 20:18:15 +0800
</p>
<p>drbl (2.3.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Message msg_etherboot_5_4_is_required in drbl-sl was disabled.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 25 Mar 2013 21:20:22 +0800
</p>
<p>drbl (2.3.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>When the DNS server in /etc/resolv.conf is <a href="telnet://127.0.0.1">127.0.0.1</a> from network-manager,
    the real DNS got from nm-tool will be used for DRBL clients. 
  </li><li>Excluding LXC network deivce lxc* because they won't be DRBL clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 25 Mar 2013 14:56:08 +0800
</p>
<p>drbl (2.3.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>SHA256SUMS will be created by function gen_CDG_checksums.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 20 Mar 2013 15:29:55 +0800
</p>
<p>drbl (2.3.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>DSL and Puppylinux were removed from the supporting list in drbl-sl.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 13 Mar 2013 14:47:55 +0800
</p>
<p>drbl (2.3.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: for restoreparts mode, we should not turn on "-g auto" 
    option by default. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Mar 2013 10:04:47 +0800
</p>
<p>drbl (2.3.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated. Words about Etherboot were removed.
  </li><li>The prompt about etherboot requirement was removed from drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 07 Mar 2013 09:09:13 +0800
</p>
<p>drbl (2.3.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: alias network card configuration can not be parsed. 
    Thanks to Pat Gilbert &lt;pat.gilbert <u>at</u> gmail com&gt; for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 04 Mar 2013 13:47:34 +0800
</p>
<p>drbl (2.3.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: we should also test udevd since the udev on CentOS 5.9
    is older version. Thanks to Aaron for reporting this issue.
  </li><li>Files halt and rc.sysinit for CentOS 5.9's client were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 01 Mar 2013 13:41:24 +0800
</p>
<p>drbl (2.3.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>File firstboot.DBN6.0.7.drbl for Debian 6.0.7 was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 01 Mar 2013 08:40:32 +0800
</p>
<p>drbl (2.3.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: extlinux should be required for Clonezilla live, not DRBL.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 28 Feb 2013 11:00:16 +0800
</p>
<p>drbl (2.3.9-drbl2) unstable; urgency=low
</p>
<ul>
  <li>Updated control, removing syslinux-common required since syslinux is
    listed. vim-common is removed, since fail-mbr.bin is from partclone. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 28 Feb 2013 10:39:39 +0800
</p>
<p>drbl (2.3.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  </li><li>Language file es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 25 Feb 2013 10:37:27 +0800
</p>
<p>drbl (2.3.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 21 Feb 2013 21:50:57 +0800
</p>
<p>drbl (2.3.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 21 Feb 2013 14:26:29 +0800
</p>
<p>drbl (2.3.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Variable msg_ocs_param_srel was added in language files.
  </li><li>An option -srel|--save-restore-error-log to force saving error log in the 
    image dir was added in clonezilla SE related menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 17 Feb 2013 14:44:15 +0800
</p>
<p>drbl (2.3.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN7.0.drbl for Debian 7.0.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Feb 2013 22:40:30 +0800
</p>
<p>drbl (2.3.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: typo in prepare-files-for-PXE-client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Feb 2013 20:20:34 +0800
</p>
<p>drbl (2.3.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Excluding linux kernel with name "-dbg" for Debian-based DRBL.
  </li><li>Bug fixed: for Syslinux 5, 3 more files are required to be put in /tftpboot/nbi_img/, 
    i.e. ldlinux.c32, libcom32.c32, libutil.c32.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Feb 2013 20:10:54 +0800
</p>
<p>drbl (2.3.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package udisks was added the packages list for Clonezilla live.  
    Thanks to fusi1939 for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 10 Feb 2013 22:41:44 +0800
</p>
<p>drbl (2.3.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: for Syslinux 5, 3 more files are required, i.e. 
    ldlinux.c32, libcom32.c32, libutil.c32
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 07 Feb 2013 14:29:18 +0800
</p>
<p>drbl (2.3.0-drbl1) unstable; urgency=low
</p>
<ul>
  <li>The patches from Ceasar Sun for Fedora 17/18 were applied.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 05 Feb 2013 11:03:23 +0800
</p>
<p>drbl (2.2.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Netinstall version for Fedora was changed to 18 in drbl.conf.
  </li><li>Language file ca_ES for perl script was added. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 29 Jan 2013 08:43:26 +0800
</p>
<p>drbl (2.2.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Files about fail-mbr.bin have been removed since 
    now Partclone (&gt;=0.2.58) has included that.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 22 Jan 2013 11:36:15 +0800
</p>
<p>drbl (2.2.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: makeboot.sh failed to run with path name containing white space.
  </li><li>Lucid netinstall was removed from drbl.conf since another LTS (precise) is available already.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 14 Jan 2013 23:15:47 +0800
</p>
<p>drbl (2.2.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drblpush failed to identify the new, different arch of iso for 
    the alternative testing Clonezilla live on the repository.
  </li><li>Language files (perl) were updated. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 11 Jan 2013 11:00:39 +0800
</p>
<p>drbl (2.2.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function active_proc_partitions was moved to ocs-functions from drbl-functions.
  </li><li>An option "-s" to assign syslinux version was added to drbl-syslinux-netinstall.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 10 Jan 2013 15:34:11 +0800
</p>
<p>drbl (2.2.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Put option "-nogui" in the higher position of the menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 08 Jan 2013 22:13:30 +0800
</p>
<p>drbl (2.2.0-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Checking if blkid exists in makeboot.sh. Adding a prompt about GPT disk.
  </li><li>Package libdata-validate-ip-perl was added in the packages list for Clonezilla live.
  </li><li>Some big changes in the Clonezilla codes, therefore increase the 2nd major version number.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 03 Jan 2013 14:12:42 +0800
</p>
<p>drbl (2.1.52-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Package extlinux was added in the packages list for DRBL so then Clonezilla.
  </li><li>Program extlinux now will be put in dir util/linux/ 
    in Clonezilla/DRBL/GParted live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 26 Dec 2012 20:55:00 +0800
</p>
<p>drbl (2.1.51-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Comments in drbl-functions were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 26 Dec 2012 07:49:01 +0800
</p>
<p>drbl (2.1.50-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: parse_cmdline_option in drbl-function failed to parse boot 
    parameter containing "$" character. 
    Thanks to kuen-shieh yang &lt;kuenshieh <u>at</u> gmail com&gt; for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 25 Dec 2012 22:34:54 +0800
</p>
<p>drbl (2.1.49-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Program makeboot.sh should check the destination disk
    is MBR or not.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 24 Dec 2012 16:22:05 +0800
</p>
<p>drbl (2.1.48-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package exfat-utils and exfat-fuse in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 23 Dec 2012 10:53:59 +0800
</p>
<p>drbl (2.1.47-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding package tree in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 22 Dec 2012 15:17:03 +0800
</p>
<p>drbl (2.1.46-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES of bash was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 04 Dec 2012 23:06:16 +0800
</p>
<p>drbl (2.1.45-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_TW was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 04 Dec 2012 09:51:30 +0800
</p>
<p>drbl (2.1.44-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Wrong path for the rerun command of drbl-ocs.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 04 Dec 2012 09:02:52 +0800
</p>
<p>drbl (2.1.43-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Wrong path for the rerun command of drbl-ocs.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 04 Dec 2012 08:55:29 +0800
</p>
<p>drbl (2.1.42-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Typo in scripts/bin/drbl-langchooser for Catalan was fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 03 Dec 2012 15:57:21 +0800
</p>
<p>drbl (2.1.41-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 03 Dec 2012 15:11:35 +0800
</p>
<p>drbl (2.1.40-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file ca_ES was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Bug fixed: no more using cdebootstrap when creating 
    Clonezilla/DRBL/GParted live, therefore the function 
    create_live_required_debian_based_prompt in drbl-functions should 
    check debootstrap, not cdebootstrap.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 01 Dec 2012 11:31:47 +0800
</p>
<p>drbl (2.1.39-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated. Using "Catalan | catal&Atilde; " 
    instead of "Catalonia | Catalunya". 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 Nov 2012 14:51:13 +0800
</p>
<p>drbl (2.1.38-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 Nov 2012 11:26:48 +0800
</p>
<p>drbl (2.1.37-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 Nov 2012 09:27:55 +0800
</p>
<p>drbl (2.1.36-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl ocs-live mode failed to download i686 version of 
    Clonezilla live in drblpush, because the file name should use <em>-i686-pae</em>.
  </li><li>Bug fixed: drbl-fuu failed to deal with file name with white space. 
    Thanks to &lt;himaboy826 <u>at</u> gmail com&gt; for reporting this bug.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 30 Nov 2012 09:20:37 +0800
</p>
<p>drbl (2.1.35-drbl1) unstable; urgency=low
</p>
<p>  *Language file ca_ES was added. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou and Innocent De Marchi.
  *Language file it_IT was updated. Thanks to Gianfranco Gentili.
  *Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  *Language file de_DE was updated. Thanks to Michael Vinzenz.
  *Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  *Language ca_ES was added in the Clonezilla live menu.
</p>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 28 Nov 2012 20:04:04 +0800
</p>
<p>drbl (2.1.34-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES of bash was updated and a typo in language file 
    en_US was fixed. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez (JRMC77 <u>at</u> terra es).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 20 Nov 2012 23:09:27 +0800
</p>
<p>drbl (2.1.33-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: A workaround to identify initrd on CentOS 5 
    was added in drbl-sl.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 07 Nov 2012 13:15:50 +0800
</p>
<p>drbl (2.1.32-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: DRBL_SCRIPT_PATH was not set in drbl-conf-functions. 
    Thanks to explosions for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 06 Nov 2012 19:37:20 +0800
</p>
<p>drbl (2.1.31-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Using syslinux/pxelinux 4.06 in drbl/clonezilla.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 04 Nov 2012 14:04:43 +0800
</p>
<p>drbl (2.1.30-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding mpg123 for Clonezilla live. It might be useful to play sound
    when Clonezilla job is done. Thanks to FlyFox for this idea.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 02 Nov 2012 14:58:34 +0800
</p>
<p>drbl (2.1.29-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: no more removing ip=frommedia for PXE client as live-boot
    2.0.15-1.drbl15 and 3.x have no issue to use that. If it's removed, 
    Ubuntu-based Clonezilla live won't enter rc-sysinit.conf until failsafe.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 01 Nov 2012 07:21:26 +0800
</p>
<p>drbl (2.1.28-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: typo of msg_autohostname_is_reserved_for_save_mode in en_US 
    was fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 28 Oct 2012 10:41:50 +0800
</p>
<p>drbl (2.1.27-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: the service listed in /etc/drbl/client-extra-service was not on 
    on the client if it's not on on the server. Thanks to 
    Odin N&Atilde;&cedil;sen &lt;odin <u>at</u> gnuskole no&gt; for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 27 Oct 2012 10:15:30 +0800
</p>
<p>drbl (2.1.26-drbl2) unstable; urgency=low
</p>
<ul>
  <li>Files halt.CO6.3.drbl and rc.sysinit.CO6.3.drbl were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Oct 2012 20:55:19 +0800
</p>
<p>drbl (2.1.26-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: "drbl_syscfg" instead of "drbl_setup_cfg" should be used, and 
    drbl_setup_cfg was removed from drbl.conf. Thanks to 
    Odin N&Atilde;&cedil;sen &lt;odin <u>at</u> gnuskole no&gt; for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Oct 2012 20:46:54 +0800
</p>
<p>drbl (2.1.25-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: exporting /opt/ should be appended, not overwritten 
    the previous exported dir.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Oct 2012 09:00:05 +0800
</p>
<p>drbl (2.1.24-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl clients should mount server's /opt/ when it 
    is exported on server.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Oct 2012 08:52:46 +0800
</p>
<p>drbl (2.1.23-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Only when dir /opt exists, drbl-nfs-export will export that dir.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Oct 2012 08:21:54 +0800
</p>
<p>drbl (2.1.22-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: /opt dir should be exported for NFS clients since some 
    packages (e.g. google-chrome) will be installed in that dir. 
    Thanks to Odin N&Atilde;&cedil;sen &lt;odin <u>at</u> gnuskole no&gt; for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Oct 2012 07:53:46 +0800
</p>
<p>drbl (2.1.21-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: version sorting option "-V" should be used with sort in 
    function find_next_release_version_number.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Oct 2012 22:22:42 +0800
</p>
<p>drbl (2.1.20-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A function find_next_release_version_number was added for using in 
    creating Clonezilla/DRBL/GParted live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Oct 2012 15:17:14 +0800
</p>
<p>drbl (2.1.19-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: sort and uniq should not be used in init.drbl since these 
    programs are not in /bin instead they are in /usr/bin. This will cause 
    Debian and Ubuntu drbl client fail to boot.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 18 Oct 2012 09:12:30 +0800
</p>
<p>drbl (2.1.18-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: For Ubuntu 12.04 and 12.10, linux-image-extra should be 
    installed to. So we can support more hardware for DRBL clients.
  </li><li>Changed the default option for client's kernel arch to the same as 
    server for Debian.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Oct 2012 22:00:39 +0800
</p>
<p>drbl (2.1.17-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: dracut should not be listed in PKG_TO_QUERY, we have to 
    put it in PKG_TO_QUERY_RH otherwise it will cause Ubuntu or Debian 
    fail to finish drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Oct 2012 20:33:20 +0800
</p>
<p>drbl (2.1.16-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Some more minor bugs fixed for Fedora 17 were applied.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Oct 2012 10:32:53 +0800
</p>
<p>drbl (2.1.15-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Some problem for linking /var/run and /var/lock on Fedora 17. Reverted to the previous status.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Oct 2012 21:17:54 +0800
</p>
<p>drbl (2.1.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>More comments were added for not getting IPv6 in drbl-get-ipadd and init.drbl.
  </li><li>Bug fixed: Linked files /var/run and /var/lock were not copied in client's /var/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Oct 2012 20:40:13 +0800
</p>
<p>drbl (2.1.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: IPv6 address should not be gotten since for the NFS of DRBL only IPv4 is supported.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 14 Oct 2012 13:21:24 +0800
</p>
<p>drbl (2.1.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: kernel package of FC17 on repository could not be found.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 13 Oct 2012 22:16:43 +0800
</p>
<p>drbl (2.1.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: typos in drbl-all-service were fixed.
  </li><li>Bug fixed: the warning about fine-tune rc.sysinit and halt should not be given for Fedora 17 since there is no such files exist.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Oct 2012 20:37:01 +0800
</p>
<p>drbl (2.1.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: yum repository files drbl-*-list should use "$basearch" instead of "$ARCH" so that the architecture could be correct.
  </li><li>Bug fixed: for CentOS/RHEL 6 or Fedora 17, dracut instead of mkinitrd is required. Therefore using PKG_TO_QUERY="mkinitrd dracut" in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Oct 2012 19:54:59 +0800
</p>
<p>drbl (2.1.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: YP update command for Fedora 17 was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Oct 2012 10:57:35 +0800
</p>
<p>drbl (2.1.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Some bugs for Fedora 17 were fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Oct 2012 09:19:34 +0800
</p>
<p>drbl (2.1.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Failed to serve Fedora 17. The patches from 
    Ceasar Sun were merged. Some minor bugs still have to be fixed later.
  </li><li>Bug fixed: Files for Ubuntu 12.10 were added. It should be able 
    to serve ubuntu 12.10.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 11 Oct 2012 08:28:35 +0800
</p>
<p>drbl (2.1.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Ubuntu Quantal netinstall was enabled in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 02 Oct 2012 20:04:45 +0800
</p>
<p>drbl (2.1.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Avoiding the warning messages when running Debian 6.0.6.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 01 Oct 2012 09:13:07 +0800
</p>
<p>drbl (2.1.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Comments in drbl-ipcalc-list were updated.
  </li><li>Bug fixed: drbl-ipcalc-list should skip network and broadcast IP address.
  </li><li>Bug fixed: when OS_Version does not match, drblpush should use the most related rc.sysinit and halt files for clients. Othereise the possibility that clients fail to boot will be high.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 24 Sep 2012 14:48:11 +0800
</p>
<p>drbl (2.1.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A shell script "drbl-run-parts" was added.
  </li><li>Package "crontabs" is no more required for Fedora as now we use 
    drbl-run-parts.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 05 Sep 2012 07:25:38 +0800
</p>
<p>drbl (2.1.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated. Variable "msg_autoproductname_is<u>a</u>reserved" 
    was added, and a typo en en_US was fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 27 Aug 2012 14:20:58 +0800
</p>
<p>drbl (2.1.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: /usr/share/drbl/{sbin,bin} was not in the PATH in init.drbl.
  </li><li>Removing the vague "Something went wrong" prompts.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 26 Aug 2012 10:19:44 +0800
</p>
<p>drbl (2.1.0-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Updating files in dir debian so less lintian warnings.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 25 Aug 2012 11:21:58 +0800
</p>
<p>drbl (2.0.14-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Files renamed, so using ocs-srv-live instead of ocs-srv-live.sh, 
    drbl-sl instead of drbl-SL.sh.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 25 Aug 2012 07:33:23 +0800
</p>
<p>drbl (2.0.13-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding the interpreter's magic number for drbl-perl-functions, 
    drbl-conf-functions, and drbl-functions to avoid lintian's warning.
  </li><li>Updating debian/control to follow Debian's policy.
  </li><li>To follow Debian's policy, the program drbl-SL.sh was renamed as drbl-sl, 
    and drbl-live.sh was renamed as drbl-live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 24 Aug 2012 19:13:59 +0800
</p>
<p>drbl (2.0.12-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A typo in language file en_US was fixed.  Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
  </li><li>Function gen_CDG_checksums will generate a html format for CHECKSUMS file.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 22 Aug 2012 17:03:56 +0800
</p>
<p>drbl (2.0.11-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Failed to parse boot parameter like: "mount UUID=X /mnt" in grub booting. Thanks to nottaken37 for reporting this issue (<a href="https://sourceforge.net/projects/clonezilla/forums/forum/663168/topic/5133379">https://sourceforge.net/projects/clonezilla/forums/forum/663168/topic/5133379</a>).
  </li><li>Variable msg_client_job_are_logged_in in language files was updated. Thanks to Ren&Atilde;&copy; M&Atilde;&copy;rou.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 20 Aug 2012 14:59:22 +0800
</p>
<p>drbl (2.0.10-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Using $desktop_user_group_debian instead of hardcoded strings in drblpush.  Thanks to dwight (<a href="http://sourceforge.net/tracker/?func=detail&amp;atid=537327&amp;aid=3559290&amp;group_id=73280">http://sourceforge.net/tracker/?func=detail&amp;atid=537327&amp;aid=3559290&amp;group_id=73280</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 19 Aug 2012 10:44:47 +0800
</p>
<p>drbl (2.0.9-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Improvement: drbl-SL.sh now supports Clonezilla and GParted live zip file format.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 17 Aug 2012 10:52:58 +0800
</p>
<p>drbl (2.0.8-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drblsrv-offline should be in /usr/sbin instead of /usr/share/drbl/sbi/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 13 Aug 2012 11:15:51 +0800
</p>
<p>drbl (2.0.7-drbl1) unstable; urgency=low
</p>
<ul>
  <li>A better way to append drbl-related PATH was adopted.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 12 Aug 2012 23:20:58 +0800
</p>
<p>drbl (2.0.6-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Using /usr/share/drbl instead of /usr/share/drbl/ so that no "//" in the PATH.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 12 Aug 2012 22:36:44 +0800
</p>
<p>drbl (2.0.5-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function gen_CDG_checksums was added in drbl-funtions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 11 Aug 2012 17:45:00 +0800
</p>
<p>drbl (2.0.4-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Function get_latest_pkg_in_drbl_repository was added in drbl-funtions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 11 Aug 2012 14:43:12 +0800
</p>
<p>drbl (2.0.3-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Remove those related to "$DRBL_SCRIPT_PATH" from language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 09 Aug 2012 14:45:17 +0800
</p>
<p>drbl (2.0.2-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: get-assigned-hn-by-ip searched the wrong path.
  </li><li>Put the GPL text file instead of COPYING because ocs-iso, create-*-live need that.
  </li><li>Put the file license of fail-mbr.bin as BSD. Orgad Shaneh has decided the license.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 09 Aug 2012 09:11:23 +0800
</p>
<p>drbl (2.0.1-drbl1) unstable; urgency=low
</p>
<ul>
  <li>Adding firstboot.DBN6.0.5.drbl for Debian 6.0.5.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 08 Aug 2012 19:56:18 +0800
</p>
<p>drbl (2.0.0-drbl1) unstable; urgency=low
</p>
<ul>
  <li>DRBL Version 2. New files arch so it's easier to be packaged in Debian.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 06 Aug 2012 15:04:53 +0800
</p>
<p>drbl (1.12.19-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Minor improving in set-default-pxe-img.
  </li><li>The function get_pxecfg_image_block in drbl-functions should not be case sensitive for label name.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 25 Jul 2012 17:25:35 +0800
</p>
<p>drbl (1.12.18-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file de_DE was updated. Thanks to Michael Vinzenz.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 12 Jul 2012 19:25:33 +0800
</p>
<p>drbl (1.12.17-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Forcing to run "make -C /var/yp all", i.e. not only "make -C /var/yp", when updating YP in drblpush.
  </li><li>Language files were updated. The warning about -z3 was removed. Thanks to mmx.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 05 Jul 2012 21:57:44 +0800
</p>
<p>drbl (1.12.16-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Some notes were added in drbl-sha1pass.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 29 Jun 2012 11:37:20 +0800
</p>
<p>drbl (1.12.15-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Improve drbl-sha1pass so that it will work for perl &lt;=5.9.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 25 Jun 2012 13:02:51 +0800
</p>
<p>drbl (1.12.14-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program mkswapfile was updated to skip mounting extended partition. Othewise it might be hang due to a mount bug.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Jun 2012 20:31:27 +0800
</p>
<p>drbl (1.12.13-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Services ethtool, openssh-server and postfix were added to the checklists in start-srv-after-ifup.
  </li><li>Skip removing /lib/init/rw in Debian clients during bootinig.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 18 Jun 2012 21:49:10 +0800
</p>
<p>drbl (1.12.12-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Environmental ADDRFAM=inet was added in start-srv-after-ifup so that mountnfs in if-up.d/ will be run.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 17 Jun 2012 14:16:38 +0800
</p>
<p>drbl (1.12.11-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package ddrescue was removed from the packages list of Clonezilla live because it's no more in Debian Sid, and we already have gddrescue. Ref: <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=677101">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=677101</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 Jun 2012 22:24:41 +0800
</p>
<p>drbl (1.12.10-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Updating Fedora netinstall as 17 in drbl.conf.
  </li><li>Updating function output_netinstall_syslinux_pxelinux_menu in drbl-functions so that Fedora 17 netinstall boot parameter inst.repo could be generated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 Jun 2012 22:06:08 +0800
</p>
<p>drbl (1.12.9-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 24 May 2012 23:56:02 +0800
</p>
<p>drbl (1.12.8-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 22 May 2012 15:13:26 +0800
</p>
<p>drbl (1.12.7-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 May 2012 23:33:16 +0800
</p>
<p>drbl (1.12.6-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-SL.sh failed to find vmlinuz for Clonezilla live iso in OpenSuSE 11.3. Thanks to melnikok for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 May 2012 22:30:32 +0800
</p>
<p>drbl (1.12.5-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
  </li><li>Package cifs-utils instead of smbfs is listed as Clonezilla live package
    in drbl.conf. Ref: <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=620847">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=620847</a>
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 May 2012 20:06:31 +0800
</p>
<p>drbl (1.12.4-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Netinstall for Ubuntu has changed to "lucid oneiric precise" in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 04 May 2012 11:37:22 +0800
</p>
<p>drbl (1.12.3-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Using Digest::SHA instead of Digest::SHA1 in drbl-sha1pass.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 03 May 2012 09:11:33 +0800
</p>
<p>drbl (1.12.2-1drbl) unstable; urgency=low
</p>
<ul>
  <li>TIMED_LIGHTDM_TIME_DEFAULT="30" was added in drbl.conf.
  </li><li>Autologin/Normallogin/Timelogin was added for lightdm in drbl-login-switch.
  </li><li>Program drbl-client-root-passwd now supports Ubuntu 12.04.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 02 May 2012 13:57:11 +0800
</p>
<p>drbl (1.12.1-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Removing libdigest-sha1-perl from drbl.conf. It's no more in new GNU/Linux.
  </li><li>Using "udev" instead of "none" for mounting /dev in DRBL clients.
  </li><li>File drbl-client-boot.conf for Ubuntu 12.04 was added.
  </li><li>File drblpush was modified to make drbl work on Ubuntu 12.04.
  </li><li>A better file drbl-client-boot.conf for Ubuntu 11.10 was added. This should fix the issue that keyboard and mount not working on DRBL clients. Thanks to timothyshelley for reporting this issue.  Ref: <a href="https://sourceforge.net/projects/drbl/forums/forum/394008/topic/5189191">https://sourceforge.net/projects/drbl/forums/forum/394008/topic/5189191</a>
  </li><li>This release should support Ubuntu 12.04, but still not well tested.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 01 May 2012 13:47:42 +0800
</p>
<p>drbl (1.11.15-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 17 Apr 2012 09:56:42 +0800
</p>
<p>drbl (1.11.14-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 09 Apr 2012 07:30:58 +0800
</p>
<p>drbl (1.11.13-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package vlan was added in Clonezilla live packages list in drbl.conf. Thanks to ggarland &lt;ggarland_99 <u>at</u> yahoo com&gt; for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 08 Apr 2012 20:06:03 +0800
</p>
<p>drbl (1.11.12-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Wicd autostart in DRBL clients is disabled in DRBL live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 07 Apr 2012 21:30:21 +0800
</p>
<p>drbl (1.11.1l-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 03 Apr 2012 08:49:00 +0800
</p>
<p>drbl (1.11.10-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 27 Mar 2012 07:43:52 +0800
</p>
<p>drbl (1.11.9-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 25 Mar 2012 15:45:28 +0800
</p>
<p>drbl (1.11.8-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Adding packages dnsutils for Clonezilla live.
  </li><li>Adding package syslinux in drbl-bug-report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 18 Mar 2012 22:01:38 +0800
</p>
<p>drbl (1.11.7-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: regular expression in  list_available_rpm was fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 11 Mar 2012 19:52:23 +0800
</p>
<p>drbl (1.11.6-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Forcing drbl-prepare-pxelinux to be run in drblsrv-offline if gpxelinux.0 is not found. Thanks to Tomas Moler for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 09 Mar 2012 11:52:06 +0800
</p>
<p>drbl (1.11.5-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Updating opensuse netinstall as 12.1 in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 01 Mar 2012 22:19:08 +0800
</p>
<p>drbl (1.11.4-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES of bash was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez (JRMC77 <u>at</u> terra es).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 23 Feb 2012 10:19:38 +0800
</p>
<p>drbl (1.11.3-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: function get_syslinux_binary_for_dos_linux in drbl-functions failed to get the latest version.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 14 Feb 2012 22:32:15 +0800
</p>
<p>drbl (1.11.2-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 11 Feb 2012 09:11:26 +0800
</p>
<p>drbl (1.11.1-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Option -fsck-src-part-y was added for dialog menus about running fsck with option -y in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 02 Feb 2012 20:34:16 +0800
</p>
<p>drbl (1.10.90-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Network installation for Fedora has been updated to 16 in drbl.conf.
  </li><li>The mode of Language file zh_CN.UTF-8 is changed to 644.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 31 Jan 2012 14:09:35 +0800
</p>
<p>drbl (1.10.89-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  </li><li>Files firstboot.DBN6.0.4.drbl and firstboot.DBN6.0.3.drbl were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 31 Jan 2012 11:33:26 +0800
</p>
<p>drbl (1.10.88-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The updates repository path of Centos 6 was added in drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 30 Jan 2012 16:29:08 +0800
</p>
<p>drbl (1.10.87-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Put grub-pc instead of dummy package grub in the packages list of Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 25 Jan 2012 13:11:10 +0800
</p>
<p>drbl (1.10.86-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package sysklogd was added back in the packages list of Clonezilla live, which was due to the new initscripts (2.88dsf-16) breaking it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Jan 2012 21:54:51 +0800
</p>
<p>drbl (1.10.85-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Function disable_apt_lang_translation was added in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Jan 2012 20:15:41 +0800
</p>
<p>drbl (1.10.84-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 23 Jan 2012 10:43:54 +0800
</p>
<p>drbl (1.10.83-1drbl) unstable; urgency=low
</p>
<p>  *- Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  *- Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  *- Language file it_IT was updated. Thanks to Gianfranco Gentili.
</p>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 21 Jan 2012 21:41:37 +0800
</p>
<p>drbl (1.10.82-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Language file es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
  </li><li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 20 Jan 2012 19:27:41 +0800
</p>
<p>drbl (1.10.81-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 20 Jan 2012 14:39:56 +0800
</p>
<p>drbl (1.10.80-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>File drbl-functions was updated for the option -icds of drbl-ocs and ocs-sr.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 20 Jan 2012 14:15:42 +0800
</p>
<p>drbl (1.10.79-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 10 Jan 2012 22:04:37 +0800
</p>
<p>drbl (1.10.78-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 10 Jan 2012 21:35:51 +0800
</p>
<p>drbl (1.10.77-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Use syslinux/pxelinux 4.05 in drbl/clonezilla.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 28 Dec 2011 16:58:58 +0800
</p>
<p>drbl (1.10.76-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package pv (pipe viewer) was added in the packages list of Clonezilla live. (<a href="https://sourceforge.net/tracker/?func=detail&amp;atid=671653&amp;aid=3463112&amp;group_id=115473">https://sourceforge.net/tracker/?func=detail&amp;atid=671653&amp;aid=3463112&amp;group_id=115473</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 22 Dec 2011 16:53:52 +0800
</p>
<p>drbl (1.10.75-2drbl) unstable; urgency=low
</p>
<ul>
  <li>Typo in changelog fixed. It should be CentOS 6.2 support was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 21 Dec 2011 22:07:14 +0800
</p>
<p>drbl (1.10.75-1drbl) unstable; urgency=low
</p>
<ul>
  <li>CentOS 6.1 support was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 21 Dec 2011 21:49:39 +0800
</p>
<p>drbl (1.10.74-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package sysklogd was removed temporarily in the packages list of Clonezilla live due to the new initscripts (2.88dsf-16) breaks it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 21 Dec 2011 12:01:43 +0800
</p>
<p>drbl (1.10.73-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Desktop icon file Grandr.desktop was replaced by Display.desktop.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 20 Dec 2011 15:50:04 +0800
</p>
<p>drbl (1.10.72-1drbl) unstable; urgency=low
</p>
<ul>
  <li>More improvements to make Fedora 14 and CentOS 5/6 DRBL clients reboot faster. Remove those unnecessary file systems mounting and unmounting. Thanks to Robert Arkiletian for helping this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 14 Dec 2011 16:47:57 +0800
</p>
<p>drbl (1.10.71-1drbl) unstable; urgency=low
</p>
<ul>
  <li>CentOS 6.1 support was added.
  </li><li>Bug fixed: /dev/shm and tmpfs won't be umounted or remounted when halting or reboot in Fedora 14 and CentOS 5/6. This will make Fedora 14/CentOS 6 DRBL clients halt and reboot faster. Thanks to Robert Arkiletian for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 14 Dec 2011 10:02:03 +0800
</p>
<p>drbl (1.10.70-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file es_ES of bash was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez (JRMC77 <u>at</u> terra es).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 12 Dec 2011 21:51:43 +0800
</p>
<p>drbl (1.10.69-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Failed to create SSI template tarball if only Clonezilla box mode or SSI mode is enabled, while the rest if full mode. Thanks to hsueh.chih.sun for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 05 Dec 2011 21:40:26 +0800
</p>
<p>drbl (1.10.68-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The option "-z7" was added in the Clonezilla-related TUI menus.
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 30 Nov 2011 14:56:37 +0800
</p>
<p>drbl (1.10.67-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package libdigest-sha1-perl was removed from the list of Clonezilla live. Since for Sid the perl has built-in function. (Ref: <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=591091">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=591091</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 25 Nov 2011 08:51:11 +0800
</p>
<p>drbl (1.10.66-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 21 Nov 2011 09:14:54 +0800
</p>
<p>drbl (1.10.65-1drbl) unstable; urgency=low
</p>
<p>  *Language file pt_BR was updated. Thanks to Marcos Pereira da Silva Cruz. 
  *Language file fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  *Language file it_IT was updated. Thanks to Gianfranco Gentili.
  *Language file de_DE was updated. Thanks to Michael Vinzenz.
  *Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  *Language file es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
  *Packages dirvish, rsnapshot, and lrzip were added in the Clonezilla live packages list in drbl.conf. Package crontabs, which provides run-parts, was added in PKG_FROM_RH in drbl.conf.
</p>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 13 Nov 2011 00:59:48 +0800
</p>
<p>drbl (1.10.64-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 10 Nov 2011 10:34:18 +0800
</p>
<p>drbl (1.10.63-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Nov 2011 23:09:52 +0800
</p>
<p>drbl (1.10.62-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Function get_sort<u>V</u>opt was added in drbl-functions.
  </li><li>Program get-client-ip-list was improved with better sorting.
  </li><li>Bug fixed: get-client-ip-list failed to give correct clients' IP addresses if server's IP address is in the range in dhcpd.conf.
  </li><li>Use function get_sort<u>V</u>opt in drblsrv.
  </li><li>The missing icons of Grandr.desktop and GParted.desktop on DRBL live have been fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Nov 2011 10:52:18 +0800
</p>
<p>drbl (1.10.61-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  </li><li>Package acpi was added in Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 03 Nov 2011 22:52:19 +0800
</p>
<p>drbl (1.10.60-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file de_DE was updated. Thanks to Michael Vinzenz.
  </li><li>Default not to turn on "-fsck-src-part".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 02 Nov 2011 18:34:05 +0800
</p>
<p>drbl (1.10.59-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 31 Oct 2011 22:33:19 +0800
</p>
<p>drbl (1.10.58-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 28 Oct 2011 08:57:11 +0800
</p>
<p>drbl (1.10.57-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Ubuntu 11.10 support was added. //NOTE// This is not finished yet.
  </li><li>S00wait-drbl was added in /etc/rcS.d so rcS won't start too fast in Ubuntu's upstart.
  </li><li>YP is configured not to show hashed password. Thanks to Robert Arkiletian &lt;robark <u>at</u> gmail com&gt;.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 25 Oct 2011 15:10:27 +0800
</p>
<p>drbl (1.10.56-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 21 Oct 2011 13:37:08 +0800
</p>
<p>drbl (1.10.55-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 20 Oct 2011 22:32:34 +0800
</p>
<p>drbl (1.10.54-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Put "wait" command in the end of drbl-doit so it won't enter shell before the jobs are done.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 20 Oct 2011 20:49:12 +0800
</p>
<p>drbl (1.10.53-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 20 Oct 2011 18:34:54 +0800
</p>
<p>drbl (1.10.52-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 20 Oct 2011 14:33:41 +0800
</p>
<p>drbl (1.10.51-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Function get_existing_language in drbl-functions was updated to show locales in natual language, not locales.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 17 Oct 2011 22:14:47 +0800
</p>
<p>drbl (1.10.50-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program cpufrequtils was added in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 17 Oct 2011 11:16:17 +0800
</p>
<p>drbl (1.10.49-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Wallpaper image files for Clonezilla live grub2 boot menu were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 15 Oct 2011 13:23:52 +0800
</p>
<p>drbl (1.10.48-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The year of copyright in the boot menu was updated.
  </li><li>The dir /dev/shm of the DRBL client is created with mode 1777. The makes Google Chrome can run.
  </li><li>The tmpfs dirs (/dev/pts, /dev/shm, /sys, /proc) are shown in DRBL client's /etc/fstab.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 02 Oct 2011 14:56:29 +0800
</p>
<p>drbl (1.10.47-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: tmpfs file systems should not be umounted in boot.localfs of OpenSuSE 11.3.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 29 Sep 2011 15:02:33 +0800
</p>
<p>drbl (1.10.46-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The usage of drbl-syslinux-netinstall was updated.
  </li><li>Bug fixed: Wrong function name USAGE in mknic-nbi.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 26 Sep 2011 22:55:01 +0800
</p>
<p>drbl (1.10.45-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 20 Sep 2011 11:34:05 +0800
</p>
<p>drbl (1.10.44-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Files rc.sysinit.CO5.7.drbl and halt.CO5.7.drbl were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 20 Sep 2011 10:54:18 +0800
</p>
<p>drbl (1.10.43-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Improvement: Now the RPM repositories of drbl stable/testing/unstable won't be mixed. They will be separate.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 18 Sep 2011 12:08:32 +0800
</p>
<p>drbl (1.10.42-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Function make_random_password in drbl-functions failed to separate "[", "]", and $ is not escaped. Thanks to Robert Arkiletian for this bug report.
  </li><li>Bug fixed: drbl-prepare-pxelinux might fail due to a file belongs to 2 RPM packages.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 17 Sep 2011 15:00:18 +0800
</p>
<p>drbl (1.10.41-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Function parse_cmdline_option in drbl-functions was improved. Make the parsing for ocs_lang="" correct.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 12 Sep 2011 11:36:08 +0800
</p>
<p>drbl (1.10.40-1drb1) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option in drbl-functions was improved to accept the /proc/cmdline parsed by grub2 1.99. Now it works for 3 cases in /proc/cmdline: E.g. (1) ocs_prerun="sleep 5" (2) ocs_prerun=\"sleep 5\" and (3) "ocs_prerun=sleep 5".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 08 Sep 2011 18:12:25 +0800
</p>
<p>drbl (1.10.39-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 31 Aug 2011 22:26:36 +0800
</p>
<p>drbl (1.10.38-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Option "-irhr" was added in dcs.
  </li><li>Language files updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 31 Aug 2011 16:29:23 +0800
</p>
<p>drbl (1.10.37-1drbl) unstable; urgency=low
</p>
<ul>
  <li>To avoid the failure message during RH-like Linux booting, "true" was added in firstboot instead of just commenting the command.
  </li><li>Program arm-wol was improved to exit with correct retval.
  </li><li>This version should be ready for CentOS 6.0.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Aug 2011 16:51:53 +0800
</p>
<p>drbl (1.10.36-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Wrong path for RH_RPMS_os_update_dir of CentOS 6 in drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 23 Aug 2011 14:42:44 +0800
</p>
<p>drbl (1.10.35-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Netinstall for CentOS has been moved to 5 and 6 in drbl.conf.
  </li><li>CentOS 6.0 support was added.
  </li><li>Service nfs and nfslock were not restarted when running "drbl-all-service restart" on CentOS 6.0.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 22 Aug 2011 22:26:14 +0800
</p>
<p>drbl (1.10.34-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 22 Aug 2011 11:04:40 +0800
</p>
<p>drbl (1.10.33-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: For Ubuntu 10.10 and 11.04, i586 kernel should not be an option.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 22 Aug 2011 10:53:02 +0800
</p>
<p>drbl (1.10.32-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program list_latest_deb was updated to use "ls -v" methoed.
  </li><li>Program partclone-utils was added in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Aug 2011 13:21:00 +0800
</p>
<p>drbl (1.10.31-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file en_US was slightly updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 14 Aug 2011 09:20:50 +0800
</p>
<p>drbl (1.10.30-1drbl) unstable; urgency=low
</p>
<ul>
  <li>File firstboot.DBN6.0.2.drbl was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 13 Aug 2011 23:55:49 +0800
</p>
<p>drbl (1.10.29-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: fail to test if "sort -V" works or not.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 13 Aug 2011 22:38:28 +0800
</p>
<p>drbl (1.10.28-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Version sorting (--version-sort) of sort will be used when sorting the kernels of CentOS if it's found (Not working for CentOS 5.6).
  </li><li>/dev/pts won't be mounted in initrd when /run is not mounted (mknic-nbi).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Aug 2011 22:12:52 +0800
</p>
<p>drbl (1.10.27-1drbl) unstable; urgency=low
</p>
<ul>
  <li>"devpts" is used for /dev/pts on the client's /etc/fstab.
  </li><li>Two more flags were implemented in mknic-nbi: use_run_in_initrd and use_dev_pts_in_initrd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Aug 2011 17:11:17 +0800
</p>
<p>drbl (1.10.26-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Files rc.sysinit and halt for CentOS 5.6 client were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Aug 2011 16:00:05 +0800
</p>
<p>drbl (1.10.25-1drbl) unstable; urgency=low
</p>
<ul>
  <li>German language file was added. Thanks to Michael Vinzenz &lt;michael.vinzenz <u>at</u> scalaris com&gt;.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 11 Aug 2011 23:08:02 +0800
</p>
<p>drbl (1.10.24-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The execution of drbl-prepare-memtest and drbl-prepare-pxelinux were moved to drblsrv-offline from drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 06 Aug 2011 23:34:06 +0800
</p>
<p>drbl (1.10.23-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program drblsrv-offline supports linux kernel 3. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 06 Aug 2011 22:03:30 +0800
</p>
<p>drbl (1.10.22-1drbl) unstable; urgency=low
</p>
<ul>
  <li>A prompt was added if ntfsprogs will be installed in Debian Linux.
  </li><li>The Makefile in lang dir was not updated for de_DE.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 05 Aug 2011 23:27:02 +0800
</p>
<p>drbl (1.10.21-1drbl) unstable; urgency=low
</p>
<ul>
  <li>German language files were added. Thanks to Michael Vinzenz &lt;michael.vinzenz <u>at</u> scalaris com&gt;.
  </li><li>Since ntfs-3g in Debian Sid provides ntfsprogs, we should not include that in PKG_FROM_DBN of drbl.conf. A dynamic detection was added in drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 05 Aug 2011 21:25:45 +0800
</p>
<p>drbl (1.10.20-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program mknic-nbi supports linux kernel 3.
  </li><li>Language file es_ES of bash was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez (JRMC77 <u>at</u> terra es).
  </li><li>If dir /run is found on server, add that in /tftpboot/node_root/.
  </li><li>Program gawk has some dynamic libs in /usr/lib, so drblpush must prepare that, too.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 04 Aug 2011 22:30:08 +0800
</p>
<p>drbl (1.10.19-1drbl) unstable; urgency=low
</p>
<ul>
  <li>"oneiric" was added in the netinstall of drbl.conf, while maverick was removed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 27 Jul 2011 22:06:31 +0800
</p>
<p>drbl (1.10.18-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Restored "ntfs-3g" in PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf. It's not duplicated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Jul 2011 14:57:04 +0800
</p>
<p>drbl (1.10.17-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Duplicated "ntfs-3g" was removed from PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Jul 2011 13:33:16 +0800
</p>
<p>drbl (1.10.16-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Package fbcat was listed for Clonezilla live instead of fbgrab in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 22 Jul 2011 22:51:12 +0800
</p>
<p>drbl (1.10.15-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option of drbl-functions was updated to allow "&gt;,^, or *".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 18 Jul 2011 04:22:15 +0800
</p>
<p>drbl (1.10.14-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option of drbl-functions was updated to allow "$" because it is required by samba share with hidden share. Thanks to nottaken37. (Ref: <a href="https://sourceforge.net/projects/clonezilla/forums/forum/663168/topic/4589215">https://sourceforge.net/projects/clonezilla/forums/forum/663168/topic/4589215</a>)
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 06 Jul 2011 09:50:17 +0800
</p>
<p>drbl (1.10.13-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Big5 language files for traditional Chinese were removed. Now only UTF-8 is supported.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 24 Jun 2011 00:08:21 +0800
</p>
<p>drbl (1.10.12-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Language file pt_BR was added, so the corresponding parts were updated. Thanks to Marcos Pereira da Silva Cruz &lt;marcospcruz <u>at</u> gmail com&gt;.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 19 Jun 2011 09:47:08 +0800
</p>
<p>drbl (1.10.11-1drbl) unstable; urgency=low
</p>
<ul>
  <li>A workaround was added to solve ntfs-3g and ntfsprogs conflict in Debian Sid. However, a better method should be implemented in the future.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 30 May 2011 14:03:41 +0800
</p>
<p>drbl (1.10.10-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Netinstall version for fedora was updated to 15 in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 26 May 2011 07:33:49 +0800
</p>
<p>drbl (1.10.9-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Patch from Ceasar Sun was applied so that drbl-netinstall could support Mageia. 
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 19 May 2011 11:51:36 +0800
</p>
<p>drbl (1.10.8-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-netinstall was updated to work with Scientific Linux 6.
  </li><li>Switch to use 6x as the default netinstall version for Scientific Linux in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 19 May 2011 10:18:35 +0800
</p>
<p>drbl (1.10.7-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-SL.sh was improved to work with XZ compression initrd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 13 May 2011 10:00:36 +0800
</p>
<p>drbl (1.10.6-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Version number of syslinux can be assigned in get_syslinux_binary_for_dos_linux &amp; put_syslinux_makeboot_for_usb_flash of drbl-functions.
  </li><li>By default the syslinux_binsrc_url in drbl.conf is set as "<a href="http://free.nchc.org.tw/syslinux">http://free.nchc.org.tw/syslinux</a>".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 06 May 2011 14:35:41 +0800
</p>
<p>drbl (1.10.5-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: test before reading /etc/lsb-release in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 03 May 2011 21:08:33 +0800
</p>
<p>drbl (1.10.4-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: The method to decide using insserv or update-rc.d failed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 03 May 2011 18:30:23 +0800
</p>
<p>drbl (1.10.3-1drbl) unstable; urgency=low
</p>
<ul>
  <li>A better method to decide using insserv or update-rc.d for Debian and Ubuntu was implemented in drbl-client-switch and drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 03 May 2011 15:45:55 +0800
</p>
<p>drbl (1.10.2-1drbl) unstable; urgency=low
</p>
<ul>
  <li>An option "-d|--deploy-to-system-too" was added to drbl-prepare-memtest and drbl-prepare-pxelinux.
  </li><li>A better method to decide using insserv or update-rc.d for Debian and Ubuntu was implemented in drbl-all-service and drbl-client-service.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 03 May 2011 10:28:01 +0800
</p>
<p>drbl (1.10.1-1drbl) unstable; urgency=low
</p>
<ul>
  <li>A betterm method to decide using insserv or update-rc.d for Debian and Ubuntu was implemented in drblpush.
  </li><li>Ubuntu 11.04 was supported in this release.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 02 May 2011 16:31:25 +0800
</p>
<p>drbl (1.9.23-1drbl) unstable; urgency=low
</p>
<ul>
  <li>By default in mknic-nbi we switch to not including all firmwares in initrd, because what "modinfo -F firmwares" should be trusted.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 01 May 2011 15:11:12 +0800
</p>
<p>drbl (1.9.22-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Function parse_cmdline_option of drbl-functions was updated to allow "@" because it is required by sshfs.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 28 Apr 2011 13:28:17 +0800
</p>
<p>drbl (1.9.21-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Minor improvement for drbl-prepare-memtest.
  </li><li>The variable syslinux_binsrc_url in drbl.conf was updated.
  </li><li>Typos "comamnd" were fixed. Thanks to pascaldevuyst for reporting this.
  </li><li>The program drbl-prepare-pxelinux was added, so no more binary pxelinux-related files in drbl package.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Apr 2011 16:07:17 +0800
</p>
<p>drbl (1.9.20-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Program get_memtest86+.sh was removed, since drbl-prepare-memtest has replaced it.
  </li><li>Program list_available_tbz2 was slightly improved.
  </li><li>Function get_syslinux_binary_for_dos_linux was improved to automatically detect the latest version of syslinux.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Apr 2011 15:14:20 +0800
</p>
<p>drbl (1.9.19-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The "gPXE" part is replaced by "iPXE".
  </li><li>"insserv", if found, will be used in drbl-client-service, drbl-all-service, drblsrv, and drblpush for Debian environment.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 19 Apr 2011 09:00:00 +0800
</p>
<p>drbl (1.9.18-1drbl) unstable; urgency=low
</p>
<ul>
  <li>The program drbl-prepare-memtest was added to replace the pre-buildin binary memtest86+ program.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 17 Apr 2011 15:21:18 +0800
</p>
<p>drbl (1.9.17-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Let NFS mount points /usr and /var not to be checked in mountnfs.sh in DRBL clients.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 13 Apr 2011 13:49:35 +0800
</p>
<p>drbl (1.9.16-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Suppress the warning messages when using insserv to add services in drbl-all-service.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 Apr 2011 18:11:16 +0800
</p>
<p>drbl (1.9.15-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Suppress the warning messages when using insserv to add services in dcs.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 Apr 2011 09:39:27 +0800
</p>
<p>drbl (1.9.14-1drbl) unstable; urgency=low
</p>
<ul>
  <li>To suppress the already mounted message, "checkroot.sh" of a Debian DRBL client won't mount /tftpboot/node_root again.
  </li><li>Bug fixed: the mode remote-linux-txt of dcs was not working.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 12 Apr 2011 08:41:13 +0800
</p>
<p>drbl (1.9.13-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: "nolock" option is still for init.drbl.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Apr 2011 16:59:16 +0800
</p>
<p>drbl (1.9.12-1drbl) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: "nolock" option is for drbl live only.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Apr 2011 16:37:57 +0800
</p>
<p>drbl (1.9.11-1drbl) unstable; urgency=low
</p>
<ul>
  <li>"rsize=65536,wsize=65536" for NFS clients was removed from init.drbl. Let mount and kernel decide that.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Apr 2011 16:22:13 +0800
</p>
<p>drbl (1.9.10-1drbl) unstable; urgency=low
</p>
<ul>
  <li>"mount.nfs" from distribution system is used.  "/tftpboot/node_root" in /etc/fsta is kept in drbl clients.
  </li><li>"rsize=65536,wsize=65536" for NFS clients was removed. Let mount and kernel decide that.
  </li><li>"insserv" instead of update-rc.d will be used to add or remove service if insserv is found on Debian.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Apr 2011 14:55:01 +0800
</p>
<p>drbl (1.9.9-23) unstable; urgency=low
</p>
<ul>
  <li>"insserv" instead of update-rc.d will be used to add or remove service if insserv is found on Debian.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 11 Apr 2011 13:19:04 +0800
</p>
<p>drbl (1.9.9-22) unstable; urgency=low
</p>
<ul>
  <li>"drbl-all-service" was improved to use insserv and workaround rpcbind service restart too fast error.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 06 Apr 2011 18:31:54 +0800
</p>
<p>drbl (1.9.9-21) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: udpcast was not listed in PKG_FROM_DBN_MINIMAL_NEED of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 04 Apr 2011 23:11:53 +0800
</p>
<p>drbl (1.9.9-20) unstable; urgency=low
</p>
<ul>
  <li>syslinux64.exe will be put in function get_syslinux_binary_for_dos_linux of drbl-functions.
  </li><li>Network installation for OpenSuSE was changed to 11.4 in drbl.conf by default.
  </li><li>Let nfs-common deal with the required package (rpcbind or portmap), not to list portmap in PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf, otherwise nfs-common 1.2.3 won't start if portmap is installed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 04 Apr 2011 14:12:59 +0800
</p>
<p>drbl (1.9.9-19) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: autologin failed in gdm3. Thanks to TACO &lt;joey741019 <u>at</u> gmail com&gt; for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 28 Mar 2011 22:26:23 +0800
</p>
<p>drbl (1.9.9-18) unstable; urgency=low
</p>
<ul>
  <li>Typo fixed: "Mater Boot Record" -&gt; "Master Boot Record". Thanks to rookieace1 for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 25 Mar 2011 06:24:35 +0800
</p>
<p>drbl (1.9.9-17) unstable; urgency=low
</p>
<ul>
  <li>File firstboot.DBN6.0.1.drbl was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 23 Mar 2011 11:00:14 +0800
</p>
<p>drbl (1.9.9-16) unstable; urgency=low
</p>
<ul>
  <li>Packages hal and pcscd were added in the list of drbl.conf for Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 13 Mar 2011 15:55:42 +0800
</p>
<p>drbl (1.9.9-15) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 13 Mar 2011 11:29:56 +0800
</p>
<p>drbl (1.9.9-14) unstable; urgency=low
</p>
<ul>
  <li>Program disktype was added in the query packages list drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 12 Mar 2011 09:09:01 +0800
</p>
<p>drbl (1.9.9-13) unstable; urgency=low
</p>
<ul>
  <li>Program ufsutils was added in the packages list of Clonezilla live in drbl.conf.
  </li><li>Language files fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language files es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 11 Mar 2011 23:44:09 +0800
</p>
<p>drbl (1.9.9-12) unstable; urgency=low
</p>
<ul>
  <li>Language file fr_FR was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Mar 2011 22:44:05 +0800
</p>
<p>drbl (1.9.9-11) unstable; urgency=low
</p>
<ul>
  <li>Use Debian wheezy and Lucid natty in drbl.conf.
  </li><li>Add the missing packages hwinfo and lzop in drbl.conf for Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Mar 2011 21:07:25 +0800
</p>
<p>drbl (1.9.9-10) unstable; urgency=low
</p>
<ul>
  <li>The packages list for Debian in drbl.conf was sorted.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Mar 2011 15:16:15 +0800
</p>
<p>drbl (1.9.9-9) unstable; urgency=low
</p>
<ul>
  <li>Package lzop, ntfsprogs, and partimage should be in PKG_FROM_DBN_MINIMAL_NEED of drbl.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Mar 2011 14:56:35 +0800
</p>
<p>drbl (1.9.9-8) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Put packages pigz, pbzip2, and udpcast to the packages list for every distribution in drbl.conf. No more listing for DRBL.
  </li><li>Program drbl-bug-report was changed due to the packages list changed in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Mar 2011 14:11:42 +0800
</p>
<p>drbl (1.9.9-7) unstable; urgency=low
</p>
<ul>
  <li>Config file drbl.conf was improved so when running "drblsrv -u", not too many programs from distribution will be erased.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Mar 2011 14:30:10 +0800
</p>
<p>drbl (1.9.9-6) unstable; urgency=low
</p>
<ul>
  <li>Package drbl-lzop was replaced by lzop. If the GNU/Linux distribution provides ntfsprogs, drblsrv will use it from distribution. If not, the pacakge in DRBL repository is the back up plan.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Mar 2011 00:06:01 +0800
</p>
<p>drbl (1.9.9-5) unstable; urgency=low
</p>
<ul>
  <li>Packages drbl-ntfsprogs and drbl-partimage were replaced by ntfsprogs and partimage. If the GNU/Linux distribution provides ntfsprogs and partimage, drblsrv will use them from distribution. If not, those in DRBL repository are the back up plan.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 05 Mar 2011 16:33:23 +0800
</p>
<p>drbl (1.9.9-4) unstable; urgency=low
</p>
<ul>
  <li>Package gdisk was added in PKG_TO_QUERY of drbl.conf.
  </li><li>Option "-batch" instead of "-b" in ocs-sr and ocs-onthefly is used by default. This will avoid the problem when using in the boot prameters, init will honor it.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 01 Mar 2011 11:39:28 +0800
</p>
<p>drbl (1.9.9-3) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_TW was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 19 Feb 2011 15:50:11 +0800
</p>
<p>drbl (1.9.9-2) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 Feb 2011 13:33:12 +0800
</p>
<p>drbl (1.9.9-1) unstable; urgency=low
</p>
<ul>
  <li>An option to check if the image is restorable was added in the wizard.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 Feb 2011 12:22:58 +0800
</p>
<p>drbl (1.9.8-29) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: in dcs, the shutdown command for DRBL clients was reboot.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 16 Feb 2011 13:35:29 +0800
</p>
<p>drbl (1.9.8-28) unstable; urgency=low
</p>
<ul>
  <li>Function get_existing_partitions_from_img changed in ocs-functions, the dcs was modified accordingly.
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 16 Feb 2011 13:01:07 +0800
</p>
<p>drbl (1.9.8-27) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: syntax error in drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 13 Feb 2011 14:27:27 +0800
</p>
<p>drbl (1.9.8-26) unstable; urgency=low
</p>
<ul>
  <li>Service binfmt-support was added in client_services_chklist of drbl.conf.
  </li><li>A workaround to avoid weird nfs locking issue in Ubuntu 10.10 was added in drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 13 Feb 2011 14:10:04 +0800
</p>
<p>drbl (1.9.8-25) unstable; urgency=low
</p>
<ul>
  <li>Russian language files were updated. Thanks to Anton Pryadko.
  </li><li>Bug fixed: DRBL Squeeze client should not use startpar when booting. Otherwise some drbl/clonezilla services won't work.
  </li><li>An option -b|--drbl-client-ip was added in get-all-nic-ip.
  </li><li>The ocs_server got in DRBL-SL.sh is chosen from those connected to DRBL clients, no uplink one.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 10 Feb 2011 15:56:25 +0800
</p>
<p>drbl (1.9.8-24) unstable; urgency=low
</p>
<ul>
  <li>The virtual block device (/dev/vd[a-z]) support was added. Thanks to Cyril Roos for providing patch.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Feb 2011 20:41:57 +0800
</p>
<p>drbl (1.9.8-23) unstable; urgency=low
</p>
<ul>
  <li>Character in drbl-langchooser was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 31 Jan 2011 21:51:03 +0800
</p>
<p>drbl (1.9.8-22) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_TW.UTF-8 was updated.
  </li><li>Bug fixed: drbl-SL.sh should exclude the boot parameter "ip=frommedia" so that /etc/resolv.conf will be updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 31 Jan 2011 18:38:54 +0800
</p>
<p>drbl (1.9.8-21) unstable; urgency=low
</p>
<ul>
  <li>New upstream memtest86+ 4.20.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 29 Jan 2011 13:51:49 +0800
</p>
<p>drbl (1.9.8-20) unstable; urgency=low
</p>
<ul>
  <li>A variable instead of real IP address got from the machine was used in the Clonezilla live and GParted live pxelinux config examples when running generate-pxe-menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 16 Jan 2011 09:54:18 +0800
</p>
<p>drbl (1.9.8-19) unstable; urgency=low
</p>
<ul>
  <li>An option -s|--server-ip was added in drbl-SL.sh.
  </li><li>Code rewritten for get-drbl-conf-param.
  </li><li>An option --drbl-ocs-live-server was added for drblpush.
  </li><li>Bug fixed: --skip-drbl-ocs-live-prep wrongly parsed in drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 12 Jan 2011 14:18:22 +0800
</p>
<p>drbl (1.9.8-18) unstable; urgency=low
</p>
<ul>
  <li>File firstboot.DBN6.0.drbl was added.
  </li><li>Usage message of drblpush was updated. 
  </li><li>The option --skip-drbl-ocs-live-prep was added drblpush. This is specially used for DRBL live.
  </li><li>Program drbl-live.sh uses --skip-drbl-ocs-live-prep to use existing files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 09 Jan 2011 14:59:22 +0800
</p>
<p>drbl (1.9.8-17) unstable; urgency=low
</p>
<ul>
  <li>Language files fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 07 Jan 2011 10:37:56 +0800
</p>
<p>drbl (1.9.8-16) unstable; urgency=low
</p>
<ul>
  <li>Language file it_IT was updated. Thanks to Gianfranco Gentili.
  </li><li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  </li><li>Language files es_ES was updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 06 Jan 2011 08:13:28 +0800
</p>
<p>drbl (1.9.8-15) unstable; urgency=low
</p>
<ul>
  <li>A better method was implemented to query if a package is available in Debian package repository. Thanks to max2107 for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 28 Dec 2010 22:48:16 +0800
</p>
<p>drbl (1.9.8-14) unstable; urgency=low
</p>
<ul>
  <li>File timesync on DRBL client was removed. We should let user to that by themselves.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 23 Dec 2010 16:37:08 +0800
</p>
<p>drbl (1.9.8-13) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-client-root-passwd was not working on OpenSuSE 11.1.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 22 Dec 2010 22:48:33 +0800
</p>
<p>drbl (1.9.8-12) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 18 Dec 2010 17:04:43 +0800
</p>
<p>drbl (1.9.8-11) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 17 Dec 2010 22:30:14 +0800
</p>
<p>drbl (1.9.8-10) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: dcs failed to use account "user" to send reboot command to Clonezilla live client of Clonezilla SE.
  </li><li>Bug fixed: The *-info.txt created by drbl-SL.sh should not be appended. It should be overwritten every time drbl-SL.sh is run.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 16 Dec 2010 22:16:23 +0800
</p>
<p>drbl (1.9.8-9) unstable; urgency=low
</p>
<ul>
  <li>Program expect was added in the required list for DRBL server. We need that for ssh login the Clonezilla live clients of Clonezilla SE.
  </li><li>Program drbl-doit was improved to send command to Clonezilla live clients of Clonezilla SE.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 15 Dec 2010 22:47:57 +0800
</p>
<p>drbl (1.9.8-8) unstable; urgency=low
</p>
<ul>
  <li>An option to choose alternative Clonezilla live as client's running OS was added.
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 13 Dec 2010 14:27:49 +0800
</p>
<p>drbl (1.9.8-7) unstable; urgency=low
</p>
<ul>
  <li>A program drbl-kbdchooser was added to replace the deprecated command "dpkg-reconfigure console-data".
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 09 Dec 2010 22:12:36 +0800
</p>
<p>drbl (1.9.8-6) unstable; urgency=low
</p>
<ul>
  <li>Package gdisk was added in the Clonezilla live packages list in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 07 Dec 2010 14:11:16 +0800
</p>
<p>drbl (1.9.8-5) unstable; urgency=low
</p>
<ul>
  <li>The dir /dev/shm should be mounted as mode 777 in Fedora, otherwise google-chrom won't start. Thanks to Bryan Buchanan &lt;bryanb <u>at</u> webbtide com&gt; for the bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 29 Nov 2010 10:28:10 +0800
</p>
<p>drbl (1.9.8-4) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: /dev/stderr not found before entering rc in Fedora 14.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Nov 2010 21:36:01 +0800
</p>
<p>drbl (1.9.8-3) unstable; urgency=low
</p>
<ul>
  <li>A better way to deal with package name dhcp-client in PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf for Debian and Ubuntu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Nov 2010 13:24:41 +0800
</p>
<p>drbl (1.9.8-2) unstable; urgency=low
</p>
<ul>
  <li>The bug, /usr is busy when rebooting Fedora 14 client, was fixed.
  </li><li>The package name isc-dhcp-client is used instead of isc-dhcp-client in PKG_FROM_DBN_WHICH_OCS_LIVE_NEED of drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Nov 2010 09:05:26 +0800
</p>
<p>drbl (1.9.8-1) unstable; urgency=low
</p>
<ul>
  <li>Fedora 14 support was added (Not well tested).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 22 Nov 2010 16:45:04 +0800
</p>
<p>drbl (1.9.7-28) unstable; urgency=low
</p>
<ul>
  <li>Netinstall for Fedora was changed to be 14 in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 06 Nov 2010 21:35:09 +0800
</p>
<p>drbl (1.9.7-27) unstable; urgency=low
</p>
<ul>
  <li>Package btrfs-tools was added in drbl.conf for GParted live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Oct 2010 09:19:15 +0800
</p>
<p>drbl (1.9.7-26) unstable; urgency=low
</p>
<ul>
  <li>New upstream pxelinux 4.03.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 26 Oct 2010 08:56:23 +0800
</p>
<p>drbl (1.9.7-25) unstable; urgency=low
</p>
<ul>
  <li>Minor update (prdownloads.sf.net -&gt; downloads.sf.net) for the example in drbl-SL.sh.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 15 Oct 2010 21:48:25 +0800
</p>
<p>drbl (1.9.7-24) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: dhcp3 on Ubuntu 10.10 not started.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 13 Oct 2010 18:28:46 +0800
</p>
<p>drbl (1.9.7-23) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
  </li><li>Function parse_cmdline_option was updated to allow "=" and ",". Thanks to Jacobo Vilella Vilahur for this bug report (<a href="https://sourceforge.net/tracker/?func=detail&amp;atid=671650&amp;aid=3081655&amp;group_id=115473">https://sourceforge.net/tracker/?func=detail&amp;atid=671650&amp;aid=3081655&amp;group_id=115473</a>).
  </li><li>The netinstall of ubuntu was change to 10.04 and 10.10 in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 13 Oct 2010 13:30:45 +0800
</p>
<p>drbl (1.9.7-22) unstable; urgency=low
</p>
<ul>
  <li>Minor update for drbl-get-netmask.
  </li><li>Program drblpush was improved to work with dhcpd 4 and alias IP address.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 01 Oct 2010 15:05:11 +0800
</p>
<p>drbl (1.9.7-21) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: wrong line feed in get-all-nic-ip.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 30 Sep 2010 14:11:42 +0800
</p>
<p>drbl (1.9.7-20) unstable; urgency=low
</p>
<ul>
  <li>Ubuntu 10.10 support was added (not tested yet).
  </li><li>Minor improvement for drbl-get-ipadd.
  </li><li>Program get-all-nic-ip now can get ppp* device. Thanks to sonic484 for reporting this issue.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 30 Sep 2010 13:43:33 +0800
</p>
<p>drbl (1.9.7-19) unstable; urgency=low
</p>
<p>  [ Jazz Wang ]
</p><ul>
  <li>An option "-n" was added to tcpdump in drbl-collect-mac.
</li></ul>
<p>  [ Steven Shiau]
</p><ul>
  <li>Bug fixed: The new boot parameter "ocs_client_no_per_NIC" was not working for DRBL live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 27 Sep 2010 22:51:56 +0800
</p>
<p>drbl (1.9.7-18) unstable; urgency=low
</p>
<ul>
  <li>Option "-i" was added in makeboot.sh and makeboot.bat.
  </li><li>Environmental variable LC_ALL is honored by drblpush now.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 27 Sep 2010 13:15:47 +0800
</p>
<p>drbl (1.9.7-17) unstable; urgency=low
</p>
<ul>
  <li>The package name drbl3-server for Debian Squeeze was changed to isc-dhcp-server, so more files were changed correspondingly.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 23 Sep 2010 23:00:12 +0800
</p>
<p>drbl (1.9.7-16) unstable; urgency=low
</p>
<ul>
  <li>The package name drbl3-server for Debian Squeeze was changed to isc-dhcp-server, and dhcp3-client was changed to dhcp-client in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 23 Sep 2010 16:33:26 +0800
</p>
<p>drbl (1.9.7-15) unstable; urgency=low
</p>
<ul>
  <li>No more checking if partition starts or ends on cylinder boundary when running makeboot.sh.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 22 Sep 2010 19:29:40 +0800
</p>
<p>drbl (1.9.7-14) unstable; urgency=low
</p>
<ul>
  <li>Program makeboot.sh was improved to allow running with full path.
  </li><li>The yum repository should not be removed when uninstalling drbl. Thanks to Robert Arkiletian for this bug report.
  </li><li>"nomodeset" should not be added for DRBL client. Thanks to Robert Arkiletian for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 19 Sep 2010 21:11:55 +0800
</p>
<p>drbl (1.9.7-13) unstable; urgency=low
</p>
<ul>
  <li>Some minor updates in drbl-bug-report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 08 Sep 2010 11:11:18 +0800
</p>
<p>drbl (1.9.7-12) unstable; urgency=low
</p>
<ul>
  <li>Mirror update about the output message color of drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 03 Sep 2010 12:19:42 +0800
</p>
<p>drbl (1.9.7-11) unstable; urgency=low
</p>
<ul>
  <li>The netinstall of opensuse was change to 11.3 in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 02 Sep 2010 23:01:17 +0800
</p>
<p>drbl (1.9.7-10) unstable; urgency=low
</p>
<ul>
  <li>Russian language files were updated. Thanks to Anton Pryadko.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 01 Sep 2010 22:31:19 +0800
</p>
<p>drbl (1.9.7-9) unstable; urgency=low
</p>
<ul>
  <li>Package btrfs-tools was added in the required one for Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 30 Aug 2010 14:07:23 +0800
</p>
<p>drbl (1.9.7-8) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl4imp should be in /opt/drbl/sbin, not linked to /opt/drbl/setup/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 29 Aug 2010 21:53:02 +0800
</p>
<p>drbl (1.9.7-7) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: No drblsrv, drblpush and drbl4imp were found in /opt/drbl/sbin.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 29 Aug 2010 20:42:47 +0800
</p>
<p>drbl (1.9.7-6) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: No more linking drblsrv, drblpush and drbl4imp from /opt/drbl/setup.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 29 Aug 2010 20:28:38 +0800
</p>
<p>drbl (1.9.7-5) unstable; urgency=low
</p>
<ul>
  <li>The related codes about drbl-etherboot were removed in drblpush.
  </li><li>No more drblsrv, drblpush and drbl4imp in /opt/drbl/setup/.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 29 Aug 2010 20:21:03 +0800
</p>
<p>drbl (1.9.7-4) unstable; urgency=low
</p>
<ul>
  <li>Small English Grammatical Errors were fixed. Thanks to Mike Taylor (<a href="https://sourceforge.net/tracker/?func=detail&amp;atid=671650&amp;aid=3054348&amp;group_id=115473">https://sourceforge.net/tracker/?func=detail&amp;atid=671650&amp;aid=3054348&amp;group_id=115473</a>).
  </li><li>Wrong Message from drblpush about text/graphical PXE boot menu was fixed. Thanks to Mike Taylor (<a href="https://sourceforge.net/tracker/?func=detail&amp;atid=671650&amp;aid=3054362&amp;group_id=115473">https://sourceforge.net/tracker/?func=detail&amp;atid=671650&amp;aid=3054362&amp;group_id=115473</a>).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 27 Aug 2010 23:40:07 +0800
</p>
<p>drbl (1.9.7-3) unstable; urgency=low
</p>
<ul>
  <li>Package genisoimage was added in the required one for Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 27 Aug 2010 13:06:33 +0800
</p>
<p>drbl (1.9.7-2) unstable; urgency=low
</p>
<ul>
  <li>Typos in the Russian language file was fixed.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 27 Aug 2010 10:50:18 +0800
</p>
<p>drbl (1.9.7-1) unstable; urgency=low
</p>
<ul>
  <li>Prompt about live-build version in drbl-functions was updated.
  </li><li>Typos in the language files were fixed. Thanks to Anton Pryadko for the bugs report.
  </li><li>Now drbl script will honor environmental variable LC_ALL, then LANG.
  </li><li>Russian language files were added. Thanks to Anton Pryadko for providing the language files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 26 Aug 2010 23:01:23 +0800
</p>
<p>drbl (1.9.6-43) unstable; urgency=low
</p>
<ul>
  <li>Make user-setup as the required package for clonezilla/gparted live. In case it is not included by the live-build. This is specially for Ubuntu-based Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 19 Aug 2010 21:37:22 +0800
</p>
<p>drbl (1.9.6-42) unstable; urgency=low
</p>
<ul>
  <li>Remove a useless comment in the language file en_US.
  </li><li>Commands in prepare-files-for-PXE-client about drbl-etherboot will be tested before run.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 19 Aug 2010 11:32:18 +0800
</p>
<p>drbl (1.9.6-41) unstable; urgency=low
</p>
<ul>
  <li>Do not remove ethtool, tcpdump, dos2unix and lftp when uninstall drbl on OpenSuSE, since some of them are required packages (especially ethtool) for many programs.
  </li><li>Remove installing drbl-etherboot when running drblsrv -i. Since etherboot is not maintained anymore and now we have gPXE.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 18 Aug 2010 18:14:54 +0800
</p>
<p>drbl (1.9.6-40) unstable; urgency=low
</p>
<ul>
  <li>Make busybox as the required package for clonezilla/gparted live. In case it is not included by the live-build.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 08 Aug 2010 12:48:18 +0800
</p>
<p>drbl (1.9.6-39) unstable; urgency=low
</p>
<ul>
  <li>Make sudo as the required package for clonezilla/gparted live. In case it is not included by the live-build.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 08 Aug 2010 10:49:35 +0800
</p>
<p>drbl (1.9.6-38) unstable; urgency=low
</p>
<ul>
  <li>Program "makeboot.bat" was improved to avoid using the different command "find" from cygwin. Thanks to lryoung for providing this solution.
  </li><li>Function create_live_required_debian_based_prompt in drbl-functions was improved to work with live-build (the new package name for live-helper).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 08 Aug 2010 08:55:24 +0800
</p>
<p>drbl (1.9.6-37) unstable; urgency=low
</p>
<ul>
  <li>New upstream pxelinux 4.02.
  </li><li>Bug fixed: drbl-syslinux-netinstall option error, failed to use the existing downloaded files.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 26 Jul 2010 11:51:28 +0800
</p>
<p>drbl (1.9.6-36) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: get-client-ip-list should include drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 20 Jul 2010 09:05:11 +0800
</p>
<p>drbl (1.9.6-35) unstable; urgency=low
</p>
<ul>
  <li>Language files fr_FR was updated. Thanks to Jean Francois Martinez &lt;jfm512 <u>at</u> free fr&gt;
  </li><li>Language file es_ES of perl was updated. Thanks to Juan Ram&Atilde;&sup3;n Mart&Atilde;&shy;nez.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 15 Jul 2010 13:42:13 +0800
</p>
<p>drbl (1.9.6-34) unstable; urgency=low
</p>
<ul>
  <li>Put package drbl-ntfsprogs only for DRBL, not for Clonezilla live, since for Clonezilla live, it's better to use ntfsprogs, otherwise the 32-bit drbl-ntfsprogs won't work in pure amd64 Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 04 Jul 2010 01:49:25 +0800
</p>
<p>drbl (1.9.6-33) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  </li><li>Minor codes improvements were done in drbl-functions, switch-pxe-menu and hide_reveal_pxe_img.
  </li><li>Program drbl-client-switch now can accept options for mode2.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 27 Jun 2010 20:45:06 +0800
</p>
<p>drbl (1.9.6-32) unstable; urgency=low
</p>
<ul>
  <li>Put packages console-data console-setup console-common kbd as the required ones since live-helper changed to depend on keyboard-configuration which is not the one we need.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 26 Jun 2010 10:27:54 +0800
</p>
<p>drbl (1.9.6-31) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Akira YOSHIYAMA.
  </li><li>Language files es_ES and it_IT were updated. Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez and Gianfranco Gentili.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 26 Jun 2010 08:50:52 +0800
</p>
<p>drbl (1.9.6-30) unstable; urgency=low
</p>
<ul>
  <li>The Clonezilla backgroud photo in the boot menu was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 23 Jun 2010 16:33:00 +0800
</p>
<p>drbl (1.9.6-29) unstable; urgency=low
</p>
<ul>
  <li>By default "nomodeset" is used in the boot parameters.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 23 Jun 2010 15:01:00 +0800
</p>
<p>drbl (1.9.6-28) unstable; urgency=low
</p>
<ul>
  <li>Program mkswapfile was modified to be started in runlevel 2 for insserv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 22 Jun 2010 14:03:00 +0800
</p>
<p>drbl (1.9.6-27) unstable; urgency=low
</p>
<ul>
  <li>Make drbl-clients-nat work with insserv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 18 Jun 2010 15:20:00 +0800
</p>
<p>drbl (1.9.6-26) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: drbl-SL.sh failed to identify correct kernel in the Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Jun 2010 12:25:00 +0800
</p>
<p>drbl (1.9.6-25) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: /sbin/mount.nfs will be copied to client only if it exists (CentOS 4.x).
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Jun 2010 10:52:00 +0800
</p>
<p>drbl (1.9.6-24) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Files rc.sysinit and halt for DRBL client were not included.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Jun 2010 09:22:00 +0800
</p>
<p>drbl (1.9.6-23) unstable; urgency=low
</p>
<ul>
  <li>Files rc.sysinit and halt for DRBL client were added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Jun 2010 09:09:00 +0800
</p>
<p>drbl (1.9.6-22) unstable; urgency=low
</p>
<ul>
  <li>Boot parameter ramdisk_size should be adjusted according to the size of initrd-pxe.img.
  </li><li>Variables of add_param_in_pxelinux_cfg_drbl_related_block and del_param_in_pxelinux_cfg_drbl_related_block in drbl-functions were renamed to avoid confusion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 15 Jun 2010 08:17:00 +0800
</p>
<p>drbl (1.9.6-21) unstable; urgency=low
</p>
<ul>
  <li>Package binutils was added in the required list for all the supported distributions. We need program strings in network initrd.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 09 Jun 2010 16:39:00 +0800
</p>
<p>drbl (1.9.6-20) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 08 Jun 2010 16:20:00 +0800
</p>
<p>drbl (1.9.6-19) unstable; urgency=low
</p>
<ul>
  <li>Files for Fedora 13 client was added.
  </li><li>This release should support Fedora 13.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 07 Jun 2010 11:38:00 +0800
</p>
<p>drbl (1.9.6-18) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-ipcalc-list was added.
  </li><li>Netinstall for Fedora was changed to be 13 in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 06 Jun 2010 19:17:00 +0800
</p>
<p>drbl (1.9.6-17) unstable; urgency=low
</p>
<ul>
  <li>The patched file plymouth.conf was improved for Ubuntu 10.04 DRBL clients so it won't enter virtual console 7 when running clonezilla job.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 28 May 2010 16:05:00 +0800
</p>
<p>drbl (1.9.6-16) unstable; urgency=low
</p>
<ul>
  <li>A better method to avoid running makeboot.bat on the MS windows system drive was added. Thanks to timobeil for this idea.
  </li><li>A prompt to run syslinux with extra options (-sr) was added in makeboot.bat. Thanks to pama123 for inspiring this idea.
  </li><li>Programs rc.sysinit and halt for CentOS 5.5 were added.
  </li><li>A patched file plymouth.conf will be used in the Ubuntu 10.04 DRBL clients so it won't enter virtual console 7 when running clonezilla job.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 27 May 2010 15:51:00 +0800
</p>
<p>drbl (1.9.6-15) unstable; urgency=low
</p>
<ul>
  <li>Function canonical_hostname_prep was added in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 21 May 2010 21:05:00 +0800
</p>
<p>drbl (1.9.6-14) unstable; urgency=low
</p>
<ul>
  <li>RELEASE-NOTES was updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 11 May 2010 10:58:00 +0800
</p>
<p>drbl (1.9.6-13) unstable; urgency=low
</p>
<ul>
  <li>Package gzrt was added in the packages list for Clonezilla live in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 11 May 2010 10:51:00 +0800
</p>
<p>drbl (1.9.6-12) unstable; urgency=low
</p>
<ul>
  <li>Openvz kernel for DRBL clients will be excluded when running drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 10 May 2010 08:56:00 +0800
</p>
<p>drbl (1.9.6-11) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 09 May 2010 11:16:00 +0800
</p>
<p>drbl (1.9.6-10) unstable; urgency=low
</p>
<ul>
  <li>The usage function in drbl4imp was updated.
  </li><li>One more prompt in drbl4imp was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 08 May 2010 11:42:00 +0800
</p>
<p>drbl (1.9.6-9) unstable; urgency=low
</p>
<ul>
  <li>drbl4imp was improved with options "-r|--drbl-mode, -x|--limit-pxe-drbl-client, -u|--live_client_cpu_mode.
  </li><li>Do not touch ntp.conf in drblsrv.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 08 May 2010 10:38:00 +0800
</p>
<p>drbl (1.9.6-8) unstable; urgency=low
</p>
<ul>
  <li>New upstream memtest86+ 4.10.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 03 May 2010 09:28:00 +0800
</p>
<p>drbl (1.9.6-7) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-SL.sh was improved to allow using nfsroot as an option.
  </li><li>Now we can choose the CPU arch for clients in drblpush when using Clonezilla live to do clonezilla job.
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 02 May 2010 20:27:00 +0800
</p>
<p>drbl (1.9.6-6) unstable; urgency=low
</p>
<ul>
  <li>The netinstall for Ubuntu was updated to be "karmic" and "lucid" in drbl.conf.
  </li><li>No more modifying the /etc/ntp.conf on the server when running drblpush.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 29 Apr 2010 15:06:00 +0800
</p>
<p>drbl (1.9.6-5) unstable; urgency=low
</p>
<ul>
  <li>Duplicated comamnd check_if_root was removed in drbl-SL.sh.
  </li><li>Programs drblpush and tune-clientdir-opt now work for using clonezilla-live as the client's OS in Clonezilla SE mode.
  </li><li>A typo was fixed in drbl-netinstall.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 27 Apr 2010 14:59:00 +0800
</p>
<p>drbl (1.9.6-4) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: mounted-varrun on Ubuntu 10.04 should be started in drbl-client-boot.conf so /var/run/utmp will be started.
  </li><li>Program drbl-SL.sh was improved to work with drbl-ocs-live-prep.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 26 Apr 2010 10:11:00 +0800
</p>
<p>drbl (1.9.6-3) unstable; urgency=low
</p>
<ul>
  <li>For readonly dir, "async and no_subtree_check" are used in /etc/exports (drbl-nfs-exports).
  </li><li>On the diskless client side, "soft" was added for readonly mounting, and "hard,intr" was added for readwrite mounting.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 24 Apr 2010 11:24:00 +0800
</p>
<p>drbl (1.9.6-2) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Random password not working when running "drbl-useradd -s".
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 16 Apr 2010 16:07:00 +0800
</p>
<p>drbl (1.9.6-1) unstable; urgency=low
</p>
<ul>
  <li>Boot parameter ocs_server will be append in pxelinux config when using drbl-SL.sh. This release supports Clonezilla-live based client to do clonezilla job.
  </li><li>Minor update for hide_reveal_pxe_img.
  </li><li>Minor coding update in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 14 Apr 2010 15:47:00 +0800
</p>
<p>drbl (1.9.5-83) unstable; urgency=low
</p>
<ul>
  <li>Make deb-preconf-drbl work for tftpd-hpa version &gt;= 5.0.
  </li><li>Funtion active_proc_partitions in drbl-functions was improved to only active found disk in /proc/partitions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 13 Apr 2010 14:32:00 +0800
</p>
<p>drbl (1.9.5-82) unstable; urgency=low
</p>
<ul>
  <li>Ubuntu 10.04 (beta) support was added.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 07 Apr 2010 14:06:00 +0800
</p>
<p>drbl (1.9.5-81) unstable; urgency=low
</p>
<ul>
  <li>New upstream syslinux 3.86.
  </li><li>DRBL SSI template tarball will be extracted with -m option in the client.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 03 Apr 2010 15:56:00 +0800
</p>
<p>drbl (1.9.5-80) unstable; urgency=low
</p>
<ul>
  <li>Program drbl-syslinux-netinstall was improved to show more prompts.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 01 Apr 2010 22:20:00 +0800
</p>
<p>drbl (1.9.5-79) unstable; urgency=low
</p>
<ul>
  <li>Packages console-common and eject were added in Clonezilla live packages list.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Mar 2010 18:23:00 +0800
</p>
<p>drbl (1.9.5-78) unstable; urgency=low
</p>
<ul>
  <li>Language file ja_JP.UTF-8 was updated. Thanks to Annie Wei and Akira YOSHIYAMA.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 12 Mar 2010 10:52:00 +0800
</p>
<p>drbl (1.9.5-77) unstable; urgency=low
</p>
<ul>
  <li>Language files fr_FR was updated. Thanks to Jean-Francois Nifenecker.
  </li><li>clonezilla-jobs.log will be put in /var/log/clonezilla/ now.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 09 Mar 2010 15:53:00 +0800
</p>
<p>drbl (1.9.5-76) unstable; urgency=low
</p>
<ul>
  <li>Package "zfs-fuse" should not be listed in PKG_FROM_DBN_WHICH_OCS_LIVE_NEED. We will add that when creating clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 08 Mar 2010 15:35:00 +0800
</p>
<p>drbl (1.9.5-75) unstable; urgency=low
</p>
<ul>
  <li>PKG_FROM_DBN_WHICH_OCS_LIVE_NEED_CHKLISTS was rolled back to PKG_FROM_DBN_WHICH_OCS_LIVE_NEED.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 08 Mar 2010 10:43:00 +0800
</p>
<p>drbl (1.9.5-74) unstable; urgency=low
</p>
<ul>
  <li>Language file zh_CN was updated. Thanks to Zhiqiang Zhang.
  </li><li>drbl-client-boot.conf was improved to avoid mountall issue in Ubuntu 9.10 (<a href="https://bugs.launchpad.net/ubuntu/+source/mountall/+bug/470776">https://bugs.launchpad.net/ubuntu/+source/mountall/+bug/470776</a>)
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 07 Mar 2010 12:20:00 +0800
</p>
<p>drbl (1.9.5-73) unstable; urgency=low
</p>
<ul>
  <li>Language files es_ES and it_IT were updated.  Thanks to Alex Ib&Atilde;&iexcl;&Atilde;&plusmn;ez L&Atilde;&sup3;pez and Gianfranco Gentili.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sat, 06 Mar 2010 09:15:00 +0800
</p>
<p>drbl (1.9.5-72) unstable; urgency=low
</p>
<ul>
  <li>Packages foremost and zfs-fuse were added in the packages list of Clonezilla live.
  </li><li>Improve get-rpm-list-from-yum, get_extract_syslinux.sh, get_memtest86, makeboot.sh, drbl-ssi-client-prepare, drbl-functions, drblsrv, drbl-SL.sh, drblpush (purge), drbl-collect-mac, and drbl-syslinux-netinstall, to avoid potential "rm -rf" error.
  </li><li>Minor updates for drbl-fuu and drbl-fuh.
  </li><li>Bug fixed: For Ubuntu 9.10, xz-utils conflicts with lzma, and lzma is essential.
  </li><li>Variable PKG_FROM_DBN_WHICH_OCS_LIVE_NEED was changed to PKG_FROM_DBN_WHICH_OCS_LIVE_NEED_CHKLISTS in drbl.conf.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 05 Mar 2010 11:29:00 +0800
</p>
<p>drbl (1.9.5-71) unstable; urgency=low
</p>
<ul>
  <li>Code clean: "local OCS_OPTS" is useless in drbl-functions.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Mon, 01 Mar 2010 10:50:00 +0800
</p>
<p>drbl (1.9.5-70) unstable; urgency=low
</p>
<ul>
  <li>Package fbgrab was listed as the clonezilla live package in drbl.conf. Thanks to daix for this idea.
  </li><li>Boot parameter ocs_se_save_extra_opt has been renamed as dcs_save_extra_opt, andocs_se_restore_extra_opt has been renamed as dcs_restore_extra_opt.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 28 Feb 2010 11:12:00 +0800
</p>
<p>drbl (1.9.5-69) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: dcs failed to ask about input image and disk name when dcs_input_img_name is assigned.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Feb 2010 10:09:00 +0800
</p>
<p>drbl (1.9.5-68) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: a tyop in program dcs.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Feb 2010 09:33:00 +0800
</p>
<p>drbl (1.9.5-67) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: Program dcs did not honor dcs_input_img_name.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Fri, 26 Feb 2010 09:13:00 +0800
</p>
<p>drbl (1.9.5-66) unstable; urgency=low
</p>
<ul>
  <li>Prompt in drbl-client-switch was improved.
  </li><li>Programs ocs-srv-live.sh, drbl-live.sh, and dcs will load the settings of /etc/ocs/ocs-live.conf if it exists.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 25 Feb 2010 22:10:00 +0800
</p>
<p>drbl (1.9.5-65) unstable; urgency=low
</p>
<ul>
  <li>The boot parameter "dcs_choose_client", which can be one of these values: "All" or "Part", will be honored by dcs.
  </li><li>The boot parameter "dcs_input_img_name", which can be one of these values: "in_server" or "in_client", will be honored by dcs.
  </li><li>The boot parameter "dcs_cast_mode", which can be one of these values: "multicast", "broadcast", and "unicast", will be honored by dcs.
  </li><li>The env boot parameters $ocs_se_restore_save_opt and $ocs_se_restore_extra_opt, will be honored by dcs and put to the drbl-ocs command options.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 25 Feb 2010 16:34:00 +0800
</p>
<p>drbl (1.9.5-64) unstable; urgency=low
</p>
<ul>
  <li>Due to chain.c32 fails to boot local OS in syslinux 3.85, roll back to 3.84.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 24 Feb 2010 10:13:00 +0800
</p>
<p>drbl (1.9.5-63) unstable; urgency=low
</p>
<ul>
  <li>New upstream syslinux 3.85.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Sun, 21 Feb 2010 15:21:00 +0800
</p>
<p>drbl (1.9.5-62) unstable; urgency=low
</p>
<ul>
  <li>An issue about template_root.tgz was not created and used in DRBL SSI mode. Thanks to vakopian for this bug report.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 18 Feb 2010 16:46:00 +0800
</p>
<p>drbl (1.9.5-61) unstable; urgency=low
</p>
<ul>
  <li>Reorder the z5p and z6p in the menu.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 18 Feb 2010 15:20:00 +0800
</p>
<p>drbl (1.9.5-60) unstable; urgency=low
</p>
<ul>
  <li>Minor update about comment in drblsrv.
  </li><li>Programs pigz pbzip2 lbzip2 were added in the packages list for Clonezilla live.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 18 Feb 2010 14:16:00 +0800
</p>
<p>drbl (1.9.5-59) unstable; urgency=low
</p>
<ul>
  <li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Wed, 17 Feb 2010 13:50:00 +0800
</p>
<p>drbl (1.9.5-58) unstable; urgency=low
</p>
<ul>
  <li>BSD netinstall lists were updated in drbl.conf and drbl-netinstall. Now it works for both FreeBSD 7.x and 8.0.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Feb 2010 19:13:00 +0800
</p>
<p>drbl (1.9.5-57) unstable; urgency=low
</p>
<ul>
  <li>Bug fixed: when querying package name, name like "xz" will be parsed incorrectly.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Feb 2010 14:00:00 +0800
</p>
<p>drbl (1.9.5-56) unstable; urgency=low
</p>
<ul>
  <li>Menu to show -z4, -z5|-z5p (for xz and pxz), -z6|-z6p (for lzip and plzip) options were added and improved in drbl-functions.
  </li><li>Package xz|xz-utils, pxz, lzip and plzip were added in the list PKG_TO_QUERY in drbl.conf.
  </li><li>Language files were updated.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 16 Feb 2010 11:10:00 +0800
</p>
<p>drbl (1.9.5-55) unstable; urgency=low
</p>
<ul>
  <li>Package sysklogd was added in Clonezilla live packages list. Thanks to tl4ever for this suggestion.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Thu, 11 Feb 2010 14:30:00 +0800
</p>
<p>drbl (1.9.5-54) unstable; urgency=low
</p>
<ul>
  <li>Initial deb release.
</li></ul>
<p> -- Steven Shiau &lt;<a href="mailto:steven@nchc.org.tw">steven@nchc.org.tw</a>&gt;  Tue, 09 Feb 2010 16:53:00 +0800</p>

</body>
</html>
