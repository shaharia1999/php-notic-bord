<?php
session_start();
$fname="";
$lname="";
$email="";
$password="";
$class="";

$connection=mysqli_connect("localhost","root","","online_notice_bord");
$query="SELECT `id`, `fname`, `lname`, `email`, `password`, `class` FROM `user` WHERE email='$_SESSION[email]' ";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
     $fname=$row['fname'];
     $lname=$row['lname'];
     $email=$row['email'];
     $password=$row['password'];
     $class=$row['class'];

    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="POST">
      <div class="form-group">
          <label for="">First Name:</label>
          <input type="text"class="form-control" name="fname" value="<?php echo $fname?>">
      </div>
      <div class="form-group">
          <label for="">Last Name:</label>
          <input type="text"class="form-control" name="lname" value="<?php echo $lname?>">
      </div>
      <div class="form-group">
          <label for="">Email:</label>
          <input type="email"class="form-control" name="email" value="<?php echo $email?>">
      </div>
      <div class="form-group">
          <label for="">Password:</label>
          <input type="password"class="form-control" name="password" value="<?php echo $password?>">
      </div>
      <div class="form-group">
                <label for="">Select Your Class:</label>
                <select name="class" class="form-control" value="<?php echo $class?>">
                <option >-Select-</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
              </div>
       <button type="submit" name="update_profile" class="btn btn-primary">Update</button>

    </form>

    

</body>
</html>



