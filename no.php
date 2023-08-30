<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello wourld</title>
    <link rel="stylesheet" href="creative2.css">
  </head>
  <body>
  <div class="container">
    <div class="registration-box">
      <div class="box">
      <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $usernames = $_POST['username'];
        $email = $_POST['email'];
        $passwords = $_POST['password'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "registration";

        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Sorry, connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `ddata` (`Username`, `Email_id`, `Password`) VALUES ('$usernames','$email', '$passwords')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            mysqli_close($conn);
            header("Location:index2.php"); // Redirect to a success page
            exit();
        } else {
            $error_message = "Registration failed: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>
    <form method="POST" action="no.php">
    <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="username" required="required" dir="ltr">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required" dir="ltr">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required" dir="ltr">
                <span>Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="cpassword" required="required" dir="ltr">
                <span>Confirm Password</span>
                <i></i>
            </div>
            <input type="submit" value="Sign Up" dir="ltr">
        </form>

    <?php
    if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>
    </div>
</body>
</html>

      
    </div>
  </div>
   
  </body>
</html>