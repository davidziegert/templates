<aside>
    <section>
        <div class="row">
            <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                <h4>Aktuelle News</h4>
                <div class="post-wrapper">
                    <?php $the_query = new WP_Query('posts_per_page=6'); ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="post-item">
                            <div class="post-content">
                                <span><?php the_title(); ?></span>
                                <span><a href="<?php the_permalink(); ?>">weiterlesen</a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <h4>Latest News</h4>
                <div class="post-wrapper">
                    <?php $the_query = new WP_Query('posts_per_page=6'); ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="post-item">
                            <div class="post-content">
                                <span><?php the_title(); ?></span>
                                <span><a href="<?php the_permalink(); ?>">read more</a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</aside>