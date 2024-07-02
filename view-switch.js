// Product Image Changer
const carusel = document.querySelectorAll('.carusel'),
  zoomable__img = document.querySelector('.zoomable__img');


const retrieveImage = event => {
  const Element = event.target.getAttribute('data-src-large');
  console.log(Element);
  zoomable__img.src = Element;
}

carusel.forEach(e => (e.addEventListener('click', retrieveImage)));

// END Product Image Changer