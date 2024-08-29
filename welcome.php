<?php
require_once('./includes/config.php');

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
        if (isset($_SESSION['message_signup'])) {
            echo "<p class='success-message'>" . $_SESSION['message_signup'] . "</p>";
        } else {
            echo  "<p class='serror-message'>Access Denied!</p>";
        }
        ?>
    </div>
</body>

</html>