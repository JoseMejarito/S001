<?php
session_start(); // Start or resume the existing session

// Check if the user is already logged in
if (isset($_SESSION["user_id"])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
}

// Redirect the user to the login page or any other desired page
header("Location: login.php");
exit();
?>