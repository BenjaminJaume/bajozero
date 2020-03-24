<?php get_header(); ?>

<div class="background-container">
    <div class="container py-5">

        <h1 class="display-4 text-center text-pink text-uppercase">Latest news</h1>

        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php $url = $post->guid; ?>
                <div class="mb-3">
                    <a href="<?php echo $url; ?>" alt="" class="h1 mr-2 link-chocolate link-decoration"><?php the_title(); ?></a>
                    <span class="text-muted">
                        <i class="far fa-clock"></i>
                        <?php the_time('jS F Y'); ?>
                    </span>
                </div>


                <div>
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="content-post">
                    <?php the_excerpt(); ?>
                </div>

        <?php endwhile;
        else : endif; ?>

    </div>
</div>

<div class="container text-center my-5">

    <p>
        <img src="<?php echo content_url() . '/themes/bajozero/pictures/2.jpg' ?>" class="img-quote rounded shadow-picture-sm img-fluid " alt="">
    </p>

    <blockquote class="h3 blockquote">
        <i class="mb-0 text-green">Without ice cream, there would be darkness and chaos.</i>
        <footer class="blockquote-footer text-pink">Don Kardong</footer>
    </blockquote>

</div>

<?php get_footer(); ?>