<header>
    <div id="header-menu">
        <div id="header-hamburger">
            <button id="hamburger" onclick="toggleMobileMenu()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div id="header-language">
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-lang-menu', 'container_class' => 'my-lang-menu')); ?>
        </div>
    </div>
    <div id="header-title">
        <!-- Website-Name -->
        <!-- Website-Description -->
        <a href="<?php echo home_url(); ?>"><strong><?php bloginfo('name'); ?> - </strong><?php bloginfo('description'); ?></a>
    </div>
</header>