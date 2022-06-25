<main>
    <div class="container">
        <div id="mycarousel" class="carousel-slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item text-center p-4">
                    <h1 class="header-h1">COME AND </h1>
                    <H2 class="header-h2">HAVE</H2>
                    <a href="/" class="btn btn-default">A GO</a></p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="public/theme/img/wallpapers/val3.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="background-color:grey; opacity: 0.7;  border-radius: 25px;">
                        <h3 ">Your Online Store </h3>
                        <h3 class=" lg-12">Welcome to the Magical World of Books<h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/theme/img/wallpapers/val0.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/theme/img/wallpapers/val5.png" alt="Third slide" height="530rem">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <section class="pt-5 pb-5">
            <div class="container">
                <h2 class="text-center font-weight-bold mb-5 mt-5">Popular</h2>
                <div class="row d-flex equal">
                    <?php foreach ($classic as $book) { ?>

                        <div class="  col-md-4 mb-4">
                            <div class="card h-100 border-0">
                                <div class="card-img-top">
                                    <a href="./single-book-page.php?page=<?= $book['id']; ?>"><img src=<?= $book["img"]; ?> class="img-fluid mx-auto d-block" alt="Card image cap" width="200px"></a>
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
        <section>
            <a href="https://www.cbca.org.au/cbca-book-week" target="_blank"> <img src="./public/theme/img/wallpapers/Comercial.jpg" class="img-fluid" alt="Comercial image"></a>
        </section>
        <section class="pt-5 pb-5">
            <div class="container">
                <h2 class="text-center font-weight-bold mb-5 mt-5">Kids</h2>
                <div class="row d-flex equal">
                    <?php foreach ($kids as $book) { ?>

                        <div class="  col-md-4 mb-4">
                            <div class="card h-100 border-0">
                                <div class="card-img-top">
                                    <a href="./single-book-page.php?page=<?= $book['id']; ?>"> <img src=<?= $book["img"]; ?> class="img-fluid mx-auto d-block" alt="Card image cap" width="200px"></a>
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

</main>