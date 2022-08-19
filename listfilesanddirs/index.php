<?php

function list_all()
{
    $dir    = './';
    $files = array_diff(scandir($dir), array('.', '..'));

    foreach ($files as $file) {
        if (is_dir($file)) {
            print "<a href='/$file/'>$file</a>";
            print "<br>";
        }
        if (is_file($file)) {
            print "<a href='/$file/'>$file</a>";
            print "<br>";
        }
    }
}

function list_dir()
{
    $dir = "./";
    $files = array_diff(scandir($dir), array('.', '..'));

    print "<div class='folder-container'>";

    foreach ($files as $file) {
        if (is_dir($file)) {

            print "            
                <a class='folders' href='/$file/'>
                <i class='gg-folder'></i>
                <span>$file</span>
                </a>";
        }
    }

    print "</div>";
}

function list_file()
{
    $dir = "./";
    $files = array_diff(scandir($dir), array('.', '..'));

    print "<div class='file-container'>";

    foreach ($files as $file) {
        if (is_file($file)) {

            print "            
                <a class='files' href='/$file/'>
                <i class='gg-file'></i>
                <span>$file</span>
                </a>";
        }
    }

    print "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LIST DIECTORY</title>

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

    <!-- JSDelivr -->
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
</head>

<body>
    <header>
        <h1>Directory Index</h1>
    </header>

    <main>

        <?php
        
        try {
            list_dir();
            list_file();
        } catch (Error $e) {
            print "An error occurd!";
            print "<br>";
            print $e->getMessage();
        }

        ?>

    </main>
</body>

</html>