function getTheme() {
  if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme:dark)").matches
  ) {
    console.log("dark");
    document.getElementById("header-logo").src =
      "https://www.sfb1287.uni-potsdam.de/wp-content/themes/wp_classic_crc1287/img/logo_small_dark.png";
    document.getElementById("contact-logo").src =
      "https://www.sfb1287.uni-potsdam.de/wp-content/themes/wp_classic_crc1287/img/logo_big_dark.png";
  } else {
    console.log("light");
    document.getElementById("header-logo").src =
      "https://www.sfb1287.uni-potsdam.de/wp-content/themes/wp_classic_crc1287/img/logo_small_light.png";
    document.getElementById("contact-logo").src =
      "https://www.sfb1287.uni-potsdam.de/wp-content/themes/wp_classic_crc1287/img/logo_big_light.png";
  }
}
