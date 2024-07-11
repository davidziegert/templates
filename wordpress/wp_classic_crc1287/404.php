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

    <title>404 | <?php bloginfo('name'); ?></title>

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

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="error">
        <div class="row">
            <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                <h1>404 - Seite wurde nicht gefunden!</h1>
                <p>Wenn Sie die richtige Adresse eingegeben haben, können Sie Folgendes tun:</p>
                <ul>
                    <li>Versuchen Sie es später erneut.</li>
                    <li>Überprüfen Sie Ihre Netzwerkverbindung.</li>
                    <li>Überprüfen Sie, ob Sie die Berechtigung haben, auf das Internet zuzugreifen (Sie sind möglicherweise
                        verbunden, aber hinter einer Firewall).</li>
                </ul>
                <a href="<?php echo home_url(); ?>" rel="nofollow">Zurück zur Startseite!</a>
            <?php endif; ?>

            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <h1>404 - Page was not found!</h1>
                <p>If you entered the correct address, you can do the following:</p>
                <ul>
                    <li>Try again later.</li>
                    <li>Check your network connection.</li>
                    <li>Check if you have permission to access the Internet (you may be connected but behind a firewall).
                    </li>
                </ul>
                <a href="<?php echo home_url(); ?>" rel="nofollow">Back to the home page!</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- WordPress-Specific-Elements -->
    <?php wp_footer(); ?>
</body>

</html>