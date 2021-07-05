const timerr = document.getElementById('timer');
var c=120;
 setInterval(timer001,1000);

function timer001(){
if(c>0){
  timerr.innerText=c;
c--;
}
if(c===0){
  timerr.innerText=c;
  showScore.innerHTML = `
      <h3> You Scored ${score}/${quizDB.length}  </h3>  
       <button class="btn" onclick="location.reload()">Play Again</button>
    `;
    showScore.classList.remove('scoreArea');
}


}
    const quizDB = [
    {
        question: "Q1: Which number is equivalent to 3^(4)÷3^(2)",
        a: "1",
        b: "4",
        c: "9",
        d: "5",
        ans: "ans3"
    },
    {
        question: "Q2: There are 49 dogs signed up for a dog show. There are 36 more small dogs than large dogs. How many small dogs have signed up to compete? ",
        a: "40",
        b: "41.5",
        c: "38",
        d: "42.5",
        ans: "ans4"
    },
    {
        question: "Q3: Add 8.563 and 4.8292.",
        a: "13.3922",
        b: "13.3911",
        c: "13.3920",
        d: "12.3922",
        ans: "ans1"
    },
    {
        question: "Q4: Sally is 54 years old and her mother is 80, how many years ago was Sally’s mother times her age?",
        a: "41 years ago",
        b: "40 years ago",
        c: "42 years ago",
        d: "44 years ago",
        ans: "ans1"
        
    },
    {
        question: "Q5: There is a three-digit number. The second digit is four times as big as the third digit?",
        a: "132",
        b: "149",
        c: "142",
        d: "141",
        ans: "ans4"
        
    },
];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit = document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');
const showScore = document.querySelector('#showScore');


let questionCount = 0;
let score =0;
const loadQuestion = () => 
{
    const questionList = quizDB[questionCount];

    question.innerText = questionList.question;

    option1.innerText = questionList.a;
    option2.innerText = questionList.b;
    option3.innerText = questionList.c;
    option4.innerText = questionList.d;
}
 
loadQuestion();

const getCheckAnswer = () => {
    let answer; 

    answers.forEach((curAnsElem) => {
       if(curAnsElem.checked){
           answer = curAnsElem.id;
       }   
    })
    return answer;
};

const deselectAll = () =>
{
    answers.forEach((curAnsElem) => curAnsElem.checked = false );
}
submit.addEventListener('click', () => 
{
   const checkedAnswer = getCheckAnswer();
   if(checkedAnswer === quizDB[questionCount].ans)
   {score++;
};

 questionCount++;

 deselectAll();

if(questionCount < quizDB.length&&c>0){
    loadQuestion(); 
}
else {
  c=0;
    showScore.innerHTML = `
      <h3> You Scored ${score}/${quizDB.length}  </h3>  
       <button class="btn" onclick="location.reload()">Play Again</button>
    `;
    showScore.classList.remove('scoreArea');
}
});