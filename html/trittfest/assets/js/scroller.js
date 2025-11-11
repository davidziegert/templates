// GoTop

let scroller = document.getElementById("scroller");

document.addEventListener("scroll", () => {
  let scrolldiff = document.documentElement.scrollTop || document.body.scrollTop;
  if (scrolldiff > 100) {
    scroller.style.display = "block";
  } else {
    scroller.style.display = "none";
  }
});

function GoTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
