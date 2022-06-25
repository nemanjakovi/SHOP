    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                </h4>
                <?php
                $total = 0;
                foreach ($items as $item) {


                ?>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h5 class="my-0"><?= $item["item_title"]; ?></h5>
                                <small class="text-muted"><?= "<strong>category - " . $item["item_category"] . "</strong>"; ?></small><br>

                            </div>
                            <small><?= "(" . $item["item_quantity"] . " * " . $item["item_price"] . ")"; ?></small>
                            <span class="text-muted"><?= "$" . $item["item_price"] * $item["item_quantity"]; ?></span>

                        </li>

                        <?php $total = $total + $item["item_quantity"] * $item["item_price"]; ?>

                    <?php } ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$<?= $total ?></strong>
                    </li>
                    </ul>
            </div>
            <!-- end of cart  -->


            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>

                <!-- form start  -->
                <form class="needs-validation" action="./checkout-page.php" method="POST" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="first_name" id="firstName" placeholder="" value="">

                            <?php if (!empty($systemErrors['first_name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['first_name']); ?></small>
                            <?php } ?>


                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="lastName" placeholder="" value="">
                            <?php if (!empty($systemErrors['last_name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="email" class="form-control" name="email" id="email"> <b></b>
                        </div>
                        <?php if (!empty($systemErrors['email'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                        <?php } ?>
                    </div>



                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                        <?php if (!empty($systemErrors['address'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['address']); ?></small>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
                            <?php if (!empty($systemErrors['phone'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="">
                            <?php if (!empty($systemErrors['city'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="">
                            <?php if (!empty($systemErrors['zip'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip']); ?></small>
                            <?php } ?>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" name="pay" type="submit" value="yes">Continue to checkout</button>
                </form>
            </div>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="public/theme/js/form-validation.js"></script>