<?php
require_once('./dbh.inc.php');

$username = $_POST['username'];
$email = $_POST['email'];
// Hashing the password
$salt = '$2y$10$' . substr(strtr(base64_encode(random_bytes(16)), '+', '.'), 0, 22);
$password = crypt($password, $salt);

// Ensuring server request method 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        require_once('./signup_model.inc.php');
        require_once('./signup_contr.inc.php');

        // Validate input
        $errors = [];

        $signupData = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ];

        if (is_input_empty($username, $email, $password)) {
            $errors['empty_input'] = "Fill in all fields";
        } else {
            if (!is_email_valid($email)) {
                $errors['invalid_email'] = "Invalid email format";
            };
            if (is_username_taken($pdo, $username)) {
                $errors['username_taken'] = "Username already taken";
            };
            if (is_email_taken($pdo, $email)) {
                $errors['email_taken'] = "Email already registered";
            };
        }

        require_once './config.php';
        if ($errors) {
            $_SESSION['errors_signup'] = $errors; // Store errors in session
            $_SESSION['signup_data'] = $signupData; // Store signup data in session

            header('Location: ../signup.php'); // Redirect back to signup page with errors
            die();
        } else {
            createUser($pdo, $username, $email, $password); // Create user
            $pdo = null;
            $stmt = null;
            $_SESSION['message_signup'] = "User created successfully!";

            header("Location: ../welcome.php"); // Redirect to welcome page
        }
    } catch (PDOException) {
        die('Error' . $e->getMessage());
    }
} else {
    header('Location ../signup.php'); // if users did not access the page the right method
    unset($_SESSION['message']); // Unset the message
    die();
};
