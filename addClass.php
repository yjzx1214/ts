<?php

require 'conn.php';

$category = $_POST['category'];
$course = $_POST['course'];
$courseNum = $_POST['courseNum'];
$cost = $_POST['cost'];
$trainer = $_POST['trainer'];
$trainerEmail = $_POST['trainerEmail'];
$info = $_POST['info'];

$sql = "Insert Into courses (unit_id, course_name, course_number, course_fee, information, course_trainer, trainer_email) Values ('$category', '$course', '$courseNum', '$cost', '$info', '$trainer', '$trainerEmail');";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1) {
    header('location:training.php');
} else {
    echo "register fail";
}


mysqli_close($conn);
