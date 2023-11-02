<?php

function listFolders($dir)
{
    $folders = array_diff(scandir($dir), array('.', '..'));

    print '<ol class="folders">';

    foreach ($folders as $folder) {
        if (is_dir($folder)) {
            print '<li><i class="fa fa-folder-o" aria-hidden="true"></i><a href="' . $folder . '">' . $folder . '</a></li>';
        }
    }

    print '</ol>';
}

function listFiles($dir)
{
    $files = array_diff(scandir($dir), array('.', '..'));

    print '<ol class="files">';

    foreach ($files as $file) {
        if (is_file($file)) {
            print '<li><i class="fa fa-file-o" aria-hidden="true"></i><a href="' . $file . '">' . $file . '</a></li>';
        }
    }

    print '</ol>';
}

function listFoldersFiles($dir)
{
    $fileFolderList = scandir($dir);

    print '<ol class="folders-files">';

    foreach ($fileFolderList as $item) {
        if ($item != '.' && $item != '..') {
            if (!is_dir($dir . '/' . $item)) {
                print '<li><i class="fa fa-file-o" aria-hidden="true"></i><a href="' . ltrim($dir . '/' . $item, './') . '">' . $item . '</a></li>';
            } else {
                print '<li><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="' . ltrim($dir . '/' . $item, './') . '">' . $item . '</a></li>';
            }

            if (is_dir($dir . '/' . $item)) {
                listFoldersFiles($dir . '/' . $item);
            }
        }
    }

    print '</ol>';
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>listfilesanddirs.tmp</title>

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

        <!-- GoogleFonts -->   
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">

        <!-- ForkAwesome -->      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    </head>
    <body>
        <div class="wrapper">
            <div class="box-folders">
                <h1>Folders</h1>
                <?php listFolders("./"); ?>
            </div>
            <div class="box-files">
                <h1>Files</h1>
                <?php listFiles("./"); ?>
            </div>
            <div class="box-folders-files">
                <h1>Folders & Files</h1>
                <?php listFoldersFiles("./"); ?>
            </div>
        </div>
    </body>
</html>