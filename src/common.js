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
const checkbox = document.querySelector('.checkbox');
const dark = document.querySelector('.fa-moon');
const light = document.querySelector('.fa-sun');
const theme = {
  theme: 'Theme',
  light: 'Light',
  dark: 'Dark'
};

const applyTheme = (themeName) => {
  if (themeName === theme.dark) {
    document.documentElement.setAttribute('data-theme', 'dark');
    dark.classList.add('is-hidden');
    light.classList.remove('is-hidden');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    dark.classList.remove('is-hidden');
    light.classList.add('is-hidden');
  }
  localStorage.setItem(theme.theme, themeName);
  console.log(`Current theme stored -> ${localStorage.getItem(theme.theme)}`);
};

const themeToggle = () => {
  const currentTheme = localStorage.getItem(theme.theme);
  if (currentTheme === theme.light) {
    applyTheme(theme.dark);
  } else {
    applyTheme(theme.light);
  }
};

checkbox.addEventListener('click', themeToggle);

// Set Light Theme as a default theme
const setDefaultTheme = () => {
  const savedTheme = localStorage.getItem(theme.theme);
  if (savedTheme === null) {
    localStorage.setItem(theme.theme, theme.light);
  }
  applyTheme(localStorage.getItem(theme.theme));
};

setDefaultTheme();


// set Light Theme as a default theme