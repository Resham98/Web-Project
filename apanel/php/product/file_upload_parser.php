
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    include("../connection_mysqli.php");
    $id = $_POST['id'];


    //$img = $_FILES['img']['name'];
 $target_dir = "../../productpdfs";
$target_file = $target_dir . basename($_FILES["file1"]["name"]);
if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
    } 
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $sql = "update products set pdf='.$target_file.' where id='.$id.'";
  if(  mysqli_query($con,$sql))
  {
      echo "News Has Been Uploaded Successfully";
  }
  else
  {
      echo $id, $_FILES["file1"]["name"];
  }
 
}
?>
