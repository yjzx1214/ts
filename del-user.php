<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the php required to delete users
//References: Some snippets of code were adapted from W3schools.com
//*****************************************************************
-->

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
