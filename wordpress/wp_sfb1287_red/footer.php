<footer>
    <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
        <div class="footer-link">
            <h3>internes:</h3>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-intern-menu', 'container_class' => 'my-intern-menu')); ?>
        </div>
        <div class="footer-link">
            <h3>Teilnehmende Institutionen:</h3>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-extern-menu', 'container_class' => 'my-extern-menu')); ?>
        </div>
        <div class="footer-link">
            <h3>Vorstand:</h3>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-websites-menu', 'container_class' => 'my-websites-menu')); ?>
        </div>
        <div class="footer-logo">
            <h3>koordiniert durch:</h3>
            <a target="_blank" href="https://www.uni-potsdam.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/potsdam.png" alt="Logo der UP" loading="lazy"></a>
        </div>
        <div class="footer-logo">
            <h3>gefördert durch:</h3>
            <a target="_blank" href="https://www.dfg.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/dfg.png" alt="Logo der DFG" loading="lazy"></a>
        </div>
        <div class="footer-logo">
            <h3>in Zusammenarbeit mit:</h3>
            <a target="_blank" href="https://www.ruhr-uni-bochum.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/bochum.png" alt="Logo der RUB" loading="lazy"></a>
        </div>
    <?php endif; ?>

    <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
        <div class="footer-link">
            <h3>internal:</h3>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-intern-menu', 'container_class' => 'my-intern-menu')); ?>
        </div>
        <div class="footer-link">
            <h3>participating institutions:</h3>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-extern-menu', 'container_class' => 'my-extern-menu')); ?>
        </div>
        <div class="footer-link">
            <h3>executive board:</h3>
            <!-- Custom-Navigation () from functions.php (WITH container_id OR container_class) -->
            <?php wp_nav_menu(array('theme_location' => 'my-websites-menu', 'container_class' => 'my-websites-menu')); ?>
        </div>
        <div class="footer-logo">
            <h3>coordinated by:</h3>
            <a target="_blank" href="https://www.uni-potsdam.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/potsdam.png" alt="Logo of the UP" loading="lazy"></a>
        </div>
        <div class="footer-logo">
            <h3>funded by:</h3>
            <a target="_blank" href="https://www.dfg.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/dfg.png" alt="Logo of the DFG" loading="lazy"></a>
        </div>
        <div class="footer-logo">
            <h3>in cooperation with:</h3>
            <a target="_blank" href="https://www.ruhr-uni-bochum.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/bochum.png" alt="Logo of the RUB" loading="lazy"></a>
        </div>
    <?php endif; ?>
</footer>
