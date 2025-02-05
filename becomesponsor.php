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

function filterWebsite($field){
$field = filter_var(trim($field), FILTER_SANITIZE_URL);
 
// Validate website url
  
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i")))){
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
$titleErr=$nameErr =$designationErr= $emailErr=$mobileErr=$companyErr=$addressErr=$countryErr=$telephoneErr=$websiteErr=$natureErr="";

$title=$name =$designation= $email =$mobile= $company=$address= $country=$telephone=$website=$nature=$success="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
if (empty($_POST["title"])) {
    $titleErr = "Package is required";
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
    

  // Validate user designation
    if(empty($_POST["designation"])){
        $designationErr = 'Designation is required';
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
    
	// Validate phone
	
       if(empty($_POST["mobile"])){
        $mobileErr = " Mobile number is required.";     
    } else{
        $mobile = filterPhone($_POST["mobile"]);
        if($mobile == FALSE){
            $mobileErr = "Invalid format.";
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
  
// Validate company address 5
    if(empty($_POST["address"])){
        $addressErr = " Address is required.";
    } else{
        $address = filterString($_POST["address"]);
        if($address == FALSE){
            $addressErr = "";
        }
    }

// Validate user country
    if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country =$_POST["country"];
  }




       if(empty($_POST["telephone"])){
        $telephoneErr = " Telephone number is required.";     
    } else{
        $telephone = filterPhone($_POST["telephone"]);
        if($telephone == FALSE){
            $telephoneErr = "Invalid format.";
        }
    }
   
   if(empty($_POST["website"])){
        $websiteErr = "Website is required.";
    } else{
        $website = filterWebsite($_POST["website"]);
        if($website == FALSE){
            $websiteErr = "Invalid format.";
        }
    }
	
	// Validate company address 5
    if(empty($_POST["nature"])){
        $natureErr = "required.";
    } else{
        $nature = filterString($_POST["nature"]);
        if($address == FALSE){
            $natureErr = "";
        }
    }
	
   
     
   
    
    
    if($_POST){
	     if( empty($titleErr) && empty($nameErr) && empty($designationErr) && empty($emailErr) && empty($mobileErr) && empty($companyErr) && empty($addressErr) && empty($countryErr) &&  empty($telephoneErr)  && empty($websiteErr) && empty($natureErr)){
	      
	        
	      // Recipient email address
	        //$to = 'saydulhaque.iium@gmail.com';
	        $to = 'muslimworld.oic@gmail.com';
	        // Create email headers
	        $headers =  'MIME-Version: 1.0' . "\r\n"; 
	        $headers = "From:MWB-2019@MUSLIMWORLDBIZ.COM\n";
          $headers .= "Reply-To: $email\n"; 
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			    $subject="BECOME SPONSOR";
	          $message = "
             TITLE: $title <br/>
	           NAME: $name <br/>
             DESIGNATION: $designation <br/>
	           EMAIL: $email <br/>
             MOBILE: $mobile <br/>
             <h3>COMPANY INFORMATION</h3>
             NAME OF COMPANY:$company <br/>
             ADDRESS:$address<br/>
             COUNTRY: $country <br/>
             TELEPHONE: $telephone <br/>
             WEBSITE:$website <br/>
             NATURE OF BUSINESS:$nature
	                   ";
	
	        
	        // Sending email
	        if(mail($to, $subject, $message, $headers)){
	         $success="Your request has been submitted successfully!";
         $title=$name =$designation= $email =$mobile= $company=$address= $country=$telephone=$website=$nature="";

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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="image/mwbiz.png">
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
        <a class="nav-link" href="index.php">HOME</a>
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
        <a class="nav-link" href="Conference-zone.html">CONFERENCE ZONE</a>
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
    </nav><br><br><br><br>
    <div class="container">
   <div class="contact">
    <div class="row">
  <div class="col-md-12">
   <div class="registration">
     <img  class="img-fluid" src="image/coverphoto/becomesponsor.jpg" alt="mwbiz-9" >
<p class="error"> * required field</p>   
<form action="becomesponsor.php" method="post">
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
 <div class="col-md-6">
      <p>
            <label for="input">MOBILE <b class="error">*</b></label>
            <input type="text" name="mobile" id="inputMobile" value="<?php echo $mobile; ?>">
      <span class="error"><?php echo $mobileErr; ?></span>
        </p>     
        </div>
      </div>

 <label><b>COMPANY INFORMATION</b></label><br>
  <div class="row">

 <div class="col-md-4">
     <p>
            <label for="input">NAME OF COMPANY <b class="error">*</b></label>
  <input type="text" name="company" id="inputcompany" value="<?php echo $company; ?>">
      <span class="error"><?php echo $companyErr; ?></span>
        </p>    
        </div>
<div class="col-md-5">
   <label for="inputAddress">ADDRESS<b class="error">*</b></label>
 <textarea name="address" style="border:1px solid #000f89; border-radius:0px;" id="inputComment" class="form-control" required=""  rows="1" cols="53"></textarea>

  </div>
 <div class="col-md-3">
    <p>
      <label for="inputName">COUNTRY<b class="error">*</b></label><br>
     <select name="country" style="height:30px; border: 1px solid #000f89;" >  <b class="error">*</b>
  <option hidden>------Select Country------</option> 
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value=" South Korea"> South Korea</option>
    <option value=" North Korea">Korea</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao </option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan">Libyan</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value=" Malvinas"> Malvinas</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia</option>
    <option value="Moldova">Moldova</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands">Virgin Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select><span class="error"><?php echo $countryErr; ?></span>
</p>
    </div>

        


</div><br>


 <div class="row">

        <div class="col-md-4">
        <p>
            <label for="input">TELEPHONE<b class="error">*</b></label>
            <input type="text" name="telephone" id="inputtelePhone" value="<?php echo $telephone; ?>">
      <span class="error"><?php echo $telephoneErr; ?></span>
        </p>   
        </div>

        <div class="col-md-4">
        <p>
            <label for="input">WEBSITE<b class="error">*</b></label>
            <input type="text" name="website" id="inputwebsite" value="<?php echo $website; ?>">
      <span class="error"><?php echo $websiteErr; ?></span>
        </p>   
        </div>

        <div class="col-md-4">
        <p>
            <label for="input">NATURE OF BUSINESS<b class="error">*</b></label>
            <input type="text" name="nature" id="inputnature" value="<?php echo $nature; ?>">
      <span class="error"><?php echo $natureErr; ?></span>
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
