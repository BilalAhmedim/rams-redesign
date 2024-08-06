// Product Image Slider
const carusel = document.querySelectorAll('.carusel'),
  zoomable__img = document.querySelector('.zoomable__img'),
  arrow_left = document.querySelector('.arrow-left'),
  arrow_right = document.querySelector('.arrow-right');


// Image carusel
const retrieveImage = event => {
  const largeSrc = event.target.getAttribute('data-src-large'),
    imgSrc = event.target.getAttribute('data-img-src');
  zoomable__img.setAttribute('data-current-slide', imgSrc)
  zoomable__img.src = largeSrc;
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
  const slideNum = Number(currentSlide()),
    slide_data1 = document.querySelector('.carusel[data-img-src="1"]').getAttribute('data-src-large'),
    slide_data2 = document.querySelector('.carusel[data-img-src="2"]').getAttribute('data-src-large'),
    slide_data3 = document.querySelector('.carusel[data-img-src="3"]').getAttribute('data-src-large');
  // debugger
  if (e === 'neg') {
    if (slideNum === 1) {
      zoomable__img.setAttribute('data-current-slide', '3')
      zoomable__img.src = slide_data3;
    } else if (slideNum === 2) {
      zoomable__img.setAttribute('data-current-slide', '1')
      zoomable__img.src = slide_data1;
    } else {
      zoomable__img.setAttribute('data-current-slide', '2')
      zoomable__img.src = slide_data2;
    }
  } else if (e === 'pos') {
    if (slideNum === 1) {
      zoomable__img.setAttribute('data-current-slide', '2')
      zoomable__img.src = slide_data2;
    } else if (slideNum === 2) {
      zoomable__img.setAttribute('data-current-slide', '3')
      zoomable__img.src = slide_data3;
    } else {
      zoomable__img.setAttribute('data-current-slide', '1')
      zoomable__img.src = slide_data1;
    }
  }
}

// end Change Slide Right / Left


// Slider arrow Events Right / Left
arrow_left.addEventListener('click', slideLeft);
arrow_right.addEventListener('click', slideRight);



// END Product Image Slider