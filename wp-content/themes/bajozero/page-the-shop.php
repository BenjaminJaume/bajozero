<?php

/**
 Template Name: The shop
 */

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-uppercase font-weight-normal title-green animated slow fadeInDown">The shop</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 m-0">
            <div class="img-text-container bg-container-shop">
                <h1 class="centered text-vanilla m-0">
                    <span>
                        <h1 class="display-3     text-chocolate font-yellowtail">
                            A little about us...
                        </h1>
                    </span>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 px-0">
            <img src="<?php echo content_url() . '/themes/bajozero/pictures/7.jpg' ?>" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-6 bg-chocolate">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-vanilla-light text-uppercase m-0">
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
        <div class="col-12 col-md-6 bg-vanilla order-1 order-md-0">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-chocolate-light text-uppercase m-0">
                    When it started
                </h1>
                <div class="text-chocolate h5 m-0">
                    <p class="m-0">
                        The adventure started in 2004. With a lot of prepartion and time, the first Helados a la plancha shop in Liberia was now opened!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 px-0 order-0 order-md-1">
            <img src="<?php echo content_url() . '/themes/bajozero/pictures/3.jpg' ?>" class="img-fluid" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 px-0">
            <img src="<?php echo content_url() . '/themes/bajozero/pictures/team.jpg' ?>" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-6 bg-chocolate">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-vanilla-light text-uppercase m-0">
                    Meet the team
                </h1>
                <div class="text-vanilla h5 m-0">
                    <p class="m-0">
                        We are Gustavo and Manuel, and we would be really happy to see you in our venue.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 

Where it is? Picture of outside
when it started
gallery of pictures. of inside and events etc.
the team
hiring
vr integration
We use only milk, eggs, cane sugar and natural ingredients
Why? Two friends from college with the same values
 -->

<div class="container text-center my-5" data-aos="fade-up" data-aos-once="true">
    <p>
        <img src="<?php echo content_url() . '/themes/bajozero/pictures/6.jpg' ?>" class="img-quote rounded shadow-picture-sm img-fluid " alt="">
    </p>

    <blockquote class="h3 blockquote">
        <p class="m-0 text-green font-italic animated pulse infinite slow">I go running when I have to.<br />When the ice cream truck is doing sixty.</p>
        <footer class="blockquote-footer text-pink">Wendy Liebman</footer>
    </blockquote>

</div>

<?php get_footer(); ?>