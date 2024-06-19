window.onscroll = function (ev) {
  if (window.scrollY > window.innerHeight - 200) {
    document.getElementById("parallax-title").style.display = "none";
  } else {
    document.getElementById("parallax-title").style.display = "block";
  }
};
