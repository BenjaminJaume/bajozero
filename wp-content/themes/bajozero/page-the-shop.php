<?php

/**
 Template Name: The shop
 */

?>

<?php get_header(); ?>
    
<div class="container-fluid m-0 p-0">
    <div class="img-text-container video-container top-row-shop">
        <video autoplay loop muted poster="<?php echo content_url() . '/themes/bajozero/pictures/slumber/shop/shop-front-slumber.jpg' ?>" id="background" class="slumber bg-0-50-black">
            <source src="<?php echo content_url() . '/themes/bajozero/pictures/videos/presentation.mp4' ?>" type="video/mp4">
        </video>
        <span class="centered m-0">
            <h1 class="title-vanilla display-2 text-uppercase">
                The shop
            </h1>
        </span>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 px-0" data-aos="fade-right" data-aos-once="true">
            <div class="item-row-shop-1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.371813821639!2d-85.44061568520051!3d10.62819579242223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f757d2b24d3791d%3A0x40a80dc7cdbb02e7!2sHelader%C3%ADa%20Bajo%20Zero!5e0!3m2!1sen!2scr!4v1585854492094!5m2!1sen!2scr"
                    width="100%"
                    height="500" 
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                ></iframe>
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
                <div class="text-chocolate h5 m-0">
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

<div class="bg-green">
    <div class="container py-5">
        <h1 class="title-chocolate display-4 text-center text-uppercase mt-0">
            Our secret
        </h1>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    Oragnic Eggs
                </p>
                <div class="image-box rounded">
                    <?php echo wp_get_attachment_image(113, '', false, 'class=img-fluid') ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    Almond milk
                </p>
                <div class="image-box rounded">
                    <?php echo wp_get_attachment_image(114, '', false, 'class=img-fluid') ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    Cane sugar
                </p>
                <div class="image-box rounded">
                    <?php echo wp_get_attachment_image(102, '', false, 'class=img-fluid') ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    Natural flavors
                </p>
                <div class="image-box rounded">
                    <?php echo wp_get_attachment_image(115, '', false, 'class=img-fluid') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="title-chocolate display-4 text-center text-uppercase" data-aos="fade-down" data-aos-once="true">Gallery</h1>

    <?php $array_pictures = [
        "shop-1", "shop-2", "shop-3", "shop-9", "shop-5", "shop-6", "shop-7", "shop-8", "shop-9"
    ]
    ?>

    <div class="row text-center text-lg-left">
        <?php foreach ($array_pictures as $picture) {
            echo ('
            <div class="col-12 col-sm-6 col-lg-4" data-aos="flip-left" data-aos-once="true">
                <div class="frame mb-4">
                    <figure class="slumber m-0">
                        <img src="' . content_url() . '/themes/bajozero/pictures/slumber/shop/' . $picture . '-slumber.jpg" class=\"img-fluid\" alt="">
                    </figure>
                </div>
            </div>
            ');
        } ?>

    </div>
</div>

<div class="container-fluid container-hiring bg-green my-5">
    <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
        <h1 class="display-4 font-impact text-vanilla mb-3 mt-0" data-aos="fade-down" data-aos-once="true">
            We are hiring!
        </h1>
        <p class="h4 text-chocolate font-weight-light" data-aos="fade-left" data-aos-once="true">
            If you're a big ice cream fan, please drop us a message!
        </p>
        <div class="text-center mt-2" data-aos="fade-up" data-aos-once="true">
            <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                Contact us
            </a>
        </div>
    </div>
</div>

<hr class="divier w-50" />

<div class="container text-center my-5" data-aos="fade-up" data-aos-once="true">
    <p>
        <?php echo wp_get_attachment_image(104, '', false, 'class=img-quote rounded shadow-picture-sm img-fluid') ?>
    </p>

    <blockquote class="h3 blockquote animated pulse infinite slow">
        <i class="mb-0 text-green">I guess ice cream is one of those things that are beyond imagination.</i>
        <footer class="blockquote-footer text-pink">L.M. Montgomery</footer>
    </blockquote>
</div>

<!-- 

Why? Two friends from college with the same values
 -->

<?php get_footer(); ?>