<?php  
//export.php  
$connect= mysqli_connect("localhost", "oicinter_saidur", "#l1#}#L(fU8z", "oicinter_muslimworldbiz");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM media_partner WHERE event_number='10MWBIZ'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1"> 
   <tr> 
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
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  <td>'.$row["id"].'</td>  
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=media_partner.xls');
  echo $output;
 }
}
?>

