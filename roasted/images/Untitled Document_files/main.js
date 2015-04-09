function parallaxScroll(){
    var scrolledY = $(window).scrollTop();
    
    $(".counter").html(scrolledY);
    
    $(".box2").css("top","-"+((scrolledY*0.5))+"px");
    $(".box3").css("top","-"+((scrolledY*1.0))+"px");
    $(".box3").css("top","-"+((scrolledY*0.5))+"px");
    $(".box3").css("top","-"+((scrolledY*1.0))+"px");
    
    $(document).ready(
        function(){

            $(window).bind('scroll',function(e){
                    parallaxScroll();
                }
            );
        }
    );