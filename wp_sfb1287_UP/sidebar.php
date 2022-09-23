<aside>
	<!-- Show 6 Post per Page -->
	<?php $the_query = new WP_Query('posts_per_page=6'); ?>
	<?php if ($the_query->have_posts()) : ?>
		<h2>News</h2>
		<div id="blog">
			<!-- Loop through every Post -->
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="post">
					<!-- Post-Title -->
					<h3 class="post-title"><?php the_title(); ?></h3>
					<span class="post-body">
						<!-- Post-Content (20 words with link) -->
						<span class="post-trimmed"><?php echo wp_trim_words(get_the_content(), 20); ?></span>
						<?php if (ICL_LANGUAGE_CODE == 'de') : ?>
							<span class="post-link"><a href="<?php the_permalink(); ?>">weiterlesen</a></span>
						<?php endif; ?>
						<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
							<span class="post-link"><a href="<?php the_permalink(); ?>">read more</a></span>
						<?php endif; ?>
					</span>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>
	<?php endif; ?>
</aside>