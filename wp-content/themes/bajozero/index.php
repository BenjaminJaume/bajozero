<?php get_header(); ?>

<div class="container py-5">

    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
    <?php endwhile;
    else : endif; ?>

</div>

<?php get_footer(); ?>