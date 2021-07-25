/** Active Events */

$('.owl-caro-active-events').owlCarousel({

    margin: 10,
    item: 6,
    singleItem: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    loop: true,
    nav: false,
    // navText : ['<img class="buto" src="https://image.flaticon.com/icons/svg/481/481117.svg" aria-hidden="true"></img>','<img class="buto" src="https://image.flaticon.com/icons/svg/481/481115.svg" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive: {

        0: {
            items: 1,
            dots: true
        },
        600: {
            items: 2,
            dots: true
        },
        960: {
            items: 2,
            nav: false,
            dots: true
        },
        1200: {
            items: 3,
            nav: false,
            dots: true
        }
    }
});
document.addEventListener('click', function (e) {
    if (document.activeElement.toString() == '[object HTMLButtonElement]') {
        document.activeElement.blur();
    }
});

/* Active Events Carousel */

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});


$('.charity-text-image').hover(
    function() {
        $(this).addClass("hovered");
        $('.hovered > .charity-content').addClass("testing");
    });


$('.charity-text-image').mouseleave(
    function() {
        $(this).removeClass("hovered")
        $('.charity-content').removeClass("testing");
});


