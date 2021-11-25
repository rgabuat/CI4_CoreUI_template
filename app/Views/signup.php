<!DOCTYPE html>
<html lang="en">
<?= view('admin/main/head'); ?>
<body>
<div class="app flex-row align-items-center ng-scope">
<div class="container">

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mx-4">
        <?php if(isset($validation)):?>
                <div class="alert alert-warning mb-3">
                   <?= $validation->listErrors() ?>
                </div>
        <?php endif;?>
          <form action="<?php echo base_url('/validate-form') ?>" method="post" enctype="multipart/form-data">
            <div class="card-body p-4">
                <h1>Register</h1>
                <p class="text-muted">Create your account</p>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="icon-user"></i>
                    </span>
                </div>
                <input class="form-control" name="username" type="text" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input class="form-control" name="email" type="text" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="icon-lock"></i>
                    </span>
                </div>
                <input class="form-control" name="password" type="password" placeholder="Password">
                </div>
                <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="icon-lock"></i>
                    </span>
                </div>
                <input class="form-control" name="confirmpassword" type="password" placeholder="Repeat password">
                </div>
                <button class="btn btn-block btn-success" type="submit">Create Account</button>
            </div>
          </form>
          <!-- <div class="card-footer p-4">
            <div class="row">
              <div class="col-6">
                <button class="btn btn-block btn-facebook" type="button">
                  <span>facebook</span>
                </button>
              </div>
              <div class="col-6">
                <button class="btn btn-block btn-twitter" type="button">
                  <span>twitter</span>
                </button>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<?= view('admin/main/footer'); ?>
</html>