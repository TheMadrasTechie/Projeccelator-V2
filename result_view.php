<?php
require_once('config.php'); 
session_start();

$tb_nme = $_GET['ctst_nme'];

$sql = "select * from $tb_nme "; 
$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
$log_val= "";

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
  <div class="row">
    <div class="hidden-xs col-md-3 hidden-sm image-container">
      <div class="mask"></div>
      <div class="main-heading">
        <h1>About us</h1>
      </div>
    </div>

  <table align="center" border="1">
  <tr>
    <th>Roll NO</th>
    <th>Presentation</th>
    <th>Industrial Application</th>
    <th>Social Impact</th>
    <th>Technology Used</th>
    <th>Uniqueness</th>
    <th>Fundability</th>
    <th>Marks</th>
  </tr>
  

       <?php
  echo "<h2 class=\"small-heading\">List of Students</h2>
  ";

          while($row = mysqli_fetch_array($res))
          {
            array_push($result,array());
          echo "
        
             <tr>
    <td style=\"text-align:center\">$row[0]</td>
    <td style=\"text-align:center\">$row[1]</td>
    <td style=\"text-align:center\">$row[2]</td>
    <td style=\"text-align:center\">$row[3]</td>
    <td style=\"text-align:center\">$row[4]</td>
    <td style=\"text-align:center\">$row[5]</td>
    <td style=\"text-align:center\">$row[6]</td>
    <td style=\"text-align:center\">$row[7]</td>
  </tr>
  
            
                
                      
    
          ";
          }

?>
</table>
 
</div>
</div>

        
      
      <!-- <div class="clearfix full-height">
        <h2 class="small-heading">MEET THE TEAM</h2>
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