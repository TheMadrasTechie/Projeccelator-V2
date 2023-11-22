<?php
require_once('config.php'); 

session_start();

if (isset($_POST['submit']))
{
$internal_fac_name   = $_POST['int_fn'];
$external_fac_name   = $_POST['ext_fn'];
$internal_fac_id   = $_POST['int_f_id'];
$external_fac_id   = $_POST['ext_f_id'];
$n_of_studs   = $_POST['n_of_studs'];
$dd   = $_POST['dd'];
$mm   = $_POST['mm'];
$yy   = $_POST['yy'];
$fr_hr = $_POST['fr_hr'];
$fr_min = $_POST['fr_min'];
$fr_am_pm = $_POST['fr_am_pm'];
$to_hr = $_POST['to_hr'];
$to_min = $_POST['to_min'];
$to_am_pm = $_POST['to_am_pm'];
$dpt = $_POST['dpt'];
$yr = $_POST['yr'];
$from_time = $fr_hr.":".$fr_min." ".$fr_am_pm;
$to_time = $to_hr.":".$to_min." ".$to_am_pm;
$eve_date = $dd."/".$mm."/".$yy;


$internal = md5($internal_fac_id.$from_time.$dpt);
$external = md5($external_fac_id.$to_time.$n_of_studs);

$internal_pass = substr($internal,2,6);
$external_pass  = substr($external,15,8);
$_SESSION["internal_pass"] = $internal_pass;
$_SESSION["external_pass"] = $external_pass;
$_SESSION["no_stud"] = $n_of_studs;


$db_nme_lst = str_replace(":","",str_replace("/","",str_replace(" ","",$from_time.$eve_date.$dpt.$yr)));

$_SESSION["db_name"] = $db_nme_lst;


$sql_query = "insert into mini_prjct_ssn_dtls(from_d,to_d,dpt,date,no_stud,int_fac,ext_fac,tb_nme,intrnl,extrnl,int_fac_id,ext_fac_id) values('$from_time','$to_time','$dpt','$eve_date','$n_of_studs','$internal_fac_name','$external_fac_name','$db_nme_lst','$internal_pass','$external_pass','$internal_fac_id','$external_fac_id');";
if(mysqli_query($con,$sql_query)){
	
}
else
{
	echo "Data Insertion error".mysqli_error($con);
}

}
if (isset($_POST['aa']))
{
	$no_stud = $_SESSION["no_stud"];


}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Data</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

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
  
</head>

<body>
<div class="container">
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
  <form action="student_to_contest.php" method = "POST">
   <div class="row">
      <h4>Internal Faculty Password:</h4>
      <h5><?php echo $_SESSION["internal_pass"] ?></h5>
      
      <h4>External Faculty Password:</h4>
     <h5><?php echo $_SESSION["external_pass"] ?></h5>
     
    </div>
<?php
for ($x = 0; $x < $n_of_studs; $x++) {
	$ee= $x+1;
echo "
    <div class=\"row\">
      <h4>Student ".$ee." </h4>
      <div class=\"input-group input-group-icon\">
        <input name=\"roll_no_stud".$ee."\" type=\"text\" placeholder=\"Rollno of Student\"/>
        <div class=\"input-icon\"><i class=\"fa fa-user\"></i></div>
      </div>
      </div>
     ";
}
?>


    <button name="submit" type ="post" value="reg" >Submit</button>
    
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
