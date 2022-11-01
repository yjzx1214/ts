<?php
if (isset($_POST['SignUpGo'])) {

    include 'conn.php';

    $username = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['psw'];
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);

    $sql = "INSERT Into users (u_name, u_password, u_email, u_phone, u_level) Values ('$username', '$password', '$email', '$phone', '1');";
    if (mysqli_query($conn, $sql)) {
        // Open Session
        session_start();
        //save user name into session
        $_SESSION['username'] = $username;
        $_SESSION['userlevel'] = 1;
        $_SESSION['islogin'] = 1;
        //redirect to home page
        header('location:index.php');
    } else {
        echo 'Error ' . mysqli_errno($conn);
    }
    mysqli_close($conn);
}
