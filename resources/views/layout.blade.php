<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('head')
            <title>Laravel</title>
            <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
            <link href="/css/app.css" rel="stylesheet" type="text/css">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
            <script src="/js/jquery.min.js"></script>
            <script src="/js/jquery.easing.1.3.umd.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/js/masonry.pkgd.min.js"></script>
            <script src="/js/imagesloaded.pkgd.min.js"></script>
            <script src="https://apis.google.com/js/api.js"></script>
            <script src="/js/all.js"></script>

        @show
    </head>
    <body>
        @section('nav')
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">Lengend of The Vampires</a>
                           </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="page-scroll" href="#about">About The Author</a></li>
                                <li><a class="page-scroll" href="#works">Blogs & Books</a></li>
                                <li><a data-toggle="modal" data-target="#myModal">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
        @show
        @yield('content')
    </body>
</html>