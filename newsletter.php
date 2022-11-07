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
    <title>Newsletter</title>
</head>

<body>
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

    <main>
        <div style="text-align:center">
            <h1>News Letter</h1>
            <p>Subscribe to newsletter</p>
        </div>

        <div class="newsletterContainer">
            <div class="newsletterContent">
                <form action="subscribe.php" method="POST">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name..">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Your Email..">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>


    </main>

    <?php include("footer.php"); ?>