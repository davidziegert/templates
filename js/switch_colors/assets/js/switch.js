function checkColors() {
  let myTheme = localStorage.getItem("theme");

  if (myTheme == null) {
    myTheme = "theme_1";
  }

  document.getElementById(myTheme).checked = true;
  document.querySelector("html").setAttribute("data-theme", myTheme);
}

function switchColor(src) {
  document.querySelector("html").setAttribute("data-theme", src.value);
  localStorage.setItem("theme", src.value);
}
