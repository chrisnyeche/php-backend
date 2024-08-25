<?php

// Ensuring server request method 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['username'] = $username;
    $_POST['email'] = $email;
    $_POST['password'] = $password;


    try {
        require_once('./dbh.inc.php');
        require_once('./signup_model.inc.php');
        require_once('./signup_contr.inc.php');

        // Validate input
        $errors = [];
        function is_input_empty(string $username, string $email, string $password)
        {
            $errors['empty_input'] = "Fill in all fields";
        };
        function is_email_valid(string $email)
        {
            $errors['invalid_email'] = "Invalid email format";
        };
        function is_username_taken(object $pdo, $username)
        {
            $errors['username_taken'] = "Username already taken";
        };
        function is_email_taken(object $pdo, $email)
        {
            $errors['email_taken'] = "Email already registered";
        };
    } catch (PDOException) {
        die('Error' . $e->getMessage());
    }
} else {
    header('Location ../form.php'); // if users did not access the page the right method
    die();
};
