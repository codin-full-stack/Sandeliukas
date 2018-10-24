var clickEl  = document.querySelector('.side-menu-hamburger');
var menuEl = document.querySelector('.side-menu');

console.log(clickEl);

clickEl.addEventListener('click', function(e) {
  if(menuEl.classList.contains('active')) {
    e.currentTarget.classList.remove('open');
    menuEl.classList.remove('active');
  } else {
    e.currentTarget.classList.add('open');
    menuEl.classList.add('active');
  }
 
});