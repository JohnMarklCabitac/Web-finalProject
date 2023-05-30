document.addEventListener('DOMContentLoaded', function() {
    var signbutton = document.querySelector('.signbutton');
    var signup = document.querySelector('.main-signup-con');
    var scroll = document.querySelector('.scroll');
  
    signbutton.addEventListener('click', function() {
      if(signup.classList.contains('hide')){
            signup.classList.remove('hide');
            scroll.classList.add('disable')
      }
      else if (!signup.classList.contains('hide')) {
        signup.classList.add('hide');
        scroll.classList.remove('disable')
      }
    });
  });
