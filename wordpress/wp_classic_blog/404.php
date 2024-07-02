<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="AUTHOR">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORD, KEYWORD">

    <title>404 | <?php bloginfo('name'); ?></title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="TITLE">
    <meta property="og:description" content="DESCRIPTION">
    <meta property="og:image" content="1.200 x 630 pixels">
    <meta property="og:site_name" content="SITENAME">
    <meta property="og:url" content="URL">

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo get_bloginfo( 'template_directory' );?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_bloginfo( 'template_directory' );?>/img/logo.png" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/print.css" media="print">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/reset.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/skeleton.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/style.css" media="screen">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <div class="error">
            <h1>404 - Error</h1>
            <p>Sorry, but we can't find the page you are looking for.</p>
            <a href="<?php echo home_url(); ?>" rel="nofollow">Go Back</a>
        </div>
    </div>

    <!-- WordPress-Specific-Elements -->
    <?php wp_footer(); ?>
</body>

</html>