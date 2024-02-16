function setActive(element) {
  var a = document.getElementsByTagName("a");

  for (i = 0; i < a.length; i++) {
    a[i].classList.remove("active");
  }

  element.classList.add("active");
}
