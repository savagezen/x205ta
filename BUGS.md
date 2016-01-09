# Arch Linux bugs on X205TA

---

### Description

Bugs with running Arch Linux on Asus X205TA and solutions as I find them.

-----

### Confirmed Fixes:

> Touchpad
* The touchpad should work on kernels 4.3* [[1]](https://wiki.archlinux.org/index.php/Asus_x205ta#Touchpad) (confirmed on kernel 4.3.3-2-ARCH)
* Make sure that you have ```xf86-input-synaptics``` installed.  To enable more features of the touchpad:`
```
# nano /etc/X11/xorg.conf.d/elan_synaptics.conf
-----
Section "InpuClass"
Identifier "Elan Touchpad"
MatchIsTouchpad "on"
Driver "synaptics"
EndSection
```

> SD Card Reader
```
# nano /etc/modprobe.d/sdhci.conf
-----
# Adjsutment to make micro SD card reader work

options sdhci debug_quirks=0x8000
-----
# update-initramfs -u -k all
```

> Battery Information
* This should work out of the boxy on kernel 4.2*.  Confirmed on Kernel 4.3.3-2-ARCH.
* If you use ```conky```, conky defaults to using BAT0.  Replace / add that specifier in your ```.conkyrc``` with what you find in the output of ```$ dmesg | grep battery```.  Look for something like ```BATC```.

> Freezing
* [Ifran](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html) suspected and graphical intensity issue and suggested underclocking the GPU, *BUT*...
* Arc Wiki suggests altering the kernel's cstate. (Confirmed working on Kernel 4.3.3-2-ARCH)
* If you followed me and used [systemd-boot](https://wiki.archlinux.org/index.php/Systemd-boot) then:
```
# nano /boot/loader/entries/arch.conf
-----
...
.....
options root=/dev/mmcblk0p2 rw intel_idle.max_cstate=1
```

> Wireless Driver
* Confirmed working out of the box on Kernel 4.3.3-2-ARCH
* NOTE:  Sometimes there is a warning from ```wifi-menu``` saying device not found.

> Function Keys (F1 - F12)
* Appear to be working out of the boxy on Kernel 4.3.3-2-ARCH

___

### Persistent Bugs:

> Sound
* [Bug report filed for Kernel](https://bugzilla.kernel.org/show_bug.cgi?id=95681).

> Touchpad freezes after suspend / resume.
* Reloading the touchpad's kernel module is the suggested change, I don't know what that is at the moment though.

> Bluetooth
* No leads yet

-----

### References:
* [Arch Wiki article for Asus X205TA](https://wiki.archlinux.org/index.php/Asus_x205ta)
* [Ubuntu Forum fix for touchpad](http://ubuntuforums.org/showthread.php?t=2254322&page=11&p=13302773#post13302773)
* [Debian Wiki fix for SD Card Reader](https://wiki.debian.org/InstallingDebianOn/Asus/X205TA)
* [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html)
