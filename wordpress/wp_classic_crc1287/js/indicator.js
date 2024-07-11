function fillIndicator(elementId) {
  const element = document.getElementById(elementId);

  function handleScrollIndicator() {
    let scrolling =
      document.body.scrollTop || document.documentElement.scrollTop;
    let height =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    let scrolled = (scrolling / height) * 100;

    element.style.width = scrolled + "%";
  }

  window.addEventListener("scroll", handleScrollIndicator);
}

fillIndicator("indicator-bar");
