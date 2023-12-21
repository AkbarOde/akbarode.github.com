var carouselWidth = $('.carousel-inner')[0].scrollWidth;
var cardWidth = $('.carousel-item').width();

var scrollPosition = 0;

$('.carousel-control-next').on('click', function () {
    console.log('');
    scrollPosition = scrollPosition + cardWidth;
    $('.carousel-inner').animation({
        scrollLeft: scrollPosition
    }, 600);
})
