let currentTheme = document.documentElement.getAttribute("data-theme");
let targetTheme = "light";
document.documentElement.setAttribute("data-theme", targetTheme);

function setThemeLight() {
  targetTheme = "light";
  document.documentElement.setAttribute("data-theme", targetTheme);
}

function setThemeDark() {
  targetTheme = "dark";
  document.documentElement.setAttribute("data-theme", targetTheme);
}

function setThemeSpecial() {
  targetTheme = "special";
  document.documentElement.setAttribute("data-theme", targetTheme);
}
