<!-- Page -->

<?php get_header(); ?>

<?php
if (have_posts()) {
    wp_reset_query();
    setup_postdata($post);
    echo esc_attr(htmlentities(the_content()));
} else {
    // There is no content found on the page
    '';
};
?>

<?php get_footer(); ?>