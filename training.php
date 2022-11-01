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
<?php include 'conn.php';

$sql_unit = "select * from units";
$result_unit = mysqli_query($conn, $sql_unit);
$unit_list = mysqli_fetch_all($result_unit, MYSQLI_ASSOC);
$sql_course = "select * from courses";
$result_course = mysqli_query($conn, $sql_course);
$course_list = mysqli_fetch_all($result_course, MYSQLI_ASSOC);
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
            <?php foreach ($unit_list as $unit) : ?>
                <button class="Trainingbtn"> <?php echo $unit['unit_name'] ?> </button>
            <?php endforeach; ?>
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
                    <select name='category' id='category'>
                        <?php foreach ($unit_list as $unit) : ?>
                            <option value="<?php echo $unit['unit_id'] ?>"><?php echo $unit['unit_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
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
        <?php foreach ($unit_list as $unit) : ?>
            <div class='TrainingSubTitle'>
                <h3><?php echo $unit['unit_name'] ?></h3>
            </div>
            <table class="trainingTable">
                <?php foreach ($course_list as $course) : ?>
                    <?php if ($unit['unit_id'] == $course['unit_id']) : ?>
                        <tr>
                            <td class="classFont"><?php echo $course['course_name'] ?></td>
                            <td><?php echo $course['course_number'] ?></td>
                            <td><?php echo $course['course_fee'] ?></td>
                            <td><?php echo $course['information'] ?></td>
                            <td><?php echo $course['course_trainer'] ?></td>
                            <td><?php echo $course['trainer_email'] ?></td>
                            <td><input type="submit" value="Join" class="JoinClass" onclick="document.getElementById('id48').style.display='block'" style="width:auto;"></td>
                            <td><input type="submit" value="Edit" class="JoinClass" onclick="edit_course()" style="width:auto;"></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
            <div class='box'>
            </div>
        <?php endforeach; ?>


        <!-- modal = id49 -->
        <!-- Edit Class -->

        <div id="id49" class="modal">
            <form class="modal-content" method="POST" action="./updateCourse.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id49').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <h1>Edit Class</h1>
                    <label for="category">Category</label>
                    <select name='edit_category' id='edit_category'>
                        <?php foreach ($unit_list as $unit) : ?>
                            <option value="<?php echo $unit['unit_id'] ?>"><?php echo $unit['unit_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" id="edit_course_id" name="edit_course_id" hidden>
                    <label for="course">Course</label>
                    <input type="text" id="edit_course" name="edit_course" placeholder="Enter Course name">
                    <label for="courseNum">Course Number</label>
                    <input type="text" id="edit_courseNum" name="edit_courseNum" placeholder="Enter Course Number">
                    <label for="cost">Cost</label>
                    <input type="text" id="edit_cost" name="edit_cost" placeholder="Enter Cost of class">
                    <label for="trainer">Trainer</label>
                    <input type="text" id="edit_trainer" name="edit_trainer" placeholder="Enter Trainer of class">
                    <label for="trainerEmail">Trainer Email</label>
                    <input type="text" id="edit_trainerEmail" name="edit_trainerEmail" placeholder="Enter Email of Trainer">
                    <label for="info">Information</label>
                    <textarea id="edit_info" name="edit_info" placeholder="Enter Information about class" style="height:170px"></textarea>
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

    <script>
        function edit_course(unit_id, name, number, fee, information, trainer, email, course_id) {
            document.getElementById('id49').style.display = 'block';
            document.getElementById('edit_course').value = name;
            document.getElementById('edit_courseNum').value = number;
            document.getElementById('edit_cost').value = fee;
            document.getElementById('edit_trainer').value = trainer;
            document.getElementById('edit_trainerEmail').value = email;
            document.getElementById('edit_info').value = information;
            document.getElementById('edit_course_id').value = course_id;
        }
    </script>