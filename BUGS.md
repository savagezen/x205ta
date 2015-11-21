# Arch Linux bugs on X205TA

### Description

Bugs with running Arch Linux on Asus X205TA and solutions as I find them.

-----

### Confirmed Fixes:

1) Touchpad
* The Wiki reports that as of kernel 4.3 the touchpad should work ```out of the box```.
* Make sure that you have ```xf86-input-synaptics``` installed.
* To enable more features of the touchpad:
* * ```# nano /etc/X11/xorg.conf.d/elan_synaptics.conf```
```
Section "InpuClass"
Identifier "Elan Touchpad"
MatchIsTouchpad "on"
Driver "synaptics"
EndSection
```

* If you still have issues, see this [Ubuntu Forum thread](http://ubuntuforums.org/showthread.php?t=2254322&page=11&p=13302773#post13302773) which worked as the initial fix for me.

2) SD Card Reader (they show up as /dev/mmcblkXYZ)
* ```# nano /etc/modprobe.d/sdhci.conf```
```
# Adjsutment to make micro SD card reader work
options sdhci debug_quirks=0x8000
```
* ```# update-initramfs -u -k all```


### Persistent Bugs:

1) Special Keys
* Ironically the only keysysms that work out of the box are F10-F12 (Sound).  They can be mapped to anything though (such as screen brightness with ```xorg-xbacklight```).  I have found F4 to work also when closing windows with ```dwm```.

2) Freezing
* May affect performance, but I havne't got around to testing [this suggestion on Ubuntu Forums](http://ubuntuforums.org/showthread.php?t=2254322&page=26&p=13381719#post13381719).

3) Bluetooth
* No leads yet

4) Sound
* [Bug report filed for Kernel](https://bugzilla.kernel.org/show_bug.cgi?id=95681).

5) Power Level Information (ACPI) - apparent conflict with wireless driver
* [Bug report filed with Arch](https://bugs.archlinux.org/task/44582).

-----

### References:
* [Arch Wiki article for Asus X205TA](https://wiki.archlinux.org/index.php/Asus_x205ta)
* [Ubuntu Forum fix for touchpad](http://ubuntuforums.org/showthread.php?t=2254322&page=11&p=13302773#post13302773)
* [Debian Wiki fix for SD Card Reader](https://wiki.debian.org/InstallingDebianOn/Asus/X205TA)