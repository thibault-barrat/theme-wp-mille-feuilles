const app = {
  toggleMenu: function () {
    const burger = document.getElementsByClassName('hamburger')[0];
    const menu = document.getElementById("navigation");
    if (burger.classList.contains("hamburger--open")) {
      burger.classList.remove("hamburger--open");
    } else {
      burger.classList.add("hamburger--open");
    }
    if (menu.classList.contains("nav--open")) {
      menu.classList.remove("nav--open");
    } else {
      menu.classList.add("nav--open");
    }
  },
  addMenuEvent: function () {
    const burger = document.getElementsByClassName('hamburger')[0];
    burger.addEventListener('click', app.toggleMenu)
  },
  init: function () {
    app.addMenuEvent();
  },
};

document.addEventListener('DOMContentLoaded', app.init);