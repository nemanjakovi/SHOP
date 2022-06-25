<?php
session_start();
require_once __DIR__ . "/models/Class-books.php";
require_once __DIR__ . "/models/Class-dashboard.php";
$pageTitle = "admin";
$book = new Books();

if (!empty($book->getAllBooks())) {
    $books = $book->getAllBooks();
} else {
    header("Location:all-books-page.php");
}


$dsb = new Dashboard();
$dsb->deleteBook();



if (isset($_POST["insert"])) {

    $bookTitle  = $_POST["title"];
    $bookDescription  = $_POST["description"];
    $bookCategory = $_POST["category"];
    $bookAuthor  = $_POST["author"];


    $targetDir = "storage/uploads/";
    if (!empty($_FILES["file"]["name"])) {
        $file = basename($_FILES["file"]["name"]);

        $image = "";
        $image = $targetDir . $file;
        $fileType = pathinfo($image, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["file"]["tmp_name"], $image);
    }
    if (empty($image)) {
        $systemErrors['image'] = "Field image is required!!";
    }

    // $fileName  = $_FILES["image"]["name"];
    // $fileSize  = $_FILES["image"]["size"];
    // $tmpName = $_FILES["image"]["tmp_name"];
    // $fileError = $_FILES["image"]["error"];
    // $fileType = $_FILES["image"]["type"];


    // $fileExtension = explode(".", $fileName);
    // $imageExtension = strtolower(end($fileExtension));

    // $validImageExtension = ["jpg", "jpeg", "png"];


    // if (in_array($imageExtension, $validImageExtension)) {
    //     if ($fileError == 0) {
    //         if ($fileSize < 1000000) {
    //             $newImageName = uniqid("", true) . "." . $imageExtension;
    //             $fileDestination = "public/theme/img" . $newImageName;
    //             move_uploaded_file($tmpName,  $fileDestination);
    //         } else {
    //             echo "Big size";
    //         }
    //     } else {
    //         echo "Uploading error";
    //     }
    // } else {
    //     $systemErrors = "Invalid image extension";
    // }




    $bookPrice = $_POST["price"];

    $dsb->insertBooks($bookTitle, $bookDescription, $bookCategory, $bookAuthor, $image,  $bookPrice);
}

require __DIR__ . "/views/_layout/v-header.php";


// PAGE
require __DIR__ . "/views/v-dashboard.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
