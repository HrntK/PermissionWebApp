<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
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
  <form class="form ms-auto " style="margin-left: auto; margin-right: 10%; margin-top:9%" action="forget.php" method="post">
    <p class="heading">Forget Password</p>
    <input class="input" placeholder="Roll Number"  type="text" name="roll" />
    <input class="input" placeholder="Branch" type="text" name="branch" />
    <input class="input" placeholder="Hostel" type="text" name="hostel" />
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
$roll=$_POST['roll'];
$branch=$_POST['branch'];
$hostel=$_POST['hostel'];



$rs=mysqli_query($con,"SELECT * FROM user_content WHERE roll ='$roll' AND branch ='$branch' AND hostel='$hostel'")or die("query not run");
$n=mysqli_num_rows($rs);
if($n==1)
{
  session_start();
  $r=mysqli_fetch_assoc($rs);
  $sid=$r['id'];
  $_SESSION['forget']=$sid;
  
  header("location: updatepass.php?sid=$sid");
}
else
{
  echo "<script>alert('Sorry your information is incorrect')</script>";
}
}





?>