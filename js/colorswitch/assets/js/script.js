let storedtheme = localStorage.getItem("theme") || (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");

let selectedtheme = document.getElementById("theme-selector");

let targettheme = "";

if (storedtheme) {
  document.documentElement.setAttribute("data-theme", storedtheme);
  selectedtheme.value = storedtheme;
}

function selectTheme() {
  targettheme = selectedtheme.value;
  document.documentElement.setAttribute("data-theme", targettheme);
  localStorage.setItem("theme", targettheme);
}
