


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
 <style>
 input[type=text] {
    height:30px;
    width: 100%;
    padding: 12px 20px;
    border: 1px solid #000f89;
    
}


div.papri{ 
padding-top:20px;


}

mwbiz h4,h5{
   line-height: 0.9;
       
  }

.btn{
  padding-right:15px;
  padding-left: 15px;
}


.contact{

  border: 1px solid #000f89;
  padding: 10px;
  background-color: #e5e5e5 !important;
}
  

  .delegate_form{

  border: 1px solid #000f89;
  padding: 10px;
  background-color: #e5e5e5 !important;
}
  

  </style>
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
   <img  class="img-fluid" src="image/coverphoto/malaysia.jpg" alt="mwbiz-9" ><br><br>
    <div class="row">
  <div class="col-md-8">
    <div class="delegate_form">
     
   <div class="registration">
<p class="error"> * required field</p>   
<form action="malaysian-registration-success.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3">
      <label for="inputName">TITLE<b class="error">*</b></label>
      <select name="title" style="height:30px; border: 1px solid #000f89;"  >  <b class="error">*</b>
  <option  hidden>SELECT TITLE</option>   
<option value="Mr">Mr</option>
<option value="Miss">Miss</option>
<option value="Mrs">Mrs</option>
<option value="Tun">Tun</option>
<option value="Tan Sri">Tan Sri</option>
<option value="Datuk">Datuk</option>
<option value="Dato Sri">Dato Sri</option>
<option value="Datuk Seri">Datuk Seri</option>
<option value="Dato">Dato</option>
</select>
    </div>
  </div>
  

      <div class="row">
        <div class="col-md-6">
         <div class="form-group">
            <label for="inputName">NAME <b class="error">*</b></label>
            <input type="text" name="name"  required="">
       </div>
        </div>
      </div>

  <div class="row">
        <div class="col-md-12">

      <div class="form-group">
 <label for="inputAddress">ADDRESS<b class="error">*</b></label>
 <textarea name="address" style="border:1px solid #000f89; border-radius:0px;" id="inputComment" class="form-control" required=""  rows="1" cols="53"></textarea>
 
 </div>
    
        </div>
 

       
      </div>
        


    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="inputEmail">EMAIL <b class="error">*</b></label>
            <input type="text" name="email"   required="">
            
       </div>
        </div>
      
        
        <div class="col-md-6">
      <div class="form-group">
            <label for="input">PHONE <b class="error">*</b></label>
            <input type="text" name="phone"   required="">
      
       </div>
        </div>

         <div class="col-md-6">
       <div class="form-group">
       <label for="input">COMPANY <b class="error">*</b></label>
      <input type="text" name="company"  required="">
    </div>
      </div>

       <div class="col-md-6">
       <div class="form-group">
      <label for="inputName">INDUSTRY<b class="error">*</b></label><br>
      <select name="industry_type" style="height:30px; border: 1px solid #000f89;">  <b class="error">*</b>
  <option  hidden>----------  SELECT---------</option>   
<option value="Food And Beverages">Food And Beverages</option>
<option value="Banking and Finance">Banking and Finance</option>
<option value="Manufacturing">Manufacturing</option>
<option value="Transport and Logistics">Transport and Logistics</option>
<option value="Higher Education">Higher Education</option>
<option value="Tourism">Tourism</option>
<option value="Healthcare">Healthcare</option>
<option value="Fashion and Beauty ">Fashion and Beauty </option>
<option value="Textile">Textile</option>
 
</select>
   </div>

       </div>


      </div>

 
        

  <label for="input"><b>WHICH PACKAGE WOULD YOU LIKE TO CHOOSE?</b><b class="error">*</b></label><br><br>

 <div class="row">
  <div class="col-md-6">
   
    ROUND TABLE TALK
  </div>
  
  <div class="col-md-4">
   <div class="form-group">
        <label for="InputOIC">SEAT</label>
      <select name="rtt_seat_num"  style="height:30px; border: 1px solid #000f89;>  <b class="error">*</b>
  <option value="<?php echo $rtt_seat_num; ?>"  hidden>--SELECT SEAT--</option>
  <option value="0">0</option>
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

    </select>
   </div>
  </div>
</div><br>

<div class="row">
  <div class="col-md-6">
  
   OIC ARAB-ASIA TRADE & ECONOMIC FORUM
 </div>
   
  <div class="col-md-4">
  <div class="form-group">
      <label for="InputOIC">SEAT</label>
      <select name="oic_seat_num"   style="height:30px; border: 1px solid #000f89;">  <b class="error">*</b>
  <option value="<?php echo $oic_seat_num; ?>" hidden>--SELECT SEAT--</option> 
  <option value="0">0</option>
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

    </select>
   </div>
  </div>

</div><br>

<div class="row">
  <div class="col-md-6">
   
   THE MUSLIM WORLD WOMEN'S SUMMIT
 </div>
    
<div class="col-md-4">
    <div class="form-group">
      <label for="inputRtt_other">SEAT</label>
      <select name="summit_seat_num"  style="height:30px; border: 1px solid #000f89;">  <b class="error">*</b>
  <option value="<?php echo $summit_seat_num; ?>" hidden>--SELECT SEAT--</option>  
  <option value="0">0</option>
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

    </select>
   </div>
  </div>

</div><br>


  <div class="row">
  <div class="col-md-6">
   
      <label for="inputName"><b>TOTAL NUMBER OF SEATS & PRICE:</b><b class="error">*</b></label>
      </div>
      <div class="col-md-4">
      <select name="total_seat_num"  style="height:30px; margin-left:40px; border: 1px solid #000f89;">  <b class="error">*</b>
  <option value="<?php echo $total_seat_num; ?>" hidden>SELECT NUMBER</option>   
<option value="1 : RM1200">1 &nbsp: RM1200</option>
<option value="2 : RM2200">2 &nbsp: RM2200 </option>
<option value="3 : RM3400">3 &nbsp: RM3400</option>
<option value="4 : RM4000">4 &nbsp: RM4000</option>
<option value="5 : RM5200">5 &nbsp: RM5200</option>
<option value="6 : RM6200">6 &nbsp: RM6200</option>
<option value="7 : RM7400">7 &nbsp: RM7400</option>
<option value="8 : RM8000">8 &nbsp: RM8000</option>
<option value="9 : RM9200">9 &nbsp: RM9200</option>
 <option value="10: RM10200">10: RM10200</option>
</select>
    </div>
   </div><br>
    <div class="row">
 <div class="col-md-12">
   <div class="form-group">
         <label for="inputName"><b>PAYMENT SLIP :</b></label>  <input type="file" name="file">
    </div>
 </div>


 </div>
   <br>   

        <input type="submit"  class="btn btn-success"  value="Send" onClick="clearform();">
        <input type="reset"  class="btn btn-danger" value="Reset"><br><br>
        
    </form>
  </div><br>
  </div>
  </div>
<div class="col-md-4">
 <div class="promo1" style=" background-color:#000f89 !important; ">ROUND TABLE TALK</div>
  <a href="rtt.html" target="_blank"><img  class="img-fluid" src="image/rtt/1.jpg" alt="mwbiz-9" ></a><br>
  <br>
 <div class="promo1" style=" background-color:#000f89 !important; ">MUSLIM WORLD WOMEN'S SUMMIT</div>
   <a href="mwws.html" target="_blank"><img  class="img-fluid" src="image/mwws/3.jpg" alt="mwbiz-9" ></a><br><br>

     <div class="promo1" style=" background-color:#000f89 !important; ">OIC ARAB-ASIA TRADE & ECONOMIC FORUM</div>
   <a href="oic-arab-asia-te.html" target="_blank"><img  class="img-fluid" src="image/oicarab/1.jpg" alt="mwbiz-9" ></a><br><br> 

   <div class="promo1" style="font-size:25px; color: white ! important; text-decoration:none !important;">
       <a href="brochure.html" target="_blank">DOWNLOAD BROCHURE</a>
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
</body>
</html>
