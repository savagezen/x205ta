#!/usr/bin/sh
# create bootable Arch USB for Asus X205TA - the easy way

ISO_VER=$(date +%Y.%m).01
ISO_SOURCE=archlinux-$ISO_VER-dual.iso
ARCH_VER=ARCH_$(date +%Y%m)
USB_DIR=/mnt

# fetch grub.cfg
echo "Fetching grub.cfg..."
curl -o grub.cfg https://raw.githubusercontent.com/gtbjj/x205ta/master/grub.cfg
sed -i "s/ARCH_.*/$ARCH_VER/" grub.cfg

# remake bootia32.efi
echo "Creating bootia32.efi..."
grub-mkstandalone -d /usr/lib/grub/i386-efi/ -O i386-efi --modules="part_gpt part_msdos" --fonts="unicode" --locales="uk" --themes="" -o "bootia32.ef ""boot/grub/grub.cfg=brub.cfg"
rm grub.cfg

# fetch stock iso
#curl -o $ISO_SOURCE https://mirrors.kernel.org/archlinux/iso/$ISO_VER/$ISO_SOURCE

# prepare usb
echo "Preparing to format USB..."
lsblk
echo -n "What device do you want to format and write to (/dev/sdaXY): "
read TRG_DEV
mkfs.vfat -F 32 -n $ARCH_VER $TRG_DEV
mount $TRG_DEV $USB_DIR

# add bootia32.efi to iso and write to disk
echo "Writing ISO to USB and adding bootia32.efi..."
bsdtar -x --exclude=isolinux/ --exclude=EFI/archiso/ --exclude=arch/boot/syslinux/ -f $ISO_SOURCE -C $USB_DIR
mv bootia32.efi $USB_DIR/EFI/boot/
umount $USB_DIR

# reference
echo "-------------------"
echo "NOTICE:"
echo "Wireless dirvers should work out of the box."
echo "If they do not, refer to the Arch Wiki article"
echo "for this machine."
echo ""
echo "After booting the USB you will need to:"
echo "\$ cp /sys/firmware/efi/efivars/nvram<TAB> /lib/firmware/brcm/brcmfmac43340-sdio.txt"
echo "\$ rmmod brcmfmac"
echo "\$ modprobe brcmfmac"
