<?php
session_start();

require_once __DIR__ . "/models/Class-books.php";
require_once __DIR__ . "/models/Class-shopping-cart.php";
//PAGE
$pageTitle = "books";
$book = new Books();






$sort = "";

if (empty($_GET["sort"])) {
    $bookCount = $book->getBooksCount();
    $onePageItems = 9;
    $numberOfPages = ceil($bookCount / $onePageItems);

    $db = new Db();
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $starting_limit = ($page - 1) * $onePageItems;

    $query = "SELECT * FROM books  LIMIT $starting_limit, $onePageItems";
    $books = $db->connect()->query($query)->fetchAll();

    // $books = $book->getAllBooks();
} else if ($_GET["sort"] == 'price-asc') {
    $books = $book->sortBookByLowPrice();
} else if ($_GET["sort"] == "price-desc") {
    $books = $book->sortBookByHeighPrice();
}







require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-books.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
