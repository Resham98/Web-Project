<?php 

$con = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");


$username = $_POST['username'];
$password = $_POST['password'];


 $sql = "select * from users where username='$username' and password='$password'";
  $result=mysqli_query($con,$sql);
  

 if(mysqli_num_rows($result) == 1)
 {
     session_start();

     $_SESSION['user'] = $username;
     
     
    
     header("Location: http://hethemensstore.tk");

 }
 else
 {
     echo 'error';
 }















?>