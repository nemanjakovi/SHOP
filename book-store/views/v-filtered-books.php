<main class="container filtered-book-container">
    <div class="row">
        <?php
        foreach ($books as $key => $singleBook) { ?>
            <div class="card col-3">
                <div class="m-2">
                    <img style="height:350px;" src=" <?= $singleBook['img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $singleBook['title']; ?></h5>
                        <p class="card-text"><?= $singleBook['author']; ?></p>
                        <p class="card-text"><?= $singleBook['category']; ?></p>
                        <p class="card-text"><?= $singleBook['price']; ?>RSD</p>
                        <a href="./single-book-page.php?page=<?= $singleBook['id']; ?>" class="btn btn-primary">
                            Show Book
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>