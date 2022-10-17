<?php


require 'conn.php';

$userid = $_POST['userid'];
$username = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

echo $phone;

$sql = "UPDATE users SET u_name='$username', u_password='$password', u_email='$email', u_phone='$phone' WHERE u_id='3';";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1) {
    header('location:admin.php');
} else {
}



mysqli_close($conn);
