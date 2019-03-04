<?php 
session_start();
$suser=$_SESSION['user'];
$connect = mysqli_connect("localhost","hethemen_disha","disharajani@123","hethemen_store");




$sql = "SELECT pname FROM cart WHERE user='$suser'";
if($sresult=mysqli_query($connect,$sql))
{
  $row=mysqli_num_rows($sresult);
 

} 
else
{
    echo 'error';
}

?>

<!DOCTYPE html>
<!--<html>-->

<!--<head>-->
<!--	<title>HE THE MEN STORE</title>-->
	<!-- for-mobile-apps -->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--	 <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, -->
<!--Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
	
<!--	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />-->
<!--	<link href="css/h.css" rel="stylesheet" type="text/css" media="all" />-->
	<!-- js -->
<!--	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>-->
	<!-- //js -->
	<!-- cart -->
<!--	<script src="js/simpleCart.min.js"></script>-->
	<!-- cart -->
	<!-- for bootstrap working -->
<!--	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>-->
	<!-- //for bootstrap working -->

<!--	<script src="js/jquery.easing.min.js"></script>-->
<!--</head>-->

<!--<body>-->
<style>
    .dropbtn {
    background-color: transparent;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}
#ic{
    margin-left:50%;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #FDA30E;}
</style>
	<!-- header -->
	<div class="header">
		<div class="container">
			<ul>
				<li>
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
				<li>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
				<li>
					<span  class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<?php if (isset($_SESSION['user'])) {
			    echo	'
				    <div class="dropdown">
				    	<a class="dropbtn">Welcome '.$suser.'</a>
				  <div class="dropdown-content">
    <a href="logout.php">Logout</a>

  </div>
	</div>	';
						}	    
				
				else
				{
				    echo '<a href="mailto:praveenjaisighani@gmail.com">praveenjaisighani@gmail.com</a>';
				}
				
				 ?>
				</li>	
					
				
			
				
			</ul>
		</div>
	</div>
	<!-- //header -->
	<!-- header-bot -->
	<div class="header-bot">
		<div class="container">
			<div class="col-md-3 header-left">
				<h1>
					<a href="index.php">
						<img src="images/logo1.png">
					</a>
				</h1>
			</div>
			<div class="col-md-3 header-right footer-bottom" id="ic">
				<ul>
					<?php if (isset($_SESSION['user'])) {
			    echo'
			    <li>
						<a href="logout.php" class="use1">
							<span>Logout</span>
						</a>

					</li>';
					}
					else{	
					    echo'<li>
						<a href="loginn2.php" class="use1">
							<span>Login</span>
						</a>

					</li>';
	}
	?>
					<li>
						<a class="fb" href="https://www.facebook.com/praveen.jaisinghani.31"></a>
					</li>
					<li>
						<a class="twi" href="#"></a>
					</li>
					<li>
						<a class="insta" href="https://www.instagram.com/online_shopping_store_2"></a>
					</li>
					<li>
						<a class="you" href="#"></a>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header-bot -->
	<!-- banner -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							 aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active menu__item menu__item--current">
									<a class="menu__link" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
					<li class=" menu__item">
									<a class="menu__link" href="pf.php">Gallery</a>
								</li>
								<li class=" menu__item">
									<a class="menu__link" href="contactus.php">Contact</a>
								</li>
								<li class=" menu__item">
									<a class="menu__link" href="aboutus.php">About Us</a>
								</li>
								
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="top_nav_right">
				<div class="cart box_1">
					<a href="cart1.php">
						<h3>
							<div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (
								<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

						</h3>
					</a>
					<p>
						<a href="javascript:;" class="simpleCart_empty"><?php echo $row; ?></a>
					</p>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //banner-top -->
	<!-- //footer -->
	<!-- login -->
	<!--<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
	<!--	<div class="modal-dialog" role="document">-->
	<!--		<div class="modal-content modal-info">-->
	<!--			<div class="modal-header">-->
	<!--				<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
	<!--					<span aria-hidden="true">&times;</span>-->
	<!--				</button>-->
	<!--			</div>-->
	<!--			<div class="modal-body modal-spa">-->
	<!--				<div class="login-grids">-->
	<!--					<div class="login">-->
	<!--						<div class="login-bottom">-->
	<!--							<h3>Sign up for free</h3>-->
	<!--							<form>-->
	<!--								<div class="sign-up">-->
	<!--									<h4>Email :</h4>-->
	<!--									<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}"-->
	<!--									 required="">-->
	<!--								</div>-->
	<!--								<div class="sign-up">-->
	<!--									<h4>Password :</h4>-->
	<!--									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"-->
	<!--									 required="">-->

	<!--								</div>-->
	<!--								<div class="sign-up">-->
	<!--									<h4>Re-type Password :</h4>-->
	<!--									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"-->
	<!--									 required="">-->

	<!--								</div>-->
	<!--								<div class="sign-up">-->
	<!--									<input type="submit" value="REGISTER NOW">-->
	<!--								</div>-->

	<!--							</form>-->
	<!--						</div>-->
	<!--						<div class="login-right">-->
	<!--							<h3>Sign in with your account</h3>-->
	<!--							<form>-->
	<!--								<div class="sign-in">-->
	<!--									<h4>Email :</h4>-->
	<!--									<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}"-->
	<!--									 required="">-->
	<!--								</div>-->
	<!--								<div class="sign-in">-->
	<!--									<h4>Password :</h4>-->
	<!--									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"-->
	<!--									 required="">-->
	<!--									<a href="#">Forgot password?</a>-->
	<!--								</div>-->
	<!--								<div class="single-bottom">-->
	<!--									<input type="checkbox" id="brand" value="">-->
	<!--									<label for="brand">-->
	<!--										<span></span>Remember Me.</label>-->
	<!--								</div>-->
	<!--								<div class="sign-in">-->
	<!--									<input type="submit" value="SIGNIN">-->
	<!--								</div>-->
	<!--							</form>-->
	<!--						</div>-->
	<!--						<div class="clearfix"></div>-->
	<!--					</div>-->
	<!--					<p>By logging in you agree to our-->
	<!--						<a href="#">Terms and Conditions</a> and-->
	<!--						<a href="#">Privacy Policy</a>-->
	<!--					</p>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- //login -->
<!--</body>-->

<!--</html>-->