let storedTheme =
  localStorage.getItem("theme") ||
  (window.matchMedia("(prefers-color-scheme: dark)").matches
    ? "dark"
    : "light");
let selectorTheme = document.getElementById("theme-selector");
let targetTheme = "";

if (storedTheme) {
  document.documentElement.setAttribute("data-theme", storedTheme);
  selectorTheme.value = storedTheme;
}

function selectTheme() {
  targetTheme = selectorTheme.value;
  document.documentElement.setAttribute("data-theme", targetTheme);
  localStorage.setItem("theme", targetTheme);
}
