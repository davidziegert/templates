<header>
    <section>
        <div class="row">
            <a href="<?php echo home_url(); ?>"><img class="header-logo"
                    src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" loading="lazy"></a>
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
</header>