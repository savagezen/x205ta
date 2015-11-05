# Arch Linux on Asus X205TA

### Description

Tools for installing Arch Linux on Asus X205TA netbook / EeeBook.  For more information see the [Arch Wiki Page for this 
machine](https://wiki.archlinux.org/index.php/Asus_x205ta).  I will try to roll a fresh ISO with each Arch Linux official monthly release.

----------

### Preparation

> 

### Installation

### Post-Installation

### Additional Files

* roll_x205ta.sh

> Script used to configure and compile monthly releases

* grub_x205ta.cfg

> This is the GRUB config file that is used to compile the bootia32.efi loader.  It is not needed unless you want to roll your own iso.

* bootia32.efi

> You can follow the [wiki instructino](https://wiki.archlinux.org/index.php/Asus_x205ta#Creating_bootia32.efi) or download the one I compiled.

* device-bcm.mk and fw_bcm43341.bin

> These are what you get when you unzip the [wireless driver download](https://android.googlesource.com/platform/hardware/broadcom/wlan/+archive/master/bcmdhd/firmware/bcm43341.tar.gz).  This is also included in the above iso, but [additional installation installation steps](https://wiki.archlinux.org/index.php/Asus_x205ta#Enable_wifi) are required.
