$(document).ready(function(){
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy();
    $('.materialboxed').materialbox();
});

$(document).on("ready load resize scroll", function(){
  $(".animate").each(function(i, element) {
    $(element).css('opacity', '0.0');
    $(element).onVisible(function(el){
    if (el.hasClass("animate")){
      el.addClass("animated");
      el.addClass(el.data("animation"));
      //el.animateCss(el.data("animation"));
      el.removeClass("animate");
    }
    });
  });
});
