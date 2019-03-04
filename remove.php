<?php
$user = $_GET['user'];
$pname = $_GET['pname'];
$con = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");


                            $sql = "delete  FROM cart where user='$user' and pname='$pname'";
                            
                        
                            

                            if($sresult=mysqli_query($con,$sql)){
                            
                                header("Location:cart1.php");
                            }
                            else
                            {
                                echo 'error';
                            }



?>