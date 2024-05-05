<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="pizza, delivery food, fast food, continental,sandwich,sizzler,pasta,coofee,shake,tea,lasagne, take away">
    <meta name="description" content="">
    <meta name="author" content="project">
    <title>Eat Up!-WTF</title><!--kp edit-->

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">

    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic'
        rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

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
                    <a href="index.php" id="logo"> <!--edit kp---->
                        <img src="img/logo.png" width="130" height="80" alt="" data-retina="true" class="hidden-xs">

                    </a>
                </div>
                <nav class="col--md-8 col-sm-8 col-xs-8">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                            mobile</span></a>
                    <div class="main-menu" >
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
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/wtfbg.jpg" data-natural-width="1400"
        data-natural-height="470">
        <div id="subheader">
            <div id="sub_content">
                <div id="thumb"><img src="img/wtf.jpg" alt=""></div>

                <h1 style="font-family: Buxton Sketch; font-size: 50px; color:#7fbd57; font-weight: 100;">WTF Cafesta
                </h1>
                <div style="font-size :20px; color: rgb(248, 237, 86); "><em>-What The Freeze-</em></div>
                <br><br>

                <div style="font-size :15px; color: blanchedalmond;"><i class="icon_pin"></i>Shop No.7, Shefali Tower,
                    Pandit Nehru Marg, opp. St. Ann's School, Park Colony, Jamnagar, Gujarat 361008</div>
                <div style="font-size :12px; color: blanchedalmond;"><strong>Delivery charge:</strong> &#8377 89 ,
                    <strong>free over:</strong> &#8377 599.
                </div>
                <div class="rating"> Reviews : <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                        class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> </div>
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="list_page.php">Restaurants</a></li>
                <li>WTF</li>
            </ul>
           <!-- <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>-->
        </div>
    </div>
    <!-- Position -->

    <!-- Content ================================================== -->
	<div class="container margin_60_35">
		<div class="row">

			<div class="col-md-3">

            <p><a href="list_page.php" class="btn_side">Back to search <i class="icon-search-6 pull-right"></i></a></p>
				<hr style="border: 0px;">
				<a class="btn_side" href="cart_subdom.php">Open Cart<i class="icon_cart_alt pull-right"></i></a>
				<hr style="border: 0px;">

				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://0288 277 1000" class="phone">0288 277 1000</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
			</div><!-- End col-md-3 -->

		
			<div class="col-md-9">
				<div class="box_style_2" id="main_menu">
					<h2 class="inner">Menu</h2>
					<table class="table table-striped cart-list">
						<thead>
							<tr>
							<th>		</th>
								<th>
									Id
								</th>
								<th>
									Item
								</th>
								<th>
									Price
								</th>
								<th>
									Order
								</th>
							</tr>
						</thead>
				<tbody>
				<div class="dropdown dropdown-options">
						<?php 
                        @$num=0;
						$sql = "select * from tbl_item where rest_Id =9 order by item_Id asc";
						$res = @mysqli_query($conn,$sql);
						while($disp=@mysqli_fetch_array($res))
						{	@$num=$num+1;
						?>			
					<tr>
						<td><figure class="thumb_menu_list"><img src="<?php echo $disp['item_image'];?>" alt="thumb"></figure></td>
						<td> <h5><?php echo $num;?></td></h5>
						<td><h5> <?php echo $disp['item_name'];?></h5></td>
						<td><strong>&#8377 <?php echo $disp['item_price'];?></strong></td>
						<td>
						<div class="dropdown dropdown-options">
						<a href="cart-db.php?del=<?php echo $disp['item_Id']; ?>" class="add_to_basket">Add to cart</a>
						</div></td>
					</tr>
	<?php } ?>		
				</div>
			</tbody>					
			</table>			
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
		</div><!-- End row -->
</div><!-- End container -->
	<!-- End Content =============================================== -->

    <!-- Footer kp================================================== -->
    <footer>
        <div class="container">
            <div class="row">
                
                <marquee bgcolor="pink" width="97%" scrollamount="20"><!-----kp edit-->
                    <h1 style="font-family:Bernard MT; color:orange;text-align: center; font-size:60px;">Eat Up!
                    </h1>
                    <h1
                        style="font-family:Buxton Sketch; font-size:23px; font-weight:bold; color:Maroon; text-align: center;">
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
                            <p>© Eat Up!</p><!----kp edit-->
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
                    <input type="text" class="form-control form-white" placeholder="Password" id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password" id="password2">
                    <div id="pass-info" class="clearfix"></div>
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                            <label for="check_2"><span>I Agree to the <strong>Terms &amp;
                                        Conditions</strong></span></label>
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
    <script src="js/cat_nav_mobile.js"></script>
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
    </script>


</body>

</html>