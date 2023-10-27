<?php
function load_images()
{
    $images = glob("images/*.webp");

    print '<div class="gallery">';

    foreach ($images as $image) {
        print '<figure class="gallery-item"><img src="' . $image . '" loading="lazy" alt="image loading"/></figure>';
    }

    print '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>imagegallery.tmp</title>

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
    </head>
    <body>
        <div class="wrapper">
            <h1>ImageGallery with FlexBox</h1>
            <?php load_images(); ?>
        </div>
    </body>
</html>