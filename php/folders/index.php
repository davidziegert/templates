<?php

function ListDirectories()
{
    // show only subdirectories
    $dirs = array_filter(glob('*'), 'is_dir');

    echo "<h1>Directory Listing</h1>";

    echo "<ul class='dir-box'>";

    foreach ($dirs as $dir) {
        echo "<li><a href='$dir'><img src='https://www.svgrepo.com/download/525890/folder-2.svg' loading='lazy' /><span>$dir</span></a></li>";
    }

    echo "</ul>";
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

    <!-- Title Tag -->
    <title>folders.tmp</title>

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
</head>

<body>
    <div class="wrapper">
        <main>
            <div class="row">
                <?php ListDirectories() ?>
            </div>
        </main>
    </div>
</body>

</html>