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

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <!-- Wordpress specific elements -->
    <?php wp_head(); ?>
</head>

<body>

    <!-- Nav -->
    <?php include 'nav.php'; ?>

    <!-- Head -->
    <?php include 'header.php'; ?>

    <!-- Aside -->
    <?php include 'sidebar.php'; ?>

    <!-- Main -->
    <main>
        <article>
            <?php if (ICL_LANGUAGE_CODE == 'de') : ?>
                <h1>SFB 1287</h1>
                <h2>Die Grenzen der Variabilität in der Sprache: Kognitive, komputationale und grammatische Aspekte</h2>
                <div id="col-div">
                    <figure>
                        <img class="col-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.jpg" alt="Logo des SFB 1287" loading="lazy">
                    </figure>
                    <div>
                        <p>Die Sprachfähigkeit als Teil des kognitiven Systems eines Individuums muss flexible und effektive Mechanismen bereithalten, die eine erfolgreiche Kommunikation mit verschiedenen Gesprächspartnern und in unterschiedlichsten Kontexten ermöglicht. Um dies zu gewährleisten, muss das Sprachsystem ein hohes Maß an Variabilität zulassen. Der SFB definiert diese Variabilität als einen Raum von sprachlichen Möglichkeiten, die einem Individuum, einer Gruppe von Sprachnutzern oder auch bestimmten Sprachen zur Verfügung stehen. Dennoch ist diese Variabilität, die sich auf allen linguistischen Beschreibungsebenen findet, nicht unendlich, sondern durch die Eigenschaften des zugrunde liegenden linguistischen Systems selbst, durch kognitive Faktoren und sozial-kommunikative Konventionen begrenzt.</p>
                        <p>Grenzen der Variabilität sind erkennbar, wenn bestimmte linguistische Verhaltensweisen relativ konsistent auftreten, sie also resistent gegenüber kognitiven Einflussfaktoren oder sich verändernden sozialen Situationen oder Konventionen sind, bzw. wenn sie innerhalb und über Sprachen, Gruppen und Individuen hinweg beobachtet werden können. Die Identifikation der Grenzen der Variabilität ermöglicht es uns, Erkenntnisse über den Aufbau des zugrundenliegenden Sprachsystems zu erlangen. Wir konnten zeigen, dass die Variabilität in der Sprache kein zufälliges “Rauschen”, sondern eine bedeutsame Informationsquelle zur Erklärung und Vorhersage sprachlichen Verhaltens darstellt. Oft scheint Variabilität sogar eine notwendige Voraussetzung für den Aufbau abstrakter mentaler Repräsentationen zu sein.</p>
                        <p>Gleichzeitig finden wir Instanzen “versteckter Variabilität”, das sind gleiche linguistische Eigenschaften an der Oberfläche verschiedener Sprachen, welche jedoch in den einzelnen Sprachen auf unterschiedliche Ursachen zurückzuführen sind. Die Projekte im SFB erforschen die Grenzen, Beziehungen, Abhängigkeiten und Gemeinsamkeiten der verschiedenen Arten von Variabilität über eine Reihe linguistischer Phänomene und über verschiedenen Sprachen hinweg, um das Sprachsystem als Teil des ressourcenbegrenzten kognitiven Systems und als flexibles Werkzeug für Interaktion und Kommunikation besser zu verstehen. Komputationale und neuronale Modelle liefern systematische theoretische Erklärungen für Variabilität und ihre Grenzen. Durch die Modellierung der Faktoren, die sprachliche Entscheidungen über verschiedene linguistische Phänomene und über Sprachen hinweg beeinflussen, trägt der SFB zu einem besseren Verständnis der grammatischen Optionen einer Sprache sowie der zugrundeliegenden grammatischen Repräsentationen innerhalb von Individuen bei. Dies geht einher mit der Weiterentwicklung linguistischer und psycho-/neurolinguistischer Theorien sowie komputationaler und neuronaler Netzwerkmodelle des linguistischen Systems.</p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <h1>CRC 1287</h1>
                <h2>Limits of Variability in Language: Cognitive, Computational, and Grammatical Aspects</h2>
                <div id="col-div">
                    <figure>
                        <img class="col-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.jpg" alt="Logo of the CRC 1287" loading="lazy">
                    </figure>
                    <div>
                        <p>The language faculty forms part of the cognitive system, and as such the use of language is constrained by cognitive limitations of the individual language user. At the same time, language is a tool for social interaction and communication, and as such must provide flexible but efficient mechanisms which enable the language users to achieve communicative success with a variety of interlocutors. The way people use language therefore exhibits a high degree of variability at all levels of linguistic description. At the same time, some linguistic features seem to be more stable, or robust, than others. By exploring the systematicity and the limits of variability in linguistic behaviours, the main focus of the CRC will lie on identifying the constraints of the underlying linguistic system. The CRC characterises variability in language as the range of different possible linguistic behaviours that are available to a language user, a language community, or in specific languages at any linguistic level.</p>
                        <p>The limits of variability in linguistic behaviour become evident when a linguistic behaviour is relatively consistent, that is, resistant to influences of cognitive factors, social situations, conventions, and change, and/or when it shows relative consistency across and within languages, language communities, and individuals. We have shown that variability is not just reducible to random noise but provides an important source of information to explain and predict linguistic behaviour. Furthermore, we have found that variability in the input can be a necessary precondition for the establishment of abstract mental representations. </p>
                        <p>At the same time, we have found instances of “hidden variability”, that is, consistency at the surface that arises from different sources in different languages. By modelling the factors influencing linguistic behaviours, projects in the CRC are contributing to a better understanding of the underlying mental representations and processing architectures in individual language users, as well as of the grammatical options available in languages and in specific varieties of languages, and options shared by particular subgroups of languages users. The application of neuro-computational models provides systematic theoretical explanations for variability and consistency in the linguistic behaviour of human language users, also from machine learning perspectives. We are working jointly on several linguistic phenomena, from various perspectives, in a broad range of populations, and in different language families, to uncover the dual nature of language as part of the constrained cognitive system and as a flexible tool for interaction and communication to advance linguistic, psycho-/neurolinguistic, as well as computational and neural network models of the linguistic system at large.</p>
                    </div>
                </div>
            <?php endif; ?>
        </article>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <?php wp_footer(); ?>

    <script>
        function toggleMobileMenu() {

            if (window.matchMedia("(max-width: 1279px)").matches) {
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

</body>

</html>