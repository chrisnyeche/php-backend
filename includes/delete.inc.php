<?php
// Include the database connection
require_once 'dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];

    try {
        // Prepare the SQL statement with named parameters
        $sql = "DELETE FROM users WHERE username=:username AND email=:email";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':password', $password);

        // Execute the statement
        $stmt->execute();

        // Redirect to the index.php after successful signup
        header("Location: ../index.php?signup=success");
        exit();
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: ../signup.php");
}
