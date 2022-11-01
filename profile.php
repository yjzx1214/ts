<?php
header('Content-type:text/html; charset=utf-8');
// Open Session
session_start();

if (isset($_SESSION['islogin'])) {
    $login = ucfirst($_SESSION['username']);
} else {
    header('location:index.php');
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
    <!-- This is nav bar file -->
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
                        <input type="button" class="submitButton" value="Unsubscribe">
                    </div>

                    <?php
                    include 'conn.php';
                    $sql_user = "SELECT * FROM users WHERE u_name = '$login'";
                    $result_user = mysqli_query($conn, $sql_user);
                    $user = mysqli_fetch_row($result_user);
                    ?>
                    <div class="profileColumn">
                        <form action="/page.php">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name.." value="<?php echo $user[1] ?>" readonly="readonly">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Your Password.." value="<?php echo $user[2] ?>" readonly="readonly">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Your Email.." value="<?php echo $user[3] ?>" readonly="readonly">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="Your Phone number.." value="<?php echo $user[4] ?>" readonly="readonly">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Your Address number.." value="<?php echo $user[5] ?>" readonly="readonly">
                            <!-- edit will allow the user to edit their information-->
                            <input type="button" class="submitButton" value="Edit" onclick="allowEdit()">
                            <!-- only after clicked edit will update appear and will save the information-->
                            <input type="button" class="submitButton" value="Update">
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
            <tr>
                <td class="classFont">Strategic Studing</td>
                <td>10672</td>
                <td>This is a bunch of information that i have typed up to see what is going to appear on screen</td>
                <td>$120</td>
                <td>Bob Smith</td>
                <td>Bob.Smith@TS.com</td>
                <!--Cancel Class should remove it from User -->
                <td><input type="submit" value="Cancel Class" class="JoinClass" style="width:auto;"></td>
            </tr>
            <tr>
                <td class="classFont">Strategic Studing</td>
                <td>10672</td>
                <td>This is a bunch of information that i have typed up to see what is going to appear on screen</td>
                <td>$120</td>
                <td>Bob Smith</td>
                <td>Bob.Smith@TS.com</td>
                <td><input type="submit" value="Cancel Class" class="JoinClass" style="width:auto;"></td>
            </tr>
        </table>


    </main>

    <?php include("footer.php"); ?>

    <script>
        function allowEdit() {
            document.getElementById("name").readOnly = false;
            document.getElementById("password").readOnly = false;
            document.getElementById("email").readOnly = false;
            document.getElementById("phone").readOnly = false;
            document.getElementById("address").readOnly = false;
        }
    </script>