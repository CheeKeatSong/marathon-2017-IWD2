<?php
session_start();

    //Check if there is active session.
if( isset($_SESSION['user_session']) )
{
	include_once 'php/conn.php';
	header("Location: index.php");

	$query = mysqli_query( $conn,"SELECT * FROM `useracc` WHERE uid=".$_SESSION['user_session']." " );
	$row  = mysqli_fetch_array($query);

	$greet  = $row['fname'];
}
else
{
	$greet = "Guest";
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KDU Marathon 2018 | About Us </title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Marathon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Registration CSS -->
<link rel="stylesheet" href="css/login.css">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<style media="screen">
#logo{
	height: 124px;
	width: 124px;
}
</style>
<body>
	<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="header">
				<div class="w3_agile_logo">
					<h1><a href="index.php"><img id="logo" src="images/logo.png" alt="logo">KDU Marathon</a></h1>
				</div>
				<div class="w3_menu">
					<div class="mobile-nav-button">
						<div class="mobile-nav-button__line"></div>
						<div class="mobile-nav-button__line"></div>
						<div class="mobile-nav-button__line"></div>
					</div>
					<!-- Nav bar -->
					<?php
					if(isset($_SESSION['user_session'])){
						echo'<nav class="mobile-menu">
						<ul>
						<li><h3 class="text-center">Hi '.$greet.'</h3></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="tracking.php">Tracking</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle w3_icons_act" data-toggle="dropdown" data-hover="Short Codes">Race Info<b class="caret"></b></a>
						<ul class="dropdown-menu agile_short_dropdown">
						<li><a href="about.php" class="w3_icon_1">General Info</a></li>
						<li><a href="fullmarathon.php" class="w3_icon_1">Full Marathon</a></li>
						<li><a href="halfmarathon.php" class="w3_icon_1">Half Marathon</a></li>
						<li><a href="10kmmarathon.php" class="w3_icon_1">10KM Marathon</a></li>
						<li><a href="5kmmarathon.php" class="w3_icon_1">Fun Run</a></li>
						</ul>
						</li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="active"><a href="php/logout.php">Logout</a></li>
						</ul>
						</nav>';
					} else {
						echo'<nav class="mobile-menu">
						<ul>
						<li><h3 class="text-center">Hi '.$greet.'</h3></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="registration.php">Registration</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle w3_icons_act" data-toggle="dropdown" data-hover="Short Codes">Race Info<b class="caret"></b></a>
						<ul class="dropdown-menu agile_short_dropdown">
						<li><a href="about.php" class="w3_icon_1">General Info</a></li>
						<li><a href="fullmarathon.php" class="w3_icon_1">Full Marathon</a></li>
						<li><a href="halfmarathon.php" class="w3_icon_1">Half Marathon</a></li>
						<li><a href="10kmmarathon.php" class="w3_icon_1">10KM Marathon</a></li>
						<li><a href="5kmmarathon.php" class="w3_icon_1">Fun Run</a></li>
						</ul>
						</li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="active"><a href="login.php">Login</a></li>
						</ul>
						</nav>';
					}
					?>
					<!-- Nav bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_banner1_info">
				<h2>Login</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><span>&laquo;</span></li>
				<li>Login</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->

	<!-- Login form -->
	<div class="container">
		<h2 class="text-center" id="title">Welcome Back</h2>
		<div class="row"  id="login-container">
			<div class="col-md-8 col-md-offset-2" id="register-form-container">
				<div id="login-error-message"></div>
				<form role="form" method="POST" action="php/login.php">
					<fieldset>
						<div class="form-group col-md-12">
							<label for="">Email</label>
							<input type="email" class="form-control" name="email" id="" placeholder="Email" required>
						</div>
						<div class="form-group col-md-12">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn" name="login">Login</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!-- //Login form -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileits_w3layouts_footer_grids">
				<div class="col-md-3 w3_agileits_footer_grid">
					<h3>About Us</h3>
					<p>KDU marathon is an international marathon that attracted 10,000 participants from 5 countries.<span>We have a 9 years history which distinguished as one of the most prestigious marathons in the world.
					</span></p>
				</div>
				<div class="col-md-3 w3_agileits_footer_grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Kontraktor U1/14, Seksyen U1, Glenpark U1, 40150 Shah Alam, Selangor, Malaysia.</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:Champion@kdu-marathon.com">Champion@kdu-marathon.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+5565 0538</li>
					</ul>
				</div>
				<!-- footer nav -->
                <div class="col-md-2 w3_agileits_footer_grid w3_agileits_footer_grid1">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="registration.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Registration</a></li>
                        <li><a href="about.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About Us</a></li>
                        <li><a href="termcondition.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>T &amp; C</a></li>	
                        <li><a href="faq.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>FAQ</a></li>
                        <li><a href="contact.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
                    </ul>
                </div>
                <!-- //footer nav -->
				<div class="col-md-4 w3_agileits_footer_grid">
					<h3>Connect With Us</h3>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="wthree_copy_right">
		<div class="container">
			<p>&copy; 2017 KDU Marathon. All rights reserved | Design by I.W.D. Team RU</p>
			<!-- Social link -->
            <div class="w3_agile_social_icons">
				<ul>
					<li><a href="https://www.facebook.com/" target="_blank" class="icon icon-cube agile_instagram"></a></li>
					<li><a href="https://www.rss.com/" target="_blank" class="icon icon-cube agile_rss"></a></li>
					<li><a href="https://www.instagram.com/?hl=en" target="_blank" class="icon icon-cube agile_instagram"></a></li>
					<li><a href="https://twitter.com/?lang=en" target="_blank" class="icon icon-cube agile_t"></a></li>
				</ul>
			</div>
            <!-- //Social link -->
		</div>
	</div>
	<!-- //footer -->
	<!-- menu -->
	<script>	
		window.onload = function(e){								
			var query = window.location.search.slice(1);
			if (query != '') {
				query = query.replace('msg=','');
				for (var i = 0; i < 10; i++) {
					query = query.replace('+',' ');
				}
				query = toTitleCase(query);
				var message = document.getElementById("login-error-message");
				message.className += "alert alert-warning";
				message.innerHTML = query;
			}
		}
		$(document).ready(function () {
			$('.mobile-nav-button').on('click', function() {
				$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
				$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");
				$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");

				$('.mobile-menu').toggleClass('mobile-menu--open');
				return false;
			});
		});
		function toTitleCase(str)
		{
			return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		}
	</script>
	<!-- //menu -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
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
		</script>
		<!-- //here ends scrolling icon -->
		<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
		<!-- //for bootstrap working -->
	</body>
	</html>
