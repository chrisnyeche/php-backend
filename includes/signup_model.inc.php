<?php

declare(strict_types=1);

function getUsername(object $pdo, string $username) // returns the username from the database
{
    $query = $pdo->prepare('SELECT username FROM users WHERE username = :username');
    $query->bindParam(':username', $username);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo, string $email) // returns the email from the database
{
    $query = $pdo->prepare('SELECT email FROM users WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
