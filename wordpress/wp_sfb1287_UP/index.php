<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="robots" content="index, follow">

    <!-- Site specific elements -->
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

    <meta name="description" content="<?php add_custom_meta_description(); ?>">
    <meta name="keywords" content="Universität Potsdam, Linguistik, Sonderforschungsbereich, Variabilität, Sprache, Projekte, Modelle, Daten, University of Potsdam, Linguistics, Collaborative Research Center, Variability, Language, Projects, Models, Data">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="<?php add_custom_meta_description(); ?>">
    <meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/img/og_image.jpg">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
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

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>

    <!-- Nav -->
    <?php include 'nav.php'; ?>

    <!-- Head -->
    <?php include 'header.php'; ?>

    <!-- Main -->
    <?php include 'main.php'; ?>

    <!-- Aside -->
    <?php include 'sidebar.php'; ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <?php wp_footer(); ?>

    <script>
        function toggleMobileMenu() {

            if (window.matchMedia("(max-width: 1199px)").matches) {
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

    <!-- dataTables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bookTable').DataTable({
                "pageLength": 25,
                "order": [
                    [2, "desc"],
                    [0, "asc"],
                ]
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#contactTable').DataTable({
                "pageLength": 100
            });
        });
    </script>

</body>

</html>