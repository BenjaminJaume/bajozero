<?php get_header(); ?>

<div class="background-container">
    <div class="container py-5">

        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="text-center ">
                    <h1 class="display-4 text-chocolate mb-0"><?php the_title(); ?></h1>
                    <span class="h4 text-muted">
                        <i class="far fa-clock"></i>
                        <?php the_time('jS F Y'); ?>
                    </span>
                </div>
    </div>
</div>
<div class="container py-5">

    <div><?php the_content(); ?></div>
<?php endwhile;
        else : endif; ?>
</div>
</div>

<?php get_footer(); ?>