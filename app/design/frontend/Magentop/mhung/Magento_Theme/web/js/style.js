require(['jquery', 'slick'], function ($) {
    $(document).ready(function () {
        $('.my-slick-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            isFinite:true,
        });
    });
});

require(['jquery', 'slick'], function ($) {
    $(document).ready(function () {
        $('.my-slick-carouseldealofday').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            isFinite: true,
        });
    });
});
