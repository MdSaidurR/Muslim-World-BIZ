

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>

         <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';


if(isset($_POST["admin_email"])){

 $emailTo= $_POST["admin_email"];

  $code = uniqid(true);
  $query = mysqli_query($link, "INSERT INTO resetpassword(code, admin_email) VALUES ('$code' , '$emailTo')");
   if(!$query){
    exit("error");
   }

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.oictoday.biz';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "saidur@oictoday.biz";                     // SMTP username
    $mail->Password   = "!@#saidur#@!";                               // SMTP password
    $mail->SMTPSecure = 'ssl';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also 
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('saidur@oictoday.biz', 'Password Reset');
    $mail->addAddress("$emailTo");     // Add a recipient      
    $mail->addReplyTo('no-reply@gmail.com', 'Information');
  
    // Content
    $url = "http://". $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset-password.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "<h3> Password Reset Link</h3>";
    $mail->Body    = "<h3> Your Request a Password Reset</h3>
                       click <a href='$url'>the link</a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Reset password link has been sent to your email';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$admin_email->ErrorInfo}";
}

exit();
}


?>


        </div>
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="admin_email" class="form-control" required="required">
               <label>Enter Email Address</label>
            
            </div>
          </div>
          <button  type="submit" class="btn btn-primary btn-block" >Reset Password</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="login.php">Login Page</a>
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
