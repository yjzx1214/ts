<?php
header('Content-type:text/html; charset=utf-8');
// Open Session
session_start();

if (isset($_SESSION['username'])) {
    $user_id = $_SESSION['user_id'];
    $login = ucfirst($_SESSION['username']);
    $level = $_SESSION['user_level'];
} else {
    $user_id = $login =  $level = '';
}
?>
<?php include 'conn.php';

// get courses and units from database
$sql_unit = "select * from units";
$result_unit = mysqli_query($conn, $sql_unit);
$unit_list = mysqli_fetch_all($result_unit, MYSQLI_ASSOC);
$sql_course = "select * from courses";
$result_course = mysqli_query($conn, $sql_course);
$course_list = mysqli_fetch_all($result_course, MYSQLI_ASSOC);

// if user has login, check the enrollment history
if (!empty($user_id)) {
    $sql_enrollment = "SELECT * FROM enrollment WHERE u_id = '$user_id'";
    $result_enrollment = mysqli_query($conn, $sql_enrollment);
    $enrollment_list = mysqli_fetch_all($result_enrollment, MYSQLI_ASSOC);
}

// Add new course
if (!empty($_POST['addCourse'])) {
    $category = $_POST['category'];
    $course = $_POST['course'];
    $courseNum = $_POST['courseNum'];
    $cost = $_POST['cost'];
    $trainer = $_POST['trainer'];
    $trainerEmail = $_POST['trainerEmail'];
    $info = $_POST['info'];

    $sql = "INSERT INTO courses (unit_id, course_name, course_number, course_fee, information, course_trainer, trainer_email) VALUES ('$category', '$course', '$courseNum', '$cost', '$info', '$trainer', '$trainerEmail');";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_affected_rows($conn);
    if ($numrows == 1) {
        header('location:training.php');
    } else {
        echo "Add course fail";
    }
    // Edit existing course
} elseif (!empty($_POST['editCourse'])) {
    $course_id = $_POST['edit_course_id'];
    $unit_id = $_POST['edit_category'];
    $course = $_POST['edit_course'];
    $courseNum = $_POST['edit_courseNum'];
    $cost = $_POST['edit_cost'];
    $trainer = $_POST['edit_trainer'];
    $email = $_POST['edit_trainerEmail'];
    $information = $_POST['edit_info'];

    $sql = "UPDATE courses SET unit_id='$unit_id', course_name='$course', course_number='$courseNum', course_fee='$cost', course_trainer='$trainer', trainer_email='$email', information='$information' WHERE course_id='$course_id';";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_affected_rows($conn);
    if ($numrows == 1) {
        header('location:training.php');
    } else {
        echo "Edit course fail";
    }
    //Join course
} elseif (!empty($_POST['joinCourse'])) {
    $course_id = $_POST['join_course_id'];
    $sql = "INSERT INTO enrollment (u_id, course_id) VALUES ('$user_id', '$course_id');";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_affected_rows($conn);
    if ($numrows == 1) {
        header('location:training.php');
    } else {
        echo "Join course fail";
    }
} elseif (!empty($_POST['cancel_enrollment_id'])) {
    $cancel_enrollment_id = $_POST['cancel_enrollment_id'];
    $sql = "DELETE FROM enrollment WHERE enrol_id = '$cancel_enrollment_id'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_affected_rows($conn);
    if ($numrows == 1) {
        header('location:training.php');
    } else {
        echo "Cancel course fail";
    }
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
            <?php foreach ($unit_list as $unit) : ?>
                <button class="Trainingbtn"> <?php echo $unit['unit_name'] ?> </button>
            <?php endforeach; ?>
        </div>

        <div id="addbtnContainer">
            <div class=" addTrainingbtn">
                <button class="Trainingbtn" onclick="document.getElementById('id47').style.display='block'" style="width:auto;">Add Course</button>
            </div>
        </div>

        <div id="id47" class="modal">
            <form class="modal-content animate" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
                    <input type="submit" value="Add Course" name="addCourse">
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
                            <td class="classFont" id="<?php echo $course['course_id'] ?>name"><?php echo $course['course_name'] ?></td>
                            <td id="<?php echo $course['course_id'] ?>number"><?php echo $course['course_number'] ?></td>
                            <td id="<?php echo $course['course_id'] ?>fee"><?php echo $course['course_fee'] ?></td>
                            <td id="<?php echo $course['course_id'] ?>info"><?php echo $course['information'] ?></td>
                            <td id="<?php echo $course['course_id'] ?>trainer"><?php echo $course['course_trainer'] ?></td>
                            <td id="<?php echo $course['course_id'] ?>email"><?php echo $course['trainer_email'] ?></td>
                            <?php if (!empty($login) && !empty($level)) : ?>
                                <!-- Flag for check if user has joined -->
                                <?php $is_join = false; ?>
                                <?php foreach ($enrollment_list as $enrollment) : ?>
                                    <!-- If enrollment list have record, course list display 'Quit' button -->
                                    <?php if ($enrollment['course_id'] == $course['course_id']) : ?>
                                        <!-- create a form for cancel enrollment -->
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                            <input type="hidden" id="cancel_enrollment_id" name="cancel_enrollment_id" value="<?php echo $enrollment['enrol_id'] ?>">
                                            <td><input type="submit" value="Cancel" name="cancelCourse" class="JoinClass" style="width:auto;"></td>
                                        </form>
                                        <?php $is_join = true; ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <!-- If enrollment list does not have record, course list display 'Join' button -->
                                <?php if (!$is_join) : ?>
                                    <td><input type="submit" value="Join" class="JoinClass" onclick="join_course(<?php echo $course['course_id'] ?>)" style="width:auto;"></td>
                                <?php endif; ?>
                                <!-- If is admin, display 'Edit' button -->
                                <?php if ($level == 1) : ?>
                                    <td><input type="submit" value="Edit" class="JoinClass" onclick="edit_course(<?php echo $course['course_id'] ?>, <?php echo $course['unit_id'] ?>)" style="width:auto;"></td>
                                <?php endif; ?>
                            <?php endif; ?>

                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
            <div class='box'>
            </div>
        <?php endforeach; ?>

        <!-- Edit Class -->
        <div id="id49" class="modal">
            <form class="modal-content animate" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id49').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <h1>Edit Class</h1>
                    <label for="category">Category</label>
                    <select name='edit_category' id='edit_category'>
                        <?php foreach ($unit_list as $unit) : ?>
                            <option value="<?php echo $unit['unit_id'] ?>" id="<?php echo $unit['unit_id'] ?>unit"><?php echo $unit['unit_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" id="edit_course_id" name="edit_course_id">
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
                    <input type="submit" value="Edit Course" name="editCourse">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id49').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>

        <!-- course payment page -->
        <div id="id48" class="modal">
            <form class="modal-content animate" method="POST">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id48').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <h1>Payment</h1>
                    <input type="hidden" id="join_course_id" name="join_course_id">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name on card">
                    <label for="cardNum">Card Number</label>
                    <input type="text" id="cardNum" name="cardNum" placeholder="Enter Card Number">
                    <label for="expiration">Expiration</label>
                    <input type="text" id="expiration" name="expiration" placeholder="Enter expiration of card">
                    <label for="securityCode">Security Code</label>
                    <input type="text" id="securityCode" name="securityCode" placeholder="Enter Security Code of card">
                    <input type="submit" value="Confirm" name="joinCourse">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('id48').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
    </main>

    <?php include("footer.php"); ?>

    <script>
        // display existing course information
        function edit_course(course_id, unit_id) {
            document.getElementById('id49').style.display = 'block';
            document.getElementById('edit_course').value = document.getElementById(course_id + 'name').innerHTML;
            document.getElementById('edit_courseNum').value = document.getElementById(course_id + 'number').innerHTML;
            document.getElementById('edit_cost').value = document.getElementById(course_id + 'fee').innerHTML;
            document.getElementById('edit_trainer').value = document.getElementById(course_id + 'trainer').innerHTML;
            document.getElementById('edit_trainerEmail').value = document.getElementById(course_id + 'email').innerHTML;
            document.getElementById('edit_info').value = document.getElementById(course_id + 'info').innerHTML;
            document.getElementById('edit_course_id').value = course_id;
            document.getElementById(unit_id + 'unit').selected = true;
        }

        // set join course id to payment page
        function join_course(course_id) {
            document.getElementById('id48').style.display = 'block';
            document.getElementById('join_course_id').value = course_id;
        }
    </script>