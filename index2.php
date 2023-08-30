<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
    margin: 0;
    padding: 40;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}
:root{
    --background-color: #fff;
    --text-color: #555;
    --title-color: #000;
}
.dark{
    --background-color: #000;
    --text-color: #999;
    --title-color: #fff; 
}
body{
    background: var(--background-color);
    color: var(--text-color);
    transition: background 0.8s, color 0.8s;
}
.content{
    margin-top: 10%;
    max-width: 600px;
}
.content h1{
    font-size: 80px;
    font-family: serif;
    color: var(--title-color);
    font-weight: 600;
}
.content h1 span{
    font-family: serif;
    font-weight: 400;
    font-style: italic;
}
.content a{
    background: #302b2b;
    color:#fff;
    padding: 15px 70px;
    border-radius: 30px;
    cursor: pointer;
    display: inline-block;
    margin-top: 30px;
    text-decoration: none;
}
.image-box img{
    width: 500px;
    height: 700px;
    display: block;
}
.image-box{
    position: absolute;
    bottom: 0;
    right: 10%;
    top:50px;
}
.pattern{
    position: absolute;
    top: 1%;
    left: 40%;
    right: 5%;
    display: flex;
    transform: rotate(40deg);
    z-index: -1;
}
.pattern img{
    width: 450px;
    position: relative;
    top: 15;
    right: 5;
    left: 10;
    animation: move 1s linear infinite alternate-reverse;
}
.pattern img:nth-child(1){
    transform: rotate(-45deg) translate(-70px, -50px);
    animation-delay: 0.5s;
}
.pattern img:nth-child(2){
    transform: rotate(65deg) translate(0px, -40px) scale(.8);
    animation-delay: 1.5s;
}
@keyframes move{
    100%{
        margin-left: 40px;
        margin-top: 20px;
        opacity: 0.3;
    }
}
    </style>
</head>
<body>
    <div class="header" style="width:100%;min-height:100vh;padding:0 8%;position:relative;overflow:hidden;">
        <nav style="display:flex;align-items:center;padding:10px 0;">
            <a href="#" class="logo">
            <img style=" width: 80px;padding:40;" src="mainImg/gaming.png" id="logo">
            <ul style="width: 1500px;text-align: right;list-style:none;margin-right:0px;">
                <li style="display:inline-block;margin:5px 15px;"><a style="text-decoration:none;color:#555;font-weight:500;" href="do.html">Home</a></li>
                <li style="display:inline-block;margin:5px 15px;"><a style="text-decoration:none;color:#555;font-weight:500;" href="google.com">Dashboard</a></li>
                <li style="display:inline-block;margin:5px 15px;"><a style="text-decoration:none;color:#555;font-weight:500;" href="pay.php">Crypto Wallet</a></li>
                <li style="display:inline-block;margin:5px 15px;"><a style="text-decoration:none;color:#555;font-weight:500;" href="#">Profile</a></li>
            </ul>
            <div class="toggle-btn" id="btn" style="background:#302b2b;color:#fff;display:flex;align-items:center;justify-content:center;width:150px;height:40px;border-radius:20px;">
                <span id="btnText">Dark</span>
                <img style=" width:25px;margin-left:10px;" src="mainImg/moon.png" id="btnIcon" >
            </div>
        </a>
        </nav>

        <div class="content">
           <h1>Crypto</h1>
           <h1><span style=>Roll</span></h1>
           <p>Rolling into the Future of Gaming!</p> 
           <a style="background:#302b2b;color:#fff;padding:15px 70px;border-radius:30px;cursor: pointer;display:inline-block;
           margin-top:30px;text-decoration:none;" href="verify_friends.php">PLAY!</a>
        </div>

        <div class="image-box">
            <img src="mainImg/pngwing.com (1).png" height="100px" width="100px">
            <div class="pattern">
                <img src="mainImg/—Pngtree—dice skill toy game_6471495.png">
                <img src="mainImg/—Pngtree—dice skill toy game_6471495.png">
            </div>
        </div>
    </div>

    <script>
        let btn = document.getElementById("btn");
        let btnText = document.getElementById("btnText");
        let btnIcon = document.getElementById("btnIcon");
        let logo = document.getElementById("logo");
        btn.onclick = function(){
            document.body.classList.toggle("dark");

            if(document.body.classList.contains("dark")){
               btnIcon.src = "mainImg/sun.png";
               btnText.innerHTML = "Light";
               logo.src = "mainImg/gaming.png";
            }
            else{
                btnIcon.src = "mainImg/moon.png";
                btnText.innerHTML = "Dark"; 
                logo.src = "mainImg/gaming.png"; 
            }
        }
    </script>
</body>
</html>