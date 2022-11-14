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
    <title>The TS</title>
</head>

<body>
    <!-- This is the nav bar file -->
    <?php include('nav.php') ?>

    <main>
        <div style="text-align:center">
            <h1>About Turnstar Stratergies</h1>
        </div>

        <div class="TSContainer">
            <p>We at Turnstar Strategies are dedicated to providing the best possible security solutions, training and consolation services.</p>
            <p>With decades of experience our professional team are more the capable to provide solutions for any budding business, group or individual. By staying on the forefront of modern tech we ensure that our solutions will last well into the future.</p>
            <p>At Turnstar, excellence is the name of the game. We not only provide some of the best training money can buy, but also a new way of thinking. Just talk to any of our friendly and perfessional staff and you will see why we are rated number one by our peers.</p>
            <p>So if you are here for consoltation or training on strategic communications, IT, cyber security, business or education, you have come to the right place.</p>
			<p>So what are you waiting for? A whole new world is just beyond your finger tips.</p>
        </div>

        <br>
        <div style="text-align:center">
            <h1>CEO Message</h1>
        </div>

        <div class="TSContainer">

            <img class="CEOimg" src="img_avatar.png" alt="Avatar">

            <p>I have been the effective CEO of Turnstar Strategies since the begining, and in that time I have seen it grow from a humble three person operation into the booming business it is today.</p>
            <p>For 13 years we have been providing the highest quality services while growing stronger as a team, and as a family. With our new headquarters located in Canberra we are always available for a friendly chat or advice on the services we offer.</p>
            <p>With the changes we have seen in the world recently, it has never been more important to stay at the forefront of the knowledge we provide.</p>
            <p>It is with great honor and pride that we at Turnstar Strategies will continue to serve the public, well into the future, and beyond,</p>
			<p>John Smith - CEO</p>
        </div>

		<!-- clear div class to reset the floats -->
        <div class="cleardiv"></div>
    </main>

    <!-- This is the footer file -->
    <?php include("footer.php"); ?>