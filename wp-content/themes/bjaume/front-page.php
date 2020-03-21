<!-- Front page -->

<?php get_header(); ?>

<div class="container-fluid home-container py-5">
    <h1 class="text-center">
        We are Bajo Zero
    </h1>
    <p class="text-center">
        And we are specialised in ice cream rolls on plancha
    </p>
    <p class="text-center p-5" style="background-color: white;">
        <?php echo wp_get_attachment_image(42, '', '', ["class" => "align-middle img-fluid"]); ?>
    </p>


    <?php
		if(have_posts() ): while (have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
        
        <?php the_excerpt(); ?>
    <?php endwhile; else: endif; ?>

</div>

<?php get_footer(); ?>