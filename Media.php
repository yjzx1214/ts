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
    <p>a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words a Bunch of words </p>
  </div>
    <div class="cleardiv"></div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>Title</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
        We are here to make sure your design needs are met. No fluff and fancy promises,>
        Our passionate team ess WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
        At Spiderve solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
      </p>
      <div class="cleardiv"></div>
    </div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>Title</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
        We are here to make sure your design needs are met. No fluff and fancy promises,>
        Our passionate team ess WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
        At Spiderve solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
      </p>
      <div class="cleardiv"></div>
    </div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>Title</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
        We are here to make sure your design needs are met. No fluff and fancy promises,>
        Our passionate team ess WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
        At Spiderve solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
      </p>
      <div class="cleardiv"></div>
    </div>

    <div class="mediaContainer">
      <div class="mediaTitle">
        <h3>Title</h3>
      </div>
      <img class="mediaIMG" src="mountains.jpg" alt="Mountains">
      <p class="mediaInfo">
        We are here to make sure your design needs are met. No fluff and fancy promises,>
        Our passionate team ess WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
        At Spiderve solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
      </p>
      <div class="cleardiv"></div>
    </div>

</main>

    <?php include("footer.php"); ?>