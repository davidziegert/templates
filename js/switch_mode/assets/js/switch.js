function checkColors() {
  let myTheme = localStorage.getItem("theme");

  if (myTheme == null || myTheme == undefined) {
    if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
      myTheme = "dark";
    } else {
      myTheme = "light";
    }

    myButton = "auto";
  } else {
    myButton = myTheme;
  }

  document.querySelector("html").setAttribute("data-theme", myTheme);
  switchButton(myButton);
}

function switchColor(src) {
  if (src.value == "auto") {
    if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
      datatheme = "dark";
    } else {
      datatheme = "light";
    }

    document.querySelector("html").setAttribute("data-theme", datatheme);
    localStorage.setItem("theme", datatheme);
  } else {
    document.querySelector("html").setAttribute("data-theme", src.value);
    localStorage.setItem("theme", src.value);
  }

  switchButton(src.value);
}

function switchButton(theme) {
  switch (theme) {
    case "auto":
      document.getElementById("auto").ariaPressed = "true";
      document.getElementById("light").ariaPressed = "false";
      document.getElementById("dark").ariaPressed = "false";
      break;
    case "light":
      document.getElementById("auto").ariaPressed = "false";
      document.getElementById("light").ariaPressed = "true";
      document.getElementById("dark").ariaPressed = "false";
      break;
    case "dark":
      document.getElementById("auto").ariaPressed = "false";
      document.getElementById("light").ariaPressed = "false";
      document.getElementById("dark").ariaPressed = "true";
      break;
  }
}
