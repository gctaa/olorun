=======
<?php include("header.inc"); ?>
<!-- This is the php that includes the header -->
<body>
<main>
<section>
ATIC Home
<h2 class="pageTitle">Home</h2>
<!-- Page title above. <hr> is the weird break black line below. Never knew about it till now -->
<hr>

<!-- Slideshow below -->
<div id="slides" style="height: 142px;">
    <img id="slide1" class="stacked" src="static/media/projectImages/Building.jpg" alt="Building">
    <img id="slide2" class="stacked" src="static/media/projectImages/diconnecting.jpg" alt="Disconnecting">
    <img id="slide3" class="stacked" src="static/media/projectImages/measuring.jpg" alt="Measuring">
    <img id="slide4" class="stacked" src="static/media/projectImages/measuringvoltage.jpg" alt="voltage">
    <img id="slide5" class="stacked" src="static/media/projectImages/takinglux.jpg" alt="lux">
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

<!-- This is the footer -->
<?php include ("footer.inc"); ?>
