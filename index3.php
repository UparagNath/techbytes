<?php
session_start();
include 'partial/_dbconnect.php'; // Include database connection

$usernames = $_SESSION["usernames"];
$usernamesList = "'" . implode("', '", $usernames) . "'";

// Query to retrieve usernames and amounts of specified users
$sql = "SELECT username, Amount FROM ddata WHERE username IN ($usernamesList)";
$userData = mysqli_query($conn, $sql);

// Fetch all user data into an associative array
$userDataArray = array();
while ($userRow = mysqli_fetch_assoc($userData)) {
    $userDataArray[$userRow['username']] = $userRow['Amount'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Game board</title>
    <link rel="stylesheet" href="abc.css">
    <script src="ab.js"></script>

</head>
<button onclick="roll(),sound1.play()" class="roll">ROLL THE DICE</button>
<div id="result"></div>

    <body>
        <div class="container">
            <div class="dice">
                <img src="images/1.png" id="root">

            </div>
        
    <div class="pla1">
        <p id="demo"></p>
        <div class="circle" id="circle1" style="width:135px;height:135px;border-radius:50%;background-color:red;display:flex;
        align-items:center;justify-content:center;overflow:hidden;margin:10px;position:relative;top:20px;left:220px;">
        <img id="circleImage1" src="#" alt="Uploaded Image" style="max-width:100%;max-height:100%;position:absolute;">
        </div>
<input type="file" id="imageInput1" style="display: none;">
        <div class="d1">
        <p><div style="display:flex;">
        <div style=" margin-right: 15px;"><?php echo $_SESSION['username']; ?></div>
        <div style="border:2px solid black;background-color: white;padding:3px;width:70px;margin:1px;">$<?php echo $_SESSION['amount']; ?></div>
       </div></p>
        Enter the number :
       <input type="number" id="myNumber1" min="1" max="6">
       <button onclick="myFunction1()">Submit</button></div>
     <p id="demo"></p>
    
    </div>

    <div class="pla2">
        <p id="demo"></p>
        <div class="circle" id="circle1" style="width:135px;height:135px;border-radius:50%;background-color:red;display:flex;
align-items:center;justify-content:center;overflow:hidden;margin:10px;position:relative;top:-132px;left:1063px;">
  <img id="circleImage1" src="#" alt="Uploaded Image" style="max-width:100%;max-height:100%;position:absolute;">
</div>
<input type="file" id="imageInput1" style="display: none;">
   <div class="d2">
   <p><div style="display:flex;">
        <div style=" margin-right: 15px;"><?php echo $usernames[0]; ?></div>
        <div style="border:2px solid black;background-color: white;padding:3px;width:70px;margin:1px;">$<?php echo $userDataArray[$usernames[0]]; ?></div>
       </div></p>
    Enter the number :
       <input type="number" id="myNumber2" min="1" max="6">
        <button onclick="myFunction2()">Submit</button></div>
     <p id="demo"></p>
</div>

    <div class="pla3">
        <p id="demo"></p>
        <div class="circle" id="circle3" style="width:135px;height:135px;border-radius:50%;background-color:red;display:flex;
align-items:center;justify-content:center;overflow:hidden;margin:10px;position:relative;top:10px;left:220px;">
  <img id="circleImage3" src="#" alt="Uploaded Image" style="max-width:100%;max-height:100%;position:absolute;">
</div>
<input type="file" id="imageInput3" style="display: none;">
       <div class="d3">
       <p><div style="display:flex;">
        <div style=" margin-right: 15px;"><?php echo $usernames[1]; ?></div>
        <div style="border:2px solid black;background-color: white;padding:3px;width:70px;margin:1px;">$<?php echo $userDataArray[$usernames[1]]; ?></div>
       </div></p>
        Enter the number :
        <input type="number" id="myNumber3" min="1" max="6">
         <button onclick="myFunction3()">Submit</button></div>
     <p id="demo"></p>
    

    </div>
    <div class="pla4">
        <p id="demo"></p>
        <div class="circle" id="circle4" style="width:135px;height:135px;border-radius:50%;background-color:red;display:flex;
        align-items:center;justify-content:center;overflow:hidden;margin:10px;position:relative;left:1063px;top: -140px;">
          <img id="circleImage4" src="#" alt="Uploaded Image" style="max-width:100%;max-height:100%;position:absolute;">
        </div>
        <input type="file" id="imageInput4" style="display: none;">
<div class="d4">
<p><div style="display:flex;">
        <div style=" margin-right: 15px;"><?php echo $usernames[2]; ?></div>
        <div style="border:2px solid black;background-color: white;padding:3px;width:70px;margin:1px;">$<?php echo $userDataArray[$usernames[2]]; ?></div>
       </div></p>
       Enter the number :
       <input type="number" id="myNumber4" min="1" max="6">
        <button onclick="myFunction4()">Submit</button></div>
         <p id="demo"></p>
         

    </div>
</div>
<div id="customResultAlert" class="custom-alert" style="display: none;">
    <div id="resultContent">
      <p id="resultMessage">Better luck next time!</p>
      <p id="winnerName"></p>
    </div>
    <div id="alertButtons">
      <button id="playAgainButton" onclick="window.location.href='index3.php'">Play Again</button>
      <button id="homeButton" onclick="window.location.href='index2.php'">Home</button>
    </div>
  </div>
  
<script>
    function setupImageUpload(circleId, circleImageId, imageInputId) {
      const circle = document.getElementById(circleId);
      const circleImage = document.getElementById(circleImageId);
      const imageInput = document.getElementById(imageInputId);
  
      circle.addEventListener('click', () => {
        imageInput.click();
      });
  
      imageInput.addEventListener('change', (event) => {
        const selectedImage = event.target.files[0];
        if (selectedImage) {
          const imageURL = URL.createObjectURL(selectedImage);
          circleImage.src = imageURL;
        }
      });
    }
  
    setupImageUpload('circle1', 'circleImage1', 'imageInput1');
    setupImageUpload('circle2', 'circleImage2', 'imageInput2');
    setupImageUpload('circle3', 'circleImage3', 'imageInput3');
    setupImageUpload('circle4', 'circleImage4', 'imageInput4');
     
  </script> 
</body>
</html>