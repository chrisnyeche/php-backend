<?php
// Include the database connection
require_once 'dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    try {
  
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: ../signup.php");
    die();
}


