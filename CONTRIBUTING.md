# Contributing

Looking for ways to contribute to the development and support of running Linux (specifically Arch Linux) on an Asus X205TA netbook?  See the options below.

-----

### What was broken and is working now?

Many of the initial bugs have been worked out. [My BUGS page](https://github.com/gtbjj/x205ta/blob/master/BUGS.md) features fixes for almost everything.  You can also find some specific [tinkerings and fixes related to the X205TA](https://gtbjj.github.io/tags/#x205ta) on my blog.

### What still needs work?

The only major thing that is broken is sound.  See [this post on Ubuntu Forums for a summary](http://ubuntuforums.org/showthread.php?t=2254322&p=13497422#post13497422).

If you're a kernel hacker yourself, you can:

* Post on the Ubuntu thread.

* Leave post / comment on [my blog's suggestion page](https://gtbjj.github.io/suggestions/)

* Post to [this machine's thread on the Arch Linux forums](https://bbs.archlinux.org/viewtopic.php?id=211400).


Other ways to help:

* Test [my custom ISO for this machine](https://drive.google.com/file/d/0B2RH_BSaD6YPR0dxTU82SnFjMm8/view?usp=sharing) and report errors.  Keep in mind your USB needs to be *partitioned*, formatted to *vfat*, and labeled *ARCH_201606* (or whatever matches the ISO).

* Don't hesitate to [fork this repo and make a pull request](https://yangsu.github.io/pull-request-tutorial/).  The files that are compiled with ```genisoimage`` for the bootable ISO are found in [this repo's 'iso' folder](https://github.com/gtbjj/x205ta/tree/master/iso).

* As are many, I'm currently working on a custom kernel for this machine which will hopefully use [this sound driver](https://github.com/KemyLand/rt5648) and the [other firmware mentioned herein](https://github.com/gtbjj/x205ta/tree/master/firmware).