$(document).ready(function(){

    var topSpacing = $("#carousel-example-generic").offset().top;

    var scrollHandler = function(){

        var scrollTop = $(window).scrollTop();
        if(scrollTop > topSpacing) {
            $("#navbar").addClass("navbar-fixed-top");
            $(".jumbotron").addClass("marginTop");
        }
        else {
            $("#navbar").removeClass("navbar-fixed-top");
            $(".jumbotron").removeClass("marginTop");
        }
    };

    $(window).on("scroll",scrollHandler);
});
