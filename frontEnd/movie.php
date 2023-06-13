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

    // Close the database connection
    $conn->close();
  ?>
  <div class="comments">
    <h4>Comments</h4>
    <hr>
    <form action="">
      <input type="text">
    </form>

  </div>

</body>
</html>