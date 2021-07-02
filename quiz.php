<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
  header("location:login.php");
  exit;
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QuiZZer</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <h1 class="brand">
            <a href="#"
              >qui<span style="font-size: 40px"><b>zz</b></span
              >er</a
            >
          </h1>
          <ul>
          <li><a href="quiz.php">Home</a></li>
            <li><a>Welcome <?php 
            echo $_SESSION['username'];
            ?></a> </li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
        <h1 style="color: aliceblue;">Welcome to Quizzer</h1>
      </div>
    </header>

   
  </body>
</html>