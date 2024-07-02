<footer>
    <section>
        <div class="footer-tag">
            <h3>Categories</h3>
            <ul>
                <!-- Categories -->
                <?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
            </ul>
        </div>
        <div class="footer-tag">
            <h3>Archive</h3>
            <ul>
                <!-- Archive -->
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
        <div class="footer-tag">
            <h3>Sites</h3>
            <ul>
                <!-- Sites -->
                <?php wp_list_pages('title_li=' . __('')); ?>
            </ul>
        </div>
        <div class="footer-tag">
            <h3>Links</h3>
            <ul>
                <li>
                    <!-- Link to Random Page -->
                    <?php get_randomsite(); ?>
                </li>
            </ul>
        </div>
    </section>
</footer>