<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                    <form action="login-page.php" method="POST">
                        <?php if (!empty($systemErrors['user'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['user']); ?></small>
                        <?php } ?>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            <?php if (!empty($systemErrors['email'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <?php if (!empty($systemErrors['password'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['password']); ?></small>
                            <?php } ?>
                        </div>


                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Sign
                                in</button>
                        </div>
                    </form>
                    <hr class="my-4">

                    <div class="d-grid">
                        <a href="sign-up-page.php"><button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                <i class="fab fa-google me-2"></i> Create acount
                            </button> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>