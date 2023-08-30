//function for rolling sound
var sound1=new Audio();
sound1.src="Rolling sound.mp3";
//Function for rolling of dice
function roll() {
    setTimeout(function () {
        document.getElementById('root').innerHTML = "<img src='loader.gif'>";

        const play = Math.floor(Math.random() * 6) + 1;
        const playdice = "images/" + play + ".png";

        document.getElementById('root').setAttribute('src', playdice);

        compareResults(); // Call the comparison function
    }, 30);
    sound1.play();
}
//Function for collecting data
let chosenNumbers = []; // Array to store chosen numbers for each player

function myFunction1() {
    let x = Math.floor(Math.random() * 6) + 1;
    chosenNumbers[0] = x;
    document.getElementById("myNumber1").readOnly = true;
}

function myFunction2() {
    let x = Math.floor(Math.random() * 6) + 1;
    chosenNumbers[1] = x;
    document.getElementById("myNumber2").readOnly = true;
}

function myFunction3() {
    let x = Math.floor(Math.random() * 6) + 1;
    chosenNumbers[2] = x;
    document.getElementById("myNumber3").readOnly = true;
}

function myFunction4() {
    let x = Math.floor(Math.random() * 6) + 1;
    chosenNumbers[3] = x;
    document.getElementById("myNumber4").readOnly = true;
}
function compareResults() {
    let diceResult = parseInt(document.getElementById('root').getAttribute('src').match(/\d+/));
    let anyPlayerWon = false;
    let winnerName = "";

    for (let i = 0; i < chosenNumbers.length; i++) {
        if (chosenNumbers[i] === diceResult) {
            anyPlayerWon = true;
            winnerName = "Player " + (i + 1);
            break;
        }
    }

    const customResultAlert = document.getElementById('customResultAlert');
    const resultMessage = document.getElementById('resultMessage');
    const winnerNameElement = document.getElementById('winnerName');

    if (anyPlayerWon) {
        resultMessage.textContent = "Congratulations!";
        winnerNameElement.textContent = winnerName + " won!";
    } else {
        resultMessage.textContent = "Better luck next time!";
        winnerNameElement.textContent = "";
    }

    customResultAlert.style.display = 'block';
}

         

