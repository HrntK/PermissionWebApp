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
  <div style="position: relative; display: flex;">
  <form class="form ms-auto" style="margin-left: auto; margin-right: 10%; margin-top:7% width: 60%" action="registration.php" method="post">
    <p class="heading">Student Registration</p>
    <input class="input" placeholder="Username"  type="text" name="username" />
    <input class="input" placeholder="Password" type="password" name="password" />
    <input class="input" placeholder="Name"  type="text" name="uname" />
    <input class="input" placeholder="Branch "  type="text" name="cname" />
    <input class="input" placeholder="Roll No"  type="text" name="roll" />
    <input class="input" placeholder="Hostel"  type="text" name="hostel" />
    
    <input class="input" placeholder="Parent Email"  type="text" name="pemail" />
    
    <button class="btn1" name="btn1" type="submit" style="color: white;">Submit</button>
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

$uname=$_POST['uname'];
$branch=$_POST['cname'];
$roll=$_POST['roll'];
$pemail=$_POST['pemail'];
$hostel=$_POST['hostel'];



mysqli_query($con,"insert into pass(username,password)values('$id','$password')")or die("query not run");
mysqli_query($con,"insert into user_content(name,roll,branch,pemail,hostel)values('$uname','$roll','$branch','$pemail','$hostel')")or die("query not run");

  
  header("location: index.php");

}





?>