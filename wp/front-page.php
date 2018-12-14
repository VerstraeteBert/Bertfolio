<?php
/* Template Name: Front Page Template */
    get_header();
?>

<section class="content-wrapper hero section" id="content">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="hero-avatar">
        <?php the_post_thumbnail('thumbnail', array('id' => 'avatar')); ?>
    </div>
    <?php } ?>
    <div class="hero-about">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
         endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>