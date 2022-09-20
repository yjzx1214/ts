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
      <div style="text-align:center">
            <h1>Training</h1>
        </div>
        <div class="TrainingContainer">
            <div class="TrainingContent">
                <div class="TrainingImg">
                    <img class="serviceIMG" src="picture/mountains.jpg" alt="Mountains">
                </div>

                <p>
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                    Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
                </p>
                <input type="submit" value="Submit" class="JoinClass">
                <input type="submit" value="Change" class="JoinClass">
            </div>

        </div>


</main>

    <!-- This is footer file -->
    <?php include("footer.php"); ?>