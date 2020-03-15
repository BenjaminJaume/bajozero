<?php get_header(); ?>

<div class="container py-5">


        
        <?php 
            $age = get_field('age');
            $name = get_field('name');
            $about_you = get_field('about_you');
        ?>

        <p><?php echo $age; ?></p>
        <p><?php echo $name; ?></p>
        <div><?php echo $about_you; ?></div>


</div>

<?php get_footer(); ?>