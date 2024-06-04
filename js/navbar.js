$(".bannerArea ").addClass("show");
$(".navbar-toggler").click(function () {
    $(".menuArea").addClass("open");
});

$(".menu-close").click(function () {
    $(".menuArea").removeClass("open");
});