const quizDB = [
    {
        question: "Q1:Which of the following is not a correct statement about Bitumen?",
        a: "It’s a mixture of highly condensed polycyclic aromatic compounds",
        b: "Its is soluble in Carbon Disulphide",
        c: " SARA analysis is used to determine bitumen chemistry",
        d: "All of above are correct statements",
        ans: "ans4"
    },
    {
        question: "Q2: Dalton’s name is associated with which of the following terms?",
        a: "Electron",
        b: "Proton",
        c: "Atom",
        d: "Neutron",
        ans: "ans3"
    },
    {
        question: "Q3:Which gas is used in making of Vanaspati ghee from vegetable oils?",
        a: "N2",
        b: "NO2",
        c: " H2",
        d: "Ne",
        ans: "ans3"
    },
    {
        question: "Q4: White Phosphorous is represented by which among the following symbols?",
        a: " P1",
        b: " P2",
        c: " P3",
        d: " P4",
        ans: "ans4"
        
    },
    {
        question: "Q5:Which among the following is known as White Vitriol?",
        a: " Zinc Sulphate",
        b: "Zinc Chloride",
        c: " Zinc Phosphate",
        d: "Zinc oxide",
        ans: "ans1"
        
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