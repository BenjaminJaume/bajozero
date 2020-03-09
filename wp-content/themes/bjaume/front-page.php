<?php get_header(); ?>

<div class="container py-5">
    <h1><?php the_title(); ?></h1>
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <p><?php the_content(); ?></p>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>