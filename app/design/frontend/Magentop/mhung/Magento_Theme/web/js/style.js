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
                    breakpoint: 576,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      arrows: false,
                    }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                  }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                },
              ],
            
        });
    });
});


require(['jquery'], function ($) {
    $(document).ready(function () {
        if ($(window).width() <= 768) {
            $('#quickLinksHeader').click(function () {
                $('#quickLinksList').slideToggle();
                $(this).toggleClass('active');
            });
            $('#quickLinksHeader2').click(function () {
                $('#quickLinksList2').slideToggle();
                $(this).toggleClass('active');
            });
            $('#quickLinksHeader3').click(function () {
                $('#quickLinksList3').slideToggle();
                $(this).toggleClass('active');
            });
        }
    });
});
