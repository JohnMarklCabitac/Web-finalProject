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
