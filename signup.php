<?php
require_once './includes/config.php';
require_once './includes/signup_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Sign Up Page</title>
</head>

<body>
    <div class="forms">

        <!-- Sign up -->
        <div class="container">
            <h3>Sign Up Form</h3>
            <form action="includes/signup.inc.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo isset($_SESSION['signup_data']['username']) ? htmlspecialchars($_SESSION['signup_data']['username']) : ''; ?>">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo isset($_SESSION['signup_data']['password']) ? htmlspecialchars($_SESSION['signup_data']['password']) : ''; ?>">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo isset($_SESSION['signup_data']['email']) ? htmlspecialchars($_SESSION['signup_data']['email']) : ''; ?>">

                <button class=" btn-signup">Sign Up</button>
            </form>
        </div>

    </div>

    <?php
    // Include the error message if any
    check_signup_errors();
    ?>

</body>

</html>