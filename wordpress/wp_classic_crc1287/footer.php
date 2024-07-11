<footer>
    <section>
        <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
            <div class="row">
                <h4>Intern:</h4>
                <?php wp_nav_menu(array('theme_location' => 'my-intern-menu', 'container_class' => 'intern-menu')); ?>
            </div>
            <div class="row">
                <h4>Vorstand:</h4>
                <?php wp_nav_menu(array('theme_location' => 'my-websites-menu', 'container_class' => 'websites-menu')); ?>
            </div>
            <div class="row">
                <h4>Teilnehmende Institutionen:</h4>
                <?php wp_nav_menu(array('theme_location' => 'my-extern-menu', 'container_class' => 'extern-menu')); ?>
            </div>
            <div class="row">
                <h4>koordiniert durch:</h4>
                <a target="_blank" title="zur Homepage der Universität Potsdam" href="https://www.uni-potsdam.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/potsdam.png" alt="Logo UP" loading="lazy"></a>
            </div>
            <div class="row">
                <h4>gefördert durch:</h4>
                <a target="_blank" title="zur Homepage der Deutsche Forschungsgemeinschaft e.V." href="https://www.dfg.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/dfg.png" alt="Logo DFG" loading="lazy"></a>
            </div>
            <div class="row">
                <h4>in Zusammenarbeit mit:</h4>
                <a target="_blank" title="zur Homepage Ruhr-Universität Bochum" href="https://www.ruhr-uni-bochum.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/bochum.png" alt="Logo RUB" loading="lazy"></a>
            </div>
        <?php endif; ?>
        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <div class="row">
                <h4>internal:</h4>
                <?php wp_nav_menu(array('theme_location' => 'my-intern-menu', 'container_class' => 'intern-menu')); ?>
            </div>
            <div class="row">
                <h4>executive board:</h4>
                <?php wp_nav_menu(array('theme_location' => 'my-websites-menu', 'container_class' => 'websites-menu')); ?>
            </div>
            <div class="row">
                <h4>participating institutions:</h4>
                <?php wp_nav_menu(array('theme_location' => 'my-extern-menu', 'container_class' => 'extern-menu')); ?>
            </div>
            <div class="row">
                <h4>coordinated by:</h4>
                <a target="_blank" title="to the homepage of the University of Potsdam" href="https://www.uni-potsdam.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/potsdam.png" alt="Logo UP" loading="lazy"></a>
            </div>
            <div class="row">
                <h4>funded by:</h4>
                <a target="_blank" title="to the homepage of the German Research Foundation e.V." href="https://www.dfg.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/dfg.png" alt="Logo DFG" loading="lazy"></a>
            </div>
            <div class="row">
                <h4>in cooperation with:</h4>
                <a target="_blank" title="to the homepage of the Ruhr University Bochum" href="https://www.ruhr-uni-bochum.de/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/bochum.png" alt="Logo RUB" loading="lazy"></a>
            </div>
        <?php endif; ?>
    </section>
</footer>