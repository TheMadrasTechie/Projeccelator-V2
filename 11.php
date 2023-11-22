<?php
require_once('config.php'); 
session_start();

$tb_nme = $_GET['ctst_nme'];

$sql = "select * from $tb_nme"; 
$res = mysqli_query($con,$sql);
$result = array();

mysqli_close($con);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<h2><a href="logout.php"><?php echo "User:   ".$_SESSION["user"];?></a></h2>
<?php while($row = mysqli_fetch_array($res)){
array_push($result,
array(
));

echo"
<div class=\"container\">
  <form action=\"index.php\" method = \"POST\">
    <div class=\"row\">
    <h4><a href=\"http://www.radssoon.com/projeccelator/generic.php?prj_id=23&&nme=Voltage%20doubler\">$row[0]</a></h4>
       </div>
  
  </form>
  </div>";
}
?>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
