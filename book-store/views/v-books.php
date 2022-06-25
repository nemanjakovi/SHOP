<!-- <main class="container"> -->
<?php require_once  "./database/Class-db.php"; ?>
<div class="container">
    <div class="row">
        <div class="sort-buttons-and-search" style="background-color:#e6dfdf;">




            <div class="sort-buttons">
                <h4><em> Sort your books by price:</em></h4>
                <a href="all-books-page.php?sort=<?= Books::ORDER_BY_PRICE_ASC ?> "> <button type=" button" name="low_to_high" id="low-to-high" class="btn btn-outline-secondary">Low to High</button></a>
                <a href="all-books-page.php?sort=<?= Books::ORDER_BY_PRICE_DSC ?>"> <button type="button" name="high_to_low" id="high-to-low" class="btn btn-outline-secondary">High to Low</button></a>
            </div>

            <form class="form-inline" style="display:flex;  margin-bottom:5px" method="GET" action="filtered-books-page.php">
                <input class="form-control mr-sm-2" type="text" name="search_input" value="" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" name="submit" type="submit">Search</button>
            </form>
        </div>
        <?php foreach ($books as $key => $singleBook) { ?>
            <div class="card col-4">
                <div class="m-6 main-page">
                    <a href="./single-book-page.php?page=<?= $singleBook['id']; ?>"> <img style="height: 13rem; width:12rem" src=" <?= $singleBook['img'] ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">

                        <h5 class="card-title"><?= $singleBook['title']; ?></h5>
                        <p class="card-text"><?= $singleBook['author']; ?></p>
                        <h3 class="card-price small text-dark">
                            <i>
                                <?= $singleBook["price"]; ?>$ </i>
                        </h3>

                        <form action="shopping-cart-page.php?action=add&id=<?= htmlspecialchars($singleBook['id']); ?>" method="POST">
                            <input hidden type="text" name="book_title" value="<?= $singleBook['title']; ?>">
                            <input hidden type="text" name="book_author" value="<?= $singleBook['author']; ?>">
                            <input hidden type="text" name="book_category" value="<?= $singleBook['category']; ?>">
                            <input hidden type="text" name="book_price" value="<?= $singleBook['price']; ?>">
                            <input hidden type="text" name="book_img" value="<?= $singleBook['img']; ?>">
                            Quantity: <input min="1" class="col-md-2 col-lg- col-xl-3" type="number" name="book_quantity" class="form-control" value="1"><br><br>
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>

                        </form>


                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <nav aria-label="Page navigation example" class="d-flex justify-content-center m-3">
        <ul class="pagination">

            <!-- <li class="page-item"><a class="page-link" href="all-books-page.php">Previous</a></li> -->
            <?php for ($page = 1; $page <= $numberOfPages; $page++) { ?>
                <li class="page-item"><a class="page-link" href="all-books-page.php?page=<?= $page ?>"><?= $page ?></a></li>
            <?php } ?>
            <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
        </ul>
    </nav>
</div>
<!-- </main> -->