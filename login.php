<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include '_dbconnect.php';
  $showalert=false;
  $username=$_POST["username"];
  $password=$_POST["password"];

  // checking if the user exists in database or not
  
    $sql="Select * from users where username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
      $login=true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$username;
      header("location:quiz.php");
    }
    else{
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
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./styles/loginstyles.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <h1 class="brand">
            <a 
              >qui<span style="font-size: 40px"><b>zz</b></span
              >er</a
            >
          </h1>
          <ul>
            
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
        </nav>
        <?php
    if($login){
      echo '<h1 class="register_success">Logged in Successfully.</h1>';
    }
    ?>
        <?php
    if($showError){
      echo '<h1 class="password_mismatch">Invalid Credentials</h1>';
    }
    ?>
      </div>
      
    </header>
    <content>
        <div class="center">
          <h1>Login</h1>
          <form action="login.php" method="post">
              <div class="txt_field">
                  <input type="text" name="username" id="" required placeholder="Username">
              </div>
              <div class="txt_field">
                <input type="password" name="password" id="" required placeholder="Password" >
            </div>
            <input type="submit" value="Login">
          </form>
        </div>
      </content>

   
  </body>
</html>
