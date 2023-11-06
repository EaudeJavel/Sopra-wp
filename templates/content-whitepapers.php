<?php
// WP_Query arguments to get the last 4 posts
$args = array(
    'post_type'              => 'post', // or your custom post type if necessary
    'post_status'            => 'publish',
    'posts_per_page'         => '4', // Number of posts to show
    'ignore_sticky_posts'    => true, // Ignore sticky posts
);

// The Query
$whitepapers_query = new WP_Query( $args );

// The Loop
if ( $whitepapers_query->have_posts() ) : ?>

    <div class="whitepapers-block">
        <h2 class="whitepapers-block__title">
            <span>White Papers</span>
        </h2>

        <?php while ( $whitepapers_query->have_posts() ) : $whitepapers_query->the_post(); ?>

            <div class="whitepapers-block__article">
                <span class="whitepapers-block__article__category-badge">
                    <?php echo get_the_category_list(', '); // Categories as badges ?>
                </span>

                <h3 class="whitepapers-block__article__title"><?php the_title(); ?></h3>

                <!-- <span class="whitepapers-block__article__type">
                    <?php
                    // get the white paper
                        //echo get_post_meta(get_the_ID(), 'whitepaper_type', true);
                    ?>
                </span> -->

                <div class="whitepapers-block__article__actions">

                    <span class="whitepapers-block__article__actions__author">
                        <?php the_author(); ?>
                    </span>

                    <a href="<?php the_permalink(); ?>" class="whitepapers-block__article__actions__button"> > Read</a>

                </div>


            </div>

        <?php endwhile; ?>
    </div>

    <?php
    /* Restore original Post Data */
    wp_reset_postdata();
else :
    // If no posts were found, you can add a message or alternative content here
    echo '<p>No whitepapers found.</p>';
endif;
?>
