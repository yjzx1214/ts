<?php
if(isset($_POST['SignUpGo'])){
	
require 'conn.php';

$username = $_POST['uname'];
$password = $_POST['psw'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "Insert Into users (u_name, u_password, u_email, u_phone, u_level) Values ('$username', '$password', '$email', '$phone', '1');";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1) {
    // Open Session
    session_start();
    //save user name into session
    $_SESSION['username'] = $username;
    $_SESSION['userlevel'] = 1;
    $_SESSION['islogin'] = 1;
    setcookie('username', '', time() - 999);
    setcookie('userlevel', time() - 999);
    setcookie('islogin', '', time() - 999);
    //redirect to home page
    header('location:index.php');
} else {
    echo "register fail";
}


mysqli_close($conn);
}
