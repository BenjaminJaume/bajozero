<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-uppercase font-weight-normal title-green animated slow fadeInDown">Latest news</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card-deck card-deck-blog-page">
                <?php
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="card">
                            <div class="card-header bg-chocolate text-uppercase text-center">
                                <a href="<?php echo $post->guid; ?>" alt="" class="link-vanilla link-decoration">
                                    <h1 class="h5 m-0"><?php echo get_the_title(); ?></h1>
                                </a>
                            </div>
                            <a href="<?php echo $post->guid; ?>" alt="" class="p-0 p-sm-3">
                                <img src=<?php echo get_the_post_thumbnail_url(); ?> class="card-img-top frame-hover" alt="">
                            </a>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="card-footer bg-vanilla">
                                <div class="d-flex justify-content-between">
                                    <a href="<?php echo $post->guid; ?>" alt="" class="btn btn-vanilla rounded-0 hvr-underline-from-center">
                                        Learn more
                                    </a>
                                    <p class="text-chocolate m-0 align-self-center">
                                        <i class="far fa-clock"></i>
                                        <?php the_time('d/m/Y'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                <?php endwhile;
                else : endif; ?>

            </div>
        </div>
    </div>
</div>
</div>

<hr class="divider w-50" />

<div class="container text-center my-5" data-aos="fade-up" data-aos-once="true">
    <p>
        <img src="<?php echo content_url() . '/themes/bajozero/pictures/2.jpg' ?>" class="img-quote rounded shadow-picture-sm img-fluid " alt="">
    </p>

    <blockquote class="h3 blockquote animated pulse infinite slow">
        <i class="mb-0 text-green">Without ice cream, there would be darkness and chaos.</i>
        <footer class="blockquote-footer text-pink">Don Kardong</footer>
    </blockquote>

</div>

<?php get_footer(); ?>