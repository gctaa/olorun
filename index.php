<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Olorun Home</title>
<link rel="icon" href="static/media/Olorun.png">
<link rel="stylesheet" href="static/css/body.css">
<link rel="stylesheet" href="static/css/header.css">
<link rel="stylesheet" href="static/css/footer.css">
<link rel="stylesheet" href="static/css/info.css">
<link rel="stylesheet" href="static/css/slide.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
<script>
$(document).ready(function() {
  $('div#navb').click(function() {
    $('nav#mainNav').addClass('mobileNav');
    $('header div#navb').addClass('hide');
    $('header div#close').removeClass('hide');
  });
  $('header div#close').click(function() {
    $('nav#mainNav').removeClass('mobileNav');
    $('header div#navb').removeClass('hide');
    $('header div#close').addClass('hide');
  });
});
</script>
<script type="text/javascript">
// Written by Kevin Cole [kjcole@ubuntu.com] 2014.10.24
//
// Dynamically resize the slideshow parent div to the size of the
// auto-resizing images within it. Sadly, it appears I cannot
// force the slideshow parent div to resize any other way. Bugger.

window.onload = window.onresize = function () {
  var slides = document.getElementById("slides");
  var slide  = slides.children[0];
  slides.style.height = slide.offsetHeight + "px";
}
</script>
</head>
<<<<<<< HEAD:index.php


<body>
<!--this is the php that includes the header-->
<?php include("header.inc"); ?>

=======
<body>
<header>
<!-- The logo is also the home button -->
<a id="logo" href="index.html"><img src="static/media/Olorun.png" alt="Olorun logo"></a>

<!-- This is the title of the project -->
<h1>The Olorun Project</h1>

<!-- This is for the mobile functionality. The navburger is the three hoorisontal lines in the top right of the mobile version -->
<div id="navb"><img src="static/media/navburger.svg" alt="navigation icon">
</div>
<div id="close" class="hide"><img src="static/media/exit.svg" alt="navigation exit button"></div>

<!-- This list is for the nav bar -->
<nav id="mainNav">
  <span><a href="about.html">About Olorun</a></span>
  <span><a href="/project">the project</a></span>
  <span><a href="info.html">info</a></span>
  <span><a href="/contact">Contact Us</a></span>
</nav>
</header>
<!-- End of header. Start of body -->
>>>>>>> 2284c60f40e1d23825751bd5856784c8f23ebd40:index.html
<main>
ATIC Home
<h1 class="pageTitle">Home</h1>
<!-- Page title above. <hr> is the weird break black line below. Never knew about it till now -->
<hr>

<section>
<!-- Slideshow below -->
<div id="slides" style="height: 142px;">
    <img id="slide1" class="stacked" src="static/media/projectImages/Building.jpg">
    <img id="slide2" class="stacked" src="static/media/projectImages/diconnecting.jpg">
    <img id="slide3" class="stacked" src="static/media/projectImages/measuring.jpg">
    <img id="slide4" class="stacked" src="static/media/projectImages/measuringvoltage.jpg">
    <img id="slide5" class="stacked" src="static/media/projectImages/takinglux.jpg">
</div>

<!-- This is a discription of the website underneath the slideshow -->
<p>Welcome to the Olorun project's official website. This website will serve as a way To show the project's progress and triumphs.</p> 
</section>


<hr  class="clear">

<!-- These are the boxes that will describe the diffrent sections of the websites and links to them -->
<div class="boxes">
  <a class="setbox" href="about.php">
    <h2>About olorun</h2>
    <p>Learn more about the Olorun project</p>
  </a>
  <a class="setbox" href="/project">
    <h2>What are we doing?</h2>
    <p>Learn more about the Olorun project is currently involved in</p>
  </a>
  </div>
<div class="boxes">
  <a class="setbox" href="info.php">
    <h2>info</h2>
    <p>information about our projects</p>
  </a>
  <a class="setbox" href="/contact">
    <h2>Contact us</h2>
    <p>For more information contact us by clicking here!</p>
  </a>
</div>

</main>

<<<<<<< HEAD:index.php
<!--this is the footer-->
<?php include ("footer.inc"); ?>
=======
<!-- This is the footer. Currently we have rid of it. -->
<footer> 
<div class="valid">
<a class="button" href="http://validator.w3.org/check/referer">
<span class="bold">HTML</span> Valid!</a>
&nbsp;
<a class="button" href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
<span class="bold">CSS</span> Valid!</a>
</div>
</footer>
>>>>>>> 2284c60f40e1d23825751bd5856784c8f23ebd40:index.html

</body></html>
