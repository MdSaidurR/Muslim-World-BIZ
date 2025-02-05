<?php  
//export.php  
$connect= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM exhibitor WHERE event_number='10MWBIZ'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1"> 
   
   <tr> 
                <th >ID</th>
                <th>Title</th> 
                <th>Name</th>
                <th>Designation</th>
                <th>Email</th>
                <th>mobile_code</th>
                <th>Mobile_Number</th>
                <th>Interested for</th>
                <th>Objective</th>
                <th>Company</th>
                <th>Registration</th>
                <th>Profile</th>
                <th>Industry</th>
                 <th>Status</th>
                <th>Cluster</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>City</th>
                <th>Postcode</th>
                <th>State</th>
                <th>Country</th>
                <th>Country_code</th>
                <th>Company_phone</th>
                <th>Interested Field</th>
                <th>E_Number</th>
                <th>Date</th>
               
      </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {

   $output .= '
    <tr> <td>'.$row["id"].'</td>
         <td>'.$row["title"].'</td>  
         <td>'.$row["name"].'</td>  
         <td>'.$row["designation"].'</td>
         <td>'.$row["email"].'</td> 
         <td>'.$row["mobile_code"].'</td> 
         <td>'.$row["mobile_number"].'</td>
         <td>'.$row["interested_booking"].'</td>
         <td>'.$row["primary_objective"].'</td>
         <td>'.$row["company"].'</td> 
         <td>'.$row["registration"].'</td>
         <td>'.$row["profile"].'</td>
         <td>'.$row["industry"].'</td>
         <td>'.$row["status"].'</td>
         <td>'.$row["cluster"].'</td>            
         <td>'.$row["address1"].'</td>
         <td>'.$row["address2"].'</td>
         <td>'.$row["city"].'</td>
         <td>'.$row["postcode"].'</td>
         <td>'.$row["state"].'</td> 
         <td>'.$row["country"].'</td>
         <td>'.$row["country_code"].'</td>
         <td>'.$row["company_phone"].'</td>
         <td>'.$row["interested_field"].','.$row["other"].'</td>  
         <td>'.$row["event_number"].'</td>  
         <td>'.$row["date"].'</td>  
                    </tr>
   ';
  }

  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=exhibitor_list.xls');
  echo $output;
 }
}
?>

