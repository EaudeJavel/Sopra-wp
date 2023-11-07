<?php
// WP_Query arguments to get the last 3 videos
$args = array(
    'post_type'              => 'video',
    'post_status'            => 'publish',
    'posts_per_page'         => '3',
);

$videos_query = new WP_Query( $args );

if ( $videos_query->have_posts() ) : ?>

    <div class="videos-block">
        <h2 class="videos-block__title">
            <span>videos</span>
        </h2>

        <?php while ( $videos_query->have_posts() ) : $videos_query->the_post(); ?>

            <div class="videos-block__article">
                <span class="videos-block__article__category-badge">
                    <?php echo get_the_category_list(', '); ?>
                </span>

                <h3 class="videos-block__article__title"><?php the_title(); ?></h3>
                <div class="videos-block__article__actions">

                    <div class="videos-block__article__actions__container">
                        <span class="videos-block__article__actions__container__author">
                            <?php the_author(); ?>
                        </span>

                        <span class="videos-block__article__actions__container__date">
                            <?php the_date(); ?>
                        </span>
                    </div>


                    <a href="<?php the_permalink(); ?>" class="videos-block__article__actions__button"> > Watch</a>

                </div>


            </div>

        <?php endwhile; ?>
    </div>

    <?php
    /* Restore original Post Data */
    wp_reset_postdata();
else :
    // If no posts were found, you can add a message or alternative content here
    echo '<p>No videos found.</p>';
endif;
?>
