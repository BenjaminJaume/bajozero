<?php get_header(); ?>

<div class="container py-5">
        
    <?php 
        $age = get_field('age');
        $name = get_field('name');
        $about_you = get_field('about_you');
    ?>

    <p><?php echo $name; ?></p>
    <p><?php echo $age; ?></p>
    <div><?php echo $about_you; ?></div>
    <a href="<?php echo(get_site_url() . '/clients') ?>">Go Back to clients</a>

</div>

<?php get_footer(); ?>