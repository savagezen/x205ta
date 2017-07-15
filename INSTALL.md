# Installation

Installing Arch Linux on Asus X205TA netbook.  These recommendations are specific to running a pure Arch Linux system.  See the Arch Wiki if you are interested in [Dual Booting with Windows](https://wiki.archlinux.org/index.php/Dual_boot_with_Windows)

-----

### Booting:

With my [custom Arch Linux ISO for this machine](https://mega.nz/#F!12IERSoa!T1kZ1A7JwZ_EvvItkn-SDQ) there shouldn't be a need any trickery with GRUB (as seen Ubuntu thread linked below).  That appeared to happen when a (sometimes misconfigured) bootia32.efi was copied and pasted rather than rolled with the other files when the ISO was gnereated.  Wireless functionality has also been patched, so there is no need to [manually enable WiFi](https://wiki.archlinux.org/index.php/Asus_x205ta#Install_Arch).


#### Partitioning:

1) This machine's internal drive (32 GiB), will be recognized by the Linux kernel as */dev/mmcblk0* (or something similar).

* ```Option 1```: is to have a single ```/``` partition.

* ```Option 2```: a separate ```/boot``` and ```/```, or if you'd like...

* ```Option 3```: ```/boot``` and ```/``` on the internal storage and then adding an external MicroUSB as large as you'd like to mount as ```/home```. (See [Arch Wiki 'fstab' article](https://wiki.archlinux.org/index.php/Fstab))

2) See the [Arch Wiki Partitioning Article](https://wiki.archlinux.org/index.php/Partitioning) for more information.

#### Filesystems

* At a minimum you'll need at least one partition that is ```FAT32``` formatted to be congruent with the machine's 32 bit boot loader.

* If you have multiple partitions, ```/boot``` needs to be ```FAT32``` and the others can be whatever you'd like.  I went with [F2FS](https://wiki.archlinux.org/index.php/F2FS) for ```/```, but [BTRFS](https://wiki.archlinux.org/index.php/Btrfs) is a very solid choice as well, as is the tried and true [EXT4](https://wiki.archlinux.org/index.php/Ext4).

* See [Arch Wiki article on filesystems](https://wiki.archlinux.org/index.php/File_systems#Types_of_file_systems).

* If you're into splitting hairs, Phornonix has plenty of [Filesystem benchmark comparisons](http://www.phoronix.com/scan.php?page=article&item=linux-41-filesystem&num=1) to show you.

#### Installation

1) For the  most part you can follow the [Begninner's Guide](https://wiki.archlinux.org/index.php/Beginners'_guide) and [Installation Guide](https://wiki.archlinux.org/index.php/Installation_guide).

2) Wireless Drivers have worked fine on my installation (since Kernel 4.3.3-2), but [errors have been reported](https://github.com/gtbjj/x205ta/issues/6) with ISOs using Kernel 4.5.4-1.  I have manually patched this on [my custom ISO](https://mega.nz/#F!12IERSoa!T1kZ1A7JwZ_EvvItkn-SDQ).

3) I did not have any luck with either [GRUB](https://wiki.archlinux.org/index.php/GRUB) or [SYSLINUX](https://wiki.archlinux.org/index.php/GRUB) and resorted to [systemd-boot](https://wiki.archlinux.org/index.php/Systemd-boot) which has been working fine.

-----

### Other Sections:

* [Bugs](https://github.com/gtbjj/x205ta/blob/master/BUGS.md)

* [Preparation](https://github.com/gtbjj/x205ta/blob/master/README.md)

-----

### References
- [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html)
- [Arch Wiki article for Asus X205TA](https://wiki.archlinux.org/index.php/Asus_x205ta)
- [Ubuntu Forum's Distro Agnostic Guide for X205TA](http://ubuntuforums.org/showthread.php?t=2254322&page=34&p=13414345#post13414345)
