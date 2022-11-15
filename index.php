<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programmers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the index/home page, it only contains the company name
//			and an interactive slideshow of related images.
//References: Some snippets of code were adapted from W3schools.com
//*****************************************************************
-->

<?php
	header('Content-type:text/html; charset=utf-8');
	// Open Session
	session_start();

	if (!empty($_SESSION['username'])) {
		$login = ucfirst($_SESSION['username']);
	} else {
		$login = '';
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
    <h2>Turnstar Strategies</h2>

    <!-- Slide Show -->
    <main id="main">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="picture/Consulting1.jpg" style="width:100%; Height:600px">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="picture/Consulting2.jpg" style="width:100%; Height:600px">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="picture/Consulting3.jpg" style="width:100%; Height:600px">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="picture/Consulting4.jpg" style="width:100%; Height:600px">
                <div class="text"></div>
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
		
		<!--Script for the slide show-->
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
    </main>

	<!-- This is the footer file -->
	<?php include("footer.php"); ?>