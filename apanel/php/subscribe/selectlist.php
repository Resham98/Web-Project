<?php  
include("../connection_mysqli.php");
 $output = '';  
 $sql = "SELECT * FROM `subscribe`";  
 $result = mysqli_query($connect, $sql) or die ('error');  
 $output .= '  
      <div class="table-responsive">  
           <table id="example" class="table table-bordered">  
                <thead> <tr>  
                     <th width="5%">Id</th>  
                     <th width="10%">Email</th>  

                </tr> </thead><tbody>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="Email" data-id1="'.$row["id"].'" contenteditable>'.$row["email"].'</td>  
                     
                     
                     <td><button type="button" name="delete_btn" data-id5="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                     <td><button type="button" data-id5="'.$row["id"].'" class="btn btn-xs btn-info btn_delete"><i class="fa fa-pencil-square-o"></i></button></td>  
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
