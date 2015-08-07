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
        var input = ".navbar-search input";
        var inputValue = "Titre, acteur, réalisateur ...";
        $(document).on('focus', input, function() {
            $(this).val("");
        });
        $(document).on('blur', input, function() {
            $(this).val(inputValue);
        });
    })();

    toggleSearch();
    $(window).resize(function() { toggleSearch(); });

    function toggleSearch() {
        if($(document).width() < 765) {

            var input = $('.nav.navbar-search input'),
                close = '#close-search',
                label = '.nav.navbar-search label';

            /**
             * Bug iOS
             *
             * When input appear, this doesn't focus
             */
            input.attr('autofocus', true);
            $(document).on('click', label, function() { input.focus(); });
            $(document).on('click', label, function() { input.blur(); });

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
