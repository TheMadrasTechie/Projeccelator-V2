<?php 
require_once('config.php'); 
session_start();
if(isset($_POST['prj_srch'])){
		$dpt = $_POST['dpt'];
$sql = "SELECT * FROM mini_projects WHERE dpt='$dpt'";

$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
}
if($_SESSION["user"] =="HOD")
{
  if(isset($_POST['faculty'])){
    $dpt = $_POST['dpt'];
$sql = "SELECT * FROM mini_prjct_ssn_dtls WHERE dpt='$dpt'";

$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
}
}else if ($_SESSION["user"]=="Faculty")
{
	if(isset($_POST['faculty'])){
		$dpt = $_POST['dpt'];
$sql = "SELECT * FROM mini_prjct_ssn_dtls WHERE dpt='$dpt'";

$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
}


}else if ($_SESSION["user"]=="Student")
{
}

if (isset($_POST['submit']))
{

$prj_name   = $_POST['prj_name'];
$sht_des   = $_POST['sht_des'];
$fll_des   = $_POST['fll_des'];
$rl_no_1   = $_POST['rl_no_1'];
$rl_no_2   = $_POST['rl_no_2'];
$rl_no_3   = $_POST['rl_no_3'];
$rl_no_4   = $_POST['rl_no_4'];
$rl_no_5   = $_POST['rl_no_5'];
$rl_no_6 = $_POST['rl_no_6'];
$fcl_inc = $_POST['fcl_inc'];
$tch_usd = $_POST['tch_usd'];
$ipr = $_POST['ipr'];
$uniq = $_POST['uniq'];
$appl = $_POST['appl'];
$dpt = $_POST['dpt'];
$lk_fr = $_POST['lk_fr'];
$ftr_wrks = $_POST['ftr_wrks'];
$int_fnd = $_POST['int_fnd'];
$tot_fnd = $_POST['tot_fnd'];
$cnt_mail = $_POST['cnt_mail'];
$ttl_fnd = $_POST['ttl_fnd'];




$sql_query = "insert into mini_projects(prj_name,sht_des,fll_des,rl_no_1,rl_no_2,rl_no_3,rl_no_4,rl_no_5,rl_no_6,fcl_inc,tch_usd,ipr,uniq,appl,lk_fr,ftr_wrks,int_fnd,tot_fnd,cnt_mail,cnt_phn,dpt) values('$prj_name','$sht_des','$fll_des','$rl_no_1','$rl_no_2','$rl_no_3','$rl_no_4','$rl_no_5','$rl_no_6','$fcl_inc','$tch_usd','$ipr','$uniq','$appl','$lk_fr','$ftr_wrks','$int_fnd','$tot_fnd','$cnt_mail','$ttl_fnd','$dpt')";
if(mysqli_query($con,$sql_query)){
 echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
}
else
{
  echo "Data Insertion error".mysqli_error($con);
}

}


 
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
<link rel="stylesheet" href="css/style.css">		

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
				<h2><?php if($_SESSION["user"]=="HOD"){echo "View Project Reports";}else{echo "About Us";} ?></h2>
			</div>
		</div>
		<div class="menu_button service-btn" data-url_target="aa">
			<div class="mask" style="background-image:url(assets/img/service.jpg)"></div>
			<div class="heading"><i class="hidden-xs ion-ios-lightbulb-outline"></i>
				<h2><?php if($_SESSION["user"]=="HOD"){echo "Declare Project Sessions";}elseif($_SESSION["user"]=="Faculty"){echo "Judge Projects";}elseif($_SESSION["user"]=="Student"){echo "Post Project";} ?></h2>
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

<div class="close-btn"> </div>

<div class="container-fluid page service-page" id="about_us">
  <div class="row">
    <div class="hidden-xs col-md-3 hidden-sm image-container">
      <div class="mask"></div>
      <div class="main-heading">
        <h1><?php if($_SESSION["user"]=="HOD"){echo "View Project Reports";}else{echo "About Us";} ?></h1>
      </div>
    </div>
    <div class="col-md-9 col-sm-12 content-container">
      <div class="clearfix">
        
        <!--
<button class="button" style="vertical-align:middle"><span>Judge </span></button>-->
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
             <?php 
             if ($_SESSION["user"]=="HOD")
{ 
  echo "<h2 class=\"small-heading\">Select the Department</h2>
<form action=\"dashboard.php#about_us\" method = \"POST\">
   <div class=\"input-group\">
          <select name =\"dpt\" required>
            <option value=\"Aeronautical Engineering\">Aeronautical Engineering</option>
  <option value=\"Agricultural Engineering\">Agricultural Engineering</option>
  <option value=\"Automobile Engineering\">Automobile Engineering</option>
  <option value=\"Biotechnology\">Biotechnology</option>
  <option value=\"Civil Engineering\">Civil Engineering</option>
  <option value=\"Computer Science and Engineering\">Computer Science and Engineering</option>
  <option value=\"Electrical and Electronics Engineering\">Electrical and Electronics Engineering</option>
  <option value=\"Electronics and Instrumentation Engineering\">Electronics and Instrumentation Engineering</option>
  <option value=\"Electronics and Communication Engineering\">Electronics and Communication Engineering</option>
  <option value=\"Fashion Technology\">Fashion Technology</option>
  <option value=\"Food Technology\">Food Technology</option>
  <option value=\"Information Technology\">Information Technology</option>
  <option value=\"Mechanical Engineering\">Mechanical Engineering</option>
  <option value=\"Mechatronics\">Mechatronics</option>  
  <option value=\"Textile Technology\">Textile Technology</option>
  <option value=\"School of Management Studies\">School of Management Studies</option>
          </select>
        
    <button class=\"btn btn-log btn-normal\" name=\"faculty\" type =\"post\" >Search</button></div>
  </form>";
  if(isset($_POST['faculty'])){
  echo "<h2 class=\"small-heading\">List of Project Sessions</h2>";
          while($row = mysqli_fetch_array($res))
          {
            array_push($result,array());
          echo "
          <form action=\"result_view.php?ctst_nme=$row[8]\" method = \"POST\">
            <div class=\"col-md-4 col-sm-12\">
              <div class=\"faq-desc-item\">
                <div class=\"text-center flip-container\">
                  <div class=\"flipper front\"><i class=\"fa fa-mobile\"></i>
                    <p>$row[3]<br><br><br><br><br><br><br></p>

                    <p><b>Internal:</b>$row[6]</p>
                    <p><b>External:</b>$row[7]</p>
                  </div>
                  <div class=\"flipper back\">
                      <h5>$row[3]</h5>
                    <p>Date:$row[4]</p><p>From time:$row[1]</p><p>To time:$row[2]</p><p>No.Of.Students:$row[5]</p> <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" value=\"logjudge\">View</button></div>

                </div>
              </div>
          </div>
          </form>";}
          }
}
?>
            <br>
            <br>
            <br>
            <br>
          </div>
          </div>
          </div>
        </div>
      </div>
    
                  
                
                
      
      <div class="clearfix footer">
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
          
             <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by 
			 <a href="http://www.radssoon.com/">Radssoon</a></p>
             <p style="color:white">contact no&nbsp;:&nbsp;+91-9677682940 </p>
            
                    </div>
          </div>
        </div>
    </div>
  </div>
</div>


<div class="container-fluid page service-page" id="aa">
	<div class="row">
		<div class="hidden-xs col-md-3 hidden-sm image-container">
			<div class="mask"></div>
			<div class="main-heading">
				<h1><?php if($_SESSION["user"]=="HOD"){echo "Declare Project Sessions";}elseif($_SESSION["user"]=="Faculty"){echo "Judge Projects";}elseif($_SESSION["user"]=="Student"){echo "Post Project";} ?></h1>
			</div>
		</div>
		<div class="col-md-9 col-sm-12 content-container">
			<div class="clearfix">
				
				<!--
<button class="button" style="vertical-align:middle"><span>Judge </span></button>-->
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					   <?php 
					   if($_SESSION["user"] =="HOD")
{
   	 	 	echo "<form action=\"exam_stud_details.php\" method = \"POST\">
  <div class=\"row\">
    <div class=\"col-half\">
        <h4>Date of the Exam:</h4>
        <div class=\"input-group\">
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"dd\" type=\"text\" placeholder=\"DD\" required/>
          </div>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"mm\" type=\"text\" placeholder=\"MM\" required/>
          </div>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"yy\" type=\"text\" placeholder=\"YYYY\" required/>
          </div>
        </div>
      </div>

      </div> 
      <div class=\"row\">
      <h4>Time of the Exam:</h4>
      <h5>From:</h5>
      <div class=\"col-third\">
      <div class=\"input-group\">
          <select name =\"fr_hr\" required>
          	<option>12</option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            
          </select>
          <select name =\"fr_min\" required>
            <option>05</option>
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            <option>35</option>
            <option>40</option>
            <option>45</option>
            <option>50</option>
            <option>55</option>
            
          </select>
          <select name =\"fr_am_pm\" required>
            <option>AM</option>
            <option>PM</option>
          </select>
        </div>
        </div>
      </div>
      <div class=\"row\">
      <h5>To:</h5>
      <div class=\"col-third\">
      <div class=\"input-group\">
          <select name =\"to_hr\" required>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <select name =\"to_min\" required>
            <option>05</option>
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            <option>35</option>
            <option>40</option>
            <option>45</option>
            <option>50</option>
            <option>55</option>
            <option>60</option>
          </select>
          <select name =\"to_am_pm\" required>
            <option>AM</option>
            <option>PM</option>
          </select>
        </div>
        </div>
      </div>
     <div class=\"row\">
      <h4>Department:</h4>
      
      <div class=\"input-group\">
          <select name =\"dpt\" required>
            <option value=\"Aeronautical Engineering\">Aeronautical Engineering</option>
  <option value=\"Agricultural Engineering\">Agricultural Engineering</option>
  <option value=\"Automobile Engineering\">Automobile Engineering</option>
  <option value=\"Biotechnology\">Biotechnology</option>
  <option value=\"Civil Engineering\">Civil Engineering</option>
  <option value=\"Computer Science and Engineering\">Computer Science and Engineering</option>
  <option value=\"Electrical and Electronics Engineering\">Electrical and Electronics Engineering</option>
  <option value=\"Electronics and Instrumentation Engineering\">Electronics and Instrumentation Engineering</option>
  <option value=\"Electronics and Communication Engineering\">Electronics and Communication Engineering</option>
  <option value=\"Fashion Technology\">Fashion Technology</option>
  <option value=\"Food Technology\">Food Technology</option>
  <option value=\"Information Technology\">Information Technology</option>
  <option value=\"Mechanical Engineering\">Mechanical Engineering</option>
  <option value=\"Mechatronics\">Mechatronics</option>  
  <option value=\"Textile Technology\">Textile Technology</option>
  <option value=\"School of Management Studies\">School of Management Studies</option>
          </select>
        </div>
        </div>
       <div class=\"row\">
      <h4>Year of Study:</h4>
      <div class=\"col-third\">
      <div class=\"input-group\">
          <select name =\"yr\" required>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
          </select>
        </div>
        </div>
      </div>
    <div class=\"row\">
      <h4>Account</h4>
      <h5>Internal</h5>
      <div  >
         <input class=\"Textbox\" name=\"int_fn\" type=\"text\" placeholder=\"Faculty Name\" required/>
        <div class=\"input-icon\"></div>
      </div>
      <div  >
         <input class=\"Textbox\" name=\"int_f_id\" type=\"text\" placeholder=\"Faculty ID\" required/>
        <div class=\"input-icon\"></div>
      </div>
     <h5>External</h5>
      <div  >
         <input class=\"Textbox\" name=\"ext_fn\" type=\"text\" placeholder=\"Faculty Name\" required/>
        <div class=\"input-icon\"></div>
      </div>
      <div  >
         <input class=\"Textbox\" name=\"ext_f_id\" type=\"text\" placeholder=\"Faculty ID\" required/>
        <div class=\"input-icon\"></div>
      </div>
    </div>
    <div class=\"row\">
      <h4>Number of Students</h4>
      <div  >
         <input class=\"Textbox\" name=\"n_of_studs\" type=\"number\" placeholder=\"number\" required/>
        <div class=\"input-icon\"></div>
      </div>
     
    </div>
   
    <div class=\"row\">
      <h4>Terms and Conditions</h4>
      <div class=\"input-group\">
        <input type=\"checkbox\" id=\"terms\"/>
        <label for=\"terms\">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"post\" value=\"reg\" >Submit</button>
    
  </form>
  ";
}else if ($_SESSION["user"]=="Faculty")
{ 
	echo "<h2 class=\"small-heading\">Select the Department</h2>
<form action=\"dashboard.php#service\" method = \"POST\">
	 <div class=\"input-group\">
          <select name =\"dpt\" required>
            <option value=\"Aeronautical Engineering\">Aeronautical Engineering</option>
  <option value=\"Agricultural Engineering\">Agricultural Engineering</option>
  <option value=\"Automobile Engineering\">Automobile Engineering</option>
  <option value=\"Biotechnology\">Biotechnology</option>
  <option value=\"Civil Engineering\">Civil Engineering</option>
  <option value=\"Computer Science and Engineering\">Computer Science and Engineering</option>
  <option value=\"Electrical and Electronics Engineering\">Electrical and Electronics Engineering</option>
  <option value=\"Electronics and Instrumentation Engineering\">Electronics and Instrumentation Engineering</option>
  <option value=\"Electronics and Communication Engineering\">Electronics and Communication Engineering</option>
  <option value=\"Fashion Technology\">Fashion Technology</option>
  <option value=\"Food Technology\">Food Technology</option>
  <option value=\"Information Technology\">Information Technology</option>
  <option value=\"Mechanical Engineering\">Mechanical Engineering</option>
  <option value=\"Mechatronics\">Mechatronics</option>  
  <option value=\"Textile Technology\">Textile Technology</option>
  <option value=\"School of Management Studies\">School of Management Studies</option>
          </select>
        
    <button class=\"btn btn-log btn-normal\" name=\"faculty\" type =\"post\" >Search</button></div>
  </form>";
	if(isset($_POST['faculty'])){
	echo "<h2 class=\"small-heading\">List of Project Sessions</h2>";
					while($row = mysqli_fetch_array($res))
					{
						array_push($result,array());
					echo "
					<form action=\"judge_type.php?ctst_nme=$row[8]\" method = \"POST\">
						<div class=\"col-md-4 col-sm-12\">
							<div class=\"faq-desc-item\">
								<div class=\"text-center flip-container\">
									<div class=\"flipper front\"><i class=\"fa fa-mobile\"></i>
										<p>$row[3]<br><br><br><br><br><br><br></p>

										<p><b>Internal:</b>$row[6]</p>
										<p><b>External:</b>$row[7]</p>
									</div>
									<div class=\"flipper back\">
								  		<h5>$row[3]</h5>
										<p>Date:$row[4]</p><p>From time:$row[1]</p><p>To time:$row[2]</p><p>No.Of.Students:$row[5]</p> <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" value=\"logjudge\">Judge</button></div>

								</div>
							</div>
					</div>
					</form>";}
					}
}else if ($_SESSION["user"]=="Student")
{
echo"<div class=\"row\"> 
<div class=\"Content\">
<form action=\"dashboard.php\" method = \"POST\">

    <div class=\"row\">
      <h4>Project Name</h4>
      
         <input class=\"Textbox\" name=\"prj_name\" type=\"text\" placeholder=\"Name of the Project\"/>
      
        </div>

        <div class=\"row\">
    <h4>Short Description</h4>

         <input class=\"Textbox\" name=\"sht_des\" type=\"text\" placeholder=\"Not more than 150 characters\"/>

        </div>

        <div class=\"row\">
        <h4>Full Description</h4>
      
         <input class=\"Textbox\" name=\"fll_des\" type=\"text\" placeholder=\"Not more than 750 characters\"/>
      
        </div>

        <div class=\"row\">
      <h4>Applications</h4>
 
         <input class=\"Textbox\" name=\"appl\" type=\"text\" placeholder=\"Uses of the Project\"/> 
      
    </div>


        

        

        <div class=\"row\">
        <h4>Roll No of Students</h4>
           <h5>Student 1:</h5>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_1\" type=\"text\" placeholder=\"Roll no\"/>
          </div>
          </div>

         <div class=\"row\">
          <h5>Student 2:</h5>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_2\" type=\"text\" placeholder=\"Roll no\"/>
          </div>
          </div>

    <div class=\"row\">
          <h5>Student 3:</h5>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_3\" type=\"text\" placeholder=\"Roll no\"/>
          </div>
          </div>

    <div class=\"row\">
          <h5>Student 4:</h5>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_4\" type=\"text\" placeholder=\"Roll no\"/>
          </div>
          </div>

    <div class=\"row\">
          <h5>Student 5:</h5>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_5\" type=\"text\" placeholder=\"Roll no\"/>
          </div>
          </div>

    <div class=\"row\">
          <h5>Student 6:</h5>
          <div class=\"col-third\">
             <input class=\"Textbox\" name=\"rl_no_6\" type=\"text\" placeholder=\"Roll no\"/>
          </div>
        </div>

<div class=\"row\">
     <h4>Faculty Incharge</h4>
 
         <input class=\"Textbox\" name=\"fcl_inc\" type=\"text\" placeholder=\"Enter the name of the Faculty\"/>
        
        </div>

        <div class=\"row\">
    <h4>Technology Used</h4>
 
         <input class=\"Textbox\" name=\"tch_usd\" type=\"text\" placeholder=\"Enter the Technology you have used\"/>
        
        </div>

        <div class=\"row\">
        <h4>IPR significant words</h4>
 
         <input class=\"Textbox\" name=\"ipr\" type=\"text\" placeholder=\"What can be used for IPR searching\"/>
        
        </div>

        <div class=\"row\">
    <h4>Uniqueness</h4>
 
         <input class=\"Textbox\" name=\"uniq\" type=\"text\" placeholder=\"Unique features\"/>
        
</div>

<div class=\"row\">
    <h4>Looking for</h4>
 
         <input class=\"Textbox\" name=\"lk_fr\" type=\"text\" placeholder=\"(eg:-funding,mentoring,guidance..)\"/>
        
</div>

<div class=\"row\">
    <h4>Future Works</h4>
 
         <input class=\"Textbox\" name=\"ftr_wrks\" type=\"text\" placeholder=\"write about your future works\"/>
        
        </div>

<div class=\"row\">
    <h3>Funding Details</h3>
<h4>Initial Funding</h4>
 
         <input class=\"Textbox\" name=\"int_fnd\" type=\"text\" placeholder=\"Amount spent on the project\"/>
        
</div>

<div class=\"row\">
<h4>Total Funding</h4>
 
         <input class=\"Textbox\" name=\"tot_fnd\" type=\"text\" placeholder=\"Total Amount required to complete the project\"/>
           
</div>

<div class=\"row\">
        <h3>Contact Details</h3>
<h4>Contact Mail ID</h4>
 
         <input class=\"Textbox\" name=\"cnt_mail\" type=\"email\" placeholder=\"Email of one student\"/>
      
</div>

<div class=\"row\">
<h4>Total Funding</h4>
 
         <input class=\"Textbox\" name=\"ttl_fnd\" type=\"number\" placeholder=\"Phone number of one student\"/>
          
    </div>

    <div class=\"row\">
    <div class=\"input-group\">
          <select name =\"dpt\" required>
            <option value=\"Aeronautical Engineering\">Aeronautical Engineering</option>
  <option value=\"Agricultural Engineering\">Agricultural Engineering</option>
  <option value=\"Automobile Engineering\">Automobile Engineering</option>
  <option value=\"Biotechnology\">Biotechnology</option>
  <option value=\"Civil Engineering\">Civil Engineering</option>
  <option value=\"Computer Science and Engineering\">Computer Science and Engineering</option>
  <option value=\"Electrical and Electronics Engineering\">Electrical and Electronics Engineering</option>
  <option value=\"Electronics and Instrumentation Engineering\">Electronics and Instrumentation Engineering</option>
  <option value=\"Electronics and Communication Engineering\">Electronics and Communication Engineering</option>
  <option value=\"Fashion Technology\">Fashion Technology</option>
  <option value=\"Food Technology\">Food Technology</option>
  <option value=\"Information Technology\">Information Technology</option>
  <option value=\"Mechanical Engineering\">Mechanical Engineering</option>
  <option value=\"Mechatronics\">Mechatronics</option>  
  <option value=\"Textile Technology\">Textile Technology</option>
  <option value=\"School of Management Studies\">School of Management Studies</option>
          </select>
          </div>
          <div>
          <br><br>
     <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"post\" value=\"reg\" >Submit</button>
  </form> </div></div>";
}
?>
						<br>
						<br>
						<br>
						<br>
					</div>
          </div>
          </div>
				</div>
			</div>
		
									
								
								
			
			
      <div class="clearfix footer">
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
          
             <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by 
			 <a href="http://www.radssoon.com/">Radssoon</a></p>
             <p style="color:white">contact no&nbsp;:&nbsp;+91-9677682940 </p>
            
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
					
				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="project-container">
						<div class="row">
							<div class="project-controls">

							<?php 
                                 echo "<h2 class=\"small-heading\">Select the Department</h2>
<form action=\"dashboard.php#portfolio\" method = \"POST\">
	 <div class=\"input-group\">
          <select name =\"dpt\" required>
            <option value=\"Aeronautical Engineering\">Aeronautical Engineering</option>
  <option value=\"Agricultural Engineering\">Agricultural Engineering</option>
  <option value=\"Automobile Engineering\">Automobile Engineering</option>
  <option value=\"Biotechnology\">Biotechnology</option>
  <option value=\"Civil Engineering\">Civil Engineering</option>
  <option value=\"Computer Science and Engineering\">Computer Science and Engineering</option>
  <option value=\"Electrical and Electronics Engineering\">Electrical and Electronics Engineering</option>
  <option value=\"Electronics and Instrumentation Engineering\">Electronics and Instrumentation Engineering</option>
  <option value=\"Electronics and Communication Engineering\">Electronics and Communication Engineering</option>
  <option value=\"Fashion Technology\">Fashion Technology</option>
  <option value=\"Food Technology\">Food Technology</option>
  <option value=\"Information Technology\">Information Technology</option>
  <option value=\"Mechanical Engineering\">Mechanical Engineering</option>
  <option value=\"Mechatronics\">Mechatronics</option>  
  <option value=\"Textile Technology\">Textile Technology</option>
  <option value=\"School of Management Studies\">School of Management Studies</option>
          </select>
        
    <button class=\"btn btn-log btn-normal\" name=\"prj_srch\" type =\"post\" >Search</button></div>
  </form>";   
  if(isset($_POST['prj_srch'])){
	echo "<h2 class=\"small-heading\">List of Project Sessions</h2>";
					while($row = mysqli_fetch_array($res))
					{
						array_push($result,array());
					echo "
					<form action=\"proj_details.php?prj_name=$row[0]\" method = \"POST\">
						<div class=\"col-md-4 col-sm-12\">
							<div class=\"faq-desc-item\">
								<div class=\"text-center flip-container\">
									<div class=\"flipper front\"><i class=\"fa fa-mobile\"></i>
										<h5><b>$row[1]</b></h5>

										<p>$row[2]</p>
										
									</div>
									<div class=\"flipper back\">
								  		<h5>$row[1]</h5>
										<p><b>Developed by:</b><br>$row[4] $row[5]<br>$row[6]  $row[7]<br>$row[8] $row[9]<br><b>Faculty:</b><br>$row[10]</p> <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" value=\"logjudge\">View</button></div>

								</div>
							</div>
					</div>
					</form>";}
					}
                                  ?>  
								
							</div>
							</div>
							</div>
							</div>
							</div>
							
								
								
							
								
								
								
								
								
			
		<div class="clearfix footer">
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
          
             <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by 
			 <a href="http://www.radssoon.com/">Radssoon</a></p>
             <p style="color:white">contact no&nbsp;:&nbsp;+91-9677682940 </p>
            
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
								<div class="data"><i class="fa fa-map-marker"></i>  <span>RADSSOON<br>sundar balamurugan<br></span>
								</div>
								<div class="data"><i class="fa fa-envelope"></i>  <span>radsoon@gmail.com</span>
								</div>
								<div class="data"><i class="fa fa-phone"></i>  <span>+91-9677682940</span>
								</div>
							</div>
							
						</div>
					</div>
				<!-- 	<div class="contact-form">
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
			</div>						 -->
								
								
			
		<div class="clearfix footer">
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
          
             <p style="color:white">Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by 
			 <a href="http://www.radssoon.com/">Radssoon</a></p>
             <p style="color:white">contact no&nbsp;:&nbsp;+91-9677682940 </p>
            
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


</html>