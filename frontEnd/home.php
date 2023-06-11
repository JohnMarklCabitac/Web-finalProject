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
    <script src="./javaScript/home.js"></script>

    <title>Eyewatch/home</title>
  </head>
  <body class="scroll">
    <div class="main-container">
      <!-- navbar -->
      <div class="navbar">
        <div class="navbar-sub">
          <div class="menu">
            <i class="fa-solid fa-bars fa-2xl"></i>
          </div>
          <img src="resources/img/logo.png" alt="EyewatchLogo" />
          <div class="full-menu hide">
            <div class="menu-option">
              <a href="home.html">Home</a>
            </div>
            <div class="menu-option">
              <a href="#">Movies</a>
            </div>
            <div class="menu-option">
              <a href="#">Genre</a>
            </div>
            <div class="menu-option">
              <a href="#">Trending</a>
            </div>
            <div class="menu-option">
              <a href="#">Country</a>
            </div>
          </div>
        </div>

        <div class="navbar-sub-1">
          <div class="search-bar">
            <div class="search-area">
              <form>
                <input
                  type="text"
                  id="movie"
                  name="movie"
                  placeholder="Search movies..."
                />
              </form>
            </div>
            <div class="search-btn">
              <i
                class="fa-solid fa-magnifying-glass fa-lg"
                style="color: #f71c3d"
              ></i>
            </div>
          </div>
        </div>
        <div class="navbar-sub-2">
          <div class="log-in">
            <button class="loginbutton" type="button">
              <i class="fa-solid fa-user fa-lg" style="color: #ffffff"></i>
              <p>Log in</p>
            </button>
          </div>
        </div>
      </div>
      <!-- navbar-end -->

      <!-- Login -->
      <div class="main-login-con hide">
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

              <p>Repeat Password</p>
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
              <p>Don't have an account? <a href="#">Register</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login-end -->

      <!-- Signin -->
      <div class="main-signin-con hide">
        <div class="signin-form">
          <div class="close">
            <i
              class="fa-sharp fa-regular fa-circle-xmark fa-xl"
              style="color: #ffa53e"
            ></i>
          </div>
          <div class="signin-top">
            <img src="./resources/img/logo-01.png" alt="" />
            <h2>Sign-in</h2>
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
              <button type="submit">Sign in</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Signin-end -->

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
        <div class="movie-con">
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

        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
        <div class="movie-con">
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
      </div>
    </div>
  </body>
</html>
