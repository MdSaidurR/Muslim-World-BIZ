

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header ">Update Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>

         <?php
   include 'config.php';
   if(!isset($_GET["code"])){
       exit("Can't Find Page");
     }

$code= $_GET["code"];
 $getEmailQuery = mysqli_query($link, "SELECT admin_email FROM resetpassword WHERE code='$code'");
 if(mysqli_num_rows($getEmailQuery) == 0){
  exit("Can't Find Page");
 }

if(isset($_POST["password"])){
  $pw = $_POST["password"];
  $pw=md5($pw);
  $row = mysqli_fetch_array($getEmailQuery);
  $admin_email = $row["admin_email"];
  $query=mysqli_query($link, "UPDATE admin SET password='$pw' WHERE admin_email='$admin_email'");

  if($query){
    $query= mysqli_query($link, "DELETE FROM resetpassword WHERE code='$code'");
    exit(" Password Updated!");
  }
    else{
      exit("Something Worng");
    }

}
  
          ?>


        </div>
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" class="form-control" required="required">
               <label>Enter new Password</label>
            
            </div>
          </div>
          <button  type="submit" class="btn btn-primary btn-block" >Update Password</button>
        </form>
       
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
