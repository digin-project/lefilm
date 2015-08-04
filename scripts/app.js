$(document).ready(function() {

    /**
     * Grid
     */

    $('.film-wrapper').hover(function() {
        $(this).children('.film-infos').addClass('show');
    }, function() {
        $(this).children('.film-infos').removeClass('show');
    });

});
