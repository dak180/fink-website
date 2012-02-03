<?
$title = "Source Release Download";
$cvs_author = '$Author: alexkhansen $';
$cvs_date = '$Date: 2012/02/03 20:23:36 $';

include "header.inc";
?>

<h1>Download Fink Source Release</h1>


<!--monipol: As instructions for 10.6 were 'hidden' below 10.5, I've copied and
pasted them here with the title 10.6. -->

<p><strong>OS X 10.4 and later:</strong></p>

<p>The source tarball contains the <em>fink</em> package manager.  After you
have installed it, you will be able to get package descriptions and patches.
It will use these to download the source code from the original distribution
sites or the Fink project's mirrors and build them on your local machine.</p>

<p>The current version, <em>fink-0.32.2</em>, was officially released on
2012-02-03.</p>

<ul>
     <li>
For OS X 10.5-10.7, use <a href="http://downloads.sourceforge.net/fink/fink-0.32.2.tar.gz"
onClick="pageTracker._trackPageview('/downloads/FinkSOURCE');"> fink-0.32.2</a>
- 1297K, .tar.gz format
     </li>
     <li>
For OS X 10.4, use <a href="http://downloads.sourceforge.net/fink/fink-0.30.2.tar.gz"
onClick="pageTracker._trackPageview('/downloads/FinkSOURCE');"> fink-0.30.2</a>
- 1188K, .tar.gz format
     </li>
</ul>

<p>You will also need to install an appropriate version of the Xcode Tools
(c.f. <a href="./index.en.php">the Quick Start page</a>) for your operating
system.</p>

<p>Unpack the tar.gz archive if this hasn't been done automatically, e.g.
via</p>

<pre>tar -xzf fink-0.32.2.tar.gz</pre>

<p>or</p>

<pre>tar -xvf fink-0.32.2.tar</pre>

<p>if it has already been partially unpacked, in a terminal window.  Then run the following
commands:</p>

<pre>cd fink-0.32.2
./bootstrap</pre>

<p>to start the boostrapping operation, which will install the Fink base
setup.  If you would like to use a different location than the default <em>/sw</em>, you can do this via</p>
<pre>./bootstrap /path</pre>
<p>(replace <em>/path</em> with the directory you want to use).</p>
<!-- akh: I got a note from Trevor Harmon that the 0.28.0 bootstrap automagically runs pathsetup.sh
     rangerrick: but that is not true!  ;) -->

<p>After the installation is completed, running the command</p>

<pre>/sw/bin/pathsetup.sh</pre>

<p>will set up your environment for Fink (assuming you have installed Fink
under /sw).  If you open a new terminal window, the session will use these
environment settings.  Once you have installed <em>fink</em> and the other base
packages, the command sequences:</p>

<pre>fink selfupdate-rsync</pre>
<pre>fink index -f</pre>
<p>or</p>
<pre>fink selfupdate-cvs</pre>
<pre>fink index -f</pre>

<p>will download the package description files and patches. <code>rsync</code> is
generally preferable to <code>cvs</code> for most people.</p>

<p>Installation and usage instructions are inside the distribution tarball.
Please read them - Fink is not a one-click-and-done thing.  The documents
README, INSTALL and USAGE are provided as pure text (for reading from the
command line) and as HTML (for reading in a browser and for printing).  They
are also available online in the <a href="../doc/index.php">documentation
section</a>.
</p>

<p>To be informed of new releases, subscribe to the <a
href="../lists/fink-announce.php">fink-announce mailinglist</a>.
</p>



<p><strong>OS X 10.5 point release:</strong></p>

<p>The source point release contains the <em>fink</em> package manager plus package
descriptions and patches.  It will download the source code from the original
distribution sites and build them on your local machine.
</p>

<? 
include "../fink_version.inc";
?>

<p>Fink <? print $fink_version; ?> was officially released on
<? print $release_date; ?>.</p>

<ul><li><a
href="http://prdownloads.sourceforge.net/fink/fink-<? print $fink_version; ?>-full.tar.gz" onClick="pageTracker._trackPageview('/downloads/FinkFullSOURCE');">Fink
<? print $fink_version; ?></a> - 3521K, .tar.gz format</li>
</ul>

<p>You will also need to install the Xcode Tools (c.f. <a href="./index.en.php">the Quick Start page</a>).</p>

<p>Unpack the tar.gz archive if this hasn't been done automatically, e.g.
via</p>

<pre>tar -xvzf fink-<? print $fink_version; ?>-full.tar.gz</pre>

<p>or</p>

<pre>tar -xvf fink-<? print $fink_version; ?>-full.tar</pre>

<p>if it has already been partially unpacked, in a terminal window.  Then, in a
terminal window, change to the resulting <em>fink-<? print $fink_version;
?></em> directory, and use</p>

<pre>./bootstrap</pre>

<p>to start the boostrapping operation, which will install the Fink base
setup.  If you would like to use a different location than the default <em>/sw</em>, you can do this via</p>
<pre>./bootstrap /path</pre>
<p>(replace <em>/path</em> with the directory you want to use).</p>
<!-- akh: I got a note from Trevor Harmon that the 0.28.0 bootstrap automagically runs pathsetup.sh
     rangerrick: but that is not true!  ;) -->

<p>After the installation is completed, running the command</p>

<pre>/sw/bin/pathsetup.sh</pre>

<p>will set up your environment for Fink (assuming you have installed Fink
under /sw).  If you open a new terminal window, the session will use these
environment settings.  Once you have installed <em>fink</em> and the other base
packages, the command sequence:</p>

<pre>fink selfupdate</pre>

<p>using any either the <em>rsync</em> or <em>cvs</em> options,
followed by</p>

<pre>fink index -f</pre>

<p>followed by</p>

<pre>fink selfupdate-rsync</pre>

<p>or</p>

<pre>fink selfupdate-cvs</pre>

<p>will download the package description files and patches, provided that you
<strong>do not</strong> select the "point release" method initially.  <em>rsync</em> is generally
preferable to <em>cvs</em> for most people.</p>

<p>Installation and usage instructions are inside the distribution tarball.
Please read them - Fink is not a one-click-and-done thing.  The documents
README, INSTALL and USAGE are provided as pure text (for reading from the
command line) and as HTML (for reading in a browser and for printing).  They
are also available online in the <a href="../doc/index.php">documentation
section</a>.
</p>

<p>To be informed of new releases, subscribe to the <a
href="../lists/fink-announce.php">fink-announce mailinglist</a>.
</p>

<?
include "footer.inc";
?>
