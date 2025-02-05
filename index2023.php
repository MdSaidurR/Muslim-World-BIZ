<?php

 $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
function make_query($db)
{
 $query = "SELECT * FROM cover_photo ORDER BY id ASC";
 $result = mysqli_query($db, $query);
 return $result;
}

function make_slide_indicators($db)
{
 $output = ''; 
 $count = 0;
 $result = make_query($db);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#demo" data-slide-to="'.$count.'"  class="active"></li>

   ';
  }
  else
  {
   $output .= '
   <li  data-target="#demo" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($db)
{
 $output = '';
 $count = 0;
 $result = make_query($db);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="carousel-item active">';
  }
  else
  {
   $output .= '<div class="carousel-item">';
  }
  $output .= '
   <img  class="img-fluid" src="admin/image/mwb2023/'.$row["filename"].'" />
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Muslim World BIZ Official Website</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=" With the aim of enhancing intra-OIC trade activities, and to promote the Islamic economy globally, the Muslim World Biz incorporates a number of unique programmes that collectively create a trusted platform for businesses to connect and for industrial experts to deliberate new strategies."/>
  <link rel="shortcut icon" type="image/png" href="image/mwbiz.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">

 <style>
 
 .rania_title{
      text-align: center;
      font-size:20px;
      margin-bottom:10px;
      color:#fff;
     font-family: "Oswald", sans-serif;
     }

     .rania_description{
      text-align:justify;
       font-family: Arial, Helvetica, sans-serif;

     }




.hero {
  background: #BFA100;
  margin-bottom: 4em;
  position: relative;
  color: #000;
  padding-top: 1em;
}

.hero .curve {
    position: relative;
    display: block;
    height: 140px;
    bottom: -140px;
    margin-top: -100px;
    overflow: hidden;
  }
  
  .hero .curve::after {
    border-radius: 50%;
    box-shadow: inset 0 -10px 10px rgba(0,0,0,0.05);
    height: 100px;
    bottom: 0;
    transform: translate(-5%,-100%);
    -ms-transform: translate(-5%,-100%);
    -webkit-transform: translate(-5%,-100%);
    content: "";
    position: absolute;
    width: 110%;
    z-index: -1;
    background: #BFA100;
  }

 
 
 .horizontal-lines {
  height: 10px;
  color: #000f89;
  background-image: linear-gradient(
    currentColor,
    currentColor 33.33%,
    transparent 33.33%,
    transparent 100%);
  background-size: 100% 3px;
  width: 100%;
  
}


 .recipient_img img{
    width:100%; 

   }


div.background_recipient{
box-shadow: 0 1px 10px #000f89, inset 0 1px 0 #000f89;  
   text-align: center;
   padding: 10px 8px 5px 8px;
   min-height:350px !important;
}

#name{
    padding-top:5px;
    padding-bottom:5px;
}

.background_recipient img {
  width: 170px;
  max-height: 170px;
  border: 2px solid #bf9b30;
  border-radius:50%;
 
  
}
 
 
 
  .result {
  width:100%;
height:100%;
background: url("image/background/"); 
background-size:cover;
position:relative;
background-color: white;
overflow:hidden;
 
    }

div.factsheet-background{
  position:relative;
  top:0;
  left:0;
  width:100%;
  height: 100%;
  background:rgba(0,0,255,0.8);
  padding-bottom:20px;

}


@media screen and (max-width: 1000px) {
  .top-header {
    display: none;
  }
}

@media screen and (max-width: 1000px) {
  .logo {
   display: none;
  }

}

@media screen and (max-width: 1000px) {
  hr {
    display: none;
  }
}






@media screen and (min-width: 1200px) {
  .nav-logo {
   display: none;
  }
}

@media screen and (min-width: 800px) {
  .mobileversion {
   display: none;
  }
}



.top-one{
  padding:15px;
  border-right:2px solid #C0C0C0;
  text-align:center !important;
}

div.top-tow{
  padding-top:15px !important;
  border-right:2px solid red;
}


.logo{
 text-align:center;
}



.register_now{

  font-size: 30px !important;
  font-weight: bold !important;
  text-align: center;
   background: rgba(83, 51, 237, 1);
 
  
}


.top-three{
  padding-top:15px;

}



.top-three button{
  width:100%;
  font-size: 50px;
}


.top-three .btn{
  font-size: 30px;
  font-weight: bold;
  color:white;
  border:1px solid red;
  background-color: red;
}

.top-three .btn-outline-danger:hover{
   
   background-color:#000f89;
}

.popup1 .close {
  width: 20px !important;
  height:20px;
  border-radius:50%;
  top:-5px;
  font-family:"tw cen mt";
  font-size:20px;
  padding-top:1px;
  right:0px;
  color:white !important;
  position: absolute;
  background:red !important;
  opacity: 1;
}


.sponsorship{
   font-size: 20px !important;
   font-weight: bold !important;
   text-decoration: none;
   text-align: center;
   background:#000f89;
   color:white !important;
   padding-top: 7px;
   padding-bottom: 7px;
}

.exclusive{
   font-size: 20px !important;
   font-weight: bold !important;
   text-decoration: none;
   text-align: center;
   background:#000f89;
   color:white !important;
   padding-top: 7px;
   padding-bottom: 7px;
}


.exclusive:hover{
   font-size: 20px !important;
   font-weight: bold !important;
   text-decoration: none;
   text-align: center;
   background:red;
   color:white !important;
   padding-top: 7px;
   padding-bottom: 7px;
}

.top-match{
  padding-top:15px;

}

.top-match button{
  width:100%;
  font-size: 50px;


}


.top-match .btn{
  font-size: 30px;
  font-weight: bold;
  color:#000f89;
  border:1px solid #000f89;
  background-color: #FFFF00;
}

.top-match .btn-outline-danger:hover{
   
   background-color:white;
}


div.match:hover{
  background-color: white !important;
  color:#000f89 !important;
}

div.match p:hover{
  color:#000f89 !important;
}


</style>

</head>
<body >
    <?php include "menu.php"; ?>
    
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($db); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($db); ?>
    </div>
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

   </div>

<br>
<center class="sponsorship">THE MUSLIM WORLD RANIA AWARD 2024</center>

 <div class="hero">

<div class="container">
   <div class="row">
     <div class="col-md-6">
      
        <div class="rania_title">
             INTRODUCTION
        </div>

         <div class="rania_description">
         <p>The meaning of “Rania” is derived from the word “Queen” in arabic language. There is no doubt that women carry big responsibilities in their role of contributing to all aspects of human life. There has not been any known divine or man-made law that is not giving women their due rights in the society. Failing to clearly understand their role leads to disparage women’s value and hence deny those rights. All stages of history are full of examples for women who excelled event better than their men counterparts.</p> 

         <p>Islam, for instance, elevates the status of women to be completely equal to men, and it rejects any act of downgrading their physical and/or intellectual capabilities. However, many people accuse the Islamic teachings of being unfair towards women. This accusation comes in the first place as a result of misinterpreting the verses of the Holy Quran, without looking at the authentic narrations and explanations. What support the critic of those people are perhaps some cultural practices which has no roots in any of the Quranic verses.</p>

        <p>Away from theoretical statements there were many of women who stood side by side with men to enhance the progress of Islam since the first day. For example, the first wife of Prophet Mohammed (PBUH) was very successful in doing business. She also supported him when he received the first revelation. His other wife Um Salamah helped protecting the unity of the Ummah after the Treaty of Hudaybiyyah with her creative political suggestion to the Prophet (PBUH).</p> 

       </div>
     </div>
     <div class="col-md-6">

     <div class="rania_description"> 
      The Muslim World Rania Award is in recognition of the women’s efforts and to appreciate their feat in all sections of our life, the Muslim World Biz has the pleasure to announce the presentation of “The Muslim World Rania Award” to selected distinguished women from around the Muslim world.
     </div>

      <div class="rania_title pt-2" >
             VISIONS
         </div>

       <div class="rania_description"> The award is to recognize and appreciate the rights of all women around the world by showing examples of
outstanding women in the Muslim world, who face enormous challenges along the way towards success and
excellence.
</div>

<div class="rania_title" style="margin-top:15px;">
             OBJECTIVE
  </div>

<div class="rania_description">

<p>The Muslim World Rania Award is mainly presented to celebrate the success and achievements of the awarded women. It also is presented to:</p> 

<p>1.  Emphasize the role women play to attain comprehensive development of the Islamic economy.</p> <p>2.   Present real stories of how women can be successful business leaders without compromising their other duties.</p> 

<p>3.   Inspire the youth, especially girls, in their work towards getting utilising rights for their benefit and the benefits of others.</p> 

<p>4.   Integrate the efforts of men and women based on mutual understanding and acceptance of each other’s rights and responsibilities.</p>

 </div>
     </div>
   </div>
</div>
 <span class="curve"></span>
</div>


<!-- bellow code for 3rd section -->

<br>
<center class="sponsorship">PAST RANIA AWARD RECIPIENTS 2017 & 2019</center>
<br>

<div class="container">
<div class="row">

 <?php
 
  $i=0;
  $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
   $sql="SELECT * FROM recipients WHERE category='Rania' AND year='2017' ORDER BY id ASC LIMIT 16";
  $result = mysqli_query($db,$sql);
   while ($row = mysqli_fetch_array($result)) {

        echo "<div class='col-md-3'>";
         echo "<div class='background_recipient'>";
         
        echo "<div class='recipient_img'>";
           echo " <img  src='admin/image/recipient/".$row["filename"]."' > ";
         echo "</div>";

        echo "<div id='name'>";
        echo  "{$row['name']} " ;
        echo "</div>";

         echo "<div id='title'>";
        echo  "{$row['title']} " ;
        echo "</div>";

        echo "</div>";
       echo "</div>";

   $i++;
  if ($i % 4 == 0) {echo '</div>
 <hr class="horizontal-lines">
  <div class="row">';
 }
}
?>
</div>

</div>

<br>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <a href="becomesponsor.php"><center class="sponsorship">BECOME A SPONSOR</center></a>
    </div>
    <div class="col-md-4"></div>
  </div><br><br><br>

<div class="endosed">
       <div class="row">
    <div class="col-md-7">
      
      <div class="row">
        <div class="col-6">
       <div class="organizer">Endorsed By</div>

          <center><div class="row">
            
         <div class="col-4"></div>
     
         <div class="col-4">
      <center><a href="http://www.matrade.gov.my/en/"  target="_blank" >  <img  class="img-fluid"  style=" padding-top:30px;" src="admin/image/mwb2023/mat1.png" alt="Matrade"></a></center>
      </div>
          <div class="col-4"></div>
    </div></center>
    </div>

      <div class="col-3">
        <center class="organizer">Organiser</center>
         <center><a href="https://muslimworldbiz.com/"  target="_blank" >  <img  class="img-fluid" style="max-height:110px; padding-top:20px;" src="admin/image/mwb2023/mwbiz2.png" alt="MWB LOGO"></a></center>
      </div>
      <div class="col-3">
      <center class="organizer">Co-organiser</center>
         <center><a href="https://oicinternational.biz/"  target="_blank" >  <img  class="img-fluid" style="max-height:110px; padding-top:20px;" src="admin/image/mwb2023/oicb.jpg" alt="oicibc logo"></a></center>   
      </div>
      </div>

    </div>

      
      <div class="col-md-5">
        <center class="organizer">In Cooperation With</center>
       <center> <div class="row">
 
          <div class="col-4">
  <a href="http://icdt-oic.org/Default.aspx"  target="_blank" > <img  class="img-fluid" style="max-height:85px;margin-top:8px;" src="admin/image/mwb2023/cidc23.png" alt="logo"> </a>
          </div>
          
           <div class="col-4">

      <a href="https://www.oic-oci.org/home/?lan=en"  target="_blank" > <img  class="img-fluid" style="max-height:105px;margin-top:8px;" src="admin/image/mwb2023/oic23.png" alt="logo"> </a>
        
        </div>

          <div class="col-4">
<a href=" "  target="_blank" >  <img  class="img-fluid" style="max-height:89px; margin-top:8px;" src="admin/image/mwb2023/mwbm23.png" alt="logo"></a>
          </div>
          
        </div></center>
      
      
      </div>
       </div>

</div><br><br>

  





<div class="support">
 
     <div class="row">
      <div class="col-md-3"></div>
   <div class="col-md-6">
   <div class="row">
          <div class="col-4"><hr></div>
        <div class="col-4">
         <center class="organizer">Supported By</center>
       </div>
          <div class="col-4"><hr></div>
       </div><br>
       


  <div class="row">
    
    <div class="col-md-6">
      <div class="row">
       <div class="col-6">
         
           <center><a href="https://www.malaysia.gov.my/portal/index"  target="_blank" > <img  class="img-fluid" style=" padding-top:12px; padding-left:40px !important;"  src="admin/image/mwb2023/govt.jpg" alt="logo"></a></center>

       </div>
       <div class="col-6">
           <img  class="img-fluid"   src="admin/image/mwb2023/aau.png" alt="logo">
         

       </div>
      </div>
    </div>

    <div class="col-md-6">
        <div class="row">
       <div class="col-6">
         
         <img  class="img-fluid"  src="admin/image/mwb2023/las.png" alt="logo">

       </div>
       <div class="col-6">
          <img  class="img-fluid"   src="admin/image/mwb2023/fab.png" alt="logo">

       </div>
      </div>
    </div>
  </div>
</div>

 <div class="col-md-3"></div>
</div>

<br><br>


  <div class="row">

    <div class="col-md-4">
      <div class="row">
        
         <div class="col-6">
            
         <center class="organizer">Official Magazine</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="image/official/oictoday.png" alt="logo"></center>
         </div>

         <div class="col-6"> 
     
         <center class="organizer">Official Outdoor Media</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="admin/image/mwb2023/ramcel.png" alt="Ramcel"></center> 
         </div>

      </div>
    </div>

 <div class="col-md-4">
 <center class="organizer">Honouring</center><br>
  <div class="row">
        
         <div class="col-4">
     <a href="https://muslimworldbiz.com/jewels.html" target="_blank"> <center><img  class="img-fluid" style="max-height:90px;" src="admin/image/mwb2023/j23.png" alt="Jewels"></center> </a>      
         
         </div>

          <div class="col-4">
       <a href="https://muslimworldbiz.com/rania.html" target="_blank"> <center><img  class="img-fluid" style="max-height:90px;" src="admin/image/mwb2023/r23.png" alt="Rania"></center> </a>    
         
         </div>

         <div class="col-4"> 
     
        <a href="https://muslimworldbiz.com/mweda-award.php" target="_blank"> <center><img  class="img-fluid" style="max-height:90px;" src="admin/image/mwb2023/m23.png" alt="mweda"></center> </a>
         </div>

      </div>

 </div>

 <div class="col-md-4">
      <div class="row">

         <div class="col-6">
               
         <center class="organizer">Official Car</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="image/official/bmw.png" alt="logo"></center>
         </div>

    <div class="col-6">
           <center class="organizer">Official Freight Forwarder</center>
           <center><img  class="img-fluid" style="max-height:90px;" src="admin/image/mwb2023/rasia.png" alt="logo"></center>
        </div>

      </div>
    </div>
    
    </div>
</div>
</div><br><br>

<div class="sponsor">
<div class="row">
          <div class="col-5"><hr></div>
        <div class="col-2">
         <center class="organizer">Prefered Hotel</center>
       </div>
          <div class="col-5"><hr></div>
 </div><br>

  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row">
         
      <div class="col-4">
       
    <a href="https://lepetitchef.com/lepetit-chef-kuala-lumpur?gclid=CjwKCAjwwb6lBhBJEiwAbuVUSs-2tXkDJi8xbXS4TiXdRtgIYD1RNPsthEOwSpBV_s-0cBicSpzilxoCC2sQAvD_BwE" target="_blank"> <img class="img-fluid"  src="admin/image/mwb2023/grand23.png"></a>
        
  </div>    
         
    <div class="col-4">
        
        <a href="https://www.shangri-la.com/en/kualalumpur/traders/?timeZone=+8&specialCode=OIC030919&specialCodeType=Group&checkInDate=2019-09-03&checkOutDate=2019-09-07&rooms=[{%22adultNum%22:1,%22childNum%22:0}]" target="_blank"> <img class="img-fluid"  src="admin/image/mwb2023/shang.png"></a>
       
     </div>
 
   <div class="col-4">
        
      <center>
           
             <a href="https://bit.ly/2GlYown" target="_blank"><img class="img-fluid"  src="admin/image/mwb2023/impiana.png"></a>
      </center>     
      
    </div>     

      </div>
    </div>

<div class="col-md-3"></div>

  </div>
</div><br><br>

<button onclick="topFunction()" id="myBtn"><i class="up"></i></button>

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
        <a href="exhibitor_registration.php">Exhibitor</a>
        <a href="delegate-registration.html">Conference Delegate</a>
        <a href="trade_buyer.php">Trade Buyer</a>
        <a href="visitor_registration.php">Public Visitor</a>
        <a href="media_registration.php">Media Representative </a>
       
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
        <a  href="visitor_registration.php"> Visitor Pre-registration</a>
      </div>
    </div>

     <div class="col-md-2">
      <div class="vertical-menu">
         <p> MEDIA CENTRE</p>
        <a  href="media_registration.php">Media Registration </a>
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
&copy; <?php echo date("Y"); ?> muslimworldbiz.com All Rights Reserved.</p>
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
    
   <!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 11168057;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<!-- End of LiveChat code -->



</body>
</html>
