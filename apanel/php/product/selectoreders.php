<?php  
include("../connection_mysqli.php");
 $output = '';  
 $sql = "SELECT * FROM `orders` ORDER BY `oid` DESC";  
 $result = mysqli_query($connect, $sql) or die ('error');  
 $output .= '  
      <div class="table-responsive">  
           <table id="example" class="table table-bordered">  
                <thead> <tr>  
                     <th width="5%">OId</th>  
                     <th width="13%">User Name</th>
                     <th width="25%">Product Name</th>
                     <th width="20%">Price</th>
                     <th width="10%">Quantity</th>
                     <th width="10%">Size</th>
                     <th width="30%">Image</th>
                     <th width="30%">Address</th>
                     <th width="10%">PIN Code</th>
                    
                </tr> </thead><tbody>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
          
           $output .= '  
                <tr>  
                     <td>'.$row["oid"].'</td>  
  
                     <td class="name" data-id1="'.$row["id"].'" >'.$row["user"].'</td> 
                     <td class="name" data-id2="'.$row["id"].'" >'.$row["pname"].'</td>
                     <td class="price" data-id4="'.$row["id"].'" >'.$row["price"].'</td> 
                     <td class="unit" data-id5="'.$row["id"].'" >'.$row["qty"].'</td>
                     <td class="unit" data-id6="'.$row["id"].'" >'.$row["size"].'</td>
                     <td class="image" data-id3="'.$row["id"].'" ><img style="width:60%" src='.$row["image"].'></td>
                     <td class="name" data-id7="'.$row["id"].'" >'.$row["adr"].'</td>
                     <td class="name" data-id8="'.$row["id"].'" >'.$row["pin"].'</td>
                       
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
 