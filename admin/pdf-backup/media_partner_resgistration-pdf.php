<?php 
  session_start(); 

  if (!isset($_SESSION['admin_email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_email']);
    header("location: login.php");
    exit;
  }

  function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "muslimworldbiz");  
      $sql = "SELECT * FROM media_partner ORDER BY id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["company"].'</td>  
                          <td>'.$row["designation"].'</td>  
                          <td>'.$row["country"].'</td> 
                          <td>'.$row["email"].'</td> 
                          <td>'.$row["telephone"].'</td>   
                          <td>'.$row["mobile"].'</td>  
                          <td>'.$row["media_type"].'</td>  
                          <td>'.$row["readership"].'</td>  
                          <td>'.$row["website"].'</td>  
                          <td>'.$row["event_number"].'</td>
                          <td>'.$row["date"].'</td>    
                        
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('pdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12); 
      $obj_pdf->AddPage('L', 'A4');  
      $content = '';  
      $content .= '  
    
      <table border="1" cellspacing="0" cellpadding="2">  
           <tr style="font-weight:bold;">  
                <th >ID</th>  
                <th >Name</th>  
                <th >Company</th>  
                <th >Designation</th> 
                <th >Country</th>   
                <th >Email</th> 
                <th >Telephone</th> 
                <th >Mobile</th>  
                <th >Media Type</th>  
                <th >Readership</th>  
                <th >Website</th>  
                <th >Event</th>
                <th >Date</th>    
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>OICTODAY Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
     table tr td:last-child a{
            margin-right: 12px;
          

        }

      .table th{
            font-size:12px !important;
            padding: 0 !important;
            text-align: center;
            background-color: red;
        }

  .calculation tr td{
   padding: 0 !important;
   margin: 0 !important;
   font-size:12px !important;
}


.nav-container {
  position:relative;
}
.nav-container a {
  position:absolute;
  right:1rem;
  top:50%;
  transform:translateY(-50%);
}

.form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}

.form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}



.fa-search{
  color:red;
}

.button_link {color:#FFF;
  text-decoration:none; 
  background-color:#428a8e;
  padding:10px;}


.btn-page{
  margin-right:10px;
  padding:5px 10px; 
  border: #CCC 1px solid; 
  background:red;
  border-radius:4px;
   cursor:pointer;
 }

.btn-page:hover{background:#F0F0F0;}

.btn-page.current{ 
  background:green;

}

  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">OIC TODAY</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>



    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-12">
       <div class="dropdown">
         <img src="image/admin.png"  class="rounded-circle dropdown-toggle" width="40" height="40" data-toggle="dropdown">
    <div class="dropdown-menu dropdown-menu-right" style="width:300px;">
       <span class="dropdown-header text-center"><img src="image/admin.png"  class="rounded-circle " width="100" height="100"><br>

        <strong><?php  if (isset($_SESSION['admin_email'])) : ?>
                   <?php echo $_SESSION['admin_email']; ?>
                   <?php endif ?>
              </strong>
       </span><br>

         <div class="float-left" style="padding-left:10px;">
          <a href="#"   class="btn btn-outline-primary">Profile</a>
          </div>

           <div class="float-right" style="padding-right:10px;">
            
           <a  href="logout.php" class="btn btn-outline-primary">Sign out</a>
          
           </div>

    </div>
  </div>
      
    </ul>



  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
  <?php  require_once "sidebar.php";  ?>
    <div id="content-wrapper">

      <div class="container-fluid">

<div class="nav-container">
  <ol class="breadcrumb">
      <li class="breadcrumb-item">
       INBRIEF NEWS
      </li>
      
  </ol>

  <a href="create-inbrief-news.php" class="btn btn-success">Add New Post</a>
 
</div>

              
        <!-- Underlined search bars with buttons -->
       
    <div class="row">
      <div class="col-12">
            <table class='table table-bordered calculation '>
  <thead>
  <tr>
    <th>Serial</th>
    <th>Name</th>
    <th>Company</th>
    <th>Designation</th>
   <th>Country</th>
   <th>Email</th>
   <th>Telephone</th>
   <th>Mobile</th>
   <th>Type Of Media</th>
   <th>Readership</th>
   <th>Website</th>
   <th>Event</th>
   <th>Date</th>
   
  </tr>
  <?php  
    echo fetch_data();  
  ?>  
  </thead>
  
  
</table>
 <form method="post">  
   <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
 </form>  

      
</div>
        


  

              
    
      </div>
    
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
        &copy; <?php  echo " " . date("d-m-y") ." OIC TODAY.All rights reserved ";  ?> 

          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
