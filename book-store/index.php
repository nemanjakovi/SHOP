<?php
session_start();
require_once __DIR__ . "/models/Class-books.php";

//PAGE
$pageTitle = 'index';
$book = new Books();

$classic = $book->getClassicCategory();
$kids = $book->getKidsCategory();
require __DIR__ . "/views/_layout/v-header.php";


// PAGE
require __DIR__ . "/views/v-index.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
