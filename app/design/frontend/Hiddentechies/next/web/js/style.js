define([
    'uiComponent',
    'ko'
], function (Component, ko) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'Magento_Theme/hompages/hello' // Đường dẫn đến template HTML[p]
        },

        initialize: function (hello) {
            this._super();
            
            alert(hello.message);
        }
    });
});
