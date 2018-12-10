<?php
/* Template Name:  Template Page Content */
    get_header();
?>
    <div class="content-wrapper section normal-page" id="content">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; endif; ?>
    </div>

<?php get_footer(); ?>