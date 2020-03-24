<!-- Front page -->

<?php get_header(); ?>

<main role="main">
    <div class="container-fluid top-container-front-page py-5">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center">
                <div class="animated fadeInLeft text-center">
                    <h1 class="display-3 text-green text-uppercase font-impact my-0">
                        Bajo Zero
                    </h1>
                    <h3 class="h1 text-pink font-yellowtail mb-0">
                        Helados a la plancha
                    </h3>
                    <h5 class="text-chocolate font-weight-bold mb-4">Liberia, Costa Rica</h5>
                </div>

                <div class="animated fadeInRight font-italic font-weight-bold text-center mb-4">
                    The story started in 2007, and we will keep<br />
                    offering you delicious homemade customed rolled ice cream!<br /><br />
                    We are here to listen to what is the<br />
                    best treat that will fits you <i class="fas fa-heart"></i>
                </div>

                <div class="animated fadeInLeft text-center mb-5">
                    <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-sweep-to-top" alt="">
                        Contact us
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="carousel" class="carousel slide animated fadeIn slow" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item carousel-item-1 active" data-interval="10000">
                            <div class="carousel-caption d-sm-block carousel-caption-color-1 text-vanilla">
                                <h3 class="text-uppercase mb-1"><span>Discover our fresh products</span></h3>
                                <p><span>Have a look at our <a href="/bajozero/flavors/" alt="" class="link-green">flavors page</a> to find the ice cream that fits you perfectly</span></p>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-2" data-interval="10000">
                            <div class="carousel-caption d-sm-block carousel-caption-color-2 text-vanilla">
                                <h3 class="text-uppercase mb-1"><span>Follow us on social medias</span></h3>
                                <p><span>Don't miss any last minute promotions and events at <a href="/bajozero/our-shop/" alt="" class="link-chocolate">our shop</a></span></p>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-3" data-interval="10000">
                            <div class="carousel-caption d-sm-block carousel-caption-color-3 text-vanilla">
                                <h3 class="text-uppercase mb-1"><span>Come and visit us</span></h3>
                                <p><span>We have a spacious venue with a backyard where you can have fun with your friends!</span></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row featurette py-5 px-md-5">
            <div class="col-md-7" data-aos="slide-right" data-aos-once="true">
                <h2 class="featurette-heading">This is our team. <span class="text-pink">And we are here for you</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-md-5" data-aos="slide-right" data-aos-once="true">
                <img src="<?php echo content_url() . '/themes/bajozero/pictures/team.jpg' ?>" class="shadow-picture-lg img-fluid mx-auto" alt="" width="500" height="500">
            </div>
        </div>

        <div class="row featurette py-5 px-md-5">
            <div class="col-md-7 order-md-2" data-aos="slide-left" data-aos-once="true">
                <h2 class="featurette-heading">Oh yeah, it’s good. <span class="text-orange">Latest flavor: caramel & vanilla.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1" data-aos="slide-left" data-aos-once="true">
                <img src="<?php echo content_url() . '/themes/bajozero/pictures/6.jpg' ?>" class="shadow-picture-lg img-fluid mx-auto" alt="" width="500" height="500">
            </div>
        </div>

        <div class="row featurette py-5 px-md-5">
            <div class="col-md-7" data-aos="slide-right" data-aos-once="true">
                <h2 class="featurette-heading">Come and discover our venue. <span class="text-green">We are located <a href="/bajozero/our-shop/" alt="" class="link-green link-decoration">here</a></span></h2>
                <p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-5" data-aos="slide-right" data-aos-once="true">
                <img src="<?php echo content_url() . '/themes/bajozero/pictures/3.jpg' ?>" class="shadow-picture-lg img-fluid mx-auto" alt="" width="500" height="500">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card-deck card-deck-front-page mb-3 text-center">
            <div class="card mb-4 shadow-sm" data-aos="flip-left" data-aos-once="true">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">🍦 Ice cream mix</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <a href="/bajozero/flavors/" alt="">
                        <img src="<?php echo content_url() . '/themes/bajozero/pictures/6.jpg' ?>" class="rounded img-fluid" alt="" width="500" height="500">
                    </a>

                    <div class="mt-4">
                        <p class="text-green mb-1">Contains:</p>

                        <ul class="list-unstyled ">
                            <li>Vanilla</li>
                            <li>Caramel</li>
                            <li>Marshmallow</li>
                            <li>Strawberry topping</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="card-title mt-0 pricing-card-title">
                            <span class="h2 mr-0 mr-md-1">&#8353;1500</span>
                            <span class="text-muted">(&#36;3)</span>
                        </div>
                        <a href="/bajozero/flavors/" alt="" class="btn btn-lg btn-block btn-vanilla rounded-0 hvr-sweep-to-bottom">Try it</a>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-sm" data-aos="flip-left" data-aos-delay="200" data-aos-once="true">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">🍧 Ice cream mix</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <a href="/bajozero/flavors/" alt="">
                        <img src="<?php echo content_url() . '/themes/bajozero/pictures/1.jpg' ?>" class="rounded img-fluid" alt="" width="500" height="500">
                    </a>

                    <div class="mt-4">
                        <p class="text-pink mb-1">Contains:</p>

                        <ul class="list-unstyled ">
                            <li>Chocolate</li>
                            <li>Almond</li>
                            <li>Oreo</li>
                            <li>Vanilla topping</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="card-title mt-0 pricing-card-title">
                            <span class="h2 mr-0 mr-md-1">&#8353;3000</span>
                            <span class="text-muted">(&#36;6)</span>
                        </div>
                        <a href="/bajozero/flavors/" alt="" class="btn btn-lg btn-block btn-vanilla rounded-0 hvr-sweep-to-bottom">Try it</a>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-sm" data-aos="flip-left" data-aos-delay="400" data-aos-once="true">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">🍨 Ice cream mix</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <a href="/bajozero/flavors/" alt="">
                        <img src="<?php echo content_url() . '/themes/bajozero/pictures/8.jpg' ?>" class="rounded img-fluid" alt="" width="500" height="500">
                    </a>

                    <div class="mt-4">
                        <p class="text-orange mb-1">Contains:</p>

                        <ul class="list-unstyled ">
                            <li>Pistachio</li>
                            <li>Mint</li>
                            <li>Sugar sprinkles</li>
                            <li>Chocolate topping</li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="card-title mt-0 pricing-card-title">
                            <span class="h2 mr-0 mr-md-1">&#8353;5000</span>
                            <span class="text-muted">(&#36;10)</span>
                        </div>
                        <a href="/bajozero/flavors/" alt="" class="btn btn-lg btn-block btn-vanilla rounded-0 hvr-sweep-to-bottom">Try it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>