<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         body {
    background: url(23673.jpg);
    background-repeat: no-repeat;
    background-size: 1485px 750px;
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
  }
  .container {
    text-align: center;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
  }
  h2 {
    color: #333;
    margin-bottom: 10px;
  }
  p {
    color: #666;
    margin-bottom: 20px;
  }
  button {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin: 5px;
    font-size: 14px;
  }
  button:hover {
    background-color: #45a049;
  }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="container">
        <h1>Welcome, My Gameing Patner!</h1>
        <p>Hi there, I am here to thank you for playing our game. We are glad that you are here. Are you a new player?</p>
        <button id="yesButton">Yes</button>
        <button id="noButton">No</button>
        <p id="responseMessage"></p>
      </div>
      
      <script>
        document.getElementById("yesButton").addEventListener("click", function() {
  // Redirect to the login page
  window.location.href = "login.php";
});

document.getElementById("noButton").addEventListener("click", function() {
  // Redirect to the registration page
  window.location.href = "no.php";
});
      </script>  
</body>
</html>