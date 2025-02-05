<?php

$param = array();
if(count($_GET) > 0) {
    $param = $_GET;
} else {
    $param = $_POST;
}
// defaults
if($param['type'] == "") $param['type'] = "website";
if($param['title'] == "") $param['title'] = $title;
if($param['image'] == "") $param['filename'] = "thumb";
if($param['description'] == "") $param['description'] = $description;



// For title and SEO
require_once "config.php";

$newsId = explode("/", $_GET['id']);

if ($newsId[0] != '' || is_numeric($newsId[0]) ) {
	$query = "SELECT * FROM all_news WHERE id = $newsId[0]";

	$queryData= mysqli_query($link, $query);
	
	$data = mysqli_fetch_array($queryData);
	
	// Remove html codes
	$title = strip_tags($data['title']);
	$description = substr(strip_tags($data['description']), 0, 160);
	
	// var_dump($data);
}

?>


<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        <?php 
        if($title) {
            echo $title;
        } else {
            echo " Muslim World BIZ Official website.";
        }
        ?>
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta property="og:url"  content="https://muslimworldbiz.com/post-details.php?id=<?php echo $_GET['id'] ?>" />
    <meta property="og:type" content="website"/>
    <?php if($title) : ?>
    <meta property="og:title" content="<?= $title ?>"/>
    <?php else: ?>
    <meta property="og:title" content=" Muslim World BIZ Official website."/>
    <?php endif; ?>
    <meta property="og:image"  content="https://muslimworldbiz.com/admin/image//<?php echo $data['filename']; ?>" />
    <?php if($description) : ?>
    <meta property="og:description" content="<?= $description ?>"/>
    <?php else: ?>
    <meta property="og:description" content=" Muslim World BIZ Official website."/>
    <?php endif; ?>
    
     <meta name="twitter:card" content="summary">
     <meta name="twitter:site" content="@mwbiz"/> 
     <meta name="twitter:creator" content="@mwbiz" />
      <?php if($title) : ?> 
    <meta name="twitter:title" content="<?= $title ?>"/>
     <?php else: ?>
     <meta name="twitter:title"  content="Muslim World BIZ Official website."/>
     <?php endif; ?>
    
    <?php if($description) : ?>
    <meta name="twitter:description" content="<?= $description ?>"/>
     <?php else: ?>
       <meta name="twitter:description" content=" Muslim World BIZ Official website."/>
     <?php endif; ?>
  <meta property="og:image"   content="https://muslimworldbiz.com/admin/image/mwb2023/<?php echo $data['filename']; ?>"/>
  
       
  <link rel="shortcut icon" type="image/png" href="<?php echo 'https://muslimworldbiz.com/admin/image/mwb2023/.$row["filename"]. ' ; ?>"> 
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
    

<style>
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

.img-world-section img{
    margin: 5px;
    width:100%;
   
   }

   </style>
</head>
<body>
<?php include "menu.php"; ?>
 
        <div class="container-fluid">
           
            <div class="row">
                <div class="col-md-8"> 
                    <?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
 
 require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM all_news WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $filename = $row["filename"];
                $title = $row["title"];
                $subtitle = $row["subtitle"];
                $description = $row["description"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
             
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt->close();
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
  
    exit();
}
?>

     
<div class="form-group img-world-section">  
  <?php echo "<img src='admin/image/mwb2023/".$row['filename']."' >"; ?>
</div>
     
    <div class="form-group">  
      <?php echo $row["description"]; ?>
    </div>   

</div>

       
    
    <div class="col-md-4">
        <div class="make-me-sticky">
            <br>
<center class="sponsorship">RELATED EVENT</center>
<br>
         <div class="row">
        <?php
 
  $i=0;
   $db = mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
   $sql="SELECT * FROM all_news WHERE category ='Conference' AND position = 'Home' ORDER BY id ASC";
  $result = mysqli_query($db,$sql);
   while ($row = mysqli_fetch_array($result)) {
          
        echo "<div class='col-md-12'>";
         echo " <div class='background-effect'>";
        echo " <a href='conference-details.php?id={$row['id']}/{$row['slug']}'><img src='admin/image/mwb2023/".$row["filename"]."' ></a> ";

        echo "<div id='title'>";
        echo  " <a href='conference-details.php?id={$row['id']}/{$row['slug']}'>{$row['title']} </a>" ;
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
</div>
  </div>        
</div>
<br>
<center class="sponsorship">IMPORTANT MESSAGES</center>
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

</div>

<footer class="container-fluid">
  <div class="container">
  
</div>

<hr class="style1">
<div class="container">
<div class="row vertical-left">
   <div class="col-6 vertical">
     <div class="row">
        <div class="col-1">
 <a href="https://www.linkedin.com/showcase/oic-today---business-&-investment-magazine"   target="_blank" >  <i style="border:1px solid #fff;" class="fa fa-linkedin" style="color:#0077B5;"></i></a>
        </div>

        <div class="col-1">
<a href="https://www.facebook.com/OICTODAYmagazine/"   target="_blank" > <i style="border:1px solid #fff;" class="fa fa-facebook"></i></a>
        </div>

        <div class="col-1">
<a href="https://twitter.com/oictoday_"  target="_blank" >  <i  style="border:1px solid #fff;" class="fa fa-twitter"></i></a>
        </div>

        <div class="col-1">
<a href="https://www.instagram.com/oictoday/"   target="_blank" ><i style="border:1px solid #fff;" class="fa fa-instagram"></i></a>
        </div>

        <div class="col-1">
<a href="https://www.youtube.com/channel/UCzxwwTsAGZ1PQ0Zx71QnZ5Q"  target="_blank" > <i style="border:1px solid #fff;"  class="fa fa-youtube"></i></a>
        </div>

        <div class="col-5">

        </div>

    </div>

   </div>
 
      
 <div class="col-6 vertical">
  
&copy; <?php echo date("Y"); ?>  Muslim World BIZ.  All Rights Reserved.
  
 </div>

</div>
 </div>
</footer>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c651f1c71910122"></script>
</body>
</html>