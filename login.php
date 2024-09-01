<?php
require_once './includes/config.php';
require_once './includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Sign In Page</title>
</head>

<body>
    <div class="forms">

        <!-- Sign up -->
        <div class="container">
            <h3>Sign In</h3>
            <form action="includes/login.inc.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password">

                <button class="btn-signup">Sign In</button>
            </form>
            <p style="text-align: center;">New to the platform? <a class="btn-redirect" href="./signup.php">Sign Up</a></p>
        </div>

    </div>

    <?php
    display_errors()
    ?>
</body>

</html>