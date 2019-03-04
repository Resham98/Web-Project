<?php  
include("../connection_mysqli.php");
 $output = '';  
 $sql = "SELECT * FROM `products` ORDER BY `id` DESC";  
 $result = mysqli_query($connect, $sql) or die ('error');  
 $output .= '  
      <div class="table-responsive">  
           <table id="example" class="table table-bordered">  
                <thead> <tr>  
                     <th width="5%">Id</th>  
                     <th width="13%">Category</th>
                     <th width="25%">Name</th>
                     <th width="20%">Price</th>
                     <th width="10%">Quantity</th>
                     <th width="10%">Size</th>
                     <th width="30%">Image</th>
                     <th width="20%">Edit</th>
                     <th width="5%">Delete</th>
                    
                </tr> </thead><tbody>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
          
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
  
                     <td class="category" data-id2="'.$row["id"].'" >'.$row["type"].'</td> 
                     <td class="name" data-id3="'.$row["id"].'" >'.$row["name"].'</td>
                     <td class="price" data-id4="'.$row["id"].'" >'.$row["price"].'</td> 
                     <td class="unit" data-id5="'.$row["id"].'" >'.$row["qty"].'</td>
                     <td class="unit" data-id7="'.$row["id"].'" >'.$row["size"].'</td>
                     <td class="image" data-id6="'.$row["id"].'" ><img style="width:60%" src='.$row["image"].'></td>
   
                
                     <td><button type="button" name="edit_btn" onclick="btnEdit('.$row["id"].')" data-id9="'.$row["id"].'" class="btn btn-xs btn-danger btn_edit">Edit</button></td>
                     
                     <td><button type="button" name="delete_btn" data-id8="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                       
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
 