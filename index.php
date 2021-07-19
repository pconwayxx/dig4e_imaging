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

<div id="grid-container" style="display: grid; grid-template-columns: 15% 85%;">
<img src="https://image.dig4e.com/images/imaginglogo.png" alt="Dig4E Imaging Logo" style = "width: 8em; height: 8em; grid-column: 1/2; border: 10 px; margin: 20px;"/>
<h1 style="color: #9e4f00; font-weight: 600; font-family: Raleway, Sans-Serif; font-size: 3em;grid-column: 2/2; padding-top: 1em;">Digitization for Everybody - Imaging</h1>
</div>
<div id="container" style="dispalay: container; background-color: #9e4f00; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="container" style= "color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px; margin-bottom: 1em;" >
In the Dig4E Imaging module, you will learn about the present state of standards and recommended best practices for creating digital still images from photographic and graphic source materials.  In general, these same standards also apply to textual and other “flat” cultural heritage resources.  In most instances, the underlying technical standards for imaging are well-established and stable.  Imaging professionals, however, continue to debate the nuances of applying standards and guidelines in practice and may disagree on trends regarding emerging technologies.
</div>
<div id="container" style="dispalay: container; background-color: #9e4f00; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="grid-container" style="display: grid; grid-template-columns: 30% 70%;">
<iframe width="300" height="200" src="https://www.youtube.com/embed/XHOmBV4js_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p style="color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px;grid-column: 2/2; padding-top: 1em;">This video introduces the Imaging Module in the broader context of the risks and challenges to cultural heritage preservation. The primary points are to call for action, with an emphasis on the critical value of archival quality imaging processes and the complexities of image literacy.  The video also introduces the top level learning goals for the Imaging module.</p>
</div>
<div id="container" style="dispalay: container; background-color: #9e4f00; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="grid-container" style ="display: grid; grid-template-columns: 50% 50%; grid-row-gap: 1em;">
<a href="https://image.dig4e.com/lessons"><img src="https://image.dig4e.com/images/lessons.png" alt="Lessons Logo" style= "width: 10em; height 10em; position: inline; margin-left: 35%; margin-right: 35%; hover: #9E4F002E"/></a>
<a href="https://image.dig4e.com/assignments"><img src="https://image.dig4e.com/images/quizzes.png" alt="Quizzes Logo" style= "width: 10em; height 10em; position: inline; margin-left: 35%; margin-right: 50%;"/></a>
<a href="https://image.dig4e.com/lessons" style="color: #00274C; font-family: Raleway, Sans-Serif; font-weight: 500; font-size: 2em; position: inline; margin-left: 39%; margin-right: 46%; grid-column: 1; grid-row: 2">Lessons</a>
<a href="https://image.dig4e.com/assignments" style="color: #00274C; font-family: Raleway, Sans-Serif; font-weight: 500; font-size: 2em; position: inline; margin-left: 39%; margin-right: 46%; grid-column: 2; grid-row: 2">Quizzes</a>
</div>
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
