<?php
session_start();
$connection=mysqli_connect("localhost","root","","online_notice_bord");
if(isset($_POST['login'])){
    $email="$_POST[email]";
    $password="$_POST[password]";
    $_SESSION['email']=$email;
   
    $query="SELECT `id`, `fname`, `lname`, `email`, `password`, `class` FROM `user` WHERE email='$email'and password='$password'";
    $query_run=mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      
        while($row=mysqli_fetch_assoc($query_run)){
          $_SESSION['class']=$row['class'];
          echo"<script>
          window.location.href='user_deshbord.php'
          </script>"; 
         
        }
    }else{
         echo"<script>alert('Place enter correct Email aned Password')
          window.location.href='index.php'
          
          </script>"; 
    }
    $_SESSION['email']=$email;

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
            <center><h4>User Login Here</h4></center>
            <form action="index.php"method="post">
              <div class="form-group">
                <label for="">Email Id :</label>
                <input type="email" name="email" placeholder="Enter your Email"class="form-control">
              </div>
              <div class="form-group">
                <label for="">Password :</label>
                <input type="Password" name="password" placeholder="Enter your Password"class="form-control">
              </div>
               <button  class="btn btn-primary"type="submit" name="login">Login</button>
            </form>
            <a href="register.php">Click here to Register</a>
            </div>

        </div>
    </section>
    <!--login end-->
</body>
</html>