<?php  
include("../connection_mysqli.php");
 $output = '';  
 $sql = "SELECT * FROM `orders`";  
 $result = mysqli_query($connect, $sql) or die ('error');  
 $output .= '  
      <div class="table-responsive">  
           <table id="example" class="table table-bordered">  
                <thead> <tr>  
                     
                     <th width="5%">First Name</th>  
                     <th width="10%">Last Name</th>  
                     <th width="13%">Email</th>  
                     <th width="13%">Phone</th>
                     <th width="10%">Purchase Date</th>
                     <th width="36%">days pases</th>  
                     <th width="5%">estimated days</th> 
                     <th width="5%">stage</th>
                     <th width="5%">completed date</th>
                     
                </tr> </thead><tbody>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     
                     
                     <td class="fname" data-id1="'.$row["`id`"].'">'.$row["fname"].'</td>
                     
                      <td class="lname" data-id2="'.$row["id"].'">'.$row["lname"].'</td>
                      
                      <td class="email" data-id3="'.$row["id"].'">'.$row["email"].'</td>
                      
                      <td class="phone" data-id4="'.$row["id"].'">'.$row["phone"].'</td>
                      
                      <td class="date" data-id3="'.$row["id"].'">'.$row["Date"].'</td>
                      
                      <td class="daypases" data-id3="'.$row["id"].'">'.$row["Date"].'</td>
                      
                      <td class="edate" data-id3="'.$row["id"].'">'.$row["estimated_COMPLETION_date"].'</td>
                      
                      <td class="stage" data-id8="'.$row["id"].'">'.$row["stage"].'</td>
                
                      
                      
                      <td class="completedDate" data-id5="'.$row["id"].'">'.$row["Date"].'</td>
                      
                      
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
