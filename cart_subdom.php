<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
	<title>Eat Up!-Restaurant</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>Eat Up!-Resataurants</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic'
		rel='stylesheet' type='text/css'>

	<!-- BASE CSS -->
	<link href="css/base.css" rel="stylesheet">

	<!-- Radio and check inputs -->
	<link href="css/skins/square/grey.css" rel="stylesheet">
	<link href="css/ion.rangeSlider.css" rel="stylesheet">
	<link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->

 <!-- Header ================================================== -->
 <header>
		<div class="container-fluid">
			<div class="row">
				<div class="col--md-4 col-sm-4 col-xs-4">
				<!--	<a href="index.php" id="logo">
						
						<img src="img/logo.png" width="80" height="50" alt="" data-retina="true" class="hidden-xs">

					</a>-->
				</div>
				<nav class="col--md-8 col-sm-8 col-xs-8">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
							mobile</span></a>
					<div class="main-menu">
						<div id="header_menu">
							<img src="img/logo.png" width="130" height="80" alt="" data-retina="true">
						</div>
						<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
						<!--------Edit kp------->
						<ul>
						<li class="submenu"><a href="index.php"><i class="icon_house_alt " title="Home"></i></a></li>
						<li class="submenu"><a href="list_page.php">Restaurants</a></li>
                                <li class="submenu"><a href="contacts.php">Contact Us</a></li>
                                <li class="submenu"><a href="about.php">About us</a></li> 
                                <li class="submenu"><a href="faq.php">Faq</a></li>
                                
                                <li class="submenu"><a href="index_8.php">Gallery</a></li>
                                <li class="submenu"><a href="logout.php">Logout</a></li>
                                <li ><a href="cart_subdom.php" data-icon="&#xe015;" title="Cart"></a></li>
                                <li ><a href="my_orders.php" data-icon="&#xe0e6;" title="My Orders"></a></li>
						</ul>
					</div><!-- End main-menu -->
				</nav>
			</div><!-- End row -->
		</div><!-- End container -->
	</header>
	<!-- End Header =============================================== -->
	<!-- SubHeader =============================================== -->
	<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/cart2.jpg" data-natural-width="1400" data-natural-height="450">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong>Cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Your Details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.php" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Complete!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.php" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

   
<!-- Content ================================================== -->
<div class="container margin_60_35">


			<div class="col-md-12">
				<div class="box_style_2" id="main_menu">
					<h2 class="inner">CART</h2>

	                 
					
		<?php
		
function Add($message) {   
	echo "<script type ='text/JavaScript'>";  
	echo "alert('$message')";  
	echo "</script>";   
}  
@$v = $_GET['v'];
if($v=="kp")
{
	Add("Deleted successfully."); 
}	
		@$num=0;
	
	$sql = "select * from tbl_cart where user_Id='".$_SESSION["user_Id"]."'";
	$kp=@mysqli_query($conn,$sql);
	$kp2=@mysqli_query($conn,$sql);
	$show2=@mysqli_fetch_array($kp);
	@$count= count(@$show2)	;
//	if(empty($show))
if($count==0)
	{
		//echo $count;
		echo "<hr style='border: 0px;'><center><h2>Your Cart Is Empty!</h2></center><hr style='border: 0px;'>" ;
		echo "<h1 align='center' ><a class='btn_1' href='list_page.php'><i class='icon-right'></i> Add items</a>";
	} 
	else{ ?>
		
 <table class="table table-striped cart-list">
 <thead>
 <tr>
	 <th>
		 No
	 </th>
	 <th>
		  Name
	 </th>
	 <th>
		  Price
	 </th>
	 
	 <th>
		 Quantity
	 </th>


	 <th>
		 Delete
	 </th>
	 
 
 </thead>
 <tbody>


	<?php 
	while($show=mysqli_fetch_array($kp2))
	{ 	
		//	@$num=$show['id'];
		@$num=$num+1;
		//echo $num; 
	//	exit; if(@mysqli_num_rows(@$show)==0)
	
 ?>

		<tr>
		<!--<td><h4><?php// echo $show['id']; ?><br></td>-->
		<td><h4><?php echo $num; ?><br></td>
		<td><h4><?php echo $show['name']; ?><br></td>
		<td><h4><?php echo $show['price']; ?><br></td>
		<td><form action ="cart-db.php"><input type="number" id="txtqty<?php echo $show['autoId'];?>" name="txtqty<?php echo $show['autoId'];?>" value="<?php echo $show['qty']; ?>">
        &nbsp;&nbsp;&nbsp;<input type="button" onClick="addQty(<?php echo $show['autoId'];?>)" value="Add">
		<td><h4><a href="delete.php?del=<?php echo $show['autoId']; ?>">DELETE ITEM</a></td>				
	
		</tr>
	<?php }  ?>

	</table>	
	<div class="container margin_60_35" >
	 <h1 align="center">	<a href="cart2.php" class="btn_1">Place Order</a>
	 <h1 align="center" ><a class="btn_1" href="list_page.php"><i class="icon-right"></i> Add items</a>
	 <?php 
	}	
	
	?>
	
	</div>
	
				
                        	<!--<figure class="thumb_menu_list">					
					<hr>
					<a class="btn_full" href="cart.php">Order now</a>-->
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
			

		

            
		</div><!-- End row -->
</div><!-- End container -->
		
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
	 <footer>
    <div class="container">
        <div class="row">
            
	<marquee bgcolor="pink" width="100%" scrollamount="20">
	<h1 style="font-family:Bernard MT; color:orange;  thin:100; font-size:60px;">Eat Up!</h1>
            <h1 style="font-family:Buxton Sketch; font-size:23px; font-weight:bold;color:Maroon; text-	align:center;"> 
              The Taste That Rhymes With Your Cravings
            </h1>
	</marquee>

        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-instagram"></i></a></li>
                        <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>
                        Eat Up!
                    </p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->
    
<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->
    
    <!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script  src="js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<script src="js/ResizeSensor.min.js"></script>
<script src="js/theia-sticky-sidebar.min.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script>
$('#cat_nav a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top - 70
			}, 900, 'swing', function () {
				window.location.hash = target;
			});
		});
		function addQty(autoId) 
{
    var qty = $("#txtqty"+autoId).val();
    window.location.href='add-card-qty.php?autoId='+autoId+'&qty='+qty;
}

</script>
	

</body>
</html>