<?php 

 define('HOST','localhost');
  define('USER','root');
  define('PASS','');
  define('DB','work');

  $con = mysqli_connect(HOST,USER,PASS,DB);

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
//echo "Connected successfully";

//echo $_GET['link'];echo $_GET['lik'];

?>