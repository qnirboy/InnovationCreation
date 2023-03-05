<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Hirend/Login</title>
    <link rel="stylesheet" href="styles/style-registration.css"/>
    <script src="G:\bootstrap docs\working with bootstrap\hired-again\javascript.js"></script>

    </script>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: book-appointment.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>

  <form class="form" action="" method="post">
      <h1 class="login-title">Login</h1>
      <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
      <input type="password" class="login-input" name="password" placeholder="Password"/>
      <!-- <input type="password" placeholder="Password" id="password" required>
      <input type="password" placeholder="Confirm Password" id="confirm_password" required> -->
      <input type="submit" name="submit" value="Login" class="login-button" >
      <p class="link"><a href="login.php">Click to Login</a></p>
      </form>
</body>
</html>
