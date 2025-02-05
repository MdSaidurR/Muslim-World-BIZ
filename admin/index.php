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
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>MWBIZ Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
<style type="text/css">
  .title{
      font-size:16px;
      text-align: center;
      color:white;
      font-weight: bold;
      margin-top:-10px;

  }

  .count{
     font-size:20px;
      text-align: center;
      color:white;
      font-weight: bold;
  }
</style>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">MWBIZ</a>

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
   <?php require "sidebar.php"; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-7">
                <div class="title">VISITOR </div>
            <div class="count">
            <?php

           $link= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
            $result = mysqli_query( $link, "SELECT * FROM visitor_registration");
            $rows = mysqli_num_rows($result);
            echo  $rows ;

              ?>
            </div>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="visitor.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-7">
                   <div class="title">EXHIBITOR </div>
            <div class="count">
            <?php

         $link= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
            $result = mysqli_query( $link, "SELECT * FROM exhibitor");
            $rows = mysqli_num_rows($result);
            echo  $rows ;

              ?>
            </div>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="exhibitor.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-7">
                   <div class="title">TRADE BUYER</div>
            <div class="count">
             <?php

            $link= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
            $result = mysqli_query( $link, "SELECT * FROM trade_buyer");
            $rows = mysqli_num_rows($result);
            echo  $rows ;

              ?>
            </div>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="trade_buyer.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-7">
                   <div class="title">BUSINESS MATCHING</div>
            <div class="count">
            <?php

            $link= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
            $result = mysqli_query( $link, "SELECT * FROM businessmatching");
            $rows = mysqli_num_rows($result);
            echo  $rows ;

              ?>
            </div>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="business_matching.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>  
        </div>

        <div class="row">
           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-7">
                   <div class="title">MEDIA PARTNER</div>
            <div class="count">
             <?php

            $link= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
            $result = mysqli_query( $link, "SELECT * FROM media_partner");
            $rows = mysqli_num_rows($result);
            echo  $rows ;

              ?>
            </div>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="media_partner.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>



       
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           &copy; <?php  echo " " . date("d-m-y") ." MWBIZ.All rights reserved ";  ?> 
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
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
