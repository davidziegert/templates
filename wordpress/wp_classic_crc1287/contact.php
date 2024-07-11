<div class="contact">
    <section>
        <div class="row">
            <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                <h4>Kontakt:</h4>
                <address>
                    <span>Universität Potsdam</span>
                    <span>Department Linguistik</span>
                    <span>Prof. Dr. Doreen Georgi</span>
                    <span>Karl-Liebknecht-Strasse 24-25</span>
                    <span>Haus 14, Raum 3.33</span>
                    <span>14476 Potsdam</span>
                    <br>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> (+49) 331 977-2968</span>
                    <span><i class="fa fa-envelope" aria-hidden="true"></i> <a title="eine E-Mail senden" href="mailto:doreen.georgi@uni-potsdam.de">doreen.georgi@uni-potsdam.de</a></span>
                </address>
            <?php endif; ?>
            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <h4>Contact:</h4>
                <address>
                    <span>University of Potsdam</span>
                    <span>Department Linguistics</span>
                    <span>Prof. Dr. Doreen Georgi</span>
                    <span>Karl-Liebknecht-Strasse 24-25</span>
                    <span>House 14, Room 3.33</span>
                    <span>14476 Potsdam</span>
                    <br>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> (+49) 331 977-2968</span>
                    <span><i class="fa fa-envelope" aria-hidden="true"></i> <a title="send me an email" href="mailto:doreen.georgi@uni-potsdam.de">doreen.georgi@uni-potsdam.de</a></span>
                </address>
            <?php endif; ?>

        </div>
        <div class="row">
            <div class="map">
                <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=12.967901229858398%2C52.405554195286896%2C12.980293035507204%2C52.40958593024701&amp;layer=mapnik&amp;marker=52.407570108828764%2C12.9740971326828" frameborder="0" scrolling="no" scrollwheel="false" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
        <div class="row">
            <img class="contact-logo" id="contact-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo_big_light.png" alt="Logo SFB" loading="lazy">
        </div>
    </section>
</div>