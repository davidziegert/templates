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
