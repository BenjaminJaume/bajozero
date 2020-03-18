<!-- Page template -->

<?php get_header(); ?>

<div class="container-fluid home-container py-5">
<?php 
    if ( have_posts() ) {
        wp_reset_query();
        setup_postdata($post); 
        echo esc_attr(htmlentities(the_content()));
    } else {
        // There is no content found on the page
        '';
    };
?>
</div>

<?php get_footer(); ?>