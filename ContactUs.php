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
				<p><i class="fa fa-envelope-open"></i> Email:<br>Qwerty@Gmail.com</p>
				
				<p>PO Box 647<br>Smithing WA 6004</p>
				
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

    <!-- This is footer file -->
    <?php include("footer.php"); ?>