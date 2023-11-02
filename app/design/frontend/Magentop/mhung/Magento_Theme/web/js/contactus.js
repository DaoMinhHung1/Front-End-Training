define([
    'uiComponent',
    'jquery',
    'mage/validation',
], function (Component, $) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'Magento_Theme/contactus',
        },

        initialize: function () {
            this._super();
            var self = this;

            this.submitForm = function () {
                if ($('#myForm').validation() && $('#myForm').validation('isValid')) {
                    var formData = {};
                    $('#myForm').find('input, textarea').each(function() {
                        formData[$(this).attr('name')] = $(this).val();
                    });

                 
                    localStorage.setItem('formData', JSON.stringify(formData));

                   let URL =  $('#myForm'). attr('action');
                    $.ajax({
                        type: 'POST',
                        url: URL,
                        data: $('#myForm').serializeArray(),
                        success: function (response) {
                            alert('Submit Thông tin thành công!')
                        },
                        error: function (xhr, status, error) {
                            console.log('Lỗi trong quá trình gửi yêu cầu AJAX:', error);
                        }
                    });
                }
            };
            
            this.submitCloseModal = function() {
                $("#contactus").removeClass("active");
            }
        },
    });
});
