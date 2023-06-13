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
    <?php
      require('config/config.php');
      require('config/db.php');
      session_start();
      // CRUD
      // update password to database
      if(isset($_POST['submit'])) {
        $inputUsername = $_POST['username'];
        $oldPassword = $_POST['old_password'];
        $newPassword = $_POST['new_password'];
        // Check if the old password matches the password in the database
        $sql = "SELECT * FROM account WHERE username = '$inputUsername' AND password = '$oldPassword'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Update the password in the database
            $updateSql = "UPDATE account SET password = '$newPassword' WHERE username = '$inputUsername'";
            if ($conn->query($updateSql) === TRUE) {
                echo "<span style='color: white;'>Password updated successfully!</span>";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "<span style='color: white;'>Invalid old password!</span>";
        }
      }
    ?>
  <div class="main-signin-con hide">
        <div class="signin-form">
          
          <div class="signin-top">
            <img src="./resources/img/logo-01.png" alt="" />
            <h2>Sign-up</h2>
          </div>
          <div class="signin-form-con">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
              <p>Username</p>
              <div class="signin-form-input">
                <input type="text" required name="username" value="<?php echo $_SESSION['username'] ?>"/>
                <i class="fa-solid fa-user fa-lg" style="color: #ffffff"></i>
              </div>
              <p>Old Password</p>
              <div class="signin-form-input">
                <input type="password" required name="old_password"/>
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <p>New Password</p>
              <div class="signin-form-input">
                <input type="password" required name="new_password"/>
                <i class="fa-solid fa-lock fa-lg" style="color: #ffffff"></i>
              </div>
              <div class="signin-btn">
                <button type="submit" name="submit" value="submit">Update</button>
              </div>
              <div class="signin-btn">
                <button type="button"><a href="home.php">Back</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
</body>
</html>