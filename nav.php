<div class="navbar">

    <a href="#" class="home">Turnstar<br>Stratergies</a>

    <div class="verticalLine"></div>

    <a href="#home" class="linkHover">The Ts</a>
    <a href="#home" class="linkHover">Our Partners</a>

    <!-- This is a comment -->

    <div class="subnav">
        <button class="subnavbtn"> Training <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="#company">Company</a>
            <a href="#team">Team</a>
            <a href="#careers">Careers</a>
        </div>
    </div>

    <div class="subnav">
        <button class="subnavbtn">Our Services <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="#bring">Bring</a>
            <a href="#deliver">Deliver</a>
            <a href="#package">Package</a>
            <a href="#express">Express</a>
        </div>
    </div>

    <div class="subnav">
        <button class="subnavbtn"> Media <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="#link1">Link 1</a>
            <a href="#link2">Link 2</a>
            <a href="#link3">Link 3</a>
            <a href="#link4">Link 4</a>
        </div>
    </div>
    <a href="#home" class="linkHover">Newsleter</a>
    <a href="#home" class="linkHover">Admin</a>

    <a href="#contact" class="linkHover">Contact Us</a>
    <div class="topnav-right">
        <div class="pill-nav">
            <button class="loginButton" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-user-circle"></i><?php echo $login ?></button>
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

            <button type="submit" class="loginButton">Login</button>
            <button class="signUpButton" onclick="document.getElementById('id02').style.display='block' , document.getElementById('id01').style.display='none'">Sign Up</button>
        </div>
        <div style="clear:both;"></div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<!-- Sign Up-->

<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="register.php" method="POST">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" required>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>