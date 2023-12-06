<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url()?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?php if (session()->get('error')) : ?>
                    <div class="alert alert-danger" role="alert">
                      <strong><?= session()->get('error'); ?></strong>
                    </div>
                  <?php endif; ?>
                  <form action="<?= base_url("authentication/login") ?>" method="post">
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" name="username" class="form-control" placeholder="Masukkan username anda">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('register')?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>js/sb-admin-2.min.js"></script>
</body>
</html>