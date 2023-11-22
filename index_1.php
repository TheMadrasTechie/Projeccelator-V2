<?php
require_once('config.php'); 

session_start();
?><!DOCTYPE html>
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
<h2><a href="logout.php"><?php echo "User:   ".$_SESSION["user"];?></a></h2>
  <form action="exam_stud_dets.php" method = "POST">
  <div class="row">
    <div class="col-half">
        <h4>Date of the Exam:</h4>
        <div class="input-group">
          <div class="col-third">
            <input name="dd" type="text" placeholder="DD" required/>
          </div>
          <div class="col-third">
            <input name="mm" type="text" placeholder="MM" required/>
          </div>
          <div class="col-third">
            <input name="yy" type="text" placeholder="YYYY" required/>
          </div>
        </div>
      </div>

      </div> 
      <div class="row">
      <h4>Time of the Exam:</h4>
      <h5>From:</h5>
      <div class="col-third">
      <div class="input-group">
          <select name ="fr_hr" required>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <select name ="fr_min" required>
            <option>05</option>
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            <option>35</option>
            <option>40</option>
            <option>45</option>
            <option>50</option>
            <option>55</option>
            <option>60</option>
          </select>
          <select name ="fr_am_pm" required>
            <option>AM</option>
            <option>PM</option>
          </select>
        </div>
        </div>
      </div>
      <div class="row">
      <h5>To:</h5>
      <div class="col-third">
      <div class="input-group">
          <select name ="to_hr" required>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <select name ="to_min" required>
            <option>05</option>
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            <option>35</option>
            <option>40</option>
            <option>45</option>
            <option>50</option>
            <option>55</option>
            <option>60</option>
          </select>
          <select name ="to_am_pm" required>
            <option>AM</option>
            <option>PM</option>
          </select>
        </div>
        </div>
      </div>
     <div class="row">
      <h4>Department:</h4>
      
      <div class="input-group">
          <select name ="dpt" required>
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
        </div>
        </div>
       <div class="row">
      <h4>Year of Study:</h4>
      <div class="col-third">
      <div class="input-group">
          <select name ="yr" required>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
          </select>
        </div>
        </div>
      </div>
    <div class="row">
      <h4>Account</h4>
      <h5>Internal</h5>
      <div class="input-group input-group-icon">
        <input name="int_fn" type="text" placeholder="Faculty Name" required/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input name="int_f_id" type="text" placeholder="Faculty ID" required/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
     <h5>External</h5>
      <div class="input-group input-group-icon">
        <input name="ext_fn" type="text" placeholder="Faculty Name" required/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input name="ext_f_id" type="text" placeholder="Faculty ID" required/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
    </div>
    <div class="row">
      <h4>Number of Students</h4>
      <div class="input-group input-group-icon">
        <input name="n_of_studs" type="number" placeholder="number" required/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
     
    </div>
   
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <button name="submit" type ="post" value="reg" >Submit</button>
    
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
