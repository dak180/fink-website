<?php
$title = "Porting - Basics";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:16';
$metatags = '<link rel="contents" href="index.php?phpLang=en" title="Porting Contents"><link rel="next" href="shared.php?phpLang=en" title="Shared Code"><link rel="prev" href="index.php?phpLang=en" title="Porting Contents">';


include_once "header.en.inc";
?>
<h1>Porting - 1. Basics</h1>
		
		

		<h2><a name="heritage">1.1 Where Darwin came from</a></h2>

			<p>Darwin is a Unix-like operating system that evolved from NeXTStep / OpenStep. Lore has it that it was initially forked off 4.4BSD Lite. The BSD heritage still shows, in fact Darwin was recently modernized with code from FreeBSD and NetBSD.</p>

			<p>Darwin's kernel is based on a combination of Mach 3.0, BSD, and proprietary functionality like the object-oriented driver layer IOKit. Although Mach originally is a micro-kernel design, the BSD kernel that sits on top of it is monolithic and the two are now so intertwined that they must be regarded as a single monolithic kernel.</p>

			<p>The user-space tools and libraries shipped with Darwin are mostly of the BSD persuation, as opposed to the GNU tools you get with Linux. Apple is not as strict as other BSDs though, and goes for useful compromises. For example, Apple ships both BSD make and GNU make, with GNU make installed as the default.</p>
		
		

		<h2><a name="compiler">1.2 The Compiler and Tools</a></h2>
			
			
			<p>Short story: The compiler is a gcc derivate, but installed as <code>cc</code>; you may have to patch Makefiles. Most packages won't build shared libraries. If you get errors related to macros, use the <code>-no-cpp-precomp</code> option.</p>

			<p>Long story: The compiler tool chain in the Mac OS X Developer Tools is a strange beast. The compiler is based on the gcc 2.95.2 suite, with modifications to support the Objective C language and some Darwin quirks. The preprocessor (<code>cpp</code>) is available in two versions. One is the standard precompiler (from gcc 2.95.2), the other one is a special precompiler written by Apple, with support for precompiled headers. The latter one is used by default, because it is faster. However, some code doesn't compile with Apple's precompiler, so you must use the <code>-no-cpp-precomp</code> option to get the standard precompiler. (Note: I previously recommended the <code>-traditional-cpp</code> option. The semantics of this option have changed slightly with GCC 3, breaking most packages that use it. <code>-no-cpp-precomp</code> has the desired effect on both the current Developer Tools and future compilers based on GCC 3.)</p>

			<p>The assembler says it's based on gas 1.38. The linker is not based on GNU tools. This is a problem when building shared libraries, as GNU libtool and configure scripts generated by it don't know how to handle Apple's linker.</p>
		
		

		<h2><a name="host-type">1.3 Host type</a></h2>
			
			
			<p>Short story: If configure fails with 'Can't determine host type', copy config.guess and config.sub from /usr/share/libtool (/usr/libexec for OS versions prior to 10.2) into the current directory.</p>

			<p>Long story: The GNU world uses a canonical format to specify system types. It has three parts: cpu type, manufacturer and operating system. Sometimes a fourth part is added - then the third part denotes the kernel, while the fourth denotes the operating system. All parts are lower case and concatenated using dashes. Some examples: <code>i586-pc-linux-gnu</code>, <code>hppa1.1-hp-hpux10.20</code>, <code>sparc-sun-solaris2.6</code>. The host type for Mac OS X 10.0 is <code>powerpc-apple-darwin1.3</code>. Versions of Mac OS X 10.2 bring various <code>powerpc-apple-darwin6.x.0</code> and 10.3 gives <code>powerpc-apple-darwin7.x.0</code>, where "x" depends on the exact OS version.</p>

			<p>Many packages that use autoconf want to know the host type of the system they are compiled on. (Side note: to support cross-compiling and porting, there are actually three types - the host type, the build type and the target type. Usually, they're all the same.) You can either pass the host type to the configure script as a parameter or you can let it guess.</p>

			<p>The configure script uses two companion scripts to determine host types. <code>config.guess</code> tries to guess the host type, <code>config.sub</code> is used to validate and canonicalize the host type. These scripts are maintained as separate entities, but they are included in every package that uses them. Until very recently, these scripts didn't know about Darwin or Mac OS X. If you have a package that doesn't recognize Darwin, you must replace the config.guess and config.sub included in the package. Luckily, Apple put working versions in /usr/share/libtool (/usr/libexec for pre-10.2 OS), so you can just copy them from there.</p>

			<p>If you are constructing a Fink package, you can use the <code>UpdateConfigGuess</code> and/or <code>UpdateConfigGuessInDirs</code> fields in your <code>.info</code> package description file to do this update automatically.</p>

		

		<h2><a name="libraries">1.4 Libraries</a></h2>
			

			<p>Short story: You can safely remove <code>-lm</code> from Makefiles, but you don't need to.</p>

			<p>Long story: Mac OS X doesn't have separate libc, libm, libcurses, libpthread etc. libraries. Instead, they're all part of the system library, libSystem. (In earlier versions, this actually was the System framework.) However, Apple placed appropriate symlinks in /usr/lib, so linking with <code>-lm</code> will work. The only exception is <code>-lutil</code>. On other systems, libutil contains functions related to pseudo-terminals and login accounting. These functions are in libSystem, but there is no symlink to provide a libutil.dylib.</p>

		

		<h2><a name="other-sources">1.5 Other sources of information</a></h2>
			

			<p>Another source of information for porting is the Wiki at <a href="http://www.metapkg.org/wiki">MetaPkg Wiki</a>.</p>

			<p>You can also read Apple Technical Note <a href="http://developer.apple.com/technotes/tn2002/tn2071.html">TN2071</a>: "Porting Command Line Unix Tools to Mac OS X".</p>

		

	<p align="right"><?php echo FINK_NEXT ; ?>:
<a href="shared.php?phpLang=en">2. Shared Code</a></p>
<?php include_once "../../footer.inc"; ?>


