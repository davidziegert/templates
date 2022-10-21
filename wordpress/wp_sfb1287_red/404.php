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
    <title>404 | <?php bloginfo('name'); ?></title>

    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Arvo&family=Palanquin&family=Roboto&display=swap">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>

    <div id="not-found">
        <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
            <figure>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/404.png" alt="image loading" loading="lazy">
                <figcaption><a target="_blank" rel="noopener noreferrer" href="https://www.vecteezy.com/vector-art/5238434-internet-network-warning-404-error-page-or-file-not-found-for-web-page">Vectors by Vecteezy</a></figcaption>
            </figure>
            <h1>Seite nicht gefunden</h1>
            <p>Entschuldigung, aber die gesuchte Seite existiert nicht! Wurde entfernt, Name geändert oder ist vorübergehend nicht verfügbar.</p>
            <p><a href="<?php echo home_url(); ?>">Zurück zur Startseite!</a></p>
        <?php endif; ?>

        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <figure>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/404.png" loading="lazy">
                <figcaption><a target="_blank" rel="noopener noreferrer" href="https://www.vecteezy.com/vector-art/5238434-internet-network-warning-404-error-page-or-file-not-found-for-web-page">Vectors by Vecteezy</a></figcaption>
            </figure>
            <h1>Page not found</h1>
            <p>Sorry but the page you are looking for does not exist! Have been removed, name changed or is temporarily unavailable.</p>
            <p><a href="<?php echo home_url(); ?>">Back to homepage!</a></p>
        <?php endif; ?>
    </div>

</body>

</html>