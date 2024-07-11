<header>
    <div class="indicator-bar" id="indicator-bar"></div>
    <section>
        <div class="row">
            <a href="<?php echo home_url(); ?>"><img class="header-logo" id="header-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo_small_light.png" loading="lazy"></a>
            <button class="header-hamburger" id="header-hamburger" onclick="toggleMobileMenu()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="row">
            <a href="<?php echo home_url(); ?>">
                <span class="header-title"><?php bloginfo('name'); ?></span>
                <span class="header-description"><?php bloginfo('description'); ?></span>
            </a>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="header-languages">
                <i class="fa fa-globe fa-lg" aria-hidden="true"></i>
                <?php wp_nav_menu(array('theme_location' => 'my-lang-menu', 'container_class' => 'lang-menu')); ?>
            </div>
            <?php get_search_form(); ?>
        </div>
    </section>
</header>