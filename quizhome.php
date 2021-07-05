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
    <title>QuizJEE</title>
    <link rel="stylesheet" href="./styles/homestyle.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <nav>
          <h1 class="brand">
            <a href="#"
              >Quiz<span style="font-size: 50px"><b>JEE</b></span
              ></a
            >
          </h1>
          <ul>
          <li><a href="quizhome.php">Home</a></li>
            <li><a>Welcome <?php 
            echo $_SESSION['username'];
            ?></a> </li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
        </div>
        <div class="homepage">
          <h1 class="homepage_heading">Welcome to QuizJEE.</h1>
          <h2 class="subheading">The only place to test your preparation for the IIT-JEE Exam</h2>
          <div id="grid">

          <div class="column1">
            <h1 class="quiz-heading">Maths Quiz</h1>
            <div class="listitem">
            <ul>
              <li>
                Total Questions: 5
              </li>
              <li>
                Total Time: 2 mins
              </li>
              <li>
                Difficulty: Hard
              </li>
              <a href="mathsquiz.php"><input type="submit" value="Start Quiz"></a>
            </ul>
            </div>
            </div>

          <div class="column2">
          <h1 class="quiz-heading">Physics Quiz</h1>
          <div class="listitem">
            <ul>
              <li>
                Total Questions: 5
              </li>
              <li>
                Total Time: 2 mins
              </li>
              <li>
                Difficulty: Hard
              </li>
              <a href="physicsquiz.php"><input type="submit" value="Start Quiz"></a>
            </ul>
          </div>
          </div>
          <div class="column3">
          <h1 class="quiz-heading">Chemistry Quiz</h1>
          <div class="listitem">
            <ul>
              <li>
                Total Questions: 5
              </li>
              <li>
                Total Time: 2 mins
              </li>
              <li>
                Difficulty: Hard
              </li>
              <a href="chemistryquiz.php"><input type="submit" value="Start Quiz"></a>
            </ul>
          </div>
          </div>
      </div>
</div>
    </header>
  </body>
  
</html>
