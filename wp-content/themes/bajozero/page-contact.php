<?php

/**
 Template Name: Contact
 */

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-3 title-green text-center text-uppercase animated slow fadeInDown">
            Contact
        </h1>
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


<div class="container align-items-center rounded-lg">
    <div class="row bg-green py-5 rounded-top">
        <div class="mx-auto">
            <h1 class="h1 title-vanilla text-uppercase m-0" data-aos="fade-down" data-aos-once="true">
                Let's keep in touch
            </h1>
        </div>
    </div>
    <div class="row bg-vanilla align-items-center py-5 rounded-bottom">
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
        <div class="col-12 col-sm-8 col-md-6 text-center mx-auto px-md-5" data-aos="fade-left" data-aos-once="true">
            <div class="form-group m-0">
                <?php echo do_shortcode('[contact-form-7 id="76" title="Contact form"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container my-5" data-aos="fade-up" data-aos-once="true">
    <div class="row">
        <div class="mx-auto">
            <h1 class="h1 title-green text-uppercase mt-0 mb-4">
                Find us here
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto frame">
            <?php // echo do_shortcode('[wpgmza id="1"]'); ?>
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
</div>

<?php get_footer(); ?>