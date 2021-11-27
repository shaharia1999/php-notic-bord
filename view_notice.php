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
    <br> <center><h2 class="text-primary">My Notices</h2></center>

<?php
session_start();
 $connection=mysqli_connect("localhost","root","","online_notice_bord");
 $query="SELECT `id`, `post_date`, `to_whom`, `subject`, `message` FROM `notice_bord` WHERE to_whom='Too All'or to_whom='$_SESSION[class]' ";
 $query_run=mysqli_query($connection,$query);
 while($row=mysqli_fetch_assoc($query_run)){
?>  

<div class="card">
    <div class="card-body">
        <h5 card="card-title"><?php echo' For Class ='. $row['to_whom']?></h5>
        <h5 card="card-title"><?php echo $row['subject']?></h5>
       <p class="card-text"><?php echo $row['message']?></p>
       <h5 card="card-text"><?php echo $row['post_date']?></h5>

    </div>

</div>
<?php


 }



?>
    
</body>
</html>