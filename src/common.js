document.addEventListener('DOMContentLoaded', () => {

  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  $navbarBurgers.forEach(el => {
    el.addEventListener('click', () => {

      const target = el.dataset.target;
      const $target = document.getElementById(target);

      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });

});

// Theme Dark and Light

const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: light)").matches;
const themes = document.querySelector('.theme');
const checkbox = document.querySelector('.checkbox');
const label = checkbox.closest('label');


const modeToggle = e => {
  if (checkbox.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
  }
}


label.addEventListener('click', modeToggle);