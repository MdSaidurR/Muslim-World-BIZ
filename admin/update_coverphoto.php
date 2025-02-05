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

require_once "config.php";
 
// Define variables and initialize with empty values
$title=$filename= "";
$title_Err=$image_Err= "";

 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_Err = "Description required";     
    } else{
        $title = $input_title;
    }

  


  if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array(  "jpg" => "image/jpg",  "jpeg" => "image/jpeg", "webp" => "image/webp", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("image/mwb2023/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "image/mwb2023/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }



    
    // Check input errors before inserting in database
    if(empty($title_Err) && empty($url_Err) && empty($position_Err)){

        // Prepare an insert statement
         $sql = "UPDATE cover_photo SET filename=?, title=?  WHERE id=? ";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssi", $param_filename, $param_title ,$param_id);
            
            // Set parameters
            $param_filename=$filename;
            $param_title = $title;
            $param_id=$id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location:coverphoto.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM cover_photo WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value

                    $filename = $row["filename"];
                    $title = $row["title"];
                   
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Muslim world BIZ Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="ckeditor/ckeditor.js" ></script>
  <style type="text/css">
     

.nav-container {
  position:relative;
}
.nav-container a {
  position:absolute;
  right:1rem;
  top:50%;
  transform:translateY(-50%);
}

.cke_textarea_inline{
        border: 1px solid #AADC6E;
    }

.line{
        border: 1px solid #AADC6E;
    }


  </style>

</head>

<body id="page-top">
<?php require_once "menu.php"; ?>
 
  <div id="wrapper">
 <?php  require_once "sidebar.php";  ?>
                    
    <div id="content-wrapper">

      <div class="container-fluid">

<div class="nav-container">
  <ol class="breadcrumb">
      <li class="breadcrumb-item">
       UPDATE COVER PHOTO
      </li>

  </ol>

  <a href="coverphoto.php" class="btn btn-success">Back to List</a>
 
</div>




       <div class="row">
                <div class="col-md-12">

                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

            <div class="col-md-4">
              
                    <label>IMAGE</label><br>
                    <input type="file" name="photo" required="required;">
                   
            </div><br><br><br>

             <div class="col-md-8">

                <div class="form-group <?php echo (!empty($title_Err)) ? 'has-error' : ''; ?>">
                  <label>TITLE</label>
              <input type="text" name="title" class="form-control line"  value="<?php echo $title; ?>">
                  <span class="help-block"><?php echo $title_Err;?></span>
                </div>

             </div>
 
             </div><br>
                      
         <input type="hidden" name="id" value="<?php echo $id; ?>"/>
         <input type="submit" class="btn btn-primary" value="Submit">
          <a href="coverphoto.php" class="btn btn-danger">Cancel</a>
                    </form>
    
                </div>
            </div>
    
      </div>
    
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           &copy; <?php  echo " " . date("d-m-y") ." Muslim world BIZ. All rights reserved ";  ?> 
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

 
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  
</body>
 <script>
    CKEDITOR.inline( 'title',{
    filebrowserBrowseUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'ckeditor/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
    CKEDITOR.replace('editor1',{
    filebrowserBrowseUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'ckeditor/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
   </script>

</html>
