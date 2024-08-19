<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="forms">

        <!-- Sign up -->
        <div class="container">
            <h3>Sign Up Form</h3>
            <form action="includes/formhandler.inc.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <input type="submit" class="btn-signup" value="Sign Up">
            </form>
        </div>

        <!-- Sign In-->
        <div class="container">
            <h3>Sign In Form</h3>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Input your username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" class="btn-info" value="Login">
            </form>
        </div>

        <!-- Update -->
        <div class="container">
            <h3>Update Form</h3>
            <form action="includes/update.inc.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <input type="submit" class="btn-update" value="Update">
            </form>
        </div>

        <!-- Delete -->
        <div class="container">
            <h3>Delete Form</h3>
            <form action="includes/delete.inc.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Input the suspended username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Input the suspended email" required>

                <input type="submit" class="btn-delete" value="Delete">
            </form>
        </div>
        
    </div>

</body>

</html>