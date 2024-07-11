<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="<?php insert_author(); ?>">
    <meta name="description" content="<?php insert_meta_description(); ?>">
    <meta name="keywords" content="Universität Potsdam, Linguistik, Sonderforschungsbereich, Variabilität, Sprache, Projekte, Modelle, Daten, University of Potsdam, Linguistics, Collaborative Research Center, Variability, Language, Projects, Models, Data">

    <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
        <title>Suche | <?php bloginfo('name'); ?></title>
    <?php endif; ?>
    <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
        <title>Search | <?php bloginfo('name'); ?></title>
    <?php endif; ?>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="<?php insert_meta_description(); ?>">
    <meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/og_image.jpg">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo home_url(); ?>">

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/print.css" media="print">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skeleton.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" media="screen">

    <!-- ForkAwesome -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/fork-awesome.min.css">

    <!-- Academicons -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/academicons.min.css">

    <!-- jQuery -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.7.1.min.js"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body onload="getTheme()">
    <div class="wrapper">
        <?php include 'header.php'; ?>

        <div class="inner-wrapper">
            <?php include 'nav.php'; ?>

            <main>
                <section>
                    <div class="row search-wrapper">
                        <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                            <h1>Suche</h1>
                            <div class="search-query">
                                <!-- Print Search-Term -->
                                <p>Suchergebnisse für: <strong><?php echo $s ?></strong></p>
                            </div>
                            <?php if (have_posts()) : ?>
                                <!-- If have search match -->
                                <div class="search-results">
                                    <!-- Loop prints all Sites and Post including the Search-Term -->
                                    <?php $i = 1;
                                    while (have_posts()) : the_post(); ?>

                                        <details>
                                            <!-- Title of Site or Post -->
                                            <summary><?php the_title(); ?></summary>
                                            <!-- Trimmed (20) Content of Post with Link -->
                                            <p><?php echo wp_trim_words(get_the_content(), 20); ?> | <a href="<?php the_permalink(); ?>">weiterlesen</a></p>
                                        </details>

                                    <?php $i++;
                                    endwhile; ?>
                                </div>
                            <?php else : ?>
                                <div class="search-fail">
                                    <!-- If no match found -->
                                    <p>Es tut uns leid, es wurde nichts gefunden, das Ihren Suchkriterien entspricht!</p>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                            <h1>Search</h1>
                            <div class="search-query">
                                <!-- Print Search-Term -->
                                <p>Search results for: <strong><?php echo $s ?></strong></p>
                            </div>
                            <?php if (have_posts()) : ?>
                                <!-- If have search match -->
                                <div class="search-results">
                                    <!-- Loop prints all Sites and Post including the Search-Term -->
                                    <?php $i = 1;
                                    while (have_posts()) : the_post(); ?>

                                        <details>
                                            <!-- Title of Site or Post -->
                                            <summary><?php the_title(); ?></summary>
                                            <!-- Trimmed (20) Content of Post with Link -->
                                            <p><?php echo wp_trim_words(get_the_content(), 20); ?> | <a href="<?php the_permalink(); ?>">read more</a></p>
                                        </details>

                                    <?php $i++;
                                    endwhile; ?>
                                </div>
                            <?php else : ?>
                                <div class="search-fail">
                                    <!-- If no match found -->
                                    <p>Sorry, nothing found matching your search criteria!</p>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </section>
            </main>

            <?php include 'sidebar.php'; ?>
        </div>

        <?php include 'contact.php'; ?>
        <?php include 'footer.php'; ?>
    </div>







    <!-- Scripts -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/menu.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/theme.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/indicator.js"></script>

    <!-- WordPress-Specific-Elements -->
    <?php wp_footer(); ?>
</body>

</html>