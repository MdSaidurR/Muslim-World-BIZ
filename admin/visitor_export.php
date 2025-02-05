<?php  
//export.php  
$connect= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM visitor_registration WHERE event_number='10MWBIZ'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1"> 
   <tr> 
                <th >ID</th>
                <th>Visitor Type</th> 
                <th>Title</th> 
                 <th>Name</th>
                <th>Company</th>
                <th>Designation</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Country</th>
                <th>Mobile</th>
                <th>Telephone</th>
                <th>Industry Type</th>
                <th>Other</th>
                <th>Visited Before</th>
                <th>Event Number</th>
                <th>Date</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr> <td>'.$row["id"].'</td>
         <td>'.$row["visitor_type"].'</td>
         <td>'.$row["title"].'</td>  
         <td>'.$row["name"].'</td>  
         <td>'.$row["company"].'</td>  
         <td>'.$row["designation"].'</td>
         <td>'.$row["email"].'</td>  
         <td>'.$row["address"].'</td>    
         <td>'.$row["country"].'</td>
         <td>'.$row["mobile"].'</td>   
         <td>'.$row["telephone"].'</td>
         <td>'.$row["industry_type"].'</td>  
         <td>'.$row["other"].'</td>
        <td>'.$row["visited_before"].'</td>  
         <td>'.$row["event_number"].'</td>  
         <td>'.$row["date"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=visitor_pre_registration.xls');
  echo $output;
 }
}
?>

