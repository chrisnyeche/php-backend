<?php 
require_once './config.php'; // Load configuration file 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <?php
        session_start();
        if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
            echo "<p class='success-message'>Sign Up Successful!</p>";
        } else {
            echo "<p class='error-message'>Access Denied</p>
                  <a href='./form.php' class='button'>Go to Form Page</a>
                  <a href='./query.php' class='button'>Go to Find Page</a>";
        }
        ?>
    </div>
</body>

</html>