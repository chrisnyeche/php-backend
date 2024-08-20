<?php

// Ensuring server request method 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$_POST['username'] = $username;
$_POST['email'] = $email;
$_POST['password'] = $password;

    
try {
    require_once('./dbh.inc.php');
    require_once('./signup_model.inc.php');
    require_once('./signup_contr.inc.php');

    

} catch (PDOException) {
    die('Error' . $e->getMessage());
}

}else{
    header('Location ../form.php'); // if users did not access the page the right method
    die();
};