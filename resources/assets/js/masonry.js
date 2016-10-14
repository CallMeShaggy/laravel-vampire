function onLoadFn() {
    gapi.client.setApiKey("AIzaSyDTNSUUSe2JwXfjUr_w18ebD0S0z3cUnLg");

    var restRequest = gapi.client.request({
        'path': '/blogger/v3/blogs/359291528483942656/posts'
    });

    restRequest.then(function(resp) {
        console.log(resp.result);


    }, function(reason) {
        console.log('Error: ' + reason.result.error.message);
    });

    console.log('test');
}

gapi.load("client");

$( document ).ready(function() {
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 60
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    var $container = $('.masonry-container-books').masonry({
        columnWidth: '.item',
        itemSelector: '.item'
    });

    $container.imagesLoaded().progress( function() {
        $container.masonry('layout');
    });

    //Reinitialize masonry inside each panel after the relative tab link is clicked -
    $('a[data-toggle=tab]').each(function () {
        var $this = $(this);
        var clickedNum = 0;

        $this.on('shown.bs.tab', function (e) {
            var tabNumber = e.currentTarget.dataset.tabNumber;
            var tabName = e.currentTarget.dataset.tabName;

            if (clickedNum < 1 && tabNumber == "2") {

                gapi.client.setApiKey("AIzaSyDTNSUUSe2JwXfjUr_w18ebD0S0z3cUnLg");

                var restRequest = gapi.client.request({
                    'path': '/blogger/v3/blogs/359291528483942656/posts'
                });

                restRequest.then(function(resp) {
                    console.log(resp.result);

                    var posts = resp.result.items;
                    var postList = [];

                    $.each(posts, function(i)
                    {
                        var container = $('<div/>')
                        var div = $('<div/>')
                            .addClass('col-md-4 col-sm-6 item')
                            .appendTo(container);
                        var thumbnail = $('<div/>')
                            .addClass('thumbnail')
                            .appendTo(div);
                        var caption = $('<div/>')
                            .addClass('caption')
                            .appendTo(thumbnail);
                        var title = $('<h3/>')
                            .text(posts[i].title)
                            .appendTo(caption);
                        var body = $('<p/>')
                            .text(posts[i].content)
                            .appendTo(caption);

                        postList.push(container.html());
                    });

                    var $postListHTML = postList.join("");

                    var $container = $('.masonry-container-blogs').masonry({
                        columnWidth: '.item',
                        itemSelector: '.item'
                    });

                    // add jQuery object
                    $container.append( $($postListHTML) ).masonry( 'appended', $($postListHTML) );

                    $container.masonry('layout');

                }, function(reason) {
                    console.log('Error: ' + reason.result.error.message);
                });

                console.log('test');
            } else {
                var $container = $('.masonry-container-' + tabName).masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });
            }

            clickedNum++;
        }); //end shown
    });  //end each
});
