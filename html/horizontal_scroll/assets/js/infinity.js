const mediaquery = window.matchMedia("(min-width: 1024px)");
const scrollContainer = document.querySelector(".row");

if (mediaquery.matches) {
  scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
  });
} 
