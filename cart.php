<!DOCTYPE html>
<html>
<head>
<title></title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //tags -->
<link rel="icon" href="img/icon1.jpg" type="image/icon" sizes="20x20">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' href="css/flexslider.css" type="text/css" media="screen" />
<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/carte.css" rel='stylesheet' type="text/css" media="all" />
<link href="css/h.css" rel='stylesheet' type='text/css' media="all">
        <link href="css/footer.css" rel='stylesheet' type='text/css' media="all">

<!-- //for bootstrap working -->
<style>
   .hvr-outline-out {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  background: #FDA30E;
}
.hvr-outline-out:before {
    content: '';
    position: absolute;
    border: #FDA30E solid 4px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.snipcart-details input.button {
    font-size: 13px;
    color: #fff;
    background: #FDA30E;
    text-decoration: none;
    position: relative;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: .5em 0;
    outline: none;
    letter-spacing: 1px;
    font-weight: 600;
}
.snipcart-details input.button:hover{
    background:#FDA30E;
}
.link-product-add-cart:hover {
    background: #FDA30E none repeat scroll 0 0;
    color: #fff;
}
.hvr-radial-out:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background:#FDA30E;
  -webkit-transform: scale(0);
  transform: scale(0);
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.single-right-left h3 {
    text-transform: capitalize;
    font-size: 23px;
    color: #FDA30E;
    margin: 0;
    letter-spacing: 1px;
    font-weight: 600;
}

</style>
</head>
 <?php include 'header.php';?>

<body>
  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
	         
	         
	         <?php
	
				$user = $_SESSION['user'];

$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");

if(!$connect){
echo "error in connection";  
}

                                    $id = $_GET['id'];
                            $sql = "SELECT * FROM products where id = $id";
                            $products="";
                            
                        
                            

                            if($sresult=mysqli_query($connect,$sql)){
                                while($products=mysqli_fetch_row($sresult)){
	         
	         $name=$products[3];
	         $price=$products[4];
	         $image=$products[2];
	         $pid = $products[1];
	         
                                }}
                                ?>
	         
	         
	         
	         
	         
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					
					
					
					
					
					<ul class="slides">
						<li data-thumb="apanel/<?php echo $image; ?>">
							<div class="thumb-image"> <img src="apanel/<?php echo $image; ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $name; ?></h3>
					<p><span class="item_price">Rs <?php echo $price; ?></span> <del>- Rs 999</del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						 <form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
						</form>
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality :</h5>
							<select id="cartqty" class="frm-field required sect">
								<option value="1">1 Qty</option>
								<option value="2">2 Qty</option> 
								<option value="3">3 Qty</option>					
								<option value="4">4 Qty</option>								
							</select>
						</div>
					</div>
					<script>
			
				
					function addCart()
					{
					  
					    	var qty = parseInt(document.getElementById("cartqty").value);
				
					    
					    location.href="addtocart.php?pid=<?php echo $pid ?>&user=<?php echo $user ?>&qty="+qty;
					}
					</script>
					<!--<div class="occasional">-->
					<!--	<h5>Types :</h5>-->
					<!--	<div class="colr ert">-->
					<!--		<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>-->
					<!--	</div>-->
					<!--	<div class="colr">-->
					<!--		<label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>-->
					<!--	</div>-->
					<!--	<div class="colr">-->
					<!--		<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>-->
					<!--	</div>-->
					<!--	<div class="clearfix"> </div>-->
					<!--</div>-->
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Wing Sneakers">
																	<input type="hidden" name="amount" value="650.00">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																<a id="addcart"onclick="addCart()" class="item_add single-item hvr-outline-out button2">Add to cart</a>
																</fieldset>
															</form>
														</div>
																			
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Share On : </li>
															<li><a href="https://www.facebook.com/praveen.jaisinghani.31" class="facebook">
																  <div class="front"><i class="fab fa-facebook-f" aria-hidden="true"></i></div>
																  <div class="back"><i class="fab fa-facebook-f" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fab fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fab fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/online_shopping_store_2" class="instagram">
																  <div class="front"><i class="fab fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fab fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fab fa-youtube" aria-hidden="true"></i></div>
																  <div class="back"><i class="fab fa-youtube" aria-hidden="true"></i></div></a></li>
														</ul>
					
		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<!--<li>Reviews</li>-->
							<!--<li>Information</li>-->
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>SHOE WORLD</h6>
							   <p>A shoe is an item of footwear intended to protect and comfort the human foot while the wearer is doing various activities. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture, with appearance originally being tied to function. </p>
							   <p class="w3ls_para">Additionally, fashion has often dictated many design elements, such as whether shoes have very high heels or flat ones. Contemporary footwear in the 2010s varies widely in style, complexity and cost. Basic sandals may consist of only a thin sole and simple strap and be sold for a low cost. High fashion shoes made by famous designers may be made of expensive materials, use complex construction and sell for hundreds or even thousands of dollars a pair. Some shoes are designed for specific purposes, such as boots designed specifically for mountaineering or skiing.</p>
							</div>
						</div>
						
					</div>
				</div>	
			</div>

	        </div>
 </div>
<!--//single_page-->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<!-- <script type="text/javascript" src="js/move-top.js"></script> -->
<!-- S<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<!-- <script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script> -->
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
            <?php include 'footer.php';?>

</body>

</html>
