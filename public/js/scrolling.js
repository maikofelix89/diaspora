$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".navbar-default").css({"background-color":"#FFF"});
             $(".navbar-default").css({"border-style":"solid"});
             $(".navbar-default").css({"border-bottom-color":"#6F2C2C"});
             $(".navbar-default .navbar-nav > li > a").css({"color":"#6F2C2C"});

            

              
        }
        if($(window).scrollTop() < $(window).height()){
            $(".navbar-default").css({"background-color":"transparent"});
             $(".navbar-default .navbar-nav > li > a").css({"color":"#FFF"}); 
              $(".navbar-default").css({"border-style":"none"});

        }
    })
})


$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

