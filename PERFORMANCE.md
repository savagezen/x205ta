# Arch Linux and Asus X205TA Performance

### Description

Performance tips for running Arch Linux on Asus X205TA netbook (instructions and details coming soon, references below)

-----

### Machine Specific Performance:
* Minimizing Kernel / Initramfs Size for Boot Performance 
([blog post link](https://gtbjj.github.io/linux/performance/2016/03/07/2318.html))

### General Performance:
1) Mount User Cache to Tmpfs

> Benefit:  Improve (browser) speed and reduce wirtes to
physical
disk.  Size limited to not eat entire memory and cause
crash.

```
# nano /etc/fstab
....
......
........
tmpfs /home/username/.cache  tmpfs
noatime,nodev,nosuid,size=500M  0 0
```

2) I/O Scheduler

> The Arch Wiki suggests the (NOOP)[https://en.wikipedia.org/wiki/Noop_scheduler] or (Deadline)[https://en.wikipedia.org/wiki/Deadline_scheduler] schedulers.  With other SSD machines I've gotten similar performance from both, but Deadline feels a bit more robust.

* ```# echo deadline > /sys/block/mmcblk0/queue/shceduler```
Note:  Not persistent across reboots.

3) Mount App Profiles as tmpfs (VOLATILE!)

> Benefit:  Improved app speed and perofrmance with hard
disk backup.

* This will use an app timer
((cron)[https://wiki.archlinux.org/index.php/Cron]), a
system
service call (```systemd``` service that starts on boot),
and a sync utility (```rsync```) to back up profiles every hour in
case of a system crash.  For a more automated process you can use (Profiile-Sync-Daemon)[https://wiki.archlinux.org/index.php/Profile-sync-daemon]

First, get the tools set up:
```
# pacman -S cronie
# systemctl enable cronie
# systemctl start cronie
```

Then, edit your fstab:
```
# nano /etc/fstab
---------
...
.....
.......
tmpfs  /home/username/.config/chromium     tmpfs  size=300M  0 0
tmpfs  /home/username/.config/libreoffice  tmpfs  size=5M    0 0
```

Next, configure cron (It may be better to use a shorter time frame given this machine has a freeze/crash bug:
```
# nano /etc/crontab.root
----------
0 0 * * * ~/scripts/profile-backup.sh
```

Write the script you directed cron to:
```
$ nano ~/scripts/profile-backup.sh
---------
#!/usr/bin

rsync -aAXv /home/username/.config/chromium/
/home/username/.config/chromium-backup

rsync -aAXv /home/username/.config/libreoffice/
/home/username/.config/libreoffice-backup
```

Update cron's config:
```
# crontab /etc/crontab.root
```

Edit user profile to retrieve backup on login:
```
$ nano ~/.xinitrc
---------
...
.....
......
rsync -aAXv ~/.config/chormium-backup/ ~/.config/chromium
rsync -aAXv ~/.cofnig/libreoffice-backup/ ~/.config/libreoffice
```
Reboot for changes to take effect:
```# reboot```

4) Libre Office
* Tools > Options > Memory

* Number of Undo Steps: 20

* Graphics Cache:  128 MB

* Memory per Object: 20 MB

* Check:  "Enable systray Quickstarter"

-----

### References:

* [Maximizing Performance - Arch
Wiki](https://wiki.archlinux.org/index.php/Maximizing_performance)
  
* [Boot Performance - Arch
Wiki](https://wiki.archlinux.org/index.php/Improve_boot_performance)

* [Solid State Drives - Arch
Wiki](https://wiki.archlinux.org/index.php/Solid_State_Drives)

* [Chromium Performance - Arch
Wiki](https://wiki.archlinux.org/index.php/Chromium/Tips_and_tricks)

* [Libreoffice Performance - Arch
Wiki](https://wiki.archlinux.org/index.php/LibreOffice#Speed_up_LibreOffice)
