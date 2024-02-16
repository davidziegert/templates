const indicator = document.getElementById("nav-indicator");
let items = document.querySelectorAll(".nav-menu a");

function marker(e) {
  indicator.style.left = e.offsetLeft + "px";
  indicator.style.right = e.offsetRight + "px";
}

items.forEach((link) => {
  link.addEventListener("click", (e) => {
    marker(e.target);
  });
});