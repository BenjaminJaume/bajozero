<?php

/**
 Template Name: Contact
 */

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-uppercase font-weight-normal title animated slow fadeInDown">Contact</h1>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center bg-text-1">
            <p class="font-size-big text-green">
                If you want to book the venue, make a special request,
                improve anything, add a new flavor or simply say Hi!,
                we will be happy to read your message!
            </p>
        </div>
    </div>
</div>


<div class="container bg-vanilla my-5 py-5 align-items-center">
    <div class="row">
        <div class="col-auto mx-auto" data-aos="fade-down" data-aos-once="true">
            <img src="<?php echo content_url() . '/themes/bajozero/pictures/logo.png' ?>" class="logo-lg mb-5" alt="">
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mx-auto mb-5 mb-md-0" data-aos="fade-right" data-aos-once="true">
            <a href="#" alt="" class="link-chocolate text-decoration-none">
                <span class="text-chocolate">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                </span>
                <p>
                    50 Metros Oeste de Restaurante Copa de Oro,<br />
                    Provincia de Guanacaste<br />
                    Liberia, Costa Rica
                </p>
            </a>

            <a href="#" alt="" class="link-chocolate text-decoration-none">
                <span class="text-chocolate">
                    <i class="fas fa-envelope fa-2x"></i>
                </span>
                <p>
                    <a href="mailto:heladeriabajozerocr@gmail.com" class="link-chocolate text-decoration-none">heladeriabajozerocr@gmail.com</a>
                </p>
            </a>

            <a href="#" alt="" class="link-chocolate text-decoration-none">
                <span class="text-chocolate">
                    <i class="fab fa-facebook fa-2x"></i>
                </span>
                <p class="m-0">
                    <a href="https://www.facebook.com/BajoZeroCostaRica/" class="link-chocolate text-decoration-none">@BajoZeroCostaRica</a>
                </p>
            </a>
        </div>
        <div class="col-12 col-md-6 text-center mx-auto px-md-5" data-aos="fade-left" data-aos-once="true">
            <div class="form-group m-0">
                <?php echo do_shortcode('[contact-form-7 id="169" title="Contact form"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>