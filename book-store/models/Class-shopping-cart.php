<?php

class ShoppingCart
{

    public function getShoppingCatrtItems()
    {
        if (isset($_POST["add_to_cart"])) {
            if (isset($_SESSION["shopping_cart"])) {
                $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
                if (!in_array($_GET["id"], $item_array_id)) {

                    $count =  count($_SESSION["shopping_cart"]);
                    $item_array = [
                        "item_id"        =>    $_GET["id"],
                        "item_title"     =>    $_POST["book_title"],
                        "item_author"    =>    $_POST["book_author"],
                        "item_category"  =>    $_POST["book_category"],
                        "item_price"     =>    $_POST["book_price"],
                        "item_img"       =>    $_POST["book_img"],
                        "item_quantity"  =>    $_POST["book_quantity"]
                    ];
                    $_SESSION["shopping_cart"][$count] = $item_array;

                    echo "<script>window.location='all-books-page.php'</script>";
                } else {

                    echo "<script>alert('Item alredy added')</script>";
                    echo "<script>window.location='all-books-page.php'</script>";
                }
            } else {
                $item_array = [
                    "item_id"        =>    $_GET["id"],
                    "item_title"     =>    $_POST["book_title"],
                    "item_author"    =>    $_POST["book_author"],
                    "item_category"  =>    $_POST["book_category"],
                    "item_price"     =>    $_POST["book_price"],
                    "item_img"       =>    $_POST["book_img"],
                    "item_quantity"  =>    $_POST["book_quantity"]
                ];
                $_SESSION["shopping_cart"][0] = $item_array;
                return $item_array;
            }
        } else {
            return $_SESSION["shopping_cart"];
        }
    }

    public function removeShoppingCatrtItems()
    {
        if (isset($_GET["action"])) {

            if ($_GET["action"] == "delete") {
                foreach ($_SESSION["shopping_cart"] as $key => $item) {
                    if ($item["item_id"] == $_GET["id"]) {
                        unset($_SESSION["shopping_cart"][$key]);
                    }
                }
            }
        }
    }
}
