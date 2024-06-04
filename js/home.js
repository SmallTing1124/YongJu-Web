$('.cardSlick').slick({
    // infinite: false,
    speed: 1000,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 991,
        settings: {
            slidesToShow: 2,

        },
    }, {
        breakpoint: 480,
        settings: {

            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        },
    }]

});


$('.fadeSlick').slick({
    speed: 1000,
    arrows: false,
    dots:true,
    infinite: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 2000,
    cssEase: 'linear'
});