<div class="container">
    <div class="row">
        <form class="colon g-3 buy-form" action="buy-book-page.php" method="POST">
            <h3>Enter Data</h3>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="name">
                <?php if (!empty($systemErrors['name'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                <?php } ?>
            </div>

            <div class="col-md-5">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputEmail4" name="email">
                <?php if (!empty($systemErrors['name'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                <?php }


                ?>
            </div>
            <div class="col-5">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address">
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
            </div>

            <div class="col-md-5">
                <label for="inputState" class="form-label">State</label>
                <input type="text" class="form-control" id="inputState" name="state">
            </div>

            <div class="col-md-5">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip">
            </div>

            <div class="col-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Acept all terms
                    </label>
                </div>

            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Buy Book</button>
            </div>
        </form>
        <?php if ($submited)
            echo $name;
        ?>



    </div>
</div>
</div>