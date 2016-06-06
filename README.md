# Arch Linux on Asus X205TA

-----

### Description

Installation guide and tools for running Arch Linux on an Asus X205TA netbook (refernces below). See also the [manufacturer's device page](https://www.asus.com/us/Notebooks/ASUS_EeeBook_X205TA/).

### Contents:

1) Preparation (below)

2) [Installation](https://github.com/gtbjj/x205ta/blob/master/INSTALL.md)

3) [Bugs](https://github.com/gtbjj/x205ta/blob/master/BUGS.md)

For general and machine specific performance, mods, and tips, my blog features [posts tagged X205TA](https://gtbjj.github.io/tags/#x205ta) as well as [performance](https://gtbjj.github.io/tags/#performance).

-----

Regardless of the method you choose, the [Arch Linux installation media](https://www.archlinux.org/download/) does not come packed for the X205TA's 32-bit boot loader.  However, I've made [a patched ISO](https://drive.google.com/file/d/0B2RH_BSaD6YPR0dxTU82SnFjMm8/view?usp=sharing) that should take care of both the booting and wireless driver problems.

You will also need to [disable Windows Secure Boot](http://itsfoss.com/disable-uefi-secure-boot-in-windows-8/) and find a USB thumb drive to use as the installation media.  After you've created the installation media, *F2* is the trigger to bring up the BIOS on this machine during boot time.

### Preparation (the easy way):
 
Due to increased interest in this repo I've respun the stock Arch ISO to include the bootia32.efi file as well as wireless drivers for both i686 and x86_64 systems.  The ISO a little over 800 MiB in size.

1)  Partition (single) and format your thumb drive to FAT32 or VFAT.

> * **Important**:  If using Linux (or a Virtual Machine), specify ```# mkfs.vfat -F 32 -n ARCH_201606 /dev/sda1```.  For Windows, there is a "*New Volume Label*" option where you can put *ARCH_201606* this.  In future releases this will change along with the ISO (e.g. ARCH_<YEAR><MONTH>).

2) From Windows:  Download my [arch-201606-x205ta.iso](https://drive.google.com/file/d/0B2RH_BSaD6YPWlJGV2xlSy1tcVU/view?usp=sharing) and write it to the thumb drive with [Rufus](https://rufus.akeo.ie/).  Use the "GPT Partition" and "quick format" options.

3) From Linux / VM: ```dd``` will not work to write the ISO because *dd* writes to */dev/sdX*, not */dev/sdXY* and this machine's BIOS doesn't appear to recognize that.  So, [download my iso](https://drive.google.com/file/d/0B2RH_BSaD6YPWlJGV2xlSy1tcVU/view?usp=sharing), then install ```unetbootin``` and deply with *sudo* to write the ISO to the thumb drive.

### Notes:

- As of Kernel 4.3.3-2 WiFi seemed to work out of the box, but has broken again around Kernel 4.5.4-1 and corresponding ISOs.  My live system has not had any issues, but I checked a fresh (201606) ISO after [an issue was filed](https://github.com/gtbjj/x205ta/issues/6) and had to [manually add the wireless driver](https://wiki.archlinux.org/index.php/Asus_x205ta#Adding_wireless_drivers_to_the_install_image) to the ISO.  The ISO has also been patched so that you do not need to [manually enable WiFi](https://wiki.archlinux.org/index.php/Asus_x205ta#Install_Arch) after booting the ISO.

-----

### References:

- [Asus X205TA Arch Wiki](https://wiki.archlinux.org/index.php/Asus_x205ta)
- [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html) – for compiling your own bootia32.efi
- [Arch Git Repo](https://projects.archlinux.org/archiso.git/tree/docs/README.transfer#n105) – for creating boot media
- [Remastering the Arch ISO](https://wiki.archlinux.org/index.php/Remastering_the_Install_ISO)
