<?php

declare(strict_types=1);

function display_errors()
{
    // Initialize errors variable
    $errors = $_SESSION['login_error'] ?? '';

    if (isset($_SESSION['login_error'])) {
        echo "<div class='error-message'>
            <p>$errors</p>
        </div>";
    };

    unset($_SESSION['login_error']);
}
