<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="author" content="AUTHOR" />
  <meta name="description" content="DESCRIPTION" />
  <meta name="keywords" content="KEYWORD, KEYWORD" />

  <title><?php echo $lang['title']; ?></title>

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="TITLE" />
  <meta property="og:description" content="DESCRIPTION" />
  <meta property="og:image" content="1.200 x 630 pixels" />
  <meta property="og:site_name" content="SITENAME" />
  <meta property="og:url" content="URL" />

  <!-- Icons -->
  <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" />
  <link rel="apple-touch-icon" href="./img/touch.png" />

  <!-- Styles -->
  <link rel="stylesheet" href="./css/print.css" media="print" />
  <link rel="stylesheet" href="./css/reset.css" media="screen" />
  <link rel="stylesheet" href="./css/skeleton.css" media="screen" />
  <link rel="stylesheet" href="./css/style.css" media="screen" />

  <!-- Flags -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
</head>

<body>
  <div class="wrapper">
    <nav>
      <div class="row">
        <a href="<?php basename(__FILE__) ?>?lang=de">DE</a>
        <a href="<?php basename(__FILE__) ?>?lang=en">EN</a>
        <a href="<?php basename(__FILE__) ?>?lang=fr">FR</a>
        <a href="<?php basename(__FILE__) ?>?lang=ru">RU</a>
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