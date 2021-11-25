<!DOCTYPE html>
<html lang="en">
<?= view('admin/main/head'); ?>
<body>
    
<div class="app flex-row align-items-center ng-scope">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
            <div class="card-group">
               <div class="card p-4">
                 <form action="./userlogin" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">Login</button>
                            </div>
                            <div class="col-6 text-right">
                            <button type="button" class="btn btn-link px-0">Forgot password?</button>
                            </div>
                        </div>
                    </div>
                 </form>
               </div>
               <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                  <div class="card-body text-center">
                     <div>
                        <h2>Sign up</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="./register" class="btn btn-primary active mt-3">Register Now!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

</body>
<?= view('admin/main/footer'); ?>
</html>