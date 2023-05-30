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
;