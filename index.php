<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

// Help the installer through the setup process
require "check.php" ;

require "top.php";
require "nav.php";

// Help the installer through the setup process
require_once "tsugi/admin/sanity-db.php";
?>
<div id="container">
<!--
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="" frameborder="0" allowfullscreen></iframe>
</div>
-->
<h1>Digitization for Everybody - Imaging</h1>
<?php if ( isset($_SESSION['id']) ) { ?>
<ul>
<li>
You can use these Creative Commons Licensed materials
such as the
<a href="lectures" target="_blank">lectures</a>
in your own classes.
You can also
<a href="tsugi/cc/export.php">export the course material</a> as an
IMS Common Cartridge®, or apply for
an IMS Learning Tools Interoperability® (LTI®)
<a href="tsugi/admin/key/index.php">key and secret</a>
 to launch the autograders from your LMS.
</li>
</ul>
<?php } else { ?>
<p>
Hello and welcome to my site where you can learn about the present state of standards and recommended
best practices for creating digital still images from photographic and graphic source materials.
<br>
You can use this web site many different ways:
<ul>
<li>
You browse my videos and course materials under <a href="lessons">Lessons</a>.  The materials
I have developed
for this class are all provided with a Creative Commons license so you can download or link to
them to incorporate them into your own teaching if you like.</li>
We take your privacy seriously on this site, you can review our
<a href="privacy">Privacy Policy</a> for more details.
</li>
</ul>
<?php } ?>
This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a>
framework to embed a learning
management system into this site and handle the autograders.
If you are interested in collaborating
to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website.
</p>
<h3>Copyright</h3>
<p>
The material on this site that is produced by Paul Conway (including audio and video)
is Copyright Creative Commons Attribution 3.0
unless otherwise indicated.
</p>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php
require "foot.php";
