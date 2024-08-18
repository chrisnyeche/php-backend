<?php

ini_set('display_errors', 1);
ini_set('session.use_strict_mode', 1);
ini_set('session.use_only_cookies', 1);

session_set_cookie_params([
    'lifetime' => 1800, // Lifetime of 30 minutes
    'samesite' => 'Strict', // Session ID attribute set to Strict
    'secure' => true, // Use secure cookies instead of HTTP
    'httponly' => true, // Use HTTP only cookies
    'path' => '/', // Path to root directory
    'domain' => $_SERVER['SERVER_NAME'] // Name of the domain to connect
]);


session_start();

?>
