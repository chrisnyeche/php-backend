<?php

declare(strict_types=1);

function getUsername(object $pdo, $username)
{
    $query = $pdo->prepare('SELECT username FROM users WHERE username = :username');
    $query->bindParam(':username', $username);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

}
