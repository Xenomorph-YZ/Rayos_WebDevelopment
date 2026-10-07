
let choices = ["Rock", "Paper", "Scissors"];
let playerDisplay = document.getElementById('playerDisplay');
let computerDisplay = document.getElementById('computerDisplay');
let resultDisplay = document.getElementById('resultDisplay');
let pScore = 0;
let cScore = 0;

function playGame(playerChoice) {

    let computerChoice = choices[Math.floor(Math.random() * 3)];
    let result = "";

    if (playerChoice === computerChoice) {
        result = "IT'S A TIE!!!";
    }
    else {
    switch (playerChoice) {
        case "Rock":
            result = (computerChoice === "Scissors") ? "YOU WIN!!!" : "YOU LOSE!!!";
            break;
        case "Paper":
            result = (computerChoice === "Rock") ? "YOU WIN!!!" : "YOU LOSE!!!";
            break;
        case "Scissors":
            result = (computerChoice === "Paper") ? "YOU WIN!!!" : "YOU LOSE!!!";
            break;
        }
    }

    playerDisplay.textContent = `Player: ${playerChoice}`;
    computerDisplay.textContent = `Computer: ${computerChoice}`;
    resultDisplay.textContent = `Result: ${result}`;

    if (result === "YOU WIN!!!") {
        pScore++;
        document.getElementById('playerScore').innerHTML = `Player Score: ${pScore}`;
    }
    else if (result === "YOU LOSE!!!") {
        cScore++;
        document.getElementById('computerScore').innerHTML = `Computer Score: ${cScore}`;
    }

    if (pScore === 10) {
        alert("PLAYER WINS!!!");
        resetGame();
    } 
    else if (cScore === 10) {
        alert("COMPUTER WINS, YOU LOST, BETTER LUCK NEXT TIME!!!");
        resetGame();
    }
}
function resetGame() {
    pScore = 0;
    cScore = 0;
    document.getElementById('playerScore').innerHTML = `Player Score: ${pScore}`;
    document.getElementById('computerScore').innerHTML = `Computer Score: ${cScore}`;
    playerDisplay.textContent = "Player: ";
    computerDisplay.textContent = "Computer: ";
    resultDisplay.textContent = "Result: ";
}