<?php get_header(); ?>

<div class="container py-5">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <?php 
            $post_id = $post->ID;
            $location = get_field('post_location');
        ?>
        <h1 class="post--title"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <div class="post--location">
            <?php echo($location); ?>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>