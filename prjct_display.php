<?php
require_once('config.php'); 
session_start();
$prj_name = $_GET['prj_name'];
$tb_name = $_GET['ctst_name'];$rl_no = $_GET['roll_no'];
$sql = "SELECT * FROM mini_projects WHERE prj_id='$prj_name'"; 
$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$row = mysqli_fetch_array($res);


if (isset($_POST['judge']))

{
  
  
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
      $fund   = $_POST['fund'];
    //echo "fund".$fund; 

$tot =((($prst+$ind_app+$scl_imp+$tech+$uniq+$fund)/60)*50);

   $cmt    = $_POST['cmt'];

  
    
   
$sql_query = "UPDATE $tb_name
SET prst = '$prst', ind_app= '$ind_app', scl_imp = '$scl_imp', tech_usd= '$tech', uniq = '$uniq', fund= '$fund', prst = '$prst', mark = '$tot'
WHERE rollno = '$rl_no';";

if(mysqli_query($con,$sql_query)){
  
  
  
}
else
{
  echo "Data Insertion error".mysqli_error($con);
}

$sql_query_1 = "UPDATE mini_projects
SET cmt = '$cmt'
WHERE rl_no_1='$rl_no' OR rl_no_2='$rl_no' OR rl_no_3='$rl_no' OR rl_no_4='$rl_no' OR rl_no_5='$rl_no' OR rl_no_6='$rl_no';";

if(mysqli_query($con,$sql_query_1)){
  
  
  
}
else
{
  echo "Data Insertion error".mysqli_error($con);
}
}
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

<?php echo "
          <div class =\"row\">
             
            <div class=\"col-xs-12 col-md-4\">
              <div class=\"center-block team-member-box text-center\">
                
                      <h4>".$_SESSION["username"]."<br><br></h4>
                      <p".$_SESSION["user"]."<br></p>
                    <form action=\"logout.php\" method = \"POST\"> <button class=\"btn btn-log btn-normal\" name=\"submit\" type =\"submit\" value=\"logjudge\">Log Out</button></form>
<form action=\"dashboard.php\" method = \"POST\">
         <button class=\"btn btn-log btn-normal\" name=\"suit\" type =\"submit\" value=\"logjudge\">dashboard</button></form>
         <form action=\"project_session_details.php?ctst_nme=$tb_name\" method = \"POST\">
         <button class=\"btn btn-log btn-normal\" name=\"wwee\" type =\"submit\" value=\"logjudge\">Next</button></form>
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
                <p><b>Contact Phone Number:</b> $row[20]<br><br><br><br><br><br></p>";
                if(($_SESSION["judge_type"]=="External")){echo "
                <a class=\"btn btn-log btn-normal\" href=\"#popup2\">Judge</a></div></div> ";}               echo "
            </div>

          </div>
        </div>
      </div>";
              if(($_SESSION["judge_type"]=="External")){echo "<div id=\"popup2\" class=\"overlay\">
                <div class=\"popup\">
                  <h2>Judge</h2>
                    <a class=\"close\" href=\"#\">&times;</a>
                    <div class=\"content\">
                            <div class=\"Content\" style=\"padding:2px 2px 2px 2px\">
                                <form  action=\"prjct_display.php?prj_name=$prj_name&ctst_name=$tb_name&roll_no=$rl_no\" method = \"post\">

 <div class=\"row\">
      
      <div class=\"col-half\">
      <h4>Presentation:</h4>
    <select name=\"prst\" required>
  <option value=\"1\">1</option>
  <option value=\"2\">2</option>
  <option value=\"3\">3</option>
  <option value=\"4\">4</option>
  <option value=\"5\">5</option>
  <option value=\"6\">6</option>
  <option value=\"7\">7</option>
  <option value=\"8\">8</option>
  <option value=\"9\">9</option>
  <option value=\"10\">10</option>
</select>
        </div>
    
      <div class=\"col-half\" >
      <h4>Industrial Application:</h4>
       <select name=\"ind_app\"  required>
  <option value=\"1\">1</option>
  <option value=\"2\">2</option>
  <option value=\"3\">3</option>
  <option value=\"4\">4</option>
  <option value=\"5\">5</option>
  <option value=\"6\">6</option>
  <option value=\"7\">7</option>
  <option value=\"8\">8</option>
  <option value=\"9\">9</option>
  <option value=\"10\">10</option>
</select>
        </div>
   
   </div>  
      
      <div class=\"col-half\">
      <h4>Social Impact:</h4>
<select name=\"scl_imp\" required>
  <option value=\"1\">1</option>
  <option value=\"2\">2</option>
  <option value=\"3\">3</option>
  <option value=\"4\">4</option>
  <option value=\"5\">5</option>
  <option value=\"6\">6</option>
  <option value=\"7\">7</option>
  <option value=\"8\">8</option>
  <option value=\"9\">9</option>
  <option value=\"10\">10</option>
</select>
        </div>
      
      <div class=\"col-half\">
<h4>Technology Used:</h4>
<select name=\"tech\"   required>
  <option value=\"1\">1</option>
  <option value=\"2\">2</option>
  <option value=\"3\">3</option>
  <option value=\"4\">4</option>
  <option value=\"5\">5</option>
  <option value=\"6\">6</option>
  <option value=\"7\">7</option>
  <option value=\"8\">8</option>
  <option value=\"9\">9</option>
  <option value=\"10\">10</option>
</select>
      </div>
    
       
          <div class=\"col-half\">
          <h4>Uniqueness:</h4>
<select name=\"uniq\" required>
  <option value=\"1\">1</option>
  <option value=\"2\">2</option>
  <option value=\"3\">3</option>
  <option value=\"4\">4</option>
  <option value=\"5\">5</option>
  <option value=\"6\">6</option>
  <option value=\"7\">7</option>
  <option value=\"8\">8</option>
  <option value=\"9\">9</option>
  <option value=\"10\">10</option>
</select>
      </div>
    
    
     <div class=\"col-half\">
     <h4>Fundability:</h4>
     <select name=\"fund\"  required>
  <option value=\"1\">1</option>
  <option value=\"2\">2</option>
  <option value=\"3\">3</option>
  <option value=\"4\">4</option>
  <option value=\"5\">5</option>
  <option value=\"6\">6</option>
  <option value=\"7\">7</option>
  <option value=\"8\">8</option>
  <option value=\"9\">9</option>
  <option value=\"10\">10</option>
</select>
</div>   
<h5>Your views on this project</h5>                            <input class=\"Textbox\" name=\"cmt\" type=\"text\" placeholder=\"Not more than 100 characters\" required/>
                                        <button class=\"btn btn-log btn-normal\" name=\"judge\" type =\"post\" >Submit</button>
                                        <br><br>
                                    </div>
                                </form>
                            </div>
                    

                    </div>

                </div>

            </div>

            < <div class=\"clearfix full-height\">
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
      </div> ";}

      ?>
 <!-- <div id="popup2" class="overlay">
                <div class="popup">
                  <h2>Judge</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                            <div class="Content" style="padding:2px 2px 2px 2px">
                                <form  action="index.php" method = "post">

 <div class="row">
      
      <div class="col-half">
      <h4>Presentation:</h4>
    <select name="prst" required>
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
        </div>
    
      <div class="col-half" >
      <h4>Industrial Application:</h4>
       <select name="ind_app"  required>
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
        </div>
   
   </div>  
      
      <div class="col-half">
      <h4>Social Impact:</h4>
<select name="scl_imp" required>
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
        </div>
      
      <div class="col-half">
<h4>Technology Used:</h4>
<select name="tech"   required>
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
      </div>
    
       
          <div class="col-half">
          <h4>Uniqueness:</h4>
<select name="uniq" required>
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
      </div>
    
    
     <div class="col-half">
     <h4>Fundability:</h4>
     <select name="fund"  required>
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
</div>                               <input class="Textbox" name="cmt" type="text" placeholder="Your views on this project" required/>
                                        <button class="btn btn-log btn-normal" name="judge" type ="post" >Submit</button>
                                        <br><br>
                                    </div>
                                </form>
                            </div>
                    

                    </div>

                </div>

            </div>
 -->
      
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