<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programmers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the Media Page; it contains a collection of public 
//			communications from Turnstar.
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
	<title>Media</title>
</head>

<body>
    <!-- This is the nav bar file -->
    <?php include('nav.php') ?>

<main>

	<div style="text-align:center">
		<h1>Media Release</h1>
		<p>Welcome to our media release page. This is where any important news will be posted. <br> 
		These will be updated monthly or whenever important events occur.
		</p>
	</div>
    <div class="cleardiv"></div>

    <div class="mediaContainer">
		<div class="mediaTitle">
			<h3>Is Cyber really important?</h3>
		</div>
<!--
		<img class="mediaIMG" src="mountains.jpg" alt="Mountains">
-->
		<p class="mediaInfo">
			Is cyber security all it's cracked up to be?
			Studies have shown that 4/10 internet users do not know the basics of keeping safe and secure communications online. 
			This has led to a rise in cyber-crime and espionage as hackers enjoy easy pickings of unprotected personal information.
			With the rise of social media platforms like Facebook, and phone call screening apps like truecaller, it is easier than ever to have your information stolen and then used with malicious intent.
			Don't be the 40%, level up you cyber security knowledge and practices with Turnstar Strategies.
		</p>
		<div class="cleardiv"></div>
    </div>

	<div class="mediaContainer">
		<div class="mediaTitle">
			<h3>New Headquarters, with a view!</h3>
		</div>
<!--
		<img class="mediaIMG" src="mountains.jpg" alt="Mountains">
-->
		<p class="mediaInfo">
			We at Turnstar our excited to announce our new headquarters in Canberra, Australia!
			After 13 years of operating out of small, rented rooms in Brisbane, we finally have a building to call our own, and what a view!
			If you are in the nation's capital, feel free to stop by and talk to any of our qualified professionals to see what we, can offer you.
		</p>
		<div class="cleardiv"></div>
	</div>

	<div class="mediaContainer">
		<div class="mediaTitle">
			<h3>New courses coming this year</h3>
		</div>
<!--
		<img class="mediaIMG" src="mountains.jpg" alt="Mountains">
-->
		<p class="mediaInfo">
			We are thrilled to announce a whole new range of courses, to be available on our training page!
			From cyber-security to business, we have all kinds of training materials and professionals keen to upskill you or your employees.
		</p>
		<div class="cleardiv"></div>
	</div>

	<div class="mediaContainer">
		<div class="mediaTitle">
			<h3>Webite up and running</h3>
		</div>
<!--
		<img class="mediaIMG" src="mountains.jpg" alt="Mountains">
-->
		<p class="mediaInfo">
		Hello new world, as the techies say. We are thrilled to have branched out into the online domain with this, our new website! 
		</p>
		<div class="cleardiv"></div>
    </div>
</main>

<!-- This is the footer file -->
<?php include("footer.php"); ?>