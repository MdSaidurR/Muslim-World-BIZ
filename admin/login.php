<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <title>SB Admin - Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    .error {
  width: 100%; 
  margin: 0px auto; 
  padding: 5px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  text-align: left;
  margin-bottom:10px;
  border-radius:5px;
}
  </style>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
       <form method="post" action="login.php">
        <?php include('errors.php'); ?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="admin_email" name="admin_email" class="form-control"  required="required">
              <label>Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" class="form-control"  required="required">
              <label>Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block"  name="login_admin">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
