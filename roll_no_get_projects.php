<?php
require_once('config.php'); 
session_start();
$rl_no = $_GET['roll_no'];$tb_nme = $_GET['ctst_name'];
$sql = "SELECT * FROM mini_projects WHERE rl_no_1='$rl_no' OR rl_no_2='$rl_no' OR rl_no_3='$rl_no' OR rl_no_4='$rl_no' OR rl_no_5='$rl_no' OR rl_no_6='$rl_no'"; 
$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
mysqli_close($con);
?>
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
<body>
<?php echo "
          <div class =\"row\">
             
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                
                      <h4>".$_SESSION["username"]."<br><br></h4>
                      <p".$_SESSION["user"]."<br></p>
                    <form action=\"logout.php\" method = \"POST\"> <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" value=\"logjudge\">Log Out</button></form>
<form action=\"dashboard.php\" method = \"POST\">
         <button class=\"btn btn-log btn-normal\" name=\"suit\" type =\"submit\" value=\"logjudge\">dashboard</button></form>
                     </div>
    </div>     </div>
          
           ";?>
<div>
  <?php 
  echo "<h2 class=\"small-heading\">Projects by $rl_no</h2>
  <div class=\"row\">";
          while($row = mysqli_fetch_array($res))
          {
            array_push($result,array());
          echo "
          <form action=\"prjct_display.php?prj_name=$row[0]&ctst_name=$tb_nme&roll_no=$rl_no\" method = \"POST\">
            
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                     <h4>$row[1].<br><br></h4>
                     <h5>$row[2]   <br><br></h5>
                      <p>Done by:<br>$row[4]<br>$row[5]<br>$row[6]<br>$row[7]<br>$row[8]<br>$row[9]</p>
                     <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" >Judge</button></div>
    </div>     
          </form>";
          }
?>
</div>    

     <!--  <div class="clearfix full-height">
        <h2 class="small-heading">Projects </h2>
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="center-block team-member-box text-center">       
                <h4 class="text-capitalize">name</h4>
                <p class="text-uppercase">dept</div>
            </div>        
          </div>
        </div>
      </div> -->
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
