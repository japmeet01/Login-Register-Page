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
    <title>Maths Quiz</title>
    <link rel="stylesheet" href="quizstyles.css" />
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

        

        <div class="main-div">
          <div class="inner-div">
            <div style="" class="timer">
            <h1>Timer:</h1>
          <h1 id="timer">120</h1>
            </div>
          
          <h2 class = "question">Question 1</h2>
          
          <ul>
              <li>
                  <input type="radio" name="answer" id="ans1" class="answer">
                  <label for="ans1" id="option1">Answer option</label>
              </li>
              <li>
                <input type="radio" name="answer" id="ans2" class="answer">
                <label for="ans2" id="option2">Answer option</label>
            </li>
            <li>
                <input type="radio" name="answer" id="ans3" class="answer">
                <label for="ans3" id="option3">Answer option</label>
            </li>
            <li>
                <input type="radio" name="answer" id="ans4" class="answer">
                <label for="ans4" id="option4">Answer option</label>
            </li>
          </ul>
          <button id ="submit">submit</button>
          <div id ="showScore" class="scoreArea"></div> 
        </div>
       </div>

      </div>
    </header>
    <script src="mathsscript.js"></script>
  </body>
  
</html>
