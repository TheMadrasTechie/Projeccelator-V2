<?php
require_once('config.php'); 
session_start();
$prj_name = $_GET['prj_name'];

$sql = "SELECT * FROM mini_projects WHERE prj_id='$prj_name'"; 
$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$row = mysqli_fetch_array($res);


mysqli_close($con);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width,initial-scale=1" name="viewport">

 <link rel="stylesheet" href="css/modal.css"> 
  <script src="js/index1.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

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

<body>
<div>
  <div class="row">
    <div class="hidden-xs col-md-3 hidden-sm image-container">
      <div class="mask"></div>
      <div class="main-heading">
        <h1>About us</h1>
      </div>
    </div>
    <?php 
    echo "<div class=\"col-md-12 col-sm-12 content-container\">
      <div class=\"clearfix\">
        <h2 class=\"small-heading\"> $row[1]</h2>
        <div class=\"col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1\">
          <div class=\"\">
          
            <div class=\"col-md-12 col-sm-12\">
              <div class=\"row\">
                <p>$row[3]<br><br><br><br></p>
                <h5><b>Faculty Incharge: </b></h5>$row[10]</div>
                <h2 class=\"small-heading\">Technical Details</h2>
              <div class=\"row\">
                <p><b>Technology Used:</b> $row[11]<br><br></p>
                <p><b>IPR significant words:</b> $row[12]<br><br></p>
                <p><b>Uniqueness:</b> $row[13]<br><br></p>
                <p><b>Applications:</b> $row[14]<br><br></p></div>
                <h2 class=\"small-heading\">Future Works</h2>
              <div class=\"row\">
                <p><b>looking for:</b> $row[15]<br><br></p>
                <p><b>Future Works:</b> $row[16]<br><br></p></div>
                <h2 class=\"small-heading\">Funding Details</h2>
              <div class=\"row\">
                <p><b>Initial Fund:</b> $row[17]<br><br></p>
                <p><b>Total Fund:</b> $row[18]<br><br></p></div>

<h2 class=\"small-heading\">Contact Details</h2>
              <div class=\"row\">
                <p><b>Contact Mail:</b> $row[19]<br><br></p>
                <p><b>Contact Phone Number:</b> $row[20]<br><br><br><br><br><br></p>
            </div></div>
            </div>

          </div>
        </div>
      </div>
             <div class=\"clearfix full-height\">
        <h2 class=\"small-heading\">MEET THE TEAM</h2>
        <div class=\"col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1\">
          <div class=\"row\">
          ";if($row[4]!=""){echo "
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[4]<br></h4>
                <p class=\"text-uppercase\">Student</div>
            </div>";}
            if($row[5]!=""){echo "
             <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[5]<br></h4>
                <p class=\"text-uppercase\">Student</div>
            </div>";}
            if($row[6]!=""){echo "
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[6]<br></h4>
                <p class=\"text-uppercase\">Student</div>
            </div>";}
            if($row[7]!=""){echo "
             <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[7]<br></h4>
                <p class=\"text-uppercase\">Student</div>
            </div>";}
            if($row[8]!=""){echo "
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[8]<br></h4>
                <p class=\"text-uppercase\">Student</div>
            </div>";}
            if($row[9]!=""){echo "
             <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[9]<br></h4>
                <p class=\"text-uppercase\">Student</div>
            </div>";}
            if($row[10]!=""){echo "
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                <img src=\"assets\img\user.png\" class=\"img-responsive\">
                <h4 class=\"text-capitalize\">$row[10]<br></h4>
                <p class=\"text-uppercase\"><b>Faculty</b></div>
            </div>";}
            echo"
          </div>
        </div>
      </div> ";

      ?>
      
    <footer>
        <div class="col-md-6 col-md-offset-1 col-xs-6 col-xs-offset-1">
          <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-12">
              
                           <p>Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
             <p>contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp;<br>Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>

                    </div>
                </div>
            </div>
        </footer>

              
              
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<body>


</html>