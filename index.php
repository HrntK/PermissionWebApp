<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudentLogin</title>
    <link rel="icon" href="Ti_Logo_HD.png" type="image/png">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark teal">
      <img class="img1" src="Ti_Logo_HD.png" alt="">
      <a class="navbar-brand me-auto order-5 med" href="index.php">Thapar Institute Of Engineering And Technology</a>
      
      
      </div>
  </nav>
<img class="change2" src="1.jpeg" style="position: absolute; height:100%;opacity:0.5;" alt="">
<div style="position: relative; display: flex;">
  <form class="form ms-auto " action="index.php" method="post">
    <p class="heading">Student Login</p>
    <input class="input" placeholder="Username"  type="text" name="username" />
    <input class="input" placeholder="Password" type="password" name="password" />
    <p align=right><a href="forget.php">Forget Password</a>
<br>
<a href="registration.php">New Registration</a>
    </p>

    <button class="btn1" name="btn1" type="submit" style="color: black;">Submit</button>
  </form>
</div>
    
  </body>
</html>
-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <link rel="icon" href="Ti_Logo_HD.png" type="image/png">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="indexstyle.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <img src="Ti_Logo_HD.png" alt="Logo">
      <span class="navbar-brand me-auto med">Thapar Institute Of Engineering And Technology</span>

    </div>
  </nav>
  <img class="background-img" src="1.jpeg" alt="Background">
  <div>
    <form class="form" style="margin-left: auto; margin-right: 10%; margin-top:9%" action="index.php" method="post">


      <p class="heading">Student Login</p>
      <input class="input" placeholder="Username" type="text" name="username">
      <input class="input" placeholder="Password" type="password" name="password">
      <div style="text-align: right;">
        <a href="forget.php">Forgot Password?</a><br>
        <a href="registration.php">New Registration</a>
      </div>
      <button class="btn1" name="btn1" type="submit">Submit</button>
    </form>
  </div>
</body>
</html> 







<?php
include "config.php";
if(isset($_POST['btn1']))
{
$con=connect();
$id=$_POST['username'];
$password=$_POST['password'];


$rs=mysqli_query($con,"SELECT * FROM pass WHERE username ='$id' AND password ='$password'")or die("query not run");
$n=mysqli_num_rows($rs);
if($n==1)
{
  session_start();
  $r=mysqli_fetch_assoc($rs);
  $sid=$r['id'];
  $_SESSION['suser']=$sid;
  
  header("location: dashboard.php");
}
else
{
  echo "Internal Server Error";
}
}





?> 
