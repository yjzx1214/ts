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
            <h1>Our Services</h1>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Strategic Communications</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h3 style="float:right;">Cost: $220</h3>
            <div class="cleardiv"></div>
                <p>
                    We are here to make sure your design needs are met. No fluff and fancy promises,>
                    Our passionate team ess harness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                    At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
                </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Information Technology</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h3 style="float:right;">Cost: $135</h3>
            <div class="cleardiv"></div>
            <p>
                We are here to make sure your design needs are met. No fluff and fancy promises,>
                Our passionate team woharness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
            </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Cyber Security</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h4 style="float:right;">Cost: $321</h4>
            <div class="cleardiv"></div>
            <p>
                We are here to make sure your design needs are met. No fluff and fancy promises,>
                Our passionate team work ess the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
            </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Business</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h4 style="float:right;">Cost: $256</h4>
            <div class="cleardiv"></div>
            <p>
                We are here to make sure your design needs are met. No fluff and fancy promises,>
                Our passionate team work einesthe web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
            </p>
        </div>

        <div class="serviceContainer">
            <h3 style="float:left;">Education</h3>
            <input type="submit" value="Buy" class="JoinClass" onclick="document.getElementById('id38').style.display='block'" style="width:auto; float:right;">
            <h4 style="float:right;">Cost: $150</h4>
            <div class="cleardiv"></div>
            <p>
                We are here to make sure your design needs are met. No fluff and fancy promises,>
                Our passionate team work endlessly power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.
                At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.
            </p>
        </div>
    <div class="cleardiv"></div>
    
</main>

    <?php include("footer.php"); ?>
