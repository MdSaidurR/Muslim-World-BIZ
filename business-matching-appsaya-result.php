<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <?php
  define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'oicinter_rahman');
define('DB_PASSWORD', 'eeu,_2L;Au]q');
define('DB_NAME', 'oicinter_muslimworldbiz');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM businessmatching";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Serial_No</th>";
                                         echo "<th>Salutation</th>";
                                         echo "<th>Name</th>";
                                         echo "<th>Designation</th>";
                                         echo "<th>Email</th>";
                                        echo "<th>Country_Code</th>";
                                        echo "<th>Phone</th>";
                                         echo "<th>Company_Name</th>";
                                        echo "<th>Registration_No</th>";
                                         echo "<th>Profile</th>";
                                          echo "<th>Status</th>";
                                        echo "<th>Industry</th>";
                                         echo "<th>Cluster</th>";

                                        echo "<th>Address_One</th>";
                                         echo "<th>Address_Two</th>";

                                         echo "<th>City</th>";
                                        echo "<th>Postcode</th>";
    
                                        echo "<th>State</th>";
                                         echo "<th>Country</th>";
                                        echo "<th>Country_Code</th>";
    
                                        echo "<th>Mobile</th>";
                                          echo "<th>Interested_Field</th>";
                                         echo "<th>Date</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['designation'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['code'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                         echo "<td>" . $row['company'] . "</td>";
                                         echo "<td>" . $row['registration'] . "</td>";
                                        echo "<td>" . $row['profile'] . "</td>";
                                        echo "<td>" . $row['industry'] . "</td>";
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td>" . $row['cluster'] . "</td>";
                                        echo "<td>" . $row['address1'] . "</td>";
                                        echo "<td>" . $row['address2'] . "</td>";
                                        echo "<td>" . $row['city'] . "</td>";
                                        echo "<td>" . $row['postcode'] . "</td>";
                                        echo "<td>" . $row['state'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
                                        echo "<td>" . $row['country_code'] . "</td>";
                                        echo "<td>" . $row['company_phone'] . "</td>";
                                        echo "<td>" . $row['interested_field'] . "</td>";
                                          echo "<td>" . $row['date'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    
</body>
</html>