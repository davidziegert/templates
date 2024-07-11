<main>
    <section>
        <h1>Latest Posts</h1>

        <?php if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } elseif (get_query_var('page')) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        } ?>

        <!-- Show defined public Posts -->
        <?php query_posts(array(
            'post_type' => 'post',
            'paged' => $paged,
            'posts_per_page' => 4,
            'post_status' => 'publish'
        )); ?>

        <!-- Loop through every Post -->
        <?php if (have_posts()) : ?>
            <div class="post-wrapper">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-item">
                        <div class="post-image">
                            <!-- Post-Thumbnail -->
                            <?php if (has_post_thumbnail()) {
                                get_the_post_thumbnail(get_the_ID(), "thumbnail");
                            } else {
                                echo '<img src="https://picsum.photos/150" class="attachment-thumbnail size-thumbnail wp-post-image" decoding="async" loading="lazy">';
                            } ?>
                        </div>
                        <div class="post-content">
                            <!-- Post-Title -->
                            <h2><?php the_title(); ?></h2>
                            <!-- Post-Content (10 words) -->
                            <span><?php the_excerpt(); ?></span>
                            <!-- Post-Link -->
                            <span><a href="<?php the_permalink(); ?>">read more</a></span>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <!-- Pagination for Posts -->
        <?php if (function_exists("insert_blog_pagination")) : ?>
            <?php insert_blog_pagination("", 4); ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

    </section>
</main>