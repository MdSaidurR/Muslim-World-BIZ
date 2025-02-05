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

function filterPhone($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^\+?\d{1,3}[\s-]?\d{1,3}[\s-]?\d{1,4}[\s-]?\d{1,4}$/")))){
        return $field;
    } else{
        return FALSE;
    }
}

function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}


 
// Define variables and initialize with empty values
$titleErr=$nameErr = $emailErr = $telephoneErr= $phoneErr=$companyErr=$designationErr=$countryErr=$numberErr="";
$title=$name = $email = $telephone=$phone =$company=$designation = $country = $arab_asia=$rtt=$summit=$number=$success="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
if (empty($_POST["title"])) {
    $titleErr = "Title is required";
  } else {
    $title =$_POST["title"];
  }

if (empty($_POST["number"])) {
    $numberErr = "Number is required";
  } else {
    $number =$_POST["number"];
  }

    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = 'Name is required';
    }else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = 'Alphabet & space are accepted.';
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = 'Email is required';     
    }else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = 'Invalid Email.';
        }
    }
    
	// Validate phone
	
       if(empty($_POST["phone"])){
        $phoneErr = " Phone number is required.";     
    } else{
        $phone = filterPhone($_POST["phone"]);
        if($phone == FALSE){
            $phoneErr = "Invalid format.";
        }
    }

       if(empty($_POST["telephone"])){
        $telephoneErr = " Telephone number is required.";     
    } else{
        $telephone = filterPhone($_POST["telephone"]);
        if($telephone == FALSE){
            $telephoneErr = "Invalid format.";
        }
    }
   
   
   // Validate user company name
    if(empty($_POST["company"])){
        $companyErr = 'Company Name is required';
    }else{
        $company = filterString($_POST["company"]);
        if($company == FALSE){
            $companyErr = 'Alphabet & space are accepted.';
        }
    }
	
	
	// Validate user designation
    if(empty($_POST["designation"])){
        $designationErr = 'Designation is required';
    }else{
        $designation = filterString($_POST["designation"]);
        if($designation == FALSE){
            $designationErr = 'Alphabet & space are accepted.';
        }
    }
	
	// Validate user country
    if(empty($_POST["country"])){
        $countryErr = 'Country is required';
    }else{
        $country = filterString($_POST["country"]);
        if($country == FALSE){
            $countryErr = 'Alphabet & space are accepted.';
        }
    }


      if (empty($_POST["arab_asia"])) {
    $arab_asia = "";
  } else {
    $arab_asia = ($_POST["arab_asia"]);
  }
  
  
    if (empty($_POST["rtt"])) {
    $rtt = "";
  } else {
    $rtt = ($_POST["rtt"]);
  }
  
  
   if (empty($_POST["summit"])) {
    $summit= "";
  } else {
    $summit = ($_POST["summit"]);
  }
 
   
    if($_POST){
	     if( empty($titleErr) && empty($nameErr) && empty($emailErr) && empty($telephoneErr) && empty($phoneErr) && empty($companyErr) && empty($designationErr) && empty($countryErr) && empty($numberErr)){
	      
	        
	      // Recipient email address
	        //$to = 'saydulhaque.iium@gmail.com';
	        $to = 'muslimworld.oic@gmail.com';
	        
	        // Create email headers
	        $headers =  'MIME-Version: 1.0' . "\r\n"; 
	        $headers = "From:MWB-2019@MUSLIMWORLDBIZ.COM\n";
          $headers .= "Reply-To: $email\n"; 
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			    $subject="CONFERENCE DELEGATE PRE-REGISTRATION";
	          $message = "
             TITLE: $title <br/>
	           NAME: $name <br/>
	           EMAIL: $email <br/>
             TELEPHONE: $telephone <br/>
			       PHONE: $phone <br/>
	           COMPANY: $company <br/>
             COUNTRY: $country <br/>
             I AM INTERESTED IN ATTENDING:
	           : $arab_asia <br/>
	           : $rtt <br/>
             : $summit <br/>
            NUMBER OF ATTENDEES:$number
	                   ";
	
	        
	        // Sending email
	        if(mail($to, $subject, $message, $headers)){
	         $success="Your request has been submitted successfully!";
         $title=$name = $email = $telephone=$phone =$company=$designation = $country = $arab_asia=$rtt=$summit=$number="";

	        }else{
	            echo '<p class="error">Unable to submit your request. Please try again!</p>';
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
  <meta name="description" content="Conference seats are limited, but you can reserve your place by registering today"/>
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
  
  


</head>
<body >
 <nav class="navbar navbar-expand-lg  fixed-top" >
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
       
        <a class="dropdown-item" href="#"> MEDIA REGISTRATION  </a>
        <a class="dropdown-item" href="news.html">MWB IN THE PRESS</a>
        <a class="dropdown-item" href="#">NEWSLETTER </a>
        <a class="dropdown-item" href="photo-gallery.php">PHOTO GALLERY</a>
        
      </div>
    </li> 
    
     <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT US</a>
      </li>
    
    
    </ul>
  </div> 
    </nav><br><br><br><br>
    <div class="container">
   <div class="contact">
    <div class="row">
  <div class="col-md-12">
   <div class="registration">
     <img  class="img-fluid" src="image/coverphoto/delegate.jpg" alt="mwbiz-9" >
<p class="error"> * required field</p>   
<form action="delegate-registration.php" method="post">
     <p>
      <label for="inputName">TITLE<b class="error">*</b></label>
      <select name="title">  <b class="error">*</b>
  <option value="<?php echo $title; ?>" hidden>Select Title</option>   
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Tun">Tun.</option>
<option value="Tan Sri">Tan Sri</option>
<option value="Datuk">Datuk</option>
<option value="Dato Sri">Dato Sri</option>
<option value="Datuk Seri">Datuk Seri</option>
<option value="Pehin">Pehin</option>
<option value="Dato">Dato</option>
 <option value="JP">JP</option>
</select> <span class="error"><?php echo $titleErr; ?></span>
     </p>
  

      <div class="row">
        <div class="col-md-6">
          <p>
            <label for="inputName">NAME <b class="error">*</b></label>
            <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </p>
        </div>


        <div class="col-md-6">
     <p>
       <label for="input">COMPANY <b class="error">*</b></label>
      <input type="text" name="company" id="inputcompany" value="<?php echo $company; ?>">
      <span class="error"><?php echo $companyErr; ?></span>
    </p>    
        </div>

        <div class="col-md-6">
       <p>
            <label for="input">DESIGNATION <b class="error">*</b></label>
            <input type="text" name="designation" id="inputdesignation" value="<?php echo $designation; ?>">
      <span class="error"><?php echo $designationErr; ?></span>
        </p>   
        </div>

         <div class="col-md-6">
        <p>
         <label for="input">COUNTRY <b class="error">*</b></label>
            <input type="text" name="country" id="inputCountry" value="<?php echo $country; ?>">
      <span class="error"><?php echo $countryErr; ?></span>
        </p>
        </div>
      </div>
        
    <div class="row">
        <div class="col-md-4">
          <p>
            <label for="inputEmail">EMAIL <b class="error">*</b></label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        </div>
      
        <div class="col-md-4">
        <p>
            <label for="input">TELEPHONE<b class="error">*</b></label>
            <input type="text" name="telephone" id="inputtelePhone" value="<?php echo $telephone; ?>">
      <span class="error"><?php echo $telephoneErr; ?></span>
        </p>   
        </div>
        <div class="col-md-4">
      <p>
            <label for="input">PHONE <b class="error">*</b></label>
            <input type="text" name="phone" id="inputPhone" value="<?php echo $phone; ?>">
      <span class="error"><?php echo $phoneErr; ?></span>
        </p>     
        </div>
      </div>

 
        
        <label for="input"><b>I AM INTERESTED IN ATTENDING</b><b class="error">*</b></label><br>
           <div class="row">
     <div class="col-md-6">
     <input type="checkbox" name="arab_asia" value="OIC ARAB-ASIA TRADE AND ECONOMIC FORUM 2019" />
   ​ <span class="checkmark"></span>
   <label class="special">OIC Arab-Asia Trade and Economic Forum 2019
   
   </label>
   </div>
   <div class="col-md-6">
    <input type="checkbox" name="rtt" value="The Round Table Talk 2019" /> 
    ​ <span class="checkmark"></span>
   <label class="special">The Round Table Talk 2019
    
    </label>
   </div>
   <div class="col-md-6">
    <input type="checkbox" name="summit" value="The Muslim World Women’s Summit 2019" />
​     <span class="checkmark"></span>    
   <label class="special">The Muslim World Women’s Summit 2019
   
    </label>
    
   </div>
  </div><br>
  <div class="row">
  <div class="col-md-6">
    <p>
      <label for="inputName"><b>NUMBER OF ATTENDEES</b><b class="error">*</b></label>
      <select name="number">  <b class="error">*</b>
  <option value="<?php echo $number; ?>" hidden>Select Number</option>   
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
 <option value="10">10</option>
</select> <span class="error"><?php echo $numberErr; ?></span>
     </p>
   </div>
 </div>
        
        <input type="submit"  class="btn btn-success"  value="Send" onClick="clearform();">
        <input type="reset"  class="btn btn-danger" value="Reset"><br><br>
        
        <div class="success"><?=$success; ?> </div>
    </form>
  </div><br>
  </div>
</div>
</div>
 </div>
</div><br>
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
        <a href="delegate-registration.php">Conference Delegate</a>
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
