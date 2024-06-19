function openTag(tab) {
  const collection = document.getElementsByClassName("content");

  for (var i = 0; i < collection.length; i++) {
    collection[i].classList.remove("active");
  }

  const element = document.getElementById(tab);
  element.classList.add("active");
}
