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
<title>KDU Marathon | Term &amp; Conditions</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marathon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } 
</script>
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
</head>	
<style>
#logo
{
    height: 124px;
    width: 124px;
}
#conditions li
{
    margin: 10px 0;
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
                                    <li><a href="php/logout.php">Logout</a></li>
                                    </ul>
                               </nav>';
                        } else {
                            echo'<nav class="mobile-menu">
                              <ul>
                                <li><h3 class="text-center">Hi '.$greet.'</h3></li>
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="registration.php">Registration</a></li>
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
				<h2>Registeration</h2>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><span>«</span></li>
				<li>Term &amp; Conditions</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="w3_agile_header">Term <span>&amp; </span> Conditions</h3>
			<ol id="conditions">
				<li>
					A legally binding agreement between the event organisers, International Management Group of America Pty Limited. (“IMG”) and the intending participant (“I/me”) will be deemed to have commenced on acceptance in writing by IMG of my application to compete.
				</li>
				<li>
					Participating in the Event may involve a real risk of serious injury or even death from various causes including but not limited to over exertion, dehydration and accidents with other participants, spectators or road users. I voluntarily assume all risks associated with my participation in the Event or any activity associated with it and will take all reasonable measures to protect myself from the risks of participation. I consent to receive such medical aid or treatment that may be deemed advisable by Event medical and paramedical personnel in the event of my injury, accident and/or illness during the Event. I accept all responsibility for travel and medical insurance and for payment and/or reimbursement of medical/surgical expenses incurred by me as a result of my participation in the Event.
				</li>
				<li>
					I have sufficiently trained for the Event and to the best of my knowledge, I am not suffering from a condition, illness, injury or other physical disability or impairment that may prevent and/or render me unfit to participate in the Event. I understand that IMG may refuse to allow me to participate or continue participating in the Event if in the reasonable opinion of IMG it is necessary for my safety or the safety of others.
				</li>
				<li>
					I understand that there is a time limit in which I am required to complete the Event. I will provide evidence of my ability to complete the course in the specified time limit, if requested by IMG. If, during the conduct of the Event, an Event official directs my withdrawal because I am likely to be unable to reach the cut-off marks within the advertised time limit or complete the Event within the advertised time limit, I undertake to comply with this direction. In these circumstances I will voluntarily remove myself from the course without liability to IMG and agree to be transported to the finish area.
				</li>
				<li>
					I understand that IMG reserves the right to refuse my application to register for any of the races making up the Event at any time for capacity/field limit, safety, insurance or any other reason.
				</li>
				<li>
					I consent to identity verification checks, background security checks and any other reasonable security checks (which may include inspecting my personal property) being conducted on me prior to my entry into and departure from any official Event sites.
				</li>
				<li>
					I acknowledge that I am responsible for all property I bring to the Event and understand that IMG does not accept responsibility for any loss or damage to this property.
				</li>
				<li>
					If competing in the Marathon or Ultra Marathon race (as part of the Event), I will be 18 years or older on the Event Day. If competing in the Half Marathon race (as part of the Event), I will be 16 years or older on the Event Day. All children (under the age of 13 years on the Event Day) must be accompanied by an adult in the GOR Walk, 14km, 6km and 1.5km races (as part of the Event) on the Event Day.
				</li>
				<li>
					I undertake to comply with all applicable regulations, by laws and rules of the Australian Sports Drug Agency (ASDA) and Athletics Australia (AA) and any other relevant authority or body in relation to the Event and will comply with all reasonable directions and decisions of the officials and other representatives of ADSA, AA and IMG.
				</li>
				<li>
					I have not knowingly used any substance for the purpose of enhancing my performance at the Event and will not use any substances prohibited by the rules of AA or any other relevant authority or body. If applicable, I will check with my physician to ensure medication that I am taking is not a prohibited substance.
				</li>
			</ol>
		</div>
	</div>
<!-- //about -->
    
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