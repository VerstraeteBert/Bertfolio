<?php
/* Template Name:  Template About Page */
    get_header();
?>

<div class="content-wrapper section" id="content">
    <?php the_post_thumbnail('thumbnail', array('id' => 'avatar', 'class' => 'about-avatar')); ?>
    <div class="left">
        <h1 class="section-title">About me</h1>
        <hr class="hr-half hr">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
