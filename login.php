<?php
require 'conn.php';

$username = $_POST['uname'];
$password = $_POST['psw'];

$sql = "select * from users where u_name = '$username' and u_password = '$password';";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$num = mysqli_num_rows($result);
if ($num) {
    // Open Session
    session_start();
    //save user name into session
    $_SESSION['username'] = $username;
    $_SESSION['islogin'] = 1;
    setcookie('username', '', time() - 999);
    setcookie('code', '', time() - 999);
    //redirect to home page
    header('location: index.php');
} else {
    //error password or username information
}

mysqli_close($conn);
