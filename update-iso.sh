#!/usr/bin/sh
# Update and rebuild Arch Linux materials or Asus X205TA

# NOTE:  Format USB to vfat / fat32 and nate it ARCH_<YEAR><MONTH>

GIT_DIR=$HOME/git/x205ta
GRUB_CONF=$GIT_DIR/grub_x205ta.cfg
BOOTIA=$GIT_DIR/bootia32.efi
ARCH_VER=ARCH_$(date +%Y%m)
ISO_SOURCE=archlinux-$(date %Y.%m).01-dual.iso
ISO_VER=$(date +%Y.%m).01
ISO_DIR=/mnt/customiso

# Update grub.cfg
sed -i "s/ARCH_.*/$ARCH_VER/" $GRUB_CONF

# Remake bootia32.efi
grub-mkstandalone -d /usr/lib/grub/i386-efi/ -O i386-efi --modules="part_gpt part_msdos" --fonts="unicode" --locales="uk" --themes="" -o "$BOOTIA" "boot/grub/grub.cfg=$GRUB_CONF" -v

# Prepare Stock ISO
curl -o /tmp/$ISO_SOURCE https://mirrors.kernel.org/archlinux/iso/$ISO_VER/$ISO_SOURCE
mkdir /mnt/archiso
moun -t iso9660 -o loop /tmp/$ISO_SOURCE /mnt/archiso
cp -a /mnt/archiso $ISO_DIR

# Add Bootloader
cp $BOOTIA $ISO_DIR/EFI/boot/

# Add Wireless Driver
unsquashfs $ISO_DIR/arch/x86_64/airootfs.sfs
unsquashfs $ISO_DIR/arch/i686/airootfs.sfs

cp $GIT_DIR/fw_bcm43341.bin $ISO_DIR/arch/x86_64/lib/firmware/brcm/brcmfmac43340-sdio.bin
cp $GIT_DIR/fw_bcm43341.bin $ISO_DIR/arch/i686/lib/firmware/brcm/brcmfmac43340-sdio.bin

cp $GIT_DIR/brcmfmac-sdio-x86.txt $ISO_DIR/arch/x86_64/lib/firmware/brcm/brcmfmac43340-sdio.txt
cp $GIT_DIR/brcmfmac-sdio-i686.txt $ISO_DIR/arch/i686/lib/firmware/brcm/brcmfmac43340-sdio.txt

mksquashfs $ISO_DIR/arch/x86_64/squashfs-root airootfs.sfs
mksquashfs $ISO_DIR/arch/i686/squashfs-root airootfs.sfs

rm -r $ISO_DIR/arch/x86_64/squashfs-root
rm -r $ISO_DIR/arch/i686/squashfs-root

md5sum $ISO_DIR/arch/x86_64/airootfs.sfs > $ISO_DIR/arch/x86_64/airootfs.md5
md5sum $ISO_DIR/arch/i686/airootfs.sfs > $ISO_DIR/arch/i686/airootfs.md5

# Generate ISO Image
genisoimage -l -r -J -V "ARCH_201606" -b isolinux/isolinux.bin -no-emul-boot -boot-load-size 4 -boot-info-table -c isolinux/boot.cat -o $HOME/download/arch-x205ta-$ISO_VER.iso $ISO_DIR

# Cleanup
umount /mnt/archiso
rm -r /mnt/{archiso,customiso}

