<?php

function is_input_empty(string $username, string $email, string $password)
{
    if (empty($username) || empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    };
};

function is_email_valid(string $email)
{
    // Trim the email to remove any leading or trailing spaces
    $email = trim($email);
    // Validate the email using filter_var
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // The email is valid
    } else {
        return false; // The email is invalid
    }
};

function is_username_taken(object $pdo, $username)
{
    if (getUsername($pdo, $username)) {
        return true;
    } else {
        return false;
    };
};

function is_email_taken(object $pdo, $email)
{
    if (getUsername($pdo, $email)) {
        return true;
    } else {
        return false;
    };
};
