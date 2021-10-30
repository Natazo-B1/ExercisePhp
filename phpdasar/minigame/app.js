let userScore = 0;
let compScore = 0;
const userScore_span = document.querySelector('.user-score');
const compScore_span = document.querySelector('.comp-score');
const result_h2 = document.querySelector('#result');
const rock_div = document.querySelector('.choice-rock');
const paper_div = document.querySelector('.choice-paper');
const sccissors_div = document.querySelector('.choice-sccissors');
const paper = document.querySelector('#paper');
const rock = document.querySelector('#rock');
const sccissors = document.querySelector('#sccissors');

function getcomputerchoice(){
    const compChoice = ['Rock','Paper','Sccissors'];
    const randomNum = Math.floor(Math.random() *3);

    return compChoice[randomNum];
    
}
function sound(text){
    const utterthis = new SpeechSynthesisUtterance(text)
    utterthis.rate = 1;
    utterthis.pitch = 1;
    speechSynthesis.speak(utterthis);
}
function win(user,comp){
    userScore++;

    userScore_span.innerHTML = userScore;
    
     const texts =`${user}(user) Beats ${comp}(computer).You Win!!`;
     sound(texts);
     result_h2.innerHTML = texts;
     
    if(user == 'Rock' && comp == 'Sccissors'){
        rock_div.classList.add('win');
        setTimeout(function(){
            rock_div.classList.remove('win');

        },800)
    }else if(user == 'Paper' && comp == 'Rock'){
        paper_div.classList.add('win');
        setTimeout(function(){
            paper_div.classList.remove('win');

        },800)
    }else if(user == 'Sccissors' && comp == 'Paper'){
        sccissors_div.classList.add('win');
        setTimeout(function(){
        sccissors_div.classList.remove('win');

        },800)
    }




}
function draw(user,comp){
 let draw =`${user}(You) Beats ${comp}(comp).DRAW!!`;
 sound(draw);
 result_h2.innerHTML = draw;
if(user == 'Rock' && comp == 'Rock'){
    rock_div.classList.add('draw');
    setTimeout(function(){
        rock_div.classList.remove('draw');

    },800)
}else if(user == 'Paper' && comp == 'Paper'){
    paper_div.classList.add('draw');
    setTimeout(function(){
        paper_div.classList.remove('draw');

    },800)
}else if(user == 'Sccissors' && comp == 'Sccissors'){
    sccissors_div.classList.add('draw');
    setTimeout(function(){
        sccissors_div.classList.remove('draw');

    },800)
}
}
function lose(user,comp){
    compScore++;

    compScore_span.innerHTML = compScore;
let loses =`${user}(You) Beats ${comp}(comp).You Loses!!`;
sound(loses);
result_h2.innerHTML = loses;
    if(user == 'Rock' && comp == 'Paper'){
        rock_div.classList.add('lose');
        setTimeout(function(){
            rock_div.classList.remove('lose');

        },800)
    }else if(user == 'Paper' && comp == 'Sccissors'){
        paper_div.classList.add('lose');
        setTimeout(function(){
            paper_div.classList.remove('lose');

        },800)
    }else if(user == 'Sccissors' && comp == 'Rock'){
        sccissors_div.classList.add('lose');
        setTimeout(function(){
            sccissors_div.classList.remove('lose');

        },800)
    }
}
function game(userchoice){

    const compchoice = getcomputerchoice();

    if(userchoice == "Rock" && compchoice == "Rock"){
        draw(userchoice,compchoice);
    }else if(userchoice == "Rock" && compchoice == "Paper"){
        lose(userchoice,compchoice);
    }else if(userchoice == 'Rock' && compchoice == 'Sccissors'){
        win(userchoice,compchoice);
    }

    if(userchoice == "Paper" && compchoice == "Paper"){
        draw(userchoice,compchoice);
    }else if(userchoice == "Paper" && compchoice == "Sccissors"){
        lose(userchoice,compchoice);
    }else if(userchoice == 'Paper' && compchoice == 'Rock'){
        win(userchoice,compchoice);
    }

    if(userchoice == "Sccissors" && compchoice == "Sccissors"){
        draw(userchoice,compchoice);
    }else if(userchoice == "Sccissors" && compchoice == "Rock"){
        lose(userchoice,compchoice);
    }else if(userchoice == 'Sccissors' && compchoice == 'Paper'){
        win(userchoice,compchoice);
    }
}


function main(){
    paper.addEventListener('click',() =>{
        console.log('Hei you clicked on paper');
        game("Paper")
    })
    rock.addEventListener('click',() =>{
        console.log('HEI YOU CLICKED ON ROCK')
        game("Rock")
    })
    sccissors.addEventListener('click', () =>{
        game('Sccissors');
    })
}
main()




