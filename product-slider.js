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
  // console.log(e.target);
  changeSlide('neg');
}


// Find the Current SLider
const currentSlide = e => {
  const currentSlide_number = zoomable__img.getAttribute('data-current-slide');
  return currentSlide_number;
}
// end find the current slider

const changeSlide = e => {
  const slideNum = Number(currentSlide());
  const slideLoop = [1, 2, 3];
  console.log(slideNum)

  if (e === 'neg') {
    if (slideNum === 1) { }
  }
}



arrow_left.addEventListener('click', slideLeft);



// END Product Image Slider