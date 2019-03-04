<?php  
 include("../connection_mysqli.php");
 $id = $_GET["id"];  
 $text = $_GET["text"];  
 $column_name = $_GET["column_name"];  
 $id = $connect->real_escape_string($id);
 $text = $connect->real_escape_string($text);
 $column_name = $connect->real_escape_string($column_name);
 $sql = "UPDATE `products` SET ".$column_name."='".$text."' WHERE id='".$id."'";  

 if(mysqli_query($connect, $sql))  
 {  
      echo $sql;  
 }  
 ?>  