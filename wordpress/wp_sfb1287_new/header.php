<header>
    <div id="header-hamburger">
        <button id="hamburger" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
            <span id="header-info">Menü</span>
        <?php endif; ?>        
        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <span id="header-info">Menu</span>
        <?php endif; ?>
    </div>
    <div id="header-title">
        <!-- Website-Name -->
        <!-- Website-Description -->
        <a href="<?php echo home_url(); ?>"><strong><?php bloginfo('name'); ?> - </strong><?php bloginfo('description'); ?></a>
    </div>
    <div id="header-tools">
        <div id="header-language">
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-lang-menu', 'container_class' => 'my-lang-menu')); ?>
        </div>
        <div id="header-search">
            <!-- Includes searchform.php -->
            <?php get_search_form(); ?>
        </div>
    </div>
</header>