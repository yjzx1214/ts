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
		    <h1>Our Partners</h1>
        <p>At Turnstar Strategies we will be supporting our Canberra clients to address any of their organisational needs. To achieve these goals we have partnered up with some australian organisations and government agencis.</p>
	</div>
        <div class="cleardiv"></div>

<div class="mediaRow">
  <div class="mediaColumn">
    <div class="content">
      <img src="picture/GOV.png" alt="GOV" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/AWP.png" alt="AWP" style="width:100%">
      <h3>My Work</h3>
   </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/ATO.png" alt="ATO" style="width:100%">
      <h3>My Work</h3>
   </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/ACMA.png" alt="ACMA" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
<div class="mediaColumn">
    <div class="content">
      <img src="picture/DTA.png" alt="DTA" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  <div class="mediaColumn">
    <div class="content">
    <img src="picture/ACCC.png" alt="ACCC" style="width:100%">
      <h3>My Work</h3>
    </div>
  </div>
  

<!-- END GRID -->
</div>
	
</main>

    <?php include("footer.php"); ?>