<nav id="menu">
    <div id="menu-wrapper">
        <div id="menu-search">
            <!-- Includes searchform.php -->
            <?php get_search_form(); ?>
        </div>
        <div id="menu-bar">
            <div id="menu-title">
                <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                    <h2>Menü</h2>
                <?php endif; ?>
                <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                    <h2>Menu</h2>
                <?php endif; ?>
            </div>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-main-menu', 'container_class' => 'my-main-menu')); ?>
        </div>
    </div>
</nav>