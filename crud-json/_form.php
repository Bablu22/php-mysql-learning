<div class="container mx-auto mt-5">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                Update user <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                        class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>"
                        class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                        class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>"
                        class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['phone'] ?>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Website</label>
                    <input name="website" value="<?php echo $user['website'] ?>"
                        class="form-control  <?php echo $errors['website'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['website'] ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>