# Arch Linux on Asus X205TA

Installation guide and tools for running Arch Linux on an Asus X205TA netbook.

-----

### Contents:

1) Preparation (below)

2) [Installation](https://github.com/gtbjj/x205ta/blob/master/INSTALL.md)

3) [Bugs](https://github.com/gtbjj/x205ta/blob/master/BUGS.md)

4) Want to help?  See the [Contributing section](https://giithub.com/gtbjj/x205ta/blob/master/CONTRIBUTING.md).

For general and machine specific performance, mods, and tips, my blog features [posts tagged X205TA](https://gtbjj.github.io/tags/#x205ta) as well as [performance](https://gtbjj.github.io/tags/#performance).

-----

Regardless of the method you choose, you will need to [disable Windows Secure Boot](http://itsfoss.com/disable-uefi-secure-boot-in-windows-8/) and find a USB thumb drive to use as the installation medium.  After you've created the installation media, *F2* is the trigger to bring up the BIOS on this machine during boot time.

### Preparing Bootable USB (Windows):

1) I have customized the Arch Linux ISO for this machine.  You can [download the latest version ](https://mega.nz/#F!12IERSoa!T1kZ1A7JwZ_EvvItkn-SDQ) from my shared MEGA folder.  The ISO contains:

* The stock Arch Linux ISO image
* A bootia32.efi file so the ISO will boot on the machine's 32-bit boot loader (this is not possible with the stock Arch ISO).
* Wireless drivers appear patched into the upstream.  If something breaks, see *lazy script* below.

2) Download [Rufus](https://rufus.akeo.ie/) and use it to write the ISO to your USB with the following settings:

* Partition schene for GPT / UEFI
* FAT32 filesystem
* ARCH_201606 volume label (or corresponding to ISO version)
* Find your downloaded ISO file, and hit start.

### Preparing Bootable USB (Linux / VM):

Download the above ISO and write it to your USB via Unetbootin..  For some reason this machine hates drives written with *dd* and won't notice them.  Be sure the selected *partition* is formatted to FAT32 and labeled according to the ISO version (e.g. ```# mkfs.vfat -F 32 -n ARCH_201606 /dev/sdXY```).

To update the ISO / compile on your own, choose one of the following:

1) Download and (as root) run my [lazy script](https://raw.githubusercontent.com/gtbjj/x205ta/master/x205ta-lazy.sh).  This will take a very long time, but pull and compile the necessary sources (*stock iso, grub.cfg, bootia32.efi, wireless drivers for i686 and x86_64*) for making an updated custom ISO.  All you need to do beforehand is partition the USB.  The script will ask you which device to format and do everything from there. Just
boot your USB as normal when done, no special instructions needed to load the wireless modem after booting.

2) Download and (as root) run my [easy script](https://raw.githubusercontent.com/gtbjj/x205ta/master/x205ta-easy.sh).  This is a quick-and-dirty version of the *lazy script* since wireless drivers should work out of the box.  The script pulls the stock ISO then compiles and adds a bootia32.efi file before writing the image to your USB.  Again, you just need to have the device partitioned beforehand.  The script takes care of formatting, mounting, etc... Pay attention to the instructions at the end of the script.  [My ISO releases](https://mega.nz/#F!12IERSoa!T1kZ1A7JwZ_EvvItkn-SDQ) are made with this script.

-----

### References:

- [Asus X205TA Arch Wiki](https://wiki.archlinux.org/index.php/Asus_x205ta)
- [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html) – for compiling your own bootia32.efi
- [Arch Git Repo](https://projects.archlinux.org/archiso.git/tree/docs/README.transfer#n105) – for creating boot media
- [Remastering the Arch ISO](https://wiki.archlinux.org/index.php/Remastering_the_Install_ISO)
- [Manufacturer's device page](https://www.asus.com/us/Notebooks/ASUS_EeeBook_X205TA/).
