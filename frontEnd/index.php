<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/0d215fdffe.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/login.css" />
    <!-- <script src="./javaScript/home.js"></script> -->
  <title>Login</title>
</head>
<body>
  <!-- Login -->
  <?php
    require('config/config.php');
    require('config/db.php');
    session_start();
    // CRUD - read
    // Get the username and password from the user input
    // if statement 
    if(isset($_POST['submit'])) {
      $inputUsername = $_POST['username'];
      $inputPassword = $_POST['password'];

      // Prepare and execute the SQL query
      $sql = "SELECT * FROM account WHERE username = '$inputUsername' AND password = '$inputPassword'";
      $result = $conn->query($sql);

      // Check if the query returned any rows
      if ($result->num_rows > 0) {
          // Username and password match
          $_SESSION['username'] = $inputUsername;
          header("Location: home.php");
      } else {
          // Username and password do not match
          echo "Username and password are not the same!";
      }
    }

    // Close the database connection
    $conn->close();
    ?>
  <div class="main-login-con">
        <div class="login-form">
          <div class="login-top">
            <img src="./resources/img/logo-01.png" alt="" />
            <h2>Log-in</h2>
          </div>
          <div class="login-form-con">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
              <p>Username</p>
              <div class="login-form-input">
                <input type="text" required id="#" name="username" />
                <i class="fa-solid fa-user fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Password</p>
              <div class="login-form-input">
                <input type="password" required id="#" name="password" />
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <div class="term">
                <input type="checkbox" id="#" />
                Remember me
              </div>
              <div class="login-btn">
                <button type="submit" name="submit">Log In</button>
              </div>
            </form>

            <div class="reg">
              <form action="signup.php">
                <p>Don't have an account? <button type="submit">Register</button></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Signin-end -->
</body>
</html>