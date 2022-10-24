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
    <title>Training</title>
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
            <?php
            require 'conn.php';

            $sql_unit = "select * from units";
            $result_unit = mysqli_query($conn, $sql_unit) or die("Error BOOK TYPE! - " . mysqli_error($conn));
            while ($row_unit = mysqli_fetch_array($result_unit)) {
                echo "<button class=\"Trainingbtn\"> $row_unit[unit_name] </button>";
            }
            ?>
        </div>

        <div id="addbtnContainer">
            <div class=" addTrainingbtn">
                <button class="Trainingbtn" onclick="document.getElementById('id47').style.display='block'" style="width:auto;">Add Class</button>
            </div>
        </div>

        <div id="id47" class="modal">
            <form class="modal-content" method="POST" action="./addClass.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id47').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <h1>Add Class</h1>
                    <label for="category">Category</label>
                    <?php
                    require 'conn.php';

                    $sql_unit = "select * from units";
                    $result_unit = mysqli_query($conn, $sql_unit) or die("Error BOOK TYPE! - " . mysqli_error($conn));
                    echo "<select name='category' id='category'>";
                    while ($row_unit = mysqli_fetch_array($result_unit)) {
                        echo "<option value=\"$row_unit[unit_id]\">$row_unit[unit_name]</option>";
                    }
                    echo "</select>";
                    ?>
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
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id47').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>

        <!-- include course name number, cost price, trainer name, contact email address -->

        <div class="cleardiv"></div>

        <!-- Category and course list-->
        <?php
        require 'conn.php';

        $sql = "select * from units";
        $result = mysqli_query($conn, $sql) or die("Error BOOK TYPE! - " . mysqli_error($conn));
        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='TrainingSubTitle'>";
            echo "<h3>$row[unit_name]</h3>";
            echo "</div>";
            echo " <table class=\"trainingTable\">";
            $sql_course = "SELECT * FROM courses WHERE unit_id = $row[unit_id]";
            $result_course = mysqli_query($conn, $sql_course) or die("Error BOOK TYPE! - " . mysqli_error($conn));
            while ($row_course = mysqli_fetch_array($result_course)) {
                echo "<tr>";
                echo "<td class=\"classFont\">$row_course[course_name]</td>";
                echo "<td>$row_course[course_number]</td>";
                echo "<td>$row_course[course_fee]</td>";
                echo "<td>$row_course[information]</td>";
                echo "<td>$row_course[course_trainer]</td>";
                echo "<td>$row_course[trainer_email]</td>";
                echo "<td><input type=\"submit\" value=\"Join\" class=\"JoinClass\" onclick=\"document.getElementById('id48').style.display='block'\" style=\"width:auto;\"></td>";
                echo "<td><input type=\"submit\" value=\"Edit\" class=\"JoinClass\"></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<div class='box'>";
            echo "</div>";
        }

        ?>


<!-- modal = id49 -->
<!-- Edit Class -->

        <div id="id49" class="modal">
            <form class="modal-content"  method="POST">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id49').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                <div class="container">
                    <h1>Edit Class</h1>
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
                    <input type="submit" value="Edit Class">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id49').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>





        <!-- course payment page -->
        <div id="id48" class="modal">
            <form class="modal-content" method="POST">
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