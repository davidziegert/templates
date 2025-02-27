// Hamburger

function ToggleMenu() {
  const mediaquery = window.matchMedia("(max-width: 768px)");
  const hamburger = document.getElementById("hamburger");
  const nav = document.getElementById("nav");

  if (mediaquery.matches) {
    hamburger.classList.toggle("open");
    nav.classList.toggle("open");
  }
}

// Menu

let list = document.querySelectorAll(".menu-item-has-children");
let crawler = document.querySelector(".current-page-item");

function accordion(e) {
  e.stopPropagation();

  if (this.classList.contains("active")) {
    this.classList.remove("active");
  } else {
    if (this.parentElement.parentElement.classList.contains("active")) {
      this.classList.add("active");
    } else {
      for (i = 0; i < list.length; i++) {
        list[i].classList.remove("active");
      }
      this.classList.add("active");
    }
  }
}

for (i = 0; i < list.length; i++) {
  list[i].addEventListener("click", accordion);
}

if (crawler < 0) {
  crawler.parentNode.parentNode.classList.add("active");
  crawler.parentNode.parentNode.parentNode.classList.add("active");
}

// GoTop

function GoTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
