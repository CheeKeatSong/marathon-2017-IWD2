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
	<title>KDU Marathon 2018 | Home </title>
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

<style>
#logo{
	height: 124px;
	width: 124px;
}
#register-now{
	padding: 10px;
	background-color: #fff;
	color: black;
	border: solid 1px black;

	border-radius: 5px;
}

#register-now:hover{
	background-color: #5bb510;
	color: #fff;
	border-color: #fff;

	transition: background-color 0.7s ease-out;
	transition: color 0.7s ease-out;
}
#full-marathon,#half-marathon,#tenKm-marathon,#fun-run{
	color: #000;
}

.user-div{
	color: #fff;
}
</style>

</head>
<body>
<!-- banner -->
<div class="banner">
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
                    <li class="active"><a href="index.php">Home</a></li>
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
                    <li class="active"><a href="index.php">Home</a></li>
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
                    <li><a href="login.php">Login</a></li>
                    </ul>
                    </nav>';
                }
                ?>
                <!-- Nav bar -->
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agile_banner_info">
            <h3><span>finishing</span> a marathon is a state of mind that says anything is possible.</h3>
        </div>
        <div class="agileits_w3layouts_more menu__item">
            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal"><svg width="20" height="20"><circle cx="15" cy="15" r="5" fill="#95f347" /></svg>&nbsp;Learn More</a>
        </div>
        <div class="w3_agileits_social_media">
            <ul>
                <li class="agileinfo_share">Share On</li>
                <li><a href="https://www.facebook.com/" target="_blank" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://dribbble.com/" target="_blank" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="https://www.behance.net/" target="_blank" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                KDU Marathon
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="col-md-6 w3_modal_body_left">
                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="col-md-6 w3_modal_body_right">
                        <h4>The special 10<sup>th</sup> edition anniversary</h4>
                        <p>The world class international marathon will attract 10,000 participants of all ages and abilities from over 5 countries across 4 races including the KDU Full Marathon, KDU Half Marathon, KDU 10KM Marathon and KDU Fun Run.
                            <i>" If you want to run, run a mile. If you want to experience a different life, run a marathon.</i>
                        The KDU Marathon, an IAAF Gold Label Road Race, is the pinnacle of road running events in Malaysia and during its 9-year history has distinguished itself as one of the most prestigious marathons in the world.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="agileits_banner_bottom">
            <h3><span>KDU marathon is an event</span> where everyone is equal and ordinary at the starting line
                but a <i>Legend</i> is born at the finish line</h3>
                <p>On Saturday 30 June – Sunday 1 July 2018 <br>Utropolis, Glenmarie <br>One of the greatest marathon is here. What are you waiting for? Join the run now and challenge our very limit.</p>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <a href="registration.php"id="register-now">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
<!-- //banner-bottom -->
<!-- features -->
<div class="features">
    <div class="container">
        <div class="agileits_countdown">
            <h2>marathon countdown starts</h2>
            <div class="clock w3agile">
                <div class="column days">
                    <div class="timer" id="days"></div>
                    <div class="w3ls_text">DAYS</div>
                </div>

                <div class="column">
                    <div class="timer" id="hours"></div>
                    <div class="w3ls_text">HOURS</div>
                </div>

                <div class="column">
                    <div class="timer" id="minutes"></div>
                    <div class="w3ls_text">MINUTES</div>
                </div>

                <div class="column">
                    <div class="timer" id="seconds"></div>
                    <div class="w3ls_text">SECONDS</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //features -->
<!-- countdown -->
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
<!-- //countdown -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <h1>Categories</h1>
        <div class="w3ls_banner_bottom_grids">
            <ul class="cbp-ig-grid">
                <li>
                    <div class="w3_grid_effect">
                        <a href="fullmarathon.php"  id="full-marathon">
                            <span class="cbp-ig-icon w3_road"></span>
                            <h4 class="cbp-ig-title">42 KM</h4>
                            <span class="cbp-ig-category">Full Marathon</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <a href="halfmarathon.php" id="half-marathon">
                                <span class="cbp-ig-icon w3_road" ></span>
                                <h4 class="cbp-ig-title">21 KM</h4>
                                <span class="cbp-ig-category">Half Marathon</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="w3_grid_effect">
                                <a href="10kmmarathon.php"  id="tenKm-marathon">
                                    <span class="cbp-ig-icon w3_road"></span>
                                    <h4 class="cbp-ig-title">10 KM</h4>
                                    <span class="cbp-ig-category">10KM Marathon</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="w3_grid_effect" >
                                    <a href="5kmmarathon.php" id="fun-run">
                                        <span class="cbp-ig-icon w3_road"></span>
                                        <h4 class="cbp-ig-title">5KM</h4>
                                        <span class="cbp-ig-category">Fun Run</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
<!-- //banner-bottom -->

<!-- features-bottom -->
<div class="features-bottom">
    <div class="container">
        <h3 class="w3_agile_header">Quick <span>Contact</span></h3>
        <p class="agile_para">Any questions? contact us now with any of the method below!</p>
        <div class="w3l_features_bottom_grids">
            <div class="col-md-4 w3layouts_features_bottom_grid">
                <div class="w3_features_bottom_grid">
                    <div class="col-xs-4 w3_features_bottom_gridl">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-8 w3_features_bottom_gridr">
                        <h4>Email</h4>
                        <p><a href="mailto:Champion@kdu-marathon.com">Champion@kdu-marathon.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3layouts_features_bottom_grid">
                <div class="w3_features_bottom_grid">
                    <div class="col-xs-4 w3_features_bottom_gridl">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-8 w3_features_bottom_gridr">
                        <h4>Address</h4>
                        <p>Jalan Kontraktor U1/14, Seksyen U1, Glenpark U1, 40150 Shah Alam, Selangor, Malaysia.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 w3layouts_features_bottom_grid">
                <div class="w3_features_bottom_grid">
                    <div class="col-xs-4 w3_features_bottom_gridl">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-8 w3_features_bottom_gridr">
                        <h4>Phone</h4>
                        <p>+5565 0538</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //features-bottom -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileits_w3layouts_footer_grids">
            <div class="col-md-3 w3_agileits_footer_grid">
                <h3>About Us</h3>
                <p>KDU marathon is an international marathon that attracted 10,000 participants from 5 countries.<span>We have a 9 years history which distinguished as one of the most prestigious marathons in the world.</span></p>
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
            <div class="col-md-2     w3_agileits_footer_grid w3_agileits_footer_grid1">
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
                    <input type="email" placeholder="Email" id="email">
                    <input type="submit" value="Send" onclick="connectUs()">
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
    window.onload = function(e){
        var query = window.location.search.slice(1);
        if (query != '') {
            query = query.replace('msg=','');
            for (var i = 0; i < 10; i++) {
                query = query.replace('+',' ');
            }
            query = toTitleCase(query);
            alert(query);
        }
    }
    function toTitleCase(str)
    {
        return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    }
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
<!-- popup respond contact us -->
<script type="text/javascript">
    function connectUs(){
        email = document.getElementById("email");
        if( email.value == "" ){
            alert("Fields are empty");
        } else {
            alert( "Thank you for connecting with us! We will send your our latest news" );
            window.location.href = "index.php";
        }

    }
</script>
<!-- //popup respond contact us -->
</body>
</html>