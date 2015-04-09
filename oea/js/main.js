$(document).foundation();

$(document).ready(
    function() {

        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
        });

        //        $("#mySlider").click(
        //            function() {
        //             //alert("clicked on me");
        //                $("#hideMe").slideToggle("slow");
        //            }
        //        );

    }  
);