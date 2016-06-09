<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<<<<<<< HEAD:info.php
<title>Olorun Home</title>
=======
<title>Olorun Info</title>

>>>>>>> 2284c60f40e1d23825751bd5856784c8f23ebd40:info.html
<link rel="icon" href="static/media/Olorun.png">
<link rel="stylesheet" href="static/css/body.css">
<link rel="stylesheet" href="static/css/header.css">
<link rel="stylesheet" href="static/css/footer.css">
<<<<<<< HEAD:info.php
<link rel="stylesheet" href="static/css/info.css">
<link rel="stylesheet" href="static/css/slide.css">
=======
>>>>>>> 2284c60f40e1d23825751bd5856784c8f23ebd40:info.html
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
<<<<<<< HEAD:info.php


<body>
<!--this is the php that includes the header-->
<?php include("header.inc"); ?>
=======
<body>
<header>
<!-- The Logo is also the home button -->
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
>>>>>>> 2284c60f40e1d23825751bd5856784c8f23ebd40:info.html

<main>

<!-- These sections can be repeated as many times as nessisary to organize information -->
<section class="info">

<div>

<!-- This is the main picture for the page -->
<img class="left" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<p class="right">Project Olorun is a multidisciplinary effort to create a solar recharge station to help provide electricity to  communities that are too remote to facilitate a hardwired solution. </p>

<!-- This is the black line that is at the bottom --> 
<hr>

</div>
</section>

<section class="info">
<div>
<!-- This is the second picture for the page -->
<img class="right" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is the second discription of the website underneath the picture -->
<p class="left"> some of the diciplines included are: carpentry, electrical engineering, computer science and mathamatics  </p>

<!-- This is the second black line that is at the bottom --> 
<hr>

<!-- To repeat, these sections are the main break sections for information -->
</div>
</section>

<<<<<<< HEAD:info.php
<!--this is the footer-->
<?php include ("footer.inc"); ?>
=======
</main>

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
>>>>>>> 2284c60f40e1d23825751bd5856784c8f23ebd40:info.html

</body></html>
