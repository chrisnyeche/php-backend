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

function createUser(object $pdo, string $username, string $email, string $password) // creates a new user in the database
{
    require_once 'dbh.inc.php';
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
    return $pdo->lastInsertId();
}
