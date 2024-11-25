<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
<link rel='stylesheet' href='style.css'>

    
  </head>
  <body >
     <!-- <img class="change2" src="1.jpeg" style="position: absolute;height:120% ;background-position: center;;background-size:cover;opacity:0.2;" alt="">
    -->
    <?php  include('nav1.php'); ?>
   

    <?php 
include "config.php";
$con=connect();
session_start();
$id=$_SESSION['suser'];
$rs=mysqli_query($con,"SELECT * FROM user_content WHERE id =$id");

     ?>
        <form action="apply.php" method="post" style="color:blue;">
         <div class="form-group mx-auto" style="width: 50%; border: 1px solid black; display: flex; flex-direction: column; text-align: center; margin-top:1%; padding: 2%;">
         
         <?php $roll1=0; $name1="";?>
            <?php while($r=mysqli_fetch_assoc($rs)){ ?>
              <h1>Welcome to the dashboard, <?php echo $r['name']; ?>!</h1>
              <h3>User Information:</h3>
              <p>Branch: <?php echo $r['branch']; ?></p>
              <p>Roll number: <?php echo $r['roll']; ?></p>
              <br>
              <?php $roll1=$r['roll'];  ?>
               <?php $name1=$r['name'];  ?>
              <h3>Leave Permission</h3>
              <h4><a href="check.php?id=<?php echo $r['id']; ?>">Check Status</a> |
              
              <a href="leavep.php?id=<?php echo $r['id']; ?>">Leave Permission</a> |
                <a href="lentry.php?id=<?php echo $r['id']; ?>">Late Entry</a>|
                <a href="hstay.php?id=<?php echo $r['id']; ?>">Hostel Stay</a>
              </h4> <br>
              Hostel<input type="text" name="t5" value="<?php echo $r['hostel']; ?>" readonly>
              <?php } ?><br>
              <input type="hidden" name="n1" value="<?php echo $name1; ?>"><input type="hidden" name="n2" value="<?php echo $roll1; ?>">
            Leave Date<input type="date" name="d1">
            Return Date <input type="date" name="d2">
            Leave Reason <input type="text" name="d3">
            <br> <br>
            <input type="submit"  name="b4" style="align-items: center;">
           
          </div>
        
        </form>
        <?php include('footer.php'); ?>
  </body>
</html>