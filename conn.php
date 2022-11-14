<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programmers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is a connection file used to connect to the database
//References: Some snippets of code were adapted from W3schools.com
//*****************************************************************
-->

<?php
	//Connect to database
	$USER     = "root";
	$PASSWORD = "";
	$DBNAME   = "ts";
	$conn = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME)
		or die("mySQL server connection failed");
?>