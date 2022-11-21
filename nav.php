<!--
//*****************************************************************
//Project: Turnstar Strategies Web Application
//Programmers: Paul Gardiner, Dylan Kirby, Jason Yu
//Date: 14/11/2022
//Software: Notepad++, Visual Studio Code
//Platform: Microsoft Windows 10 Home
//Purpose: This is the navigation bar that is included at the top of every page.
//			It contains links to all the other pages, a drop down menu, a mobile view.
//			and a user account system.
//References: Some snippets of code were adapted from W3schools.com
//*****************************************************************
-->

<?php
	require 'conn.php';

	if (!empty($_POST['login'])) {
		$username = $_POST['uname'];
		$password = $_POST['psw'];

		$sql = "select * from users where u_name = '$username' and u_password = '$password';";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		if (!empty($row)) {
			// Open Session
			session_start();
			//save user name into session
			$_SESSION['user_id'] = $row['u_id'];
			$_SESSION['username'] = $row['u_name'];
			$_SESSION['user_level'] = $row['u_level'];

			//redirect to home page
			header('location: index.php');
		} else {
			//error password or username information
			echo '<script>alert("Username or Password Error!")</script>';
		}
	} elseif (!empty($_POST['register'])) {
		$username = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_SPECIAL_CHARS);
		$password = $_POST['psw'];
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);

		$sql_check = "SELECT * FROM users WHERE u_name='$username'";
		$result_check = mysqli_query($conn, $sql_check);
		if (mysqli_num_rows($result_check) > 0) {
			echo 'user existing';
			// need a page display or window
		} else {
			$sql_register = "INSERT INTO users (u_name, u_password, u_email, u_phone, u_address, u_level) VALUES ('$username', '$password', '$email', '$phone', '$address', '3');";
			if (mysqli_query($conn, $sql_register)) {
				$sql_id = "SELECT max(u_id) FROM users;";
				$result_id = mysqli_query($conn, $sql_id);
				$row_id = mysqli_fetch_array($result_id);

				// Open Session
				session_start();
				//save user name into session
				$_SESSION['user_id'] = $row_id['max(u_id)'];
				$_SESSION['username'] = $username;
				$_SESSION['user_level'] = 3;

				//redirect to home page
				header('location:index.php');
			} else {
				echo 'Error ' . mysqli_errno($conn);
			}
		}
	} elseif (!empty($_POST['signOut'])) {
		session_start();
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['user_level']);
		// Finally, destroy the session.    
		session_destroy();
		header('location:index.php');
	}
?>

	<div class="navbar">
		<a href="Index.php" class="home">Turnstar<br>Strategies</a>
		<div class="verticalLine"></div>
		<a href="TheTs.php" class="linkHover">The Ts</a>
		<a href="OurPartners.php" class="linkHover">Our Partners</a>
		<a href="Training.php" class="linkHover">Training</a>
		<a href="OurServices.php" class="linkHover">Our Services</a>
		<a href="Media.php" class="linkHover">Media</a>
		<a href="Newsletter.php" class="linkHover">Newsletter</a>
		<a href="ContactUs.php" class="linkHover">Contact Us</a>

		<!-- This is the admin only button-->
		<?php
			if (!empty($_SESSION['user_level'])) {
				if ($_SESSION['user_level'] == 1) {
					echo '<a href="Admin.php" class="linkHover">Admin</a>';
				}
			}
		?>

		<!-- This is the mobile view -->
		<div class="mobile" id="myMobile">
			<div class="dropdown">
				<a href="javascript:void(0);" class="icon" onclick="mobileDropDown()">
					<i class="fa fa-bars"></i>
				</a>
				
				<button class="mobileLogin" onclick="document.getElementById(
												<?php
												if (empty($_SESSION)) {
													echo '\'id01\'';
												} else {
													echo '\'id03\'';
												}
												?>
												).style.display='block'">
					<i class="fa fa-user-circle"></i>
				</button>

				<div id="dropdown-content">
					<div class="cleardiv">""</div>
					<a href="TheTs.php" class="linkHover">The Ts</a>
					<a href="OurPartners.php" class="linkHover">Our Partners</a>
					<a href="Training.php" class="linkHover">Training</a>
					<a href="OurServices.php" class="linkHover">Our Services</a>
					<a href="Media.php" class="linkHover">Media</a>
					<a href="Newsletter.php" class="linkHover">Newsletter</a>
					<a href="ContactUs.php" class="linkHover">Contact Us</a>
					<?php
						if (!empty($_SESSION)) {
							if ($_SESSION['user_level'] == 1) {
								echo '<a href="Admin.php" class="linkHover">Admin</a>';
							}
						}
					?>
				</div>
			</div>
		</div>
		<div class="topnav-right">
			<div class="pill-nav">
				<button class="loginButton" onclick="document.getElementById(
				<?php
				if (empty($_SESSION)) {
					echo '\'id01\'';
				} else {
					echo '\'id03\'';
				}
				?>
				).style.display='block'" style="width:auto;"><i class="fa fa-user-circle"></i><?php echo $login ? $login : 'Login' ?></button>
			</div>
		</div>
	</div>

	<!-- Sign In -->
	<div id="id01" class="modal">
		<form class="modal-content animate" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<!--<img src="img_avatar2.png" alt="Avatar" class="avatar">         This is for Image of Login      -->
			</div>
			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
				
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				
				<input type="submit" name="login" value='Login' class="submitButton">
				<button type="button" class="signUpButton" onclick="document.getElementById('id02').style.display='block' , document.getElementById('id01').style.display='none'">Sign Up</button>
			</div>
			<div style="clear:both;"></div>
		</form>
	</div>

	<!-- Sign Up -->

	<div id="id02" class="modal">
		<form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return check()">
			<div class="container">
				<h1>Sign Up</h1>
				<p>Please fill in this form to create an account.</p>
				<hr>
				<label for="name"><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="uname" id="uname" required>
				<span class="text-reminder" id="name-reminder" style="display:none">* Username must be at least 5 characters</span><br>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" id='psw' required>

				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
				<span class="text-reminder" id="psw-reminder" style="display:none">* Passwords do not match</span><br>

				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" id="email" required>
				<span class="text-reminder" id="email-reminder" style="display:none">* Email format is incorrect</span><br>

				<label for="phone"><b>Phone</b></label>
				<input type="text" placeholder="Enter Phone" name="phone" id="phone" required>
				<span class="text-reminder" id="phone-reminder" style="display:none">* Phone number must be 10 digits long e.g. (0412 345 678)</span><br>

				<label for="address"><b>Address</b></label>
				<input type="text" placeholder="Enter address" name="address" id="address">

				<div class="clearfix">
					<input type="submit" value="Register" class="signUpButton" name="register">
					<button type="button" onclick="document.getElementById('id02').style.display='none'" class="signUpButton">Cancel</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Sign Out-->

	<div id="id03" class="modal">
		<form class="modal-content" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<div class="container">
				<h1 style="text-align:center"><?php echo $login ?></h1>
				<p></p>
				<div class="clearfix">
					<button type="button" onclick="location.href='profile.php' , document.getElementById('id03').style.display='none'" class="loginButton">Profile</button>
					<input type="submit" value="Sign Out" class="loginButton" name="signOut">
				</div>
			</div>
		</form>
	</div>


	<script>
		// sign up authentication
		function check() {
			var uname = document.getElementById('uname');
			var pwd = document.getElementById("psw");
			var pwdRepeat = document.getElementById("psw-repeat");
			var email = document.getElementById("email");
			var phone = document.getElementById("phone");
			var result = true;
			if (uname.value.length < 2) {
				document.getElementById("name-reminder").style.display = "block";
				document.getElementById("name-reminder").style.color = "red";
				result = false;
			}
			if (pwd.value != pwdRepeat.value) {
				document.getElementById("psw-reminder").style.display = "block";
				document.getElementById("psw-reminder").style.color = "red";
				result = false;
			}
			var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
			if (!reg.test(email.value)) {
				document.getElementById("email-reminder").style.display = "block";
				document.getElementById("email-reminder").style.color = "red";
				result = false;
			}
			if (phone.value.length != 10) {
				document.getElementById("phone-reminder").style.display = "block";
				document.getElementById("phone-reminder").style.color = "red";
				result = false;
			}
			return result;
		}

		// dropdown mobile menu
		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
		function mobileDropDown() {
			var x = document.getElementById("myMobile");
			if (x.className === "mobile") {
				x.className += " responsive";
			} else {
				x.className = "mobile";
			}
		}
	</script>