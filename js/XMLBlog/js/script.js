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
  let items = "";

  for (i = 1; i < x.length; i++) {
    items +=
      "<article><img src='https://picsum.photos/id/" +
      Math.floor(Math.random() * 99) +
      "/256/256' alt='image loading' loading='lazy'><div class='post'><div class='author'>" +
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

  document.getElementById("blog-wrapper").innerHTML = items;
}

loadXMLDoc();
