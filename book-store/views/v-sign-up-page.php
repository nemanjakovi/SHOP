<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>

                    <form action="sign-up-page.php" method="POST" enctype="multipart/form-data">
                        <?php if (!empty($systemErrors['database'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['database']); ?></small>
                        <?php } ?>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php if (isset($_POST["sign_up"])) echo $name ?>">
                            <label for="floatingInput">Enter your name</label>
                            <?php if (!empty($systemErrors['name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                            <?php } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name" value="<?php if (isset($_POST["sign_up"])) echo $lastName ?>">
                            <label for="floatingInput">Enter your last name</label>
                            <?php if (!empty($systemErrors['last_name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                            <?php } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php if (isset($_POST["sign_up"])) echo $email ?>">
                            <label for="floatingInput">Email address</label>
                            <?php if (!empty($systemErrors['email'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="ages" name="ages" placeholder="ages" value="<?php if (isset($_POST["sign_up"])) echo $ages ?>">
                            <label for="floatingInput">Enter your ages</label>
                            <?php if (!empty($systemErrors['ages'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['ages']); ?></small>
                            <?php } ?>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Male" id="male">
                            <label class="form-check-label" for="male" id="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Female" id="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <?php if (!empty($systemErrors['gender'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['gender']); ?></small>
                        <?php } ?>


                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <?php if (!empty($systemErrors['password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['password']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="r-password" name="r_password" placeholder="Retype-Password">
                            <label for="floatingPassword">Retype Password</label>
                            <?php if (!empty($systemErrors['r_password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['r_password']); ?></small>
                            <?php } ?>
                        </div>

                        <div>
                            <label for="floatingPassword">Insert your image</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="file" value="<?php if (isset($_POST["sign_up"])) echo $lastName ?>">
                            <?php if (!empty($systemErrors['image'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['image']); ?></small>
                            <?php } ?>
                        </div><br>


                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="sign_up">Sign up</button>
                        </div>
                        <hr class="my-4">
                    </form>
                    <div class="d-grid">
                        <a href="login-page.php"> <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                <i class="fab fa-google me-2"></i> Log in
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
