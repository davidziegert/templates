function toggleMobileMenu() {
  if (window.matchMedia("(max-width: 1279px)").matches) {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");
    hamburger.classList.toggle("open");
    menu.classList.toggle("open");
  }
}

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

crawler.parentNode.parentNode.classList.add("active");
crawler.parentNode.parentNode.parentNode.parentNode.classList.add("active");
