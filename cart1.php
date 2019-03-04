<html>
<head>
    <style>
#orders {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    
}
table{
margin-top:2%
    margin-bottom:2%;
}
#orders td, #customers th {
    border: 1px solid #FDA30E;
    padding: 8px;
}

#orders tr:nth-child(even){background-color: #f2f2f2;}

#orders tr:hover {background-color: #ddd;}

#orders th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #FDA30E;
    color: white;
}
#tot{
        font-size: 18px;
    color: #fda30e;

}
#orders {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 2%;
    margin-bottom: 2%;
    margin-left:2%;
    
}
#check{
    margin-left: 83%;
    margin-bottom: 2%;
    width: 14%;
    height: 11%;
    font-size: 20px;
    font-variant-caps: small-caps;
}
.divtable{
    margin-right:7%;
}
}
</style>

<title>HE THE MEN'S STORE</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //tags -->
<link rel="icon" href="img/icon1.jpg" type="image/icon" sizes="20x20">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="css/h.css" rel='stylesheet' type='text/css' media="all">
        <link href="css/footer.css" rel='stylesheet' type='text/css' media="all">
        </head>
 <?php include 'header.php';?>
 <?php 
$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

if(!$connect){
echo "error in connection";  
}
session_start();
$user = $_SESSION['user'];

                                    
                            $sql = "SELECT * FROM cart where user='$user'";
                                $i=0;
                        

                            $sresult=mysqli_query($connect,$sql);
                                while($cart1=mysqli_fetch_row($sresult))
                                {
                                
                                    $info[] = $cart1;
                                    
                                }
                                $size =sizeof($info);
                            
                                for($i=0;$i<$size;$i++)
                                {
                           $pid= $info[$i][1];
                           
                           
                                
                                
                                $sql = "SELECT * FROM products WHERE uid='$pid'";

                            $sresult=mysqli_query($connect,$sql);
                                while($product=mysqli_fetch_row($sresult))
                                {
                                    $pinfo[] = $product[3];
                                    $price[] = $product[4];
                                }
                                
                                }
                                
                                 $psize =sizeof($pinfo);
                            

?>
<body>
    <div class="divtable">
        
<table id="orders">
<tr>
        
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Product Size</th>
        <th>Image</th>
        <th>Total</th>
        <th>Remove</th>
        
</tr>
<?php

                  $grandtotal=0;                  
                            $sql = "SELECT * FROM cart WHERE user='$user'";
                        
            
                            if($sresult=mysqli_query($connect,$sql)){
                                while($products=mysqli_fetch_row($sresult)){
                                $total= $products[2]*$products[3];
                                $grandtotal = $grandtotal + $total; 
                                echo '
                                <tr>
                                    <td>'.$products[1].'</td>
                                    <td>'.$products[2].'</td>
                                    <td>'.$products[3].'</td>
                                    <td>'.$products[4].'</td>
                                    <td><img style="width:40%;height:40%" src="apanel/'.$products[5].'"></td>
                                 
                                 <td>'.$total.'</td>
                                     <td><button onclick="location.href=`remove.php?user='.$products[0].'&pname='.$products[1].'`">x</button></td>
                                </tr>
                                
                                ';

                                
                                    
        }
    }
    echo'<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><h4><b id="tot">GRAND TOTAL</td>
                                    <td>'.$grandtotal.'</td></b></h4>
                                    <td></td>
    </tr>';
    ?>
</table>
   <?php
   if($grandtotal==0){
   echo'
   <a href="details.php"><button type="button" class="btn btn-warning" id="check" disabled>Proceed</button></a>
   ';
   }
   else
   {
     echo'
   <a href="details.php"><button type="button" class="btn btn-warning" id="check">Proceed</button></a>
   ';  
   }
   ?>
<script type="text/javascript" src="js/bootstrap.js"></script>
</div>
            <?php include 'footer.php';?>

</body>

</html>
