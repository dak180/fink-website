<?
$title = "常见疑问（F.A.Q.）";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2006/06/15 01:58:52';
$metatags = '<link rel="contents" href="index.php?phpLang=zh" title="常见疑问（F.A.Q.） Contents"><link rel="next" href="general.php?phpLang=zh" title="一般性问题">';


include_once "header.zh.inc";
?>
<h1>Fink 常见疑问（F.A.Q.）</h1>
    <p>这是一个关于 Fink 经常被问到的问题的清单。和多数的 FAQs 一样，其中一些问题来自于实际的问题，而另外一些则是假设存在的。它更接近于一份专门以问答形式编写的文档。</p>
    <p>本 FAQ 由几页组成，每部分一页。所有的问题都会在下面的目录中列出并链接到合适的位置。</p>
  <h2><? echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="general.php?phpLang=zh"><b>1 一般性问题</b></a><ul><li><a href="general.php?phpLang=zh#what">1.1 什么是 Fink？</a></li><li><a href="general.php?phpLang=zh#naming">1.2 Fink 是什么意思？</a></li><li><a href="general.php?phpLang=zh#bsd-ports">1.3 Fink 和 BSD port 机制有什么区别（它被包括在 OpenPackages 和 GNU-Darwin 中）？</a></li><li><a href="general.php?phpLang=zh#usr-local">1.4 为什么 Fink 不安装在 /usr/local？</a></li><li><a href="general.php?phpLang=zh#why-sw">1.5 为什么选择 /sw？</a></li></ul></li><li><a href="relations.php?phpLang=zh"><b>2 与其它项目的关系</b></a><ul><li><a href="relations.php?phpLang=zh#upstream">2.1 你是否会把你的补丁反馈给上游维护者？</a></li><li><a href="relations.php?phpLang=zh#debian">2.2 你们和 Debian 项目的关系是什么？你们在把 Debian Linux 移植到 Mac OS X 上吗？</a></li><li><a href="relations.php?phpLang=zh#apple">2.3 你们和苹果公司的关系是什么？</a></li><li><a href="relations.php?phpLang=zh#darwinports">2.4 你们和 Darwinports 的关系是什么？</a></li></ul></li><li><a href="mirrors.php?phpLang=zh"><b>3 Fink 镜像</b></a><ul><li><a href="mirrors.php?phpLang=zh#when-use">3.1 什么是 Fink 镜像？</a></li><li><a href="mirrors.php?phpLang=zh#why">3.2 为什么我需要使用 rsync 镜像服务器？</a></li><li><a href="mirrors.php?phpLang=zh#where">3.3 在哪里我可以找到关于 Fink 镜像的更多信息？</a></li><li><a href="mirrors.php?phpLang=zh#when-not">3.4 我不能连接 rsync 服务器，我应该怎么办？</a></li><li><a href="mirrors.php?phpLang=zh#otherinfogone">3.5 我现在已经改换到 rsync 方法，但所有没有用到的代码树都消失了？</a></li><li><a href="mirrors.php?phpLang=zh#howswitch">3.6 我怎么在这两种方法中切换？</a></li><li><a href="mirrors.php?phpLang=zh#status">3.7 我可以看到 rsync 镜像的当前状态吗？</a></li><li><a href="mirrors.php?phpLang=zh#Master">3.8 什么是 Distfiles 镜像？</a></li></ul></li><li><a href="upgrade-fink.php?phpLang=zh"><b>4 升级 Fink （解决特定版本的问题）</b></a><ul><li><a href="upgrade-fink.php?phpLang=zh#gcc-0.16.0">4.1 我升级到了 0.16.0，它告诉我说 "Your version of the
gcc 3.3 compiler is out of date." 我应该怎么办？</a></li><li><a href="upgrade-fink.php?phpLang=zh#fink-0220">4.2 I haven't had any package updates from Fink in a while.</a></li></ul></li><li><a href="usage-fink.php?phpLang=zh"><b>5 安装，使用和维护 Fink</b></a><ul><li><a href="usage-fink.php?phpLang=zh#what-packages">5.1 我怎么知道 Fink 支持那些软件包？</a></li><li><a href="usage-fink.php?phpLang=zh#proxy">5.2 我在防火墙后面，我怎么配置 Fink 使用 HTTP 代理？</a></li><li><a href="usage-fink.php?phpLang=zh#firewalled-cvs">5.3 我在防火墙后面，我怎么用 CVS 方式升级已安装的软件包？</a></li><li><a href="usage-fink.php?phpLang=zh#moving">5.4 我可以在安装后把 fink 移动到其它位置吗？</a></li><li><a href="usage-fink.php?phpLang=zh#moving-symlink">5.5 如果我安装 Fink 以后把它移动到其它地方，但在原来的地方提供一个符号连接，可以吗？</a></li><li><a href="usage-fink.php?phpLang=zh#removing">5.6 我怎么彻底反安装 Fink？</a></li><li><a href="usage-fink.php?phpLang=zh#bindist">5.7 网站上的软件包数据库列有 xxx 软件包，但 apt-get 和 dselect 则没有任何显示。哪个有问题？</a></li><li><a href="usage-fink.php?phpLang=zh#unstable">5.8 我想安装一个未稳定版本，但 fink 说 'no package found'。我怎么才能安装它？</a></li><li><a href="usage-fink.php?phpLang=zh#unstable-onepackage">5.9 Do I <b>really</b> need to enable all of unstable just to install
        one unstable package that I want?</a></li><li><a href="usage-fink.php?phpLang=zh#sudo">5.10 每次运行 sudo 都要输入密码，这很麻烦。有办法解决吗？</a></li><li><a href="usage-fink.php?phpLang=zh#exec-init-csh">5.11 当我尝试运行 init.csh 或 init.sh 时，我碰到一个 "Permission denied" 错误。我做错了什么？</a></li><li><a href="usage-fink.php?phpLang=zh#dselect-access">5.12 救命！我选择了 dselect 的
"[A]ccess" 菜单，现在我不能下载软件包了！</a></li><li><a href="usage-fink.php?phpLang=zh#cvs-busy">5.13 当我试图运行 <q>fink selfupdate</q> 或 "fink selfupdate-cvs" 时，我碰到了 "<code>Updating using CVS failed. Check the error messages above.</code>"这个错误信息。</a></li><li><a href="usage-fink.php?phpLang=zh#kernel-panics">5.14 当我使用 Fink 的时候，碰到整个机器没有反应/核心恐慌/死机。救命！</a></li><li><a href="usage-fink.php?phpLang=zh#not-found">5.15 我试图安装一个软件包，但 Fink 不能下载它。下载的网站显示一个比 Fink 里面更新的版本号。我该怎么办？</a></li><li><a href="usage-fink.php?phpLang=zh#fink-not-found">5.16 当我运行 Fink 或我用 Fink 安装的东西的时候，我碰到一个 "command not found" 错误。</a></li><li><a href="usage-fink.php?phpLang=zh#invisible-sw">5.17 我希望在 Finder 里面隐藏 /sw 而避免用户破坏 Fink 的设置。</a></li><li><a href="usage-fink.php?phpLang=zh#install-info-bad">5.18 我不能安装任何软件，因为我碰到下面的错误信息："install-info: unrecognized option `--infodir=/sw/share/info'"。</a></li><li><a href="usage-fink.php?phpLang=zh#bad-list-file">5.19 我不能安装或删除任何东西，因为一个 "files list file" 问题。</a></li><li><a href="usage-fink.php?phpLang=zh#dselect-garbage">5.20 当我在 <code>dselect</code> 中选择软件包时，屏幕显示一堆乱七八糟的东西。怎么办？</a></li><li><a href="usage-fink.php?phpLang=zh#perl-undefined-symbol">5.21 为什么我运行 Fink 命令时会有一堆的 "dyld: perl undefined symbols" 错误？</a></li><li><a href="usage-fink.php?phpLang=zh#cant-upgrade">5.22 我看不到要升级的 Fink 版本。</a></li><li><a href="usage-fink.php?phpLang=zh#spaces-in-directory">5.23 我可以把 Fink 放到一个名字里面有空格的目录或宗卷里面吗？</a></li><li><a href="usage-fink.php?phpLang=zh#packages-gz">5.24 当我进行二进制升级的时候，有很多 "File not found" 和 "Couldn't stat package source list file" 错误。</a></li><li><a href="usage-fink.php?phpLang=zh#wrong-tree">5.25 我更改了我的错误系统或开发工具，但 Fink 没有认出这些改动。</a></li><li><a href="usage-fink.php?phpLang=zh#seg-fault">5.26 当我运行<code> fileutils </code>中的 <code>gzip</code> 或 <code>dpkg-deb</code> 程序时出现错误！救命！</a></li><li><a href="usage-fink.php?phpLang=zh#pathsetup-keeps-running">5.27 当我打开终端程序窗口时，我看到下面的信息 "Your environment seems to be correctly
set up for Fink already."，然后它就退出登录了。</a></li><li><a href="usage-fink.php?phpLang=zh#ext-drive">5.28 我把 Fink 安装到主分区之外的地方，然后我不能从源代码更新 fink 软件包了。现在出现类似 <q>chowname</q> 的错误。</a></li><li><a href="usage-fink.php?phpLang=zh#mirror-gnu">5.29 Fink won't update my packages because it says it can't find the 'gnu' mirror.</a></li><li><a href="usage-fink.php?phpLang=zh#cant-move-fink">5.30 I can't update Fink, because it can't move /sw/fink out of the way.</a></li><li><a href="usage-fink.php?phpLang=zh#four-oh-three">5.31 I keep getting 403 errors when I use <code>apt-get</code> or <code>dselect</code> or the Fink Commander Binary menu.</a></li><li><a href="usage-fink.php?phpLang=zh#fc-cache">5.32 I get a message that says "No fonts found".</a></li><li><a href="usage-fink.php?phpLang=zh#non-admin-installer">5.33  I can't install Fink via the Installer package, because I get "volume doesn't support symlinks" errors.</a></li></ul></li><li><a href="comp-general.php?phpLang=zh"><b>6 一般性编译问题</b></a><ul><li><a href="comp-general.php?phpLang=zh#compiler">6.1 一个配置脚本出错说找不到一个 "acceptable cc"。什么意思？</a></li><li><a href="comp-general.php?phpLang=zh#cvs">6.2 我运行 "fink selfupdate-cvs"，但出现这个错误："cvs: Command not found."。</a></li><li><a href="comp-general.php?phpLang=zh#missing-make">6.3 我碰到一个涉及 <code>make</code> 的错误。
        </a></li><li><a href="comp-general.php?phpLang=zh#head">6.4 我碰到 head 命令的一个奇怪的错误信息。什么出问题了？</a></li><li><a href="comp-general.php?phpLang=zh#also_in">6.5 当我安装一个软件包的时候，我碰到一个错误信息说我试图覆盖另外一个软件包的文件。</a></li><li><a href="comp-general.php?phpLang=zh#weak_lib">6.6 我安装了 December 2002 开发工具包以后，碰到 "weak libraries" 的错误。</a></li><li><a href="comp-general.php?phpLang=zh#mv-failed">6.7 当我构建一个软件包时，"execution of mv failed, exit code 1" 错误是什么意思？</a></li><li><a href="comp-general.php?phpLang=zh#node-exists">6.8 我无法安装软件包或更新它，因为我碰到一个错误说一个 "node" 已经存在。</a></li><li><a href="comp-general.php?phpLang=zh#usr-local-libs">6.9 我听说安装在 /usr/local/lib 的库有时会引起 Fink 构建的问题。是这样吗？</a></li><li><a href="comp-general.php?phpLang=zh#toc-out-of-date">6.10 当我构建一个软件包的时候，我碰到一个消息说 "table of contents" 已经过时。我需要怎么办？</a></li><li><a href="comp-general.php?phpLang=zh#fc-atlas">6.11 当我安装 atlas 时 Fink Commander 挂了。</a></li><li><a href="comp-general.php?phpLang=zh#basic-headers">6.12 I get messages saying that I'm missing <code>stddef.h</code>, <code>wchar.h</code>, or <code>crt1.o</code>, or that my "C compiler cannot create executables".</a></li><li><a href="comp-general.php?phpLang=zh#multiple-dependencies">6.13 我无法升级，因为 Fink "unable to resolve version conflict on multiple dependencies"。</a></li><li><a href="comp-general.php?phpLang=zh#dpkg-parse-error">6.14 我不能安装任何东西，因为我碰到 "dpkg: parse error, in file `/sw/var/lib/dpkg/status'" 错误！</a></li><li><a href="comp-general.php?phpLang=zh#freetype-problems">6.15 我碰到一个涉及 freetype 的错误。</a></li><li><a href="comp-general.php?phpLang=zh#dlfcn-from-oo">6.16 我碰到一个涉及 `Dl_info' 的编译错误。</a></li><li><a href="comp-general.php?phpLang=zh#gcc2">6.17 Fink says I'm missing <code>gcc2</code> or <code>gcc3.1</code> but I can't seem to
        install it.</a></li><li><a href="comp-general.php?phpLang=zh#system-java">6.18 Fink 提示说 <code>Failed: Can't resolve dependency "system-java14-dev"</code>，但我却找不到有这个软件包。</a></li><li><a href="comp-general.php?phpLang=zh#dpkg-split">6.19 当我尝试安装东西的时候，我碰到 <q>dpkg (subprocess): failed to exec dpkg-split to see if it's part of a multiparter: No such file or directory</q> 这样的错误。我怎么修复它？</a></li><li><a href="comp-general.php?phpLang=zh#xml-parser">6.20 我碰到这个 <q>configure: error: XML::Parser perl module is required for intltool</q> 错误信息。我应该怎么办？</a></li><li><a href="comp-general.php?phpLang=zh#master-problems">6.21 I'm trying to download a package, but Fink goes to some weird site with <q>distfiles</q> in its name, and the file isn't there.</a></li><li><a href="comp-general.php?phpLang=zh#compile-options">6.22 I want Fink to use different options in building a package.</a></li><li><a href="comp-general.php?phpLang=zh#gettext">6.23 Whenever I try to build from source, Fink keeps waffling between <code>gettext-dev</code> and <code>libgettext3-dev</code>.</a></li><li><a href="comp-general.php?phpLang=zh#python-mods">6.24 I get errors involving <code>MACOSX_DEPLOYMENT_TARGET </code>when I try to build a Python module.</a></li></ul></li><li><a href="comp-packages.php?phpLang=zh"><b>7 编译问题－特定软件包</b></a><ul><li><a href="comp-packages.php?phpLang=zh#libgtop">7.1 一个软件包构建失败，错误和 <code>sed</code> 有关。</a></li><li><a href="comp-packages.php?phpLang=zh#cant-install-xfree">7.2 我想改用 Fink　的 XFree86 软件包，但我不能安装 <code>xfree86-base</code> 或 <code>xfree86</code>，因为它和 <code>system-xfree86</code> 冲突。</a></li><li><a href="comp-packages.php?phpLang=zh#change-thread-nothread">7.3 怎么把 Fink 的 XFree86 从非线程化的版本改为线程化的版本（或相反）？</a></li><li><a href="comp-packages.php?phpLang=zh#cctools">7.4 "当我安装 KDE 的时候，我碰到下面的信息：'Can't resolve dependency "cctools (&gt;= 446-1)"'</a></li><li><a href="comp-packages.php?phpLang=zh#libiconv-gettext">7.5 I can't update <code>libiconv</code>.</a></li><li><a href="comp-packages.php?phpLang=zh#cplusplus-filt">7.6 i can't install <code>g77</code> because <code>c++filt</code> is missing.  Where do I get it?</a></li></ul></li><li><a href="usage-general.php?phpLang=zh"><b>8 一般性软件包使用问题</b></a><ul><li><a href="usage-general.php?phpLang=zh#xlocale">8.1 我碰到很多这样的消息："locale not supported by C library"。有问题吗？</a></li><li><a href="usage-general.php?phpLang=zh#passwd">8.2 我的系统上突然多很很多陌生的用户，名字象 "mysql"，"pgsql"，和 "games"。
它们是哪来的？</a></li><li><a href="usage-general.php?phpLang=zh#compile-myself">8.3 如何使用 Fink 安装的软件编译一些我自己的东西？</a></li><li><a href="usage-general.php?phpLang=zh#apple-x11-applications-menu">8.4 我不能在苹果的 X11 的应用程序菜单里面运行任何 Fink 安装的程序。</a></li><li><a href="usage-general.php?phpLang=zh#x-options">8.5 我被 X11 的选择弄糊涂了：苹果 X11，XFree86，等等。我应该安装哪一个？</a></li><li><a href="usage-general.php?phpLang=zh#no-display">8.6 当我试图运行一个程序，我碰到一个错误信息说： "cannot open display:"。我应该怎么办？</a></li><li><a href="usage-general.php?phpLang=zh#suggest-package">8.7 我在 Fink 里面看不到我喜欢的那个程序。我应该怎么建议增加一个新的软件包到 Fink 里面？</a></li><li><a href="usage-general.php?phpLang=zh#virtpackage">8.8 这些名为 <code>system-*</code> 的“虚拟软件包”有些时候会存在，但我却不能自己安装或删除它们？</a></li></ul></li><li><a href="usage-packages.php?phpLang=zh"><b>9 特定软件包使用问题</b></a><ul><li><a href="usage-packages.php?phpLang=zh#xmms-quiet">9.1 在 XMMS 中我听不到声音。</a></li><li><a href="usage-packages.php?phpLang=zh#nedit-window-locks">9.2 在我用 nedit 编辑一个文件时，想要打开另外一个文件，但窗口出现了，却没有响应。</a></li><li><a href="usage-packages.php?phpLang=zh#xdarwin-start">9.3 求救！当我启动 XDarwin，它立刻就退出了！</a></li><li><a href="usage-packages.php?phpLang=zh#no-server">9.4 当我尝试启动 XDarwin 的时候，我碰到这个错误信息："xinit: No such file or directory (errno 2): no server "/usr/X11R6/bin/X" in PATH"。</a></li><li><a href="usage-packages.php?phpLang=zh#xterm-error">9.5 xterm 出现错误："dyld: xterm Undefined symbols: xterm undefined reference to _tgetent expected to be defined in /usr/lib/libSystem.B.dylib"。</a></li><li><a href="usage-packages.php?phpLang=zh#libXmuu">9.6 当我启动 XFree86 时，出现错误："dyld: xinit can't open library: /usr/X11R6/lib/libXmuu.1.dylib" or "dyld: xinit can't open library: /usr/X11R6/lib/libXext.6.dylib"</a></li><li><a href="usage-packages.php?phpLang=zh#apple-x-bugs">9.7 我已经安装了 Fink 的 XFree86，然后我把它换成苹果的 X11，现在一切都崩溃了！</a></li><li><a href="usage-packages.php?phpLang=zh#apple-x-delete">9.8 我希望苹果 X11 里面删除键和 XDarwin 中的作用一样。</a></li><li><a href="usage-packages.php?phpLang=zh#gnome-two">9.9 我从 GNOME 1.x 升级到 GNOME 2.x，现在<code>gnome-session</code> 不会打开一个窗口管理器。</a></li><li><a href="usage-packages.php?phpLang=zh#apple-x11-no-windowbar">9.10 我在 Panther 中升级到苹果 X11，现在看不到窗口的标题栏了。</a></li><li><a href="usage-packages.php?phpLang=zh#apple-x11-wants-xfree86">9.11 我在 Panther 中安装了苹果的 X11，但 Fink 还要我安装 XFree86 或 X.org。</a></li><li><a href="usage-packages.php?phpLang=zh#wants-xfree86-on-upgrade">9.12 我从 10.2 的 Fink 版本转到 10.2-gcc3.3 或 10.3 的版本，我已经安装了苹果的 X11，但 Fink 要我安装 XFree86 或 X.org。</a></li><li><a href="usage-packages.php?phpLang=zh#special-x11-debug">9.13 I'm still having problems with X11 and Fink.</a></li><li><a href="usage-packages.php?phpLang=zh#tiger-gtk">9.14 After updating to Tiger (OS 10.4), whenever I use a GTK app, I get errors involving <code>_EVP_idea_cbc</code>.</a></li><li><a href="usage-packages.php?phpLang=zh#yelp">9.15 I can't get the help to work for any GNOME application.</a></li></ul></li></ul>
<!--Generated from $Fink: faq.zh.xml,v 1.23 2006/06/15 01:58:52 babayoshihiko Exp $-->
<? include_once "../footer.inc"; ?>


