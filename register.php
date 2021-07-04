<?php
$showalert=false;
$showError=false;
$exists=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include '_dbconnect.php';
  $showalert=false;
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];

  //  to check if username exists

  $sql="Select * from users where username='$username'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==0){
    $exists=false;
  }
  else{
    $exists=true;
  }
  
  // to add user to database 

  if(($password==$cpassword) && $exists==false){
    $sql="INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
      $showalert=true;
    }
  }
  else if($password!=$cpassword){
    $showError=true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    
    <link rel="stylesheet" href="./styles/loginstyles.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <h1 class="brand">
            <a href="register.php"
              >qui<span style="font-size: 40px"><b>zz</b></span
              >er</a
            >
          </h1>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
        </nav>
    <?php
    if($showalert){
      echo '<h1 class="register_success">Successfully Registered. Proceed To Login.</h1>';
    }
    ?>

    <?php
    if($showError){
      echo '<h1 class="password_mismatch">Password donot match.</h1>';
    }
    ?>

    <?php
    if($exists){
      echo '<h1 class="password_mismatch">Username Exists</h1>';
    }
    ?>
      </div>
    </header>
    
    <content>
        <div class="center">
          <h1>Register</h1>
          <form action="register.php" method="post">
            <div class="txt_field">
                <input type="text" name="username" id="" placeholder="Username" required >
            </div>
              <div class="txt_field">
                  <input type="password" name="password" id=""placeholder="Password" required >
              </div>
              <div class="txt_field">
                <input type="password" name="cpassword" id="" placeholder="Confirm Password" required >
            </div>
            <input type="submit" value="Register" >
          </form>
        </div>
      </content>
   
  </body>
</html>
