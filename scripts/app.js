$(document).ready(function() {

    /**
     * Grid
     */

    $('.film-wrapper').hover(function() {
        $(this).children('.film-infos').addClass('show');
    }, function() {
        $(this).children('.film-infos').removeClass('show');
    });

    (function() {
        var dummy = $('.row-film:first-child').parent().html();
        var grid = $('#grid');

        $('#load-more').on('click', function() {
            grid.append(dummy);
        });

    })();

});
