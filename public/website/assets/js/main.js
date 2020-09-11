$(document).ready(function () {
  $(".share").click(function () {
    if ($(this).find(".social-share").hasClass("show")) {
      $(this).find(".social-share").removeClass("show");
    } else {
      $(".social-share").removeClass("show");
      $(this).find(".social-share").addClass("show");
    }
  });


  

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scroll-to-top').fadeIn();
    } else {
        $('.scroll-to-top').fadeOut();
    }
});

  $(".scroll-to-top").click(function () {
    $("html , body").animate(
      {
        scrollTop: 0,
      },
      1000
    );
  });
});
