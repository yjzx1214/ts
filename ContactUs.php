<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programmers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the contact us page
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
	<title>Contact Us</title>
</head>

<body>
    <!-- This is the nav bar file -->
    <?php include('nav.php') ?>

    <!-- Title-->
<main>
	<div class="container">
	  <div style="text-align:center">
		<h1>Contact Us</h1>
	  </div>
	  <div class="row">
		<div class="column">
		  <div class="contactDetailsContainer">
			<div class="contactDetails">
				<p>Contact Details</p>
				<p><i class="fa fa-envelope-open"></i> Email:<br>TurnstarStrategies@Turnstar.com.au</p>
				
				<p>PO Box 123<br> 1 Smithing Street Canberra 2831</p>
				
				&nbsp;
				<a href="https://facebook.com">Facebook</a><br>
				<a href="https://instagram.com">Instagram</a><br>
				<a href="https://twitter.com">Twitter</a><br>
				<a href="https://youtube.com">Youtube</a><br>
				&nbsp;
				
			</div>
		  </div>
		</div>
		<div class="column">
		  <form action="/action_page.php">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..">
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			<label for="subject">Subject</label>
			<input type="text" id="lname" name="subject" placeholder="Your subject">
			<label for="message">Message</label>
			<textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
			<input type="submit" value="Submit">
		  </form>
		</div>
	  </div>
	</div>
</main>

    <!-- This is the footer file -->
    <?php include("footer.php"); ?>