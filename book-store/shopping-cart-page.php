<?php
session_start();

require_once __DIR__ . "/models/Class-shopping-cart.php";

$shoppingCart = new ShoppingCart();


$items = $shoppingCart->getShoppingCatrtItems();
$shoppingCart->removeShoppingCatrtItems();





require __DIR__ . "/views/_layout/v-header.php";


// PAGE
require __DIR__ . "/views/v-shopping-cart-item.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
