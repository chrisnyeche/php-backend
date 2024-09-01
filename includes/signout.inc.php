<?php
// signout.inc.php

session_start();

// Check if the signout button was clicked
if (isset($_POST['signout'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or home page
    header("Location: ../login.php");
    exit();
} else {
    // If the script is accessed without clicking the signout button, redirect to home page
    header("Location: ../login.php");
    exit();
}
