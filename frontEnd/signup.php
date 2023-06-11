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
        <div class="signin-form">
          
          <div class="signin-top">
            <img src="./resources/img/logo-01.png" alt="" />
            <h2>Sign-up</h2>
          </div>
          <div class="signin-form-con">
            <form>
              <p>Username</p>
              <div class="signin-form-input">
                <input type="text" required />
                <i class="fa-solid fa-user fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Email</p>
              <div class="signin-form-input">
                <input type="email" required />
                <i
                  class="fa-solid fa-envelope fa-lg"
                  style="color: #ffffff"
                ></i>
              </div>
              <p>Password</p>
              <div class="signin-form-input">
                <input type="password" required />
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Repeat Password</p>
              <div class="signin-form-input">
                <input type="password" required />
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
            </form>
            <div class="signin-btn">
              <button type="submit">Sign Up</button>
            </div>
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