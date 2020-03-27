<?php

/**
 Template Name: The shop
 */

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-uppercase font-weight-normal page-title animated slow fadeInDown">The shop</h1>
    </div>
</div>

<div class="container text-center my-5">
    <p>
        <img src="<?php echo content_url() . '/themes/bajozero/pictures/6.jpg' ?>" class="img-quote rounded shadow-picture-sm img-fluid " alt="">
    </p>

    <blockquote class="h3 blockquote">
        <p class="m-0 text-green font-italic animated pulse infinite slow">I go running when I have to.<br />When the ice cream truck is doing sixty.</p>
        <footer class="blockquote-footer text-pink">Wendy Liebman</footer>
    </blockquote>

</div>

<?php get_footer(); ?>


