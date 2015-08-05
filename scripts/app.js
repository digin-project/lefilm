$(document).ready(function() {

    var films = [
        {
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 2
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 2
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 2
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 2
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 2
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 2
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        },{
            'url' : 'images/dummy/fast_and_furious.jpg',
            'name' : 'Fast and Furious',
            'category' : 'Course',
            'year' : '2008',
            'time' : '1h35',
            'size' : 1
        }
    ]
    var totalSize = 0;
    for (var i = films.length - 1; i >= 0; i--) {
        totalSize += films[i].size;
    };
    var nbRelou = totalSize%myVar;
    var tableaux = [];
    var size = $(window).width();
    var cols = 4;

    if (size > 1920) {
            cols = 5
    } else if (size > 1200) {
        cols = 4
    } else if (size > 900) {
        cols = 3
    } else if (size > 300) {
        cols = 2
    } else {
        cols = 1
    }

    var myVar = cols*2;
    var it = films.length-1;
    while(totalSize%myVar != 0 && films[it]){
        if(nbRelou - films[it].size >= 0){
            totalSize -= films[it].size;

            films.splice(it, 1);
        }
        it -= 1;

    }

    var col = 0;
    var size = 0;
    var h = 0;
    var error = false;
    while(films.length != 0 || error) {

        if(size == 1 && films[h].size == 2) {
            h++;
            if(h > films.length) error = true;
        } else {
           if(!tableaux[col]) tableaux[col] = []
            tableaux[col].push(films[h])
            size += films[h].size;
            if(size == 2) {
                size = 0;
                col = col >= cols-1 ? 0 : col+1;
            }
            films.splice(h, 1);
            h = 0;
        }
        
    }
    /*
    for (var i = films.length - 1; i >= 0; i--) {
        if(!tableaux[col]) tableaux[col] = []
        tableaux[col].push(films[i])
        size += films[i].size;
        if(size == 2) {
            size = 0;
            col = col >= cols-1 ? 0 : col+1;
        }
    };*/

    for (var i = 0; i < tableaux.length; i++) {
        colSize = 100 / cols;
        var div = $("<div style='width:" +colSize + "%;float:left;'></div>");
        for (var j = 0; j <tableaux[i].length; j++) {
            var w = tableaux[i][j].size == 2 ? '100' : '50';
            var childDiv = $('<div style="padding : 1px;width:' + w + '%;float:left;"><img width="100%" src="'+ tableaux[i][j].url +'"></div>');
            div.append(childDiv);
        };
        $('.films').append(div);
    };
    console.log(tableaux);
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
