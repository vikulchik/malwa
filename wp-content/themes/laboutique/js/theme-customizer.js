"use strict";

(function($) {
    var callButton = $('.call-button');
    var popUp = $('.form-call');

    if (!callButton.length) return;

    callButton.on('click', openPopUp);

    function openPopUp(e) {
        e.preventDefault();

        $('body').on('click', closePopUp);
        e.stopPropagation();

        popUp.removeClass('is-hidden');
    }

    function closePopUp(e) {
        if ($(e.target).closest('.wpcf7-form').length) return;

        popUp.addClass('is-hidden');
        $('body').off('click', closePopUp);
    }

}(jQuery));

