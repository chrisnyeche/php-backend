<?php

require_once('./dbh.inc.php'); // Include your database connection
require_once './login_model.inc.php'; // Include your login model file
require_once './login_view.inc.php'; // Include your login view file

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input to ensure both fields are filled out
    if (empty($username) || empty($password)) {
        $_SESSION['login_error'] = 'Please fill in all fields.';
        header('Location: ../login.php');
        exit();
    }

    try {
        $user = get_user($pdo, $username); // Call the get_user function from your model file

        // If user is found and passwords match
        if ($user && password_verify($password, $user['password'])) {

            require_once('./config.php'); // Include any other necessary configuration files

            // Store user information in the session
            $_SESSION['user_id'] = $user['id']; // Store user information
            $_SESSION['username'] = $username; // Store username

            $_SESSION['message_signup'] = "User Logged in successfully!";

            // Redirect to the user's dashboard or homepage
            header("Location: ../welcome.php");
            exit();
        } else {
            // If login fails, set an error message and redirect back to the login page
            $_SESSION['login_error'] = 'Invalid username or password.';
            header('Location: ../login.php');
            exit();
        }
    } catch (PDOException $e) {
        // Handle any potential database errors
        die('Database error: ' . $e->getMessage());
    }
} else {
    // If the user accessed this page without submitting the form, redirect them to the login page
    header('Location: ../login.php');
    exit();
}
