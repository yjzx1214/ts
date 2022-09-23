<?php

require 'conn.php';
session_start();
unset($_SESSION['username']);
// Finally, destroy the session.    
session_destroy();
header('location:index.php');
?>
