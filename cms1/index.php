<?php get_header(); ?>

    <div class="hero section" id="content">

        <div class="left">
            <h1 class="section-title">grep $SUMMARY blogs | less</h1>
            <p>
                I write about building cool things, sharing insights.
                Apart from that I also occasionally write about my other adventures and challenges.
            </p>
            <hr class="hr hr-half">

            <h1 class="section-subtitle">all posts</h1>
            <hr class="hr hr-quarter">

            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; endif; ?>
        </div>
    </div>

<?php get_footer(); ?>