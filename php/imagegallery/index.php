<?php
function load_Images()
{
  $images = glob("images/*.webp");

  print '<div class="gallery">';

  foreach ($images as $image) {
    print '<div class="item"><img src="' . $image . '" loading="lazy" alt="image loading"/></div>';
  }

  print '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

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

  <title>imagegallery.tmp</title>

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
</head>

<body>
  <div class="wrapper">
    <main>
      <h1>Image-Gallery</h1>
      <?php load_Images(); ?>
    </main>
  </div>
</body>

</html>