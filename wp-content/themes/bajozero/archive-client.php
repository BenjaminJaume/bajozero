<?php get_header(); ?>

<div class="container py-5">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <?php 
            $post_id = $post->ID;
            $age = get_field('age');
            $name = get_field('name');
            $about_you = get_field('about_you');
        ?>

        <p><a href="<?php echo(get_site_url() . '/clients/'  . strtolower($name)) ?>"><?php echo $name ?></a> - <?php echo $age . ' years old' ?></p>
        <div><?php echo $about_you; ?></div>
        
        <p>
        
        </p>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>