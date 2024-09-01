<?php

declare(strict_types=1);

function get_user(object $pdo, string $username)
{
    // Check if the username exists and retrieve the stored hashed password
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}
