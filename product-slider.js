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
  changeSlide('neg');
}

// Slide Right
const slideRight = e => {
  changeSlide('pos');
}


// Find the Current SLide
const currentSlide = e => {
  const currentSlide_number = zoomable__img.getAttribute('data-current-slide');
  return currentSlide_number;
}
// end find the current slide


// Change Slide Right / Left
const changeSlide = e => {
  const slideNum = Number(currentSlide());
  // debugger
  if (e === 'neg') {
    if (slideNum === 1) {
      zoomable__img.setAttribute('data-current-slide', '3')
    } else if (slideNum === 2) {
      zoomable__img.setAttribute('data-current-slide', '1')
    } else {
      zoomable__img.setAttribute('data-current-slide', '2')
    }
  } else if (e === 'pos') {
    if (slideNum === 1) {
      zoomable__img.setAttribute('data-current-slide', '2')
    } else if (slideNum === 2) {
      zoomable__img.setAttribute('data-current-slide', '3')
    } else {
      zoomable__img.setAttribute('data-current-slide', '1')
    }
  }
  console.log(slideNum)
}

// end Change Slide Right / Left


// Slider arrow Events Right / Left
arrow_left.addEventListener('click', slideLeft);
arrow_right.addEventListener('click', slideRight);



// END Product Image Slider