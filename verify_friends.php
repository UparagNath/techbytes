<?php
include 'partial/_dbconnect.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username1 = $_POST["username1"];
    $username2 = $_POST["username2"];
    $username3 = $_POST["username3"];

    // Query to check if all three usernames exist in the database
    $sql = "SELECT COUNT(*) AS total FROM ddata WHERE username IN ('$username1', '$username2', '$username3')";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $totalUsernames = $row['total'];

    if ($totalUsernames == 3) {
        session_start();
        $_SESSION["usernames"] = array($username1, $username2, $username3);
        header("location: index3.php");
    } else {
        header("location: login.php"); // Redirect back if usernames don't match
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Usernames</title>
    <link rel="stylesheet" href="creative3.css">

</head>
<body>
    <div class="box">
        <form action="verify_friends.php" method="post">
            <h2>Enter Usernames</h2>
            <div class="inputBox">
                <input type="text" required="required" name="username1" id="username1">
                <span>Friend 1 Username</span>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="username2" id="username2">
                <span>Friend 2 Username</span>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="username3" id="username3">
                <span>Friend 3 Username</span>
            </div>
            <input type="submit" value="Check Usernames">
        </form>
    </div>
</body>
</html>
