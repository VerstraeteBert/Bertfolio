<?php
/* Template Name:  Template Page Content */
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
                    <a class="work-link-no-border" href="<?php the_permalink(); ?>">
                        <img class="work-screenshot" src="<?php the_post_thumbnail_url(); ?>">
                    </a>
                </div>
                <div class="work-description top-bottom-margin">
                    <a class="work-link-no-border" href="<?php the_permalink(); ?>">
                        <h2 class="work-title"><?php the_title(); ?></h2>
                    </a>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Read more</a>
                </div>
            </div>
        <?php
            endwhile;
        ?>
        </div>
    </div>
<?php get_footer(); ?>