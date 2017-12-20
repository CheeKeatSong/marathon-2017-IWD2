<?php
    session_start();
    
    //Check if there is active session.
    if( isset($_SESSION['user_session']) )
    {
        include_once 'php/conn.php';

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
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">


<style>
#logo{
	height: 124px;
	width: 124px;
}
h5 {
  margin: 0;
  font-family: 'Nunito', sans-serif;
  font-size: 50px;
}

h6 {
  margin: 0;
  font-family: 'Nunito', sans-serif;
  font-size: 30px;
}

.box {
  color: #fff;
  padding: 2em;
  margin-bottom: 6em;
  text-align: center;
  background-color: #efefef;

}

.tweets   { background-color: rgba(0, 141, 208, 1); }
.replies  { background-color: rgba(253, 185, 51, 0.9); }
.search   { background-color: rgba(0, 181, 173, 0.9); }
.messages { background-color: rgba(210, 77, 112, 0.9); }

/* Our Grid Code */
.app-layout {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 50vh;
}

/* try to resize the screen */
@media screen and (max-width: 1024px) {
  .app-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 65vh 65vh;
  }
}

.button {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    font-family: 'Nunito', sans-serif;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 12px;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button1:hover {
    background-color: #555555;
    color: white;
}
</style>

</head>

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
                                            <li class="active"><a href="about.php" class="w3_icon_1">General Info</a></li>
                                            <li><a href="fullmarathon.php" class="w3_icon_1">Full Marathon</a></li>
                                            <li><a href="halfmarathon.php" class="w3_icon_1">Half Marathon</a></li>
                                            <li><a href="10kmmarathon.php" class="w3_icon_1">10KM Marathon</a></li>
                                            <li><a href="5kmmarathon.php" class="w3_icon_1">Fun Run</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="php/logout.php">Logout</a></li>
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
                                        <li class="active"><a href="about.php" class="w3_icon_1">General Info</a></li>
                                        <li><a href="fullmarathon.php" class="w3_icon_1">Full Marathon</a></li>
                                        <li><a href="halfmarathon.php" class="w3_icon_1">Half Marathon</a></li>
                                        <li><a href="10kmmarathon.php" class="w3_icon_1">10KM Marathon</a></li>
                                        <li><a href="5kmmarathon.php" class="w3_icon_1">Fun Run</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="login.php">Login</a></li>
                                </ul>
                           </nav>';
                        }
                    ?>
                    <!-- Nav bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_banner1_info">
				<h2>About Us</h2>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><span>&laquo;</span></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="w3_agile_header">Welcome to <span>kdu marathon</span></h3>
			<p class="w3_about_para">Celebrate the special 10th edition of the KDU Marathon and run for the good times on <br> Saturday 30
				June – Sunday 1 July 2018 on the beautiful Utropolis Glenmarie.
				<br><br>
				The world class international marathon will attract 10,000 participants of all ages and abilities from over 5 countries across 4 races including the KDU Full Marathon, KDU Half Marathon, KDU 10KM Marathon and KDU Fun Run.
				<br><br>
				The KDU Marathon, an IAAF Gold Label Road Race, is the pinnacle of road running events in Malaysia and during its 9-year history has distinguished itself as one of the most prestigious marathons in the world.</p>
		</div>
	</div>
<!-- //about -->

<!-- features -->
	<div class="features">
		<div class="container">
			<h3 class="w3_agile_header">Race <span>Category</span></h3>

			<div class='app-layout'>
			  <div class='box tweets'>
			  	<h5>42km</h5>
			  	<br>
			  	<h6>full marathon</h6>
			  	<br>
			  	<a href="fullmarathon.php"><button class="button button1">Info</button></a>
			  </div>

			  <div class='box replies'>
			  	<h5>21km</h5>
			  	<br>
			  	<h6>half marathon</h6>
			  	<br>
			  	<a href="halfmarathon.php"><button class="button button1">Info</button></a>
			  </div>

			  <div class='box search'>
			  	<h5>10km</h5>
			  	<br>
			  	<h6>10km run</h6>
			  	<br>
			  	<a href="10kmmarathon.php"><button class="button button1">Info</button></a>
			  </div>

			  <div class='box messages'>
			  	<h5>5km</h5>
			  	<br>
			  	<h6>fun run</h6>
			  	<br>
			  	<a href="5kmmarathon.php"><button class="button button1">Info</button></a>
			  </div>
			</div>
		</div>
	</div>
<!-- //features -->
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
	$(document).ready(function () {
	  $('.mobile-nav-button').on('click', function() {
	  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
	  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");
	  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");

	  $('.mobile-menu').toggleClass('mobile-menu--open');
	  return false;
	});
	});
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
