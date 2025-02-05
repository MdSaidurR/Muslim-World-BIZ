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

  define("ROW_PER_PAGE",50);

 $database_username = 'oicinter_saidur';
 $database_password = '#l1#}#L(fU8z';
 $pdo_conn = new PDO( 'mysql:host=localhost;dbname=oicinter_muslimworldbiz', $database_username, $database_password );
  
  
$search_keyword = '';
  if(!empty($_POST['search']['keyword'])) {
    $search_keyword = $_POST['search']['keyword'];
  }

  $sql = 'SELECT * FROM visitor_registration WHERE id LIKE :keyword OR visitor_type LIKE :keyword OR title LIKE :keyword OR name LIKE :keyword OR company LIKE :keyword OR designation LIKE :keyword OR email LIKE :keyword OR address LIKE :keyword OR country LIKE :keyword  OR mobile LIKE :keyword OR telephone LIKE :keyword ORDER BY id DESC ';
  
  /* Pagination Code starts */
  $per_page_html = '';
  $page = 1;
  $start=0;
  if(!empty($_POST["page"])) {
    $page = $_POST["page"];
    $start=($page-1) * ROW_PER_PAGE;
  }
  
  $limit=" limit " . $start . "," . ROW_PER_PAGE;
  $pagination_statement = $pdo_conn->prepare($sql);
  $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
  $pagination_statement->execute();

  $row_count = $pagination_statement->rowCount();
  if(!empty($row_count)){
    $per_page_html .= "<div style='margin:20px 0px;'>";
    $page_count=ceil($row_count/ROW_PER_PAGE);
    if($page_count>1) {
      for($i=1;$i<=$page_count;$i++){
        if($i==$page){
          $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
        } else {
          $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
        }
      }
    }
    $per_page_html .= "</div>";
  }
  
  $query = $sql.$limit;
  $pdo_statement = $pdo_conn->prepare($query);
  $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();



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
  <?php  require_once "sidebar.php";  ?>
    <div id="content-wrapper">

      <div class="container-fluid">

<div class="nav-container">
  <ol class="breadcrumb">
      <li class="breadcrumb-item">
       VISITORS LIST
      </li>
      
  </ol>
</div>

              
        <!-- Underlined search bars with buttons -->
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="row">
            <div class="form-group col-11">
              <input  type="text"  name="search[keyword]" value="<?php echo $search_keyword; ?>" id="keyword" placeholder="What're you searching for?" class="form-control form-control-underlined">
            </div>
            <div class="form-group col-1">
              <button  name="search_keyword" value="search_keyword" class="btn  rounded-pill" type="submit" ><i class="fa fa-search" ></i></button>
            </div>
          </div>


    <div class="row">
      <div class="col-12">
            <table class='table table-bordered calculation '>
  <thead>
  <tr>
    <th>Id</th>
    <th>V_Type</th>
    <th>Name</th>
    <th>Company</th>
    <th>Designation</th>
    <th>Email</th>
    <th>Adress</th>
    <th>Country</th>
    <th>Mobile</th>
    <th>Telephone</th>
    <th>Industry Type</th>
    <th>V_Before</th>
    <th>E_Number</th>
    <th>Date</th>
  </tr>
  </thead>
  <tbody id='table-body'>
  <?php
  if(!empty($result)) { 
    foreach($result as $row) {
  ?>
    <tr class='table-row'>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['visitor_type']; ?></td>
    <td> <?php echo $row['title']; ?> <?php echo $row['name']; ?></td>
    <td><?php echo $row['company']; ?></td>
    <td><?php echo $row['designation']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['country']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['telephone']; ?></td>  
    <td><?php echo $row['industry_type']; ?>,<?php echo $row['other']; ?> </td>
    <td><?php echo $row['visited_before']; ?></td>
    <td><?php echo $row['event_number']; ?></td>
    <td><?php echo $row['date']; ?></td>
    
    </tr>
    <?php
    }
  }
  ?>
  </tbody>
</table>
<?php echo $per_page_html; ?>
         </div>
       </div>
        
        </form>
        <br />
    <form method="post" action="visitor_export.php">
     <input type="submit" name="export" class="btn btn-success" value="Download" />
   </form> 
      
</div>
        


  

              
    
      </div>
    
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
        &copy; <?php  echo " " . date("d-m-y") ."MWBIZ.All rights reserved ";  ?> 

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
