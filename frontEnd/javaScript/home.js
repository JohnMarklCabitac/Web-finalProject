// DOM Manipulation
document.addEventListener("DOMContentLoaded", function () {
  var icon = document.querySelector(".fa-bars");
  var fullCart = document.querySelector(".full-menu");

  icon.addEventListener("click", function () {
    if (fullCart.classList.contains("hide")) {
      fullCart.classList.remove("hide");
    } else if (!fullCart.classList.contains("hide")) {
      fullCart.classList.add("hide");
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    var loginbutton = document.querySelector(".loginbutton");
    var registerbutton = document.querySelector(".reg");
    var login = document.querySelector(".main-login-con");
    var signin = document.querySelector(".main-signin-con");
    var scroll = document.querySelector(".scroll");
    var close = document.querySelector(".fa-circle-xmark");
    var rollingImg = document.querySelector(".slideshow-container");

    loginbutton.addEventListener("click", function () {
      rollingImg.classList.add("hide");
      if (!login.classList.contains("hide")) {
        rollingImg.classList.remove("hide");
      }
      if (!signin.classList.contains("hide")) {
        rollingImg.classList.remove("hide");
      }
    });

    loginbutton.addEventListener("click", function () {
      if (login.classList.contains("hide")) {
        login.classList.remove("hide");
        signin.classList.add("hide");
        scroll.classList.add("disable");
      } else if (!login.classList.contains("hide")) {
        login.classList.add("hide");
        scroll.classList.remove("disable");
      }
    });
    registerbutton.addEventListener("click", function () {
      if (signin.classList.contains("hide")) {
        signin.classList.remove("hide");
        login.classList.add("hide");
        scroll.classList.add("disable");
      } else if (!signin.classList.contains("hide")) {
      }
    });
    close.addEventListener("click", function () {
      signin.classList.add("hide");
      rollingImg.classList.remove("hide");
      scroll.classList.romove("disable");
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    var movies = document.querySelector("#category-movies");
    var series = document.querySelector("#category-series");

    movies.style.background =
      "linear-gradient(to right, rgb(247, 28, 61), rgb(255, 165, 46))";
    movies.addEventListener("click", function () {
      movies.style.background =
        "linear-gradient(to right, rgb(247, 28, 61), rgb(255, 165, 46))";
      series.style.background = "";
    });

    series.addEventListener("click", function () {
      series.style.background =
        "linear-gradient(to right, rgb(247, 28, 61), rgb(255, 165, 46))";
      movies.style.background = "";
    });
  });
});

// OOP - Encapsulation
const observer = new IntersectionObserver((entries) => {
  // the entries variable is an array
  // we're using the forEach loop function to iterate through the array
  let length = 0;
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
      entry.target.style.transitionDelay = `${length}ms`;
      length += 100;
      console.log(length);
    } else {
      entry.target.classList.remove("show");
      entry.target.style.transitionDelay = `0ms`;
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));
