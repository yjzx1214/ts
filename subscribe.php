<?php
require 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "Insert Into subscriptions (s_name, s_email) Values ('$name', '$email');";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1) {
    header('location:index.php');
} else {
    echo "subscribe fail";
}

?>
