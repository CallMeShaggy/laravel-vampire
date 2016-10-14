<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.easing.1.3.umd.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/masonry.pkgd.min.js"></script>
        <script src="/js/imagesloaded.pkgd.min.js"></script>
        <script src="https://apis.google.com/js/api.js"></script>
        <script src="/js/all.js"></script>
    </head>
    <body>
        <header>
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
                  <a class="navbar-brand" href="#">Lengend of The Vampires</a>
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
        </header>

        <section data-background="img/full-width/bg-3.jpg" class="full-screen small-section bg-dark-50 table parallax parallax-fixed">

            <div class="table-cell">
                <div class="container">
                    <a href="#about" class="btn-scroll-down scroll page-scroll"></a>
                </div>
            </div>
        </section>

        <section id="about" class="services-section portfolio">
            <div class="container">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="aboutMe">
                    </div>
                    <div class="profilePic img-circle scrollimation"></div>
                  </div>
                  <div class="col-sm-7 authorBio">
                    <h1>David Allen Patrick</h1>
                    <p>Vampires never appealed to David Patrick when he decided to write a whole series on the vampire mythology. Even after he finished his first book, he still had not seen a single movie, read a story, or played a video game on vampires. So what actually fascinated David in his childhood and adolescence, and why did he ever decide to publish a novel about vampires if he did not like them?</p>
                    <ul>

                        <a data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a>
                    </ul>
                  </div>
                </div>
            </div>
        </section>

        <section id="works" class="container main-container">
          <div role="tabpanel">
            <ul class="nav nav-pills nav-justified">
              <li role="presentation" class="active"><a data-tab-name="books" href="#panel-1" aria-controls="panel-1" role="tab" data-toggle="tab">Books</a></li>
              <li role="presentation"><a data-tab-name="blogs" data-tab-number="2" href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab">Blogs</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane active" id="panel-1">
                <div class="row masonry-container-books" data-tab-name="books">

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="https://s12.postimg.org/ppvwe8prx/rsz_vampire.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="https://s12.postimg.org/ppvwe8prx/rsz_vampire.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="https://s12.postimg.org/ppvwe8prx/rsz_vampire.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="https://s12.postimg.org/ppvwe8prx/rsz_vampire.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                      </div>
                    </div>
                  </div><!--/.item  -->

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="https://s12.postimg.org/ppvwe8prx/rsz_vampire.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 item">
                    <div class="thumbnail">
                      <img src="https://s12.postimg.org/ppvwe8prx/rsz_vampire.jpg" alt="">
                      <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, illum voluptates consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic eaque laborum laudantium. Adipisci, explicabo, asperiores molestias deleniti unde dolore enim quas.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="panel-2">

                <div class="row masonry-container-blogs" data-tab-name="blogs">

                </div>
              </div>
            </div>

          </div>

        </section>

        <section class="footer">
            <div class="container text-center">
                <!-- Social links-->
                <div class="social-links">
                    <a href="https://www.facebook.com/davidallenpatrick?fref=ts" title="Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://twitter.com/vampireslayerND" title="Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/davidpatrickauthor?authType=NAME_SEARCH&authToken=oVVN&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A28939835%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476480458391%2Ctas%3Adavid%20patrick" title="Linkedin" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Email The Author</h4>
              </div>
              <div class="modal-body">
                  <form name="Contact">
                    <div class="row">
                      <h2 class="contact scrollimation">Contact Me</h2>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Name</span>
                          <input type="text" class="form-control" placeholder="Your name here" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Email</span>
                          <input type="text" class="form-control" placeholder="example@gmail.com" aria-describedby="basic-addon1">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>