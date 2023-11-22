<?php 
require_once('config.php'); 


session_start();

 
 
$sql1 = "select * from project order by RAND()"; 
$res1 = mysqli_query($con,$sql1);
$result1 = array();

 
//echo json_encode(array("result"=>$result));
//$saa = 'Futura' ;
mysqli_close($con);?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width,initial-scale=1" name="viewport">
<title>Projeccelator</title>
<link href="assets\css\bootstrap.min.css" rel="stylesheet">
<link href="assets\css\font-awesome.min.css" rel="stylesheet">
<link href="assets\css\ionicons.min.css" rel="stylesheet">
<link href="assets\css\magnific-popup.css" rel="stylesheet">
<link href="assets\css\owl.carousel.css" rel="stylesheet">
<link href="assets\css\owl.theme.css" rel="stylesheet">
<link href="assets\css\style.css" rel="stylesheet">
<link href="css\button.css" rel="stylesheet">
<!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
<!--[if IE]><style>.flip-container.hover .back,.flip-container:hover .back{backface-visibility:visible!important}</style><![endif]-->
<!--<div id="preloader">
	<div class="loader"><span></span>  <span></span>  <span></span>  <span></span>
	</div>
</div>-->
<div class="home-page">
	<div class="image_logo_intro introduction">
		<div class="intro-content">
			<img src="assets\img\main_logo.png" alt="" class="img-responsive center-block logo">
			<div class="social-media">
				<a href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
				<a href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
				<a href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
				<a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
				<a href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
				<a href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
				<a href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
			</div>
		</div>
	</div>
	<div class="four_nav_item menu">
		<div class="menu_button profile-btn" data-url_target="about_us">
			<div class="mask" style="background-image:url(assets/img/about.jpg)"></div>
			<div class="heading"><i class="hidden-xs ion-ios-people-outline"></i>
				<h2>About Us</h2>
			</div>
		</div>
		<div class="menu_button service-btn" data-url_target="service">
			<div class="mask" style="background-image:url(assets/img/service.jpg)"></div>
			<div class="heading"><i class="hidden-xs ion-ios-lightbulb-outline"></i>
				<h2>post Projects</h2>
			</div>
		</div>
		<div class="menu_button portfolio-btn" data-url_target="portfolio">
			<div class="mask" style="background-image:url(assets/img/portfolio.jpg)"></div>
			<div class="heading"><i class="hidden-xs ion-ios-briefcase-outline"></i>
				<h2>View Projects</h2>
			</div>
		</div>
		<div class="menu_button contact-btn" data-url_target="contact">
			<div class="mask" style="background-image:url(assets/img/contact.jpg)"></div>
			<div class="heading"><i class="hidden-xs ion-ios-email-outline"></i>
				<h2>Contact</h2>
			</div>
		</div>
	</div>
</div>
<div class="close-btn"></div>
<div class="container-fluid page profile-page" id="about_us">
	<div class="row">
		<div class="hidden-xs col-md-3 hidden-sm image-container">
			<div class="mask"></div>
			<div class="main-heading">
				<h1>About us</h1>
				
			</div>
		</div>
		<div class="col-md-9 col-sm-12 content-container">
			<div class="clearfix">
				<h2 class="small-heading">LEARN ABOUT US</h2>
				<h2 class="small-heading">Welcome to Radssoon<br>
If not now, then when?</h2>
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
						<div  class="col-md-12 col-sm-12">
							<h4 style="align-text:right;">Welcome to our Android Section
Here we have listed some of our Android Apps that are available on Google Play Store. Any one can download it from google play for free and use it. We are currently developing some exciting new Applications. We aim at developing applications that provide extreme comfort to the users.</h4> 
						</div>
											</div>
				</div>
			</div>
			<div class="clearfix">
				<h2 class="small-heading">OUR FUN FACTS</h2>
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
						<div class="col-xs-12 col-md-4 services">
							<div class="facts">
								<div class="facts-overlay"><i class="fa fa-3x fa-code"></i>
									<p class="count">19566
										<p class="text-capitalize">lines of code</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 services">
							<div class="facts">
								<div class="facts-overlay"><i class="fa fa-3x fa-coffee"></i>
									<p class="count">341
										<p class="text-capitalize">cups of coffee</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 services">
							<div class="facts">
								<div class="facts-overlay"><i class="fa fa-3x fa-cubes"></i>
									<p class="count">5
										<p class="text-capitalize">projects delivered</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix full-height">
				<h2 class="small-heading">MEET THE TEAM</h2>
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<div class="center-block team-member-box text-center">
								<img src="assets\img\user.png" class="img-responsive">
								<h4 class="text-capitalize">Sundar Balamurugan</h4>
								<p class="text-uppercase">founder and ceo</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="center-block team-member-box text-center">
								<img src="assets\img\user.png" class="img-responsive">
								<h4 class="text-capitalize">john snow</h4>
								<p class="text-uppercase">head of attorney</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="center-block team-member-box text-center">
								<img src="assets\img\user.png" class="img-responsive">
								<h4 class="text-capitalize">sansa stark</h4>
								<p class="text-uppercase">creative coder</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix footer">
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					
                        <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
						 <p style="color:white">contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp; Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>
						
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container-fluid page service-page" id="service">
	<div class="row">
		<div class="hidden-xs col-md-3 hidden-sm image-container">
			<div class="mask"></div>
			<div class="main-heading">
				<h1>post Projects</h1>
			</div>
		</div>
		<div class="col-md-9 col-sm-12 content-container">
			<div class="clearfix">
				<h2 class="small-heading">List of Projects </h2>
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					
					
					
					
					
					
				</div></div></div></div>				
								
			
			<div class="clearfix footer">
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					
                        <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
						 <p style="color:white">contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp; Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>
						
                    </div>
					</div>
				</div>
		</div>
	</div>
</div>
<div class="container-fluid page portfolio-page" id="portfolio">
	<div class="row">
		<div class="hidden-xs col-md-3 hidden-sm image-container">
			<div class="mask"></div>
			<div class="main-heading">
				<h1>View projects</h1>
			</div>
		</div>
		<div class="col-md-9 col-sm-12 content-container">
			<div class="clearfix full-height portfolio">
				<h2 class="small-heading">View projects</h2>
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="project-container">
						<div class="row">
							<div class="project-controls">
								<button class="filter" data-filter="all">All</button>
								<button class="filter" data-filter=".graphic-design">Graphic Design</button>
								<button class="filter" data-filter=".web-design">Web Designs</button>
								<button class="filter" data-filter=".app-development">App Development</button>
							</div>
							<div class="clearfix projet-items" id="projects">
								
								
							<?php
							while($row = mysqli_fetch_array($res1))
							{
								array_push($result1,array());
								echo'"	
								
								<div class=\"col-md-6 col-lg-4 col-sm-4 col-xs-6 mix graphic-design\">
									<div class=\"project\">
										<a href="" class=\"open-popup-link\">
											
											<div class=\"ovrly\"></div>
											<div class=\"img-hover\">
											<h2 class="filter">' . $row[0] . '</h2>	</div>
												<div class=\"c-table\">
													<div class=\"ct-cell\"><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class=\"mfp-hide\" id="">
									<div class=\"container\">
										<div class=\"row\">
											<div class=\"col-md-6 col-xs-12 col-md-offset-3\">
												<div class=\"popup-content\">
													<h4>' . $row[1] . '</h4>
													<p></p> 									</div>
										</div>
									</div>
					</div>"';
					}
					?>
								
								
								
								
								
			
			<div class="clearfix footer">
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					
                        <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
						 <p style="color:white">contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp; Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>
						
                    </div>
					</div>
				</div>
		</div>
	</div>
</div></div>
	</div>
</div></div></div>
<div class="container-fluid page contact-page" id="contact">
	<div class="row">
		<div class="hidden-xs col-md-3 hidden-sm image-container">
			<div class="mask"></div>
			<div class="main-heading">
				<h1>contact</h1>
			</div>
		</div>
		<div class="col-md-9 col-sm-12 content-container">
			<div class="clearfix full-height">
				<h2 class="small-heading">COME IN TOUCH</h2>
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="contact-info">
						<div class="row">
							<div class="col-md-6">
								<div class="data"><i class="fa fa-map-marker"></i>  <span>RADSSOON<br>sundar bala<br></span>
								</div>
								<div class="data"><i class="fa fa-envelope"></i>  <span>radsoon@gmail.com</span>
								</div>
								<div class="data"><i class="fa fa-phone"></i>  <span>999999999</span>
								</div>
							</div>
							
						</div>
					</div>
					<div class="contact-form">
						<div class="row">
							<form action="php/contact.php" id="contactForm" method="post">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input class="form-control" id="name" name="name" placeholder="  Name" required="">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input class="form-control" id="email" name="email" placeholder="  Email" required="" type="email">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<textarea class="form-control" id="message" name="message" placeholder="  Message" required="" rows="5" type="text"></textarea>
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<button class="btn btn-send" id="cfsubmit" type="submit">Send</button>
								</div>
								<div class="col-xs-12 col-md-8" id="contactFormResponse"></div>
							</form>
						</div>
					</div>
				</div>
			</div>						
								
								
			
			<div class="clearfix footer">
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					
                        <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
						 <p style="color:white">contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp; Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>
						
                    </div>
					</div>
				</div>
		</div>
	</div>
</div>
<script src="assets\js\jquery-2.1.3.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\modernizr.js"></script>
<script src="assets\js\jquery.easing.min.js"></script>
<script src="assets\js\jquery.mixitup.min.js"></script>
<script src="assets\js\jquery.magnific-popup.min.js"></script>
<script src="assets\js\owl.carousel.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDHROeb_V3gSyiBa4Yh8SSTKtx14kQ5wIA&callback=initMap" async="" defer=""></script>
<script src="assets\js\script.js"></script>
<script>
	function initMap(){var e={lat:40.565934,lng:-122.388118},o=new google.maps.Map(document.getElementById("map-canvas"),{zoom:14,center:e,scrollwheel:!1,mapTypeId:google.maps.MapTypeId.ROADMAP});new google.maps.Marker({position:e,map:o,title:"Boots4 Office"})}
</script>

</html>