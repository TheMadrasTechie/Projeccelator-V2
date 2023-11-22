<?php
require_once('config.php'); 
session_start();

$tb_nme = $_GET['ctst_nme'];

$sql = "select * from $tb_nme"; 
$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$result = array();
$log_val= "";
if (isset($_POST['submit']))
{
$pass   = $_POST['pswd'];
$judge = $_GET['judge'];
echo $pass;
$result = mysqli_query($con,'select * from mini_prjct_ssn_dtls where tb_name = $tb_name and internal ="'.$pass.'"');
    if(mysqli_num_rows($result)==1){
 if($eml=="hod@radssoon.com")
{
$_SESSION["user"] = "HOD";
}else if ($eml=="faculty@radssoon.com")
{
$_SESSION["user"] = "Faculty";

}else if ($eml=="student@radssoon.com")
{
$_SESSION["user"] = "Student";  
}

       header("Location: dashboard.php");
        
    }
    else
        $log_val = "Username or password might be wrong";


}
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
         <form action=\"result_view.php?ctst_nme=$tb_nme\" method = \"POST\">
         <button class=\"btn btn-log btn-normal\" name=\"suit\" type =\"submit\" value=\"logjudge\">View Results</button></form>
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
   <!--  <div class="col-md-12 col-sm-12 content-container">
      <div class="clearfix">
        <h2 class="small-heading"><?php echo "Students" ;?></h2>
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div class="">
          
            <div class="col-md-12 col-sm-12">
              <div class="">
              <h3>heading</h3>
                <h4>shrt  desc</h4>
                  <p>full desc</div>
            </div>
          </div>
    -->       <?php
  echo "<h2 class=\"small-heading\">List of Students</h2>
  <div class=\"row\">";
          while($row = mysqli_fetch_array($res))
          {
            array_push($result,array());
          echo "
          <form action=\"roll_no_get_projects.php?roll_no=$row[0]&ctst_name=$tb_nme\" method = \"POST\">
             
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                
                      <h4>$row[0].<br><br></h4>
                     <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" value=\"logjudge\">Judge</button></div>
    </div>     
          </form>";
          }

?>
</div>
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