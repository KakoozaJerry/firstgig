<?php 
if(isset($_POST['submit'])){
    $to = "abrahamkakooza@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission to Swan Legal";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Swan Legal</title>
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/mdb.min.css" rel="stylesheet">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128428783-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-128428783-1');
	</script>


	</head>
	<body style="background-image: url(images/people-220284_1280.jpg);">
		
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="navbar navbar-fixed-top  navbar-dark scrolling-navbar colorlib-nav">
		<div >
			<div class="container">
				<div class="row">
					<div class="col-md-1 menu-1">
						<img src="images/transcrop.png" height="350px" width="350px" class="img-responsive">
					</div>
					<div class="col-md-1 menu-1">
						<div id="colorlib-logo"><a href="index">SWAN<span>LEGAL.</span></a></div>
					</div>
					<div class="col-md-10 text-right menu-1">
						<ul>
							<li><a href="index">Home</a></li>
							<li><a href="practice">Practice Areas</a></li>
							<!-- <li><a href="won.html">Won Cases</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">menu 1</a></li>
									<li><a href="#">menu 2</a></li>
									<li><a href="#">menu 3</a></li>
									<li><a href="#">menu 4</a></li>
								</ul>
							</li> -->
							<li><a href="about">About</a></li>
							<!-- <li class="active"><a href="contact.html">Contact</a></li> -->
							<li class="btn-cta"><a href="contact"><span>Contact Us</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<!-- <aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/people-220284_1280.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">Contact Us</h2> -->
		   					<!-- <p class="colorlib-lead">Designed with love by the fine folks at <a href="#" target="_blank">Lawfirm</a></p> -->
		   				<!-- </div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside> -->
	
	<div id="colorlib-contact">
		<div class="container">
			<h3 style="padding-top: 100px;">Contact Us</h3>
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="colorlib-contact-info" style="background-color: #31486F">
						<!-- <h3>Contact Information</h3> -->
						<ul>
							<li class="address">1st Floor Kinyara Building, <br> Plot 7/9 2nd Street Industrial Area <br> P. O. Box 37126 Kampala, Uganda.</li>
							<li class="phone"><a href="#">+256-705-111-459 or +256-772-354-172</a></li>
							<li class="email"><a href="mailto:info@swanlegal.ug">info@swanlegal.ug</a></li>
							<li class="url"><a href="http://www.swanlegal.ug">swanlegal.ug</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box" style="background-color: #31486F">
					<h3>Send A Message</h3>
					<form action="" method="post">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input name="first_name" type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input name="last_name" type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input name="email" type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input name="subject" type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input name="submit" type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div class="colorlib-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.755463967088!2d32.60098762961252!3d0.3216150101254659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24b2bab8d3f2585b!2sSwan+Legal!5e0!3m2!1sen!2sug!4v1540981309595" width="1600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<!-- <div id="colorlib-consult">
		<div class="video colorlib-video" style="background-image: url(images/scalfs.jpg);" data-stellar-background-ratio="0.5">
		</div>
		<div class="choose choose-form animate-box">
			<div class="colorlib-heading">
				<h2>Free Legal Consultation</h2>
			</div>
			<form action="#">
				<div class="row form-group">
					<div class="col-md-6"> -->
						<!-- <label for="fname">First Name</label> -->
						<!-- <input type="text" id="fname" class="form-control" placeholder="Your firstname">
					</div>
					<div class="col-md-6"> -->
						<!-- <label for="lname">Last Name</label> -->
						<!-- <input type="text" id="lname" class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label for="email">Email</label>
						<input type="text" id="email" class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						 <label for="subject">Subject</label> -->
						<!-- <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12"> -->
						<!-- <label for="message">Message</label> -->
						<!-- <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div> -->


	
	<footer id="colorlib-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget">
					<img src="images/trans.png" height="150px" width="150px" class="img-responsive">
					
					<!-- <p>Ssozi, Wasolo, Alinda-Ikanza, Nagitta</p> -->
					<h3>Legal Associates & Advocates</h3>

				</div>
				

       
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="colorlib-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="practice.php">Our Practice Areas</a></li>
						<!-- <li><a href="#">Won Cases</a></li> -->
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="about.php">About Us</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="colorlib-footer-links">
						<li>1st Floor Kinyara Building,<br>
							Plot 7/9 2nd Street Industrial Area
							<br>P. O. Box 37126 Kampala, Uganda.</li>
						<li>+256-705-111-459 or +256-772-354-172</li>
						<li><a href="mailto:info@swanlegal.ug">info@swanlegal.ug</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="colorlib-footer-links">
						<li>Mon - Fri: 8:30am - 5:00pm</li>
						
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
					<small class="block">&copy; 2018 Swan Legal. All Rights Reserved. </small> 
					
					</p>
					<p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

