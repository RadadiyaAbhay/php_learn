var headColor = document.getElementById('headColor')
var logoImg = document.getElementById('logoImg');
var reswhite = document.querySelectorAll('.reswhite')
console.log(reswhite);



  window.onscroll = function() {scrollFunction()};

function scrollFunction() {

  if (document.documentElement.scrollTop > 400) {

        logoImg.src = 'img/dark-logo.avif'
        headColor.style.backgroundColor = 'white';

        reswhite.forEach(function(element) {
            element.style.color = 'black';
          });

  }
    if((document.documentElement.scrollTop < 400)) {
      hide(0);
        headColor.style.backgroundColor = 'rgba(0,0,0,0)';
        logoImg.src = 'img/logoW.avif'

        reswhite.forEach(function(element) {
            element.style.color = 'white';
          });
        
    }
  
  
}


