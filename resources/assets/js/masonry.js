function onLoadFn() {
    gapi.client.setApiKey("AIzaSyDTNSUUSe2JwXfjUr_w18ebD0S0z3cUnLg");

    var restRequest = gapi.client.request({
        'path': '/blogger/v3/blogs/359291528483942656/posts'
    });

    restRequest.then(function(resp) {
        console.log(resp.result);

        var posts = resp.result.items;
        var postList = [];

        function truncate(string){
            if (string.length > 300) {
                var truncatedStr = string.substr(0,300)+'...';

                return truncatedStr.replace(/(<([^>]+)>)/ig,"");
            } else {
                return string;
            }
        };

        $.each(posts, function(i)
        {
            var container = $('<div/>')
            var div = $('<div/>')
                .addClass('col-md-4 col-sm-6 item')
                .appendTo(container);
            var thumbnail = $('<div/>')
                .addClass('thumbnail blogs')
                .appendTo(div);
            var anchor = $('<a/>')
                .attr('href', '/blog?id=' + posts[i].id)
                .appendTo(thumbnail)
            var caption = $('<div/>')
                .addClass('caption')
                .appendTo(anchor);
            var title = $('<h3/>')
                .text(posts[i].title)
                .appendTo(caption);
            var body = $('<p/>')
                .text(truncate(posts[i].content))
                .appendTo(caption);

            postList.push(container.html());
        });

        var $postListHTML = postList.join("");

        var $container = $('.masonry-container-books').masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });

        // add jQuery object
        $container.append( $($postListHTML) ).masonry( 'appended', $($postListHTML), true );
        $container.masonry('reloadItems');
        $container.masonry('layout');

    }, function(reason) {
        console.log('Error: ' + reason.result.error.message);
    });

    console.log('test');
}

gapi.load("client", onLoadFn);

$( document ).ready(function() {

    if (window.location.pathname == "/blog") {
        var postId = window.location.search.replace('?id=', '');
        var url = "https://www.googleapis.com/blogger/v3/blogs/359291528483942656/posts/" + postId + "?key=AIzaSyDTNSUUSe2JwXfjUr_w18ebD0S0z3cUnLg";

        $.get( url, function( data ) {
            console.log(data);

            var dateArr = data.published.split('T');
            var dateStr = dateArr[0] + " " + dateArr[1];
            var date = new Date(Date.parse(dateStr.replace('-','/','g')));


            $('#content h1.blog-title').html(data.title);
            $('#content .blog-body').html(data.content);
            $('#content .author-name').html(data.author.displayName);
            $('#content .published-date').html(date);
        });
    }

    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 60
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    //hero image opacity
    var header = $('.hero-overlay');

    $(window).on('scroll', function () {
        var scrollTop = $(this).scrollTop();
        var height = header.outerHeight() + 53;
        var calc =  scrollTop / height;

        header.css({ 'opacity': calc });

        if ( calc > '1' ) {
            header.css({ 'opacity': 1 });
        } else if ( calc < '0' ) {
            header.css({ 'opacity': 0 });
        }

    });

    var $container = $('.masonry-container-books').masonry({
        columnWidth: '.item',
        itemSelector: '.item'
    });

    $container.imagesLoaded().progress( function() {
        $container.masonry('layout');
    });
});
