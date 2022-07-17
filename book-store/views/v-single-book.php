<div class="container mt-2 mb-2">
    <div class="row d-flex justify-content-left">
        <div class="col-md-9">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="<?php echo htmlspecialchars($oneBook['img']); ?>" width="250" /> </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">

                            </div>

                            <h5 class="text-uppercase"><?= htmlspecialchars($oneBook['title']); ?></h5>
                            <div>
                                <span><?= $oneBook['category']; ?></span><br>

                                <span><?= " " . $oneBook['author']; ?></span>
                            </div>
                        </div>
                        <p><?= htmlspecialchars($oneBook['description']); ?></p>
                        <p class="about"></p>
                        <div class="sizes mt-5">
                            <h6 class="text-uppercase">Price</h6>
                            <input type="text" disabled value="<?= htmlspecialchars($oneBook['price']) . " $"; ?>">
                        </div>

                        <form action="shopping-cart-page.php?action=add&id=<?= htmlspecialchars($oneBook['id']); ?>" method="POST">
                            <input hidden type="text" name="book_title" value="<?= $oneBook['title']; ?>">
                            <input hidden type="text" name="book_author" value="<?= $oneBook['author']; ?>">
                            <input hidden type="text" name="book_category" value="<?= $oneBook['category']; ?>">
                            <input hidden type="text" name="book_price" value="<?= $oneBook['price']; ?>">
                            <input hidden type="text" name="book_img" value="<?= $oneBook['img']; ?>">
                            Quantity: <input min="1" class="col-md-2 col-lg-2 col-xl-2" type="number" name="book_quantity" class="form-control" value="1">
                            <div class=" cart mt-4 align-items-center">
                                <button class="btn btn-primary  text-uppercase mr-2 px-4" name="add_to_cart">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>

                            </div>
                            <div class="related-page-buttons" style="margin-top: 0.7rem;">
                                <a class="btn btn-outline-secondary" href="./single-book-page.php?page=<?php echo htmlspecialchars($prevBook['id']); ?>">PREV</a>
                                <a class="btn btn-outline-warning" href="./all-books-page.php">Go BACK</a>
                                <a class="btn btn-outline-secondary" href=" ./single-book-page.php?page=<?php echo htmlspecialchars($nextBook["id"]); ?>">NEXT</a>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5 pb-5">
        <div class="container">
            <h2 class="text-center font-weight-bold mb-5 mt-5">Related product</h2>
            <div class="row d-flex equal">
                <?php foreach ($books as $book) { ?>

                    <div class="  col-md-4 mb-4">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src=<?= $book["img"]; ?> class="img-fluid mx-auto d-block" alt="Card image cap" width="200px">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="#" class=" font-weight-bold text-dark text-uppercase small"> <?= $book["title"]; ?></a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>
                                        <?= $book["price"]; ?>$ </i>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </section>
</div>
