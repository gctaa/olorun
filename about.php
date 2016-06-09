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


<body>
<!--this is the php that includes the header-->
<?php include("header.inc"); ?>



<main>
<!--these sections can be repeated as many times as nessisary to show more information-->
<section class="info">

<!--this is the main picture for the page-->
<img class="left" src="static/media/projectImages/acc_sign.jpg"/>

<!--this is a discription of the website underneath the picture/slideshow-->
<p class="right">Project Olorun is a multidisciplinary effort to create a solar recharge station to help provide electricity to  communities that are too remote to facilitate a hardwired solution. </p>

<!--this is the black line that is at the bottom--> 
<hr>
</section>
<section class="info">

<!--this is the main picture for the page-->
<img class="right" src="static/media/projectImages/acc_sign.jpg"/>

<!--this is a discription of the website underneath the picture/slideshow-->
<p class="left"> some of the diciplines included are: carpentry, electrical engineering, computer science and mathamatics  </p>

<!--this is the black line that is at the bottom--> 
<hr>
</section>
</main>

<!--this is the footer-->
<?php include ("footer.inc"); ?>


</body></html>
