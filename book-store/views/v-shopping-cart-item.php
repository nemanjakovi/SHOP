<?php  ?>
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5" style="max-width:1400px ;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>
                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                </div>

                <form action="models/Class-checkout.php" method="POST">
                    <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                        $items = $_SESSION["shopping_cart"];

                        $total = 0;

                        foreach ($items as $key => $item) {

                    ?>

                            <div class="card rounded-3 mb-2">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="<?= $item["item_img"] ?>" style="width:45px;" class="img-fluid rounded-3" alt="">
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2"><?= $item["item_title"] ?></p>

                                        </div>
                                        <div class="col-md- col-lg- col-xl-1">
                                            <p class="lead fw-normal mb-1">Quantity</p>
                                        </div>

                                        <div class="row-md-1 col-lg-1 col-xl-1 d-flex">
                                            <div class="col-md-1  ">
                                                <h5 class="mb-0"><?= $item["item_quantity"] ?></h5>
                                            </div>


                                        </div>
                                        <div class="col-md- col-lg- col-xl-1">
                                            <p class="lead fw-normal mb-1">Single product</p>
                                        </div>
                                        <div class="col-md-1  ">
                                            <h5 class="mb-0"><?= $item["item_price"] ?>$</h5>
                                        </div>
                                        <div class="col-md- col-lg- col-xl-1">
                                            <p class="lead fw-normal mb-1">Total</p>
                                        </div>

                                        <div class="col-md-1 col-lg-2 col-xl-1">
                                            <h5 class="mb-0"><?= number_format($item["item_quantity"] * $item["item_price"], 2) ?>$</h5>
                                        </div>

                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="shopping-cart-page.php?action=delete&id=<?= $item["item_id"]; ?>" class="text-danger">X<i class="fas fa-trash fa-lg"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php $total = $total + $item["item_quantity"] * $item["item_price"]; ?>
                    <?php

                        }
                    } else {
                        echo "<script>window.location='all-books-page.php'</script>";
                    }
                    ?>
                    <div class="card  ">

                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Total price</span>
                            </div>
                            <!-- <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value='<?= $total . "$"; ?>'> -->
                            <h5 class="m-2"><?= number_format($total, 2) ?>$</h5>
                        </div>


                    </div>
                    <div class="card  ">


                        <div class="card-body row d-flex justify-content-between  ">

                            <a class="btn btn-warning btn-block btn-lg" href="checkout-page.php">Proceed to Pay</a>
                        </div>


                    </div>


            </div>
        </div>
    </div>
</section>