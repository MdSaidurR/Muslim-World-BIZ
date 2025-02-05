<?php
  define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'oicinter_rahman');
define('DB_PASSWORD', 'eeu,_2L;Au]q');
define('DB_NAME', 'oicinter_muslimworldbiz');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
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
$titleErr=$nameErr =$designationErr= $emailErr =$codeErr=$phoneErr=$companyErr=$registrationErr=$profileErr=$industryErr=$statusErr=$clusterErr=$address1Err=$cityErr=$postcodeErr=$stateErr=$countryErr=$country_codeErr=$company_phoneErr="";
$title=$name =$designation = $email =$code=$phone=$company=$registration=$profile=$industry=$status=$cluster=$address1=$address2=$city=$postcode=$state=$country=$country_code=$company_phone=$interested_field=$other =$success="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
if (empty($_POST["title"])) {
    $titleErr = "Salutation is required";
  } else {
    $title =$_POST["title"];
  }


    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = 'Name is required';
    }else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = 'Alphabet & space are accepted';
        }
    }
    
// Validate user designation
    if(empty($_POST["designation"])){
        $designationErr = 'Designation is required';
    }else{
        $designation = filterString($_POST["designation"]);
        if($designation == FALSE){
            $designationErr = 'Alphabet & space are accepted';
        }
    }

    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = 'Email is required';     
    }else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = 'Invalid format';
        }
    }
    
    if (empty($_POST["code"])) {
    $codeErr = "Country code is required";
  } else {
    $code =$_POST["code"];
  }
	// Validate phone
	
       if(empty($_POST["phone"])){
        $phoneErr = " Phone number is required";     
    } else{
        $phone = filterPhone($_POST["phone"]);
        if($phone == FALSE){
            $phoneErr = "Invalid format";
        }
    }

   if (empty($_POST["country_code"])) {
    $country_codeErr = "Country code is required";
  } else {
    $country_code =$_POST["country_code"];
  }


       if(empty($_POST["company_phone"])){
        $company_phoneErr = " Company phone is required";     
    } else{
        $company_phone = filterPhone($_POST["company_phone"]);
        if($company_phone == FALSE){
            $company_phoneErr = "Invalid format.";
        }
    }
   
   
   // Validate user company name
    if(empty($_POST["company"])){
        $companyErr = 'Company is required';
    }else{
        $company = filterString($_POST["company"]);
        if($company == FALSE){
            $companyErr = 'Alphabet & space are accepted.';
        }
    }
	
   
   // Validate user company name
    if(empty($_POST["profile"])){
        $profileErr = 'Profile is required';
    }else{
        $profile = filterString($_POST["profile"]);
        if($profile == FALSE){
            $profileErr = 'Alphabet & space are accepted.';
        }
    }
 
  // Validate user company name
    if(empty($_POST["industry"])){
        $industryErr = 'Industry is required';
    }else{
        $industry = filterString($_POST["industry"]);
        if($industry == FALSE){
            $industryErr = 'Alphabet & space are accepted.';
        }
    }

 // Validate user company name
    if(empty($_POST["status"])){
        $statusErr = 'Status is required';
    }else{
        $status = filterString($_POST["status"]);
        if($status == FALSE){
            $statusErr = 'Alphabet & space are accepted.';
        }
    }
  
    if (empty($_POST["cluster"])) {
    $cluster = "";
  } else {
    $cluster = ($_POST["cluster"]);
  }
   
	
	 // Validate company address 5
    if(empty($_POST["address1"])){
        $address1Err = " Address is required";
    } else{
        $address1 = filterString($_POST["address1"]);
        if($address1 == FALSE){
            $address1Err = "";
        }
    }

      if (empty($_POST["address2"])) {
    $address2 = "";
  } else {
    $address2 = ($_POST["address2"]);
  }
   
  
   // Validate company city 6
    if(empty($_POST["city"])){
        $cityErr = " City name is required";
    } else{
        $city = filterName($_POST["city"]);
        if($city == FALSE){
            $cityErr = "Alphabet & space are accepted";
        }
    }
    
      if(empty($_POST["postcode"])){
        $postcodeErr = "Post Code is required";     
    } else{
        $postcode = filterString($_POST["postcode"]);
        if($postcode == FALSE){
            $postcodeErr = "Invalid format.";
        }
    }
  
   // Validate company state 7
    if(empty($_POST["state"])){
        $stateErr = "State name is required.";
    } else{
        $state = filterName($_POST["state"]);
        if($state == FALSE){
            $stateErr = "Alphabet & space are accepted.";
        }
    }
  
	// Validate user id 26
    if(empty($_POST["registration"])){
        $registrationErr = "Registration is required";     
    } else{
        $registration = filterString($_POST["registration"]);
        if($registration == FALSE){
            $registrationErr = "Invalid format.";
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

  if (empty($_POST["interested_field"])) {
    $interested_field= "";
  } else {
    $interested_field = ($_POST["interested_field"]);
  }

   $x=implode(",", $interested_field);

  if (empty($_POST["other"])) {
    $other = "";
  } else {
    $other = ($_POST["other"]);
  }
   
     

     
    
    
    if($_POST){
	     if( empty($titleErr) && empty($nameErr) && empty($emailErr) && empty($codeErr) && empty($phoneErr)  && empty($designationErr) && empty($companyErr) && empty($registrationErr) && empty($profileErr) && empty($industryErr) && empty($statusErr) && empty($address1Err) && empty($cityErr) && empty($postcodeErr) && empty($stateErr) && empty($countryErr) && empty($country_codeErr) && empty($company_phoneErr)){
	      
	      

	      // Recipient email address
	     
	        $to = 'saidurrahman.uia@gmail.com';
	        
	        // Create email headers
	        $headers =  'MIME-Version: 1.0' . "\r\n"; 
	        $headers = "From:MWB-2019@MUSLIMWORLDBIZ.COM\n";
          $headers .= "Reply-To: $email\n"; 
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			    $subject="EXHIBITOR TESTING";
	          $message = "
	           NAME:  $title $name <br/>
             Designation: $designation <br/>
	           EMAIL: $email <br/>
			       PHONE: $code $phone <br/>
             COMPANY NAME: $company <br/>
             REGISTRATION NO: $registration <br/>
             COMPANY PROFILE: $profile <br/>
             INDUSTRY:$industry <br/>
             STATUS:$status <br/>
             CLUSTER:$cluster<br/>
             ADDRESS 1:$address1<br/>
             ADDRESS 2:$address2<br/>
             CITY:$city<br/>
             POSTCODE:$postcode<br/>
             STATE:$state<br/>
             COUNTRY:$country<br/>
             COMPANY PHONE:$country_code $company_phone<br/>
             INTERESTED FIELD:$x $other
	          
              
	                   ";
	
	        
	        // Sending email
	        if(mail($to, $subject, $message, $headers)){
       
        $title=$name =$designation = $email =$code=$phone=$company=$registration=$profile=$industry=$status=$cluster=$address1=$address2=$city=$postcode=$state=$country=$country_code=$company_phone=$x=$other ="";
        $sql = "INSERT INTO businessmatching ( title,name,designation,email,code,phone,company,registration,profile,industry,status,cluster,address1,address2,city,postcode,state,country,country_code,company_phone,interested_field,date) VALUES ( '$title','$name','$designation','$email','$code','$phone','$company','$registration','$profile','$industry','$status','$cluster','$address1','$address2','$city','$postcode','$state','$country','$country_code','$company_phone','$x $other', NOW())";
            if(mysqli_query($link, $sql)){
                echo"Your request has been submitted successfully!";
            }else{
                echo"failed";
            }
             
	      

	        }else{
	            echo '<p class="error">Unable to submit your request. Please try again!</p>';
	        }
	    }
	    mysqli_close($link);
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
     <img  class="img-fluid" src="image/coverphoto/bm.jpg" alt="mwbiz-9" >
<p class="error"> * required field</p>   
<form action="business-matching-appsaya.php" method="post">
  <p class="promo">A-PERSONAL INFORMATION</p>
     <p>
      <label for="inputName">SALUTATION<b class="error">*</b></label>
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
             <label>MOBILE NUMBER <b class="error">*</b></label>
          <div class="row">

            <div class="col-3">
              <select name="code" style="height:30px; border: 1px solid #000f89; font-size:13px;" >  <b class="error">*</b>
    <option  hidden>---country code---</option> 
    <option data-countryCode="AFG" value="93">AFG (+93)</option>
    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
    <option data-countryCode="AD" value="376">Andorra (+376)</option>
    <option data-countryCode="AO" value="244">Angola (+244)</option>
    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
    <option data-countryCode="AG" value="1268">Antigua  (+1268)</option>
    <option data-countryCode="AR" value="54">Argentina (+54)</option>
    <option data-countryCode="AM" value="374">Armenia (+374)</option>
    <option data-countryCode="AW" value="297">Aruba (+297)</option>
    <option data-countryCode="AU" value="61">Australia (+61)</option>
    <option data-countryCode="AT" value="43">Austria (+43)</option>
    <option data-countryCode="AZ" value="994">AZE (+994)</option>
    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
    <option data-countryCode="BD" value="880">BGD (+880)</option>
    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
    <option data-countryCode="BY" value="375">Belarus (+375)</option>
    <option data-countryCode="BE" value="32">Belgium (+32)</option>
    <option data-countryCode="BZ" value="501">Belize (+501)</option>
    <option data-countryCode="BJ" value="229">Benin (+229)</option>
    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
    <option data-countryCode="BA" value="387">Bosnia  (+387)</option>
    <option data-countryCode="BW" value="267">Botswana (+267)</option>
    <option data-countryCode="BR" value="55">Brazil (+55)</option>
    <option data-countryCode="BN" value="673">Brunei (+673)</option>
    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
    <option data-countryCode="BF" value="226">BFA (+226)</option>
    <option data-countryCode="BI" value="257">Burundi (+257)</option>
    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
    <option data-countryCode="CA" value="1">Canada (+1)</option>
    <option data-countryCode="CF" value="236">CAR(+236)</option>
    <option data-countryCode="CL" value="56">Chile (+56)</option>
    <option data-countryCode="CN" value="86">China (+86)</option>
    <option data-countryCode="CO" value="57">Colombia (+57)</option>
    <option data-countryCode="KM" value="269">Comoros (+269)</option>
    <option data-countryCode="CG" value="242">Congo (+242)</option>
    <option data-countryCode="CK" value="682">COK (+682)</option>
    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
    <option data-countryCode="HR" value="385">Croatia (+385)</option>
    <option data-countryCode="CU" value="53">Cuba (+53)</option>
    <option data-countryCode="DK" value="45">Denmark (+45)</option>
    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
    <option data-countryCode="EG" value="20">Egypt (+20)</option>
    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
    <option data-countryCode="EE" value="372">Estonia (+372)</option>
    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>   
    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
    <option data-countryCode="FI" value="358">Finland (+358)</option>
    <option data-countryCode="FR" value="33">France (+33)</option>
    <option data-countryCode="GA" value="241">Gabon (+241)</option>
    <option data-countryCode="GM" value="220">Gambia (+220)</option>
    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
    <option data-countryCode="DE" value="49">Germany (+49)</option>
    <option data-countryCode="GH" value="233">Ghana (+233)</option>
    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
    <option data-countryCode="GR" value="30">Greece (+30)</option>
    <option data-countryCode="GL" value="299">Greenland (+299)</option>
    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
    <option data-countryCode="GU" value="671">Guam (+671)</option>
    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
    <option data-countryCode="GN" value="224">Guinea (+224)</option>
    <option data-countryCode="GW" value="245">Guinea (+245)</option>
    <option data-countryCode="GY" value="592">Guyana (+592)</option>
    <option data-countryCode="HT" value="509">Haiti (+509)</option>
    <option data-countryCode="HN" value="504">Honduras (+504)</option>
    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
    <option data-countryCode="HU" value="36">Hungary (+36)</option>
    <option data-countryCode="IS" value="354">Iceland (+354)</option>
    <option data-countryCode="IN" value="91">India (+91)</option>
    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
    <option data-countryCode="IR" value="98">Iran (+98)</option>
    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
    <option data-countryCode="IE" value="353">Ireland (+353)</option>
    <option data-countryCode="IL" value="972">Israel (+972)</option>
    <option data-countryCode="IT" value="39">Italy (+39)</option>
    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
    <option data-countryCode="JP" value="81">Japan (+81)</option>
    <option data-countryCode="JO" value="962">Jordan (+962)</option>
    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
    <option data-countryCode="KE" value="254">Kenya (+254)</option>
    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
    <option data-countryCode="LA" value="856">Laos (+856)</option>
    <option data-countryCode="LV" value="371">Latvia (+371)</option>
    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
    <option data-countryCode="LR" value="231">Liberia (+231)</option>
    <option data-countryCode="LY" value="218">Libya (+218)</option>
    <option data-countryCode="LI" value="417">LI (+417)</option>
    <option data-countryCode="LT" value="370">LTU (+370)</option>
    <option data-countryCode="LU" value="352">LUX (+352)</option>
    <option data-countryCode="MO" value="853">Macao (+853)</option>
    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
    <option data-countryCode="MW" value="265">Malawi (+265)</option>
    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
    <option data-countryCode="MV" value="960">Maldives (+960)</option>
    <option data-countryCode="ML" value="223">Mali (+223)</option>
    <option data-countryCode="MT" value="356">Malta (+356)</option>
    <option data-countryCode="MH" value="692">MH (+692)</option>
    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
    <option data-countryCode="MX" value="52">Mexico (+52)</option>
    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
    <option data-countryCode="MD" value="373">Moldova (+373)</option>
    <option data-countryCode="MC" value="377">Monaco (+377)</option>
    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
    <option data-countryCode="MA" value="212">Morocco (+212)</option>
    <option data-countryCode="MZ" value="258">MOZ (+258)</option>
    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
    <option data-countryCode="NA" value="264">Namibia (+264)</option>
     <option data-countryCode="KP" value="850">NK (+850)</option>
    <option data-countryCode="NR" value="674">Nauru (+674)</option>
    <option data-countryCode="NP" value="977">Nepal (+977)</option>
    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
    <option data-countryCode="NC" value="687">NC  (+687)</option>
    <option data-countryCode="NZ" value="64">NZ (+64)</option>
    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
    <option data-countryCode="NE" value="227">Niger (+227)</option>
    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
    <option data-countryCode="NU" value="683">Niue (+683)</option>
    <option data-countryCode="NO" value="47">Norway (+47)</option>
    <option data-countryCode="OM" value="968">Oman (+968)</option>
    <option data-countryCode="PW" value="680">Palau (+680)</option>
    <option data-countryCode="PA" value="507">Panama (+507)</option>
    <option data-countryCode="PG" value="675">PNG (+675)</option>
    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
    <option data-countryCode="PE" value="51">Peru (+51)</option>
    <option data-countryCode="PH" value="63">PHL (+63)</option>
    <option data-countryCode="PL" value="48">Poland (+48)</option>
    <option data-countryCode="PT" value="351">Portugal (+351)</option>
    <option data-countryCode="QA" value="974">Qatar (+974)</option>
    <option data-countryCode="RE" value="262">Reunion (+262)</option>
    <option data-countryCode="RO" value="40">Romania (+40)</option>
    <option data-countryCode="RU" value="7">Russia (+7)</option>
    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
     <option data-countryCode="KR" value="82">SK (+82)</option>
    <option data-countryCode="SM" value="378">San Marino (+378)</option>
    <option data-countryCode="SA" value="966">SA (+966)</option>
    <option data-countryCode="SN" value="221">Senegal (+221)</option>
    <option data-countryCode="CS" value="381">Serbia (+381)</option>
    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
    <option data-countryCode="SL" value="232">SLE (+232)</option>
    <option data-countryCode="SG" value="65">Singapore (+65)</option>
    <option data-countryCode="SK" value="421">SK (+421)</option>
    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
    <option data-countryCode="SB" value="677">SLB(+677)</option>
    <option data-countryCode="SO" value="252">Somalia (+252)</option>
    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
    <option data-countryCode="ES" value="34">Spain (+34)</option>
    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
    <option data-countryCode="SD" value="249">Sudan (+249)</option>
    <option data-countryCode="SR" value="597">Suriname (+597)</option>
    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
    <option data-countryCode="SE" value="46">Sweden (+46)</option>
    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
    <option data-countryCode="SI" value="963">Syria (+963)</option>
    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
    <option data-countryCode="TH" value="66">Thailand (+66)</option>
    <option data-countryCode="TG" value="228">Togo (+228)</option>
    <option data-countryCode="TO" value="676">Tonga (+676)</option>
    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
    <option data-countryCode="TR" value="90">Turkey (+90)</option>
    <option data-countryCode="TM" value="7">TKM (+7)</option>
    <option data-countryCode="TM" value="993">TKM (+993)</option>
    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
    <option data-countryCode="UG" value="256">Uganda (+256)</option>
     <option data-countryCode="GB" value="44">UK (+44)</option>
    <option data-countryCode="US" value="1">USA (+1)</option>  
    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
    <option data-countryCode="AE" value="971">UAE (+971)</option>
    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
    <option data-countryCode="YE" value="969">YEM(+969)</option>
    <option data-countryCode="YE" value="967">YEM(+967)</option>
   </select> <span class="error"><?php echo $codeErr; ?></span>
            </div>

            <div class="col-7">
              <p>
            
            <input type="text" name="phone" id="inputPhone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phoneErr; ?></span>
        </p>
            </div>
          </div>
       
        </div>
      </div>
   <p class="promo">B-COMPANY INFORMATION</p>
     
     <div class="row">

      <div class="col-md-4">
        <p>
 <label for="inputCompany">COMPANY NAME<b class="error">*</b></label>
  <input type="text" name="company" value="<?php echo $company; ?>">
  <span class="error"><?php echo $companyErr; ?></span>
 </p>
      </div>
   <div class="col-md-4">
     <p>
 <label for="inputRegistration">REGISTRATION NO<b class="error">*</b></label>
  <input type="text" name="registration" value="<?php echo $registration; ?>">
  <span class="error"><?php echo $registrationErr; ?></span>
 </p>
   </div>

   <div class="col-md-4">
      <p>
 <label for="inputPrifile">COMPANY PROFILE<b class="error">*</b></label>
  <input type="text" name="profile" value="<?php echo $profile; ?>">
  <span class="error"><?php echo $profileErr; ?></span>
 </p>
   </div>

   <div class="col-md-4">
   <p>
 <label for="inputIndustry">INDUSTRY<b class="error">*</b></label>
  <input type="text" name="industry" value="<?php echo $industry; ?>">
  <span class="error"><?php echo $industryErr; ?></span>
 </p>
   </div>

   <div class="col-md-4">
      <p>
 <label for="inputStatus">STATUS<b class="error">*</b></label>
  <input type="text" name="status" value="<?php echo $status; ?>">
  <span class="error"><?php echo $statusErr; ?></span>
 </p>
   </div>

   <div class="col-md-4">
    <p>
 <label for="inputStatus">CLUSTER</b></label>
  <input type="text" name="cluster" value="<?php echo $cluster; ?>">
  <span class="error"><?php echo $clusterErr; ?></span>
 </p>
   </div>
  
  <div class="col-md-6">
 <p>
 <label for="inputAddress"> ADDRESS : 1<b class="error">*</b></label>
 <textarea name="address1" id="inputComment" class="form-control"  rows="2" cols="53"><?php echo $address1; ?></textarea>
 <span class="error"><?php echo $address1Err; ?></span>
 </p>
 </div>
 <div class="col-md-6">
 <p>
 <label for="inputAddress2">ADDRESS : 2(if any)</label>
 <textarea name="address2" id="inputComment" class="form-control"  rows="2" cols="53"><?php echo $address2; ?></textarea>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputCity">CITY<b class="error">*</b></label>
 <input type="text" name="city" value="<?php echo $city; ?>">
 <span class="error"><?php echo $cityErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputPostcode">POSTCODE<b class="error">*</b></label>
  <input type="text" name="postcode" value="<?php echo $postcode; ?>">
  <span class="error"><?php echo $postcodeErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputState">STATE<b class="error">*</b></label>
 <input type="text" name="state" value="<?php echo $state; ?>">
 <span class="error"><?php echo $stateErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputCountry">COUNTRY<b class="error">*</b></label>
  <input type="text" name="country" value="<?php echo $country; ?>">
  <span class="error"><?php echo $countryErr; ?></span>
 </p>
 </div>
 <div class="col-md-6">
   <label>MOBILE NUMBER <b class="error">*</b></label>
          <div class="row">

            <div class="col-3">
              <select name="country_code" style="height:30px; border: 1px solid #000f89; font-size:13px;" >  <b class="error">*</b>
    <option  hidden>---country code---</option> 
    <option data-countryCode="AFG" value="93">AFG (+93)</option>
    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
    <option data-countryCode="AD" value="376">Andorra (+376)</option>
    <option data-countryCode="AO" value="244">Angola (+244)</option>
    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
    <option data-countryCode="AG" value="1268">Antigua  (+1268)</option>
    <option data-countryCode="AR" value="54">Argentina (+54)</option>
    <option data-countryCode="AM" value="374">Armenia (+374)</option>
    <option data-countryCode="AW" value="297">Aruba (+297)</option>
    <option data-countryCode="AU" value="61">Australia (+61)</option>
    <option data-countryCode="AT" value="43">Austria (+43)</option>
    <option data-countryCode="AZ" value="994">AZE (+994)</option>
    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
    <option data-countryCode="BD" value="880">BGD (+880)</option>
    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
    <option data-countryCode="BY" value="375">Belarus (+375)</option>
    <option data-countryCode="BE" value="32">Belgium (+32)</option>
    <option data-countryCode="BZ" value="501">Belize (+501)</option>
    <option data-countryCode="BJ" value="229">Benin (+229)</option>
    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
    <option data-countryCode="BA" value="387">Bosnia  (+387)</option>
    <option data-countryCode="BW" value="267">Botswana (+267)</option>
    <option data-countryCode="BR" value="55">Brazil (+55)</option>
    <option data-countryCode="BN" value="673">Brunei (+673)</option>
    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
    <option data-countryCode="BF" value="226">BFA (+226)</option>
    <option data-countryCode="BI" value="257">Burundi (+257)</option>
    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
    <option data-countryCode="CA" value="1">Canada (+1)</option>
    <option data-countryCode="CF" value="236">CAR(+236)</option>
    <option data-countryCode="CL" value="56">Chile (+56)</option>
    <option data-countryCode="CN" value="86">China (+86)</option>
    <option data-countryCode="CO" value="57">Colombia (+57)</option>
    <option data-countryCode="KM" value="269">Comoros (+269)</option>
    <option data-countryCode="CG" value="242">Congo (+242)</option>
    <option data-countryCode="CK" value="682">COK (+682)</option>
    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
    <option data-countryCode="HR" value="385">Croatia (+385)</option>
    <option data-countryCode="CU" value="53">Cuba (+53)</option>
    <option data-countryCode="DK" value="45">Denmark (+45)</option>
    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
    <option data-countryCode="EG" value="20">Egypt (+20)</option>
    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
    <option data-countryCode="EE" value="372">Estonia (+372)</option>
    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>   
    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
    <option data-countryCode="FI" value="358">Finland (+358)</option>
    <option data-countryCode="FR" value="33">France (+33)</option>
    <option data-countryCode="GA" value="241">Gabon (+241)</option>
    <option data-countryCode="GM" value="220">Gambia (+220)</option>
    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
    <option data-countryCode="DE" value="49">Germany (+49)</option>
    <option data-countryCode="GH" value="233">Ghana (+233)</option>
    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
    <option data-countryCode="GR" value="30">Greece (+30)</option>
    <option data-countryCode="GL" value="299">Greenland (+299)</option>
    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
    <option data-countryCode="GU" value="671">Guam (+671)</option>
    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
    <option data-countryCode="GN" value="224">Guinea (+224)</option>
    <option data-countryCode="GW" value="245">Guinea (+245)</option>
    <option data-countryCode="GY" value="592">Guyana (+592)</option>
    <option data-countryCode="HT" value="509">Haiti (+509)</option>
    <option data-countryCode="HN" value="504">Honduras (+504)</option>
    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
    <option data-countryCode="HU" value="36">Hungary (+36)</option>
    <option data-countryCode="IS" value="354">Iceland (+354)</option>
    <option data-countryCode="IN" value="91">India (+91)</option>
    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
    <option data-countryCode="IR" value="98">Iran (+98)</option>
    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
    <option data-countryCode="IE" value="353">Ireland (+353)</option>
    <option data-countryCode="IL" value="972">Israel (+972)</option>
    <option data-countryCode="IT" value="39">Italy (+39)</option>
    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
    <option data-countryCode="JP" value="81">Japan (+81)</option>
    <option data-countryCode="JO" value="962">Jordan (+962)</option>
    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
    <option data-countryCode="KE" value="254">Kenya (+254)</option>
    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
    <option data-countryCode="LA" value="856">Laos (+856)</option>
    <option data-countryCode="LV" value="371">Latvia (+371)</option>
    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
    <option data-countryCode="LR" value="231">Liberia (+231)</option>
    <option data-countryCode="LY" value="218">Libya (+218)</option>
    <option data-countryCode="LI" value="417">LI (+417)</option>
    <option data-countryCode="LT" value="370">LTU (+370)</option>
    <option data-countryCode="LU" value="352">LUX (+352)</option>
    <option data-countryCode="MO" value="853">Macao (+853)</option>
    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
    <option data-countryCode="MW" value="265">Malawi (+265)</option>
    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
    <option data-countryCode="MV" value="960">Maldives (+960)</option>
    <option data-countryCode="ML" value="223">Mali (+223)</option>
    <option data-countryCode="MT" value="356">Malta (+356)</option>
    <option data-countryCode="MH" value="692">MH (+692)</option>
    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
    <option data-countryCode="MX" value="52">Mexico (+52)</option>
    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
    <option data-countryCode="MD" value="373">Moldova (+373)</option>
    <option data-countryCode="MC" value="377">Monaco (+377)</option>
    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
    <option data-countryCode="MA" value="212">Morocco (+212)</option>
    <option data-countryCode="MZ" value="258">MOZ (+258)</option>
    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
    <option data-countryCode="NA" value="264">Namibia (+264)</option>
     <option data-countryCode="KP" value="850">NK (+850)</option>
    <option data-countryCode="NR" value="674">Nauru (+674)</option>
    <option data-countryCode="NP" value="977">Nepal (+977)</option>
    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
    <option data-countryCode="NC" value="687">NC  (+687)</option>
    <option data-countryCode="NZ" value="64">NZ (+64)</option>
    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
    <option data-countryCode="NE" value="227">Niger (+227)</option>
    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
    <option data-countryCode="NU" value="683">Niue (+683)</option>
    <option data-countryCode="NO" value="47">Norway (+47)</option>
    <option data-countryCode="OM" value="968">Oman (+968)</option>
    <option data-countryCode="PW" value="680">Palau (+680)</option>
    <option data-countryCode="PA" value="507">Panama (+507)</option>
    <option data-countryCode="PG" value="675">PNG (+675)</option>
    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
    <option data-countryCode="PE" value="51">Peru (+51)</option>
    <option data-countryCode="PH" value="63">PHL (+63)</option>
    <option data-countryCode="PL" value="48">Poland (+48)</option>
    <option data-countryCode="PT" value="351">Portugal (+351)</option>
    <option data-countryCode="QA" value="974">Qatar (+974)</option>
    <option data-countryCode="RE" value="262">Reunion (+262)</option>
    <option data-countryCode="RO" value="40">Romania (+40)</option>
    <option data-countryCode="RU" value="7">Russia (+7)</option>
    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
     <option data-countryCode="KR" value="82">SK (+82)</option>
    <option data-countryCode="SM" value="378">San Marino (+378)</option>
    <option data-countryCode="SA" value="966">SA (+966)</option>
    <option data-countryCode="SN" value="221">Senegal (+221)</option>
    <option data-countryCode="CS" value="381">Serbia (+381)</option>
    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
    <option data-countryCode="SL" value="232">SLE (+232)</option>
    <option data-countryCode="SG" value="65">Singapore (+65)</option>
    <option data-countryCode="SK" value="421">SK (+421)</option>
    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
    <option data-countryCode="SB" value="677">SLB(+677)</option>
    <option data-countryCode="SO" value="252">Somalia (+252)</option>
    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
    <option data-countryCode="ES" value="34">Spain (+34)</option>
    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
    <option data-countryCode="SD" value="249">Sudan (+249)</option>
    <option data-countryCode="SR" value="597">Suriname (+597)</option>
    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
    <option data-countryCode="SE" value="46">Sweden (+46)</option>
    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
    <option data-countryCode="SI" value="963">Syria (+963)</option>
    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
    <option data-countryCode="TH" value="66">Thailand (+66)</option>
    <option data-countryCode="TG" value="228">Togo (+228)</option>
    <option data-countryCode="TO" value="676">Tonga (+676)</option>
    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
    <option data-countryCode="TR" value="90">Turkey (+90)</option>
    <option data-countryCode="TM" value="7">TKM (+7)</option>
    <option data-countryCode="TM" value="993">TKM (+993)</option>
    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
    <option data-countryCode="UG" value="256">Uganda (+256)</option>
     <option data-countryCode="GB" value="44">UK (+44)</option>
    <option data-countryCode="US" value="1">USA (+1)</option>  
    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
    <option data-countryCode="AE" value="971">UAE (+971)</option>
    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
    <option data-countryCode="YE" value="969">YEM(+969)</option>
    <option data-countryCode="YE" value="967">YEM(+967)</option>
   </select> <span class="error"><?php echo $country_codeErr; ?></span>
            </div>

            <div class="col-7">
              <p>
            
            <input type="text" name="company_phone" id="inputCompany_phone" value="<?php echo $company_phone; ?>">
            <span class="error"><?php echo $company_phoneErr; ?></span>
        </p>
            </div>
          </div>
 </div>

    </div>

    <label for="input"><b>Which business industry are you interested in?</b><b class="error">*</b></label><br>

  <div class="row">

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
   <label class="special">Medical & Pharmaceutical
 </label>
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
   <label class="special">Beauty & Wellness 
     </label>

     </div>
     <div class="col-md-6">
<input type="checkbox" id="myCheck"  onclick="myFunction()">
    ​ <span class="checkmark"></span>
    <label class="special">Others 
     </label>
     <p id="text" style="display:none">
    <input type="text" placeholder="Please State" name="other"></p>
     </label>

     </div>
   </div>



        <input type="submit"  class="btn btn-success"  value="Send" onClick="clearform();">
        <input type="reset"  class="btn btn-danger" value="Reset"><br><br>
        
        <div class="success"><?=$success; ?> </div>
    </form>
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
