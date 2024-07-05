<aside>
    <section>
        <h3>Latest Posts</h3>
        <div class="post-wrapper">
            <!-- Loop through last 4 Post -->
            <?php $the_query = new WP_Query('posts_per_page=4'); ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="post-item">
                <div class="post-content">
                    <!-- Post-Title -->
                    <h4><?php the_title(); ?></h4>
                    <span><a href="<?php the_permalink(); ?>">read more</a></span>
                </div>
            </article>
            <?php endwhile; ?>
            <?php else : ?>
            <?php _e('There no posts to display.'); ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </section>
</aside>