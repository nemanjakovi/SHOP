<?php

require __DIR__ . "/views/_layout/v-header.php";

require_once __DIR__ . "/models/book-model.php";

$bookId = null;
$quantity = null;
$submited = false;
$systemErrors = [];


if (!empty($_POST['book_id'])) {
    $bookId = $_POST['book_id'];
}

// if (!empty($_POST['quantity'])) {
//     $quantity = $_POST['quantity'];
// }

// if (is_null($bookId)) {
//     die("ERROR!");
// }



if (isset($POST_["submit"])) {


    $name = (string) $_POST['name'];
    $name = trim($name);
    if (empty($name)) {
        $systemErrors['name'] = "Field name is required!";
    }
    // if (!preg_match("/^([a-zA-Z' ]+)$/", $name) || strlen($name) > 15 ||  strlen($name) < 2) {
    //     $systemErrors["name"] = "Invalid name";
    // }

    $email = (string) $_POST['email'];
    $email = trim($email);
    if (empty($email)) {
        $systemErrors['email'] = "Field email is required!";
    }
    if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $systemErrors =   "Invalid email address";
    }
    $address =  (string) $_POST["address"];
    $street = trim($street);
    if (empty($address) || !preg_match("/([A-Za-z0-9]+)/", $address) || strlen($address) > 50) {
        $systemErrors["address"] =  "Invali address";
    }

    $zip = (string) $_POST['zip'];
    $zip = trim($zip);
    if (empty($zip)) {
        $systemErrors['zip'] = "Field zip is required!";
    }

    if (empty($city) || !preg_match("/^([a-zA-Z' ]+)$/", $city) || strlen($city) > 40) {
        $systemErrors["city"] =  "Invalid city";
    }

    $state = $_POST["state"];
    if (empty($state) || !preg_match("/^([a-zA-Z' ]+)$/", $state) || strlen($state) > 40) {
        $systemErrors["state"] =   "Invalid state";
    }

    if (empty($systemErrors)) {
        $submited = true;
    }
}

$book = $book->getOneBookById($bookId);

require __DIR__ . "/views/v-buy-book.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
