<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Eat Up!-Order Details</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

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
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/cart3.jpg" data-natural-width="1400" data-natural-height="450">
    <div id="subheader">
    	<div id="sub_content" >
    	 <h1>Place your order</h1>
            <div class="bs-wizard" >
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_subdom.php" class="bs-wizard-dot"></a>
                </div>
                               
               <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Your Details</div>
                  <div class="progress" ><div class="progress-bar"></div></div>
                  <a href="cart.php" class="bs-wizard-dot" ></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Complete!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="box_style_2">
				<h2 class="inner">Order confirmed!</h2>
				<div id="confirm">
					<i class="icon_check_alt2"></i>
					<h3 style="color: rgb(221, 66, 92);"><strong>Thank you!</strong></h3>
                    <hr style="border: 0px;">
                    <hr style="border: 0px;">
					<p>
                    <?php  @$dt=date("Y-m-d");
               // date_default_timezone_set('Asia/Kolkata');
               //  @$time=date("h:i:sa");?>
                <h4> <span class="pull-right"><?php echo $dt; ?> </span> </h4>
               <!-- <h4> <span class="pull-right"><?php //echo $time; ?></span> </h4>-->

					</p>
				</div>
                <hr style="border: 0px;">
                <hr style="border: 0px;">
				<h3>Summary</h3>
                <table class="table table-striped nomargin">

                        <?php
                            @$total=0;
                            
                            @$qry="select * from tbl_cart where user_Id='".$_SESSION["user_Id"]."'";
                            @$disp=@mysqli_query($conn,$qry);
                            while($values=@mysqli_fetch_array($disp))
                            {
                            
                        ?>

            <table class="table table-striped nomargin">
				<tbody>
				<tr>
					<td>
						<strong><?php echo $values['qty'];?>x  </strong> 
                        <strong><?php echo $values['name'];?></strong>
					</td>
					<td>
						<strong class="pull-right"><?php echo $values['price'];?></strong>
					</td>
				</tr>
                
                    <?php   $total1= $values['price'] * $values['qty'] ;
                                //$total1= $disp['price']   *$qty ;
                                    $total = $total1 +$total ; } ?>
               
               </tbody>				
            </table>
            </div>          
          <div class="box_style_2" >
	<table>
                 <tr>
                   <h4><strong><span class="pull-right">Total = <?php echo $total;?></span></strong></h4>
                            </tr>
                            <tr>
                            <hr style="border: 0px;">
                            <hr style="border: 0px;">
        <a class="btn_full" href="add_admin.php?" align="center">Done</a></tr> 
        
    </table>
              
                            </div>
                  
       </div>
	</div><!-- End rowlist_page.php -->
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
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

</body>
</html>