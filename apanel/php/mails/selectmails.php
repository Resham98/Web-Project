<?php  
include("../connection_mysqli.php");
 $output = '';  
 $sql = "SELECT * FROM mails ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql) or die ('error');  
 $output .= '  
      <div class="table-responsive">  
           <table id="example" class="table table-bordered">  
                <thead> <tr>  
                     <th width="5%">ID</th>  
                     <th width="13%">Date</th>
                     <th width="13%">Name</th>
                     <th width="30%">Email</th>
                     <th width="20%">Phone No.</th>
                     <th width="20%">Message</th>
                    
                </tr> </thead><tbody>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="title" data-id2="'.$row["id"].'" contenteditable>'.$row["mdate"].'</td>
                     <td class="title" data-id2="'.$row["id"].'" contenteditable>'.$row["name"].'</td> 
                     <td class="price" data-id4="'.$row["id"].'" contenteditable>'.$row["email"].'</td>
                    <td class="plan_details" data-id6="'.$row["id"].'" contenteditable>'.$row["phone"].'</td> 
                    <td class="plan_details" data-id7="'.$row["id"].'" contenteditable>'.$row["message"].'</td> 

                </tr>  
           ';  
      }   
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="7">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</tbody></table>  
      </div>';  
 echo $output;  
 ?>  
