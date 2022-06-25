<?php
session_start();
require __DIR__ . "/login_sistem/Class-login.php";
//PAGE
$pageTitle = "login";


if (isset($_POST["submit"])) {

    //EMAIL VALIDATION
    $email = (string) $_POST['email'];
    $email = trim($email);
    if (empty($email)) {
        $systemErrors['email'] = "Field email is required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $systemErrors['email'] = "Invalid email address";
    }

    // Password validation
    $password = (string) $_POST['password'];
    if (empty($password)) {
        $systemErrors['password'] = "Field password is required!";
    }

    $login = new Login();
    if (empty($systemErrors) && $login->getUser($email, $password) !== true) {

        $systemErrors['user'] = "Wrong email or password!";
    }

    if (empty($systemErrors)) {
        $login->getUser($email, $password);
        $login->loginUser();
        header("Location:index.php?login=successful");
    }
}


require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-login-page.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
