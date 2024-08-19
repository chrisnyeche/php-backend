<?php

// Include the database connection
require_once './includes/dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the queried username
    $username = $_POST['username'];

    try {
        // Prepare the SQL statement with named parameters
        $sql = "SELECT * FROM comments WHERE username = :username;";
        $stmt = $conn->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bindParam(':username', $username);

        // Execute the statement
        $stmt->execute();

        $Result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Result returned as an associative array to hold the results and fetch all the comments of the user

        $conn = null; // Close the connection
        $stmt = null; // Close the statement

    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: ../signup.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .comments {
            margin-top: 20px;
            line-height: 1.6;
        }
        .comment {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 5px solid #007bff;
            border-radius: 4px;
        }
        .comment:last-child {
            margin-bottom: 0;
        }
        .username{
            font-weight: bold;
            color: #007bff;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (empty($Result)) {
            echo "<h2>No comments found for the user <span class='username'>$username</span></h2>";
        } else {
            echo "<h2>Comments for the user: <span class='username'>$username</span></h2>" . "<br>";
            echo "<div class='comments'>";
            foreach ($Result as $row) {
                echo "<div class='comment'>" . htmlspecialchars($row['comment_text']) . "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>