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


    toggleSearch();
    $(window).resize(function() { toggleSearch(); });

    function toggleSearch() {
        if($(document).width() < 765) {

            var input = $('.nav.navbar-search input'),
                close = '#close-search',
                label = '.nav.navbar-search label';

            $(document).on('click mousedown', label, function() {
                $(this).parent().css('background','#fff');
                $(this).addClass('hide');
                $('.__toggle').addClass('show');
                input.focus();
            });

            $(document).on('click mousedown', close, function() {
                $('.nav.navbar-search').css('background','transparent');
                $(label).addClass('show');
                $('.__toggle').toggleClass('show');

            });
        }
    }

    (function() {
        var dummy = $('.row-film:first-child').parent().html();
        var grid = $('#grid');

        $('#load-more').on('click mousedown', function() {
            grid.append(dummy);
        });

    })();

});
