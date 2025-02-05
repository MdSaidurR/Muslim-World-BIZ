
 

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
 
 require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM in_brief WHERE id = ?";
    
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
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      
   form div{
    margin-top: 5px;
   }
   #img_div{
    width:auto;
    padding: 5px;
    margin: 15px auto;
   
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
    
   
   img{
    
    margin: 5px;
    width:100%;
   
   }
    </style>
</head>
<body>
   
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="form-group">
                       
                     <?php echo "<img src='image/inbrief/".$row['filename']."' >"; ?>
                    </div>

                    <div class="form-group">
                        
                        <?php echo $row["description"]; ?>
                    </div>
                  
                </div>
            </div>        
        </div>
    
</body>
</html>