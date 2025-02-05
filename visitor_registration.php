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



 require_once "config.php";
// Define variables and initialize with empty values
$event_number='10MWBIZ';

$visitor_type=$title=$name= $company=$designation=$email= $address=$country = $mobile=$telephone  =$interested_field=$other=$visited_before=$email_duplicale="";

$visitor_typeErr=$titleErr=$nameErr= $companyErr=$designationErr=$emailErr= $addressErr=$countryErr = $mobileErr=$telephoneErr =$visited_beforeErr="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 

 if (empty($_POST["visitor_type"])) {
    $visitor_typeErr = "Required field";
  } else {
    $visitor_type =$_POST["visitor_type"];
  }


if (empty($_POST["title"])) {
    $titleErr = "Title Required";
  } else {
    $title =$_POST["title"];
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

    // Validate user company name
    if(empty($_POST["company"])){
        $companyErr = 'Company Name required';
    }else{
        $company = filterString($_POST["company"]);
        if($company == FALSE){
            $companyErr = 'Alphabet & space are accepted.';
        }
    }
  
  
  // Validate user designation
    if(empty($_POST["designation"])){
        $designationErr = 'Designation required';
    }else{
        $designation = filterString($_POST["designation"]);
        if($designation == FALSE){
            $designationErr = 'Alphabet & space are accepted.';
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
    
     // Validate company address 5
    if(empty($_POST["address"])){
        $addressErr = " Address Required";
    } else{
        $address = filterString($_POST["address"]);
        if($address == FALSE){
            $addressErr = "";
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


	// Validate phone
	
       if(empty($_POST["mobile"])){
        $mobileErr = " Mobile required";     
    } else{
        $mobile = filterPhone($_POST["mobile"]);
        if($mobile == FALSE){
            $mobileErr = "Invalid format.";
        }
    }

       if(empty($_POST["telephone"])){
        $telephone = " ";     
    } else{
        $telephone = filterPhone($_POST["telephone"]);
        if($telephone == FALSE){
            $telephoneErr = "Invalid format.";
        }
    }
   

   if (empty($_POST["interested_field"])) {
    $interested_field= "";
  } else {
    $interested_field = ($_POST["interested_field"]);
  }


   if (empty($_POST["other"])) {
    $other = "";
  } else {
    $other = ($_POST["other"]);
  }
   
    // Validate rank 11
  if (empty($_POST["visited_before"])) {
    $visited_beforeErr = "Required Field";
  } else {
    $visited_before =$_POST["visited_before"];
  }
   

if( empty($visitor_typeErr) && empty($titleErr) && empty($nameErr)  && empty($companyErr)  && empty($designationErr) && empty($emailErr) && empty($addressErr) && empty($countryErr) && empty($mobileErr)  && empty($visited_beforeErr)){
	            // Prepare an insert statement
      
$sql = "SELECT * FROM visitor_registration WHERE email='$email' AND event_number='$event_number'";
 $results = mysqli_query($link, $sql);
    if (mysqli_num_rows($results) > 0) {
     $row = mysqli_fetch_assoc($results);

      if ($email==$row['email'] && $event_number==$row['event_number'])
            {
               $email_duplicale="DUPLICATE ! EMAIL ALREADY EXITS.";
                
            }
      
    }else{
        $industry_type = implode(",", $interested_field);
        $sql = "INSERT INTO visitor_registration (visitor_type,title, name, company, designation,email, address, country, mobile, telephone, industry_type, other, visited_before, event_number) VALUES (?,?,?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssssss",$param_visitor_type, $param_title, $param_name , $param_company ,$param_designation, $param_email, $param_address, $param_country, $param_mobile, $param_telephone, $param_industry_type, $param_other,$param_visited_before, $param_event_number);
            
            // Set parameters
           $param_visitor_type = $visitor_type;
           $param_title = $title;
           $param_name = $name;
           $param_company = $company;
           $param_designation = $designation;
           $param_email = $email;
           $param_address = $address;
           $param_country = $country;
           $param_mobile = $mobile;
           $param_telephone = $telephone;
           $param_industry_type = $industry_type;
           $param_other = $other;
           $param_visited_before = $visited_before;
           $param_event_number = $event_number;


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location:successful.php");
                exit();
            } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    }

    // Close connection
    mysqli_close($link);       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muslim World BIZ Official Website</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="image/mwbiz.png">
  <meta name="description" content="Beat the queue and gain faster access to the exhibition"/>
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
 <nav class="navbar navbar-expand-lg ">
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
    
    <li class="nav-item active">
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
        
        <a class="dropdown-item" href="media-registration.php"> MEDIA REGISTRATION  </a>
       
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
    </nav><br><br>
    <div class="container">
   <div class="contact">
    <div class="row">
  <div class="col-md-12">
   <div class="registration">
     <img  class="img-fluid" src="image/coverphoto/visitor-24.jpg" alt="Visitor" >
<p class="error"> * required field</p>
<div class="success"><center><?=$email_duplicale ; ?></center></div>   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="row">
<div class="col-md-2">
    REGISTRATION  AS  
</div>


<div class="col-md-4">
    <input type="radio" name="visitor_type" <?php if (isset($visitor_type) && $visitor_type=="Visitor") echo "checked";?> value="Visitor">&nbspVisitor
   
    <input type="radio" name="visitor_type" <?php if (isset($visitor_type) && $visitor_type=="Trade Visitor") echo "checked";?> value="Trade Visitor">Trade Visitor
   <span class="error">* <?php echo $visitor_typeErr;?></span>
</div>
</div>   

     <p><br>
      <label for="inputName">TITLE<b class="error">*</b></label>
      <select name="title">  <b class="error">*</b>
  <option value="<?php echo $title; ?>" hidden>Select Title</option>   
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Tun">Tun</option>
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
            <label for="inputEmail">EMAIL <b class="error">*</b></label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        </div>

        
      </div>     
        

      <div class="row">

         <div class="col-md-12">
 <p>
 <label for="inputAddress"> ADDRESS<b class="error">*</b></label>
 <textarea name="address" style="border:1px solid #000f89; border-radius:0px;" id="inputComment" class="form-control"  rows="2" cols="53"><?php echo $address; ?></textarea>
 <span class="error"><?php echo $addressErr; ?></span>
 </p>
 </div>
        <div class="col-md-4">
        <p>
         <label for="input">COUNTRY <b class="error">*</b></label>
            <input type="text" name="country" id="inputCountry" value="<?php echo $country; ?>">
      <span class="error"><?php echo $countryErr; ?></span>
        </p>
        </div>
     
        <div class="col-md-4">
        <p>
            <label for="input">MOBILE<b class="error">*</b></label>
            <input type="text" name="mobile" id="inputMobile" value="<?php echo $mobile; ?>">
      <span class="error"><?php echo $mobileErr; ?></span>
        </p>   
        </div>
        <div class="col-md-4">
      <p>
            <label for="input">TELEPHONE</label>
            <input type="text" name="telephone" id="inputTelephone" value="<?php echo $telephone; ?>">
            <span class="error"><?php echo $telephoneErr; ?></span>
        </p>     
        </div>
      </div>

 <label for="input"><b>Which business industry are you interested in?</b><b class="error">*</b></label><br>

  <div class="row">

   <div class="col-md-3"> 
    <input type="checkbox" name="interested_field[]" value="Cosmetics" /> 
    ​ <span class="checkmark"></span>
   <label class="special">Cosmetics</label>
     </div>

<div class="col-md-3"> 
    <input type="checkbox" name="interested_field[]" value="Management and service" /> 
    ​ <span class="checkmark"></span>
   <label class="special">Management and service</label>
</div>

<div class="col-md-3"> 
    <input type="checkbox" name="interested_field[]" value="Government agency " /> 
    ​ <span class="checkmark"></span>
   <label class="special">Government agency </label>
</div>

<div class="col-md-3"> 
    <input type="checkbox" name="interested_field[]" value="Trading " /> 
    ​ <span class="checkmark"></span>
   <label class="special">Trading </label>
</div>


<div class="col-md-3">
    <input type="checkbox" name="interested_field[]" value="FOOD AND BEVERAGES" /> 
    ​ <span class="checkmark"></span>
   <label class="special">Food And Beverages</label>
</div>

<div class="col-md-3">
    <input type="checkbox" name="interested_field[]" value="TEXTILE" /> 
    ​ <span class="checkmark"></span>
   <label class="special">Textile @ Clothing </label>
</div>


<div class="col-md-3">
    <input type="checkbox" name="interested_field[]" value="E-commerce" /> 
    ​ <span class="checkmark"></span>
   <label class="special">E-commerce </label>
</div>

<div class="col-md-3">
     <input type="checkbox" name="interested_field[]" value="Medical & Pharmaceutical" /> 
    ​ <span class="checkmark"></span>
   <label class="special">Medical & Pharmaceutical</label>
</div>

<div class="col-md-3">
    <input type="checkbox" name="interested_field[]" value="Information Technology" /> 
    ​ <span class="checkmark"></span>
     <label class="special">Information Technology </label>
</div>

<div class="col-md-3">
     <input type="checkbox" name="interested_field[]" value="Agriculture" /> 
    ​ <span class="checkmark"></span>
     <label class="special">Agriculture </label>
</div>


<div class="col-md-3">
     <input type="checkbox" name="interested_field[]"  value="Insurance and Banking" /> 
    ​ <span class="checkmark"></span>
     <label class="special"> Insurance and Banking</label>
</div>

<div class="col-md-3">
     <input type="checkbox" name="interested_field[]" value="Education" /> 
    ​ <span class="checkmark"></span>
     <label class="special">Education</label>
</div>

<div class="col-md-3">
     <input type="checkbox" name="interested_field[]" value="Tourism" /> 
    ​ <span class="checkmark"></span>
   <label class="special">Tourism </label>
</div>

<div class="col-md-3">
     <input type="checkbox" name="interested_field[]" value="Beauty & Wellness" /> 
    ​ <span class="checkmark"></span>
     <label class="special">Beauty & Wellness</label>
</div>

<div class="col-md-6">
     <input type="checkbox" id="myCheck"  onclick="myFunction()">
    ​ <span class="checkmark"></span>
    <label class="special">Others </label>
     <p id="text" style="display:none">
    <input type="text" placeholder="Please State" name="other"></p>
</div>
   
<div class="col-md-8">
   <p>
        <b>HAVE YOU VISITED THE MUSLIM WORLD BIZ BEFORE? </b> 
   <input type="radio" name="visited_before" <?php if (isset($visited_before) && $visited_before=="YES") echo "checked";?> value="YES">&nbspYES

   <input type="radio" name="visited_before" <?php if (isset($visited_before) && $visited_before=="no") echo "checked";?> value="NO">NO
   <span class="error">* <?php echo $visited_beforeErr;?></span>
  </p>   
</div>

   </div>
        
   
       
        <br>
    
  <input type="submit"  class="btn btn-success"  value="Send" onClick="clearform();">
  <input type="reset"  class="btn btn-danger" value="Reset"><br><br>
      
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

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

</body>
</html>
