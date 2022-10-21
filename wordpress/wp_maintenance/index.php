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

    <!-- Site specific elements -->
    <title>
        <?php if (ICL_LANGUAGE_CODE == 'de') : ?>Wartungsarbeiten<?php endif; ?>
        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>Maintenance<?php endif; ?>
        | <?php bloginfo('name'); ?>
    </title>

    <meta name="description" content="SITEDESCRIPTION">
    <meta name="author" content="AUTHOR">
    <meta name="keywords" content="KEYWORDS">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="H1 TITLE">
    <meta property="og:description" content="SITEDESCRIPTION">
    <meta property="og:image" content="./img/og_image.jpg">
    <meta property="og:site_name" content="SITENAME">
    <meta property="og:url" content="https://www.sfb1287.uni-potsdam.de/">

    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Arvo&family=Palanquin&family=Roboto&display=swap">

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>

    <div id="maintenance">
        <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
            <figure>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/maintenance.png" alt="image loading" loading="lazy">
                <figcaption><a target="_blank" rel="noopener noreferrer" href="https://www.vecteezy.com/vector-art/3415730-under-construction-signboard-with-crane-and-hook">Vectors by Vecteezy</a></figcaption>
            </figure>
            <h1>Wartungsarbeiten</h1>
            <p>Wir überarbeiten unsere Webseite. In Kürze sind wir wieder für Sie da.</p>
        <?php endif; ?>

        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <figure>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/maintenance.png" loading="lazy">
                <figcaption><a target="_blank" rel="noopener noreferrer" href="https://www.vecteezy.com/vector-art/3415730-under-construction-signboard-with-crane-and-hook">Vectors by Vecteezy</a></figcaption>
            </figure>
            <h1>Maintenance</h1>
            <p>We are redesigning our website. We'll be back for you shortly.</p>
        <?php endif; ?>
    </div>

</body>

</html>



