<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
        return $field;
    }else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    }else{
        return FALSE;
    }
}

 
// Define variables and initialize with empty values
$nameErr = $emailErr = "";
$name = $email ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = 'Name is required';
    }else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = 'Please enter a valid name.';
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = 'Email is required';     
    }else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = 'Please enter a valid email address.';
        }
    }
    
  
    
    
    if($_POST){
	     if(empty($nameErr) && empty($emailErr)){
	      
	        
	      // Recipient email address
	       $to = 'muslimworld.oic@gmail.com';
          // Create email headers
          $headers =  'MIME-Version: 1.0' . "\r\n"; 
          //$headers .= 'From:Enquiry@oictoday.biz <'.$email .'>' . "\r\n";
          $headers = "From: MWB-2019@MUSLIMWORLDBIZ.COM\n";
          $headers .= "Reply-To: $email\n"; 
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
            $subject="REQUEST FOR BROCHURE";
	          $message = "
	           Name: $name <br/>
	           Email: $email <br/>
	       
	                   ";
	
	        
	        // Sending email
	        if(mail($to, $subject, $message, $headers)){
           $name = $email ="";

	        }else{
	            echo '<p class="error">Unable to send email. Please try again!</p>';
	        }
	    }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muslim World BIZ Official Website</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="image/mwbiz.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/main.css">
 
  <style type="text/css">
  div.subscribe{
    background: #E5E4E2 !important;
    padding: 20px;
  }  
 .newsletter{
  padding-top:30px;
  text-align: center;
  line-height: 35px;
 }


  </style>>


</head>
<body >
 <nav class="navbar navbar-expand-lg  fixed-top">
     <a href="index.html"><img class="img-fluid" src="image/mwbiz.png"   alt="" height="110" width="110"></a>
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
        <li class="nav-item">
        <a class="nav-link" href="hotels.html">HOTELS</a>
    </li>
    <li class="nav-item dropdown active">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
       MEDIA CENTRE
      </a>
      <div class="dropdown-menu">
       <a class="dropdown-item" href="media-guid.html">MEDIA GUIDE</a>
        <a class="dropdown-item" href="media-registration.php"> MEDIA REGISTRATION  </a>
        <a class="dropdown-item" href="news.html">MWB IN THE PRESS</a>
        <a class="dropdown-item active" href="newsletter.php">NEWSLETTER </a>
        <a class="dropdown-item" href="photo-gallery.php">PHOTO GALLERY</a>
      </div>
    </li> 
    
     <li class="nav-item ">
        <a class="nav-link" href="contact.php">CONTACT US</a>
      </li>
    
    
    </ul>
  </div> 
    </nav><br><br><br>
  <img  class="img-fluid" src="image/background/organizer.jpg" alt="mwbiz-9" ><br><br>
<div class="container"> 
<div class="subscribe"> 
    <div class="row">
  <div class="col-md-6">
    <div class="newsletter">
      <p style="font-size:17px;"><span style="color:#000f89; font-size:22px; font-weight:bold;">SUBSCRIBE TO OUR NEWSLETTER NOW</span><br>you will not miss any of the updates related to <br>the 9th Muslim World Biz.</p>
  </div>
  </div>

<div class="col-md-6">
  <div class="newsletter">
  <form action="newsletter.php" method="post">
        <p>
            <input type="text" placeholder="Name" name="name" id="inputName" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </p>
        <p>
            <input type="text" placeholder="Email Address" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>   
        <p>
          <input type="submit" style="width:100%;" class="btn btn-success"  value="Subscribe" onClick="clearform();">
        </p>

    </form> 
    </div>    
</div>
</div>
</div><br>
</div>
<button onclick="topFunction()" id="myBtn"><i class="up"></i></button>

</div>

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

<div class="col-md-1"><p class="address">OFFICE ADDRESS<span style='font-size:20px;'>&#58;</span></p></div>
<div class="col-md-5">
  <div class="copy">
  <p> <span style="font-size:17px;">Suite 1A, 24th Floor, Menara TH Selborn</span><br>
153 Jalan Tun Razak, 50400, Kuala Lumpur, Malaysia<br>
Call<span style='font-size:20px;'>&#58;</span>&nbsp+603 2681 0037, &nbsp  Email<span style='font-size:20px;'>&#58;</span>&nbsp info@oictoday.biz</p>
      
 </div>
</div>


<div class="col-md-4">
  <div class="copy">
  <p><span style="font-size:17px;">Official Website of Muslim World BIZ</span><br>
&copy; 2019 muslimworldbiz.com All Rights Reserved.</p>
 </div>
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

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".nav a, footer a[href='#rania-award']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>
