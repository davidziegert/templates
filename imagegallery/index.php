<?php

function load_imagefolder()
{

    $images = glob("images/*.jpeg");

    print '<div class="container">';

    foreach ($images as $image) {
        print '<a class="lightbox" href="' . $image . '" target="_blank"><img title="tooltip" src="' . $image . '" /></a>';
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

    <title>Image Gallery</title>

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
    <main>
        <?php load_imagefolder(); ?>
    </main>
</body>

</html>