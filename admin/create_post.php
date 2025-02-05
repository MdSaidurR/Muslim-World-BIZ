<?php 
  ob_start();
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
$title=$subtitle=$filename=$slug=$author=$category=$position=$description= "";
$title_Err=$image_Err=$slug_Err=$author_Err=$category_Err=$position_Err=$description_Err= "";

function createSlug($slug){
  $lettersNumbersSpacesHypens='/[^\-\s\pN\pL]+/u';

  $spacesDuplicateHypens='/[\-\s]+/';
  $slug=preg_replace($lettersNumbersSpacesHypens, '' , mb_strtolower($slug, 'UTF-8'));
  $slug=preg_replace($spacesDuplicateHypens , '-', $slug);
  $slug=trim($slug, '-');
  return $slug;
}
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate description
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_Err = "Description required";     
    } else{
        $title = $input_title;
    }



  $subtitle = trim($_POST["subtitle"]);
    if (empty($_POST["subtitle"])) {
    $subtitle = "";
  } else {
    $subtitle = ($_POST["subtitle"]);
  }


if(empty($_POST["slug"])){
        $slugErr = 'Slug is required';
    }else{
        $slug = createSlug($_POST["slug"]);
       
    }


    $input_author = trim($_POST["author"]);
    if(empty($input_author)){
        $author_Err = "Author required";     
    } else{
        $author = $input_author;
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

   
// Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_Err = "Description required";     
    } else{
        $description = $input_description;
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
    if(empty($title_Err) && empty($slug_Err) && empty($author_Err) && empty($category_Err) && empty($position_Err)  && empty($description_Err)){

        // Prepare an insert statement
        $sql = "INSERT INTO all_news (filename, title, subtitle, slug, author,category,position, description) VALUES (?, ?, ?,  ?,?,?,?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_filename, $param_title, $param_subtitle, $param_slug, $param_author,$param_category,$param_position, $param_description);
            
            // Set parameters
            $param_filename=$filename;
            $param_title = $title;
            $param_subtitle = $subtitle;
            $param_slug = $slug;
            $param_author = $author;
            $param_category = $category;
            $param_position = $position;
            $param_description=$description;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location:post-list.php");
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
}



?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <title>MWBIZ Dashboard</title>
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
       CREATE NEW NEWS
      </li>

  </ol>

  <a href="post-list.php" class="btn btn-success">Back to List</a>
 
</div>




       <div class="row">
                <div class="col-md-12">

                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

            <div class="col-md-2">
              
                    <label>Image</label>
                    <input type="file" name="photo" required="required;">
                   
               
             </div><br>

             <div class="col-md-12">

                <div class="form-group <?php echo (!empty($title_Err)) ? 'has-error' : ''; ?>">
                  <label>Title</label>
                  <textarea id="title" type="text" name="title" class="form-control" value="<?php echo $title; ?>"></textarea>
                  <span class="help-block"><?php echo $title_Err;?></span>
                </div>
             </div>
             
              <div class="col-md-12">
                <div class="form-group">
                  <label> Sub Title</label>
                  <textarea id="subtitle" type="text" name="subtitle" class="form-control"> <?php if(isset($subtitle)) echo $subtitle; ?></textarea>  
                </div>
             </div>

             <div class="col-md-5">
               <div class="form-group <?php echo (!empty($slug_Err)) ? 'has-error' : ''; ?>">

                 <label>Slug</label>
            <input type="text" name="slug" class="form-control line"  value="<?php echo $slug; ?>">
            <span class="help-block"><?php echo $slug_Err ;?></span>
            </div>
             </div>

             <div class="col-md-3">
               <div class="form-group <?php echo (!empty($author_Err)) ? 'has-error' : ''; ?>">
                 <label>Author</label>
            <input type="text" name="author" class="form-control line"  value="<?php echo $author; ?>">
            <span class="help-block"><?php echo $author_Err ;?></span>
               </div>
             </div>

              <div class="col-md-2">
               <div class="form-group <?php echo (!empty($category_Err)) ? 'has-error' : ''; ?>">
                 <label>CATEGORY</label>
      <select id="category" name="category" onchange="populate(this.id,'position')">
          <option value="<?php echo $category; ?>" hidden>SELECT Category</option>
          <option value="Message">Message</option>
          
          <option value="Conference">Conference</option>
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



                <div class="col-md-12">
                     <div class=" <?php echo (!empty($description_Err)) ? 'has-error' : ''; ?>">
                        
                      <label>Description</label>
                      <textarea id="editor1" name='description' value="<?php echo $description; ?>"></textarea>
                       <span class="help-block"><?php echo $description_Err;?></span>
                      </div>
                 </div>
             </div><br>
                      

         <input type="submit" class="btn btn-primary" value="Submit">
          <a href="post-list.php" class="btn btn-danger">Cancel</a>
                    </form>
    
                </div>
            </div>
    
      </div>
    
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           &copy; <?php  echo " " . date("d-m-y") ." Muslim World BIZ. All rights reserved ";  ?> 
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
 <script>
    CKEDITOR.inline( 'title',{
    filebrowserBrowseUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'ckeditor/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    
     
});

 CKEDITOR.inline( 'title2',{
    filebrowserBrowseUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'ckeditor/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    
     
});


 CKEDITOR.inline( 'subtitle',{
    filebrowserBrowseUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'ckeditor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'ckeditor/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});

    CKEDITOR.replace('editor1',{
     
    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: './ckfinder/ckfinder.html?type=Images',
    filebrowserUploadUrl:
       './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/archive/',
    filebrowserImageUploadUrl:
       './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/'
});
   </script>

   <script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "Message"){
    var optionArray = ["|","Home|Home","Next|Next"];

  }
  else if(s1.value == "Conference"){
     var optionArray = ["|","Home|Home","Next|Next"];
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
