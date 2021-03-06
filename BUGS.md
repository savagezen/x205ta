# Arch Linux bugs on X205TA

Bugs with running Arch Linux on Asus X205TA and solutions as I find them.  More content is available on my [blog posts tagged for this machine](https://gtbjj.github.io/tags/#x205ta).

-----

### Confirmed Fixes:

##### Touchpad:
* The touchpad should work on kernels 4.3* [[1]](https://wiki.archlinux.org/index.php/Asus_x205ta#Touchpad) (confirmed on kernel 4.3.3-2-ARCH)
* Make sure that you have ```xf86-input-synaptics``` installed.  To enable more features of the touchpad:`
* ```# nano /etc/X11/xorg.conf.d/elan_synaptics.conf```
```
Section "InpuClass"
Identifier "Elan Touchpad"
MatchIsTouchpad "on"
Driver "synaptics"
EndSection
```

##### SD Card Reader:
* ``` # nano /etc/modprobe.d/sdhci.conf```
```
# Adjsutment to make micro SD card reader work
options sdhci debug_quirks=0x8000
```
* ```# update-initramfs -u -k all```

##### Battery Information:
* This should work out of the boxy on kernel 4.2*.  Confirmed on Kernel 4.3.3-2-ARCH.
* If you use ```conky```, conky defaults to using BAT0.  Replace / add that specifier in your ```.conkyrc``` with what you find in the output of ```$ dmesg | grep battery```.  Look for something like ```BATC```.

##### Freezing:
* [Ifran](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html) suspected and graphical intensity issue and suggested underclocking the GPU, *BUT*...
* Arc Wiki suggests altering the kernel's cstate. (Confirmed working on Kernel 4.3.3-2-ARCH)
* If you followed me and used [systemd-boot](https://wiki.archlinux.org/index.php/Systemd-boot) then:
* ``` # nano /boot/loader/entries/arch.conf```

```
...
.....
options root=/dev/mmcblk0p2 rw intel_idle.max_cstate=1
```

##### Wireless Driver:
* Confirmed working out of the box on Kernel 4.3.3-2-ARCH
* NOTE:  Sometimes there is a warning from ```wifi-menu``` saying device not found.

##### Function Keys (F1 - F12):
> As of kernel 4.3.3-2-ARCH:
* The following key combinations work out of the box:  ```fn``` + ```(pgup, pgdn, home, next f{8,10,11,12})```.
* ```fn``` does not appear to get mapped correctly as a standard ```MOD``` key ([dwm documentation](http://dwm.suckless.org/customisation/windows_key)).  Alternatively, the use of ```alt``` in conjunction with function keys allows for use as intended.

##### Touchpad and WiFi Resume After Suspend:

1) For WiFi, ```netctl.service``` needs to be restarted.

2) For the touchpad, the kernel module ```elan_i2c``` needs removed and reloaded, so

3) Create a custom systemd service

> * (```suspend-resume.service```) that, on resume from suspend,
> * executes a script (```/usr/bin/suspend-resume.sh```) containing the necessary commands.
> * Then make the script executable and load the systemd service.

```
$ sudo nano /etc/systemd/system/suspend-resume.service
-----
[Unit]
Description=Local system resume actions
After=suspend.target

[Service]
ExecStart=/usr/bin/suspend-resume.sh

[Install]
WantedBy=suspend.target
```

```
$ sudo nano /usr/bin/suspend-resume.sh```
-----
#!/usr/bin/sh
# resume wifi and touchpad after suspend

# restart wireless service
systemctl restart netctl

# remove and reload touchpad kernel module
rmmod elan_i2c
modprobe elan_i2c
-----
$ sudo chmod u+x /usr/bin/suspend-resume.sh
$ sudo systemctl enable suspend-resume
$ sudo systemctl start suspend-resume
```

##### Bluetooth:

See my [blog post detailing fix and
resources](https://gtbjj.github.io/linux/0024-X205TA-Bluetooth/).
The firmware for this is not patched into my bootable ISO.

##### Freezing after Resume from Lid Suspend:

See [this issue and and workaround suggestion](https://github.com/gtbjj/x205ta/issues/8)

-----

### Persistent Bugs:

##### Sound:

* [Bug report filed for Kernel](https://bugzilla.kernel.org/show_bug.cgi?id=95681).
* I have an [open issue for discusion on development](https://github.com/gtbjj/x205ta/issues/9)

-----

### References:

* [Arch Wiki article for Asus X205TA](https://wiki.archlinux.org/index.php/Asus_x205ta)
* Ubuntu Forum
    * [fix for touchpad](http://ubuntuforums.org/showthread.php?t=2254322&page=11&p=13302773#post13302773)
    * [fix for WiFi resume](http://ubuntuforums.org/showthread.php?t=2254322&p=13402195#post13402195)
    * [fix for touchpad resume]()
    * [fix for bluetooth](http://ubuntuforums.org/showthread.php?t=2254322&p=13490336#post13490336)
* [Debian Wiki fix for SD Card Reader](https://wiki.debian.org/InstallingDebianOn/Asus/X205TA)
* [Ifran's Blog](http://ifranali.blogspot.com/2015/04/installing-arch-linux-on-asus-x205ta.html)
