<?php
session_start();

// Retrieve all usernames from the session variable
$allUsernames = $_SESSION['allUsernames'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations Page</title>
    <!-- Add your CSS and other head content here -->
</head>
<body>
    <div class="congrats-box">
        <h2>Congratulations!</h2>
        <p>All friends have logged in:</p>
        <ul>
            <?php foreach ($allUsernames as $username): ?>
                <li><?php echo $username; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
