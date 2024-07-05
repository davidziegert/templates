<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="<?php insert_author(); ?>">
    <meta name="description" content="<?php insert_meta_description(); ?>">
    <meta name="keywords" content="">

    <title>Latest Posts | <?php bloginfo('name'); ?></title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="<?php insert_meta_description(); ?>">
    <meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/og_image.jpg">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo home_url(); ?>">

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/print.css" media="print">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skeleton.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" media="screen">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <?php include 'header.php'; ?>

        <!-- Nav -->
        <?php include 'nav.php'; ?>

        <!-- Main -->
        <?php include 'main.php'; ?>

        <!-- Footer -->
        <?php include 'footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/script.js"></script>

    <!-- WordPress-Specific-Elements -->
    <?php wp_footer(); ?>
</body>

</html>