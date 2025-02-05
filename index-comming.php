<?php

 $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
function make_query($db)
{
$query = "SELECT * FROM cover_photo WHERE category='cover' AND year='cover' ORDER BY id ASC LIMIT 3";
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
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>


 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">

<style>
 
 div.alignmentabout{

background-color:#F5F5F5;
min-height: 150px;
width: 100%;
margin-bottom:10px;
}

.alignmentabout:hover{
background-color:#e5e5e5 !important;

}
 
 
 .horizontal-lines {
  height: 10px;
  color: #cb3d95;
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
box-shadow: 0 1px 10px #cb3d95, inset 0 1px 0 #cb3d95;  
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
  border: 2px solid #cb3d95;
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

@media screen and (min-width: 600px) {
  .line {
   border-right: 1px solid red;
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
  border:1px solid #cb3d95;
   background-color: #cb3d95; /* For browsers that do not support gradients */
   background-image: linear-gradient(to right, #cb3d95, #009999, #cb3d95);
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
   background-color: #cb3d95; /* For browsers that do not support gradients */
   background-image: linear-gradient(to right, #cb3d95, #009999, #cb3d95);
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
  color:#fff;
  border:1px solid #cb3d95;
   background-color: #cb3d95; /* For browsers that do not support gradients */
   background-image: linear-gradient(to right, #cb3d95, #009999, #cb3d95);
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


.dayspan{
   font-size: 20px !important;
   font-weight: bold !important;
   text-align: center;
   background-color: #e59eca;
   color:#4c4c4c;

  
}

.rowBack{
  background-color:#7fcccc;
  color:#000000;
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

<center class="sponsorship mt-2 ">IMPORTANT MESSAGES</center>
<br>

     <div class="row">
      <?php
 
  $i=0;
  $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
  $sql="SELECT * FROM all_news WHERE category ='About' AND position = 'Home'  ORDER BY id ASC LIMIT 12";
  $result = mysqli_query($db,$sql);
   while ($row = mysqli_fetch_array($result)) {
       
        echo "<div class='col-md-6'>";
        echo " <div class='alignment'>";
        echo " <div class='horizontal-news'>";
        echo " <a href='post-details.php?id={$row['id']}/{$row['slug']}'><img src='admin/image/mwb2023/".$row["filename"]."' ></a> ";

        echo "</div>";
        echo "<div id='title'>";
        echo  " <a href='post-details.php?id={$row['id']}/{$row['slug']}'>{$row['title']} {$row['subtitle']} </a>" ;
        echo "</div>";
        echo "</div>";
        echo "</div>";

   $i++;
  if ($i % 2 == 0) {echo '</div>

  <div class="row">';
 }
}
?>
    </div>


<br>
       <div class="row">
      <?php
 
  $i=0;
  $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
  $sql="SELECT * FROM all_news WHERE category ='Message' AND position = 'Home'  ORDER BY id ASC LIMIT 12";
  $result = mysqli_query($db,$sql);
   while ($row = mysqli_fetch_array($result)) {
       
        echo "<div class='col-md-4'>";
        echo " <div class='alignment'>";
        echo " <div class='horizontal-news'>";
        echo " <a href='post-details.php?id={$row['id']}/{$row['slug']}'><img src='admin/image/mwb2023/".$row["filename"]."' ></a> ";

        echo "</div>";
        echo "<div id='title'>";
        echo  " <a href='post-details.php?id={$row['id']}/{$row['slug']}'>{$row['title']} </a>" ;
        echo "</div>";
        echo "</div>";
        echo "</div>";

   $i++;
  if ($i % 3 == 0) {echo '</div>

  <div class="row">';
 }
}
?>
    </div>

<br>
<center class="sponsorship">UPCOMING EVENT</center>
<br>

    <div class="row">
        <?php
 
  $i=0;
  $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
   $sql="SELECT * FROM all_news WHERE category ='Conference' AND position = 'Home' ORDER BY id ASC";
  $result = mysqli_query($db,$sql);
   while ($row = mysqli_fetch_array($result)) {
          
        echo "<div class='col-md-4'>";
         echo " <div class='background-effect'>";
        echo " <a href='conference-details.php?id={$row['id']}/{$row['slug']}'><img src='admin/image/mwb2023/".$row["filename"]."' ></a> ";

        echo "<div id='title'>";
        echo  " <a href='conference-details.php?id={$row['id']}/{$row['slug']}'>{$row['title']} </a>" ;
        echo "</div>";
         echo "</div>";
       echo "</div>";

   $i++;
  if ($i % 3 == 0) {echo '</div>
  <div class="row">';
 }
}
?>

</div>


<br>
<center class="sponsorship">RANIA AWARD RECIPIENTS IN 2024</center>
<br>

<div class="container">
<div class="row">

 <?php
 
  $i=0;
 $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
   $sql="SELECT * FROM recipients WHERE category='Rania' AND year='2024' ORDER BY id ASC LIMIT 12";
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

<div class="row">

<div class="col-md-4"></div>
<div class="col-md-4">
    
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <?php
 
  $i=0;
 $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
   $sql="SELECT * FROM recipients WHERE category='Rania' AND year='2024' ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($db,$sql);
   while ($row = mysqli_fetch_array($result)) {

        echo "<div class='col-md-12'>";
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
  if ($i % 1 == 0) {echo '</div>
 
  <div class="row">';
 }
}
?>
  </div>
 <div class="col-md-1"></div>
 </div>  
</div>
<div class="col-md-4"></div>
 
</div>
<br>
<center class="sponsorship"> TENTATIVE PROGRAMME</center>
<br>

<table class="table table-dark table-hover">
    <thead>
    <tr class="sponsorship" > 
        <th colspan="2" > <center> 16 OCTOBER 2024, WEDNESDAY </center></th>
   </tr> 
     
    </thead>
    <tbody>

      <tr>
        <td rowspan="4" class="dayspan" > <h3 style="padding-top:60px;"> DAY 1 </h3></td>
        <td class="rowBack">The Muslim World Women’s Summit</td>
      </tr>

      <tr>
         <td class="rowBack">Opening Ceremony</td>
        
      </tr>

       <tr>
         <td class="rowBack">The Muslim World Women’s Summit</td>
        
       </tr>

       <tr>
         <td class="rowBack">Exhibition ( Hall 3 & 4)</td>
        
       </tr>

      
      
    </tbody>
  </table>

  <table class="table table-dark table-hover">
    <thead>
    <tr class="sponsorship" > 
  
       <th colspan="2" > <center> 17 OCTOBER 2024, THURSDAY </center></th>
   </tr> 
     
    </thead>
    <tbody>

      <tr>
        <td rowspan="2" class="dayspan" > <h3 style="padding-top:15px;"> DAY 2 </h3></td>
        <td class="rowBack">The Muslim World Women’s Summit</td>
      </tr>

      <tr>
       <td class="rowBack">Exhibition ( Hall 3 & 4)</td>
        
      </tr>

    </tbody>

  </table>

  <table class="table table-dark table-hover">
    <thead>
    <tr class="sponsorship" > 
  
     <th colspan="2" > <center> 18 OCTOBER 2024, FRIDAY </center></th>
   </tr> 
     
    </thead>
    <tbody>

      <tr>
        <td rowspan="3" class="dayspan" > <h3 style="padding-top:40px;"> DAY 3 </h3></td>
        <td class="rowBack">The Muslim World Women’s Summit</td>
      </tr>

      <tr>
       <td class="rowBack">Exhibition ( Hall 3 & 4)</td>
        
      </tr>

       <tr>
       <td class="rowBack">The Muslim World Rania Award 2024</td>
        
      </tr>  
      
    </tbody>
  </table>
  
<center class="sponsorship"> REGISTER NOW!</center>
<br>

<div class="row">

  <div class="col-md-6">
  <a href="https://forms.gle/bjk1RgeWVY4EvKq86"  target="_blank" > <img  class="img-fluid"  src="image/register/mr-24.jpg" alt="Exclusive Offer for RM"></a>
   <a  href="https://forms.gle/bjk1RgeWVY4EvKq86" target="_blank" style="text-decoration:none !important; color:white;"><center class="content">MALAYSIAN DELEGATE BOOKING FORM</center></a>

  </div>

  <div class="col-md-6">
    <a href="https://forms.gle/zfs8HqGbe8t5DdQZ9"  target="_blank" ><img  class="img-fluid"  src="image/register/ir-24.jpg" alt="USD"></a>
    <a href="https://forms.gle/zfs8HqGbe8t5DdQZ9" target="_blank" style="text-decoration:none !important; color:white;"><center class="content">INTERNATIONAL DELEGATE BOOKING FORM</center></a>
  </div>

</div>
<br>

   <div class="row">
    <div class="col-md-6">
      <a href="exhibitor_registration.php"><img  class="img-fluid" src="image/register/exhibitor.jpg"> 
        <div class="content">
      <h4>EXHIBITOR REGISTRATION </h4>
     </div></a>
    </div>
    

    <div class="col-md-6">
    <a href="visitor_registration.php">
       <img  class="img-fluid" src="image/register/visitor.jpg"> 
 
   <div class="content">
     <h4>VISITOR REGISTRATION</h4>
   </div></a>
  
   </div>
   

   </div><br>
   <div class="row">
    
 
    <div class="col-md-6">
   <a href="trade_buyer.php">
  <img  class="img-fluid" src="image/register/buyer.jpg">  
  <div class="content">
      <h4>TRADE BUYER REGISTRATION<hr></h4>
   </div> </a> 

    </div>

    <div class="col-md-6">
     <a href="media_registration.php">    
    <img  class="img-fluid" src="image/register/media.jpg">     
  <div class="content">
   <h4>MEDIA REGISTRATION</h4>
   </div></a>      
    </div>
   
    
   </div><br>

   <div class="row">
   <div class="col-md-6">
       <center class="sponsorship"> WHY SHOULD YOU PARTICIPATE?</center>
       <br>
    <img  class="img-fluid" src="admin/image/mwb2023/why.jpg"   alt="Participate" >
      
   </div>
     <div class="col-md-6">
<center class="sponsorship"> FACT SHEET</center>
     <div class="row">

      <div class="col-6">
       
    <div id="counter">
    <div class="counter-value" data-count="30"></div>
     </div>
      <div class="factsheet"> Participating Countries</div>
      </div>

      <div class="col-6">
      <div id="counter"> 
     <div class="counter-value" data-count="7400"></div>
     </div>
    <div class="factsheet">Sqm Exhibition Space </div>
      </div>
    </div>

    <div class="row">    
       <div class="col-6">
       <div id="counter">
      <div class="counter-value" data-count="400"></div>
     </div>
        <div class="factsheet"> Exhibition Booths </div>

      </div>

      <div class="col-6">
         <div id="counter">
      <div class="counter-value" data-count="500"></div>
         </div>
          <div class="factsheet"> Exhibitors </div>
       </div>

     </div>


    <div class="row">
      
       
      <div class="col-6">
      <div id="counter"> 
         <div class="counter-value" data-count="15000"></div> 
      </div> 
       <div class="factsheet">Buyers & Visitors</div>
      </div>

      <div class="col-6">
       <div id="counter">
      <div class="counter-value" data-count="3"></div>
     </div>
        <div class="factsheet"> Seminars </div>

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



<br>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <a href="becomesponsor.php"><center class="sponsorship">BECOME A SPONSOR</center></a>
    </div>
    <div class="col-md-4"></div>
  </div><br><br><br>


 <div class="row">
   <div class="col-md-3"></div>

       <div class="col-md-6">
         <div class="row">
            <div class="col-md-4">

           <center class="organizer">HOST</center>
            <center><a href="https://www.malaysia.gov.my/portal/index"  target="_blank" > <img  class="img-fluid" style=" padding-top:12px;"  src="image/2024/dpmo.png" alt="logo"></a></center>
           </div>
           <div class="col-md-8">
             <center class="organizer">SUPPORTED BY</center>
             <div class="row">

              <div class="col-6">

         
              <center><a href=""  target="_blank" > <img  class="img-fluid" style=" padding-top:12px;"  src="image/2024/mtacm.png" alt="logo"></a></center>
            </div>

         <div class="col-6">

            <center><a href="https://www.malaysia.gov.my/portal/index"  target="_blank" > <img  class="img-fluid" style=" padding-top:12px;"  src="image/2024/mwfcd.png" alt="logo"></a></center>
         </div>

             </div>
           </div>
         
         </div>
       </div>
    <div class="col-md-3"></div>
      
  </div>
 
  <hr>

   <div class="row">

    <div class="col-md-4">
        <center class="organizer">ORGANISER</center>
       <div class="row">
       
       <div class="col-6">
           <center> <a href="#"  target="_blank" >  <img  class="img-fluid" src="image/2024/amwbm.png" alt="logo"></a></center>
       </div>

       <div class="col-6">
      
          <center> <a href="#"  target="_blank" >  <img  class="img-fluid"  src="image/2024/mwb.png" alt="MWB LOGO"></a></center>

        </div>
      </div>

      </div>

     
      <div class="col-md-4">
      <div class="row">
         <div class="col-6">
              <center class="organizer">CO-ORGANISER</center>
              <center><a href="https://oicinternational.biz/"  target="_blank" >  <img  class="img-fluid"  src="image/2024/oicibc.png" alt="oicibc logo"></a></center>   
         </div>
    

     <div class="col-6">
        <center class="organizer">ENDORSED BY</center>
        <center><a href="http://www.matrade.gov.my/en/"  target="_blank" >  <img  class="img-fluid"   src="image/2024/mtrade.png" alt="Matrade"></a></center>
      </div>
    </div>
    </div>


       <div class="col-md-4">
         <center class="organizer">IN COOPERATION WITH</center>
         <center> <div class="row">
          <div class="col-6">

          <a href="https://www.oic-oci.org/home/?lan=en"  target="_blank" > <img  class="img-fluid" s src="image/2024/oic.png" alt="logo"> </a>
        
         </div>

          <div class="col-6">
          <a href="http://icdt-oic.org/Default.aspx"  target="_blank" > <img  class="img-fluid"  src="image/2024/icdt.png" alt="logo"> </a>
          </div>
          
        </div></center>
      
    </div>

   </div>

  <hr>

<center class="organizer">SUPPORTED BY</center>
  <div class="row mt-2">
   

    <div class="col-md-4">
       <div class="row">
         <div class="col-6">
          <img  class="img-fluid"   src="image/2024/tm.png" alt="Tourism Malaysia">
         </div>

         <div class="col-6">
           <img  class="img-fluid"   src="image/2024/ccm.png" alt="Cuti Cuti Malaysia">
         </div>

       </div>
    </div>

    <div class="col-md-4">
      
      <div class="row">
         <div class="col-6">
           <img  class="img-fluid"   src="image/2024/mta.png" alt=" Malaysia Truely Asia">
         </div>

         <div class="col-6">
          <img  class="img-fluid"   src="image/2024/aau.png" alt="Association of Arab Universities">
         </div>
         
       </div>

    </div>

    <div class="col-md-4">
      
      <div class="row">
         <div class="col-6">
          <img  class="img-fluid"  src="image/2024/las.png" alt="League of Arab states">
         </div>

         <div class="col-6">
          <img  class="img-fluid"   src="image/2024/fab.png" alt="Federation of arab businessmen">
         </div>
         
       </div>

    </div>
   
  </div>
 <hr>

 <div class="row">
     <div class="col-md-5">
        <div class="row">
          <div class="col-4">
            <center class="organizer">OFFICIAL OUTDOOR MEDIA</center><br>
          <center><img  class="img-fluid"  src="image/2024/ramcel.png" alt="Ramcel"></center> 
          </div>

          <div class="col-4">
             <center class="organizer">OFFICIAL MAGAZINE</center><br>
          <center><img  class="img-fluid" src="image/2024/oictoday.png" alt="oictoday"></center>
          </div>

          <div class="col-4">
            <center class="organizer">OFFICIAL TABLOID</center><br>
         <center><img  class="img-fluid" src="image/2024/tabloid.png" alt="logo"></center>
          </div>
        </div>
     </div>

      <div class="col-md-7">
         <center class="organizer">STRATEGIC PARTNER</center>
        <div class="row">
          <div class="col-3">
            <center><img  class="img-fluid"  src="image/2024/cuckoo.png" alt="logo"></center> 
          </div>

          <div class="col-3">
            <center><img  class="img-fluid"  src="image/2024/danac.png" alt="Danac"></center>
          </div>
          
          <div class="col-3">
            <center><img  class="img-fluid"  src="image/2024/fmm.png" alt="logo"></center>
          </div>
          <div class="col-3">
            <center><img  class="img-fluid"  src="image/2024/unknown.png" alt="logo"></center>
          </div>
        </div>
     </div>


</div>

  <hr>

  <div class="row">
    
     <div class="col-md-1"></div>

      <div class="col-md-4"> 
         <center class="organizer">GOLD SPONSOR</center>
        <div class="row">
             <div class="col-6"> 
              <center><img  class="img-fluid" src="image/2024/risda.png" alt="Risda"></center>
             </div>
             <div class="col-6"> 
              <center><img  class="img-fluid" src="image/2024/felda.png" alt="Felda"></center>
             </div>
        </div>
      </div>


    <div class="col-md-2">      
      <center class="organizer">OFFICIAL BUSINESS MATCHING PARTNER</center>
     <center><img  class="img-fluid" src="image/2024/obmp.png" alt="logo"></center>
         
    </div>

     <div class="col-md-2">
            
      <center class="organizer">OFFICIAL CONTRACTOR</center>
     <center><img  class="img-fluid"  src="image/2024/piramid.png" alt="logo"></center>
         
    </div>


    <div class="col-md-2">
            
      <center class="organizer">OFFICIAL CAR</center>
     <center><img  class="img-fluid"  src="image/2024/bmw.png" alt="logo"></center>
         
    </div>

    <div class="col-md-1"></div>

  </div>

 <hr>

<div class="row">
  <div class="col-md-3"></div>
 <div class="col-md-6">
         <center class="organizer">HONOURING</center>
     <div class="row">
        
         <div class="col-4">
     <a href="https://muslimworldbiz.com/jewels.html" target="_blank"> <center><img  class="img-fluid"  src="image/2024/jewels.png" alt="Jewels Award logo"></center> </a>      
         
         </div>

          <div class="col-4">
       <a href="https://muslimworldbiz.com/rania.html" target="_blank"> <center><img  class="img-fluid"  src="image/2024/rania.png" alt="Rania Award logo"></center> </a>    
         
         </div>

         <div class="col-4"> 
     
        <a href="https://muslimworldbiz.com/mweda-award.php" target="_blank"> <center><img  class="img-fluid"  src="image/2024/mweda.png" alt="mweda Award logo"></center> </a>
         </div>

      </div>

   </div>

   <div class="col-md-3"></div>

</div>


</div><br><br>

<div class="container">
<div class="sponsor">
<div class="row">
          <div class="col-5"><hr></div>
        <div class="col-2">
         <center class="organizer">PREFERED HOTEL</center>
       </div>
          <div class="col-5"><hr></div>
 </div><br>

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
       
    <div class="col-4"> </div>    
         
      <div class="col-4">
       
    <a href="https://lepetitchef.com/lepetit-chef-kuala-lumpur?gclid=CjwKCAjwwb6lBhBJEiwAbuVUSs-2tXkDJi8xbXS4TiXdRtgIYD1RNPsthEOwSpBV_s-0cBicSpzilxoCC2sQAvD_BwE" target="_blank"> <img class="img-fluid"  src="image/2024/grand.png"></a>
        
  </div>   
  
       

         
    <div class="col-4"> </div>
 
  
      </div>
    </div>

<div class="col-md-2"></div>

  </div>
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
Call<span style='font-size:20px;'>&#58;</span>&nbsp+603 2681 0037, &nbsp  Email<span style='font-size:20px;'>&#58;</span>&nbsp info@muslimworldbiz.com</p>
      
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
