function loadXMLDoc() {
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      loadXMLData(this);
    }
  };
  xmlhttp.open("GET", "./data/blog.xml", true);
  xmlhttp.send();
}

function loadXMLData(xml) {
  let i;
  let xmlDoc = xml.responseXML;
  let x = xmlDoc.getElementsByTagName("POST");

  let ticker = "";
  let hero = "";
  let featured = "";
  let recent = "";

  

  for (i = 0; i < x.length; i++) {
    ticker +=
      "<span class='ticker-item'>" +
      x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
      "</span>";
  }

  for (i = 0; i < 1; i++) {
    hero +=
      "<article><img src='https://picsum.photos/id/"+Math.floor(Math.random() * 99)+"/1920/1080' alt='image loading' loading='lazy'><div class='post'><div class='author'>" +
      x[i].getElementsByTagName("AUTHOR")[0].childNodes[0].nodeValue +
      "</div><div class='title'>" +
      x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
      "</div><div class='link'><a href='" +
      x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue +
      "' target='_blank'>read more</a></div></div></article>";
  }

  for (i = 1; i < 3; i++) {
    featured +=
      "<article><img src='https://picsum.photos/id/"+Math.floor(Math.random() * 99)+"/750/750' alt='image loading' loading='lazy'><div class='post'><div class='published'>" +
      x[i].getElementsByTagName("PUBLISHED")[0].childNodes[0].nodeValue +
      "</div><div class='title'>" +
      x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
      "</div><div class='link'><a href='" +
      x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue +
      "' target='_blank'>read more</a></div></div></article>";
  }

  for (i = 3; i < x.length; i++) {
    recent +=
      "<article><img src='https://picsum.photos/id/"+Math.floor(Math.random() * 99)+"/500/500' alt='image loading' loading='lazy'><div class='post'><div class='author'>" +
      x[i].getElementsByTagName("AUTHOR")[0].childNodes[0].nodeValue +
      "</div><div class='published'>" +
      x[i].getElementsByTagName("PUBLISHED")[0].childNodes[0].nodeValue +
      "</div><div class='title'>" +
      x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
      "</div><div class='content'>" +
      x[i].getElementsByTagName("CONTENT")[0].childNodes[0].nodeValue +
      "</div><div class='link'><a href='" +
      x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue +
      "' target='_blank'>read more</a></div></div></article>";
  }

  document.getElementById("blog-ticker").innerHTML = ticker;
  document.getElementById("blog-hero").innerHTML = hero;
  document.getElementById("blog-featured").innerHTML = featured;
  document.getElementById("blog-recent").innerHTML = recent;
}

loadXMLDoc();
