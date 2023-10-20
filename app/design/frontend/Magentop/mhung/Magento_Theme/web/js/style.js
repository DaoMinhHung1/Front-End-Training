require(['jquery', 'slick'], function ($) {
    $(document).ready(function () {
        $('.my-slick-carouselbanner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            infinite: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
            ]
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
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                  }
                }
              ]
        });
    });
});


require(['jquery'], function ($) {
    $(document).ready(function () {
        if ($(window).width() <= 768) {
            $('#quickLinksHeader').click(function () {
                $('#quickLinksList').slideToggle();
            });
            $('#quickLinksHeader2').click(function () {
                $('#quickLinksList2').slideToggle();
            });
            $('#quickLinksHeader3').click(function () {
                $('#quickLinksList3').slideToggle();
            });
            $('#quickLinksHeader4').click(function () {
                $('#quickLinksList4').slideToggle();
            });
        }
    });
});