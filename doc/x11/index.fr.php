<?
$title = "Utilisation de X11";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/04/04 20:43:03';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Utilisation de X11 Contents"><link rel="next" href="intro.php?phpLang=fr" title="Introduction">';

include_once "header.inc";
?>

<h1>Utilisation de X11 sous Darwin et Mac OS X</h1>
    <p>
Ce document traite de l'utilisation de X11 / XFree86 / Xtools sur les systèmes Mac OS X et Darwin d'Apple.
Il commence par une introduction et l'historique du développement, puis décrit la situation actuelle et les nombreuses options d'utilisation de X11 avec ou sans Fink.
</p>
  <h2>Contents</h2><ul>
	<li><a href="intro.php?phpLang=fr"><b>1 Introduction</b></a><ul><li><a href="intro.php?phpLang=fr#def-x11">1.1 Qu'est-ce que X11 ?</a></li><li><a href="intro.php?phpLang=fr#def-macosx">1.2 Qu'est-ce que Mac OS X ?</a></li><li><a href="intro.php?phpLang=fr#def-darwin">1.3 Qu'est-ce que Darwin ?</a></li><li><a href="intro.php?phpLang=fr#def-xfree86">1.4 Qu'est-ce que XFree86 ?</a></li><li><a href="intro.php?phpLang=fr#def-xtools">1.5 Qu'est-ce que Xtools ?</a></li><li><a href="intro.php?phpLang=fr#client-server">1.6 Client et Serveur</a></li><li><a href="intro.php?phpLang=fr#rootless">1.7 Que signifie sans racine (rootless) ?</a></li><li><a href="intro.php?phpLang=fr#wm">1.8 Qu'est-ce qu'un gestionnaire de fenêtres ?</a></li><li><a href="intro.php?phpLang=fr#desktop">1.9 Que sont Quartz/Aqua, Gnome et KDE ?</a></li></ul></li><li><a href="history.php?phpLang=fr"><b>2 History</b></a><ul><li><a href="history.php?phpLang=fr#early">2.1 The early days</a></li><li><a href="history.php?phpLang=fr#xonx-forms">2.2 XonX forms</a></li><li><a href="history.php?phpLang=fr#root-or-not">2.3 To root or not to root</a></li></ul></li><li><a href="inst-xfree86.php?phpLang=fr"><b>3 Getting and Installing XFree86</b></a><ul><li><a href="inst-xfree86.php?phpLang=fr#fink">3.1 Installing through Fink</a></li><li><a href="inst-xfree86.php?phpLang=fr#apple-binary">3.2 Apple's Binaries</a></li><li><a href="inst-xfree86.php?phpLang=fr#official-binary">3.3 The Official Binaries</a></li><li><a href="inst-xfree86.php?phpLang=fr#official-source">3.4 The Official Source</a></li><li><a href="inst-xfree86.php?phpLang=fr#latest-cvs">3.5 The Latest Development Source</a></li><li><a href="inst-xfree86.php?phpLang=fr#macgimp">3.6 MacGimp</a></li><li><a href="inst-xfree86.php?phpLang=fr#switching-x11">3.7 Replacing X11</a></li><li><a href="inst-xfree86.php?phpLang=fr#fink-summary">3.8 Fink package summary</a></li></ul></li><li><a href="run-xfree86.php?phpLang=fr"><b>4 Starting XFree86</b></a><ul><li><a href="run-xfree86.php?phpLang=fr#darwin">4.1 Darwin</a></li><li><a href="run-xfree86.php?phpLang=fr#macosx-41">4.2 Mac OS X + XFree86 4.x.y</a></li><li><a href="run-xfree86.php?phpLang=fr#xinitrc">4.3 The .xinitrc File</a></li></ul></li><li><a href="xtools.php?phpLang=fr"><b>5 Xtools</b></a><ul><li><a href="xtools.php?phpLang=fr#install">5.1 Installing Xtools</a></li><li><a href="xtools.php?phpLang=fr#run">5.2 Running Xtools</a></li><li><a href="xtools.php?phpLang=fr#opengl">5.3 OpenGL Notes</a></li></ul></li><li><a href="other.php?phpLang=fr"><b>6 Other X11 Possibilities</b></a><ul><li><a href="other.php?phpLang=fr#vnc">6.1 VNC</a></li><li><a href="other.php?phpLang=fr#wiredx">6.2 WiredX</a></li><li><a href="other.php?phpLang=fr#exodus">6.3 eXodus</a></li></ul></li><li><a href="trouble.php?phpLang=fr"><b>7 Troubleshooting XFree86</b></a><ul><li><a href="trouble.php?phpLang=fr#immedate-quit">7.1 When I launch XDarwin, it quits
or crashes almost immediately</a></li><li><a href="trouble.php?phpLang=fr#black">7.2 Black icons in the GNOME panel or in the
menu of a GNOME application</a></li><li><a href="trouble.php?phpLang=fr#keyboard">7.3 The keyboard doesn't work in XFree86</a></li><li><a href="trouble.php?phpLang=fr#delete-key">7.4 The Backspace key doesn't work</a></li><li><a href="trouble.php?phpLang=fr#locale">7.5 "Warning: locale not supported by C library"</a></li></ul></li><li><a href="tips.php?phpLang=fr"><b>8 Usage Tips</b></a><ul><li><a href="tips.php?phpLang=fr#terminal-app">8.1 Launching X11 apps from Terminal.app</a></li><li><a href="tips.php?phpLang=fr#open">8.2 Launching Aqua apps from an xterm</a></li><li><a href="tips.php?phpLang=fr#copy-n-paste">8.3 Copy and Paste</a></li></ul></li></ul><!--Generated from $Fink: x11.fr.xml,v 1.2 2004/04/04 20:43:03 michga Exp $-->

<? include_once "footer.inc"; ?>
