<html>
<head>
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
        <style>
            .container1{
                margin-top:2%;
            }
        </style>
        </head>
         <?php include 'header.php';?>
        <body>
<?php
$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

if(!$connect){
echo "error in connection";  
}
$user=$_SESSION['user'];
                                    
                            $sql = "SELECT * FROM cart WHERE user='$user'";
            
                            if($sresult=mysqli_query($connect,$sql)){
                                while($products=mysqli_fetch_row($sresult)){
                                    $pname=$products[1];
                                    $price=(int)$products[2];
                                    $qty=(int)$products[3];
                                    $size=(int)$products[4];
                                    $img=$products[5];
                                    $adr=$_POST["adr"];
                                    $pin=$_POST["pin"];
                                    
                                    $sql1 = "insert into orders (user,pname,image,price,qty,size,adr,pin) values('$user','$pname','$img',$price,$qty,$size,'$adr',$pin)";
                                 if(mysqli_query($connect,$sql1))
                                 {
                                        $sql2 = $sql = "delete  FROM cart where user='$user'";
                                        if(mysqli_query($connect,$sql2))
                                        {
                                        
                                        }
                                 }
                                else{
                                      echo 'error';
                                 }
 
                                
                                    
        }
    }
         
        echo'
     <div class="container1">
  <div class="alert alert-success">
    <strong>Congratulations! Your order has been placed successfully.It will delivered to you within 4-5 working days...
    </strong>
    </div>
    ';
     ?>
 
        </body>
        <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
            <?php include 'footer.php';?>



</html>