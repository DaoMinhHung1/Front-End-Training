define([
    'uiComponent',
    'ko',
    'jquery',
    'slick'
], function (Component,ko, $) {
    'use strict';

    return Component.extend({
        initialize: function () {
            this._super();
        },
        
        viewModel: ko.observableArray([
            'https://hungdao.cmmage.app/static/version1698134031/frontend/Magentop/mhung/en_AU/images/Artboard21.png',
            'https://hungdao.cmmage.app/static/version1698134031/frontend/Magentop/mhung/en_AU/images/Artboard21.png',
            'https://hungdao.cmmage.app/static/version1698134031/frontend/Magentop/mhung/en_AU/images/Artboard21.png',
        ]),
        initSlickSlider: function () {
            setTimeout(function () {
                $('.my-slick-carouselbanner').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: true,
                    infinite: true,
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: false,
                            }
                        }
                    ]
                });
            }, 0);
        },
       
    });
});
