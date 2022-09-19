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
		        <h1>About Turnstar Stratergies</h1>
	</div>

    <div class="TSContainer">
        <p>We are here to make sure your design needs are met. No fluff and fancy promises, we just deliver. Our aim is to be fast, efficient and produce the best quality products for your business.</p>
        <p>Our passionate team work endlessly to help your business harness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.</p>
        <p>At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.</p>
        <p>We always go above and beyond our customer's expectations because we treat your business as our own.</p>
    </div>

    &nbsp;
    <div style="text-align:center">
        <h1>CEO Message</h1>
	</div>

    <div class="TSContainer">

        <img class="CEOimg" src="img_avatar.png" alt="Avatar">

        <p>We are here to make sure your design needs are met. No fluff and fancy promises, we just deliver. Our aim is to be fast, efficient and produce the best quality products for your business.</p>
        <p>Our passionate team work endlessly to help your business harness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.</p>
        <p>At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.</p>
        <p>We always go above and beyond our customer's expectations because we treat your business as our own.</p>
    </div>
	


</main>

    <?php include("footer.php"); ?>