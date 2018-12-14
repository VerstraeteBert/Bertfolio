<?php get_header(); ?>

    <div class="content-wrapper section" id="content">

        <div class="left">
            <h1 class="section-title">--verbose</h1>
            <p class="blog-verbose-body">
                I write about building cool things to share insights.
                Furthermore I also occasionaly write about my travels, adventures and challenges.
            </p>

            <h1 class="section-subtitle">All posts</h1>
            <hr class="hr hr-quarter">

            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; endif; ?>
        </div>
    </div>

<?php get_footer(); ?>