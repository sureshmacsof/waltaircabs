<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Waltair Cabs - Safety and Comfortable Travel is the Promise of Waltair Cabs" />
	<meta name="description" content="Waltair Cabs - Well maintained vehicles and licensed drivers are the strong part of Wlatair Cabs">
	<meta name="author" content="waltaircabs.com">
	
	<title>Waltair Cabs | Home</title>
	
	<link rel="stylesheet" href="css/styler.css" />
	<link rel="stylesheet" href="css/theme-pink.css" id="template-color" />
	<link rel="stylesheet" href="ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/icons.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/fontawesome.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/latest/normalize.css" />
	
	 <script src="ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		 $(function () {
			 
			 $("#return_show").hide();
			 
		   $("input[name='radio']").click(function () {
					if ($("#return").is(":checked")) {
					   
						  $("#return_show").show(); 
					} else {
					   $("#return_show").hide();
					}
				});
		 });		
 
  </script>
	
    <script type="text/javascript" src="admin/js/validation.js"></script> 
	<script type="text/javascript" src="admin/js/alertify.min.js"></script> 
	<link rel="stylesheet" href="admin/js/alertify.core2.css">
	<link rel="stylesheet" href="admin/js/alertify.default.css">
	
  </head>
  
  <body class="home">
		<!-- Preloader -->
		<div class="preloader">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG"></div>
				<div id="followingBallsG_2" class="followingBallsG"></div>
				<div id="followingBallsG_3" class="followingBallsG"></div>
				<div id="followingBallsG_4" class="followingBallsG"></div>
			</div>
		</div>
		<!-- //Preloader -->
		
		<!-- Header -->
		<header class="header" role="banner">
			<div class="wrap">
				<!-- Logo -->
				<div class="logo">
					<a href="index" title="Transfers"><img src="images/transfers.jpg" alt="Transfers" /></a>
				</div>
				<!-- //Logo -->
				
				<!-- Main Nav -->
				<nav role="navigation" class="main-nav">
					<ul>
						<li class="active"><a href="index" title="">Home</a></li>
						<li><a href="about" title="">About Us</a></li>
						<li><a href="tariff" title="">Waltair Cabs Tariff</a></li>
						<li><a href="destinations" title="Destinations">Destinations</a>
							
						</li>
						<li><a href="contact" title="Contact">Contact</a></li>
						<li><a href="app" title="Contact">Get App</a></li>
					</ul>
				</nav>
				<!-- //Main Nav -->
			</div>
		</header>
		<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Intro -->
		<div class="intro" style="margin-top: -160px;">
			<div class="wrap">
				<div class="textwidget">
				<img src="apps/images/icon.png" alt="Transport">
					<h1 class="wow fadeInDown" style="color:#4cfc2f;font-weight: bold;font-family: San Francisco,BlinkMacSystemFont,-apple-system,system-ui;"><span style="color: #fff;">W</span>altair <span style="color: #fff;">C</span>abs</h1>
					<h2 class="wow fadeInUp" style="color: #fff;font-weight: bold;font-family: San Francisco,BlinkMacSystemFont,-apple-system;">Our City - Our Cabs</h2>
					<div class="actions"  style="margin-bottom: 25px;margin-top: -10px;">
						<a href="#services" title="Our services" class="btn large white wow fadeInLeft anchor">Our services</a>
						<a href="#booking" title="Make a booking" class="btn large color wow fadeInRight anchor">Make a booking</a>
					</div>
					<marquee direction="right" scrollamount="30" style="margin-top: -40px;"><img src="images/uploads/Car.png" alt="car"   style="width: 350px;height: 165px;" /></marquee>
				</div>
			</div>
		</div>
		<!-- //Intro -->
		
		<!-- Search -->
		<div class="advanced-search color" id="booking"  style="background-color: #031e53;">
			<div class="wrap">
			 
			 
			 
			 <form role="form" name="tripForm" action="admin/bookNow" method="post" onsubmit="return confirm('Please Check The Details, After Submition You Can not Modify It?');">
			 
			    <div class="row">
				       <div class="col-md-3">
						 <div class="form-group  one-third">
							<label>Name Of The Customer</label>
							<input type="text"  placeholder="Enter Name Of The Customer" name="name" />
						 </div>
						</div>
					 <div class="col-md-3">
						<div class="form-group  one-third">
							<label>Customer Mobile Number</label>
							<input type="text"   placeholder="Enter Customer Mobile Number"  name="mobile">
						</div>
					 </div>
					 
					 <div class="col-md-3">
						<div class="form-group  one-third">
							<label>Customer Email Id</label>
							<input type="email" placeholder="Enter Customer Email Id" name="email">
						</div>
					 </div>
				</div>
				
				
				
				
				<div class="row" style="display: block;">
				    <div class="col-md-3">
						<div class="form-group  one-third">
							<label for="dep-date">Departure date and time</label>
							<input type="text" id="dep-date" placeholder="Enter Date & Time" name="dep_date" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group  one-third">
							<label>Pick up location</label>
							<input type="text"   placeholder="Enter Pick up location" name="dep_Pick_location">
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group  one-third">
							<label>Drop off location</label>
							<input type="text" placeholder="Enter Drop off location" name="dep_Drop_location">
						</div>
					</div>
				</div>
				
				
				<div class="row" id="return_show">
					<div class="col-md-3">	
						<div class="form-group datepicker one-third">
							<label for="ret-date">Return date and time</label>
							<input type="text" id="ret-date"  placeholder="Enter Return Date & Time" name="ret_date" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group select one-third">
							<label>Pick up location</label>
							<input type="text" placeholder="Enter Pick up location" name="ret_Pick_location">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group select one-third">
							<label>Drop off location</label>
							<input type="text" placeholder="Enter Drop off location" name="ret_Drop_location">
						</div>
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-3">	
						<div class="form-group spinner" style="margin-left: 15px;">
							<label for="people">How many people <small>(including children)</small>?</label>
							<input type="number" id="people" min="1"  name="people" placeholder="1" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group radios">
							<div>
								<input type="radio" name="radio" id="return" value="return" />
								<label for="return">Return</label>
							</div>
							<div>
								<input type="radio" name="radio" id="oneway" value="oneway" checked />
								<label for="oneway">One way</label>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group right" style="margin-right: 15px;">
							<button type="submit" name="submit" class="btn large green" onclick='return validateTrip()'>Book Now</button>
						</div>
					</div>
				</div>
			 
			 </form>
			
			  
				
			
			</div>
		</div>
		<!-- //Search -->
		
		<!-- Services iconic -->
		<div class="services iconic white">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
						<h3>Fixed rates</h3>
						<p  style="text-align: justify;">MINI Rs 9 For 1 KM Hourly Package Rs 140 /Hr for 10 KM.10% discounts for our constant clients</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
						<h3>Reliable transfers</h3>
						<p  style="text-align: justify;">The GPS(Global Positiong system) will enable our cabs to provide timely service by giving an accurate estimated time of arrival (ETA).</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
						<h3>No booking fees</h3>
						<p  style="text-align: justify;"> See all expenses involved in your trip upfront before booking your cab. Economical and transparent pricing is our assurance to you.</p>
					</div>
					<!-- //Item -->
					
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_call"></span></span>
						<h3>24/7 customer service</h3>
						<!--<p  style="text-align: justify;">Travel some distance between one place to another place of work on a regular basis. Journey across town. Early morning flight. Late night journey's. Wherever you’re headed, count on WC for a ride—no reservations required.</p>-->
						<p  style="text-align: justify;">
						A dedicated 24x7 customer support team always at your service to help solve any problem
						</p>
					</div>
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
						<h3>Quality vehicles</h3>
						<p  style="text-align: justify;">Our cars are audited for cleanliness, safety and comfort. Our drivers are well trained and reliable. Sit back and enjoy the WC experience!</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
						<h3>Safe & Comfortable</h3>
						<p  style="text-align: justify;">Safety and comfortable travel is the promise of Waltair cabs. Our professional service providers are giving the ultimate service to satisfy our customers..</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
						<h3>Cancellation Fee</h3>
						<p  style="text-align: justify;">You may be charged a cancellation fee if a booking request is cancelled 5 minutes or later after driver accepts the booking request or if driver has already arrived at the pickup location.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".3s">
						<span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
						<h3>Booking flexibility</h3>
						<p  style="text-align: justify;">Travel some distance between one place to another place of work on a regular basis. Journey across town. Wherever you’re headed,count on WC for a ride—no reservations required.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
						<h3>Low-cost to Ride</h3>
						<p  style="text-align: justify;">To exceed customer expectations by providing high-quality and reliable services at every level. To serve you better, we are constantly innovating and upgrading our service to offer you.</p>
					</div>
					<!-- //Item -->
					
					
					
					
				</div>
			</div>
		</div>
		<!-- //Services iconic -->
		
		
		<!-- Services -->
		<div class="services boxed white" id="services">
			<!-- Item -->
			<article class="one-fourth wow fadeIn">
				<figure class="featured-image">
					<img src="images/uploads/img.jpg" alt="" />
					<div class="overlay">
						
					</div>
				</figure>
				<div class="details">
					<h4><a>TOURISM PACKAGES</a></h4>
					<p style="text-align: justify;">WC has been offering best deals on tour packages, Book holidays in vizag,a wide range of vacation package and explore all exciting tourist,WC will provide you with full joyfull experiences that you will love to treasure with your friends and family in joyful time.</p>
					
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".2s">
				<figure class="featured-image">
					<img src="images/uploads/img4.jpg" alt="" />
					<div class="overlay">
						
					</div>
				</figure>
				<div class="details">
					<h4><a>LOCAL PACKAGES</a></h4>
					<p style="text-align: justify;">WC has been offering Local-Full day cab services,You can avail great cab packages for your local cab service booking,Tourist visiting Vizag tourism prefer to hire full day cab as it is convenient to hire this kind of package it .</p>
				
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".4s">
				<figure class="featured-image">
					<img src="images/uploads/img2.jpg" alt="" />
					<div class="overlay">
						
					</div>
				</figure>
				<div class="details">
					<h4><a>PICK AND DROP </a></h4>
					<p style="text-align: justify;">WC  providing  best Pick & Drop cabs service to the customers, our cab service is available on rental for one way or as per the demand of the customers, You can choose our services according your office timing.</p>
					
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".6s">
				<figure class="featured-image">
					<img src="images/uploads/img3.jpg" alt="" />
					<div class="overlay">
						
					</div>
				</figure>
				<div class="details">
					<h4><a>PILGRIM PACKAGES</a></h4>
					<p style="text-align: justify;">WC has been providing Explore best deals on Pilgrimage vacation packages at lowest prices,Travel to religious places,temples,we offer meticulously crafted pilgrimage tour packages to the devotees.</p>
					
				</div>
			</article>
			<!-- //Item -->			
		</div>
		<!-- //Services -->
		
		<!-- Testimonials -->
	<!--	<div class="testimonials center black">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, this theme is outstanding!</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-John Doe, themeforest</p>
			</div>
		</div>
		<!-- //Testimonials -->
		
	<!--	<div class="partners white center">
			<div class="wrap">
				<h2 class="wow fadeIn">Our partners</h2>
				<div class="one-fifth wow fadeIn"><a href="#"><img src="images/uploads/logo1.jpg" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".2s"><a href="#"><img src="images/uploads/logo2.jpg" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".4s"><a href="#"><img src="images/uploads/logo3.jpg" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".6s"><a href="#"><img src="images/uploads/logo4.jpg" alt="" /></a></div>
				<div class="one-fifth" data-wow-delay=".8s"><a href="#"><img src="images/uploads/logo5.jpg" alt="" /></a></div>
			</div>
		</div> -->
		
		
		
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	<footer class="footer blue" role="contentinfo">
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>About us</h6>
					<p>Waltair cabs can guarantee the best convenience to all Customers. Waltair Cabs will do our very best for your comfortable and pleasant ride. You can get a special care by taxi drivers before, during, and after their ride. Whether go, so give us a try!Today Waltair Cabs offers its truly world-class services in entire Visakhapatnam.</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="icon icon-themeenergy_call"></span> 0891 65 888 65</p>
					<p class="contact-data" style="margin-left: -30px; "><i style="color: #cc2262;" class="fa fa-mobile fa-2x"  aria-hidden="true" ></i> <span style="margin-top:-10px;">+91 79955 94444</span></p>
					<p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:help@transfers.com">info@waltaircabs.com</a></p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Follow us</h6>
					<ul class="social">
						<li><a href="https://www.facebook.com/waltair.cabs" title="facebook" target="_blank" style="background-color: #3b5998;"><i class="fa fa-fw fa-facebook"></i></a></li>
						<li><a href="http://twitter.com/"  title="twitter" target="_blank" style="background-color:#1ea1f3;"><i class="fa fa-fw fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/u/0/103219262745042110849" title="gplus" target="_blank" style="background-color:#de4e43;"><i class="fa fa-fw fa-google-plus"></i></a></li>
						<li><a href="https://www.linkedin.com/in/wcab-vizag-581a76149/" title="linkedin" target="_blank" style="background-color:#007ab5;"><i class="fa fa-fw fa-linkedin"></i></a></li>
						
					</ul>
				</article>
				<!-- //Column -->
			</div>
			
			<div class="copy">
				<p>Copyright 2016 | All rights reserved. <a href="http://macsof.in/" target="_blank"> Macsof Technologies.</a> </p>
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="about" title="About us">About us</a></li>
						<li><a href="contact" title="Contact us">Contact us</a></li>
						<li><a href="terms" title="Terms of use">Terms of use</a></li>
						<li><a href="#" title="Help">Help</a></li>
						
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	
	 <!-- jQuery -->
   
	<script src="ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="js/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery-ui-sliderAccess.js"></script>
	<script src="js/search.js"></script>
	<script src="js/scripts.js"></script>
	
	<!--
	
	 -->
	
	
  </body>

</html>