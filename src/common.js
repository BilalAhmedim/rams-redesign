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

const lightTheme = e => {
  document.documentElement.setAttribute('data-theme', 'dark');
  dark.classList.add('is-hidden');
  light.classList.remove('is-hidden');
  localStorage.setItem(theme.theme, theme.dark);
  console.log('light code block theme storage -> ' + localStorage.getItem(theme.theme));
}

const darkTheme = e => {
  document.documentElement.setAttribute('data-theme', 'light');
  dark.classList.remove('is-hidden');
  light.classList.add('is-hidden');
  localStorage.setItem(theme.theme, theme.light);
  console.log('dark code block theme storage -> ' + localStorage.getItem(theme.theme));
}

const themeToggle = e => {
  console.clear();
  if (localStorage.getItem(theme.theme) === theme.light) {
    darkTheme();
  } else (localStorage.getItem(theme.theme) === theme.dark) {
    lightTheme();
  }
}

checkbox.addEventListener('click', themeToggle);

// set Light Theme as a default theme
const setDefaultTheme = e => {
  if (localStorage.getItem(theme.theme) === null) {
    localStorage.setItem(theme.theme, theme.light);
    document.documentElement.setAttribute('data-theme', 'light');
  }
  themeToggle();
}
setDefaultTheme();

// set Light Theme as a default theme