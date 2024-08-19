<?php

ini_set('display_errors', 1);
ini_set('session.use_strict_mode', 1);
ini_set('session.use_only_cookies', 1);

session_set_cookie_params([
    'lifetime' => 1800, // Lifetime of 30 minutes
<<<<<<< HEAD
    'samesite' => 'Strict', // Site attribute set to Strict
=======
    'samesite' => 'Strict', // Session ID attribute set to Strict
>>>>>>> 16917dbfd9faf9bf6121665e07ecbd81200a1f78
    'secure' => true, // Use secure cookies instead of HTTP
    'httponly' => true, // Use HTTP only cookies
    'path' => '/', // Path to root directory
    'domain' => $_SERVER['SERVER_NAME'] // Name of the domain to connect
]);

<<<<<<< HEAD
session_start();


if(!isset($_SESSION['last_regeneration'])){

    $_SESSION['last_regeneration'] = time();
    $_SESSION['regeneration_interval'] = 30; // Regenerate session ID every 30 seconds
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$salt = '$2y$10$' . substr(strtr(base64_encode(random_bytes(16)), '+', '.'), 0, 22);
$hashed_password = crypt($password, $salt);

$salt = bin2hex(random_bytes(16)); // Generate a 16-byte random salt
$hashed_password = hash('sha256', $salt . $password);

$hashed_password = md5($password);

$hashed_password = sha1($password);


$salt = 'a_random_salt';
$hashed_password = md5($salt . $password);

$salt = 'a_random_salt';
$hashed_password = hash('sha256', $salt . $password);

if (password_verify($password, $hashed_password)) {
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}

// Application-wide secret pepper (stored securely)
$pepper = "someSecretPepperValue";

// Generate a random salt
$salt = bin2hex(random_bytes(16));

// Combine the password with the salt and pepper, then hash
$password = "mysecurepassword";
$hashed_password = hash('sha256', $pepper . $salt . $password);

// Store the salt and hashed password in the database


$options = [
    'cost' => 12, // Cost factor
];

$hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

$options = [
    'memory_cost' => 1<<17, // 128 MB
    'time_cost'   => 4,     // Number of iterations
    'threads'     => 2,     // Number of threads to use
];

$hashed_password = password_hash($password, PASSWORD_ARGON2I, $options);

if (password_verify($password, $hashed_password)) {
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}


$timeTarget = 0.05; // 50 milliseconds

$cost = 8;
do {
    $cost++;
    $start = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
    $end = microtime(true);
} while (($end - $start) < $timeTarget);

echo "Appropriate cost found: " . $cost;




?>
=======

session_start();

?>
>>>>>>> 16917dbfd9faf9bf6121665e07ecbd81200a1f78
