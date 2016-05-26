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

Regardless of the method you choose, the [Arch Linux installation media](https://www.archlinux.org/download/) does not come packed for the X205TA's 32-bit boot loader.  You'll need to [compile a bootia32.efi file yourself](https://www.archlinux.org/download/) or download [the one I've compiled](https://github.com/gtbjj/x205ta/blob/master/bootia32.efi?raw=true).

You will also need to [disable Windows Secure
Boot](http://itsfoss.com/disable-uefi-secure-boot-in-windows-8/) and find a USB thumb drive to use as the installation media.  After you've created the installation media, *F2* is the trigger to bring up the BIOS on this machine during boot time.

### Preparation (Option 1):

1) Download the [Arch Linux ISO](https://www.archlinux.org/download/)
2) Use [Rufus](https://rufus.akeo.ie/) to write the ISO to a USB drive
3) Disconnect and Reconnect the USB drive and open with file manager
4) Download and Copy / Paste ```bootia32.efi``` file to ```/path/to/usb/EFI/boot/```,
5) Open Rufus > select USB device
6) Set "partition scheme" to "GPT Partition"
7) Select "quick format"
8) Open the ISO file, and start it up.
9) Remove USB and proceed to [Installation / GRUB Wizardry](https://github.com/gtbjj/x205ta/blob/master/INSTALL.md)

*NOTE: If Windows gives you static about the USB being *read only*, proceed below*

### Preparation (Option 2):
You may need another Linux machine to edit the installation media.  You can set up an [Arch Linux virtual guest inside Windows](https://wiki.archlinux.org/index.php/VirtualBox#Installation_steps_for_Arch_Linux_guests) to accomplish the same thing.

1) Dowload the latest [Arch Linux installation ISO](https://www.archlinux.org/download/) (ISO-SOURCE)

2) Create a directory to mount the ISO and mount ISO:
* ```# mkdir /mnt/archiso```
* ```# mount -t iso9660 -o loop /path/to/ISO-SOURCE /mnt/archiso```

3) Copy the contents to an editable directory:
* ```# cp -a /mnt/archiso /mnt/customiso```

4) Copy the [bootia32.efi](https://github.com/gtbjj/x205ta/blob/master/bootia32.efi?raw=true) file you downloaded to the custom ISO:
* ```# cp /path/to/bootia32.efi /mnt/customiso/EFI/boot/```

> Adding Wireless Drivers:

* Wireless drives appear patched into upstream at least as of kernel 4.3.3-2-ARCH
* If you must, see the Arch Wiki section on [Adding Wireless Drivers](https://wiki.archlinux.org/index.php/Asus_x205ta#Adding_wireless_drivers_to_the_install_image).

5) Creating and Writing the ISO:
> Generate the ISO:
* ```# genisoimage -l -r -J -V "ARCH_YYYMM" -b isolinux/isolinux.bin -no-emul-boot -boot-load-size 4 -boot-info-table -c isolinux/boot.cat -o ~/arch-x205ta.iso /mnt/customiso```

> Writing the ISO:
* You can [use dd to write the ISO to the USB drive](https://wiki.archlinux.org/index.php/USB_flash_installation_media#In_GNU.2FLinux), but I've had varying degrees of success with this on this machine.
* Alternatively you can use the Windows program [Rufus](https://rufus.akeo.ie/) (see Option 1 steps 5 - 9 regarding Rufus).

-----

### Files:

* [grub_x205ta.cfg](https://raw.githubusercontent.com/gtbjj/x205ta/master/grub_x205ta.cfg)
> This is the GRUB config file that is used to compile the bootia32.efi loader.  It is not needed unless you want to roll your own iso.

* [bootia32.efi](https://github.com/gtbjj/x205ta/blob/master/bootia32.efi?raw=true)
> You can follow the [wiki instructions](https://wiki.archlinux.org/index.php/Asus_x205ta#Creating_bootia32.efi) or download the one I compiled.

* [device-bcm.mk](https://raw.githubusercontent.com/gtbjj/x205ta/master/device-bcm.mk) and [fw_bcm43341.bin](https://github.com/gtbjj/x205ta/blob/master/fw_bcm43341.bin?raw=true)
> These are what you get when you unzip the [wireless driver download](https://android.googlesource.com/platform/hardware/broadcom/wlan/+archive/master/bcmdhd/firmware/bcm43341.tar.gz).  This is also included in the above iso, but [additional installation installation steps](https://wiki.archlinux.org/index.php/Asus_x205ta#Enable_wifi) are required.

-----

### References:

- [Asus X205TA Arch Wiki](https://wiki.archlinux.org/index.php/Asus_x205ta)
- [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html) – for compiling your own bootia32.efi
- [Arch Git Repo](https://projects.archlinux.org/archiso.git/tree/docs/README.transfer#n105) – for creating boot media
- [Remastering the Arch ISO](https://wiki.archlinux.org/index.php/Remastering_the_Install_ISO)
