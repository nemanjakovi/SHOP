<!--Section: Contact v.2-->
<section class="mb-10">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-7 mb-md-0 mb-5" style="margin-left: 15rem; width:500px">
            <form id=" contact-form" name="contact-form" action="contact-us-page.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form mb-3">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            <?php if (!empty($systemErrors['name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            <?php if (!empty($systemErrors['email'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                            <?php } ?>

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->



                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class=" col-md-8">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <?php if (!empty($systemErrors['message'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['message']); ?></small>
                            <?php } ?>

                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="">
                    <button type="submit" class="btn btn-primary m-2" name="send">Send</button>
                </div>
                <?php
                if (isset($_POST["send"])) {
                    if (empty($systemErrors)) { ?>
                        <div class="alert alert-success m-2 text-center" role="alert">
                            Message send successfully!
                        </div>
                <?php }
                } ?>

            </form>


            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->

        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Belgrade\Serbia, </p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+381 60 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>bookstoret@gmail.com</p>
                </li>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"> -->


                <a href="https://www.facebook.com/" target="_blank"><img src="./public/theme/img/social/icons8-facebook-48.png" width="70px" alt="logofb"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="./public/theme/img/social/icons8-instagram-48.png" width="70px" alt="logoins"></a>

                <!-- </svg> -->

            </ul>
        </div>

        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->