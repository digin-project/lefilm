$(document).ready(function() {

    /**
     * Grid
     */

    $(document).on({
        mouseenter: function () {
            $(this).children('.film-infos').addClass('show');
        },
        mouseleave: function () {
            $(this).children('.film-infos').removeClass('show');
        }
    }, ".film-wrapper");

    (function() {
        var dummy = $('.row-film:first-child').parent().html();
        var grid = $('#grid');

        $('#load-more').on('click', function() {
            grid.append(dummy);
        });

    })();

});
