$(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $("#mynavbar").css({"background-color":"#6F2C2C"});
            $("#mynavbar").css({"color":"#FFF"});
            

            

              
        }
        if($(window).scrollTop() < $(window).height()){
            $("#mynavbar").css({"background-color":"transparent"});
            $("#mynavbar").css({"color":"#FFF"});
           

        }
    });