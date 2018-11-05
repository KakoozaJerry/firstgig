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
	<body style="background-image: url(images/nature-3648365.jpg);">
		
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="navbar navbar-fixed-top navbar-dark scrolling-navbar colorlib-nav" >
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
							<li class="active"><a href="practice">Our Practice Areas</a></li>
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
							<li><a href="about">About Us</a></li>
							<!-- <li><a href="contact.html">Contact</a></li> -->
							<li class="btn-cta"><a href="contact"><span>Contact Us</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>


	
	<div id="colorlib-practice">
		<div class="container">
			<h3 style="padding-top: 100px;">Our Practice Areas</h3>
	<div id="colorlib-practice">
		<div class="container">
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
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-handcuffs"></i>
						</span>
						<div class="desc">
						<h3><a data-toggle="modal" data-target="#ngoModal">NGO 
		</a></h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-padlock"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#corpModal">Corporate/Commercial Law</a></h3>
							<!-- <p>Advice on mergers and acquisitions startups, joint
								ventures.</p> -->
						</div>
					</div>
					
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-lawyer"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#secrModal">Company Secretarial Services</a></h3>
							<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-policeman"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#cogovModal">Corprate Governance</a></h3>
							<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-libra"></i>
						</span>
						<div class="desc">
							<h3><a data-toggle="modal" data-target="#permitModal">Work permits & Citizenship Application</a></h3>
							<!-- <p >Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p> -->
						</div>
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
						      	
						      	<p style="text-align: justify;">
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


					<!-- Modal -->
				<div class="modal fade" id="secrModal" tabindex="-1" role="dialog" aria-labelledby="secrModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="secrModalLabel">COMPANY SECRETARIAL SERVICES
</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		Swan Legal offer Business Support Services that assist our clients in registering, running and maintaining their investments and businesses seamlessly in Uganda.
Our Company Secretarial Services range from incorporation of a company (both local and foreign) to winding up of a company, arranging and minuting of all Board and Shareholder’s meetings, filing of all company records at the Uganda Registration Services Bureau (URSB) on a timely basis, retaining and maintaining all statutory books and registers; and where required operating as our client’s registered offices in the country.

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
					<!-- Modal -->
				<div class="modal fade" id="cogovModal" tabindex="-1" role="dialog" aria-labelledby="cogovModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="cogovModalLabel">COMPANY SECRETARIAL SERVICES
</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		We manage internal corporate issues and handle Board Affairs, assist in-house counsel and board committees to identify problems and ensure compliance to mitigate litigation costs and risks.
Strong governance systems are critical for a strong modern business enterprise and cannot be over emphasized. We offer governance services targeted at enabling our clients put in place governance systems that are appropriate for their unique business environments. Our governance services include: the conduct of governance audits; advisory on board structures and procedures including development of Committee Terms of Reference and Board Manuals; and advisory on company law issues.


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


					<!-- Modal -->
				<div class="modal fade" id="permitModal" tabindex="-1" role="dialog" aria-labelledby="permitModal" aria-hidden="true">
						  <div class="modal-dialog modal-fluid" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="permitModalLabel">WORK PERMITS/ CITIZENSHIP APPLICATIONS
</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						      	<p style="text-align: justify;">
						      		We handle all aspects of obtaining work permits for expatriates normally employed by our clients and any appeals if necessary. We also procure dependent passes, student passes, and special passes for our international clients and their dependents.

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
		</div>
	</div
		</div>
	</div>

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
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
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
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
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
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
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

