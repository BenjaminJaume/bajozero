<?php

/**
 Template Name: Flavors
 */

?>


<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-pink text-uppercase font-weight-normal page-title">Flavors</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 text-center">
            <div class="img-text-container mb-3">

                <img src="<?php echo content_url() . '/themes/bajozero/pictures/ice-cream-flavors.jpg' ?>" class="img-flavors-page img-fluid frame bg-0-30" alt="" width="500" height="500" />
                <h1 class="centered text-vanilla bg-text-1 m-0">
                    <span>
                        Flavors
                    </span>
                </h1>
            </div>

            <div>
                <dl class="font-size-big font-weight-light">
                    <dd class="flavor-item" data-toggle="tooltip" data-html="true" title="<img src='<?php echo content_url() . '/themes/bajozero/pictures/ice-cream-flavors.jpg' ?>' height='10px' />">
                        <span>
                            Vanilla (v)
                        </span>

                    </dd>
                    <dd>
                        <!-- HTML to write -->
                        <a href="#" data-toggle="tooltip" data-html="true" title="<img src='<?php echo content_url() . '/themes/bajozero/pictures/ice-cream-flavors.jpg' ?>' height='200px' />">Hover over me</a>

                        <!-- Generated markup by the plugin -->
                        <div class="tooltip bs-tooltip-top" role="tooltip">
                            <div class="arrow"></div>
                            <div class="tooltip-inner" style="width: 500px">
                                Some tooltip text!
                            </div>
                        </div>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Chocolate
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Cookies &amp; Cream
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Mint Chocolate Chip
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Chocolate Chip Cookie Dough
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Strawberry (v)
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Buttered Pecan
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Blackberry
                        </span>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center">
            <div class="img-text-container mb-3">
                <img src="<?php echo content_url() . '/themes/bajozero/pictures/ice-cream-toppings.jpg' ?>" class="img-flavors-page img-fluid frame bg-0-30" alt="" width="500" height="500" />
                <h1 class="centered text-vanilla bg-text-2 m-0">
                    <span>
                        Toppings
                    </span>
                </h1>
            </div>

            <div>
                <dl class="font-size-big font-weight-light">
                    <dd class="flavor-item">
                        <span>
                            Sprinkles
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Oreos
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Peanut butter cups
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Cookie dough
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Marshmallow
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Cereal
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            M&amp;M'S
                        </span>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center mx-sm-auto">

            <div class="img-text-container mb-3">
                <img src="<?php echo content_url() . '/themes/bajozero/pictures/ice-cream-sauces.jpg' ?>" class="img-flavors-page img-fluid frame bg-0-30" alt="" width="500" height="500" />
                <h1 class="centered text-vanilla bg-text-3 m-0">
                    <span>
                        Coulis
                    </span>
                </h1>
            </div>


            <div>
                <dl class="font-size-big font-weight-light">
                    <dd class="flavor-item">
                        <span>
                            Hot fudge
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Caramel
                        </span>
                    </dd>
                    <dd class="flavor-item">
                        <span>
                            Strawberries
                        </span>
                    </dd>
                </dl>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 pt-3">
            <p class="text-muted font-italic text-center">
                (v) Vegan option available
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 text-green text-center font-weight-normal">
                Prices
            </h1>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
        </div>
    </div>
</div>

<?php get_footer(); ?>