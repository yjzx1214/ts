<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the Our Partners page, It shows a grid of images of the various
//			partners to TS
//References: Some snippets of code were adapted from W3schools.com
//*****************************************************************
-->

<?php
	header('Content-type:text/html; charset=utf-8');
	// Open Session
	session_start();

	if (isset($_SESSION['username'])) {
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
    <title>Our Partners</title>
</head>

<body>
    <!-- This is the nav bar file -->
    <?php include('nav.php') ?>

<main>
	<div style="text-align:center">
		<h1>Our Partners</h1>
        <p>At Turnstar Strategies we will be supporting our Canberra clients to address any of their organisational needs. 
		To achieve these goals we have partnered up with some australian organisations and government agencis.
		</p>
	</div>
    <div class="cleardiv"></div>

	<!-- These are the partners images/logos -->
	<div class="mediaRow">
		<div class="mediaColumn">
			<div class="content">
				<img src="picture/GOV.png" alt="GOV" style="max-width: 200px; width:100%; max-height: 150px; height:100%">
				<h3></h3> <!-- Any titles below the images can go in the h3 tags -->
			</div>
		</div>
		<div class="mediaColumn">
			<div class="content">
				<img src="picture/AWP.png" alt="AWP" style="max-width: 200px; width:100%; max-height: 150px; height:100%">
				<h3></h3>
			</div>
		</div>
		<div class="mediaColumn">
			<div class="content">
				<img src="picture/ATO.png" alt="ATO" style="max-width: 200px; width:100%; max-height: 150px; height:100%">
				<h3></h3>
			</div>
		</div>
		<div class="mediaColumn">
			<div class="content">
				<img src="picture/ACMA.png" alt="ACMA" style="max-width: 200px; width:100%; max-height: 150px; height:100%">
				<h3></h3>
			</div>
		</div>
		<div class="mediaColumn">
			<div class="content">
				<img src="picture/DTA.png" alt="DTA" style="max-width: 200px; width:100%; max-height: 150px; height:100%">
				<h3></h3>
			</div>
		</div>
		<div class="mediaColumn">
			<div class="content">
				<img src="picture/ACCC.png" alt="ACCC" style="max-width: 200px; width:100%; max-height: 150px; height:100%">
				<h3></h3>
			</div>
		</div>
<!-- END GRID -->
	</div>	
</main>

	<!-- This is the footer file -->
    <?php include("footer.php"); ?>