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
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

<main>

	<div style="text-align:center">
		<h1>Media Release</h1>
		<p>Welcome to our media release page. This is where any important new news will be posted. These will be updated monthly</p>
	</div>
    <div class="cleardiv"></div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>Title</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
		Is cyber security all it's cracked up to be?
		Studies have shown the 4/10 internet users do not know the basics of keeping safe and secure communications online. 
		This has lead to a rise in cyber crime and espionage as hackers enjoy easily pickings of unprotected personal information.
		With the rise of social media platforms like facebook, and phonecall screening apps like truecaller, it is easier then ever to have your information stolen and then used with malicious intent.
		Don't be the 40%, level up you cyber security knowledge and practices with Turnstar Strategies.
      </p>
      <div class="cleardiv"></div>
    </div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>New Headquarters, with a view!</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
		We at Turnstar our excited to announce our new headquarters in Canberra, Australia!
		After 13 years of opperating out of small rented rooms in brisbane, we finally have a building to call our own, and what a view!
		If you are in the nations capital, feel free to stop by and talk to any of our qualified professionals to see what we, can offer you.
      </p>
      <div class="cleardiv"></div>
    </div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>New courses</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
		We are thrilled to announce a whole new range of courses, available on our training page!
		From cyber security to business, we have all kinds of training materials and perfessions keen to upskill you or your employees.
      </p>
      <div class="cleardiv"></div>
    </div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>Webite up and running</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
	  Hello new world, as the techies say. We are thrilled to have branched out into the online domain with this, our new website! 
      </p>
      <div class="cleardiv"></div>
    </div>

</main>

    <?php include("footer.php"); ?>