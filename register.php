<?php
if (isset($_POST['SignUpGo'])) {

    include 'conn.php';

    $username = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['psw'];
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);

    $sql_check = "SELECT * FROM users WHERE u_name='$username'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo 'user existing';
        // need a page display or window
    } else {
        $sql_register = "INSERT INTO users (u_name, u_password, u_email, u_phone, u_level) VALUES ('$username', '$password', '$email', '$phone', '3');";
        if (mysqli_query($conn, $sql_register)) {
            // Open Session
            session_start();
            //save user name into session
            $_SESSION['username'] = $username;
            $_SESSION['userlevel'] = 3;
            $_SESSION['islogin'] = 1;
            //redirect to home page
            header('location:index.php');
        } else {
            echo 'Error ' . mysqli_errno($conn);
        }
    }
    mysqli_close($conn);
}
