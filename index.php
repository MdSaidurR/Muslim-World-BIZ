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

 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">

 <style>
 

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

<!-- bellow code for 3rd section -->

<div class="result">
 
   <div class="row" style="padding-bottom:20px;">
   <div class="col-md-5">
      <p class="fact">The Muslim World Women's Summit  Brochure</p>
    <br>
     <div class="fact1">
       <a href="##"> <button type="button" class="btn btn-outline-danger">DOWNLOAD</button></a>
     </div>


    </div>
     <div class="col-md-7">

     <div class="row">

      <div class="col-4">
       
    <div id="counter">
    <div class="counter-value" data-count="30"></div>
     </div>
      <div class="factsheet"> PARTICIPATING COUNTRIES</div>
      </div>

      <div class="col-4">
      <div id="counter"> 
     <div class="counter-value" data-count="4876"></div>
     </div>
    <div class="factsheet">SQM EXHIBITION SPACE </div>
      </div>

       <div class="col-4">
       <div id="counter">
      <div class="counter-value" data-count="300"></div>
     </div>
        <div class="factsheet"> EXHIBITION BOOTHS </div>

      </div>

     </div>


    <div class="row">
      
       <div class="col-4">
         <div id="counter">
      <div class="counter-value" data-count="200"></div>
         </div>
          <div class="factsheet"> EXHIBITORS </div>
       </div>
      <div class="col-4">
      <div id="counter"> 
         <div class="counter-value" data-count="15000"></div> 
      </div> 
       <div class="factsheet">BUYERS & VISITORS</div>
      </div>

      <div class="col-4">
       <div id="counter">
      <div class="counter-value" data-count="3"></div>
     </div>
        <div class="factsheet"> SEMINARS </div>

      </div>

     </div>

    </div>
    <script type="text/javascript">
    var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});
    </script>

   </div>
 
</div><br><br>

<div class="exhibitor">

  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="hovereffect">
    <img  class="img-fluid" src="image/exhibitor/exhi.jpg"   alt="exhi" >

    <div class="carousel-caption">
 <h5>Join  Interactive<br>
  <span style="color:blue; font-weight: bold; font-size:22px;">EXHIBITION</span><br>Promote Innovative Products</h5>
  <a href="exhibitor_registration.php"> <button type="button" class="btn btn-outline-danger">BOOK YOUR SPACE NOW</button></a>

  </div>   
    </div>
    </div>
     <div class="col-md-4">
      <div class="hovereffect">
    <img  class="img-fluid" style="min-height:300px;" src="image/exhibitor/match.jpg"  alt="match" >

    <div class="carousel-caption">
    <h5>Find reliable<br>
       <span style="color:blue; font-weight: bold; font-size:22px;">BUSINESS PARTNERS</span><br> Seal Great Deals</h5>
  <a href="business_matching.php"> <button type="button" class="btn btn-outline-danger"> BUSINESS MATCHING </button></a>

  </div>   
    </div>
    </div>
     <div class="col-md-4">
      <div class="hovereffect">
    <img  class="img-fluid"  src="image/exhibitor/trade.jpg"  alt="trade" >

    <div class="carousel-caption">
      <h5>Explore new <br><span style="color:blue; font-weight: bold; font-size:22px;">TECHNOLOGIES</span> <br>Expand In New Markets</h5>
  <a href="trade_buyer.php"> <button type="button" class="btn btn-outline-danger">REGISTER AS A TRADE BUYER </button></a>

  </div>   
    </div>
    </div>
  </div><br>
</div>


<div class="row ">

   <div class="col-md-4">
     <div class="promo">JEWELS OF THE MUSLIM WORLD AWARD</div>
      <div class="embed-responsive embed-responsive-16by9">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/FeZ7cqEn0kY" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
   </div>

   <div class="col-md-4">
    <div class="promo">THE MUSLIM WORLD RANIA AWARD</div>
   <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/dIeQDbHBPPA" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
   </div>
<div class="col-md-4">
   <div class="promo"> MWEDA AWARD</div>
        <div class="embed-responsive embed-responsive-16by9">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/zaXPmj5JzY4" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      
  </div>

</div>
<br>




<div class="main-conference">
  <div class="row">
  <div class="col-md-4">
    <hr>
  </div>
   <div class="col-md-4">
     <center><div class="title"> CONFERENCES</div></center>
   </div>
    <div class="col-md-4">
      <hr>
    </div>
</div>

<div class="row">
   <div class="col-md-4">
   <a href="rtt.html"> <div class="confer-img">
      <img  class="img-fluid" src="image/conference/rtt.jpg"  alt="rtt" >
       <div class="caption">
     <strong style="color:red;">The Round Table Talk</strong> is a special leadership programme that aims to bridge the gap in knowledge and experience between current and future leaders, who in turn build strong economies.
      </div>
    </div></a>
   
  </div>

  <div class="col-md-4">
     <a href="mwws.html"> <div class="confer-img">
      <img  class="img-fluid" src="image/conference/summit.jpg"  alt="summit">
       <div class="caption">
         <strong style="color:red;">The Muslim World Women’s Summit</strong> is designed to deliberate issues related to women’s empowerment to enhance their participation and acknowledge their contributions to the development of local and international communities. 
      </div> 
      </div></a> 
  </div>

  <div class="col-md-4">
    <a href="oic-arab-asia-te.html"> <div class="confer-img">
      <img  class="img-fluid" src="image/conference/oic-arab-asia.jpg"  alt="oic-arab-asia">
       <div class="caption">
       <strong style="color:red;">The OIC Arab-asia Trade & Economic Forum </strong> brings together policy makers and professionals who engage in ruminative discussions to evaluate current practices and formulate future strategies to boost intra-OIC trade.


      </div> 
      </div></a> 
      
  </div>

</div><br>

<div class="row">
  <div class="col-md-4">
    <hr>
  </div>
   <div class="col-md-4">
     <center><div class="title">OTHER CONFERENCES</div></center>
   </div>
    <div class="col-md-4">
      <hr>
    </div>
</div>

</div>


<div class="other-conference">
 <div class="row">
  <div class="col-md-12"> 
    <div class="owl-carousel owl-theme">

   <div class="item">
    <div class="home-confer1">
     <div class="row">
      <div class="col-md-6">
       <img  class="img-fluid" style="padding-top:30px;" src="image/conference/education23.png"  alt="education">  
      </div>
      <div class="col-md-6">
       <div class="confer-name">
           <p>Considering the importance of education to prepare business leaders to build successful organisations, the OIC Higher Education Conference focuses on creating the best match between university curriculum and the needs of the various industries. For this purpose, business leaders, university management, academicians and students are directly involved in the discussions.<a href="ohec.html"> <button type="button" class="btn btn-outline-danger">Read More</button></a></p>
        </div>
     </div>
   </div>
  </div>
</div>

   <div class="item">
    <div class="home-confer2">
     <div class="row">
      <div class="col-md-6">
    <img  class="img-fluid" style="padding-top:10px; padding-bottom: 32px;" src="image/conference/witcx23.png"  alt="witcx">   
      </div>
      <div class="col-md-6">
       <div class="confer-name">
           <p>Islamic tourism has emerged within the travel industry to accommodate the interests and comforts of the increasing number of Muslim tourists. Thus, the World Islamic Tourism Conference presents insights of developing Muslim-friendly destinations. It also contributes to formulating regulatory standards for Islamic tourism, which is widely offered by non-Islamic countries.<a href="witc.html"> <button type="button" class="btn btn-outline-danger">Read More</button></a></p>
        </div>
      </div>
     </div>
  </div>
</div>

 <div class="item">
    <div class="home-confer1">
     <div class="row">
      <div class="col-md-6">
    <img  class="img-fluid" style="padding-top:11px;" src="image/conference/infrastructure23.png"  alt="witcx">   
      </div>
      <div class="col-md-6">
        <div class="confer-name">
           <p>Economic development of any country is directly dependent upon the availability of proper and enduring infrastructure. The Muslim World Infrastructure and Investment Conference discusses the methods through which infrastructure spending can enhance the productive potential of the economy and boost its growth by greasing the wheels of future economic activities.<a href="mwiic.html"> <button type="button" class="btn btn-outline-danger">Read More</button></a></p>
        </div>
      </div>
     </div>
  </div>
</div>
 <div class="item">
    <div class="home-confer2">
    <div class="row">
      <div class="col-md-6">
    <img  class="img-fluid" style="padding-top:35px;"  src="image/conference/medical.png"  alt="witcx">   
      </div>
      <div class="col-md-6">
       <div class="confer-name">
           <p>Healthcare is one of the basic necessities which all nation need, besides shelter and education. Until these three needs are sufficiently met one cannot speak of any kind of economic development. The World Medical Tourism Conference provides roadmap for establishing sound infrastructure, diversifying the services offered and promoting them worldwide.

<a href="wmtc.html"> <button type="button" class="btn btn-outline-danger">Read More</button></a></p>
        </div>
      </div>
   </div>
  </div>
</div>
 <div class="item">
    <div class="home-confer1">
     <div class="row">
      <div class="col-md-6">
    <img  class="img-fluid" style="padding-top:38px; padding-bottom: 4px;" src="image/conference/agriculture.png"  alt="witcx">   
      </div>
      <div class="col-md-6">
        <div class="confer-name">
           <p>Since the dawn of history human relied on agriculture and cultivation to ensure survival. Along the years, this sector witnessed drastic improvements due to technological advancement. However, farmers have been facing several challenges in each stage. The Muslim World Agriculture Conference sheds light on these issues to provide viable solutions.<a href="mwac.html"> <button type="button" class="btn btn-outline-danger">Read More</button></a></p>
        </div>
      </div>
     </div>
  </div>
</div>
  


    </div>
     </div>
   </div>
 </div>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.autoplay.js"></script>
<script src="js/owl.navigation.js"></script>
<script src="js/owl.animate.js"></script>
<script src="js/owl.carousel.min.js"></script>


 <script>


    $('.owl-carousel').owlCarousel({
      autoplayHoverPause:true,
    loop:true,
    margin:20,
    nav:false,
  dots:true,
  autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:2
        }
    }
})

</script>

<div class="award-ceremony">
   <div class="row">
  <div class="col-md-4">
    <hr>
  </div>
   <div class="col-md-4">
     <center><div class="title" style="color:#000f89;">AWARD CEREMONIES</div></center>

   </div>
    <div class="col-md-4">
      <hr>
    </div>
</div>
  <div class="row no-gutters">
   <div class="col-md-4">
    <div class="award">
    <div class="background" >
  <div class="transbox">
    <img  class="img-fluid" src="image/award/jewels.jpg" alt="JEWELS" >
    <div class="carousel-caption" style="padding-bottom:10px !important;">
       <h4> JEWELS OF THE MUSLIM WORLD AWARD</h4>
  <a href="jewels.html"> <button  type="button" class="btn btn-outline-danger">Read More</button></a>
  </div>   
    </div>
  </div>
   </div>
    </div>

   <div class="col-md-4">
  <div class="award">  
    <div class="background" >
  <div class="transbox">
    <img  class="img-fluid" src="image/award/rania.jpg"  alt="rania" >
    <div class="carousel-caption">
   <h4> THE MUSLIM WORLD RANIA AWARD</h4>
  <a href="rania.html" style="padding-bottom:15px !important;" > <button type="button" class="btn btn-outline-danger">Read More</button></a>

  </div>   
    </div>
  </div>
    </div>
    </div>
  <div class="col-md-4">
    <div class="award">  
   <div class="background" >
  <div class="transbox">
    <img  class="img-fluid" src="image/award/mwed.jpg"  alt="mweda" >
    <div class="carousel-caption">
  <h4>MWEDA</h4>
  <a href="mweda-award.php"> <button type="button" class="btn btn-outline-danger">Read More</button></a>

  </div>   
    </div>
  </div>
  </div>
</div>
</div>
</div><br><br><br>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <a href="becomesponsor.php"><center class="sponsorship">BECOME A SPONSOR</center></a>
    </div>
    <div class="col-md-4"></div>
  </div><br><br><br>

<div class="endosed">
       <div class="row">
    <div class="col-md-8">
      
      <div class="row">
        <div class="col-md-7">
       <div class="organizer">ENDORSED BY</div>

          <center><div class="row">
            
           
          <div class="col-6">
        
      <center><a href="https://www.malaysia.gov.my/portal/index"  target="_blank" > <img  class="img-fluid" style=" padding-top:12px; padding-left:40px !important;"  src="image/logo/endose/govt.jpg" alt="logo"></a></center>
    </div>
     
         <div class="col-6">
      <center><a href="http://www.matrade.gov.my/en/"  target="_blank" >  <img  class="img-fluid"  style=" padding-top:30px;" src="image/logo/endose/mat1.png" alt="logo"></a></center>
      </div>
     
    </div></center>
    </div>

      <div class="col-md-2">
        <center class="organizer">ORGANISER</center>
         <center><a href="https://oicinternational.biz/"  target="_blank" >  <img  class="img-fluid" style="max-height:96px; padding-top:20px;" src="image/logo/endose/oicb.jpg" alt="logo"></a></center>
      </div>
      <div class="col-md-3">
      <center class="organizer">CO-ORGANISER</center>
         <center><a href=""  target="_blank" >  <img  class="img-fluid" style="max-height:110px; padding-top:20px;" src="image/logo/endose/ramcel.png" alt="logo"></a></center>   
      </div>
      </div>

    </div>

      
      <div class="col-md-4">
        <center class="organizer">IN COOPERATION WITH</center>
       <center> <div class="row">
 
       <div class="col-4">

      <a href="https://www.oic-oci.org/home/?lan=en"  target="_blank" > <img  class="img-fluid" style="max-height:105px;margin-top:8px;" src="image/23/oic23.png" alt="logo"> </a>
        
        </div>
           

          <div class="col-4">
  <a href="http://icdt-oic.org/Default.aspx"  target="_blank" > <img  class="img-fluid" style="max-height:85px;margin-top:8px;" src="image/23/cidc23.png" alt="logo"> </a>
          </div>

          <div class="col-4">
<a href=" "  target="_blank" >  <img  class="img-fluid" style="max-height:89px; margin-top:8px;" src="image/23/mwbm23.png" alt="logo"></a>
          </div>
          
        </div></center>
      
      
      </div>
       </div>

</div><br><br>

  





<div class="support">
 
     <div class="row">
      <div class="col-md-2"></div>
   <div class="col-md-8">
   <div class="row">
          <div class="col-4"><hr></div>
        <div class="col-4">
         <center class="organizer">SUPPORTED BY</center>
       </div>
          <div class="col-4"><hr></div>
       </div><br>
        <center>
    <div class="row">

 <div class="col-md-4">
    <div class="row">
      <div class="col-6">
     <img  class="img-fluid"  src="image/support/govt.png" alt="logo">
      </div>
      <div class="col-6">
    <img  class="img-fluid"  style="max-height:95px; margin-top:8px;" src="image/support/dkn.png" alt="logo">
      </div>

    </div>
  </div>

  <div class="col-md-4">
    <div class="row">
      <div class="col-6">
     <img  class="img-fluid"  src="image/support/las.png" alt="logo">
      </div>
      <div class="col-6">
    <img  class="img-fluid"   src="image/support/aau.png" alt="logo">
      </div>

    </div>
  </div>

  <div class="col-md-4">
    <div class="row">
      <div class="col-6">
     <img  class="img-fluid"  style="min-height:120px;padding-top:25px;" src="image/support/icci.png" alt="logo">
      </div>
      <div class="col-6">
        <img  class="img-fluid"   src="image/support/fab.png" alt="logo">
      </div>

    </div>
  </div>

</div>
</div>
 <div class="col-md-2"></div>
</div>
</div>
<br><br>

<div class="support">
 
     <div class="row">
      <div class="col-md-4"></div>
   <div class="col-md-4">
   <div class="row">
          <div class="col-2"><hr></div>
        <div class="col-8">
         <center class="organizer">STRATEGIC PARTNER</center>
       </div>
          <div class="col-2"><hr></div>
       </div>
        <center>
   


    <div class="row">

       <div class="col-4">
     <img  class="img-fluid" style="max-height:95px; margin-top:8px;" src="image/strategic/1.png" alt="logo">
      </div> 

      <div class="col-4">
     <img  class="img-fluid"  src="image/strategic/2.png" alt="logo">
      </div>
      <div class="col-4">
    <img  class="img-fluid" style="max-height:95px; margin-top:8px;" src="image/strategic/3.png" alt="logo">
      </div>

    </div>
 
</div>
 <div class="col-md-4"></div>
</div>
</div>
<br><br><br>

<div class="support">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="col-6">
        
         <center class="organizer">OFFICIAL INSURANCE</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="image/official/takaful.png" alt="logo"></center>
     
        </div>
         <div class="col-6">
            
         <center class="organizer">OFFICIAL MAGAZINE</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="image/official/oictoday.png" alt="logo"></center>
         </div>
      </div>
    </div>

 <div class="col-md-4">
      <div class="row">
        <div class="col-6">
         

         <center class="organizer">OFFICIAL TABLOID</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="image/official/tabloid.png" alt="logo"></center> 

        </div>

         <div class="col-6">
               
         <center class="organizer">OFFICIAL CAR</center><br>
<center><img  class="img-fluid" style="max-height:90px;" src="image/official/bmw.png" alt="logo"></center>
         </div>
      </div>
    </div>

   <div class="col-md-4">
      <div class="row">
        <div class="col-6">
           <center class="organizer">OFFICIAL FREIGHT FORWARDER</center>
           <center><img  class="img-fluid" style="max-height:90px;" src="image/official/curi.png" alt="logo"></center>
        </div>

         <div class="col-6">
            <center class="organizer">MEDICAL PARTNER</center>
           <center><img  class="img-fluid" style="max-height:90px;" src="image/official/kpj.png" alt="logo"></center>
         </div>
      </div>
    </div>
  </div>
</div><br><br><br>








<div class="sponsor">
  <div class="row">
    <div class="col-md-3"></div>
<div class="col-md-3">
   <center class="organizer">INTERNATIONAL PARTNER</center>
  <center> <div class="row">
    <div class="col-6">
       <img class="img-fluid"   src="image/official/danac.png">
    </div>

      <div class="col-6">
 <img class="img-fluid"   src="image/official/adam.png">
      </div>
    </div></center>
</div>

<div class="col-md-3">
   <center class="organizer">CORPORATE PARTNER</center>
   <center> <div class="row">
    <div class="col-6">
       <img class="img-fluid"   src="image/official/drm.png">
    </div>

      <div class="col-6">
 <img class="img-fluid"   src="image/official/young.png">
      </div>
    </div></center>
</div>


<div class="col-md-3"></div>
</div>
</div><br>

<div class="row">
          <div class="col-4"><hr></div>
        <div class="col-4">
         <center class="organizer" style="text-align:center;">OFFICIAL BUSINESS MATCHMAKING PARTNER</center>
       </div>
          <div class="col-4"><hr></div>
          <div class="col-5"></div>
           <div class="col-2">
            <div class="sponsor-back">
        <a href="https://www.appsaya.com/" target="_blank"><center> <img class="img-fluid"  style="max-height:100px;" src="image/logo/appsaya.png"></center></a>
           </div>
         </div>
            <div class="col-5"></div>
       </div>
     </div><br>

<div class="sponsor">
<div class="row">
          <div class="col-5"><hr></div>
        <div class="col-2">
         <center class="organizer">PREFERED HOTEL</center>
       </div>
          <div class="col-5"><hr></div>
       </div><br>
  <div class="row">
    <div class="col-md-6">
        <div class="row">
         
    <div class="col-4">
        
        <a href="https://www.shangri-la.com/en/kualalumpur/traders/?timeZone=+8&specialCode=OIC030919&specialCodeType=Group&checkInDate=2019-09-03&checkOutDate=2019-09-07&rooms=[{%22adultNum%22:1,%22childNum%22:0}]" target="_blank"> <img class="img-fluid"  src="image/accommodation/shang.png"></a>
       
     </div>
  <div class="col-4">
       
    <a href="https://be.synxis.com/?adult=1&arrive=2019-09-02&chain=24447&child=0&currency=MYR&depart=2019-09-03&hotel=7000&level=hotel&locale=en-US&promo=MWB2019&rate=NOIC&rooms=1&sbe_ri=0&src=30" target="_blank">    <img class="img-fluid" src="image/accommodation/ruma.png"></a>
        
  </div>
   <div class="col-4">
        
        <a href="https://www.book-secure.com/index.php?s=results&property=mykua31647&code=MWB2019&arrival=2019-09-02" target="_blank">  <img class="img-fluid" style="padding-top:50px;"  src="image/accommodation/cosmo.png"></a>
      
     </div>     

      </div>
    </div>

  <div class="col-md-6">
        <div class="row">
          <div class="col-4">
    <a href="https://www.book-secure.com/index.php?s=results&property=mykua23232&arrival=2019-09-01&departure=2019-09-02&rate=OIC-2019&code=OIC2019&adults1=1&children1=0&locale=en_GB&currency=MYR&stid=zxwjngq8h" target="_blank"> <img class="img-fluid"  src="image/accommodation/perdona.png"></a>
        </div>
    <div class="col-4">
       <center>
       
        <a href="https://www.the-ascott.com/en/booking/booking-journey.html?hotel=50890&arrive=04-09-2019&depart=10-09-2019&rooms=1&adult=2&child=0&childages=&ageOfChildLimit=6&promo=MWB2019&coupon=MWB2019&discountCodeType=1&searchdest=Ascott%20Kuala%20Lumpur&searchsrc=&type=property&roomTypeCode=0PRE,1DLX,1EXE,2DLX,2EXE,2PRE,3DLX,3PRE&src=IBE&minlengthofstay=NaN&checkinperiod=1&checkoutperiod=2&brand=ascott&dest=&ssid=" target="_blank">  <img class="img-fluid"   src="image/accommodation/ascott.jpg"></a>
        </center>
     </div>
  
        <div class="col-4">
           <center>
           
             <a href="https://bit.ly/2GlYown" target="_blank"><img class="img-fluid"  src="image/accommodation/impiana.png"></a>
        </center>
        </div>
      </div>
    </div>

  </div>
</div><br><br>




<div class="row">
          <div class="col-5"><hr></div>
        <div class="col-2">
         <center class="organizer">MEDIA PARTNERS</center>
       </div>
          <div class="col-5"><hr></div>
       </div><br>
  <div class="row">
  <div class="col-md-12"> 
    <div class="owl-carousel owl-theme">

<div class="item">
  <div class="mediapartner">
 <a href="https://catthis.com/"   target="_blank" >  
<img class="img-fluid" style=" max-height:150px;"  src="image/mediapartner/cat.jpg" ></a >
  </div>
  </div>
   <div class="item">
  <div class="mediapartner">
 <a href="https://halalfocus.net/"   target="_blank" >  
<img class="img-fluid" style=" max-height:150px;"  src="image/mediapartner/hala.jpg" ></a >
  </div>
  </div>

 <div class="item">
   <div class="mediapartner">
<a href="https://www.elmangos.com/"  target="_blank" >  <img class="img-fluid"  
  style="min-height:90px; padding-top:20px;" src="image/mediapartner/elmangos.png" ></a>
</div>
 </div>
    <div class="item">
  <div class="mediapartner">
 <a href="http://www.edbizconsulting.com/"   target="_blank" >  
<img class="img-fluid" style="padding-top:30px; max-height:80px;"  src="image/mediapartner/edbiz.png" ></a >
  </div>
  </div>

  
   <div class="item">
  <div class="mediapartner">
   <a href="http://www.maeeshat.in/" target="_blank" >  <img class="img-fluid"  src="image/mediapartner/maeeshat.jpg" style=" max-height:60px;" ></a>
  </div>
  </div>

   <div class="item">
  <div class="mediapartner">
  <a href="http://indianmuslimobserver.com/"   target="_blank" >  <img class="img-fluid" style="padding-top:30px;" src="image/mediapartner/indian.jpg" ></a>
  </div>
  </div>

   <div class="item">
  <div class="mediapartner">
  <a href="http://www.smartinvestor.com.my/"   target="_blank" >  <img class="img-fluid" style="padding-top:10px;"  src="image/mediapartner/smartinvestor.png" ></a>
  </div>
  </div>

   <div class="item">
  <div class="mediapartner">
 <a href="https://integratedinfo.com.my/publications/" target="_blank" >  <img class="img-fluid" style="padding-top:10px;min-height:90px;" src="image/mediapartner/smemal.jpg"  ></a>
  </div>
  </div>
  <div class="item">
  <div class="mediapartner">
  <a href="http://www.truebanking.com.pk/" target="_blank" >  <img class="img-fluid" style="padding-top:25px; min-height:84px;" src="image/mediapartner/truebanking.jpg" ></a>
  </div>
  </div>


<div class="item">
  <div class="mediapartner">
<a href="https://www.halalincorp.co.uk/"  target="_blank" >  <img class="img-fluid"  
  style="min-height:90px; padding-top:20px;" src="image/mediapartner/w.png" ></a>
</div>
</div>
 <div class="item">
   <div class="mediapartner">
<a href="http://intelligent-earnings.com/"  target="_blank" >  <img class="img-fluid"  
  style="min-height:90px; padding-top:20px;" src="image/mediapartner/muslimgo.png" ></a>
</div>
 </div>


   <div class="item">
  <div class="mediapartner">
 <a href="http://www.guiahalal.es/" target="_blank" >  <img class="img-fluid"  src="image/mediapartner/guiahalal1.png" style=" max-height:90px;padding-top:20px; padding-left:80px;" ></a>
  </div>
  </div>
  
  
   <div class="item">
  <div class="mediapartner">
  <a href="https://www.wargabiz.com.my/"  target="_blank" >  <img class="img-fluid"  style="min-height:80px; padding-left:65px; padding-top:15px;" src="image/mediapartner/wargabiz.png"  ></a>
  </div>
  </div>


  <div class="item">
  <div class="mediapartner">
  <a href="http://www.alhudacibe.com/"  target="_blank" >  <img class="img-fluid"  
  style="max-height:106px; padding-top:5px; padding-left:60px; "src="image/mediapartner/alhuda.png" ></a>
  </div>
  </div>

  


    </div>
     </div>
   </div>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.autoplay.js"></script>
<script src="js/owl.navigation.js"></script>
<script src="js/owl.animate.js"></script>
<script src="js/owl.carousel.min.js"></script>


 <script>


    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
  dots:true,
  autoplay:true,
  autoplayTimeout:3000, 
  slideSpeed: 300,
   paginationSpeed: 500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1200:{
            items:6
        }
    }
})

</script>


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
        <a href="#">Exhibitor</a>
        <a href="#">Conference Delegate</a>
        <a href="#">Trade Buyer</a>
        <a href="#">Public Visitor</a>
        <a href="#">Media Representative </a>
       
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
