<?php
header('Content-type:text/html; charset=utf-8');
// Open Session
session_start();

if (isset($_SESSION['islogin'])) {
    $login = ucfirst($_SESSION['username']);
} else {
    $login = 'Login';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

<main>
	<div style="text-align:center">
		    <h1>Our Partners</h1>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
        Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>

	</div>
		<!-- Portfolio Gallery Grid -->
        <div class="OurPartnersContainer">
            <h3>Strategic Communications</h3>
            <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
                <p>
                    We are here to make sure your design needs are met. No fluff and fancy promises,>
                    Our passionate team ess harness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                    ommitted to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
                </p>
        </div>

        <div class="OurPartnersContainer">
            <h3>Information Technology</h3>
            <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
            <p>
                We are here to make sure your design needs are met. No fluff and fancy promises,>
                Our passionate team woharness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                . We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
            </p>
        </div>

        <div class="cleardiv"></div>

<div class="mediaRow">
  <div class="mediaColumn">
    <div class="content">
      <img src="picture/mountains.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/lights.jpg" alt="Lights" style="width:100%">
      <h3>My Work</h3>
   </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/nature.jpg" alt="Nature" style="width:100%">
      <h3>My Work</h3>
   </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/mountains.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
<div class="mediaColumn">
    <div class="content">
      <img src="picture/mountains.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/lights.jpg" alt="Lights" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/lights.jpg" alt="Nature" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/nature.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  

<!-- END GRID -->
</div>
	
</main>

    <?php include("footer.php"); ?>