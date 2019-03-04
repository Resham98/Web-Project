<?php
session_start();

$pid = $_GET['pid'];
$user = $_GET['user'];
$qtycart = $_GET['qty'];

$con = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

$sql = "SELECT * FROM addcart where product_id='$pid' and user = '$user'";
                            $cart="";
                        
                            
$sresult=mysqli_query($con,$sql);
if($user=='')
{
    header("Location: http://hethemensstore.tk/loginn2.php");
}

                           elseif(mysqli_num_rows($sresult) == 1){
                                
                                while($products=mysqli_fetch_row($sresult)){
                                
                            
                                }
                                
                $sql = "update addcart set qty=$qtycart  where product_id='$pid' and user = '$user'";
                                if($sresult=mysqli_query($con,$sql)){
                                         header("Location: http://hethemensstore.tk/pf.php");
                                          }
                                          else{
                                              echo 'error';
                                          }
                                
                                }



elseif(mysqli_num_rows($sresult) == 0)
{
 $sqli = "insert into addcart (product_id,user,qty) values('$pid','$user',$qtycart)";
  if(  mysqli_query($con,$sqli))
  {
      
        header("Location: http://hethemensstore.tk/pf.php");
  }
  else{
      echo 'error';
  }
}



?>