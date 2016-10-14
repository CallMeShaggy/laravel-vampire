$( document ).ready(function() {
    //var $grid = $('.grid').masonry({
    //    // set itemSelector so .grid-sizer is not used in layout
    //    itemSelector: '.grid-item',
    //    // use element for option
    //    columnWidth: '.grid-sizer',
    //    percentPosition: true
    //});
    //
    //// layout Masonry after each image loads
    //$grid.imagesLoaded().progress( function() {
    //    $grid.masonry('layout');
    //});

    var $container = $('.masonry-container');
    $container.imagesLoaded( function () {
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });
    });

    //Reinitialize masonry inside each panel after the relative tab link is clicked -
    $('a[data-toggle=tab]').each(function () {
        var $this = $(this);

        $this.on('shown.bs.tab', function () {

            $container.imagesLoaded( function () {
                $container.masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });
            });

        }); //end shown
    });  //end each
});
