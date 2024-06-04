$(".bannerArea ").addClass("show");

$(".navbar-toggler").click(function() {
    $(".menuArea").addClass("open");
});

$(".menu-close").click(function() {
    $(".menuArea").removeClass("open");
});

//  init scrollmagic
var controller = new ScrollMagic.Controller();

// build scenes
new ScrollMagic.Scene({
        triggerElement: "body",
        duration: '80%',

    })
    .setClassToggle(".haeder-nav", "active") // add class toggle
    // .addIndicators() // add indicators (requires plugin)
    .addTo(controller);

// build scenes
new ScrollMagic.Scene({
        triggerElement: ".bannerArea",
        duration: '100%',
        // reverse: false,
    })
    .setClassToggle(".bannerArea", "active") // add class toggle

    // .addIndicators() // add indicators (requires plugin)
    .addTo(controller);