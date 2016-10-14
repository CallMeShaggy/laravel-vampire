<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/masonry.pkgd.min.js"></script>
        <script src="/js/imagesLoaded.pkgd.min.js"></script>
        <script src="/js/all.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>

        <section data-background="img/full-width/bg-3.jpg" class="full-screen small-section bg-dark-50 table parallax parallax-fixed">
            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 text-left">
                            <h1 class="hs-line-first alt-font">Our Blog</h1>
                            <div class="hs-line-second alt-font">Hear awesome stories here</div>
                        </div>
                        <div class="col-md-4 mt-10">
                            <div class="breadcrumbs breadcrumbs-white alt-font text-right"><a href="#">Home</a>&nbsp;/&nbsp;<span>Blog</span></div>
                        </div>
                    </div>
                    <a href="#blog" data-start="display: block" data-100-start="display: none" class="btn-scroll-down scroll"></a>
                </div>
            </div>
        </section>

        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8">--}}
                    {{--<div class="grid">--}}
                        {{--<!-- width of .grid-sizer used for columnWidth -->--}}
                        {{--<div class="grid-sizer"></div>--}}
                        {{--<div class="grid-item"><img src="http://relentlesslycreativebooks.com/wp-content/uploads/vampire-wallpaper-400x300.jpg" alt=""/></div>--}}
                        {{--<div class="grid-item grid-item--width2"><img src="https://s-media-cache-ak0.pinimg.com/236x/1c/37/40/1c3740cf54873b6f726f552de7c79396.jpg" alt=""/>--}}
                        {{--</div>--}}
                        {{--...--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">.col-md-4</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <!-- Services Section -->
        <section id="services" class="services-section portfolio" >
            <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <div class="aboutMe">
                      <h2 class="scrollimation">About Me</h2>
                    </div>
                    <div class="profilePic img-circle scrollimation"></div>
                    <div class="aboutP">
                      <p>I'm 22 years old, a Senior at the University of Louisville majoring in Computer Information systems. I'm currently employed as a Front-End Web Developer at CBS Interactive, I work directly on CNET.com. I'm also employed as a Web Developer for Restorative Justice Louisville. In the past, I was a Supervisor for UPS at the Worldport Freight Facility.</p>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <div class="container main-container">

          <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#panel-1" aria-controls="panel-1" role="tab" data-toggle="tab">Panel 1</a></li>
              <li role="presentation"><a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab">Panel 2</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane active" id="panel-1">
                <div class="row masonry-container">

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://relentlesslycreativebooks.com/wp-content/uploads/vampire-wallpaper-400x300.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://relentlesslycreativebooks.com/wp-content/uploads/vampire-wallpaper-400x300.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/abstract" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://relentlesslycreativebooks.com/wp-content/uploads/vampire-wallpaper-400x300.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/abstract" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div>

                </div> <!--/.masonry-container  -->
              </div><!--/.tab-panel -->

              <div role="tabpanel" class="tab-pane" id="panel-2">

                <div class="row masonry-container">

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/city" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/city" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/city" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/city" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="http://lorempixel.com/200/200/city" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div>
                </div> <!--/.masonry-container  -->
              </div><!--/.tab-panel -->
            </div> <!--/.tab-content -->

          </div> <!--/.tab-panel  -->

        </div><!-- /.container -->


        <section id="contact" class="contact-section">
            <div class="container">
              <form name-"Contact">
                <div class="row">
                  <h2 class="contact scrollimation">Contact Me</h2>
                  <div class="col-md-3 col-md-offset-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Name</span>
                      <input type="text" class="form-control" placeholder="Your name here" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Email</span>
                      <input type="text" class="form-control" placeholder="example@gmail.com" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="input-group message">
                      <span class="input-group-addon messageHed" id="basic-addon1">Message</span>
                      <textarea class="form-control messageDek" placeholder="Leave me a message." aria-describedby="basic-addon1"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 col-md-offset-5">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
            </div>
        </section>
    </body>
</html>