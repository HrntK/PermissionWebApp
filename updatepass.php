<?php
include "config.php";
if(isset($_GET['sid']))
{
  
  $con1=connect();
  $sid=$_GET['sid'];
  
$rs1=mysqli_query($con1,"SELECT * FROM pass WHERE id ='$sid'")or die("query not run");
$n1=mysqli_num_rows($rs1);
if($n1==1)
{
  session_start();
  $r1=mysqli_fetch_assoc($rs1);
  $username=$r1['username'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Password</title>
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
      <a class="navbar-brand me-auto order-5 med" href="index.html">Thapar Institute Of Engineering And Technology</a>
      
      
      </div>
  </nav>
<img class="change2" src="img3.jpg" style="position: absolute;" alt="">
<div style="position: relative; display: flex;">
  <form class="form ms-auto " action="updatepass.php" method="post">
    <p class="heading">Update Password</p>
    <input class="input" placeholder="Username"  type="text" name="username" value="<?php echo $username;?>"/>
    <input class="input" placeholder="New Password" type="password" name="password" />
    <input type="hidden" name="id" value="<?php echo $sid;?>"/>
    <button class="btn1" name="btn1" type="submit" style="color: black;">Update</button>
  </form>
</div>
    
  </body>
</html>
<?php
}
}
///include "config.php";
if(isset($_POST['btn1']))
{
$con=connect();
$id=$_POST['username'];
$password=$_POST['password'];
$sid=$_POST['id'];

$rs=mysqli_query($con,"update pass set password='$password' WHERE id='$sid'")or die("query not run");
  
  header("location: index.php");


}




?>