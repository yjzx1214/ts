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
    if (!empty($_SESSION)) {
        if ($_SESSION['user_level'] == 1) {
            echo '<a href="Admin.php" class="linkHover">Admin</a>';
        }
    }
    ?>

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
                    if ($_SESSION['userlevel'] == 1) {
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

<div id="id01" class="modal">

    <form class="modal-content animate" action="login.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">         This is for Image of Login      -->
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="LogInGo" value="LogInGo" class="submitButton">Login</button>
            <button type="button" class="signUpButton" name="SignUpGo" value="SingUpGo" onclick="document.getElementById('id02').style.display='block' , document.getElementById('id01').style.display='none'">Sign Up</button>
        </div>
        <div style="clear:both;"></div>
    </form>
</div>

<!-- Sign Up-->

<div id="id02" class="modal">
    <form class="modal-content animate" action="register.php" method="POST" onsubmit="return check()">
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
                <button type="submit" class="signUpButton" name="SignUpGo" value="SignUpGo">Sign Up</button>
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="signUpButton">Cancel</button>
            </div>
        </div>
    </form>
</div>

<!-- Sign Out-->

<div id="id03" class="modal">
    <form class="modal-content" action="SignOut.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">

            <h1 style="text-align:center"><?php echo $login ?></h1>
            <p></p>
            <div class="clearfix">
                <button type="button" onclick="location.href='profile.php' , document.getElementById('id03').style.display='none'" class="loginButton">Profile</button>
                <button type="submit" class="loginButton">Sign Out</button>
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