
<!DOCTYPE html>
<html>
<head>
<title>He The Men Store</title>
<link rel="icon" href="images/icon1.jpg" type="image/icon" sizes="20x20">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- pignose css -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- //pignose css -->
<link href="css/pf.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/h.css" rel='stylesheet' type='text/css' media="all">
        <link href="css/footer.css" rel='stylesheet' type='text/css' media="all">
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<!--<script src="js/simpleCart.min.js"></script>-->
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!--<script src="js/jquery.easing.min.js"></script>-->
</head>
 <?php include 'header.php';?>
<style>
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
   padding-bottom: 15px;
}
</style>
<body>

<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Collection</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Shoes</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Watches</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					    
					    <?php
	
        if (isset($_SESSION['user'])) {
   $session = $_SESSION['user'];
 } 
 else
 {
     
 }
       
				

$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

if(!$connect){
echo "error in connection";  
}

                                    
                            $sql = "SELECT * FROM products ORDER BY id DESC";
                            $products="";
                            $i=0;
                        
                            

                            if($sresult=mysqli_query($connect,$sql)){
                                while($products=mysqli_fetch_row($sresult)){
                                    
                                    echo '<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="apanel/'.$products[2].'" alt="" class="pro-image-front">
									<img src="apanel/'.$products[2].'" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="cart.php?id='.$products[0].'" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="cart.php" name="pname">'.$products[3].'</a></h4>
									<div class="info-product-price">
										<span class="item_price">Rs '.$products[4].'</span>
										<del>Rs 2999</del>
									</div>
									
									<a href="addtocart.php?pid='.$products[1].'&user='.$session.'&qty=1" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>';
                                   
                 	  }}
                 	  $i++ ?>

						
		
						<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					    
					    <?php
	
				

$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

if(!$connect){
echo "error in connection";  
}

                                    
                            $sql1 = "SELECT * FROM products where type='Shoe' ORDER BY id DESC";
                            $products="";
                            $i=0;
                        
                            

                            if($sresult=mysqli_query($connect,$sql1)){
                                while($products=mysqli_fetch_row($sresult)){
					    
					    echo '<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="apanel/'.$products[2].'" alt="" class="pro-image-front">
									<img src="apanel/'.$products[2].'" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="cart.php?id='.$products[0].'" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="cart.php" name="pname">'.$products[3].'</a></h4>
									<div class="info-product-price">
										<span class="item_price">Rs '.$products[4].'</span>
									    <del>Rs. 2999</del>
										<br>
	            						<span>size- '.$products[7].'<span>
									</div>
									<a href="addtocart.php?pid='.$products[1].'&user='.$session.'&qty=1" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>';
                                }} $i++
                                ?>
					    
						
					
						
						<div class="clearfix"></div>						
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						
						
						<?php
	
				

$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

if(!$connect){
echo "error in connection";  
}

                                    
                            $sql2 = "SELECT * FROM products where type='Watch' ORDER BY id DESC";
                            $products="";
                            $i=0;
                        
                            

                            if($sresult=mysqli_query($connect,$sql2)){
                                while($products=mysqli_fetch_row($sresult)){
					    
					    echo '<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="apanel/'.$products[2].'" alt="" class="pro-image-front">
									<img src="apanel/'.$products[2].'" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
											<a href="cart.php?id='.$products[0].'" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="cart.php" name="pname">'.$products[3].'</a></h4>
									<div class="info-product-price">
										<span class="item_price">Rs '.$products[4].'</span>
										<del>Rs 2999</del>
									</div>
										<a href="addtocart.php?pid='.$products[1].'&user='.$session.'&qty=1" class="item_add single-item hvr-outline-out button2">Add to cart</a>
									
									
								</div>
							</div>
						</div>';
                                }} $i++
                                ?>
						
						
						
						
						
						
						<div class="clearfix"></div>		
					</div>	
				</div>
				</div>	
		</div>
	</div>
</div>
<!-- //product-nav -->
            <?php include 'footer.php';?>


</body>
</html>
