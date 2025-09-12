function checkTheme() {
  let myTheme = localStorage.getItem("theme");

  if (myTheme == null) {
    myTheme = "theme_1";
  }

  document.getElementById(myTheme).checked = true;
  document.querySelector("html").setAttribute("data-theme", myTheme);
}

function switchTheme(src) {
  document.querySelector("html").setAttribute("data-theme", src.value);
  localStorage.setItem("theme", src.value);
}
