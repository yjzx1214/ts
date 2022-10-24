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
    <title>Home</title>
</head>

<body>
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

    <!-- Title-->

    <h2>Words that will change</h2>

    <!-- Slide Show -->
    <main id="main">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="picture/img_nature_wide.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="picture/img_snow_wide.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="picture/img_mountains_wide.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="picture/img_lights_wide.jpg" style="width:100%">
                <div class="text">Caption Four</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>


        <!-- Text after Slide show-->


        <h2>Welcome to Spider Web Design</h2>
        <p>We are here to make sure your design needs are met. No fluff and fancy promises, we just deliver. Our aim is to be fast, efficient and produce the best quality products for your business.</p>
        <p>Our passionate team work endlessly to help your business harness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.</p>
        <p>At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.</p>
        <p>We always go above and beyond our customer's expectations because we treat your business as our own.</p>
        <p>We are here to make sure your design needs are met. No fluff and fancy promises, we just deliver. Our aim is to be fast, efficient and produce the best quality products for your business.</p>
        <p>Our passionate team work endlessly to help your business harness the power of the web. From social media to WordPress training we ensure you are given the skills to continue long after we leave the picture. We are never too busy for a chat and we are happy to provide advice and recommendations.</p>
        <p>At Spider Web Design we bring together our experience, energy and new age designs to provide our customers with creative and innovative solutions. Our highly skilled design professionals are committed to helping your business achieve its goals. We have a number of custom design solutions including website design, business branding and promotion, including logo and banner designs as well as social media marketing.</p>
        <p>We always go above and beyond our customer's expectations because we treat your business as our own.</p>
        <h2>Our Services</h2>
        </div>
    </main>

    <!-- This is footer file -->
    <?php include("footer.php"); ?>