<?php
$login = false;
$showError = false;

include 'partial/_dbconnect.php'; // Include database connection

// Retrieve usernames and amounts of all users who are playing
$sql = "SELECT username, Amount FROM ddata WHERE username IN ('username1', 'username2', 'username3', 'username4')";
$userData = mysqli_query($conn, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM ddata WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        $row = mysqli_fetch_assoc($result);
        $_SESSION["amount"] = $row['Amount'];
        header("location: index2.php");
    } else {
        $showError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="creative.css">
</head>
<body>
    <div class="box">
        <!-- Display the usernames and amounts -->
        <div class="user-list">
            <h2>Usernames and Amounts</h2>
            <ul>
                <?php while ($userRow = mysqli_fetch_assoc($userData)): ?>
                    <li><?php echo $userRow['username'] . ' - ' . $userRow['Amount']; ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
        
        <!-- Display the login form -->
        <form action="login.php" method="post">
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="text" required="required" name="username" id="username">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password" id="password">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#">Signup</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
