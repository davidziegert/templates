<main>
    <section>
        <div class="row">
            <!-- Searchform -->
            <?php get_search_form(); ?>
        </div>
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
</main>