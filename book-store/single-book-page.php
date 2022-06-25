<?php
session_start();
require_once __DIR__ . "/models/Class-books.php";
require_once __DIR__ . "/models/Class-shopping-cart.php";


$bookId = $_GET['page'];

$oneBook = $book->getOneBookById($bookId);
$nextBook = $book->getNextBook($bookId);
$prevBook = $book->getPrevBook($bookId);
$books = $book->relatedBooks($book->getOneBookById($oneBook["id"]));






if (empty($oneBook)) {
    header("Location:page-not-found.php");
}



// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-book.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
