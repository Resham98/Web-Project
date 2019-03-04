<?php
$con= mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

$username = $_POST['username'];
$email = $_POST['emailid'];
$pass = $_POST['password'];
  $uid = uniqid();
    

    
    $sql = "insert into users (uid,username,emailid,password) values('$uid','$username','$email','$pass')";
  if(  mysqli_query($con,$sql))
  {
      
      session_start();

     $_SESSION['user'] = $username;
     
     
    
     header("Location: http://hethemensstore.tk");
  }
  else{
      echo 'error';
  }
 
?>