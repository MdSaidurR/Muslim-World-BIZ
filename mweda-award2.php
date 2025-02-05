<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}  
   
  
  



// Functions to filter user id, date,registration,address,award

function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}


// Functions to filter user website

function filterWebsite($field){
$field = filter_var(trim($field), FILTER_SANITIZE_URL);
 
// Validate website url
  
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i")))){
        return $field;
    } else{
        return FALSE;
    }
}



// Functions to filter user email


function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}


//Functions to integer




// Functions to filter user phone


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







 

 
 
 
// Define variables and initialize with empty values
$rankErr =$nameErr=$idErr=$phoneErr=$emailErr=$legalErr=$company_nameErr=$ssm_registrationErr=$company_natureErr=$dateErr=$employ_numberErr=$business_sizeErr=$addressErr=$cityErr=$codeErr=$stateErr=$countryErr=$telErr=$company_emailErr=$websiteErr=$awardErr=$subsidiaryErr=$personErr=$designationErr=$person_telErr=$person_phoneErr=$person_emailErr=$conditionErr="";

$rank =$name=$id=$phone=$email=$linkedin=$legal=$company_name=$ssm_registration=$company_nature=$date=$employ_number=$business_size=$address=$city=$code=$state=$country=$tel=$fax=$company_email=$website=$facebook=$award=$subsidiary=$person=$designation=$person_tel=$person_phone=$person_email=$condition=$success= "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name 1
    if(empty($_POST["name"])){
        $nameErr = "Name is required.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Alphabet & space are accepted.";
        }
    }
	
	  // Validate company name 2
    if(empty($_POST["company_name"])){
        $company_nameErr = "Company name is required.";
    } else{
        $company_name = filterName($_POST["company_name"]);
        if($company_name == FALSE){
            $company_nameErr = "Alphabet & space are accepted.";
        }
    }
	
	 // Validate company nature 3
    if(empty($_POST["company_nature"])){
        $company_natureErr = " Company nature is required.";
    } else{
        $company_nature = filterName($_POST["company_nature"]);
        if($company_nature == FALSE){
            $company_natureErr = "Alphabet & space are accepted.";
        }
    }
	
	 // Validate company size  4
    if(empty($_POST["business_size"])){
        $business_sizeErr = "Company size is required.";
    } else{
        $business_size = filterName($_POST["business_size"]);
        if($business_size == FALSE){
            $business_sizeErr = "Alphabet & space are accepted.";
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
	
	 // Validate company city 6
    if(empty($_POST["city"])){
        $cityErr = " City name is required.";
    } else{
        $city = filterName($_POST["city"]);
        if($city == FALSE){
            $cityErr = "Alphabet & space are accepted.";
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
	
	 // Validate company state 8
    if(empty($_POST["country"])){
        $countryErr = "Country name is required. ";
    } else{
        $country = filterName($_POST["country"]);
        if($country == FALSE){
            $countryErr = "Alphabet & space are accepted.";
        }
    }
	
	
	 // Validate contact person name 9
    if(empty($_POST["person"])){
        $personErr = "Person name is required.";
    } else{
        $person = filterName($_POST["person"]);
        if($person == FALSE){
            $personErr = "Alphabet & space are accepted.";
        }
    }
	
	 // Validate contact person designation 10
    if(empty($_POST["designation"])){
        $designationErr = "Required Designation.";
    } else{
        $designation = filterName($_POST["designation"]);
        if($designation == FALSE){
            $designationErr = "Alphabet & space are accepted.";
        }
    }
	
	
	 // Validate rank 11
	if (empty($_POST["rank"])) {
    $rankErr = "Rank is required.";
  } else {
    $rank =$_POST["rank"];
  }

   // Validate category 12
	if (empty($_POST["legal"])) {
    $legalErr = "Category is required.";
  } else {
    $legal =$_POST["legal"];
  }
	 // Validate category 13
	if (empty($_POST["subsidiary"])) {
    $subsidiaryErr = "Subsidiary is required.";
  } else {
    $subsidiary =$_POST["subsidiary"];
  }
   // Term Validate category 13
	if (empty($_POST["condition"])) {
    $conditionErr = "Condition is required.";
  } else {
    $condition =$_POST["condition"];
  }
	
	 // Validate Wersite  14
	
	 if(empty($_POST["website"])){
        $websiteErr = "Website is required.";
    } else{
        $website = filterWebsite($_POST["website"]);
        if($website == FALSE){
            $websiteErr = "Invalid format.";
        }
    }
	 // Validate linkedin  15
	 
	  if (empty($_POST["linkedin"])) {
    $linkedin = "";
  } else {
    $linkedin = ($_POST["linkedin"]);
  }
	 
	 
	
	
	// Validate facebook  16
	 if (empty($_POST["facebook"])) {
    $facebook = "";
  } else {
    $facebook = ($_POST["facebook"]);
  }
    
    // Validate email address 17
    if(empty($_POST["email"])){
        $emailErr = " Email is required.";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Invalid format.";
        }
    }
	
	// Validate company email address 18
    if(empty($_POST["company_email"])){
        $company_emailErr = " Email is required.";     
    } else{
        $company_email = filterEmail($_POST["company_email"]);
        if($company_email == FALSE){
            $company_emailErr = "Invalid format.";
        }
    }
	
	// Validate person email address 19
    if(empty($_POST["person_email"])){
        $person_emailErr = " Email is required.";     
    } else{
        $person_email = filterEmail($_POST["person_email"]);
        if($person_email == FALSE){
            $person_emailErr = "Invalid format.";
        }
    }
	
	 // Validate USER PHONE NUMBER 20
    if(empty($_POST["phone"])){
        $phoneErr = " Phone number is required.";     
    } else{
        $phone = filterPhone($_POST["phone"]);
        if($phone == FALSE){
            $phoneErr = "Invalid format.";
        }
    }
    
	
	// Validate USER TEL NUMBER 21
    if(empty($_POST["tel"])){
        $telErr = " Tel number is required.";     
    } else{
        $tel = filterPhone($_POST["tel"]);
        if($tel == FALSE){
            $telErr = "Invalid format.";
        }
    }
	
	// Validate USER TEL NUMBER 22
    if (empty($_POST["fax"])) {
    $fax = "";
  } else {
    $fax = ($_POST["fax"]);
  }
	
	// Validate USER person tel 23
    if(empty($_POST["person_tel"])){
        $person_telErr = "Tel number is required.";     
    } else{
        $person_tel = filterPhone($_POST["person_tel"]);
        if($person_tel == FALSE){
            $person_telErr = "Invalid format.";
        }
    }
	
	// Validate USER person tel 24
    if(empty($_POST["person_phone"])){
        $person_phoneErr = "Phone number IS Required.";     
    } else{
        $person_phone = filterPhone($_POST["person_phone"]);
        if($person_phone == FALSE){
            $person_phoneErr = "Invalid format.";
        }
    }
	
	
    // Validate user id 25
    if(empty($_POST["id"])){
        $idErr = "ID is required.";     
    } else{
        $id = filterString($_POST["id"]);
        if($id == FALSE){
            $idErr = "Please enter a valid id.";
        }
    }
	
	
	
    // Validate user id 26
    if(empty($_POST["ssm_registration"])){
        $ssm_registrationErr = "Registration is required.";     
    } else{
        $ssm_registration = filterString($_POST["ssm_registration"]);
        if($ssm_registration == FALSE){
            $ssm_registrationErr = "Invalid format.";
        }
    }
	
	// Validate user id 27
    if(empty($_POST["date"])){
        $dateErr = "Date is required.";     
    } else{
        $date = filterString($_POST["date"]);
        if($date == FALSE){
            $dateErr = "Please enter date.";
        }
    }

    // Validate user id 27
    if(empty($_POST["code"])){
        $codeErr = "Post code is required.";     
    } else{
        $code= filterString($_POST["code"]);
        if($code == FALSE){
            $codeErr = "Please enter post code.";
        }
    }
	
	 // Validate employee number 29
    if(empty($_POST["award"])){
        $awardErr = "Award is required.";     
    } else{
        $award = filterString($_POST["award"]);
        if($award == FALSE){
            $awardErr = "Please alphabet only.";
        }
    }
	
	 // Validate user id 28
    if(empty($_POST["employ_number"])){
        $employ_numberErr = "Employ number is required.";     
    } else{
        $employ_number = filterString($_POST["employ_number"]);
        if($employ_number == FALSE){
            $employ_numberErr = "Please enter employee Number.";
        }
    }
	
	
     
    if($_POST){
	     if( empty($rankErr)&& empty($nameErr)&& empty($idErr)&& empty($phoneErr)&& empty($emailErr)&& empty($linkedinErr)&& empty($legalErr)&& empty($company_nameErr)&& empty($ssm_registrationErr)&& empty($company_natureErr)&& empty($dateErr)&& empty($employ_numberErr)&& empty($business_sizeErr)&& empty($addressErr)&& empty($cityErr)&& empty($codeErr)&& empty($stateErr)&& empty($countryErr)&& empty($telErr)&& empty($faxErr)&& empty($company_emailErr)&& empty($websiteErr)&& empty($facebookErr)&& empty($awardErr)&& empty($subsidiaryErr)&& empty($personErr)&& empty($designationErr) && empty($person_telErr)&& empty($person_phoneErr) && empty($person_emailErr) && empty($conditionErr)) {
	      
	        
	      // Recipient email address
	       $to = 'mweda@muslimworldbiz.com';
          // Create email headers
          $headers =  'MIME-Version: 1.0' . "\r\n"; 
          //$headers .= 'From:Enquiry@oictoday.biz <'.$email .'>' . "\r\n";
          $headers = "From: mweda@muslimworldbiz.com\n";
          $headers .= "Reply-To: $email\n"; 
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			   $subject="NOMINATION FORM";
	          $message = "
	           A-CATEGORY: $rank <br/>
			   B-PERSONAL INFORMATION(ENTREPRENEUR)<br>
		       NAME:$name<br/>
			    I/D NO: $id <br/>
	             CONTACT No: $phone<br/>
	             EMAIL: $email <br/>
				 LINKEDIN I/D: $linkedin <br/>
		  C- LEGAL STRUCTURE OF THE COMPANY:$legal<br/>
		       COMPANY NAME:$company_name<br/>
			    SSM REGISTRATION NUMBER: $ssm_registration<br/>
	             NATURE OF BUSINESS: $company_nature<br/>
	             DATE OF INCORPORATION: $date <br/>
				  NO OF EMPLOYEES: $employ_number<br/>
		       BUSINESS SIZE:$business_size<br/>
			    HQ ADDRESS: $address <br/>
	             CITY: $city<br/>
	             POSTCODE: $code <br/>
				  STATE: $state <br/>
		       COUNTRY:$country<br/>
			    TEL: $tel <br/>
	             FAX: $fax<br/>
	             E-MAIL: $company_email <br/>
				  WEBSITE: $website <br/>
		       FB OFFICIAL PAGE:$facebook<br/>
			    AWARD PREVIOUSLY RECEIVED: $award <br/>
				IS THE COMPANY A SUBSIDIARY COMPANY:$subsidiary<br/>
			 CONTACT PERSON INFORMATION<br>
	             CONTACT PERSON: $person<br/>
		       DESIGNATION:$designation<br/>
			    CONTACTNO : $person_tel <br/>
	             Mobile No: $person_phone<br/>
	             Email: $person_email <br/>
				 TERM & CONDITION:$condition
			
	            ";
	
	        
	        // Sending email
	        if(mail($to, $subject, $message, $headers)){
	         $success="Congratulations!your application has been submitted successfully.";
	         $rank =$name=$id=$phone=$email=$linkedin=$legal=$company_name=$ssm_registration=$company_nature=$date=$employ_number=$business_size=$address=$city=$code=$state=$country=$tel=$fax=$company_email=$website=$facebook=$award=$subsidiary=$person=$designation=$person_tel=$person_phone=$person_email=$condition= "";
	         
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
  <title>Muslim World BIZ.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/nomination.css">
 <link rel="stylesheet" href="css/owl.carousel.css">
 <link rel="stylesheet" href="css/owl.theme.default.css">

<style>
   .success{
       font-size:30px;
       color:red;
       box-shadow: 0 1px 1px #FFD700, inset 0 1px 0 #FFD700;
     padding:10px 10px 10px 10px;
     border:2px solid #FFD700;    
   }
   .weda-meaasge{
       
     box-shadow: 0 1px 1px #FFD700, inset 0 1px 0 #FFD700;
     padding:10px 10px 10px 10px;
     border:2px solid red; 
     background-color:#FFD700;   
       
   }
   
   .button,.btn {
    background-color: #ff4d4d;
    border: none;
    color:white;
    padding: 7px 17px;
    text-align:center;
    text-decoration: none !important;
    display: inline-block;
    font-size:2vw;
    margin: 4px 2px;
    cursor: pointer;
   border: 1px inset #4f4f4f;
    
    
}

#readlessbtn,#readmore{
 padding: 10px 22px;
    text-align:center;
    text-decoration: none !important;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;    
    
}
 .btn:hover {
      border: 1px solid #f4511e;
      background-color:#867979  !important;
      color: red;
  }
   
   </style>
   
    <script>
    $('document').ready(function()
    {       
        //default value
        var paragraph = $('.para').hide(); //by default paragraph is hidden
        var readlessbtn = $('#readlessbtn'); //read less button properties
        var readmorebtn = $('#readmore'); //read more button properties
        readlessbtn.hide(); //by default read less button is hide
        //when click on read more button
        $(readmorebtn).click(function(){
          paragraph.show(); //show hidden paragraph
          readlessbtn.show(); //show read less button on bottom
          readmorebtn.hide(); //now hide read more button
        });
        
        
        //when click on read less btn
        $(readlessbtn).click(function(){
            paragraph.hide(); //hide paragraph
            readlessbtn.hide(); //hide read less button
            readmorebtn.show(); //show read more button
        });
    });
  </script>
  


</head>
<body >
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
       <img class="img-fluid" src="image/mwbiz.png"   alt="" height="110"width="110">
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
        <a class="dropdown-item" href="organizer.html">ORGANIZER</a>
      </div>
    </li> 


     <li class="nav-item">
        <a class="nav-link" href="exhibition-zone.html">EXHIBITION ZONE</a>
      </li>
    
      <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        CONFERENCES ZONE
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="rtt.html">ROUND TABLE TALK</a>
        <a class="dropdown-item" href="mwws.html">MUSLIM WORLD WOMEN'S SUMMIT</a>
        <a class="dropdown-item" href="oic-arab-asia-te.html">OIC ARAB-ASIA TRADE & ECONOMIC</a>
        <a class="dropdown-item" href="ohec.html">OIC HIGHER EDUCATION CONFERENCE</a>
    <a class="dropdown-item" href="witc.html">WORLD ISLAMIC TOURISM CONFERENCE</a> 
        <a class="dropdown-item" href="mwiic.html"> MUSLIM WORLD INFRASTRUCTURE & INVESTMENT CONFERENCE</a>
        <a class="dropdown-item" href="wmtc.html">WORLD MEDICAL TOURISM CONFERENCE</a>
        <a class="dropdown-item" href="mwac.html">MUSLIM WORLD AGRICULTURE CONFERENCE</a>
        <a class="dropdown-item" href="programme-schedule.html">PROGRAMME SCHEDULE</a>
      </div>
    </li> 

       <li class="nav-item dropdown active">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        AWARD CEREMONIES
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="jewels.html">JEWELS OF THE MUSLIM WORLD</a>
        <a class="dropdown-item" href="rania.html">MUSLIM WORLD RANIA AWARD</a>
        <a class="dropdown-item active" href="mweda-award.php">MWEDA</a>
        
      </div>
    </li> 
    
    <li class="nav-item">
        <a class="nav-link" href="trade-visitors.html">VISITORS</a>
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
    </nav><br><br><br>
<img  class="img-fluid" src="image/award/mwedaa.jpg" alt="mwbiz-9" ><br><br>
<div class="container">
<div class="weda-meaasge">
<div class="row">
<div class="col-md-12">
<h3 style="color:red;">MUSLIM WORLD ENTREPRENEUR DEVELOPMENT AWARD (MWEDA)</h3>
<p> <p>The Muslim World Entrepreneur Development Award (MWEDA) is designed to recognise the
progress made by enthusiastic individuals who established successful businesses and
sustained them based on sound innovative practices. Apart from acknowledging their past efforts,the MWEDA facilitates the winners’ future growth by enhancing their involvement in the right networks where they have access to funding and investment opportunities.
The idea of this award stems from the need to build strong economies, formed by strong individual organisations cooperating for mutual benefits. All nominees and
winners of MWEDA are invited to take part in the 9th Muslim World Biz, which offers the participants a wide range of their products. At the same time they acquire new
knowledge and experiences.<button id="readmore" >READ MORE...</button></p>

<span class="para"> 
<h3 style="color:red;">WHO MAY JOIN?</h3>
<p>
The competition is open to all organisations involved in entrepreneurship. Nominations
may be submitted by individuals, agencies or corporate organisations.
</p>
<p>
<h3 style="color:red;">ELIGIBILITY</h3>

<ol>
<li>Legally registered with the respective authority in the country where they operate.</li>
<li>In operation for at least 2 years.</li>
</ol>
</p>
<p>
<h3 style="color:red;">WHAT TO SUBMIT?</h3>

<ol>
<li>A complete nomination form</i>
<li>All the documents required in the form (this may vary according to award classification)</li>
<li>Any additional documents requested by the organiser during the screening process</li>
</ol>
</p>
<p>
<h3 style="color:red;">WHY COMPETE?</h3>
<p>
MWEDA is presented as part of the annual trade event ‘The Muslim World Biz’ which is endorsed by the Organisation of Islamic Cooperation (OIC) and it is organised in collaboration with its subsidiary organ in Morocco, The Islamic Centre for Development of
Trade (ICDT). Being recognised by the ICDT opens the door wide for the winners to expand the reach of their businesses by tapping into a huge consumer market
comprised of nearly 2 billion Muslims, who mostly reside in the 57 OIC member countries.</p>
<p>The process of this expansion will start immediately at the Muslim World Biz, which incorporates several networking and business matching platforms in the exhibition and conference zones. The MWEDA leverages
on the opportunities created by these platforms to introduce the winners to the international marketplace as champions of highly competitive businesses. This in
turn boosts their chances to be among the best within the respective industries. In particular, the winners will:
</p>

<ol>
<li>Receive recognition for their record of excellence within the Muslim world, being awarded by the ICDT.</li>
<li>Create new business opportunities by partnering with the right social and professional networks.</li>

<li>Differentiate their products and services from other
businesses in the same industry through achieving
cutting-edge competitive advantages.</i>
<li>Gain positive publicity and more exposure in
new markets through wide coverage of the award
ceremony by local and international media channels</li>

<li>Celebrate their accomplishment, which acts as a
source of encouragement for all young ambitious
individuals to pursue their dreams through
entrepreneurship.</li>

</ol>
</p>
<p>
<h3 style="color:red;">JUDGING PROCEDURE</h3>
<p>Each of the forms of nomination received before the deadline will be processed and judged against itself first to make sure it fulfills the criteria of the award applied for. After passing the initial screening, it is judged in comparison with the other
nominations in the same category.</p>
<p> In order to ensure the judging process is fair and to avoid any conflict of interest. The name of nominees will not be revealed to the judging panels until the final stage, before announcing the winners based on the scores obtained. Each
nomination form is evaluated at three separate times during the preliminary rounds.</p>

The three sets of scores are then averaged into a single score for the individual nomination form. A certain minimum score must be achieved to qualify for an award.<br><br>
<img  class="img-fluid " style="padding-bottom:20px;" src="image/weda-2.jpg" alt="nomination-form" style="width:100%;>



<h3 style="color:red;">THE AWARD CEREMONY</h3>
<p>
The Muslim World Entrepreneur Development Award (MWEDA) will be presented during the Gala Dinner in conjunction with the Soft Launch of the 9th Muslim World Biz, happening on 3 November 2018 on Langkawi Island. All winners will be called to the stage to
receive their awards from YAB Dato’ Seri Hj Mukhriz Tun Mahathir, Chief Minister of Kedah, Malaysia.
</p>
<p>
<h3 style="color:red;">AWARD CATEGORIES</h3>

<ol>
<li>  AL-IMTIYAZ</i>
<li> AL-RA’ID
<ol>
<li>Excellent Business</li>
<li>Excellent Fintech</li>
<li>Excellent Brand</li>
<li>Excellent CSR</li>
<li>Excellent Overseas Business
Development</li>
<li>Excellent Innovator</li>
</ol>
</li>
<li>AL-FARIS
<ol>
<li>Outstanding Halal Business</li>
<li>Outstanding Enterpreneur</li>
<li>Young Enterpreneur</li>
<li>MWEDA 30</li>
</ol>
</li>
</ol>
</p>
<button class="btn btn-lg"><span class="glyphicon glyphicon-download-alt"></span> <a href="brochure/mweda.pdf"  download="Muslim World Entrepreneur Development Award" style="text-decoration:none !important;"><b style="color:white;">DOWNLOAD MWEDA BROCHURE </b></a></button><br><br>

</span>

<button id="readlessbtn">READ LESS</button>
</p>

</div>
</div>

</div>
</div><br>
<div class="container">
<div class="row">
    <div class="col-md-12">
 <div class="success"><?=$success; ?> </div>
 </div>
 </div>
 </div>
<div class="container">
<div class="nomination">
  <img  class="img-fluid" src="image/coverphoto/nomi.jpg" alt="nomination-form" style="width:100%;>
  
<p class="error"> * required field</p>
 <form  action="mweda-award.php" method="post">
  <p class="promo">A-CATEGORY</p>
 <div class="row">
 <div class="col-md-6">
  <input type="radio" name="rank" <?php if (isset($rank) && $rank=="The rank of al-ra,id") echo "checked";?> value="The rank of al-ra,id">&nbsp THE RANK OF AL-RA'ID
 </div>
 <div class="col-md-6">
 
 <input type="radio" name="rank" <?php if (isset($rank) && $rank=="The rank of al-faris") echo "checked";?> value="The rank of al-faris">&nbsp THE RANK OF AL-FARIS<b class="error">* <?php echo $rankErr;?></b>
 </div>
 </div><br>
 <p class="promo">B-PERSONAL INFORMATION(ENTREPRENEUR)</p>
 <div class="row">
 <div class="col-md-6">
 <p>
 <label for="inputName">Name<b class="error">*</b></label>
 <input type="text" name="name" value="<?php echo $name; ?>">
 <span class="error"><?php echo $nameErr; ?></span>
 </p>
 </div>
 <div class="col-md-6">
 <p>
 <label for="inputIdno">I/D NO<b class="error">*</b></label>
 <input type="text" name="id" value="<?php echo $id; ?>">
 <span class="error"><?php echo $idErr; ?></span>
 </p>
 </div>
 </div><br>
 
 <div class="row">
 <div class="col-md-4">
 <p>
 <label for="inputContact">CONTACT NO<b class="error">*</b></label>
  <input type="text" name="phone" value="<?php echo $phone; ?>">
  <span class="error"><?php echo $phoneErr; ?></span>
  </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputEmail">EMAIL<b class="error">*</b></label>
 <input type="text" name="email" value="<?php echo $email; ?>">
 <span class="error"><?php echo $emailErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputLinked">LINKEDIN I/D</label>
  <input type="text" name="linkedin" value="<?php echo $linkedin; ?>">
  
 </p>
 </div>
 </div><br>
 <p class="promo">C- LEGAL STRUCTURE OF THE COMPANY</p>
 
 
 
 <div class="row">
 <div class="col-md-4">
 <input type="radio" name="legal" <?php if (isset($legal) && $legal=="Private Limited") echo "checked";?> value="Private Limited">&nbsp PRIVATE LIMITED
 </div>
 <div class="col-md-4">
 <input type="radio" name="legal" <?php if (isset($legal) && $legal=="Public Limited") echo "checked";?> value="Public Limited">&nbsp PUBLIC LIMITED
 </div>
 <div class="col-md-4">
 <input type="radio" name="legal" <?php if (isset($legal) && $legal=="enterprise") echo "checked";?> value="enterprise"> &nbsp ENTERPRISE <b class="error">* <?php echo $legalErr;?></b>
 </div>
 </div><br>
 <div class="row">
 <div class="col-md-6">
 <p>
 <label for="inputCompany">COMPANY NAME<b class="error">*</b></label>
  <input type="text" name="company_name" value="<?php echo $company_name; ?>">
  <span class="error"><?php echo $company_nameErr; ?></span>
 </p>
 </div>
 <div class="col-md-6">
 <p>
 <label for="inputRegistration">SSM REGISTRATION NO<b class="error">*</b></label>
  <input type="text" name="ssm_registration" value="<?php echo $ssm_registration; ?>">
  <span class="error"><?php echo $ssm_registrationErr; ?></span>
 </p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-md-6">
 <p>
 <label for="inputNature">NATURE OF BUSINESS<b class="error">*</b></label>
  <input type="text" name="company_nature" value="<?php echo $company_nature; ?>">
  <span class="error"><?php echo $company_natureErr; ?></span>
 </p>
 </div>
 <div class="col-md-6">
 <p>
 <label for="inputDate">DATE OF INCORPORATION<b class="error">*</b></label>
  <input type="text" name="date" value="<?php echo $date; ?>">
  <span class="error"><?php echo $dateErr; ?></span>
 </p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-md-6">
 <p>
 <label for="inputNumber">NO OF EMPLOYEES<b class="error">*</b></label>
  <input type="text" name="employ_number" value="<?php echo $employ_number; ?>">
  <span class="error"><?php echo $employ_numberErr; ?></span>
 </p>
 </div>
 <div class="col-md-6">
 <p>
 <label for="inputSize">BUSINESS SIZE<b class="error">*</b></label>
 <input type="text" name="business_size" value="<?php echo $business_size; ?>">
 <span class="error"> <?php echo $business_sizeErr; ?></span>
 </p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-md-12">
 <p>
 <label for="inputAddress">HQ ADDRESS<b class="error">*</b></label>
 <textarea name="address" id="inputComment" class="form-control"  rows="3" cols="53"><?php echo $address; ?></textarea>
 <span class="error"><?php echo $addressErr; ?></span>
 </p>
 </div>
 </div><br>
 <div class="row">
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
  <input type="text" name="code" value="<?php echo $code; ?>">
  <span class="error"><?php echo $codeErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputState">STATE<b class="error">*</b></label>
 <input type="text" name="state" value="<?php echo $state; ?>">
 <span class="error"><?php echo $stateErr; ?></span>
 </p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-md-4">
 <p>
 <label for="inputCountry">COUNTRY<b class="error">*</b></label>
  <input type="text" name="country" value="<?php echo $country; ?>">
  <span class="error"><?php echo $countryErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputTel">TEL<b class="error">*</b></label>
 <input type="text" name="tel" value="<?php echo $tel; ?>">
 <span class="error"><?php echo $telErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputFax">FAX</label>
  <input type="text" name="fax" value="<?php echo $fax; ?>">
  
 </p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-md-4">
 <p>
 <label for="inputCEmail">EMAIL<b class="error">*</b></label>
 <input type="text" name="company_email" value="<?php echo $company_email; ?>">
 <span class="error"><?php echo $company_emailErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputWebsite">WEBSITE<b class="error">*</b></label>
 <input type="text" name="website" value="<?php echo $website; ?>">
 <span class="error"><?php echo $websiteErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputFacebook">FB OFFICIAL PAGE</label>
  <input type="text" name="facebook" value="<?php echo $facebook; ?>">
 
 <p>
 </div>
 </div>
 <br>
 <div class="row">
 <div class="col-md-12">
 <p>
 <label for="inputAward">AWARD PREVIOUSLY RECEIVED<b class="error">*</b></label>
 <textarea name="award" id="inputAward" class="form-control"  rows="3" cols="53"><?php echo $award; ?></textarea>
 <span class="error"><?php echo $awardErr; ?></span>
 </p>
 </div>
 </div><br>
 IS THE COMPANY A SUBSIDIARY COMPANY?<br>
 <div class="row">
 <div class="col-md-3">
 <input type="radio" name="subsidiary" <?php if (isset($subsidiary) && $subsidiary=="yes") echo "checked";?> value="yes">&nbsp YES
 </div>
 <div class="col-md-3">
 <input type="radio" name="subsidiary" <?php if (isset($subsidiary) && $subsidiary=="no") echo "checked";?> value="no">&nbsp NO <b class="error">* <?php echo $subsidiaryErr;?></b>
 </div>
 <div class="col-md-6"></div>
 </div><br>
 <div class="row">
 <div class="col-md-6">
 <p>
 <label for="inputPerson">CONTACT PERSON<b class="error">*</b></label>
 <input type="text" name="person" value="<?php echo $person; ?>">
 <span class="error"><?php echo $personErr; ?></span>
 </p>
 </div>
 <div class="col-md-6">
 <p>
 <label for="inputDesignation">DESIGNATION<b class="error">*</b></label>
  <input type="text" name="designation" value="<?php echo $designation; ?>">
  <span class="error"><?php echo $designationErr; ?></span>
 </p>
 </div>
 
 </div><br>
 <div class="row">
 <div class="col-md-4">
 <p>
 <label for="inputPerson_tel">TEL<b class="error">*</b></label>
  <input type="text" name="person_tel" value="<?php echo $person_tel; ?>">
  <span class="error"><?php echo $person_telErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputPerson_phone">MOBILE<b class="error">*</b></label>
 <input type="text" name="person_phone" value="<?php echo $person_phone; ?>">
 <span class="error"><?php echo $person_phoneErr; ?></span>
 </p>
 </div>
 <div class="col-md-4">
 <p>
 <label for="inputPerson_email">EMAIL<b class="error">*</b></label>
 <input type="text" name="person_email" value="<?php echo $person_email; ?>">
 <span class="error"><?php echo $person_emailErr; ?></span>
 </p>
 </div>
 </div><br>
 <div class="row">
 <div class="col-md-12">
 <p class="promo" data-toggle="modal" data-target="#myModal">D-TERMS & CONDITIONS(PLEASE CLICK)</p>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">D-TERMS & CONDITIONS</h4>
        </div>
        <div class="modal-body award" style="font-size:17px;">
          <ol>
			  <li>BACKGROUND
			    <ol>
<li>These terms and conditions (“Rules”) apply to nominations submitted for Muslim World Entrepreneur Development Award (the “Competition”) operating onour website at www.muslimworldbiz.com (the “Website”). By entering the Competition, you agree
 to be bound by these Rules.</li>
 
<li>The Competition is owned by OIC International Business Centre Sdn. Bhd and is organised by Muslim World Biz Sdn Bhd (the “Organiser“), which is based in Kuala Lumpur, Malaysia.</li>
<li> The Organiser reserves the right to cancel or amend the Competition or the Rules if an event outside of our reasonable control occurs (e.g. a catastrophe, war,
 civil or military disturbance, act of God).We will display any changes on the Website.</li>
<li>The decision of the Organiser in relation to any dispute about the Rules, conduct, results and all other matters relating to the Competition is final and we will
 not enter into correspondence.</li>
</ol>  
			  
</li><br>
			  
<li>HOW TO ENTER<br>
			  
<ol>
 <li> Employees of the Organiser, or any of their subsidiary and associated companies, agents or members of their families or households, are not eligible to enter the Competition. This does not exclude employees of the sponsor and their subsidiary and associated companies who are eligible to enter the competition.</li>
<li>The competition is open for businesses from around the world submitting their own nominations or nominating other businesses.</li>
<li>When submitting a nomination form you must attach the required documents as per the nomination form,and any other supporting documents.</li>
<li>The Organiser reserves the right to disqualify you if we have reasonable grounds to believe that you have breached any of the Rules.</li>
<li> If you are disqualified from the Competition we may select a replacement.</li>
 
 <li>The Competition closing date is 30 September 2018.No nominations will be accepted after this date. Winners will be awarded on 3 November 2018. The Organiser reserves the right to change these dates if necessary.</li>
<li>The Organiser is not responsible for any error, omission,interruption, deletion, defect, delay in operation or transmission, communications line failure, theft,
 destruction, alteration of or unauthorised access to nominations, or forms lost, damaged or delayed as a result of server functions, technical issues, virus, bugs or
 other causes outside our reasonable control.</li>
 <li>Please keep a copy of your nomination form as we will not be able to return them.</li> 
</ol> 			  			  
</li><br>
<li>HOW WINNERS ARE CHOSEN<br>
    <ol>
<li>A panel of judges will then choose a winner for each of the award categories.</li>
<li>The winners will be published on the Website and may also be requested to take part in promotional activity.</li>
 <li>By entering you agree that the Organiser, their sponsor and members of the media has non-exclusive permission to use your entry and/or your name, image and audio and/or visual recordings of you in any non-commercial publicity with due credit.</li>
<li>Any personal data relating to your nomination will be used solely in accordance with Malaysia’s data protection legislation and will not be disclosed to a third party without your prior consent.</li> 
</ol>
</li><br>
<li>GENERAL<br>
  <ol>
   <li>The Competition and these Rules are governed by Malaysia’s law and any disputesin relation to them are subject to the exclusive jurisdiction of the courts of
 Malaysia.</li>
 <li>The entrant agrees that should they be shortlisted for an Award they will provide a representative to attend the award ceremony to accept the trophy in the event
 they are successful.</li>
  </ol>

</li>
</ol> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 </div><br>
 
 <div class="row">
 <div class="col-md-6">
 <input type="checkbox" name="condition" <?php if (isset($condition) && $condition=="I AGREE") echo "checked";?> value="I AGREE">&nbsp I AGREE <b class="error">* <?php echo $conditionErr;?></b>
 </div>
 
 <div class="col-md-6"></div>
 </div><br>
 
 
 
 
  <input type="submit" value="SUBMIT">
  <input type="reset" value="RESET">
 

</form>
</div>
</div>
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
    <a href="organizer.html"> Organizer</a>
   
    
    
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

    <script src="js/new/agency.min.js"></script>

</body>
</html>
