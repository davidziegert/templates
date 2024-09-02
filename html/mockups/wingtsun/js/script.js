function toggleMobileMenu() {
  if (window.matchMedia("(max-width: 1279px)").matches) {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");
    hamburger.classList.toggle("open");
    menu.classList.toggle("open");
  }
}
