# Installing Arch Linux on Asus Eee Book X205TA

### Description

Tools for installing Arch Linux on Asus X205TA netbook.  Short version of the [Arch Wiki Page for this machine](https://wiki.archlinux.org/index.php/Asus_x205ta).  To save everyone some time and effort, I'll roll a fresh iso with each monthly Arch Linux release.

----------

* arch_201508_x205ta.iso

> bootable installation medis with required drivers and bootloader for Asus X205TA.  *Download Link Coming Soon!*

* grub_x205ta.cfg

> This is the GRUB config file that is used to compile the bootia32.efi loader.  It is not needed unless you want to roll your own iso.

* bootia32.efi

> You can follow the [wiki instructino](https://wiki.archlinux.org/index.php/Asus_x205ta#Creating_bootia32.efi) or download the one I compiled.

* device-bcm.mk and fw_bcm43341.bin

> These are what you get when you unzip the [wireless driver download](https://android.googlesource.com/platform/hardware/broadcom/wlan/+archive/master/bcmdhd/firmware/bcm43341.tar.gz).  This is also included in the above iso, but [additional installation installation steps](https://wiki.archlinux.org/index.php/Asus_x205ta#Enable_wifi) are required.
