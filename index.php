<?php 
       session_start();
       ?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>He The Men's Store</title>
        <link rel="icon" href="img/icon1.jpg" type="image/icon" sizes="20x20">
	      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!--stylesheets-->
            <link href="css/offerss.css" rel='stylesheet' type='text/css' media="all">

        <link href="css/h.css" rel='stylesheet' type='text/css' media="all">
        <link href="css/footer.css" rel='stylesheet' type='text/css' media="all">
		<link href="css/slidercss.css" rel='stylesheet' type='text/css' media="all">
					<!--<script src="js/simpleCart.min.js"></script>-->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

      <!--//stylesheets-->
     <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Serif" rel="stylesheet">
     <script src="js/jquery.easing.min.js"></script>

   </head>
   <body>
    <?php   
        if (isset($_SESSION['user'])) {
   
 } 
 else
 {
     echo $_SESSION['user'];

 }
       ?>
        
            <?php include 'header.php';?>
           
            <?php include 'slider.php';?>
            
            <?php include 'offers.php';?>

            <?php include 'footer.php';?>
        <!--js working-->
      	<script src="https://components.staticcodes.io/js/responsiveslides.min.js"></script>

    <script>
        $(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
        </script>
      <script src="js/bootstrap.min.js"></script>

        </body>
    </html>