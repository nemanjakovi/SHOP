<?php
session_start();
require __DIR__ . "/login_sistem/Class-profile.php";

//PAGE
$pageTitlege = "profile";

$profile = new Profile();
$user = $profile->getUser($_SESSION["id"]);

if (isset($_POST["save"])) {


    $name = (string) $_POST['name'];
    $name = trim($name);
    $name = ucfirst($name);
    if (empty($name)) {
        $systemErrors['name'] = "Field name is required!";
    } else if (!preg_match("/[A-Za-z]+/", $name)) {

        $systemErrors['name'] = "Only letters and  allowed!";
    }
    //LAST NAME
    $lastName = (string) $_POST['last_name'];
    $lastName = trim($lastName);
    $lastName = ucfirst($lastName);
    if (empty($lastName)) {
        $systemErrors['last_name'] = "Field name is required!";
    } else if (!preg_match("/[A-Za-z]+/", $lastName)) {

        $systemErrors['last_name'] = "Only letters and  allowed!";
    }


    //     // EMAIL
    $email = (string) $_POST['email'];
    $email = trim($email);
    if (empty($email)) {
        $systemErrors['email'] = "Field email is required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $systemErrors['email'] = "Invalid email address";
    }

    // AGES
    $ages = (int) $_POST["ages"];
    if (empty($ages)) {
        $systemErrors['ages'] = "Field ages is required!";
    } elseif ($ages < 1 || $ages > 120) {
        $systemErrors['ages'] = "Age must be between 1 and 120!";
    }

    $password = (string) $_POST['password'];

    if (empty($password)) {
        $systemErrors['password'] = "Field password is required!";
    } else if (strlen($password < 8)) {
        $systemErrors['password'] = "The password must be more than 7 characters!";
    }
    // RETYPE PASSWORD
    // $r_password = (string) $_POST['r_password'];
    // if (empty($r_password)) {
    //     $systemErrors['r_password'] = "Field retype-password is  required!";
    // } elseif ($password !== $r_password) {
    //     $systemErrors['r_password'] = "Passwords do not match!";
    // }

    $targetDir = "storage/uploads/";
    if (!empty($_FILES["file"]["name"])) {
        $file = basename($_FILES["file"]["name"]);

        $image = "";
        $image = $targetDir . $file;
        $fileType = pathinfo($image, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["file"]["tmp_name"], $image);
    }

    $profile->updateProfile($name, $lastName, $email, $ages, $image, $_SESSION["id"]);
}





require __DIR__ . "/views/_layout/v-header.php";


// PAGE
require __DIR__ . "/views/v-profile-page.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
