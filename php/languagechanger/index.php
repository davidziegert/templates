<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $lang['title']; ?></title>

    <meta name="author" content="AUTHOR">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORD, KEYWORD">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>

    <div id="wrapper">
        <header>

        </header>

        <nav>
            <a href="<?php basename(__FILE__) ?>?lang=de">DE</a>
            <a href="<?php basename(__FILE__) ?>?lang=en">EN</a>
            <a href="<?php basename(__FILE__) ?>?lang=fr">FR</a>
            <a href="<?php basename(__FILE__) ?>?lang=ru">RU</a>
        </nav>

        <main>
            <article>
                <h1><?php echo $lang['h1']; ?></h1>
                <section>
                    <p>
                        <?php echo $lang['text']; ?>
                        <?php echo ": "; ?>
                        <?php echo $_SESSION['lang']; ?>
                    </p>
                </section>
            </article>
        </main>

        <aside>

        </aside>

        <footer>

        </footer>
    </div>
</body>

</html>