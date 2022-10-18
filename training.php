<?php
header('Content-type:text/html; charset=utf-8');
// Open Session
session_start();

if (isset($_SESSION['islogin'])) {
    $login = ucfirst($_SESSION['username']);
} else {
    $login = 'Login';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <!-- This is nav bar file -->
    <?php include('nav.php') ?>

    <main>


        <div style="text-align:center">
            <h1>Training</h1>
        </div>
        <div id="myBtnContainer">
            <button class="Trainingbtn active" onclick="filterSelection('all')"> Show all</button>
            <button class="Trainingbtn" onclick="filterSelection('SS')"> Strategic Studies</button>
            <button class="Trainingbtn" onclick="filterSelection('IT')"> IT</button>
            <button class="Trainingbtn" onclick="filterSelection('Cyber')"> Cyber Security</button>
            <button class="Trainingbtn" onclick="filterSelection('Finance')"> Finance</button>
            <button class="Trainingbtn" onclick="filterSelection('Governance')"> Governance</button>
        </div>

        <div id="addbtnContainer">
            <div class=" addTrainingbtn">
				<button class="Trainingbtn" onclick="document.getElementById('id47').style.display='block'" style="width:auto;">Add Class</button>
            </div>
        </div>

<div id="id47" class="modal">
	<form class="modal-content"  method="POST">
	        <div class="imgcontainer">
				<span onclick="document.getElementById('id47').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
		<div class="container">
			<h1>Add Class</h1>
			<label for="category">Category</label>
			<input type="text" id="category" name="category" placeholder="Enter Category of class">
            <label for="course">Course</label>
			<input type="text" id="course" name="course" placeholder="Enter Course name">
            <label for="courseNum">Course Number</label>
			<input type="text" id="courseNum" name="courseNum" placeholder="Enter Course Number">
			<label for="cost">Cost</label>
			<input type="text" id="cost" name="cost" placeholder="Enter Cost of class">
            <label for="trainer">Trainer</label>
			<input type="text" id="trainer" name="trainer" placeholder="Enter Trainer of class">
            <label for="trainerEmail">Trainer Email</label>
			<input type="text" id="trainerEmail" name="trainerEmail" placeholder="Enter Email of Trainer">
			<label for="info">Information</label>
			<textarea id="info" name="info" placeholder="Enter Information about class" style="height:170px"></textarea>
			<input type="submit" value="Add Class">
            <button onclick="appendClass()">Add Class</button>
            <button type="button" class="cancelbtn" onclick="document.getElementById('id47').style.display='none'" class="cancelbtn">Cancel</button>
		</div>
	</form>
</div>

<!-- include course name number, cost price, trainer name, contact email address -->

        <div class="cleardiv"></div>

        <div class="TrainingSubTitle">
            <h3>Strategic Studies</h3>
        </div>

        <table>
            <tr>
                <td>Strategic Studing</td>
                <td>10672</td>
                <td>This is a bunch of information that i have typed up to see what is going to appear on screen</td>
                <td>$120</td>
                <td>Bob Smith</td>
                <td>Bob.Smith@TS.com</td>
                <td><input type="submit" value="Join" class="JoinClass" onclick="document.getElementById('id48').style.display='block'" style="width:auto;"></td>
                <td><input type="submit" value="Edit" class="JoinClass"></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td>Course Number</td>
                <td>Course Info</td>
                <td>Cost</td>
                <td>Trainer</td>
                <td>Trainer Email</td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td>Course Number</td>
                <td>Course Info</td>
                <td>Cost</td>
                <td>Trainer</td>
                <td>Trainer Email</td>
            </tr>
        </table>

        <div class="box">

        </div>
        <div class="TrainingSubTitle">
            <h3>IT</h3>
        </div>
        <table>
            <tr>
                <td>Course Name</td>
                <td>Course Number</td>
                <td>Course Info</td>
                <td>Cost</td>
                <td>Trainer</td>
                <td>Trainer Email</td>
            </tr>
        </table>

        <div class="TrainingSubTitle">
            <h3>Cyber Security</h3>
        </div>

        <div class="TrainingSubTitle">
            <h3>Finance</h3>
        </div>

        <div class="TrainingSubTitle">
            <h3>Governance</h3>
        </div>


        <!-- Database for Courses might change-->
        <?php
                    require 'conn.php';
                    $count = 1;

                    $sql = "select * from courses WHERE category= 'strategicStudies'";
                    $result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
                    echo"<h3>Strategic Studies</h3";
                    echo "<table id='myTable'>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>$row[u_courseName]</td>";
                        echo "<td>$row[u_courseNumber]</td>";
                        echo "<td>$row[u_courseInfo]</td>";
                        echo "<td>$row[u_courseCost]</td>";
                        echo "<td>$row[u_trainer]</td>";
                        echo "<td>$row[u_trainerEmail]</td>";
                        echo "<td><a href='#' >Join</a></td>";
                        echo "<td><a href='#' onclick=edit($count)>edit</a></td>";
                        echo "</tr>";
                        $count++;
                    }
                    echo "</table>";
                    
                    $sql = "select * from courses WHERE category= 'it'";
                    $result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
                    echo"<h3>IT</h3";
                    echo "<table id='myTable'>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>$row[u_courseName]</td>";
                        echo "<td>$row[u_courseNumber]</td>";
                        echo "<td>$row[u_courseInfo]</td>";
                        echo "<td>$row[u_courseCost]</td>";
                        echo "<td>$row[u_trainer]</td>";
                        echo "<td>$row[u_trainerEmail]</td>";
                        echo "<td><a href='#' >Join</a></td>";
                        echo "<td><a href='#' onclick=edit($count)>edit</a></td>";
                        echo "</tr>";
                        $count++;
                    }
                    echo "</table>";
        ?>






            


        <div id="id48" class="modal">
            <form class="modal-content"  method="POST">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id48').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                <div class="container">
                    <h1>Payment</h1>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name on card">
                    <label for="cardNum">Card Number</label>
                    <input type="text" id="cardNum" name="cardNum" placeholder="Enter Card Number">
                    <label for="expiration">Expiration</label>
                    <input type="text" id="expiration" name="expiration" placeholder="Enter expiration of card">
                    <label for="securityCode">Security Code</label>
                    <input type="text" id="securityCode" name="securityCode" placeholder="Enter Security Code of card">
                    <input type="submit" value="Confirm">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id48').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>


    </main>

    <?php include("footer.php"); ?>