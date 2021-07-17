// let img = document.querySelectorAll("div.images");

// window.addEventListener("load", function (event) {
//   console.log(img);
//   img.addEventListener("mouseover", function (event) {
//     console.log("ping");
//   });
// });

$(document).ready(function () {
  $(".images").hover(function () {
    $("nav").css({
      width: $(this).width(),
      height: $(this).height(),
      left: $(this).offset().left,
      top: $(this).offset().top,
    });
    console.log($(this).width());
    console.log($(this).offset());
  });
});
