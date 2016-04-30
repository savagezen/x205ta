# Arch Linux on Asus X205TA

-----

### Description

Installation, maintenance, and performance tools for running Arch Linux on an Asus X205TA netbook.  This page draws heavily form the [Arch Wiki Page for this machine](https://wiki.archlinux.org/index.php/Asus_x205ta).  See also the [manufacturer's device page](https://www.asus.com/us/Notebooks/ASUS_EeeBook_X205TA/).

The content herein may not be persistently updated.  Please 
see [posts relating to the X205TA](https://gtbjj.github.io/tags/#x205ta) at 
[archnfoss.com](https://gtbjj.github.io)

### Contents:

1) Preparation (below)

2) [Installation](https://github.com/gtbjj/x205ta/blob/master/INSTALL.md)

3) [Bugs](https://github.com/gtbjj/x205ta/blob/master/BUGS.md)

4) [Performance](https://github.com/gtbjj/x205ta/blob/master/PERFORMANCE.md)

-----

### Preparation

1) The [Arch Linux installation media](https://www.archlinux.org/download/) does not come packed for the X205TA's 32-bit boot loader.  You'll need to [compile a bootia.32 file yourself](https://www.archlinux.org/download/) or download [the one I've compiled](https://github.com/gtbjj/x205ta/blob/master/bootia32.efi?raw=true)

2) You'll need a thumb drive > 2GB to use as the installation medium.

3) Another linux machine to edit the installation media.  You can also set up an [Arch Linux virtual guest inside Windows](https://wiki.archlinux.org/index.php/VirtualBox#Installation_steps_for_Arch_Linux_guests) to accomplish the same things.

4) [Disable Windows Secure
Boot](http://itsfoss.com/disable-uefi-secure-boot-in-windows-8/)

### Creating Installation Media:
> Initial Set Up and Boot Loader:

1) Dowload the latest [Arch Linux installation ISO](https://www.archlinux.org/download/) (ISO-SOURCE)

2) Create a directory to mount the ISO and mount ISO:
* ```# mkdir /mnt/archiso```
* ```# mount -t iso9660 -o loop /path/to/ISO-SOURCE /mnt/archiso```

3) Copy the contents to an editable directory:
* ```$ cp -a /mnt/archiso ~/customiso```

4) Copy the [bootia32.efi](https://github.com/gtbjj/x205ta/blob/master/bootia32.efi?raw=true) file you downloaded to the custom ISO:
* ```$ cp /path/to/bootia32.efi ~/customiso/EFI/boot/```

> Adding Wireless Drivers:

* Wireless drives appear patched into upstream at least as of kernel 4.3.3-2-ARCH
* If you're just that hardcore, see the appropriate Arch Wiki section on [Adding Wireless Drivers](https://wiki.archlinux.org/index.php/Asus_x205ta#Adding_wireless_drivers_to_the_install_image).

### Booting Installation Media:

1) Insert your USB drive and wirte the arch-x205ta.iso to it using [Rufus](https://rufus.akeo.ie/).
* Select USB device
* Set "partition scheme" to GPT partition
* Select "quick format"
* Open your arch-x205ta.iso file and start it up
* Once it's done, reboot and use F2 to enter the machine's BIOS and boot from the USB device

-----

### Files:

* 
[grub_x205ta.cfg](https://raw.githubusercontent.com/gtbjj/x205ta/master/grub_x205ta.cfg)
> This is the GRUB config file that is used to compile the bootia32.efi loader.  It is not needed unless you want to roll your own iso.

* bootia32.efi
> You can follow the [wiki instructions](https://wiki.archlinux.org/index.php/Asus_x205ta#Creating_bootia32.efi) 
or download the one I compiled.

* [device-bcm.mk](https://raw.githubusercontent.com/gtbjj/x205ta/master/device-bcm.mk) and [fw_bcm43341.bin](https://github.com/gtbjj/x205ta/blob/master/fw_bcm43341.bin?raw=true)
> These are what you get when you unzip the [wireless driver download](https://android.googlesource.com/platform/hardware/broadcom/wlan/+archive/master/bcmdhd/firmware/bcm43341.tar.gz).  This is also included in the above iso, but [additional installation installation steps](https://wiki.archlinux.org/index.php/Asus_x205ta#Enable_wifi) are required.

-----

### References:

- [Asus X205TA Arch Wiki](https://wiki.archlinux.org/index.php/Asus_x205ta)
- [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html) – for compiling your own bootia32.efi
- [Arch Git Repo](https://projects.archlinux.org/archiso.git/tree/docs/README.transfer#n105) – for creating boot media
- [Remastering the Arch ISO](https://wiki.archlinux.org/index.php/Remastering_the_Install_ISO)
