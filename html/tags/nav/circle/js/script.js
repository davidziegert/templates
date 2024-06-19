let content = "ddd";

$(".link").hover(
  function () {
    content = $(".text-here").text();
    $(".text-here").text($(this).attr("title"));
  },
  function () {
    $(".text-here").text(content);
  }
);
