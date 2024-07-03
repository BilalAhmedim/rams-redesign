// Product Image Slider

const carusel = document.querySelectorAll('.carusel'),
  zoomable__img = document.querySelector('.zoomable__img'),
  arrow_left = document.querySelector('.arrow-left'),
  arrow_right = document.querySelector('.arrow-right');


// Image carusel
const retrieveImage = event => {
  const Element = event.target.getAttribute('data-src-large');
  console.log(Element);
  zoomable__img.src = Element;
}
carusel.forEach(e => (e.addEventListener('click', retrieveImage)));

// Slide Left
const slideLeft = e => {
  console.log(e.target);
  currentSlide();
}


// Find Current SLider
const currentSlide = e => {
  const currentSlide_number = zoomable__img.getAttribute('data-current-slide');
  console.log(currentSlide_number);
}



arrow_left.addEventListener('click', slideLeft);



// END Product Image Slider