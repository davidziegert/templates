<main>
    <section>
        <h1>Latest Posts</h1>

        <div class="latest-posts">
            <!-- Show defined public Posts -->
            <?php $args = array( 'post_type' => 'post', 'post_status' => 'publish' ); ?>

            <!-- Loop through every Post -->
            <?php $the_query = new WP_Query( $args ); ?>
            <?php if($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="short-post">
                <div class="post-image">
                    <!-- Post-Thumbnail -->
                    <?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); } else { echo '<img src="https://picsum.photos/150" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" loading="lazy">'; } ?>
                </div>
                <div class="post-content">
                    <!-- Post-Title -->
                    <h2><?php the_title(); ?></h2>
                    <!-- Post-Content (10 words with link) -->
                    <span><?php echo wp_trim_words(get_the_content(), 10); ?> | <a href="<?php the_permalink(); ?>">read
                            more</a></span>
                    </p>
                </div>
            </article>
            <?php endwhile; ?>
            <?php else: ?>
            <?php _e( 'There no posts to display.' ); ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>

    </section>
</main>