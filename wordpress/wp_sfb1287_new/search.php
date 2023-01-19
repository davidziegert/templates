<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="robots" content="noindex, nofollow">

    <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
        <!-- Site specific elements -->
        <title>Suche | <?php bloginfo('name'); ?></title>
    <?php endif; ?>

    <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
        <!-- Site specific elements -->
        <title>Search | <?php bloginfo('name'); ?></title>
    <?php endif; ?>

    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>

    <!-- Nav -->
    <?php include 'nav.php'; ?>

    <!-- Head -->
    <?php include 'header.php'; ?>

    <!-- Aside -->
    <?php include 'sidebar.php'; ?>

    <!-- Main -->
    <main>
        <article>
            <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                <h1>Suche</h1>
                <h2>Suchergebnisse für: <strong><?php echo $s ?></strong></h2>
                <?php if (have_posts()) : ?>
                    <!-- Loop prints all Sites and Post including the Search-Term -->
                    <?php $i = 1;
                    while (have_posts()) : the_post(); ?>
                        <details open="">
                            <summary><?php the_title(); ?></summary>
                            <p><?php echo wp_trim_words(get_the_content(), 20); ?> <a href="<?php the_permalink(); ?>">weiterlesen</a></p>
                        </details>
                    <?php $i++;
                    endwhile; ?>
                <?php else : ?>
                    <p>Leider nichts gefunden!</p>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <h1>Search</h1>
                <h2>Search results for: <?php echo $s ?></h2>
                <?php if (have_posts()) : ?>
                    <!-- Loop prints all Sites and Post including the Search-Term -->
                    <?php $i = 1;
                    while (have_posts()) : the_post(); ?>
                        <details open="">
                            <summary><?php the_title(); ?></summary>
                            <p><?php echo wp_trim_words(get_the_content(), 20); ?> <a href="<?php the_permalink(); ?>">read more</a></p>
                        </details>
                    <?php $i++;
                    endwhile; ?>
                <?php else : ?>
                    <p>No results found!</p>
                <?php endif; ?>
            <?php endif; ?>
        </article>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <?php wp_footer(); ?>

    <script>
        function toggleMobileMenu() {

            if (window.matchMedia("(max-width: 1279px)").matches) {
                const hamburger = document.getElementById("hamburger");
                const mobile = document.getElementById("menu");
                hamburger.classList.toggle('open');
                mobile.classList.toggle('menu-open');
            }

        }
    </script>

    <script>
        let list = document.querySelectorAll('.menu-item-has-children');

        function accordion(e) {
            e.stopPropagation();
            if (this.classList.contains('active')) {
                this.classList.remove('active');
            } else
            if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            } else {
                for (i = 0; i < list.length; i++) {
                    list[i].classList.remove('active');

                }
                this.classList.add('active');
            }
        }
        for (i = 0; i < list.length; i++) {
            list[i].addEventListener('click', accordion);
        }
    </script>

    <script>
        let crawler = document.querySelector(".current_page_item")
        crawler.parentNode.parentNode.classList.add('active');
        crawler.parentNode.parentNode.parentNode.parentNode.classList.add('active');
    </script>

</body>

</html>