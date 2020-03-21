<!-- Front page -->

<?php get_header(); ?>

<div class="container-fluid home-container py-5">
    <h1 class="text-center">
        We are Bajo Zero
    </h1>
    <p class="text-center">
        And we are specialised in ice cream rolls on plancha
    </p>
    <p class="text-center">
        <?php echo wp_get_attachment_image(42, '', '', ["class" => "img-front align-middle img-fluid"]); ?>
    </p>




</div>

<?php get_footer(); ?>