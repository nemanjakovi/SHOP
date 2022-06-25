<?php
session_start();
require_once __DIR__ . "/models/Class-books.php";
$book = new Books();
$search = "";

// $book = [];
if (isset($_GET["submit"])) {
    if (!empty($_GET["search_input"])) {
        $search = $_GET['search_input'];
    } else {
        header("all-books-page.php");
    }
}


$books = $book->sortBookBuyKeyWord(strtolower($search));


header("all-books-page.php");

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-filtered-books.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
