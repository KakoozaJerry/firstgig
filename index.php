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
	<title>Swan Legal - Result Oriented Counsel</title>
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
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
	<nav class="navbar navbar-fixed-top  navbar-dark scrolling-navbar colorlib-nav " >
		<div>
			<div class="container">
				
				<div class="row">
					<div class="col-md-1 menu-1">
						<img src="images/transcrop.png" height="350px" width="350px" class="img-responsive">
					</div>
					<div class="col-md-1 menu-1">
						<div id="colorlib-logo"><a href="index">Swan<span>Legal.</span></a></div>
					</div>
					<div class="col-md-10 text-right menu-1" >
						<ul>
							<li class="active"><a href="index">Home</a></li>
							<li><a href="practice">Our Practice Areas</a></li>
							<!-- <li><a href="won.php">Won Cases</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">menu 1</a></li>
									<li><a href="#">menu 2</a></li>
									<li><a href="#">menu 3</a></li>
									<li><a href="#">menu 4</a></li>
								</ul>
							</li> -->
							<li><a href="about">About Us</a></li>
							<!-- <li><a href="contact.php">Contact</a></li> -->
							<li class="btn-cta"><a href="contact"><span>Contact Us</span></a></li>
							<!-- <li class="btn-cta"><a href="#"><span>Sign Up</span></a></li> -->
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/animal-1868697.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h1>“Result Oriented Counsel”</h1>
									<!-- <h2>Legal Associates & Advocates</h2> -->
									<p><a class="btn btn-primary btn-lg" href="contact.php">Make An Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/dogs.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Your ultimate law &amp; legal Solution</h1>
									<!-- <h2>Visit our sites here! <a href="#" target="_blank">lawfirm.com</a></h2> -->
									<p><a class="btn btn-primary btn-lg btn-learn" href="contact.php">Make An Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/act.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Defend Your Constitutional Right with Legal Help</h1>
									<!-- <h2>Visit our sites here! <a href="#" target="_blank">lawfirm.com</a></h2> -->
									<p><a class="btn btn-primary btn-lg btn-learn" href="contact.php">Make An Appointment</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>
	<div id="intro-bg">
		<div class="container">
			<div id="colorlib-intro">
				<div class="third-col">
					<span class="icon"><i class="icon-cog"></i></span>
					<h2>Need Legal Services?</h2>
					<p> We deliver the power of “one firm” to our clients. Our Teamwork and collaboration
						across practice groups results in innovative, solution-oriented advice which ensures our
						clients’ succeed.</p>
				</div>
				<div class="third-col third-col-color">
					<span class="icon"><i class="icon-old-phone"></i></span>
					<h2>Call now +256-705-111-459 or +256-772-354-172</h2>
					<h2>Email us @ <a href="#">info@swanlegal.ug</a></h2>
					<p>1st Floor Kinyara Building,
Plot 7/9 2nd Street Industrial Area</p>
				</div>
			</div>
		</div>
	</div>

<!-- 	<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/img_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-lawyer-1"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Qualified Lawyer</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-courthouse"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Trusted Clients</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-libra"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Successful Case</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="flaticon-police-badge"></i></span>
					<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
					<span class="colorlib-counter-label">Honor &amp; Awards</span>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-content">
		<div class="video colorlib-video" style="background-image: url(images/video.jpg);">
			<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<div class="colorlib-heading">
				<h2>30 Years of experienced serving a high quality services</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
				Adoption Law 50%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
				Family Law 80%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
				Real Estate Law 70%
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
				Personal Injury Law 40%
				</div>
			</div>
		</div>
	</div> -->

	<div id="colorlib-practice">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
					<h2>Practice Area</h2>
					<p> The firm’s areas of expertise include
						but are not limited to the following</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-courthouse"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#propertyModal">Property & Real Estate Law</a></h3>
							<!-- <p>This includes Acquisitions, Disposals and Leases,Funding and Security </p> -->
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="propertyModalLabel">PROPERTY AND REAL ESTATE</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		In addition to the general corporate and commercial work that the firm practices, we also offer our clients a more specialized advisory service in commercial Conveyance (Land Transactions)/commercial Transactions <br>

									Our Property services include:-
 
						      	</p>
						      	<ul>
						      		<li>Acquisitions, Disposals and Leases</li>
						      		<li>Funding and Security Documentation and Perfection</li>
						      		<li>Commercial, Industrial and Residential Development</li>
						      	</ul>
						      	<p style="text-align: justify;">
						      		Swan Legal executes a tremendous amount of conveyancing work which is one of its largest areas of practice. We specialize in all kinds of land transactions including but not limited to; mortgages, charges, purchases, sales, leases, expropriated properties, transfers and all manner of litigation attendant thereto.  
						      	</p>
						      	
						      	<p style="text-align: justify;">
						      		We also advise foreign and local institutional investors, property developers, and surveyors and do a lot of due diligence work regarding development projects in Uganda.  We also act routinely for construction corporations, and we have acted as property and estate managers for landlords based locally and abroad.
						      	</p>
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-libra"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#litModal">Litigation</a></h3>
							<!-- <p>Banking Litigation and Enforcement of Security,Arbitrations in Building & Engineering Construction</p> -->
						</div>
					</div>
					
					</div>
									<!-- Modal -->
				<div class="modal fade" id="corpModal" tabindex="-1" role="dialog" aria-labelledby="corpModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="corpModalLabel">CORPORATE & COMMERCIAL LAW</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p>
						      		Our corporate work includes advising on mergers and acquisitions startups, joint ventures and regulatory advice. We also have the capability to handle transactional, intellectual property and regulatory advisory work. <br>

									<strong>Corporate Services</strong> include:-
 
						      	</p>
						      	<ul>
						      		<li>Mergers, Acquisitions and Disposals</li>
						      		<li>General corporate, securities and business advice</li>
						      		<li>Establishing a business in Uganda</li>
						      		<li>Corporate structuring, and regulatory advice and compliance</li>
						      	</ul>
						      	<p>
						      		<strong>Our Commercial Services</strong> include:-  
						      	</p>
						      	<ul>
						      		<li>Leasing and Finance Agreements</li>
						      		<li>Agency, Distribution and Licensing Agreements</li>
						      		<li>Service Contracts, Consultancy Agreements and related Employment matters</li>
						      		<li>Copyrights, Trademarks and other Intellectual Property matters</li>
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

				
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-folder"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#employmentModal">Employment & Labour Law</a></h3>
							<!-- <p>Advice on employment contracts, policies and procedures, remuneration and incentive systems, pension funds and social security audits.</p> -->
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="employmentModal" tabindex="-1" role="dialog" aria-labelledby="employmentModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="employmentModalLabel">EMPLOYMENT & LABOUR LAW</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		Swan Legal advises corporate and individual clients (both domestic and foreign) on employment contracts, policies and procedures, remuneration and incentive systems, pension funds and social security audits.
 
						      	</p>
						      	
						      	<p style="text-align: justify;">
						      		We prepare and review employment contracts, such as non disclosure, non-compete and confidentiality agreements, and advising on their enforceability. We offer counsel on legal issues running the range from recruitments to terminations, enforcement of post-termination obligations by former employees, non-competition covenants, protection of intellectual property, conducting investigations, compensation disputes.  
						      	</p>
						      	
						      	
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->

				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-handcuffs"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#criminalModal">Criminal Defense & Domestic Law</a></h3>
							<!-- <p>We represent both defendants and complainants on holding brief for virtually any type of criminal case in the trial</p> -->
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="criminalModal" tabindex="-1" role="dialog" aria-labelledby="criminalModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="criminalModalLabel">CRIMINAL DEFENSE</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		We represent both defendants and complainants on holding brief for virtually any type of criminal case in the trial including but not limited to;<br>
 									<strong>Domestic law</strong><br>
 									We handle matters related to Trusts and Estates including but not limited to Wills, Succession, Grants of Probate and Letters of Administration, Divorce, Judicial separation, Custody of minors, Maintenance, Management of Estates of Persons of Unsound Mind, Management of Estates of Missing Persons. 
						      	</p>
						      	
						      	<p style="text-align: justify;">
						      		We also routinely act as Executors, Trustees and Administrators of numerous estates in Uganda advising on how testator's Wills and Estates are to be handled, we arrange for valuation and collection of assets and payment of debts. Our services also include contested probate proceedings.  
						      	</p>
						      	<p style="text-align: justify;">
						      		We handle adoption proceedings particularly for foreign clients carrying out adoptions in accordance with Ugandan law. We also offer assistance with guardianship applications.

						      	</p>
						      	
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-handcuffs"></i>
						</span>
						<div class="desc">
						<h3><a data-toggle="modal" data-target="#ngoModal">NGO</a></h3>
							
						</div>
					</div>
				</div>
								<!-- Modal -->
				<div class="modal fade" id="ngoModal" tabindex="-1" role="dialog" aria-labelledby="ngoModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="ngoModalLabel">NGO (local and foreign) Registration, Governance and Compliance matters
Regulatory Investigations, Due Diligences and Legal Audits
</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		The firm routinely executes numerous instructions for Non Governmental Organizations (NGO's) both domestic and international, from their incorporation to raising financing, compliance with the legal and regulatory framework and actual monitoring of their performance and general legal work.<br>
 									We aid non profit clients in negotiating important contracts with partners and vendors of all kinds. We provide legal advice on relevant agreements and extensive experience in minimizing tax liability. We also assist with contract termination or enforce contract requirements with vendors, negotiate settlements and release of claims.
						      	</p>
						      	
						      	
						        ...
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        
						      </div>
						    </div>
						  </div>
						</div>
					<!-- Modal -->
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-padlock"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#corpModal">Corporate & Commercial Law</a></h3>
							<!-- <p>Advice on mergers and acquisitions startups, joint
								ventures.</p> -->
						</div>
					</div>
				</div>
												<!-- Modal -->
				<div class="modal fade" id="litModal" tabindex="-1" role="dialog" aria-labelledby="litModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="litModalLabel">LITIGATION</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		We have a successful record in the Courts and credibility in commercial litigation, and mediation ensuring early closure of disputes even before they are filed at the courts. 
We represent clients and have been engaged in several court cases in insolvency disputes, defective securities claims, asset finance and leasing matters.
Other areas of dispute resolutions include; commercial agreements, shareholders, company liquidations and employment disputes.

						      	</p>
						      	<ul>
						      		<li>Banking Litigation and Enforcement of Security</li>
						      		<li>Arbitrations in Building & Engineering Construction </li>
						      		<li>Negligence and other tort claims</li>
						      		<li>Commercial Debt Recovery</li>
						      		<li>Enforcing foreign judgments</li>
						      		<li>Commercial and Contractual Litigation</li>
						      		<li>Intellectual Property Litigation</li>
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
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="practice">View More <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="colorlib-started" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading colorlib-heading2">
					<h2>30 Years of Experienced in Various cases</h2>
					<p>We help people effectively fight their offenders back and successfully defend their own stand!</p>
					<p><a href="#" class="btn btn-primary btn-lg">Consultation</a></p>
				</div>
			</div>
		</div>
	</div> -->
	

<!-- 	<div id="colorlib-testimonial" class="colorlib-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2>What are the clients says</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/light-956980_1280.jpg" alt="user">
									</figure>
									<span>Jacob Kahuma, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/light-956980_1280.jpg" alt="user">
									</figure>
									<span>Ssebale Wamala, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/light-956980_1280.jpg" alt="user">
									</figure>
									<span>Wakameli Joshua, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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
						<input type="text" id="fname" class="form-control" name="first_name" placeholder="Your firstname">
					</div>
					<div class="col-md-6">
						<!-- <label for="lname">Last Name</label> -->
						<input type="text" id="lname" class="form-control" name="last_name" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<!-- <label for="email">Email</label> -->
						<input type="text" id="email" class="form-control" name="email" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<!-- <label for="subject">Subject</label> -->
						<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<!-- <label for="message">Message</label> -->
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>

	<!-- <div id="colorlib-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
					<h2>Recent Post</h2>
					<p>Some articles that may be of relevance</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="blog-featured animate-box">
						<a href="blog.html"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
						<h2><a href="blog.html">Child Abuse Cases Are Our First Priority</a></h2>
						<p class="meta"><span>Jan 5, 2017</span> | <span>3 Comments</span></p>
						<p>We have top quality professionals with sterling qualifications from prestigious institutions
							and with significant practical experience.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="blog-entry">
								<a href="blog.html" class="thumb"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
								<div class="desc">
									<h3><a href="blog.html">Family Law Is Now On Court</a></h3>
									<p class="meta"><span>Jan 5, 2017</span> | <span>3 Comments</span></p>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
								</div>
							</div>
						</div>

						<div class="col-md-12 animate-box">
							<div class="blog-entry">
								<a href="blog.html" class="thumb"><img class="img-responsive" src="images/blog-3.jpg" alt=""></a>
								<div class="desc">
									<h3><a href="blog.html">Family Law Is Now On Court</a></h3>
									<p class="meta"><span>Jan 5, 2017</span> | <span>3 Comments</span></p>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
								</div>
							</div>
						</div>

						<div class="col-md-12 animate-box">
							<div class="blog-entry">
								<a href="blog.html" class="thumb"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
								<div class="desc">
									<h3><a href="blog.html">Family Law Is Now On Court</a></h3>
									<p class="meta"><span>Jan 5, 2017</span> | <span>3 Comments</span></p>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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

