<div class="container rounded bg-white mt-3 mb-3">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?= $user[0]["image"] ?> "><span class="font-weight-bold"><b>HELLO </b> <?= $user[0]["name"] ?> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">My Profile </h4>
                </div>
                <div class="row mt-2">
                    <?php
                    foreach ($user as $value); ?>
                    <form action="profile-page.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="name" value="<?= $value["name"]; ?>">
                        </div>

                        <div class="col-md-6"><label class="labels">Last name</label><input type="text" class="form-control" name="last_name" value="<?= $value["last_name"]; ?>" placeholder="Last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" name="email" value="<?= $value["email"]; ?>"></div>
                    <div class="col-md-12"><label class="labels">Ages</label><input type="text" class="form-control" placeholder="Ages" name="ages" value="<?= $value["ages"]; ?>"></div>
                    <div class="col-md-12"><label class="labels">Change image</label><input type="file" class="form-control" placeholder="Image" name="file" value="<?= $value["image"]; ?>"></div>

                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="save" type="submit">Save Profile</button></div>
                </form>
            </div>
        </div>
        <!-- <div class="col-md-4">
 
    </div>
</div>
</div>
</div>
</div>