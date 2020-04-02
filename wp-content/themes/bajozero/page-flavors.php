<?php

/**
 Template Name: Flavors
 */

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-3 title-green text-center text-uppercase animated slow fadeInDown">
            Flavors
        </h1>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-flavor" tabindex="-1" role="dialog" aria-labelledby="modal-flavor-label">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-header bg-green text-chocolate">
                <h4 class="modal-title mx-auto text-uppercase" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body bg-vanilla">
                <span id="modal-picture"></span>
                <br />
                <span id="modal-content"></span>
            </div>

            <div class="modal-footer bg-green">
                <button type="button" class="btn btn-vanilla rounded-0 hvr-underline-from-center" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
$flavors = array(
    "vanilla",
    "chocolate",
    "cookies &amp; cream",
    "mint chocolate chip",
    "cookie dough",
    "strawberry",
    "buttered pecan",
    "blackberry"
);

$toppings = array(
    "sprinkles",
    "oreo",
    "peanut butter cups",
    "cookie",
    "marshmallow",
    "cereal",
    "m&m's"
);

$sauces = array(
    "hot chocolate",
    "caramel",
    "strawberry"
); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 text-center" data-aos="fade-right" data-aos-once="true">
            <div class="img-text-container mb-3">
                <?php echo wp_get_attachment_image(35, '', false, 'class=img-flavors-page img-fluid frame bg-0-50') ?>
                <h1 class="centered text-vanilla bg-text-1 m-0">
                    <span>
                        Flavors
                    </span>
                </h1>
            </div>

            <div>
                <dl class="font-size-big font-weight-light">

                    <?php foreach ($flavors as $flavor) {
                        echo ('
                        <dd class="flavor-item item-text-chocolate">
                            <span
                                data-toggle="modal"
                                data-target="#modal-flavor"
                                data-picture="
                                    <img class=\'img-fluid rounded frame\' src=' . content_url() . '/themes/bajozero/pictures/slumber/flavors/' . str_replace(' ', '-', $flavor) . '-slumber.jpg />
                                "
                                data-title="' . $flavor . '"
                                class="text-capitalize"
                            >
                                ' . $flavor . '
                            </span>
                        </dd>
                    ');
                    } ?>

                </dl>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center" data-aos="fade-down" data-aos-once="true">
            <div class="img-text-container mb-3">
                <?php echo wp_get_attachment_image(36, '', false, 'class=img-flavors-page img-fluid frame bg-0-50') ?>
                <h1 class="centered text-vanilla bg-text-2 m-0">
                    <span>
                        Toppings
                    </span>
                </h1>
            </div>

            <div>
                <dl class="font-size-big font-weight-light">

                    <?php foreach ($toppings as $topping) {
                        echo ('
                            <dd class="flavor-item item-text-green">
                                <span
                                    data-toggle="modal"
                                    data-target="#modal-flavor"
                                    data-picture="
                                        <img class=\'img-fluid rounded frame\' src=' . content_url() . '/themes/bajozero/pictures/slumber/toppings/' . str_replace(' ', '-', $topping) . '-slumber.jpg />
                                    "
                                    data-title="' . $topping . '"
                                    class="text-capitalize"
                                >
                                    ' . $topping . '
                                </span>
                            </dd>
                        ');
                    } ?>

                </dl>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center mx-sm-auto" data-aos="fade-left" data-aos-once="true">

            <div class="img-text-container mb-3">
                <?php echo wp_get_attachment_image(37, '', false, 'class=img-flavors-page img-fluid frame bg-0-50') ?>
                <h1 class="centered text-vanilla bg-text-3 m-0">
                    <span>
                        Sauce
                    </span>
                </h1>
            </div>


            <div>
                <dl class="font-size-big font-weight-light">
                    <?php foreach ($sauces as $sauce) {
                        echo ('
                            <dd class="flavor-item item-text-pink">
                                <span
                                    data-toggle="modal"
                                    data-target="#modal-flavor"
                                    data-picture="
                                        <img class=\'img-fluid rounded frame\' src=' . content_url() . '/themes/bajozero/pictures/slumber/sauces/' . str_replace(' ', '-', $sauce) . '-slumber.jpg />
                                    "
                                    data-title="' . $sauce . '"
                                    class="text-capitalize"
                                >
                                    ' . $sauce . '
                                </span>
                            </dd>
                        ');
                    } ?>
                </dl>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 pt-3">
            <p class="text-muted font-italic text-center m-0">
                (v) Vegan option available
            </p>
        </div>
    </div>
</div>

<div class="container-fluid price-container my-5" data-aos="fade-down" data-aos-once="true">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 mx-auto">
            <h1 class="title-green display-4 text-center text-uppercase">
                Prices
            </h1>

            <div class="card-deck card-deck-flavors-page justify-content-center mb-3 text-center">
                <div class="card rounded-0 mb-4 shadow-sm">
                    <div class="card-header bg-chocolate text-vanilla">
                        <h4 class="my-0 font-weight-light">#1 Ice cream only 👍</h4>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h5 class="text-chocolate mb-3">You can chose up to 3 different flavors</h5>

                            <dl class="list-unstyled">
                                <dd>
                                    <span class="font-size-big">
                                        1 flavor: &#8353;1500
                                    </span>
                                    <span class="text-muted">
                                        (&#36;3)
                                    </span>
                                </dd>
                                <dd>
                                    <span class="font-size-big">
                                        2 flavors: &#8353;2000
                                    </span>
                                    <span class="text-muted">
                                        (&#36;4)
                                    </span>
                                </dd>
                                <dd>
                                    <span class="font-size-big">
                                        3 flavors: &#8353;2250
                                    </span>
                                    <span class="text-muted">
                                        (&#36;5)
                                    </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 mb-4 shadow-sm">
                    <div class="card-header bg-green text-vanilla">
                        <h4 class="my-0 font-weight-light">#2 Ice cream + topping 👌</h4>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h5 class="text-green mb-3">Pick your favorite flavors and add up to 2 toppings</h5>

                            <dl class="list-unstyled">
                                <dd>
                                    <span class="font-size-big">
                                        1 topping: + &#8353;500
                                    </span>
                                    <span class="text-muted">
                                        (&#36;1)
                                    </span>
                                </dd>
                                <dd>
                                    <span class="font-size-big">
                                        2 toppings: + &#8353;1000
                                    </span>
                                    <span class="text-muted">
                                        (&#36;2)
                                    </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 mb-4 shadow-sm">
                    <div class="card-header bg-pink text-vanilla">
                        <h4 class="my-0 font-weight-light">#3 Combo 🤩</h4>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h5 class="text-pink mb-3">If you're really hungry, just put some extra sauce on it!</h5>

                            <dl class="list-unstyled">
                                <dd>
                                    <span class="font-size-big">
                                        Any sauce: + &#8353;500
                                    </span>
                                    <span class="text-muted">
                                        (&#36;1)
                                    </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center font-italic text-muted">
                Price range: &#8353;1500 to &#8353;3750 (&#36;3 to &#36;7)
            </p>

        </div>
    </div>

</div>

<div class="container text-center my-5" data-aos="fade-up" data-aos-once="true">
    <p>
        <?php echo wp_get_attachment_image(38, '', false, 'class=img-quote rounded shadow-picture-sm img-fluid') ?>
    </p>

    <blockquote class="h3 blockquote">
        <p class="m-0 text-green font-italic animated pulse infinite slow">Ice-cream is the favorite currency of love.</p>
        <footer class="blockquote-footer text-pink">Puck</footer>
    </blockquote>

</div>

<?php get_footer(); ?>