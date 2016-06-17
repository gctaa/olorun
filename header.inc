<!DOCTYPE html>
<!--this is the inc file for the headesr it works just like html and is inserted into any body file-->
<head>
<meta charset="utf-8">
<title>Olorun Home</title>
<link rel="stylesheet" href="static/css/header.css">
<link rel="icon" href="static/media/OlorunSM.png">
<link rel="stylesheet" href="static/css/body.css">
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
<header>
<!-- the logo is also the home button -->
<a id="logo" href="index.php"><img src="static/media/Olorun.png" alt="Olorun logo"></a>

<!--this is the title of the project-->
<h1>The Olorun Project</h1>

<!--this is for the mobile functionality the navburger is the three hoorisontal lines in the top right of the mobile version-->
<div id="navb"><img src="static/media/navburger.svg" alt="navigation icon">
</div>
<div id="close" class="hide"><img src="static/media/exit.svg" alt="navigation exit button"></div>

<!--this list is for the nav bar-->
<nav id="mainNav">
  <span><a href="about.php">About Olorun</a></span>
  <span><a href="">The Project</a></span>
  <span><a href="info.php">Info</a></span>
  <span><a href="">Contact Us</a></span>
</nav>
</header>
