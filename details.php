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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- //pignose css -->
<link href="css/h.css" rel='stylesheet' type='text/css' media="all">
        <link href="css/footer.css" rel='stylesheet' type='text/css' media="all">
         <link href="css/contact.css" rel='stylesheet' type='text/css' media="all">
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<!--<script src="js/simpleCart.min.js"></script>-->
<!-- cart -->
    <style>
        .all {
  font: 700 18px/59px "Roboto", sans-serif;
  width: 180px;
  text-align: center;
  background: #a4272b;
  /*display: block;*/
  border: 0;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  z-index: 2;
  padding: 0;
}
.all:before {
  content: "";
  position: absolute;
  z-index: -1;
  background: #222222;
  top: 0;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  transform: scaleY(0);
  transform-origin: 50%;
  transition-property: transform;
  transition-duration: 0.3s;
  transition-timing-function: ease-out;
}
.all:hover, .all:focus {
  color: #fff !important;
}
.all:hover:before {
  transform: scaleY(1);
}
#check{
    margin-left: 83%;
    margin-bottom: 2%;
    width: 14%;
    height: 11%;
    font-size: 20px;
    font-variant-caps: small-caps;
}

    </style>

   </head>
   <body>
       <?php include 'header.php';?>
       
    
<section class="mail">
    <div class="container">
        <h2 class="heading-agileinfo why_us">Your Details
            <span></span>
        </h2>
        <div class="row agileits_mail_grids">
            <div class="col-md-7 agileits_mail_grid_left">
                <form action="pay.php" method="post" id="contactfrm" onSubmit="send_enquiry();">
                    <h4>Your Address*</h4>
                    <input type="text" name="adr" placeholder="Address..." required="" >
                    <h4>Your Pin*</h4>
                    <input type="text" name="pin" placeholder="pin..." required="" >
                    <h4>Your Phone Number*</h4>
                    <input type="text" name="number" placeholder="Phone..." required=""  id="number" pattern="[0-9]{10}">
                    <h4>Your E-mail Address*</h4>
                    <input type="email" name="email" placeholder="E-Mail ID..." required=""  id="mail">
                    <a href="pay.php"><input type="Submit" placeholder="Checkout" class="btn btn-warning" id="check"></a>

                    </form>
            </div>
            
        
        </div>
    </div>
    
</section>
		<script src="js/bootstrap.min.js"></script>

    <?php include 'footer.php';?>
</body>
</html>