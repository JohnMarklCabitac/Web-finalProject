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
    <link rel="stylesheet" href="./css/signup.css" />
  <title>Sign up</title>
</head>
<body>
  <div class="main-signin-con hide">
  <?php 
    require('config/config.php');
    require('config/db.php');
    // CRUD
    // put new account to database
    if(isset($_POST['submit'])) {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $reppass = mysqli_real_escape_string($conn, $_POST['reppass']);

      $query = "INSERT INTO account(username, email, password)
        VALUES ('$username', '$email', '$password')";

      if(mysqli_query($conn, $query)){

      } else {
        echo 'ERROR: '.mysqli_error($conn);
      }
    }
  ?>
        <div class="signin-form">
          
          <div class="signin-top">
            <img src="./resources/img/logo-01.png" alt="" />
            <h2>Sign-up</h2>
          </div>
          <div class="signin-form-con">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
              <p>Username</p>
              <div class="signin-form-input">
                <input type="text" required name="username"/>
                <i class="fa-solid fa-user fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Email</p>
              <div class="signin-form-input">
                <input type="email" required name="email"/>
                <i
                  class="fa-solid fa-envelope fa-lg"
                  style="color: #ffffff"
                ></i>
              </div>
              <p>Password</p>
              <div class="signin-form-input">
                <input type="password" required name="password"/>
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Repeat Password</p>
              <div class="signin-form-input">
                <input type="password" required name="reppass"/>
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <div class="signin-btn">
                <button type="submit" name="submit" value="submit">Sign Up</button>
              </div>
            </form>
            <div class="reg">
              <form action="index.php">
                <p>Already have an account? <button type="submit">Login</button></p>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>