<?php
require 'conn.php';

$u_id = $_GET['u_id'];
$sql = "DELETE FROM users WHERE u_id = $u_id";
$result = mysqli_query($conn, $sql) or die("Error deleting record - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1)
    header('location:admin.php');
else
    echo "<h2>Delete failed. $numrows were deleted</h2>";
