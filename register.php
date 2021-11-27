<?php

session_start();

$connection=mysqli_connect("localhost","root","","online_notice_bord");
if(isset($_POST['register'])){
  $query="insert into user values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[class]')";
  $querey_run=mysqli_query($connection,$query);
  if($querey_run){
    echo"<script>alert('registation successfully ....Now you are can Login ')
    window.location.href='index.php';
    </script>";
    $_SESSION['email']=$class;
  }
  else{
    echo"<script>alert('registation faild ....try again')
    window.location.href='registar.php';
    </script>";
  
  }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Online Notic Bord systam</title>
</head>
<body>
  <!--  header section code start hear-->
  <div class="row" id="header">
  <div class="col-md-4">
     
  </div>
  <div class="col-md-4">
 <h3> Online Notice Bord System</h3>
  </div>
  <div class="col-md-4">

  </div>
  </div>
    <!--login form start here-->
    <section id="login_form">
        <div class="row">
            <div class="col-md-4 m-auto block">
            <center><h4>Registation form</h4></center>
            <form action="register.php"method="post">
            <div class="form-group">
                <label for="">First Name :</label>
                <input type="text" name="fname" placeholder="Enter your Frist Name"class="form-control"required>
              </div>
              <div class="form-group">
                <label for="">Last Name :</label>
                <input type="text" name="lname" placeholder="Enter your Last Name"class="form-control"required>
              </div>
              <div class="form-group">
                <label for="">Email Id :</label>
                <input type="email" name="email" placeholder="Enter your Email"class="form-control"required>
              </div>
              <div class="form-group">
                <label for="">Password :</label>
                <input type="Password" name="password" placeholder="Enter your Password"class="form-control"required>
              </div>
              <div class="form-group">
                <label for="">Select Your Class:</label>
                <select name="class" class="form-control"required>
                <option >-Select-</option>
                <option >8</option>
                <option >9</option>
                <option >10</option>
                <option >11</option>
                <option >12</option>
                </select>
              </div>
               <button  class="btn btn-primary"type="submit" name="register">Register</button>
            </form>
            <a href="index.php">Click here to Login!!!!</a>
            </div>

        </div>
    </section>
    <!--login end-->
</body>
</html>