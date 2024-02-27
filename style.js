// window width and height
var width  = $(window).width();
var height = $(window).height();
$(document).ready(function () {
  $(".parent").css("width",width);
  $(".parent").css("height",height);
});

// Loader
$(document).ready(function () {
  $("div#spinner").animate({
    opacity: 1
  },1000);
  setTimeout(function() {
    window.location.href = "index.php";
  }, 2000);
});

