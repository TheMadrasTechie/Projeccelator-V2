<?php
require_once('config.php'); 

session_start();
 $err_insrt ="";
 $log_val= "";
if (isset($_POST['submit']))
{

$eml   = $_POST['mail'];
$pass   = $_POST['pswd'];

$result = mysqli_query($con,'select * from users where mail ="'.$eml.'"and password="'.$pass.'"');
    if(mysqli_num_rows($result)==1){

$sql = "SELECT name,user_type FROM users WHERE mail='$eml'";

$res = mysqli_query($con,$sql)or die("Error: ".mysqli_error($con));
$row = mysqli_fetch_array($res);

$_SESSION["user"] = $row[1];
$_SESSION["username"] = $row[0];
echo $row[1];

 /*if($eml=="hod@radssoon.com")
{
$_SESSION["user"] = "HOD";
}else if ($eml=="faculty@radssoon.com")
{
$_SESSION["user"] = "Faculty";
}else if ($eml=="student@radssoon.com")
{
$_SESSION["user"] = "Student";  
}*/

       header("Location: dashboard.php");
        
    }
    else
        $log_val = "Username or password might be wrong";


}
elseif (isset($_POST['reg_fac']))
{

$eml   = $_POST['mail'];
$pass   = $_POST['pswd'];
$name   = $_POST['name'];
$clg_id   = $_POST['clg_id'];
$dpt   = $_POST['dpt'];
$phn_no   = $_POST['phn_num'];

$sql_query = "insert into users(name,mail,password,dpt,rl_no,ph_no,user_type) values('$name','$eml','$pass','$dpt','$clg_id','$phn_no','Faculty');";
if(mysqli_query($con,$sql_query)){
    $err_insrt = "Enter the email-id and password to login";
}
else
{
    $err_insrt = "Use a different mail-id";
}


}
elseif (isset($_POST['reg_std']))
{

$eml   = $_POST['mail'];
$pass   = $_POST['pswd'];
$name   = $_POST['name'];
$clg_id   = $_POST['clg_id'];
$dpt   = $_POST['dpt'];
$phn_no   = $_POST['phn_num'];

$sql_query = "insert into users(name,mail,password,dpt,rl_no,ph_no,user_type) values('$name','$eml','$pass','$dpt','$clg_id','$phn_no','Student');";
if(mysqli_query($con,$sql_query)){
    $err_insrt = "Enter the email-id and password to login";
}
else
{
    $err_insrt = "Use a different mail-id";
}


}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script src="js/index1.js"></script>

 <link rel="stylesheet" href="css/modal.css"> 
	
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <title>Projeccelator</title>
    <link rel="icon" type="image/icon" href="img/tabicon.ico">

    <link rel="stylesheet" type="text/css" href="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700,700i|Josefin+Sans:700" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>

<body>
    <div id="index">
        <!-- Index starts here -->
        <div class="container main">
            <div class="row home">
                <div id="index_left" class="col-md-6 left">
                    <img class="img-responsive img-rabbit" src="img/student.png">
                </div>
                <div id="index_right" class="col-md-6 text-center right">
                    <div class="logo">
                        <img src="assets/images/logo.png">
                        <h4>Projeccelator</h4>
                    </div>
                    <p class="home-description">
                        Hello folk, this is a offical website of B.I.T inorder to track the students projects regularly.</p>
                        <p><font color="blue"><?php echo $err_insrt ;?></font></p>
                        <p><font color="red"><?php echo $log_val ;?></font></p>
                    <div class="btn-group-vertical custom_btn animated slideinright">
					     
						<div id="hod" class="btn btn-rabbit">HOD</div>
                        <div id="judge" class="btn btn-rabbit">FACULTY</div>
                        <div id="student" class="btn btn-rabbit">STUDENTS</div>
                 
                    </div>
                    <div class="social">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        <footer class="text-center">
            <div class="container bottom">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="http://www.radssoon.com/">Radssoon</a></p>
						 <p>contact: &nbsp;&nbsp;sundar @ Radssoon&nbsp;<br>Phno&nbsp;:&nbsp;78768979 &nbsp;or&nbsp;emailknaskldh</p>
						 <p></p>
						 <p></p>
                    </div>
                </div>
            </div>
        </footer>

        </div>
		
    </div>
	
    <!-- index ends here -->

    <div id="judge_scroll" class="pages ">
        <!-- judge strats here  -->
        <div class="container main">
            <div class="row">
                <div class="col-md-6 left" id="judge_left">
                    <img class="img-responsive img-rabbit" src="img/home.png">
                </div>

                <div class="col-md-6 right" id="judge_right">
                    <a href="#index" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a>
                    <div id="watermark">

                        <h2 class="page-title" text-center>Faculties</h2>
            <p style="font-style: italic;
	font-weight: 600;font-size: 19px;
	font-family: "Crimson";">Inorder to validate students performance , judges can login with their ID's.
</p>
                                      
                            <br>
                            <br>
                            <br>
                            <br> <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                   
                            <br>
                            <br>
                            <br>
                            <br>   <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div style="align=right">
                                <div class="LoginFT mds-3">
                                    <img id="Avimg" class="Avatar mds-2" src="https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png" />
                                    <div class="Content">
                                        <form action="index.php" method="post" >
                                            <input class="Textbox" name="mail" id="NameorEmail" type="email" placeholder="Name or E-mail" required>
                                            <br />
                                            <br />
                                            <input class="Textbox" name="pswd" id="passbox" type="password" placeholder="Password" required>
                                            <div class="FP">
                                                <a id="fp-btn" class="btn-fp">Forgot password?</a>
                                            </div>
                                            <div>
											 <button class="btn btn-log btn-normal" name="submit" type ="submit" value="logjudge">Login</button>
                                                <a class="btn btn-log btn-normal" href="#popup2">Signup</a> 

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                

                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- judge ends here -->
	<!--popup judges starts-->
          <div id="popup2" class="overlay">
                <div class="popup">
                  <h2>Faculty signup</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                            <div class="Content" style="padding:2px 2px 2px 2px">
                                <form  action="index.php" method = "post">

                                    <input class="Textbox" name="name" type="text" placeholder="name *" required/>
                                    <input class="Textbox" name="mail" type="email" placeholder="email address *" required/>
                                    <input class="Textbox" name="pswd" type="password" placeholder="password *" required/>

                                    <input class="Textbox" name="clg_id" type="search" placeholder="College Faculty Id *" required/>                            
                                    <p>Department *</p>
                                    <select class="Textbox" name="dpt" required>
                                        <option value="">select your department</option>
                                        <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                                        <option value="Agricultural Engineering">Agricultural Engineering</option>
                                        <option value="Automobile Engineering">Automobile Engineering</option>
                                        <option value="Biotechnology">Biotechnology</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                        <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                        <option value="Electronics and Instrumentation Engineering">Electronics and Instrumentation Engineering</option>
                                        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                        <option value="Fashion Technology">Fashion Technology</option>
                                        <option value="Food Technology">Food Technology</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Mechatronics">Mechatronics</option>
                                        <option value="Textile Technology">Textile Technology</option>
                                        <option value="School of Management Studies">School of Management Studies</option>
                                    </select>
                                     <input class="Textbox" name="phn_num" type="number" placeholder="Phone Number" required/>

                                    <br>

                                    <br>
                                    <br>

                                    <div>
                                        <button class="btn btn-log btn-normal" name="reg_fac" type ="post" >signup</button>
                                    </div>
                                </form>
                            </div>
                    

                    </div>

                </div>

            </div>

<!--popup ends-->
	
	
	
	
	
	
<!-- student starts here -->
<div id="student_scroll" class="pages">
 
	
    <div class="container main">
        <div class="row">
            <div class="col-md-6" id="student_left">
                <div>
                    <div class=""><img class="img-responsive img-rabbit" src="img/std.jpg"></div>

                </div>
            </div>

            <div class="col-md-6" id="student_right">
                <a href="#index" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                <div id="watermark">
                    <h2 class="page-title" text-center>Students</h2>
                    <div class="marker">w</div>
                </div>
                <p style="font-style: italic;
	font-weight: 600;font-size: 19px;
	font-family: "Crimson";">
	Students can login with their ID's Inorder to update their detailed description of their projects.
</p>

                    <br>
                    <br>
                    <br><br>
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>  
                    <div>
                        <div class="LoginFT mds-3">
                            <img id="Avimg" class="Avatar mds-2" src="https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png" />
                            <div class="Content">
                                <form action="index.php" method="post" >
                                    <input class="Textbox" id="NameorEmail" name="mail" type="email" placeholder="E-mail id"required >
                                    <br />
                                    <br />
                                    <input class="Textbox" id="passbox" type="password" name="pswd" placeholder="Password">
                                    <div class="FP">
                                        <a id="fp-btn" class="btn-fp">Forgot password?</a>
                                    </div>
                                    <div>
						
                                        <button class="btn btn-log btn-normal" name="submit" type ="submit" value="logstd">Login</button>
                                        <a class="btn btn-log btn-normal" href="#popup1">Signup</a>

                                    </div> 
                                </form>
                           </div>
                        </div>
						</div>

						
						
						
						
                    </div>

            </div>


        </div>
    </div>
	<!--popup starts-->
          <div id="popup1" class="overlay">
                <div class="popup">
                  <h2>signup</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">

                 

                            <div class="Content" style="padding:2px 2px 2px 2px">
                                <form  action="index.php" method = "post">

                                    <input class="Textbox" name="name" type="search" placeholder="name *" required/>
                                    <input class="Textbox" name="mail" type="search" placeholder="email address *" required/>
                                    <input class="Textbox" name="pswd" type="password" placeholder="password *" required/>

                                    <input class="Textbox" name="clg_id" type="search" placeholder="College Roll No *" required/>
                                   
                                    
                                    <p>Department *</p>
                                    <select class="Textbox" name="dpt" required>

                                        <option value="">select your department</option>
                                        <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                                        <option value="Agricultural Engineering">Agricultural Engineering</option>
                                        <option value="Automobile Engineering">Automobile Engineering</option>
                                        <option value="Biotechnology">Biotechnology</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                        <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                        <option value="Electronics and Instrumentation Engineering">Electronics and Instrumentation Engineering</option>
                                        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                        <option value="Fashion Technology">Fashion Technology</option>
                                        <option value="Food Technology">Food Technology</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Mechatronics">Mechatronics</option>
                                        <option value="Textile Technology">Textile Technology</option>
                                        <option value="School of Management Studies">School of Management Studies</option>
                                    </select>
                                     <input class="Textbox" name="phn_num" type="number" placeholder="Phone Number" required/>

                                    <br>

                                    <br>
                                    <br>

                                    <div>
                                        <button class="btn btn-log btn-normal" name="reg_std" type ="post" >signup</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>

                 

         
<!--popup ends-->
</div>
<!-- student ends here  -->

    <!-- Contact starts here -->

    <div id="hod_scroll" class="pages">
        <!-- Contact starts here -->
        <div class="container main">
            <div class="row">
                <div class="col-md-6 left" id="hod_left">
                    <img class="img-responsive img-rabbit" src="img/contact1.png">
                </div>

                <div class="col-md-6 right" id="hod_right">
                    <a href="#index" class="btn btn-rabbit back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                    <div id="watermark">
                        <h2 class="page-title" text-center>HOD</h2>
                        <div class="marker">c</div>
                    </div>
                    <p style="font-style: italic;
	font-weight: 600;font-size: 19px;
	font-family: "Crimson";">
	H.O.D's can login with their email id and passwords
</p>

                    <br>
                    <br>
                    <br><br>    
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>  
                    <div>
					
					
					
					
					     <div class="LoginFT mds-3">
                            <img id="Avimg" class="Avatar mds-2" src="https://pbs.twimg.com/profile_images/697353822163898368/nOFnWPhe.png" />
                            <div class="Content">
                                <form action="index.php" method="post" >
                                    <input class="Textbox" id="NameorEmail" name="mail" type="email" placeholder="E-mail id" required >
                                    <br />
                                    <br />
                                    <input class="Textbox" id="passbox" type="password" name="pswd" placeholder="Password">
                                    <div class="FP">
                                        <a id="fp-btn" class="btn-fp">Forgot password?</a>
                                    </div>
                                    <div>
						
                                        <button class="btn btn-log btn-normal" name="submit" type ="submit" value="loghod">Login</button>
                                      

                                    </div> 
                                </form>
                           </div>
                        </div>
					
                </div>
            </div>
        </div>


    </div>
    <!-- Contact ends here -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

    <script src="js/indexlogin.js"></script>

	
	
	
	</body>

</html>