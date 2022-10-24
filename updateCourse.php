<?php


require 'conn.php';

$course_id = $_POST['edit_course_id'];
$unit_id = $_POST['edit_category'];
$course = $_POST['edit_course'];
$courseNum = $_POST['edit_courseNum'];
$cost = $_POST['edit_cost'];
$trainer = $_POST['edit_trainer'];
$email = $_POST['edit_trainerEmail'];
$information = $_POST['edit_info'];

echo $phone;

$sql = "UPDATE courses SET unit_id='$unit_id', course_name='$course', course_number='$courseNum', course_fee='$cost', course_trainer='$trainer', trainer_email='$email', information='$information' WHERE course_id='$course_id';";
$result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
$numrows = mysqli_affected_rows($conn);
if ($numrows == 1) {
    header('location:training.php');
} else {
}



mysqli_close($conn);
