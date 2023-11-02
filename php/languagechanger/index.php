<?php include "config.php";?>

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
        <meta name="robots" content="noindex, nofollow">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
        <link rel="apple-touch-icon" href="./img/touch.png" />

        <!-- Flags -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">        
    </head>
    <body>
        <div class="wrapper">
            <nav>
                <div class="row">
                    <a href="<?php basename(__FILE__)?>?lang=de">DE</a>
                    <a href="<?php basename(__FILE__)?>?lang=en">EN</a>
                    <a href="<?php basename(__FILE__)?>?lang=fr">FR</a>
                    <a href="<?php basename(__FILE__)?>?lang=ru">RU</a>
                </div>
            </nav>
            <main>
                <div class="row">
                    <h1><?php echo $lang['h1']; ?></h1>
                    <p>
                        <?php echo $lang['text']; ?>
                        <?php echo ": "; ?>
                        <?php echo $_SESSION['lang']; ?>
                        <?php echo " - "; ?>
                        <?php echo $lang['icon']; ?>                       
                    </p>
            </main>
        </div>
    </body>
</html>