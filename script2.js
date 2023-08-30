//function for rolling sound
var sound1=new Audio();
sound1.src="Rolling sound.mp3";


//Function for rolling of dice

function roll(){
       
     setTimeout(function(){
        document.getElementById('root').innerHTML="<img src='loader.gif'>";
        
const play =Math.floor(Math.random()*6)+1;
const playdice="images/"+play+".png";

document.getElementById('root').setAttribute('src',playdice);
},30000);
} 





//Function for collecting data

function myFunction1() {
    
  let x = Math.floor(Math.random()*6)+1;
 document.getElementById("myNumber1").readOnly = true;
}


    function myFunction2() {
        
      let x = Math.floor(Math.random()*6)+1;
     document.getElementById("myNumber2").readOnly = true;
    }
    

        function myFunction3() {
            
          let x = Math.floor(Math.random()*6)+1;
         document.getElementById("myNumber3").readOnly = true;
        }
        
    
            function myFunction4() {
                
              let x = Math.floor(Math.random()*6)+1;
             document.getElementById("myNumber4").readOnly = true;
            }
// Script 1: Image Display and Comparison
function openFileInput(inputId) {
document.getElementById(inputId).click();
}

function displayImage(event, targetImageId) {
const selectedImage = document.getElementById(targetImageId);
const file = event.target.files[0];

if (file) {
  selectedImage.style.display = 'block';
  selectedImage.src = URL.createObjectURL(file);
}
}
function rollDiceAfterDelay() {
setTimeout(function () {
  if (submittedPlayers === 4) {
      roll();
  } else {
      alert("Please wait for all players to submit their numbers.");
  }
}, 30000); // 30000 milliseconds = 30 seconds
}
// Script 2: Comparing Results and Displaying Winners
function compareResults() {
const winningNumber = parseInt(document.getElementById("root").getAttribute("src").match(/\d+/)[0]);

const selectedNumbers = [
  parseInt(document.getElementById("myNumber1").value),
  parseInt(document.getElementById("myNumber2").value),
  parseInt(document.getElementById("myNumber3").value),
  parseInt(document.getElementById("myNumber4").value)
];

const winners = [];
selectedNumbers.forEach((num, index) => {
  if (num === winningNumber) {
      winners.push(index);
  }
});

if (winners.length === 1) {
  const winnerIndex = winners[0];
  const winnerUsername = "<?php echo $usernames[" + winnerIndex + "]; ?>";
  alert(`Congratulations ${winnerUsername}, you've won with the number ${winningNumber}!`);

  // Disable all number selectors and roll button
  for (let i = 1; i <= 4; i++) {
      document.getElementById("myNumber" + i).disabled = true;
  }
  document.querySelector(".roll").disabled = true;
  rollDiceAfterDelay();
} else if (winners.length > 1) {
  alert("Congratulations, multiple players have won with the number " + winningNumber + "!");

  // Disable all number selectors and roll button
  for (let i = 1; i <= 4; i++) {
      document.getElementById("myNumber" + i).disabled = true;
  }
  document.querySelector(".roll").disabled = true;
  rollDiceAfterDelay();
}
}


// Script 3: Tracking Submissions and Enabling Dice Roll
let submittedPlayers = 0;

function myFunction1() {
submittedPlayers++;
checkIfAllSubmitted();
}

function myFunction2() {
submittedPlayers++;
checkIfAllSubmitted();
}

function myFunction3() {
submittedPlayers++;
checkIfAllSubmitted();
}

function myFunction4() {
submittedPlayers++;
checkIfAllSubmitted();
}

function checkIfAllSubmitted() {
if (submittedPlayers === 4) {
  document.querySelector(".roll").disabled = false;

  // Call the function to roll the dice after a delay
  rollDiceAfterDelay();
}
}



        













