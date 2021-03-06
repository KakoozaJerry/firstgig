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

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/mdb.css">
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
	<body>
		
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="navbar navbar-fixed-top navbar-dark scrolling-navbar colorlib-nav">
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
							<li><a href="practice">Our Practice Areas</a></li>
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
							<li class="active"><a href="about">About Us</a></li>
							<!-- <li><a href="contact.php">Contact</a></li> -->
							<li class="btn-cta"><a href="contact"><span>Contact Us</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/nature-3648365.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">About Us</h2>
		   					<p class="colorlib-lead">Founded in October 2013 in Uganda, SWAN Legal has established itself as a general law practice registered in Uganda, with an edge in corporate and commercial transactional advice, Real Estate, Banking and Project Finance, Mergers and Acquisitions, Civil and Criminal Litigation.</p>
		   					<p class="colorlib-lead">
		   						We are dedicated to providing quality legal services in a cost-efficient manner. We recognize the special need for legal guidance to business enterprises, and therefore we develop strategies carefully crafted to meet the challenges of each individual case with “Result Oriented Counsel”.
		   					</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	

	<div id="colorlib-about">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
					<h2>Our Attorneys</h2>
					<p>We have top quality professionals with sterling qualifications from prestigious institutions
						and with significant practical experience.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
					<div class="colorlib-staff">
						<a data-toggle="modal" data-target="#susanModal"><img src="images/susan.jpg" alt="Template"></a>
						<h3 >Mrs. Suzan Najjuka Wasolo </h3>
						<strong class="role">ADVOCATE</strong>
						<p>LLB (Hons), MUK, Dip. L.P LDC</p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-mail"></i></a></li>
							<li><a href="#"><i class="icon-google"></i></a></li>
							<!-- <li><a href="#"><i class="icon-github"></i></a></li> -->
						</ul>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="susanModal" tabindex="-1" role="dialog" aria-labelledby="susanModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="susanModalLabel">Mrs. Suzan Najjuka Wasolo </h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<p>
						      		Mrs. Wasolo is a founding partner of SWAN Legal. She heads the Firm’s Land Transactions’ Department, and is responsible for the supervision of the Para-legal staff at the firm.
						      	</p>
						      	<p>
						      		Her areas of specialty include; Conveyance and Land Transactions, Family and Succession Law, and Estate and Property Management.
						      	</p>
						      	<p>
						      		The most Senior Advocate at the Firm, Suzan boasts of 10 years’ hands-on experience in private legal practice. She holds a Bachelor of Laws (Hons) degree of Makerere University and a Post Graduate Diploma in Legal Practice of Law Development Centre. She enrolled as an Advocate of the High Court in 2002.
						      	</p>
						      	<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-mail"></i>susannajjuka@gmail.com</a></li>
									<li><a href="#"><i class="icon-mail"></i>susan.najjuka@swanlegal.ug</a></li>
									<li><a href="#"><i class="icon-phone"></i>+256772354172</a></li>
									<li><a href="#"><i class="icon-emoji-happy"></i></a></li>
								</ul>
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
					<div class="colorlib-staff">
						<a data-toggle="modal" data-target="#nagittaModal"><img src="images/nagitta.jpg" alt="Template"></a>
						<h3>Ms. Irene Veronica Nagitta </h3>
						<strong class="role">ADVOCATE & COMMISSIONER FOR OATHS</strong>
						<p>LLB (Hons), MUK, Dip. L.P LDC</p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-mail"></i></a></li>
							<li><a href="#"><i class="icon-google"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="nagittaModal" tabindex="-1" role="dialog" aria-labelledby="nagittaModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="nagittaModalLabel">Ms. Irene Veronica Nagitta  </h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<p>
						      		Ms. Nagitta is a founding partner of SWAN Legal. She heads the Firm’s Business and Investment Department and is responsible for Quality Assurance at the firm.
						      	</p>
						      	<p>
						      		Ms. Nagitta has specialized in Commercial Law and Corporate practice from her exposure in Commercial Litigation while working as in house Lawyer at DFCU Group and later at DFCU Bank for 5 years where she rose from legal officer to manager of compliance. She further gained expertise in complex financial and commercial transactions including; Equity Finance, syndications, corporate and project finance. She has also served as an Investment legal advisor at the Uganda Investment Authority for 3 years where she gained a lot of experience in investment law and regulation in Uganda.
						      	</p>
						      	<p>
						      		Her areas of specialization are banking, finance, company law and corporate governance, and investments and conveyance transactions. She advises on business set-ups, reorganizations, intra-group services agreements. 
						      	</p>
						      	<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-mail"></i>nagittav@gmail.com</a></li>
									<li><a href="#"><i class="icon-mail"></i>irene.nagitta@swanlegal.ug</a></li>
									<li><a href="#"><i class="icon-phone"></i>+256772590459</a></li>
									<li><a href="#"><i class="icon-phone"></i>+256705111459</a></li>
									<li><a href="#"><i class="icon-emoji-happy"></i></a></li>
								</ul>
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
				
					<!-- Modal -->
				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
					<div class="colorlib-staff">
						<a data-toggle="modal" data-target="#ronaModal"><img src="images/rona.jpg" alt="Template"></a>
						<h3>Ms. Ssozi Rona </h3>
						<strong class="role">ADVOCATE</strong>
						<p>LMM (WSU), LLB (Hons) MUK, Dip L.P, LDC</p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-mail"></i></a></li>
							<li><a href="#"><i class="icon-google"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="ronaModal" tabindex="-1" role="dialog" aria-labelledby="ronaModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="ronaModalLabel">Ms. Ssozi Rona</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<p>
						      		Ms. Ssozi is a founding partner of SWAN Legal and the Managing Partner of the Firm. Rona holds a Degree from Makerere University. A Post Graduate Diploma in Legal Practice from the Law Development Centre obtained in 2007. She also holds a Master’s Degree (LLM) in Corporate and Finance Law from Wayne State University in the United States. 
						      	</p>
						      	<p>
						      		She has specialized in commercial banking and finance law, corporate finance law, business planning, Securities regulation, mergers and acquisitions, and tax law. She is a legal officer with the Federation of Uganda Employers. 
						      	</p>
						      	<p>
						      		Rona is an enrolled an Attorney and Counselor at Law in New York State, in the United States of America. Rona is an Advocate of the High Court of Uganda and a member of the Uganda Law Society, and East African Law Society.
						      	</p>
						      	<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-mail"></i></a></li>
									<li><a href="#"><i class="icon-mail"></i></a></li>
									<li><a href="#"><i class="icon-phone"></i></a></li>
									<li><a href="#"><i class="icon-phone"></i></a></li>
									<li><a href="#"><i class="icon-emoji-happy"></i></a></li>
								</ul>
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
			</div>
		<div class="row">
				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
					<div class="colorlib-staff">
						<img src="images/white.jpg" alt="Template">
						<!-- <h3>Mrs. Suzan Najjuka Wasolo </h3>
						<strong class="role">ADVOCATE</strong>
						<p>LLB (Hons), MUK, Dip. L.P LDC</p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
					<div class="colorlib-staff">
						<a data-toggle="modal" data-target="#musaModal"><img src="images/white.jpg" alt="Template"></a>
						<h3>MR. MUSA OMAR</h3>
						<strong class="role">LEGAL CLERK & COURT PROCESS SERVER</strong>
						<p>Diploma in Law, LDC, Diploma in Business Accounting</p>
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-mail"></i></a></li>
							<li><a href="#"><i class="icon-google"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="musaModal" tabindex="-1" role="dialog" aria-labelledby="musaModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="musaModalLabel">MR. MUSA OMAR</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<h4>LEGAL CLERK & COURT PROCESS SERVER</h4>
						      	<p>
						      		Mr. Omar is in charge of the firm’s corporate and land transactional clerical work. He holds a diploma in Law from the Law Development center, and is also a registered court process server with the High Court. 
						      	</p>
						      	<p>
						      		Musa also holds a diploma in business accounting from Ndejje University in Uganda.
						      	</p>
						      	
						      	<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-mail"></i></a></li>
									<li><a href="#"><i class="icon-mail"></i></a></li>
									<li><a href="#"><i class="icon-phone"></i></a></li>
									<li><a href="#"><i class="icon-phone"></i></a></li>
									<li><a href="#"><i class="icon-emoji-happy"></i></a></li>
								</ul>
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
					<div class="colorlib-staff">
						<img src="images/white.jpg" alt="Template">
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-consult">
		<div class="video colorlib-video" style="background-image: url(images/justice.jpg);" data-stellar-background-ratio="0.5">
		</div>
		<div class="choose choose-form animate-box">
			<div class="colorlib-heading">
				<h2>Free Legal Consultation</h2>
			</div>
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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

