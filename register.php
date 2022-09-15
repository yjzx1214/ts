<?php
require 'conn.php';

$username = $_POST['uname'];
$password = $_POST['psw'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "Insert Into users (u_name, u_password, u_email, u_phone, u_level) Values ('$username', '$password', '$email', '$phone', '3');";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1) {
    echo "register success";
    header('location:index.php');
} else {
    echo "register fail";
}


mysqli_close($conn);
