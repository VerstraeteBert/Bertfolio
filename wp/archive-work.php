<?php
/* Template Name: Template Archive Work Content */
get_header();
?>
    <div class="section" id="content">
        <div class="wrap">
            <div class="flex-wrapper">
            <?php
                $args = array( 'post_type' => 'work', 'posts_per_page' => 20 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="work-teaser">
                    <div class="work-thumbnail">
                            <img class="work-screenshot" alt="thumbnail for work showcase" src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                    <div class="work-description top-bottom-margin">
                            <h2 class="work-title"><?php the_title(); ?></h2>

                            <?php if ( get_field('work_timestamp') ): ?>
                                <span> <?php the_field('work_timestamp') ?> </span>
                            <?php endif; ?>

                            <?php the_excerpt(); ?>

                            <?php if ( get_field('skills_used') ): ?>
                                <em>Skills used: <?php the_field('skills_used') ?></em>
                            <?php endif; ?>

                            <?php if ( get_field('blog_link') || get_field('github_link') || get_field('demo_link') ): ?>
                                <span class="work-links">
                                    <?php if ( get_field('blog_link') ): ?>
                                        <a href="<?php the_field('blog_link') ?>">Read more</a>
                                    <?php endif; ?>

                                    <?php if ( get_field('github_link') ): ?>
                                        <a href="<?php the_field('github_link') ?>">Source Code</a>
                                    <?php endif; ?>

                                    <?php if ( get_field('demo_link') ): ?>
                                        <a href="<?php the_field('demo_link') ?>">Demo</a>
                                    <?php endif; ?>
                                </span>
                            <?php endif; ?>
                    </div>
                </div>
            <?php
                endwhile;
            ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>