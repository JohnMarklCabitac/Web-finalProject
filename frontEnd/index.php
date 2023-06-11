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
  <<div class="main-login-con">
        <div class="login-form">
          <div class="login-top">
            <img src="./resources/img/logo-01.png" alt="" />
            <h2>Log-in</h2>
          </div>
          <div class="login-form-con">
            <form>
              <p>Username</p>
              <div class="login-form-input">
                <input type="text" required id="#" name="#" />
                <i class="fa-solid fa-user fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Password</p>
              <div class="login-form-input">
                <input type="password" required id="#" name="#" />
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <div class="term">
                <input type="checkbox" id="#" name="#" />
                Remember me
              </div>
            </form>
            <div class="login-btn">
              <button type="submit">Log In</button>
            </div>

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