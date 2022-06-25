<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Nemanja" content="Book- Store, Belgrade">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/theme/js/bootstrap.min.js">

    <link rel="stylesheet" href="./public/theme/css/style.css">
    <title>Book Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</head>

<body>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <i class="bi bi-book-half"></i>
                    <img src="public/theme/img/logo.jpg" width="70px" alt="logo">
                    <title>Book Store</title>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Book Store</span>
                </a>

                <nav class="d-flex mt-2 mt-md-0 ms-md-auto " style="display: flex;  justify-content: space-between;">
                    <a class=" me-3 py-2 nav-link <?php if ($pageTitle == 'index') {
                                                        echo htmlspecialchars('disabled');
                                                    } ?>" href=" index.php">HOME</a>

                    <a class="me-3 py-2 
                    nav-link <?php if ($pageTitle == 'books') {
                                    echo htmlspecialchars('disabled');
                                } ?>" href="all-books-page.php">BOOKS</a>

                    <a class="me-3 py-2 nav-link <?php if ($pageTitle == 'contact_us') {
                                                        echo htmlspecialchars('disabled');
                                                    } ?>" href="contact-us-page.php">CONTACT US</a>
                    <?php if (!isset($_SESSION["id"])) { ?>
                        <a class="me-3 py-2 nav-link <?php if ($pageTitle == 'login') {
                                                            echo htmlspecialchars('disabled');
                                                        } ?>" href="login-page.php">LOGIN</a>

                        <a class="me-3 py-2 nav-link <?php if ($pageTitle == 'signup') {
                                                            echo htmlspecialchars('disabled');
                                                        } ?>" href="sign-up-page.php">SIGN UP</a>
                    <?php } else { ?>
                        <a class="me-3 py-2  nav-link <?php if ($pageTitle == 'profile') {
                                                            echo htmlspecialchars('disabled');
                                                        } ?>" href="profile-page.php">PROFILE</a>
                        <a class="me-3 py-2  nav-link <?php if ($pageTitle == 'admin') {
                                                            echo htmlspecialchars('disabled');
                                                        } ?>" href="dashboard.php">ADMIN</a>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="logout.php">LOGOUT</a>
                    <?php } ?>


                </nav>

                <a class="nav-link  position-relative p-0" href="./shopping-cart-page.php">
                    <img class="position-static" src="./public/theme/img/korpa.png" width="35px" alt="shopping-cart" style="margin-left: 7px;">
                    <span class="position-absolute top-0 start-100  translate-middle badge rounded-pill bg-danger">
                        <?php

                        if (!empty($_SESSION["shopping_cart"])) {
                            echo count($_SESSION["shopping_cart"]);
                        } else {
                            echo 0;
                        }
                        ?>
                    </span>
                </a>
            </div>

    </div>


    </header>