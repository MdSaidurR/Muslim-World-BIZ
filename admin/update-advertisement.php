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
$title=$filename=$url=$category=$position= "";
$title_Err=$image_Err=$url_Err=$category_Err=$position_Err= "";

 
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

  
 $input_url = trim($_POST["url"]);
    if(empty($input_url)){
        $url_Err = "URL required";     
    } else{
        $url = $input_url;
    }

$input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_Err = "category required";     
    } else{
        $category = $input_category;
    }



    $input_position = trim($_POST["position"]);
    if(empty($input_position)){
        $position_Err = "Position required";     
    } else{
        $position = $input_position;
    }



  if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array(  "jpg" => "image/jpg",  "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
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
            if(file_exists("image/advertisement/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "image/advertisement/" . $filename);
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
         $sql = "UPDATE advertisement SET filename=?, title=?, url=?, category=?, position=?  WHERE id=? ";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssi", $param_filename, $param_title, $param_url,$param_category, $param_position,$param_id);
            
            // Set parameters
            $param_filename=$filename;
            $param_title = $title;
            $param_url = $url;
            $param_category = $category;
            $param_position = $position;
            $param_id=$id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location:advertisement.php");
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
        $sql = "SELECT * FROM advertisement WHERE id = ?";
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
                    $url = $row["url"];
                    $category = $row["category"];
                    $position = $row["position"];
                   
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
  <title>OICTODAY Dashboard</title>
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
       POST NEW ADVERTISEMENT
      </li>

  </ol>

  <a href="advertisement.php" class="btn btn-success">Back to List</a>
 
</div>




       <div class="row">
                <div class="col-md-12">

                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

            <div class="col-md-12">
              
                    <label>IMAGE</label><br>
                    <input type="file" name="photo" required="required;">
                   
            </div><br><br><br>

             <div class="col-md-4">

                <div class="form-group <?php echo (!empty($title_Err)) ? 'has-error' : ''; ?>">
                  <label>TITLE</label>
              <input type="text" name="title" class="form-control line"  value="<?php echo $title; ?>">
                  <span class="help-block"><?php echo $title_Err;?></span>
                </div>

             </div>

             <div class="col-md-4">
               <div class="form-group <?php echo (!empty($url_Err)) ? 'has-error' : ''; ?>">

                 <label>URL</label>
            <input type="text" name="url" class="form-control line"  value="<?php echo $url; ?>">
            <span class="help-block"><?php echo $url_Err ;?></span>
            </div>
             </div>

           <div class="col-md-2">
               <div class="form-group <?php echo (!empty($category_Err)) ? 'has-error' : ''; ?>">
                 <label>CATEGORY</label>
      <select id="category" name="category" onchange="populate(this.id,'position')">
          <option value="<?php echo $category; ?>" hidden>SELECT Category</option>
          <option value="Small_ad"  <?php if($row["category"]=='Small_ad'){ echo "selected";} ?>>Small Ad</option>
          <option value="Big_ad"  <?php if($row["category"]=='Big_ad'){ echo "selected";} ?>>Big Add</option>
          <option value="Conference"  <?php if($row["category"]=='Conference'){ echo "selected";} ?>>Conference</option>
          <option value="Media_partner"  <?php if($row["category"]=='Media_partner'){ echo "selected";} ?>>Media Partner</option>
     </select> <span class="error"><?php echo $category_Err; ?></span>
               </div>
             </div>


             <div class="col-md-2">
               <div class="form-group <?php echo (!empty($position_Err)) ? 'has-error' : ''; ?>">
                 <label>POSITION</label>
        <select id="position" name="position">  <b class="error">*</b>
           <option value="<?php echo $position; ?>" hidden>Select Position</option>   
        
        </select> <span class="error"><?php echo $position_Err; ?></span>
               </div>
             </div>


            
             </div><br>
                      
         <input type="hidden" name="id" value="<?php echo $id; ?>"/>
         <input type="submit" class="btn btn-primary" value="Submit">
          <a href="advertisement.php" class="btn btn-danger">Cancel</a>
                    </form>
    
                </div>
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

    <script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "Small_ad"){
    var optionArray = ["|","Header-section|Header-section"];

  } else if(s1.value == "Big_ad"){
    var optionArray = ["|","H-Row-3|H-Row-3","H-Row-4|H-Row-4","H-Row-6|H-Row-6","H-Row-7|H-Row-7","W-Row-1|W-Row-1","B-Row-2|B-Row-2"];

  } else if(s1.value == "Conference"){

    var optionArray = ["|","Conference|Conference"];


  }else if(s1.value == "Media_partner"){
     var optionArray = ["|","Media_partner|Media_partner"];
  }
  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}
</script>


</html>
