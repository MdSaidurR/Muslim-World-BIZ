
<?php

$statusMsg='';
if(isset($_FILES["file"]["name"])){
     $title = $_POST['title'];
     $name = $_POST['name'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $company = $_POST['company'];
     $industry_type= $_POST['industry_type'];
     $rtt_seat_num = $_POST['rtt_seat_num'];
     $oic_seat_num= $_POST['oic_seat_num'];
     $summit_seat_num = $_POST['summit_seat_num'];
     $total_seat_num = $_POST['total_seat_num'];
    
$fromemail =  $email;
$subject="MALAYSIAN DELEGATE REGISTRATION";
$email_message = '<h2>DELEGATE DETAILS</h2>
                    Title:'.$title.'<br>
                    Name: '.$name.'<br>
                    Address: '.$address.'<br>
                    Email: '.$email.'<br>
                    Phone: '.$phone.'<br>
                    Company: '.$company.'<br>
                    Industry: '.$industry_type.'<br>
                  
                    <h3>WHICH PACKAGE WOULD YOU LIKE TO CHOOSE?</h3><br>
                    <h3>ROUND TABLE TALK</h3>
                    Seat Number:'. $rtt_seat_num.' <br>
  <h3>OIC ARAB-ASIA TRADE & ECONOMIC FORUM</h3>
  Seat Number:'.$oic_seat_num.'<br>
  <h3>THE MUSLIM WORLD WOMENS SUMMIT</h3>
  Seat Number:'.$summit_seat_num.' <br>
     TOTAL NUMBER OF SEATS & PRICE:'.$total_seat_num.'
     <h3>PLEASE CHECK THE ATTACHMENT</h3>';

$semi_rand = md5(uniqid(time()));
$headers = "From: ".$fromemail;

$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";

if($_FILES["file"]["name"]!= ""){  
  $strFilesName = $_FILES["file"]["name"];  
  $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
  
  
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";


    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: application/octet-stream;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}
$toemail="job_offer@oictoday.biz";  
if(mail($toemail, $subject, $email_message, $headers)){
   $statusMsg= "Congratulations! Your request has been sent successfully.";
}else{
   $statusMsg= "Your request has been failed.Please,try again.";
}
}

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muslim World BIZ Official Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">
  <style type="text/css">

    .success{
      padding-top:40px;
      font-size:40px;
      font-family:"tw cen mt";
      text-align: center;
     color:#000f89;
    }


  </style>
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
       <a href="index.html"><img class="img-fluid" src="image/mwbiz.png"   alt="" height="110"width="110"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <i class="fa fa-bars" style="font-size:40px; border: none; color:red"></i>
  </button>
         <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">HOME</a>
      </li>
     
       <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        ABOUT US
      </a>
      <div class="dropdown-menu">
         <a class="dropdown-item" href="mwb-overview.html"> MWB Overview</a>
        <a class="dropdown-item" href="founder.html">FOUNDER</a>
     <a class="dropdown-item" href="organiser.html">ORGANISER</a>
        
      </div>
    </li> 


     <li class="nav-item">
        <a class="nav-link" href="exhibition-zone.html">EXHIBITION ZONE</a>
      </li>
    
     <li class="nav-item">
        <a class="nav-link" href="conference-zone.html">CONFERENCE ZONE</a>
      </li>

  <li class="nav-item">
        <a class="nav-link" href="award-ceremonies.html">AWARD CEREMONIES</a>
   </li>
   
    <li class="nav-item">
        <a class="nav-link" href="trade-visitors.html">VISITORS</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        TRAVEL & ACCOMMODATION
      </a>
      <div class="dropdown-menu">
         <a class="dropdown-item" href="accommodation.html">ACCOMMODATION</a>
        <a class="dropdown-item" href="#">GETTING TO 9TH MWB 2019</a>
      </div>
    </li> 
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
       MEDIA CENTRE
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="media-guid.html">MEDIA GUIDE</a>
        <a class="dropdown-item" href="#">MEDIA PARTNERS</a>
        <a class="dropdown-item" href="media-registration.php"> MEDIA REGISTRATION  </a>
        <a class="dropdown-item" href="#">INTERVIEW ARRANGEMENT</a>
        <a class="dropdown-item" href="news.html">MWB IN THE PRESS</a>
        <a class="dropdown-item" href="newsletter.php">NEWSLETTER </a>
        <a class="dropdown-item" href="photo-gallery.php">PHOTO GALLERY</a>
        
      </div>
    </li> 
    
     <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT US</a>
      </li>
    
    
    </ul>
  </div> 
    </nav><br><br><br>

<div class="container"><br>
 
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
  <div class="success">
 <?php if(!empty($statusMsg)){ ?>
    <p><?php echo $statusMsg; ?></p>
<?php } ?>
  </div>
    </div>
<div class="col-md-3"></div>
    
   </div>
   

<br>
</div>
<button onclick="topFunction()" id="myBtn"><i class="up"></i></button>
</div><br>

<div class="summary">
  <div class="row">
    <div class="col-md-2">
      <div class="vertical-menu">
   <p>ABOUT US </p>
    <a href="mwb-overview.html"> MWB overview</a>
    <a href="founder.html"> Founder</a>
   <a href="organiser.html"> Organiser</a>
   
    
    
      </div>
    </div>
    <div class="col-md-2">
      <div class="vertical-menu">
        <p> REGISTER AS</p>
        <a href="exhibitor-registration.php">Exhibitor</a>
        <a href="delegate-registration.html">Conference Delegate</a>
        <a href="trade-buyer.php">Trade Buyer</a>
        <a href="visitor-pre-registration.php">Public Visitor</a>
        <a href="media-registration.php">Media Representative </a>
       
      </div>
    </div>

     <div class="col-md-3">
       <div class="vertical-menu">
         <p> CONFERENCES ZONE</p>
        <a  href="rtt.html">Round Table Talk</a>
        <a  href="mwws.html">Muslim World Women's Summit</a>
    <a href="oic-arab-asia-te.html">OIC Arab-asia Trade & Economic</a>
    <a href="ohec.html">OIC Higher Education Conference</a>
         <a  href="witc.html">World Islamic Tourism Conference</a> 
       </div>
    </div>

     <div class="col-md-3">
      <div class="vertical-menu">
        <p> AWARD CEREMONIES</p>
        <a  href="jewels.html">Jewels Of The Muslim World</a>
        <a  href="rania.html">Muslim World Rania Award</a>
        <a  href="mweda-award.php">MWEDA</a>
          <p>  VISITORS</p>
        <a  href="visitor-pre-registration.php"> Visitor Pre-registration</a>
      </div>
    </div>

     <div class="col-md-2">
      <div class="vertical-menu">
         <p> MEDIA CENTRE</p>
        <a  href="media-registration.php">Media Registration </a>
       <a  href="media-guid.html">Media Guide</a>
        <a  href="news.html">MWB In The Press</a>
        <a  href="newsletter.php">Newsletter</a>
        <a  href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid">
    <div class="row no-gutters">

<div class="col-md-4">
  <div class="copy">
  <p>Official Website of Muslim World BIZ<br>
&copy; 2019 muslimworldbiz.com All Rights Reserved.</p>
 </div>
  </div>
  
 <div class="col-md-4">
  <div class="copy">
  <p> Suite 1A, 24th Floor, Menara TH Selborn,<br>
153 Jalan Tun Razak, 50400, Kuala Lumpur, Malaysia<br>
Call<span style='font-size:20px;'>&#58;</span>&nbsp+603 2681 0037 &nbsp &nbsp Email<span style='font-size:20px;'>&#58;</span>&nbsp info@oictoday.biz</p>
      
 </div>
</div>
 <div class="col-md-2">

    <h4 style="padding-top:15px;">KEEP IN TOUCH:</h4>
  
  </div>
      <div class="col-md-2">

   <ul class="list-inline social-buttons">
                
                <li class="list-inline-item">
        <a href="https://www.facebook.com/oicmuslimworldbiz/"  target="_blank" > <i class="fa fa-facebook"></i></a>
                </li>

                <li class="list-inline-item">
        <a href="https://twitter.com/@muslimworldbiz"  target="_blank" >  <i class="fa fa-twitter"></i></a>
                </li>

                <li class="list-inline-item">
        <a href="https://www.instagram.com/muslimworldbiz/"  target="_blank" ><i class="fa fa-instagram"></i></a>
                </li>
                 <li class="list-inline-item">
                  <a href="https://www.youtube.com/channel/UCvoXZNPLl5iaMTWzPwltBYg"  target="_blank" > <i class="fa fa-youtube"></i></a>
                </li>
              </ul>

      </div>   
 
 </div>
 
</footer>

</body>
</html>
