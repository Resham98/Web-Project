<?php
session_start();
$user=$_GET['user'];
$pid = $_GET['pid'];
$qty = $_GET['qty'];


$con = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");
$sql = "SELECT * FROM products where uid='$pid'";
$sresult=mysqli_query($con,$sql);

while($proinfo=mysqli_fetch_row($sresult)){
$pname = $proinfo[3];
$price = $proinfo[4];
$size = $proinfo[7];
$img = $proinfo[2];

}

$sql = "SELECT * FROM cart where pname='$pname' and user = '$user'";
                            $cart="";
                        
$sresult=mysqli_query($con,$sql);
if($user=='')
{
    header("Location: http://hethemensstore.tk/loginn2.php");
}
elseif(mysqli_num_rows($sresult) == 1){
                        
                    while($products=mysqli_fetch_row($sresult)){
                        
                    }
                $qty=$qty+1; 
                $sql = "update cart set qty=$qty  where pname='$pname' and user = '$user'";
                                if($sresult=mysqli_query($con,$sql)){
                                         header("Location: http://hethemensstore.tk/pf.php");
                                          }
                                          else{
                                              echo 'error1';
                                          }
                                
                                }


elseif(mysqli_num_rows($sresult) == 0)
{
    $sqli = "insert into cart (pname,user,qty,size,price,img) values('$pname','$user',$qty,$size,$price,'$img')";
        if(  mysqli_query($con,$sqli))
        {
      
        header("Location: http://hethemensstore.tk/pf.php");
        }
        else{
            echo 'error2';
            echo $pro;
        }
}

?>