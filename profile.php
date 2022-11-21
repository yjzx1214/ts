<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programmers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the profile page. It displays a user's profile information and lets them make changes.
//References: Some snippets of code were adapted from W3schools.com
//*****************************************************************
-->

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
		header('location:index.php');
	}
?>

<?php
	include 'conn.php';

	if (!empty($user_id)) {
		$sql_sub = "SELECT * FROM subscriptions WHERE u_id = '$user_id'";
		$result_sub = mysqli_query($conn, $sql_sub);
		$sub = mysqli_fetch_all($result_sub, MYSQLI_ASSOC);

		$sql_enrollment = "SELECT * FROM enrollment WHERE u_id = '$user_id'";
		$result_enrollment = mysqli_query($conn, $sql_enrollment);
		$enrollment_list = mysqli_fetch_all($result_enrollment, MYSQLI_ASSOC);

		$sql_course = "SELECT * FROM courses WHERE course_id IN ";
		$enrol_history = '';
		if (count($enrollment_list) > 0) {
			// if user have enrolled any course, combine the course_id
			for ($i = 0; $i < count($enrollment_list); $i++) {
				if (count($enrollment_list) == 1) {
					$enrol_history = '(' . $enrollment_list[$i]['course_id'] . ')';
				} else {
					if ($i == 0) {
						$enrol_history = '(' . $enrollment_list[$i]['course_id'];
					} elseif ($i == count($enrollment_list) - 1) {
						$enrol_history = $enrol_history . ',' . $enrollment_list[$i]['course_id'] . ')';
					} else {
						$enrol_history = $enrol_history . ',' . $enrollment_list[$i]['course_id'];
					}
				}
			}
			$sql_course = $sql_course . $enrol_history;
			$result_course = mysqli_query($conn, $sql_course);
			$course_list = mysqli_fetch_all($result_course, MYSQLI_ASSOC);
		}
	}

	// Deal form request
	// Cancel course
	if (!empty($_POST['cancelCourse'])) {
		$cancel_course_id = $_POST['cancel_course_id'];
		$sql = "DELETE FROM enrollment WHERE u_id = '$user_id' AND course_id = '$cancel_course_id'";
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_affected_rows($conn);
		if ($numrows == 1) {
			header('location:profile.php');
		} else {
			echo "Cancel course fail";
		}
	} elseif (!empty($_POST['sub'])) {
		$u_id = $_POST['u_id'];
		$sql = "INSERT INTO subscriptions (u_id) VALUES ('$u_id')";
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_affected_rows($conn);
		if ($numrows == 1) {
			header('location:profile.php');
		} else {
			echo "subscription fail";
		}
	} elseif (!empty($_POST['unsub'])) {
		$u_id = $_POST['u_id'];
		$sql = "DELETE FROM subscriptions WHERE u_id = '$u_id'";
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_affected_rows($conn);
		if ($numrows == 1) {
			header('location:profile.php');
		} else {
			echo "unsubscription fail";
		}
	} elseif (!empty($_POST['update'])) {
		$username = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$sql = "UPDATE users SET u_name='$username', u_password='$password', u_email='$email', u_phone='$phone' WHERE u_id='$user_id';";
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_affected_rows($conn);
		if ($numrows == 1) {
			// This is my solution to the create user bug-------------------------
			// It does force the user to re-sign in however
			// So if there is a better solution feel free to change it
			session_destroy();
			//--------------------------------------------------------------------
			header('location:profile.php');
		} else {
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
    <title><?php echo $login ?>'s Profile</title>
</head>

<body>
    <!-- This is the nav bar file -->
    <?php include('nav.php') ?>

    <main>
        <div style="text-align:center">
            <h1><?php echo $login ?>'s Profile</h1>
        </div>

        <div class="profileContainer">
            <div class="content">
                <div class="profileRow">
                    <div class="profileColumn">
                        <img src="picture/img_avatar.png" alt="Avatar" style="width:50%">

                        <h3>Subscribed to Newsletter</h3>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <input type="hidden" value="<?php echo $user_id ?>" name="u_id">
                            <?php if (count($sub) > 0) : ?>
                                <input type="submit" class="submitButton" value="Unsubscribe" name="unsub">
                            <?php else : ?>
                                <input type="submit" class="submitButton" value="subscribe" name="sub">
                            <?php endif; ?>
                        </form>
                    </div>

                    <?php
						include 'conn.php';
						$sql_user = "SELECT * FROM users WHERE u_name = '$login'";
						$result_user = mysqli_query($conn, $sql_user);
						$user = mysqli_fetch_row($result_user);
                    ?>
                    <div class="profileColumn">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name.." value="<?php echo $user[1] ?>">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Your Password.." value="<?php echo $user[2] ?>">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Your Email.." value="<?php echo $user[3] ?>">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="Your Phone number.." value="<?php echo $user[4] ?>">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Your Address number.." value="<?php echo $user[5] ?>">
                            <!-- only after clicked edit will update appear and will save the information-->
                            <input type="submit" class="submitButton" value="Update" name="update">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses the user has joined -->
        <div class="TrainingSubTitle">
            <h3>Courses</h3>
        </div>

        <table class="trainingTable">
            <!-- if does not have any courses have been enrolled -->
            <?php if ($enrollment_list == null) : ?>
                <tr>
                    <td>Do not have any courses</td>
                </tr>
            <?php else : ?>
                <!-- display enrolled courses -->
                <?php foreach ($course_list as $course) : ?>
                    <tr>
                        <td class="classFont"><?php echo $course['course_name'] ?></td>
                        <td><?php echo $course['course_number'] ?></td>
                        <td><?php echo $course['information'] ?></td>
                        <td><?php echo $course['course_fee'] ?></td>
                        <td><?php echo $course['course_trainer'] ?></td>
                        <td><?php echo $course['trainer_email'] ?></td>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <!-- hidden course_id for cancel course -->
                            <input type="hidden" id="cancel_course_id" name="cancel_course_id" value="<?php echo $course['course_id'] ?>">
                            <td><input type="submit" name="cancelCourse" value="Cancel Course" class="JoinClass" style="width:auto;"></td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            <?php endif ?>
        </table>
    </main>
	
<!-- This is the footer file -->
<?php include("footer.php"); ?>