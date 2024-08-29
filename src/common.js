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
const theme = {
  theme: 'Theme',
  light: 'Light',
  dark: 'Dark'
};

const themeToggle = e => {
  const dark = document.querySelector('.fa-sun');
  const light = document.querySelector('.fa-moon');
  // debugger;
  if (localStorage.getItem(theme.theme) === theme.light) {
    document.documentElement.setAttribute('data-theme', 'dark');
    dark.classList.add('is-hidden');
    light.classList.remove('is-hidden');
    localStorage.removeItem(theme.theme);
    localStorage.setItem(theme.theme, theme.light);
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    dark.classList.remove('is-hidden');
    light.classList.add('is-hidden');
    localStorage.removeItem(theme.theme);
    localStorage.setItem(theme.theme, theme.dark);
  }
  console.clear();
  console.log(dark);
  console.log(light);
  console.log(localStorage.getItem(theme.theme));
}

checkbox.addEventListener('click', themeToggle);

// set Light Theme as a default theme
const setDefaultTheme = e => {
  if (localStorage.getItem(theme.theme) === null) {
    localStorage.setItem(theme.theme, theme.light);
  } else {
    themeToggle();
  }
}
setDefaultTheme();
// set Light Theme as a default theme