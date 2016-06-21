#!/usr/bin/sh
# create bootable Arch USB for Asus X205TA - the lazy way

# Preparation:  The USB must be partitioned and inserted.

ISO_VER=$(date +%Y.%m).01
ISO_SOURCE=archlinux-$ISO_VER-dual.iso
ARCH_VER=ARCH_$(date +%Y%m)
USB_DIR=/mnt

# fetch and update grub.cfg
echo "Fetching grub.cfg..."
curl -o grub.cfg https://raw.githubusercontent.com/gtbjj/x205ta/master/grub.cfg
sed -i "s/ARCH_.*/$ARCH_VER/" grub.cfg

# remake bootia32.efi
echo "Creating bootia32.efi"
grub-mkstandalone -d /usr/lib/grub/i386-efi/ -O i386-efi --modules="part_gpt part_msdos" --fonts="unicode" --locales="uk" --themes="" -o "bootia32.efi" "boot/grub/grub.cfg=grub.cfg" -v
rm grub.cfg

# fetch stock iso
echo "Fetching stock ISO..."
curl -o $ISO_SOURCE https://mirrors.kernel.org/archlinux/iso/$ISO_VER/$ISO_SOURCE
mkdir archiso
mount -t iso9660 -o loop $ISO_SOURCE archiso
cp -a archiso customiso
umount archiso
rm -r archiso && rm $ISO_SOURCE

# add wifi driver i686
echo "Adding i686 wireless drivers..."
cd customiso/arch/i686
unsquashfs airootfs.sfs
curl -o squashfs-root/lib/firmware/brcm/brcmfmac43340-sdio.bin https://raw.githubusercontent.com/gtbjj/x205ta/master/frimware/fw_bcm43341.bin
curl -o squashfs-root/lib/firmware/brcm/brcmfmac43340-sdio.txt https://raw.githubusercontent.com/gtbjj/x205ta/master/firmware/brcmfmac43340-sdio-i686.txt
rm airootfs.sfs
mksquashfs squashfs-root airootfs.sfs
md5sum airootfs.sfs > airootfs.md5
rm -r squashfs-root

# add wifi dirver x86_64
echo "Adding x86_64 wireless drivers..."
cd ../x86_64
unsquashfs airootfs.sfs
curl -o squashfs-root/lib/firmware/brcm/brcmfmac43340-sdio.bin https://raw.githubusercontent.com/gtbjj/x205ta/master/frimware/fw_bcm43341.bin
curl -o squashfs-root/lib/firmware/brcm/brcmfmac43340-sdio.txt https://raw.githubusercontent.com/gtbjj/x205ta/master/firmware/brcmfmac43340-sdio-x86_64.txt
rm airootfs.sfs
mksquashfs squashfs-root airootfs.sfs
md5sum airootfs.sfs > airootfs.md5
rm -r squashfs-root

# generate new iso
echo "Generating new ISO..."
cd ../../../
genisoimage -l -r -J -V "$ARCH_VER" -b isolinux/isolinux.bin -no-emul-boot -boot-load-size 4 -boot-info-table -c isolinux/boot.cat -o arch-x205ta-$ISO_VER.iso customiso
rm -r customiso

# prepare usb
echo "Preparing to format USB..."
lsblk
echo -n "What deveice do you want to format and write to (/dev/sdXY): "
read TRG_DEV
mkfs.vfat -F 32 -n $ARCH_VER $TRG_DEV
mount $TRG_DEV $USB_DIR

# add bootia32.efi to iso and write to disk
echo "Writing ISO to USB and adding bootia32.efi..."
bsdtar -x --exclude=isolinux/ --exclude=EFI/archiso/ --exclude=arch/boot/syslinux/ -f arch-x205ta-$ISO_VER.iso -C $USB_DIR
mv bootia32.efi $USB_DIR/EFI/boot/
umount $USB_DIR
rm arch-x205ta-$ISO_VER.iso
