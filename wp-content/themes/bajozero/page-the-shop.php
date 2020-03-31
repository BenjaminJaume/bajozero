<?php

/**
 Template Name: The shop
 */

?>

<?php get_header(); ?>
<!-- 
<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-uppercase font-weight-normal title-green animated slow fadeInDown">The shop</h1>
    </div>
</div> -->

<div class="container-fluid">
    <div class="row top-row-shop" data-aos="fade-down" data-aos-once="true">
        <div class="col-12 p-0 m-0">
            <div class="img-text-container bg-container-shop">
                <span class="centered m-0">
                    <h1 class="title-vanilla display-2 text-uppercase">
                        The shop
                    </h1>
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 px-0" data-aos="fade-right" data-aos-once="true">
            <div class="slumber">
                <div class="item-row-shop-1">
                    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-chocolate item-row-shop" data-aos="fade-left" data-aos-once="true">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-green text-uppercase m-0">
                    Where we are
                </h1>
                <div class="text-vanilla h5 m-0">
                    <a href="https://g.page/BajoZeroCostaRica" alt="" target="_blank" class="link-vanilla text-decoration-none m-0">
                        50 Metros Oeste de Restaurante Copa de Oro,<br />
                        Provincia de Guanacaste<br />
                        Liberia, Costa Rica
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 bg-vanilla order-1 order-md-0 item-row-shop" data-aos="fade-right" data-aos-once="true">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-green text-uppercase m-0">
                    When it started
                </h1>
                <div class="text-chocolate h5 m-0 px-0 px-lg-5">
                    <p class="m-0 px-lg-5">
                        The adventure started in 2004. With a lot of prepartion and time, the first Helados a la plancha shop in Liberia was now opened!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 px-0 order-0 order-md-1" data-aos="fade-left" data-aos-once="true">
            <div class="slumber">
                <div class="item-row-shop-2"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 px-0" data-aos="fade-right" data-aos-once="true">
            <div class="slumber">
                <div class="item-row-shop-3"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-chocolate item-row-shop" data-aos="fade-left" data-aos-once="true">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-green text-uppercase m-0">
                    Meet the team
                </h1>
                <div class="text-vanilla h5 m-0">
                    <p class="m-0 px-lg-5">
                        We are Gustavo and Manuel, and we would be really happy to see you in our venue.
                        There you can share any ideas with us, spend some time in the venue and maybe get a surprise!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="title-chocolate display-4 text-center text-uppercase">Gallery</h1>

    <?php $array_pictures = [
        "1", "2", "3", "9", "5", "6", "7", "8", "9"
    ]
    ?>

    <div class="row text-center text-lg-left">
        <?php foreach ($array_pictures as $picture) {
            echo ('
            <div class="col-12 col-sm-6 col-md-4">
                <div class="frame mb-4">
                    <figure class="slumber m-0">
                        <img src="' . content_url() . '/themes/bajozero/pictures/shop/shop-' . $picture . '.jpg" class=\"img-fluid\" alt="">
                    </figure>
                </div>
            </div>
            ');
        } ?>

    </div>
</div>

<!-- 

the team
hiring
vr integration
We use only milk, eggs, cane sugar and natural ingredients
Why? Two friends from college with the same values
 -->

<?php get_footer(); ?>