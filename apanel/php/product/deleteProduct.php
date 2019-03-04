<?php  
 include("../connection_mysqli.php"); 
 $sql = "DELETE FROM `products` WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>  