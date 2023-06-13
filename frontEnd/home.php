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
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/rollingPoster.css" />
    <script defer src="./javaScript/home.js"></script>

    <title>Eyewatch/home</title>
  </head>
  <body class="scroll">
    <div class="main-container">
      <!-- navbar -->
      <?php include 'navbar.php'?>
      <!-- navbar-end -->

      <!-- Rolling-poster -->
      <div class="slideshow-container">
        <div class="slides">
          <img src="./resources/img/Poster/antmanPoster.jpg" alt="Image 10" />
          <img
            src="./resources/img/Poster/AnyConv.com__tetrisPoster.jpg"
            alt="Image 1"
          />
          <img src="./resources/img/Poster/fastXPoster.jpg" alt="Image 2" />
          <img src="./resources/img/Poster/ghostedPoster.jpg" alt="Image 3" />
          <img
            src="./resources/img/Poster/guardiansPoster.jpeg"
            alt="Image 4"
          />
          <img src="./resources/img/Poster/johnWick4Poster.jpg" alt="Image 5" />
          <img src="./resources/img/Poster/marioPoster.webp" alt="Image 6" />
          <img
            src="./resources/img/Poster/pope'sExorcistPoster.jpg"
            alt="Image 7"
          />
          <img src="./resources/img/Poster/shazamPoster.jpg" alt="Image 8" />
          <img
            src="./resources/img/Poster/spiderversePoster.jpg"
            alt="Image 9"
          />
        </div>
        <div class="dot-tracker"></div>
      </div>
      <script src="./javaScript/rollingPoster.js"></script>
      <!-- Rolling-poster-end-->

      <!-- Middle-banner -->
      <div class="middle-banner">
        <div class="mid-banner-1">
          <div id="social-f" class="social">
            <i class="fa-brands fa-facebook-f fa-xl" style="color: #ffffff"></i>
          </div>
          <div id="social-t" class="social">
            <i class="fa-brands fa-twitter fa-xl" style="color: #ffffff"></i>
          </div>
          <div id="social-m" class="social">
            <i
              class="fa-brands fa-facebook-messenger fa-xl"
              style="color: #ffffff"
            ></i>
          </div>
          <div id="social-r" class="social">
            <i class="fa-brands fa-reddit fa-xl" style="color: #ffffff"></i>
          </div>
          <div id="social-tl" class="social">
            <i class="fa-brands fa-telegram fa-xl" style="color: #ffffff"></i>
          </div>
          <div id="social-i" class="social">
            <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff"></i>
          </div>
        </div>
        <div class="mid-banner-2">
          <p>POPULAR</p>
          <div id="category-movies" class="category">
            <i class="fa-solid fa-play fa-lg" style="color: #ffffff"></i>
            <p>Movies</p>
          </div>
          <div id="category-series" class="category">
            <i class="fa-solid fa-list fa-lg" style="color: #ffffff"></i>
            <p>Series</p>
          </div>
        </div>
      </div>
      <!-- Middle-banner-end -->

      <!-- Movies -->
      <div class="movie">
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/65.jpg" alt="65" />
          </div>
          <div class="movie-name">
            <p>65</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>120m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>

        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/dungeons&dragons.jpg"
              alt="dungeons&dragons"
            />
          </div>
          <div class="movie-name">
            <p>Dungeons & Dragons</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>134m</p>
            </div>
            <div class="genre">
              <p>Fantasy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/ghosted.jpg" alt="ghosted" />
          </div>
          <div class="movie-name">
            <p>Ghosted</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>116m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/johnWick4.jpg"
              alt="johnWick4"
            />
          </div>
          <div class="movie-name">
            <p>John Wick 4</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>169m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/murderMystery2.jpg"
              alt="murderMystery2"
            />
          </div>
          <div class="movie-name">
            <p>Murder Mystery 2</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>89m</p>
            </div>
            <div class="genre">
              <p>Mystery</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/pope'sExorcist.jpg"
              alt="pope'sExorcist"
            />
          </div>
          <div class="movie-name">
            <p>Pope's Exorcist</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>103m</p>
            </div>
            <div class="genre">
              <p>Horror</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/tin&tina.jpg"
              alt="tin&tina"
            />
          </div>
          <div class="movie-name">
            <p>Tin & Tina</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>119m</p>
            </div>
            <div class="genre">
              <p>Thriller</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/unlocked.jpg"
              alt="unlocked"
            />
          </div>
          <div class="movie-name">
            <p>Unlocked</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>117m</p>
            </div>
            <div class="genre">
              <p>Thriller</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/jungE.jpg" alt="June_E" />
          </div>
          <div class="movie-name">
            <p>June_E</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>99m</p>
            </div>
            <div class="genre">
              <p>Sci-fi</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/sharper.jpg" alt="Sharper" />
          </div>
          <div class="movie-name">
            <p>Sharper</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>116m</p>
            </div>
            <div class="genre">
              <p>Drama</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/shazam.jpg" alt="Shazam" />
          </div>
          <div class="movie-name">
            <p>Shazam</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>130m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/tetris.jpg" alt="Tetris" />
          </div>
          <div class="movie-name">
            <p>Tetris</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>118m</p>
            </div>
            <div class="genre">
              <p>Drama</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/legionofSuperHeroes.jpg"
              alt="legionofSuperHeroes"
            />
          </div>
          <div class="movie-name">
            <p>Legion of Super-Heroes</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>83m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/knockattheCabin.jpg"
              alt="knockattheCabin"
            />
          </div>
          <div class="movie-name">
            <p>Knock at the Cabin</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>100m</p>
            </div>
            <div class="genre">
              <p>Horror</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/antMan.jpg"
              alt="Ant-Man and the Wasp: Quantumania"
            />
          </div>
          <div class="movie-name">
            <p>Ant-Man and the Wasp: Quantumania</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>125m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/fastX.jpg" alt="Fast X" />
          </div>
          <div class="movie-name">
            <p>Fast X</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>141m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/theSuperMarioBros..jpg"
              alt="theSuperMarioBros."
            />
          </div>
          <div class="movie-name">
            <p>The Super Mario Bros.</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>92m</p>
            </div>
            <div class="genre">
              <p>Fantasy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/spiderMan.jpg"
              alt="Spider-Man: Across the Spider-Verse"
            />
          </div>
          <div class="movie-name">
            <p>Spider-Man: Across the Spider-Verse</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>140m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/guardiansOfTheGalaxyVol3.jpg"
              alt="Guardians of the Galaxy Vol. 3"
            />
          </div>
          <div class="movie-name">
            <p>Guardians of the Galaxy Vol. 3</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>150m</p>
            </div>
            <div class="genre">
              <p>Sci-fi</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/theLittleMermaid.jpg"
              alt="The Little Mermaid"
            />
          </div>
          <div class="movie-name">
            <p>The Little Mermaid</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>135m</p>
            </div>
            <div class="genre">
              <p>Fantasy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/theMothersDay.jpg"
              alt="Mother's Day"
            />
          </div>
          <div class="movie-name">
            <p>Mother's Day</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>94m</p>
            </div>
            <div class="genre">
              <p>Thriller</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/robots.jpg" alt="Robots" />
          </div>
          <div class="movie-name">
            <p>Robots</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>93m</p>
            </div>
            <div class="genre">
              <p>Sci-fi</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/loveAgain.jpg"
              alt="Love Again"
            />
          </div>
          <div class="movie-name">
            <p>Love Again</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>104m</p>
            </div>
            <div class="genre">
              <p>Romance</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/hypnotic.jpg"
              alt="Hypnotic"
            />
          </div>
          <div class="movie-name">
            <p>Hypnotic</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>93m</p>
            </div>
            <div class="genre">
              <p>Thriller</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/warOfTheWorldsTheAttack.jpg"
              alt="War of the Worlds: The Attack"
            />
          </div>
          <div class="movie-name">
            <p>War of the Worlds: The Attack</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>85m</p>
            </div>
            <div class="genre">
              <p>Sci-fi</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/paint.jpg" alt="Paint" />
          </div>
          <div class="movie-name">
            <p>Paint</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>96m</p>
            </div>
            <div class="genre">
              <p>Comedy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/bookClub.jpg"
              alt="Book Club: The Next Chapter"
            />
          </div>
          <div class="movie-name">
            <p>Book Club: The Next Chapter</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>107m</p>
            </div>
            <div class="genre">
              <p>comedy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/sweetWater.jpg"
              alt="Sweetwater"
            />
          </div>
          <div class="movie-name">
            <p>Sweetwater</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>118m</p>
            </div>
            <div class="genre">
              <p>Sports</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/evilDeadRise.jpg"
              alt="Evil Dead Rise"
            />
          </div>
          <div class="movie-name">
            <p>Evil Dead Rise</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>96m</p>
            </div>
            <div class="genre">
              <p>Horror</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/guyRitchie'sTheCovenant.jpg"
              alt="Guy Ritchie's the Covenant"
            />
          </div>
          <div class="movie-name">
            <p>Guy Ritchie's the Covenant</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>123m</p>
            </div>
            <div class="genre">
              <p>War</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/bigGeorgeForeman.jpg"
              alt="Big George Foreman"
            />
          </div>
          <div class="movie-name">
            <p>Big George Foreman</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>129m</p>
            </div>
            <div class="genre">
              <p>Sports</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/thsBlackDemonPoster.jpg"
              alt="The Black Demon"
            />
          </div>
          <div class="movie-name">
            <p>The Black Demon</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>100m</p>
            </div>
            <div class="genre">
              <p>Mystery</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img src="./resources/img/moviePoster/sisuPoster.jpg" alt="Sisu" />
          </div>
          <div class="movie-name">
            <p>Sisu</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>91m</p>
            </div>
            <div class="genre">
              <p>War</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/toCatchAKillerPoster.jpg"
              alt="To Catch a Killer"
            />
          </div>
          <div class="movie-name">
            <p>To Catch a Killer</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>119m</p>
            </div>
            <div class="genre">
              <p>Thriller</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/brooklyn45Poster.jpg"
              alt="Brooklyn 45"
            />
          </div>
          <div class="movie-name">
            <p>Brooklyn 45</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>92m</p>
            </div>
            <div class="genre">
              <p>Horror</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/theSecretKingdom.jpg"
              alt="The Secret Kingdom"
            />
          </div>
          <div class="movie-name">
            <p>The Secret Kingdom</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>98m</p>
            </div>
            <div class="genre">
              <p>Fantasy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/iLikeMovies.jpg"
              alt="I Like Movies"
            />
          </div>
          <div class="movie-name">
            <p>I Like Movies</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>99m</p>
            </div>
            <div class="genre">
              <p>Comedy</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/transformersRiseoftheBeastsPoster.jpg"
              alt="Transformers: Rise of the Beasts"
            />
          </div>
          <div class="movie-name">
            <p>Transformers: Rise of the Beasts</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>127m</p>
            </div>
            <div class="genre">
              <p>Action</p>
            </div>
          </div>
        </div>
        <div class="movie-con hidden">
          <div class="movie-poster">
            <img
              src="./resources/img/moviePoster/youToYouPoster.jpg"
              alt="You Do You"
            />
          </div>
          <div class="movie-name">
            <p>You Do You</p>
          </div>
          <div class="details-con">
            <div class="movie-details">
              <p>2023</p>
              <p>99m</p>
            </div>
            <div class="genre">
              <p>Comedy</p>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>


<!-- 
  Generate a movie description for each of the titles below:
65
Dungeons & Dragons
Ghosted
John Wick 4
Murder Mystery 2
Pope's Exorcist
Tin & Tina
Unlocked
June_E
Sharper
Shazam
Tetris
Legion of Super-Heroes
Knock at the Cabin
Ant-Man and the Wasp: Quantumania
Fast X
The Super Mario Bros.
Spider-Man: Across the Spider-Verse
Guardians of the Galaxy Vol. 3
The Little Mermaid
Mother's Day
Robots
Love Again
Hypnotic
War of the Worlds: The Attack
Paint
Book Club: The Next Chapter
Sweetwater
Evil Dead Rise
Guy Ritchie's the Covenant
Big George Foreman

65: A retired special forces officer is trapped in a never-ending time loop on the day of his death.
Dungeons & Dragons: A group of adventurers embark on a dangerous journey through a magical realm in order to save their kingdom.
Ghosted: A man is recruited by a secret government agency to track down his former partner who has gone rogue.
John Wick 4: John Wick is on the run after killing a member of the High Table. He must find a way to escape New York City before a $14 million contract on his life expires.
Murder Mystery 2: A couple on vacation in Europe become embroiled in a murder mystery when they are framed for the murder of an elderly billionaire.
Pope’s Exorcist: A young priest is sent to Rome to train as an exorcist and must confront his own demons in order to save a young girl from possession.
Tin & Tina: A young couple move into their dream home only to discover that it is haunted by the ghost of a previous owner.
Unlocked: A CIA agent must race against time to stop a biological attack on London.
June_E: A woman wakes up with no memory of who she is or how she got there and must piece together her past before it’s too late.
Sharper: A con artist uses her skills to swindle wealthy men out of their money but finds herself in over her head when she becomes the target of an FBI investigation.
Shazam: A teenage boy is given the power to transform into an adult superhero by saying the word “Shazam!”.
Tetris: The story of how the classic video game Tetris was created and became a worldwide phenomenon.
Legion of Super-Heroes: A group of teenage superheroes from the future travel back in time to recruit Superman to help them save the universe.
Knock at the Cabin: A group of friends on a weekend getaway are terrorized by an unknown assailant.
Ant-Man and the Wasp: Quantumania: Scott Lang teams up with Hope van Dyne and Hank Pym once again to explore the quantum realm and uncover secrets from their past.
Fast X: The tenth installment in the Fast and Furious franchise sees Dom Toretto facing off against his most dangerous enemy yet.
The Super Mario Bros.: Two brothers must rescue Princess Peach from the evil Bowser in this live-action adaptation of the classic video game.
Spider-Man: Across the Spider-Verse: The sequel to Spider-Man: Into the Spider-Verse sees Miles Morales teaming up with other versions of Spider-Man from different dimensions to stop a new threat.
Guardians of the Galaxy Vol. 3: The third installment in the Guardians of the Galaxy franchise sees Peter Quill and his team facing off against a new threat while also dealing with personal issues.
The Little Mermaid: A live-action adaptation of the classic Disney animated film about a mermaid who falls in love with a human prince.
Mother’s Day: The lives of several mothers intersect on Mother’s Day.
Robots: In a world where robots have replaced humans in most jobs, one robot sets out to prove that he can be more than just a machine.
Love Again: A woman must choose between two men when her ex-boyfriend returns after years apart.
Hypnotic: A detective investigates a series of mysterious deaths that all seem to be connected to hypnosis.
War of the Worlds: The Attack: An alien invasion threatens humanity’s survival in this modern retelling of H.G. Wells’ classic novel.
Paint: An artist struggling with writer’s block finds inspiration in an unexpected place.
Book Club: The Next Chapter: The members of a book club reunite for another round of literary discussions and personal revelations.
Sweetwater: A young woman seeks revenge against those who wronged her family in this Western revenge tale.
Evil Dead Rise: Two estranged sisters must team up to fight off demonic forces when they become trapped in an apartment building during an outbreak of evil deadites.
Guy Ritchie’s The Covenant: Four friends discover they are descendants of powerful witches and must use their newfound powers to stop an evil force from destroying their town.
 -->