<?
$title = "F.A.Q.";
$cvs_author = 'Author: alexkhansen';
$cvs_date = 'Date: 2005/11/17 01:23:13';
$metatags = '<link rel="contents" href="index.php?phpLang=en" title="F.A.Q. Contents"><link rel="next" href="general.php?phpLang=en" title="General Questions">';


include_once "header.en.inc";
?>
<h1>The Fink F.A.Q.</h1>
    <p>This is the list of frequently asked questions about Fink. Like in most FAQs, some questions are taken from real life and some are made up. It's really more like a documentation written in an ad-hoc, question and answer style.</p>
    <p>The FAQ consists of several pages, one for each section. All questions are listed and linked in the table of contents below.</p>
  <h2><? echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="general.php?phpLang=en"><b>1 General Questions</b></a><ul><li><a href="general.php?phpLang=en#what">1.1 What is Fink?</a></li><li><a href="general.php?phpLang=en#naming">1.2 What does the name Fink stand for?</a></li><li><a href="general.php?phpLang=en#bsd-ports">1.3 	How is Fink different from the BSD port mechanism (this includes OpenPackages and GNU-Darwin)?
		</a></li><li><a href="general.php?phpLang=en#usr-local">1.4 Why doesn't Fink install into /usr/local?</a></li><li><a href="general.php?phpLang=en#why-sw">1.5 Then why did you choose /sw?</a></li></ul></li><li><a href="relations.php?phpLang=en"><b>2 Relations with Other Projects</b></a><ul><li><a href="relations.php?phpLang=en#upstream">2.1 Do you contribute your patches back to the upstream maintainers?</a></li><li><a href="relations.php?phpLang=en#debian">2.2 What is your relation with the Debian project? Are you porting Debian Linux to Mac OS X?</a></li><li><a href="relations.php?phpLang=en#apple">2.3 What is your relation with Apple?</a></li><li><a href="relations.php?phpLang=en#openosx">2.4 What is your relation with OpenOSX.com?</a></li><li><a href="relations.php?phpLang=en#forked">2.5 What is your relation with macosx.forked.net?</a></li><li><a href="relations.php?phpLang=en#darwinports">2.6 What is your relation with Darwinports?</a></li></ul></li><li><a href="mirrors.php?phpLang=en"><b>3 Fink mirrors</b></a><ul><li><a href="mirrors.php?phpLang=en#when-use">3.1 What are Fink Mirrors?</a></li><li><a href="mirrors.php?phpLang=en#why">3.2 Why should I use rsync mirrors?</a></li><li><a href="mirrors.php?phpLang=en#where">3.3 Where can I find more information about Fink mirrors?</a></li><li><a href="mirrors.php?phpLang=en#when-not">3.4 I cannot connect to rsync server, what should I do?</a></li><li><a href="mirrors.php?phpLang=en#otherinfogone">3.5 I have switched to the rsync method now all info files from the unused trees are gone</a></li><li><a href="mirrors.php?phpLang=en#howswitch">3.6 How can I switch back and forth between methods.</a></li><li><a href="mirrors.php?phpLang=en#status">3.7 Can I see what the current status of rsync mirrors is?</a></li><li><a href="mirrors.php?phpLang=en#Master">3.8 What is a Distfiles mirror?</a></li></ul></li><li><a href="upgrade-fink.php?phpLang=en"><b>4 Upgrading Fink (version-specific troubleshooting)</b></a><ul><li><a href="upgrade-fink.php?phpLang=en#gcc-0.16.0">4.1 I just upgraded to 0.16.0 and it tells me "Your version of the gcc 3.3 compiler is out of date." What do I do?</a></li><li><a href="upgrade-fink.php?phpLang=en#fink-0220">4.2 I haven't had any package updates from Fink in a while.</a></li></ul></li><li><a href="usage-fink.php?phpLang=en"><b>5 Installing, Using and Maintaining Fink</b></a><ul><li><a href="usage-fink.php?phpLang=en#what-packages">5.1 How can I find out what packages Fink supports?</a></li><li><a href="usage-fink.php?phpLang=en#proxy">5.2 I'm behind a firewall. How do I configure Fink to use an HTTP proxy?</a></li><li><a href="usage-fink.php?phpLang=en#firewalled-cvs">5.3 How do I update available packages from CVS when I am behind a firewall?</a></li><li><a href="usage-fink.php?phpLang=en#moving">5.4 Can I move Fink to another location after installation?</a></li><li><a href="usage-fink.php?phpLang=en#moving-symlink">5.5 If I move Fink after installation and provide a symlink from the
        old location, will it work?</a></li><li><a href="usage-fink.php?phpLang=en#removing">5.6 How can I uninstall all of Fink?</a></li><li><a href="usage-fink.php?phpLang=en#bindist">5.7 The package database at the website lists package xxx, but apt-get
        and dselect know nothing about it. Who's lying?</a></li><li><a href="usage-fink.php?phpLang=en#unstable">5.8 There's this package in unstable that I want to install, but the
        fink command just says 'no package found'. How can I install it?</a></li><li><a href="usage-fink.php?phpLang=en#unstable-onepackage">5.9 Do I <b>really</b> need to enable all of unstable just to install
        one unstable package that I want?</a></li><li><a href="usage-fink.php?phpLang=en#sudo">5.10 I'm tired of typing my password into sudo again and again. Is there
        a way around this?</a></li><li><a href="usage-fink.php?phpLang=en#exec-init-csh">5.11 When I try to run init.csh or init.sh, I get a "Permission denied"
        error. What am I doing wrong?</a></li><li><a href="usage-fink.php?phpLang=en#dselect-access">5.12 Help! I used the "[A]ccess" menu entry in dselect and now I can't
        download packages any more!</a></li><li><a href="usage-fink.php?phpLang=en#cvs-busy">5.13 When I try to run <q>fink selfupdate</q> or "fink
        selfupdate-cvs", I get the error "<code>Updating using CVS failed.
        Check the error messages above.</code>"</a></li><li><a href="usage-fink.php?phpLang=en#kernel-panics">5.14 When I use Fink, my whole machine freezes up/kernel panics/dies.
        Help!</a></li><li><a href="usage-fink.php?phpLang=en#not-found">5.15 I'm trying to install a package, but Fink can't download it. The
        download site shows a later version number of the package than what
        Fink has. What do I do?</a></li><li><a href="usage-fink.php?phpLang=en#fink-not-found">5.16 I get "command not found" errors when I run Fink or anything that I
        installed with Fink.</a></li><li><a href="usage-fink.php?phpLang=en#invisible-sw">5.17 I want to hide /sw in the Finder to keep users from damaging the
        Fink setup.</a></li><li><a href="usage-fink.php?phpLang=en#install-info-bad">5.18 I can't install anything, because I get the following error:
        "install-info: unrecognized option `--infodir=/sw/share/info'"</a></li><li><a href="usage-fink.php?phpLang=en#bad-list-file">5.19 I can't install or remove anything, because of a problem with a
        "files list file".</a></li><li><a href="usage-fink.php?phpLang=en#error-nineteen">5.20 When I use the Fink binary installer package, I get a big "19" in
        the window and can't install anything.</a></li><li><a href="usage-fink.php?phpLang=en#dselect-garbage">5.21 I get a bunch of garbage when I select packages in
        <code>dselect</code>. How can I use it?</a></li><li><a href="usage-fink.php?phpLang=en#perl-undefined-symbol">5.22 Why do I get a bunch of "dyld: perl undefined symbols" errors when
        I run Fink commands?</a></li><li><a href="usage-fink.php?phpLang=en#cant-upgrade">5.23 I can't seem to update Fink's version.</a></li><li><a href="usage-fink.php?phpLang=en#spaces-in-directory">5.24 Can I put Fink in a volume or directory with a space in its
        name?</a></li><li><a href="usage-fink.php?phpLang=en#packages-gz">5.25 When I try to do a binary update, there are many messages with
        "File not found" or "Couldn't stat package source list file".</a></li><li><a href="usage-fink.php?phpLang=en#wrong-tree">5.26 I've changed my OS | Developer Tools, but Fink doesn't recognize
        the change.</a></li><li><a href="usage-fink.php?phpLang=en#seg-fault">5.27 I get errors with <code>gzip</code> | <code>dpkg-deb</code>I
        applications from the<code> fileutils </code>package! Help!</a></li><li><a href="usage-fink.php?phpLang=en#pathsetup-keeps-running">5.28 When I open a Terminal window, I get a message that "Your
        environment seems to be correctly set up for Fink already.", and it
        logs out.</a></li><li><a href="usage-fink.php?phpLang=en#ext-drive">5.29 I have Fink installed away from the main partition and I can't update the fink package from source.  There are errors involving <q>chowname</q>.</a></li><li><a href="usage-fink.php?phpLang=en#mirror-gnu">5.30 Fink won't update my packages because it says it can't find the 'gnu' mirror.</a></li><li><a href="usage-fink.php?phpLang=en#cant-move-fink">5.31 I can't update Fink, because it can't move /sw/fink out of the way.</a></li><li><a href="usage-fink.php?phpLang=en#four-oh-three">5.32 I keep getting 403 errors when I use <code>apt-get</code> or <code>dselect</code> or the Fink Commander Binary menu.</a></li><li><a href="usage-fink.php?phpLang=en#fc-cache">5.33 I get a message that says "No fonts found".</a></li><li><a href="usage-fink.php?phpLang=en#non-admin-installer">5.34  I can't install Fink via the Installer package, because I get "volume doesn't support symlinks" errors.</a></li></ul></li><li><a href="comp-general.php?phpLang=en"><b>6 Compile Problems - General</b></a><ul><li><a href="comp-general.php?phpLang=en#compiler">6.1 A configure script complains that it can't find an "acceptable cc".
        What's that?</a></li><li><a href="comp-general.php?phpLang=en#cvs">6.2 When I try a "fink selfupdate-cvs" I get this message: "cvs:
        Command not found."</a></li><li><a href="comp-general.php?phpLang=en#missing-make">6.3 I'm getting an error message involving <code>make</code>
        </a></li><li><a href="comp-general.php?phpLang=en#head">6.4 I'm getting a strange usage message from the head command. What's
        broken?</a></li><li><a href="comp-general.php?phpLang=en#also_in">6.5 When I try to install a package I get an error message about trying
        to overwrite a file that is in another package.</a></li><li><a href="comp-general.php?phpLang=en#weak_lib">6.6 After I installed the December 2002 Development Tools I get
        messages about "weak libraries".</a></li><li><a href="comp-general.php?phpLang=en#mv-failed">6.7 What does "execution of mv failed, exit code 1" mean when I try to
        build a package?</a></li><li><a href="comp-general.php?phpLang=en#node-exists">6.8 I can't install a package | update because I get a message that a
        "node" already exists.</a></li><li><a href="comp-general.php?phpLang=en#usr-local-libs">6.9 I've heard that libraries and headers installed under /usr/local sometimes
        cause build problems for Fink. Is this true?</a></li><li><a href="comp-general.php?phpLang=en#toc-out-of-date">6.10 When I try to build a package, I get a message that a "table of
        contents" is out of date. What do I need to do?</a></li><li><a href="comp-general.php?phpLang=en#fc-atlas">6.11 Fink Commander hangs when I try to install atlas.</a></li><li><a href="comp-general.php?phpLang=en#basic-headers">6.12 I get messages saying that I'm missing <code>stddef.h</code>, <code>wchar.h</code>, or <code>crt1.o</code>, or that my "C compiler cannot create executables".</a></li><li><a href="comp-general.php?phpLang=en#multiple-dependencies">6.13 I can't update, because Fink is "unable to resolve version conflict
        on multiple dependencies".</a></li><li><a href="comp-general.php?phpLang=en#dpkg-parse-error">6.14 I can't install anything because I get "dpkg: parse error, in file
        `/sw/var/lib/dpkg/status'"!</a></li><li><a href="comp-general.php?phpLang=en#freetype-problems">6.15 I get errors involving freetype.</a></li><li><a href="comp-general.php?phpLang=en#dlfcn-from-oo">6.16 I get build errors involving `Dl_info'.</a></li><li><a href="comp-general.php?phpLang=en#gcc2">6.17 Fink says I'm missing <code>gcc2</code> or <code>gcc3.1</code> but I can't seem to
        install it.</a></li><li><a href="comp-general.php?phpLang=en#system-java">6.18 Fink says <code>Failed: Can't resolve dependency "system-java14-dev"</code>, but there's no such package.</a></li><li><a href="comp-general.php?phpLang=en#dpkg-split">6.19 When I try to install anything, I get <q>dpkg (subprocess): failed to exec dpkg-split to see if it's part of a multiparter: No such file or directory</q>.  How do I fix this?</a></li><li><a href="comp-general.php?phpLang=en#xml-parser">6.20 I get the following message: <q>configure: error: XML::Parser perl module is required for intltool</q>.  What do I do about it?</a></li><li><a href="comp-general.php?phpLang=en#master-problems">6.21 I'm trying to download a package, but Fink goes to some weird site with <q>distfiles</q> in its name, and the file isn't there.</a></li><li><a href="comp-general.php?phpLang=en#compile-options">6.22 I want Fink to use different options in building a package.</a></li><li><a href="comp-general.php?phpLang=en#gettext">6.23 Whenever I try to build from source, Fink keeps waffling between <code>gettext-dev</code> and <code>libgettext3-dev</code>.</a></li><li><a href="comp-general.php?phpLang=en#python-mods">6.24 I get errors involving <code>MACOSX_DEPLOYMENT_TARGET </code>when I try to build a Python module.</a></li></ul></li><li><a href="comp-packages.php?phpLang=en"><b>7 Compile Problems - Specific Packages</b></a><ul><li><a href="comp-packages.php?phpLang=en#libgtop">7.1 A package fails to build with errors involving
        <code>sed</code>.</a></li><li><a href="comp-packages.php?phpLang=en#cant-install-xfree">7.2 I want to switch to Fink's XFree86 packages, but I can't install
        <code>xfree86-base</code> | <code>xfree86</code>, because it conflicts
        with <code>system-xfree86</code>.</a></li><li><a href="comp-packages.php?phpLang=en#change-thread-nothread">7.3 How do I change from the non-threaded version of Fink's XFree86
        packages to the threaded version (or vice-versa)?</a></li><li><a href="comp-packages.php?phpLang=en#cctools">7.4 "When I try to install KDE, I get the following message: 'Can't
        resolve dependency "cctools (&gt;= 446-1)"'"</a></li><li><a href="comp-packages.php?phpLang=en#libiconv-gettext">7.5 I can't update <code>libiconv</code>.</a></li><li><a href="comp-packages.php?phpLang=en#cplusplus-filt">7.6 i can't install <code>g77</code> because <code>c++filt</code> is missing.  Where do I get it?</a></li><li><a href="comp-packages.php?phpLang=en#all-others">7.7 I'm having issues with a package that isn't listed here.</a></li></ul></li><li><a href="usage-general.php?phpLang=en"><b>8 Package Usage Problems - General</b></a><ul><li><a href="usage-general.php?phpLang=en#xlocale">8.1 I'm getting lots of messages like "locale not supported by C
        library". Is that bad?</a></li><li><a href="usage-general.php?phpLang=en#passwd">8.2 There are suddenly a number of strange users on my system, with
        names like "mysql", "pgsql", and "games". Where did they come
        from?</a></li><li><a href="usage-general.php?phpLang=en#compile-myself">8.3 How do I compile something myself using Fink-installed
        software?</a></li><li><a href="usage-general.php?phpLang=en#apple-x11-applications-menu">8.4 I can't run any of my Fink-installed applications using the
        Applications menu in Apple X11.</a></li><li><a href="usage-general.php?phpLang=en#x-options">8.5 I'm bewildered by the X11 options: Apple X11, XFree86, etc. What
        should I install?</a></li><li><a href="usage-general.php?phpLang=en#no-display">8.6 When I try to run an application, I get a message that says "cannot
        open display:". What do I need to do?</a></li><li><a href="usage-general.php?phpLang=en#suggest-package">8.7 I don't see my favorite program in Fink. How do I suggest a new
        package for inclusion in Fink?</a></li><li><a href="usage-general.php?phpLang=en#virtpackage">8.8 What are all these <code>system-*</code> "virtual
	  packages" that are sometimes present, but that I can't
	  seem to install or remove myself?</a></li></ul></li><li><a href="usage-packages.php?phpLang=en"><b>9 Package Usage Problems - Specific Packages</b></a><ul><li><a href="usage-packages.php?phpLang=en#xmms-quiet">9.1 I get no sound from XMMS</a></li><li><a href="usage-packages.php?phpLang=en#nedit-window-locks">9.2 If I am editing a file in nedit, when I open another file its
        window pops up but is unresponsive.</a></li><li><a href="usage-packages.php?phpLang=en#xdarwin-start">9.3 Help! When I start XDarwin, it immediately quits!</a></li><li><a href="usage-packages.php?phpLang=en#no-server">9.4 When I try to start XDarwin I get the message "xinit: No such file
        or directory (errno 2): no server "/usr/X11R6/bin/X" in PATH".</a></li><li><a href="usage-packages.php?phpLang=en#xterm-error">9.5 xterm fails with "dyld: xterm Undefined symbols: xterm undefined
        reference to _tgetent expected to be defined in
        /usr/lib/libSystem.B.dylib".</a></li><li><a href="usage-packages.php?phpLang=en#libXmuu">9.6 When I try to start XFree86 I get one of the following errors:
        "dyld: xinit can't open library: /usr/X11R6/lib/libXmuu.1.dylib" or
        "dyld: xinit can't open library: /usr/X11R6/lib/libXext.6.dylib"</a></li><li><a href="usage-packages.php?phpLang=en#apple-x-bugs">9.7 I had Fink's XFree86 installed, and I've replaced it with Apple's
        X11, and now everything's crashing!</a></li><li><a href="usage-packages.php?phpLang=en#apple-x-delete">9.8 I want the delete key in Apple's X11.app to behave like that in
        XDarwin.</a></li><li><a href="usage-packages.php?phpLang=en#gnome-two">9.9 I upgraded from GNOME 1.x to GNOME 2.x and now
        <code>gnome-session</code> won't open a window manager.</a></li><li><a href="usage-packages.php?phpLang=en#apple-x11-no-windowbar">9.10 I upgraded to Apple's X11 in Panther and now my window title bars
        are missing.</a></li><li><a href="usage-packages.php?phpLang=en#apple-x11-wants-xfree86">9.11 I installed Apple's X11 but Fink keeps asking to install
        XFree86 or X.org.</a></li><li><a href="usage-packages.php?phpLang=en#wants-xfree86-on-upgrade">9.12 I switched from the 10.2 Fink version to 10.2-gcc3.3 or 10.3, I have Apple's X11, and Fink asks me to install XFree86 or X.org.</a></li><li><a href="usage-packages.php?phpLang=en#special-x11-debug">9.13 I'm still having problems with X11 and Fink.</a></li><li><a href="usage-packages.php?phpLang=en#tiger-gtk">9.14 After updating to Tiger (OS 10.4), whenever I use a GTK app, I get errors involving <code>_EVP_idea_cbc</code>.</a></li><li><a href="usage-packages.php?phpLang=en#yelp">9.15 I can't get the help to work for any GNOME application.</a></li></ul></li></ul>
<!--Generated from $Fink: faq.en.xml,v 1.60 2005/11/17 01:23:13 alexkhansen Exp $-->
<? include_once "../footer.inc"; ?>


