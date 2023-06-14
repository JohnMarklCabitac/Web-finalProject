<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/movie.css">
  <script
      src="https://kit.fontawesome.com/0d215fdffe.js"
      crossorigin="anonymous"
    ></script>
  <script src="./javaScript/home.js"></script>
  <title>Eyewatch Movies</title>
</head>
<body>
  <?php include 'navbar.php'?>

  <?php
    require('config/config.php');
    require('config/db.php');
    session_start();

    // Query all movies from the 'movies' table
    $sql = "SELECT * FROM movies WHERE id = ". $_GET['id'] ."";
    // $result is an array
    $result = $conn->query($sql);

    // Check if there are any movies in the database
    if ($result->num_rows > 0) {
        // Loop through each row of the result and output the movie details
        while ($row = $result->fetch_assoc()) {
            echo '<div class="movie-card">';
            echo '<img src="./resources/img/moviePoster/'. $row['filename'] . '" />';
            echo '<div class="details-card">';
            echo "<h1>" . $row["description"] . "</h1>";
            echo "<p>" . $row["title"] . "</p>";
            echo '</div></div>';
        }
    } else {
        echo "No movies found in the database.";
    }
  ?>

  <?php
    // CRUD - Create
    if(isset($_POST['submit'])) {
      $comment = $_POST['comment'];

      // Prepare and execute the SQL query
      $movie_id = $_GET['id'];
      $acc_username = $_SESSION['username'];
      $sql = "INSERT INTO comments (comment, movie_id, acc_username) VALUES ('$comment', $movie_id, '$acc_username')";

      if(mysqli_query($conn, $sql)){
        unset($_POST['submit']);
      } else {
        echo 'ERROR: '.mysqli_error($conn);
        unset($_POST['submit']);
      }
    }

    unset($_POST['submit']);
  
  ?>
  <div class="comments">
    <form method="POST" action="">
      <div class="comment-input">
        <h4>Comments</h4>
        <input type="text" name="comment" placeholder="Add a comment...">
        <button type="submit" name="submit">Post</button>
      </div>
    </form>
    <?php
      // CRUD - read
      // Query all movies from the 'movies' table
      $sql = "SELECT * FROM comments WHERE movie_id = ". $_GET['id'] ."";
      // $result is an array
      $result = $conn->query($sql);

      // Check if there are any comments in the database
      if ($result->num_rows > 0) {
          // Loop through each row of the result and output the movie details
          while ($row = $result->fetch_assoc()) {
              echo '<div class="comment-card">';
              echo '<p class="comment-username">' . $row["acc_username"] . '</p>';
              echo "<p>" . $row["comment"] . "</p>";
              echo '</div>';
          }
      } else {
        echo '<div class="comment-card">';
        echo '<p class="comment-username">Empty</p>';
        echo '</div>';
      }
      
      // Close the database connection
      $conn->close();
    ?>

  </div>

</body>
</html>