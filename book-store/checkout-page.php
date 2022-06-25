<?php
session_start();
require_once __DIR__ . "/models/Class-shopping-cart.php";
require_once __DIR__ . "/models/Class-shopping-cart.php";





$systemErrors = [];

try {
    $shoppingCart = new ShoppingCart();
    $items = $shoppingCart->getShoppingCatrtItems();

    // CHECKOUT VALIDATION
    if (isset($_POST["pay"])) {
        // FIRST NAME
        $first_name = (string) $_POST['first_name'];
        $first_name = trim($first_name);
        if (empty($first_name)) {
            $systemErrors['first_name'] = "Field name is required!";
        } else if (strlen(!preg_match("/^([a-zA-Z' ]+)$/", $first_name))) {

            $systemErrors['first_name'] = "Only letters allowed!";
        }

        // LAST NAME
        $last_name = (string) $_POST['last_name'];
        $last_name = trim($last_name);
        if (empty($last_name)) {
            $systemErrors['last_name'] = "Field last name is required!";
        } else if (strlen(!preg_match("/^([a-zA-Z' ]+)$/", $last_name))) {

            $systemErrors['first_name'] = "Only letters allowed!";
        }


        // EMAIL
        $email = (string) $_POST['email'];
        $email = trim($email);
        if (empty($email)) {
            $systemErrors['email'] = "Field email is required!";
        }
        if (empty($systemErrors['email']) && !str_contains($email, "@")) {
            $systemErrors['email'] = "Mail must include @!";
        }

        // ADDRESS 
        $address = (string)  $_POST["address"];
        $address = trim($address);
        if (empty($address)) {
            $systemErrors["address"] = "Field address is required!";
        }

        // ADDRESS 2 

        $address2 = (string) $_POST["address2"];
        $address2 = trim($address2);

        // CITY
        $city = (string) $_POST['city'];
        $city = trim($city);
        if (empty($city)) {
            $systemErrors['city']
                = "Field city is required!";
        }
        // PHONE
        $phone = (string) $_POST['phone'];
        $phone = trim($phone);
        if (empty($phone)) {
            $systemErrors['phone'] = "Field phone is required!";
        }
        if (empty($systemErrors['phone']) && false) {
            $systemErrors['phone'] = "Phone number is not valid!";
        }
        // STREET
        $address = (string) $_POST['address'];
        $address = trim($address);
        // ZIP
        $zip = (string) $_POST['zip'];
        $zip = trim($zip);
        if (empty($zip)) {
            $systemErrors['zip'] = "Field zip is required!";
        }

        // RIGHTS
        // $rights = (string) $_POST['rights'];
        // if (empty($rights)) {
        //     $systemErrors['rights'] = "You must check your rights!";
        // }
        if (empty($systemErrors)) {
            $_SESSION["shopping_cart"] = [];
            header('Location: ./successful-buy.php');
        }
    }
} catch (Throwable $th) {
    $_SESSION["shopping_cart"] = [];
    header("Location: ./");
}






require __DIR__ . "/views/_layout/v-header.php";


// PAGE
require __DIR__ . "/views/v-checkout.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
