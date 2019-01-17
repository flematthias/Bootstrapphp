$(document).ready(function () {
    $('.header').height($(window).height());
    // alert("gergregger");
    $(".navbar a, .btn").click(function () {
        $("body,html").animate({
            scrollTop: $("#" + $(this).data('value')).offset().top
        }, 500)

    });

});