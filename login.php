<?php
if(isset($_POST['LogInGo'])){
require 'conn.php';

$username = $_POST['uname'];
$password = $_POST['psw'];

$sql = "select * from users where u_name = '$username' and u_password = '$password';";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$row = mysqli_fetch_array($result);
if (count($row) > 0) {
    // Open Session
    session_start();
    //save user name into session
    $_SESSION['username'] = $row['u_name'];
    $_SESSION['userlevel'] = $row['u_level'];
    $_SESSION['islogin'] = 1;
    setcookie('username', '', time() - 999);
    setcookie('userlevel', time() - 999);
    setcookie('islogin', '', time() - 999);
    //redirect to home page
    header('location: index.php');
} else {
    //error password or username information
    echo 'username or password error';
}

mysqli_close($conn);
}
