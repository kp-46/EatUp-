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

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

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
					<a href="index.php" id="logo">
						<img src="img/logo.png" width="190" height="90" alt="" data-retina="true" class="hidden-xs">

					</a>
				</div>
				<nav class="col--md-8 col-sm-8 col-xs-8">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
							mobile</span></a>
					<div class="main-menu">
						<div id="header_menu">
							<img src="img/logo.png" width="190" height="80" alt="" data-retina="true">
						</div>
						<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
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
	<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/restaurant.gif"
		data-natural-width="1400" data-natural-height="650">
		<div id="subheader">
			<div id="sub_content">
				<h1 style="font-family:Bernard MT; color:orange; font-size:60px;">Choose Your Eatery</h1>
				<div style="font-family:Buxton Sketch; font-size:23px; font-weight:bold;color:#FDCDCD">Town's Best
					Eateries Wrapped Together</div>
			</div><!-- End sub_content -->
		</div><!-- End subheader -->
	</section><!-- End section -->
	<!-- End SubHeader ============================================ -->

	<div id="position">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="list_page.php">Restaurants</a></li>
			</ul>
			<!-- <a href="#0"><i class="icon-search-6"></i> Search</a>-->
		</div>
	</div><!-- Position -->

	<!--<div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div>-->
	<!-- End Map -->

	<!-- Content ================================================== -->
	<div class="container margin_60_35">
		<div class="row">


			<!--<div class="col-md-12">

				<div id="tools">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="styled-select">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="lower" onClick="index.php">Lowest ranking</option>
								<option value="higher">Highest ranking</option>
							</select>
						</div>
						</div>
						<div class="col-md-9 col-sm-9 hidden-xs">
							<a href="grid_list.php" class="bt_filters"><i class="icon-th"></i></a>
						</div>
					</div>
				</div>-->
				<!--End tools -->


				<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
				<div class="ribbon_1">
						Popular
					</div>
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="kalatit.php"><img src="img/kalatit.png" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div > 
								<h3 >Kalatit Restaurant</h3>
								<div class="type">
									<h5>Where food speaks with your delicious plate.</h5>
								</div>
								<div class="location">Nr, DSP Bunglow Rd,
									Maheswari Nagar, Kadiawad, Jamnagar, Gujarat 361008 <span class="opening">Opens at
										18:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="kalatit.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->


				<div class="strip_list wow fadeIn" data-wow-delay="0.2s">
					<div class="ribbon_1">
						Popular
					</div>
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="dominos.php"><img src="img/dominos.png" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div>
								<h3>Dominos</h3>
								<div class="type">
								<h5>	Pizzzzzzaaaa!</h5> </div>
								<div class="location">
								1D, Ground Floor & First Floor, Cross, Bedi Rd, Paras Society, Jamnagar, Gujarat 361008<span class="opening">Opens at 11:00.</span>
								</div>

								<ul>
									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="dominos.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->

				<div class="strip_list wow fadeIn" data-wow-delay="0.2s">
					<div class="ribbon_1">
						Popular
					</div>
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="teapost.php"><img src="img/teapost.jpg" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div>
								<h3>Tea Post</h3>
								<div class="type">
								<h5>	A place to talk! </h5></div>
								<div class="location">7, Main Road deep bhavan Patel Colony, Patel Colony, Jamnagar,
									Gujarat 361008<span class="opening">Opens at 11:00.</span>
								</div>

								<ul>
									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="teapost.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->

				<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="aaram.php"><img src="img/aaramlogo.png" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div>
								<h3>Aaram Hotel</h3>
								<div class="type">
								<h5>	Elegance,Style & Comfort</h5>
								</div>
								<div class="location">
									Nand Niwas , Pandit Nehru
									Marg, Jamnagar,
									Gujarat 361008 <span class="opening">Opens at 18:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="aaram.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->

				<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="aatithya.php"><img src="img/aatithya.jpg" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div>
								<h3>Aatithya Restaurant</h3>
								<div class="type">
								<h5>	Where Consistency & Quality Of Taste matters</h5>
								</div>
								<div class="location">
									Walkeshwari Nagri, b/s Aadarsh Hospital,
					Jamnagar 361008.<span class="opening">Opens at 18:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="aatithya.php
									" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->
				
				<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="celebration.php"><img src="img/celebrationn.jpg" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
								</div>
								<h3>Hotel Celebration</h3>
								<div class="type">
									<h5>Quality , comfort & food</h5>
								</div>
								<div class="location">
									Indira gandhi Marg,near GuruDwara Circle. Jamnagar. 361001.<span class="opening">Opens at 18:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="celebration.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->

				<div class="strip_list wow fadeIn" data-wow-delay="0.1s">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="subway.php"><img src="img/subway.png"></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">88 reviews</a></small>)
								</div>
								<h3>Subway</h3>
								<div class="type">
									<h5>All Kinds of Subs Available!</h5>
								</div>
								<div class="location">
								Silver Plaza, Shop No. 1, 2, 3, Street Number 7, Patel Colony, Jamnagar, Gujarat 361008<span
										class="opening">Opens at 17:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="subway.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->
				
				<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="wtf.php"><img src="img/wtf.jpg" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star"></i> (<small><a href="#0">80 reviews</a></small>)
								</div>
								<h3>WTF</h3>
								<div class="type">
								<h5>	What The Freeze</h5>
								</div>
								<div class="location">
									Shop No.7, Shefali Tower,
                    Pandit Nehru Marg, opp. St. Ann's School, Park Colony, Jamnagar, Gujarat 361008.<span class="opening">Opens at 18:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="wtf.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->

				<div class="strip_list wow fadeIn" data-wow-delay="0.3s">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<div class="desc">
								<div class="thumb_strip">
									<a href="theism.php"><img src="img/theismss.jpg" alt=""></a>
								</div>
								<div class="rating">
									<i class="icon_star voted"></i><i class="icon_star voted"></i><i
										class="icon_star voted"></i><i class="icon_star "></i><i
										class="icon_star"></i> (<small><a href="#0">89 reviews</a></small>)
								</div>
								<h3>Theism</h3>
								<div class="type">
								<h5>	Cafe</h5>
								</div>
								<div class="location">
									Viriral bagh, Palace Rd,
                    Jamnagar, Gujarat 36100.<span class="opening">Opens at 18:00.</span>
								</div>
								<ul>

									<li>Delivery<i class="icon_check_alt2 ok"></i></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="go_to">
								<div>
									<a href="theism.php" class="btn_1">View Menu</a>
								</div>
							</div>
						</div>
					</div><!-- End row-->
				</div><!-- End strip_list-->


			</div><!-- End col-md-9-->

		</div><!-- End row -->
	</div><!-- End container -->
	<!-- End Content =============================================== -->

	<!-- Footer ================================================== -->
	<footer>
		<div class="container">
			<div class="row">

				<marquee bgcolor="pink" width="97%" scrollamount="20">
					<h1 style="font-family:Bernard MT; color:orange;  text-align: center; font-size:60px;">Eat Up!</h1>
					<h1
						style="font-family:Buxton Sketch; font-size:23px; font-weight:bold;color:Maroon; text-align:center;">
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
							<p>© Eat Up!</p>
						</div>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
	</footer>
	<!-- End Footer =============================================== -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/cat_nav_mobile.js"></script>
	<script>$('#cat_nav').mobileMenu();</script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map.js"></script>
	<script src="js/infobox.js"></script>
	<script src="js/ion.rangeSlider.js"></script>
	<script>
		$(function () {
			'use strict';
			$("#range").ionRangeSlider({
				hide_min_max: true,
				keyboard: true,
				min: 0,
				max: 15,
				from: 0,
				to: 5,
				type: 'double',
				step: 1,
				prefix: "Km ",
				grid: true
			});
		});
	</script>
</body>

</html>