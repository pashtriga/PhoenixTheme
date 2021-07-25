//LogoComponent

$('.owl-carous').owlCarousel({
    item: 6,
    singleItem: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    loop: true,
    nav: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: false,
            dots: false
        },
        600: {
            items: 3,
            nav: false,
            dots: false
        },
        960: {
            items: 5,
            nav: false,
            dots: false
        },
        1200: {
            items: 6,
            nav: false,
            dots: false
        }
    }
});
//LogoComponent