<div class="d-flex justify-content-center">
    <table class="table table-striped " style="max-width:1100px;">
        <thead class="thead-dark ">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">img</th>
                <th scope="col">Price</th>
                <th scope="col">Manage Books</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($books as $book) {
            ?>
                <tr>
                    <td><?= $book["title"] ?></td>
                    <td><?= $book["category"] ?></td>
                    <td><?= $book["author"] ?></td>
                    <td><img src="<?= $book["img"] ?>" width="40px"></td>
                    <td><?= $book["price"] ?></td>
                    <td><a class="btn btn-danger" href="dashboard.php?delete=<?= $book["id"] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    <form action="dashboard.php" method="POST" enctype="multipart/form-data" style="width: 1100px; margin-bottom: 10rem;">
        <h3>Insert Book</h3>
        <div class=" col-md-6 mb-3">
            <label for="bookTitle">Book Title</label>
            <input type="text" class="form-control" name="title" id="bookTitle" placeholder="Book title" value="" required>
        </div>



        <div class="col-md-6 mb-3">
            <label for="exampleFormControlTextarea1">Book Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="9" placeholder="Book description"></textarea>
        </div>

        <div class="col-md-6 mb-3">
            <label for="bookCategory">Book Category</label>
            <input type="text" class="form-control" name="category" id="bookCategory" placeholder="Book category" value="" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="About">Book Author</label>
            <input type="text" class="form-control" name="author" id="About" placeholder="Book price" value="" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="file">Book Image</label>
            <input type="file" class="form-control" name="file" id="file" value="" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="bookPrice">Book Price</label>
            <input type="number" class="form-control" name="price" id="bookPrice" placeholder="Book price" value="" required>
        </div>



        <button type="submit" class="btn btn-primary" name="insert">Insert</button>
    </form>

</div>


<?php include "v-update-modal-page.php"; ?>

<script src="v-update-modal-page.php"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $(".edit").on("click", function() {
            $("#updateBook").modal("show");

            $tr = $(this).closest("tr");

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);

            $("#b_id").val(data[0]);
            $("#bt").val(data[1]);
            $("#bw").val(data[2]);
            $("#bg").val(data[3]);
        });
    });



    function addBook() {

        var book_title = $("#bt").val();
        var book_writer = $("#bw").val();
        var book_genre = $("#bg").val();


    }
</script>