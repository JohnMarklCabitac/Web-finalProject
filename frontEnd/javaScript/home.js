document.addEventListener('DOMContentLoaded', function() {
    var icon = document.querySelector('.fa-bars');
    var fullCart = document.querySelector('.full-menu');
  
    icon.addEventListener('click', function() {
      if(fullCart.classList.contains('hide')){
            fullCart.classList.remove('hide');
      }
      else if (!fullCart.classList.contains('hide')) {
        fullCart.classList.add('hide');
      }
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    var signbutton = document.querySelector('.loginbutton');
    var registerbutton = document.querySelector('.reg');
    var login = document.querySelector('.main-login-con');
    var signin = document.querySelector('.main-signin-con');
    var scroll = document.querySelector('.scroll');
    var close = document.querySelector('.fa-circle-xmark');
  
    signbutton.addEventListener('click', function() {
      if(login.classList.contains('hide')){
            login.classList.remove('hide');
            signin.classList.add('hide')
            scroll.classList.add('disable')
      }
      else if (!login.classList.contains('hide')) {
        login.classList.add('hide');
        scroll.classList.remove('disable')
      }
      
    });
    registerbutton.addEventListener('click', function() {
      if(signin.classList.contains('hide')){
        signin.classList.remove('hide')
        login.classList.add('hide')
        scroll.classList.add('disable')
      }
    });
    close.addEventListener('click', function() {
        signin.classList.add('hide')
        scroll.classList.romove('disable')
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var movies = document.querySelector('#category-movies');
    var series = document.querySelector('#category-series');
    
    movies.style.background = 'linear-gradient(to right, rgb(247, 28, 61), rgb(255, 165, 46))';
    movies.addEventListener('click', function() {
      movies.style.background = 'linear-gradient(to right, rgb(247, 28, 61), rgb(255, 165, 46))';
      series.style.background = '';
    });
  
    series.addEventListener('click', function() {
      series.style.background = 'linear-gradient(to right, rgb(247, 28, 61), rgb(255, 165, 46))';
      movies.style.background = '';
    });
  });