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
            $username = $_SESSION['username'];
            echo "<p class='success-message'>" . $_SESSION['message_signup'] . "</p>";
            echo "<p> Welcome $username </p>";
            echo "<form action='includes/signout.inc.php' method='post'>
                <button type='submit' name='signout' class='btn-logout'>Sign Out</button>
              </form>";
        } else {
            echo  "<p class='error-message'>Access Denied!</p>";
        }
        ?>
    </div>
</body>

</html>