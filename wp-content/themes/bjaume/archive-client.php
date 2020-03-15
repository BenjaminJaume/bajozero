<?php get_header(); ?>

<div class="container py-5">

    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <?php 
            $post_id = $post->ID;
            $age = get_field('age');
            $name = get_field('name');
            $about_you = get_field('about_you');
        ?>

        <p><?php echo $age; ?></p>
        <p><?php echo $name; ?></p>
        <div><?php echo $about_you; ?></div>
        <a href="<?php echo(get_site_url() . '/clients/'  . strtolower($name)) ?>">go to <?php echo $name ?></a>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>