<main>
	<div class="row">
		<article>
			<!-- If Content exists then post -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- Page-Title -->
					<h1><?php the_title(); ?></h1>
					<!-- Page-Content -->
					<?php the_content(); ?>
			<?php endwhile;
			endif; ?>
		</article>
	</div>
</main>