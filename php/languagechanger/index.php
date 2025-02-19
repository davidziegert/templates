<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Title Tag -->
    <title>languages.tmp</title>

    <!-- Site Meta Tags -->
    <meta name="author" content="AUTHOR" />
    <meta name="description" content="DESCRIPTION" />
    <meta name="keywords" content="KEYWORD, KEYWORD" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="TITLE" />
    <meta property="og:description" content="DESCRIPTION" />
    <meta property="og:image" content="1.200 x 630 pixels" />
    <meta property="og:site_name" content="SITENAME" />
    <meta property="og:url" content="URL" />

    <!-- Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/icon.svg" />
    <link rel="apple-touch-icon" href="./assets/images/icon.svg" />

    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/print.css" media="print" />
    <link rel="stylesheet" href="./assets/css/reset.css" media="screen" />
    <link rel="stylesheet" href="./assets/css/skeleton.css" media="screen" />
    <link rel="stylesheet" href="./assets/css/style.css" media="screen" />
    <link rel="stylesheet" href="./assets/css/theme.css" media="screen" />

    <!-- Flags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
</head>

<body>
    <div class="wrapper">
        <nav id="nav">
            <menu class="main-menu">
                <li class="menu-item"><a href="<?php basename(__FILE__) ?>?lang=de">DE</a></li>
                <li class="menu-item"><a href="<?php basename(__FILE__) ?>?lang=en">EN</a></li>
                <li class="menu-item"><a href="<?php basename(__FILE__) ?>?lang=fr">FR</a></li>
                <li class="menu-item"><a href="<?php basename(__FILE__) ?>?lang=ru">RU</a></li>
            </menu>
        </nav>
        <main>
            <div class="row">
                <h1><?php echo $lang["h1"]; ?></h1>
                <p>
                    <?php echo $lang["text"]; ?>
                    <?php echo ": "; ?>
                    <?php echo $_SESSION["lang"]; ?>
                    <?php echo " - "; ?>
                    <?php echo $lang["icon"]; ?>
                </p>
            </div>
        </main>
    </div>
</body>

</html>