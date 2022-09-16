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
		<h1>Media</h1>
	</div>
		
			<!-- Portfolio Gallery Grid -->
	<div class="mediaRow">
	  <div class="mediaColumn">
		<div class="content">
		  <img src="mountains.jpg" alt="Mountains" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	  <div class="mediaColumn">
		<div class="content">
		<img src="lights.jpg" alt="Lights" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	  <div class="mediaColumn">
		<div class="content">
		<img src="nature.jpg" alt="Nature" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	  <div class="mediaColumn">
		<div class="content">
		<img src="mountains.jpg" alt="Mountains" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	<div class="mediaColumn">
		<div class="content">
		  <img src="mountains.jpg" alt="Mountains" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	  <div class="mediaColumn">
		<div class="content">
		<img src="lights.jpg" alt="Lights" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	  <div class="mediaColumn">
		<div class="content">
		<img src="lights.jpg" alt="Nature" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	  <div class="mediaColumn">
		<div class="content">
		<img src="nature.jpg" alt="Mountains" style="width:100%">
		  <h3>My Work</h3>
		  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
		</div>
	  </div>
	</div>
</main>

    <?php include("footer.php"); ?>