<?php get_header(); ?>

<div class="background-container-0-100">
    <div class="container py-5">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="text-center">
                    <h1 class="display-4 text-chocolate mb-0"><?php the_title(); ?></h1>
                    <span class="h4 text-muted">
                        <i class="far fa-clock"></i>
                        <?php the_time('d/m/Y'); ?>
                    </span>
                </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <div class="text-center blog-post-img-container mx-auto mb-3">
                <img src=<?php echo get_the_post_thumbnail_url(); ?> class="img-fluid  rounded" alt="">
            </div>

            <div>
                <p class="font-weight-light h5">
                    <?php echo get_the_content() ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <p class="h1">
                - <?php echo get_the_author(); ?>
            </p>
        </div>
    </div>

<?php endwhile;
        else : endif; ?>
</div>
</div>

<?php get_footer(); ?>