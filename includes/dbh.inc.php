<?php

$host = 'localhost';
$dbname = 'mydatabase';
$username = 'root';
$password = '';

try {
    $pdo = new PDO ('mysql:host=$host;dbname= $dbname', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException) {
    die('Connection failed' . $e->getMessage());
}

