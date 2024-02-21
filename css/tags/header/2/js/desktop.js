window.onscroll = function (ev) {
  if (window.scrollY > window.innerHeight - 200) {
    document.getElementById("mountain-title").style.display = "none";
  } else {
    document.getElementById("mountain-title").style.display = "block";
  }
};
