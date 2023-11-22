<?php 
require_once('config.php'); 

$sql = "select * from projects"; 
$res = mysqli_query($con,$sql);
$result = array();

if (isset($_POST['submit']))
{
    $fund   = $_POST['fund'];
  	//echo "fund".$fund; 
    $prst  = $_POST['prst'];
   	//echo $prst;
    $ind_app = $_POST['ind_app'];
    //echo $ind_app;
    $scl_imp    = $_POST['scl_imp'];
    //echo $scl_imp;
    $tech       = $_POST['tech'];
    //echo $tech;
    $uniq    = $_POST['uniq'];
    //echo $uniq;
    $gc    = $_POST['cmt'];

  //echo    $uniq+$tech+$scl_imp+$fund;
    
   
$sql_query = "insert into rating(fund,prst,ind_app,scl_imp,tech,uniq,comm) values('$fund','$prst','$ind_app','$scl_imp','$tech','$uniq','$gc');";
if(mysqli_query($con,$sql_query)){
	//echo "Data Insertion Successs.....";
}
else
{
	echo "Data Insertion error".mysqli_error($con);
}
 }
 
//echo json_encode(array("result"=>$result));
$saa = 'Futura' ;
mysqli_close($con);?>
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Projeccelator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">Projeccelator</a></h1>
			<!-- <a href="#nav">External Links</a> -->
			</header>

		

			<section id="banner" >
			
				<i class="icon fa-diamond"></i>
				<h2><?php echo $saa;?></h2>

				<?php echo "<h4>"."Bannari Amman Institute of Technology"."</h4>" ?>
				<?php echo "<p>"."7 , 8 , 9 SEPTEMBER 2017"."</p>" ?>
				 <ul class="actions">
					<li><a href="https://www.bitfutura.in" class="button big special">More About Event</a></li>
				</ul> 
			
			</section>

				</div>
			</section>
 
		
			 <section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Project Submission</h2>
						<p>Please fill the details</p>
					</header>
					
					<form action="" method = "POST">

 <b>Presentation:<b>
<select name="prst" size="5" type="slc" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<b>Industrial Application:<b>
<select name="ind_app" size="5" type="slc" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<b>Social Impact:<b>
<select name="scl_imp" size="5" type="slc" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<b>Technology Used:<b>
<select name="tech" size="5" type="slc" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<b>Uniqueness:<b>
<select name="uniq" size="5" type="slc" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<b>Fundability:<b>
<select name="fund" size="5" type="slc" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>

<b>General Comments<b>        
<input name="cmt"  type="text" required placeholder="Enter your general comments about this project" style="height 30px;" size="30"><br><br>

<button type ="submit" name="submit" value="send to database"> submit </button>
</form>
				</div>
			</section>
 
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>