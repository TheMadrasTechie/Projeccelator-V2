<?php
require_once('config.php'); 

session_start();


if (isset($_POST['submit']))
{
	$no_stud = $_SESSION["no_stud"];
   


 $db_nme_lst = $_SESSION["db_name"];

  $sql_query = "CREATE TABLE $db_nme_lst (

rollno VARCHAR(30) NOT NULL PRIMARY KEY, prst VARCHAR(3) NOT NULL, ind_app VARCHAR(3) NOT NULL,
scl_imp VARCHAR(3) NOT NULL,tech_usd VARCHAR(3) NOT NULL,uniq VARCHAR(3) NOT NULL,fund VARCHAR(3) NOT NULL,mark VARCHAR(3) NOT NULL)";
if(mysqli_query($con,$sql_query)){
  
}
else
{
  
}



for ($x = 0; $x < $no_stud; $x++) {
$ee= $x+1;
$AA = "roll_no_stud".$ee;
$dd   = $_POST[$AA];
$sql_query = "insert into $db_nme_lst(rollno) values('$dd');";
if(mysqli_query($con,$sql_query)){
  
}
else
{
  
}

}

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
         <form action=\"project_session_details.php\" method = \"POST\">
         <button class=\"btn btn-log btn-normal\" name=\"suit\" type =\"submit\" value=\"logjudge\">dashboard</button></form>

                     </div>
    </div>     </div>
          
           ";?>
             <form action="exam_stud_dets.php" method = "POST">
   <div class="row">
      <h4>Internal Faculty Password:</h4>
      <h5><?php echo $_SESSION["internal_pass"] ?></h5>
      
      <h4>External Faculty Password:</h4>
     <h5><?php echo $_SESSION["external_pass"] ?></h5>
     
    </div>
   </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
