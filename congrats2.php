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
    <title>User Details</title>
</head>
<body>
    <h2>Usernames and Amounts</h2>
    
    <!-- Print user information directly without using a loop -->
    <p>Welcome - <?php echo $_SESSION['username']; ?></p>
    <p>you have <?php echo $_SESSION['amount']; ?></p>
    <p><?php echo $usernames[0] . ' - ' . $userDataArray[$usernames[0]]; ?></p>
    <p><?php echo $usernames[1] . ' - ' . $userDataArray[$usernames[1]]; ?></p>
    <p><?php echo $usernames[2] . ' - ' . $userDataArray[$usernames[2]]; ?></p>
</body>
</html>
