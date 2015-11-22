# Installation

### Description:

Installing Arch Linux on Asus X205TA netbook.  These recommendations are specific to running a pure Arch Linux system.  See the Arch Wiki if you are interested in [Dual Booting with Windows](https://wiki.archlinux.org/index.php/Dual_boot_with_Windows)

-----

> Preparation:
* See [my preparation guide and materials](https://github.com/gtbjj/x205ta).

> Partitioning
1) This machine's internal drive (32 GiB), will be recognized by the Linux kernel as /dev/mmcblk0 (or something similar).
*```Option 1```: is to have a single ```/``` partition.  However, I'd advise
*```Option 2```: at least a separate ```/boot``` and ```/```, or if you'd like
*```Option 3```: ```/boot``` and ```/``` on the internal storage and then adding an external MicroUSB as large as you'd like to mount as ```/home```. (See [Arch Wiki 'fstab' article](https://wiki.archlinux.org/index.php/Fstab))

2) See the [Arch Wiki Partitioning Article](https://wiki.archlinux.org/index.php/Partitioning) for more information.

> Filesystems
1) At a minimum you'll need at least one partition that is ```FAT32``` formatted to be congruent with the machine's 32 bit boot loader.

2) If you have multiple partitions, ```/boot``` needs to be ```FAT32``` and the others can be whatever you'd like.  I went with [F2Fs](https://wiki.archlinux.org/index.php/F2FS) for ```/```, but [BTRFS](https://wiki.archlinux.org/index.php/Btrfs) is a very solid choice as well, as is the tried and true [EXT4](https://wiki.archlinux.org/index.php/Ext4).

3) See [Arch Wiki article on filesystems](https://wiki.archlinux.org/index.php/File_systems#Types_of_file_systems).

4) If you're into splitting hairs, Phornonix has plenty of [Filesystem benchmark comparisons](http://www.phoronix.com/scan.php?page=article&item=linux-41-filesystem&num=1) to show you.

> Installation
1) For the  most part you can follow the [Begninner's Guide](https://wiki.archlinux.org/index.php/Beginners'_guide) and [Installation Guide](https://wiki.archlinux.org/index.php/Installation_guide).  There are some specialties though...

2) The wireless firmware will not load by deafult when you boot from the liveUSB, so:
* ```# cp /sys/firmware/efi/efivars/nvram-74b00bd9-805a-4d61-b51f-43268123d113 /lib/firmware/brcm/brcmfmac43340-sdio.txt```
* ```# rmmod brcmfmac```
* ```# modprobe brcmfmac```

3) I did not have any luck with either [GRUB](https://wiki.archlinux.org/index.php/GRUB) or [SYSLINUX](https://wiki.archlinux.org/index.php/GRUB) and resorted to [systemd-boot](https://wiki.archlinux.org/index.php/Systemd-boot) which has been working fine.

4) After exiting ```chroot```, but before rebooting copy the [wireless driver](https://github.com/gtbjj/x205ta/blob/master/fw_bcm43341.bin?raw=true) from the live system to the target system:
* ```# cp /lib/firmware/brcm/brcmfmac43340-sdio.bin /path/to/target-root/lib/firmware/brcmfmac43340-sdio.bin```

-----

### Other Sections:
* [Performance](https://github.com/gtbjj/x205ta/blob/master/PERFORMANCE.md)
* [Bugs](https://github.com/gtbjj/x205ta/blob/master/BUGS.md)

-----

### References
- [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html)
- [Arch Wiki article for Asus X205TA](https://wiki.archlinux.org/index.php/Asus_x205ta)
