const quizDB = [
    {
        question: "Q1: The weight of an object is due to -",
        a: "the net force acting on it",
        b: " the total of all forces acting on it irrespective of their directions",
        c: "the force that it exerts on the ground",
        d: "its inert propertye",
        ans: "ans3"
    },
    {
        question: "Q2:  The direction of acceleration in uniform circular motion is along the -",
        a: " direction of motion",
        b: " tangent to the circle at the point of observation",
        c: " direction of velocity",
        d: "direction perpendicular to velocity",
        ans: "ans4"
    },
    {
        question: "Q3:How many internal reflections of ligh take place in the formation of primary rainbow?",
        a: "0",
        b: "1",
        c: "2",
        d: "3",
        ans: "ans3"
    },
    {
        question: "Q4:A non-spherical shining spoon can generally be considered as a -",
        a: "Spherical mirror",
        b: "Parabolic mirror",
        c: " Plane mirror",
        d: "Lens",
        ans: "ans2"
        
    },
    {
        question: "Q5:Which one of the following is an electric conductor?",
        a: "A plastic sheet",
        b: "Distilled water",
        c: "Human body",
        d: "A wooden thin sheet",
        ans: "ans3"
        
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

if(questionCount < quizDB.length){
    loadQuestion(); 
}
else{

    showScore.innerHTML = `
      <h3> You Scored ${score}/${quizDB.length}  </h3>  
       <button class="btn" onclick="location.reload()">Play Again</button>
    `;
    showScore.classList.remove('scoreArea');
}
});