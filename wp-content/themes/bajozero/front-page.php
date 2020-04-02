<!-- Front page -->

<?php get_header(); ?>

<?php 

$text_top = get_field('text_top');
$carousel = get_field('carousel');

$row_1 = get_field('row_1');
$row_2 = get_field('row_2');
$row_3 = get_field('row_3');

$cards = get_field('cards');

$card_1 = $cards['card_1'];
$card_2 = $cards['card_2'];
$card_3 = $cards['card_3'];

?>

<div class="bg-container">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center">
                <div class="text-center">
                    <h1 class="display-3 text-green text-uppercase font-impact my-0 animated fadeInDown">
                        <?php echo $text_top["title"]; ?>
                    </h1>
                    <div class="animated fadeInRight">
                        <h3 class="h1 text-pink font-yellowtail mb-0">
                            <?php echo $text_top["slogan"]; ?>
                        </h3>
                        <h5 class="text-chocolate font-weight-bold mb-4">
                            <?php echo $text_top["location"]; ?>
                        </h5>
                    </div>
                </div>

                <div class="animated fadeInLeft text-center mb-5">
                    <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                        Contact us
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="carousel" class="carousel slide animated fadeIn slow frame" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                            <?php 
                                if($carousel['first']['picture']['ID']) {
                                    echo wp_get_attachment_image($carousel['first']['picture']['ID'], '', false, 'class=img-cover slumber');
                                } else {
                                    echo wp_get_attachment_image($carousel['first']['picture'], '', false, 'class=img-cover slumber');
                                }
                            ?>
                            <div class="carousel-caption d-sm-block bg-text-1 text-vanilla">
                                <h3 class="text-uppercase mb-1">
                                    <span>
                                        <!-- Discover our fresh products -->
                                        <?php echo $carousel['first']['title'] ?>
                                    </span>
                                </h3>
                                <p>
                                    <span>
                                        <!-- Have a look at our 
                                        <a href="/bajozero/flavors/" alt="" class="link-green">
                                            flavors page
                                        </a>
                                         to find the ice cream that fits you perfectly -->
                                         <?php echo $carousel['first']['caption'] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="10000">
                            <?php 
                                if($carousel['second']['picture']['ID']) {
                                    echo wp_get_attachment_image($carousel['second']['picture']['ID'], '', false, 'class=img-cover slumber');
                                } else {
                                    echo wp_get_attachment_image($carousel['second']['picture'], '', false, 'class=img-cover slumber');
                                }
                            ?>
                            <div class="carousel-caption d-sm-block bg-text-2 text-vanilla">
                                <h3 class="text-uppercase mb-1">
                                    <span>
                                        <!-- Follow us on social medias -->
                                        <?php echo $carousel['second']['title'] ?>
                                    </span>
                                </h3>
                                <p>
                                    <span>
                                        <!-- Don't miss any last minute promotions and events at 
                                        <a href="/bajozero/our-shop/" alt="" class="link-chocolate">
                                            The shop
                                        </a> -->
                                        <?php echo $carousel['second']['caption'] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="10000">
                            <?php 
                                if($carousel['third']['picture']['ID']) {
                                    echo wp_get_attachment_image($carousel['third']['picture']['ID'], '', false, 'class=img-cover slumber');
                                } else {
                                    echo wp_get_attachment_image($carousel['third']['picture'], '', false, 'class=img-cover slumber');
                                }
                            ?>
                            <div class="carousel-caption d-sm-block bg-text-3 text-vanilla">
                                <h3 class="text-uppercase mb-1">
                                    <span>
                                        <!-- Come and visit us -->
                                        <?php echo $carousel['third']['title'] ?>
                                    </span>
                                </h3>
                                <p>
                                    <span>
                                        <!-- We have a spacious venue with a backyard where you can have fun with your friends! -->
                                        <?php echo $carousel['third']['caption'] ?>
                                    </span>
                                </p>
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
</div>

<div class="container-fluid">
    <div class="row featurette py-5 px-md-5 align-items-center">
        <div class="col-md-7 pr-5" data-aos="slide-right" data-aos-once="true">
            <h2 class="featurette-heading">
                <!-- This is our team. <span class="text-pink">And we are here for you</span> -->
                <?php echo $row_1['title']; ?>
            </h2>
            <p class="lead">
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
                <?php echo $row_1['caption']; ?>
            </p>
        </div>
        <div class="col-md-5" data-aos="slide-right" data-aos-once="true">
                <!-- <img src="<?php // echo content_url() . '/themes/bajozero/pictures/team.jpg' ?>" class="shadow-picture-lg img-fluid mx-auto" alt="" width="500" height="500" /> -->
            <div class="slumber">
                <?php 
                    if($row_1['picture']['ID']) {
                        echo wp_get_attachment_image($row_1['picture']['ID'], [500, 500], false, 'class=shadow-picture-lg img-fluid mx-auto');
                    } else {
                        echo wp_get_attachment_image($row_1['picture'], [500, 500], false, 'class=shadow-picture-lg img-fluid mx-auto');
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="row featurette py-5 px-md-5 align-items-center">
        <div class="col-md-7 order-md-2" data-aos="slide-left" data-aos-once="true">
            <h2 class="featurette-heading">
                <!-- Oh yeah, it’s good. <span class="text-orange">Latest flavor: caramel & vanilla.</span> -->
                <?php echo $row_2['title']; ?>
            </h2>
            <p class="lead">
                <!-- Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. -->
                <?php echo $row_2['caption']; ?>
            </p>
        </div>
        <div class="col-md-5 order-md-1" data-aos="slide-left" data-aos-once="true">
            <div class="slumber">
                <?php
                    if($row_2['picture']['ID']) {
                        echo wp_get_attachment_image($row_2['picture']['ID'], [500, 500], false, 'class=shadow-picture-lg img-fluid mx-auto');
                    } else {
                        echo wp_get_attachment_image($row_2['picture'], [500, 500], false, 'class=shadow-picture-lg img-fluid mx-auto');
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="row featurette py-5 px-md-5 align-items-center">
        <div class="col-md-7" data-aos="slide-right" data-aos-once="true">
            <h2 class="featurette-heading">
                <!-- Come and discover our venue.
                <span class="text-green">We are located
                    <a href="/bajozero/our-shop/" alt="" class="link-green link-decoration">
                        here
                    </a>
                </span> -->
                <?php echo  $row_3['title']; ?>
            </h2>
            <p class="lead">
                <!-- Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                <?php echo $row_3['caption']; ?>
            </p>
        </div>
        <div class="col-md-5" data-aos="slide-right" data-aos-once="true">
            <div class="slumber">
                <?php
                    if($row_3['picture']['ID']) {
                        echo wp_get_attachment_image($row_3['picture']['ID'], [500, 500], false, 'class=shadow-picture-lg img-fluid mx-auto');
                    } else {
                        echo wp_get_attachment_image($row_3['picture'], [500, 500], false, 'class=shadow-picture-lg img-fluid mx-auto');
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card-deck card-deck-front-page justify-content-center mb-3 text-center">
        <div class="card mb-4 shadow-sm" data-aos="flip-left" data-aos-once="true">
            <div class="card-header rounded-top">
                <h4 class="my-0 font-weight-light">
                    <!-- 🍦 Idea #1 -->
                    <?php echo $card_1['title']; ?>
                </h4>
            </div>
            <div class="card-body d-flex flex-column">
                <a href="/bajozero/flavors/" alt="">
                    <?php
                        if($card_1['picture']['ID']) {
                            echo wp_get_attachment_image($card_1['picture']['ID'], [500, 500], false, 'class=rounded img-fluid frame-hover');
                        } else {
                            echo wp_get_attachment_image($card_1['picture'], [500, 500], false, 'class=rounded img-fluid frame-hover');
                        }
                    ?>
                </a>

                <div class="mt-4">
                    <p class="text-green mb-1">Contains:</p>

                    <ul class="list-unstyled ">
                        <!-- <li>Vanilla</li>
                        <li>Caramel</li>
                        <li>Marshmallow</li>
                        <li>Strawberry topping</li> -->
                        <?php foreach( $card_1['list'] as $items ): ?>
                            <li><?php echo $items; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="card-title mt-0 pricing-card-title">
                        <span class="h2 mr-0 mr-md-1">&#8353;<?php echo $card_1['price']['colones']; ?></span>
                        <span class="text-muted">(&#36;<?php echo $card_1['price']['dollars']; ?>)</span>
                    </div>
                    <a href="/bajozero/flavors/" alt="" class="btn btn-lg btn-block btn-vanilla rounded-0 hvr-underline-from-center">Try it</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 shadow-sm" data-aos="flip-left" data-aos-delay="200" data-aos-once="true">
            <div class="card-header rounded-top">
                <h4 class="my-0 font-weight-light">
                    <!-- 🍧 Idea #2 -->
                    <?php echo $card_2['title']; ?>
                </h4>
            </div>
            <div class="card-body d-flex flex-column">
                <a href="/bajozero/flavors/" alt="">
                    <?php
                        if($card_2['picture']['ID']) {
                            echo wp_get_attachment_image($card_2['picture']['ID'], [500, 500], false, 'class=rounded img-fluid frame-hover');
                        } else {
                            echo wp_get_attachment_image($card_2['picture'], [500, 500], false, 'class=rounded img-fluid frame-hover');
                        }
                    ?>
                </a>

                <div class="mt-4">
                    <p class="text-pink mb-1">Contains:</p>

                    <ul class="list-unstyled ">
                        <!-- <li>Chocolate</li>
                        <li>Almond</li>
                        <li>Oreo</li>
                        <li>Vanilla topping</li> -->
                        <?php foreach( $card_2['list'] as $items ): ?>
                            <li><?php echo $items; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="card-title mt-0 pricing-card-title">
                        <span class="h2 mr-0 mr-md-1">&#8353;<?php echo $card_2['price']['colones']; ?></span>
                        <span class="text-muted">(&#36;<?php echo $card_2['price']['dollars']; ?>)</span>
                    </div>
                    <a href="/bajozero/flavors/" alt="" class="btn btn-lg btn-block btn-vanilla rounded-0 hvr-underline-from-center">Try it</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 shadow-sm" data-aos="flip-left" data-aos-delay="400" data-aos-once="true">
            <div class="card-header rounded-top">
                <h4 class="my-0 font-weight-light">
                    <!-- 🍨 Idea #3 -->
                    <?php echo $card_3['title']; ?>
                </h4>
            </div>
            <div class="card-body d-flex flex-column">
                <a href="/bajozero/flavors/" alt="">
                    <?php
                        if($card_3['picture']['ID']) {
                            echo wp_get_attachment_image($card_3['picture']['ID'], [500, 500], false, 'class=rounded img-fluid frame-hover');
                        } else {
                            echo wp_get_attachment_image($card_3['picture'], [500, 500], false, 'class=rounded img-fluid frame-hover');
                        }
                    ?>
                </a>

                <div class="mt-4">
                    <p class="text-orange mb-1">Contains:</p>

                    <ul class="list-unstyled ">
                        <!-- <li>Pistachio</li>
                        <li>Mint</li>
                        <li>Sugar sprinkles</li>
                        <li>Chocolate topping</li> -->
                        <?php foreach( $card_3['list'] as $items ): ?>
                            <li><?php echo $items; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="card-title mt-0 pricing-card-title">
                        <span class="h2 mr-0 mr-md-1">&#8353;<?php echo $card_3['price']['colones']; ?></span>
                        <span class="text-muted">(&#36;<?php echo $card_3['price']['dollars']; ?>)</span>
                    </div>
                    <a href="/bajozero/flavors/" alt="" class="btn btn-lg btn-block btn-vanilla rounded-0 hvr-underline-from-center">Try it</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>