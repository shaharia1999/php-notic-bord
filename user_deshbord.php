<?php 
session_start();
if(isset($_POST['update_profile'])){
    $connection=mysqli_connect("localhost","root","","online_notice_bord");
$query="update user set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class='$_POST[class]' where email='$_SESSION[email]'";
var_dump($query);
   $query_run=mysqli_query($connection,$query);
   
    if($query_run){
    echo"<script>alert('Sucessful now your Profile update')
    window.location.href='user_deshbord.php';
    </script>"; 
    
}else{
    echo"php really hard";
};

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
   
</head>
<body>
    <section>
        <div class="container">
       <h2> <center class="bg-danger text-white py-3 ">Wellcome To User Deshbord</center></h2>
          <div class="row">
              <div class="col-md-4">
                  <img src="images/user.jpg" alt="shaharia" class="img-fluid">
                  <b><?php echo$_SESSION['email']?></b>
                  <br>
                  <button class="btn btn-primary text-white m-2 w-50"id="edite_profile">Edit Profile</button>
                  <br>
                  <button class="btn btn-success text-white m-2 w-50" id="view_notice_bord">View all Notice</button>
                  <br>
                  <a href="logout.php"class="btn btn-danger text-white m-2 w-50">LogOut</a>
              </div>
              <div class="col-md-8 py-3 border-left" id="main_contant">
                 <h3>This is the User Deshbord ,There user can change their details about of her.</h3>
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit assumenda voluptatem ut a deserunt debitis beatae temporibus, itaque quae blanditiis ratione est maiores accusamus facere.</p>

              </div>

          </div>
       </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js">
</script>
</body>
</html>