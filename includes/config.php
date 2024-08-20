<?php

ini_set('display_errors', 1); // Display errors for debugging
ini_set('session.use_strict_mode', 1); // Use strict mode for session cookies
ini_set('session.use_only_cookies', 1); // Use only cookies for session

session_set_cookie_params([
    'lifetime' => 1800, // Lifetime of 30 minutes
    'samesite' => 'Strict', // Site attribute set to Strict
    'samesite' => 'Strict', // Session ID attribute set to Strict
    'secure' => true, // Use secure cookies instead of HTTP
    'httponly' => true, // Use HTTP only cookies
    'path' => '/', // Path to root directory
    'domain' => $_SERVER['SERVER_NAME'] // Name of the domain to connect
]);

session_start();


function regenerateSessionId()
{
    // Regenerate session ID to prevent fixation attacks
    session_regenerate_id(true);

    // Update 'last_regeneration' to the current timestamp
    $_SESSION['last_regeneration'] = time();
}

// Check if 'last_regeneration' is set in the session
if (!isset($_SESSION['last_regeneration'])) {
    // If not set, initialize it with the current timestamp
    regenerateSessionId();
} else {
    // Check if 30 minutes (1800 seconds) have passed since the last regeneration
    if (time() - $_SESSION['last_regeneration'] > 1800) {
        regenerateSessionId();
    }
}
