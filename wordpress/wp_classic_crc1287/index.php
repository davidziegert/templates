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

    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

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

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/jquery.dataTables.css">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/datatables.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/absolute.min.js"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body onload="getTheme()">
    <div class="wrapper">
        <?php include 'header.php'; ?>

        <div class="inner-wrapper">
            <?php include 'nav.php'; ?>
            <?php include 'main.php'; ?>
            <?php include 'sidebar.php'; ?>
        </div>

        <?php include 'contact.php'; ?>
        <?php include 'footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/menu.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/theme.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/indicator.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/tables.js"></script>

    <!-- WordPress-Specific-Elements -->
    <?php wp_footer(); ?>
</body>

</html>