function moveElementOnScroll(elementId) {
  const element = document.getElementById(elementId);

  function handleScrollMove() {
    element.style.transform = `translate(-${window.scrollY}px, -${window.scrollY}px)`;
  }

  window.addEventListener("scroll", handleScrollMove);
}

function zoomElementOnScroll(elementId) {
  const element = document.getElementById(elementId);

  function handleScrollZoom() {
    let zoom = Math.min(20, 1 + 0.005 * $(this).scrollTop());

    if (zoom >= 1.0 && zoom <= 2.0) {
      element.style.transform = "scale(" + zoom + ")";
    }
  }

  window.addEventListener("scroll", handleScrollZoom);
}

moveElementOnScroll("galaxy-front");
zoomElementOnScroll("galaxy-title");
