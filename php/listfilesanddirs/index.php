<?php

function list_dir()
{
    $dir = "./";
    $folders = array_diff(scandir($dir), array('.', '..'));

    print '<div class="folder-container">';

        foreach ($folders as $folder) 
        {
            if (is_dir($folder)) 
            {
                print '<a class="folders" href="'.$folder.'">	<i class="fa fa-folder" aria-hidden="true"></i><span>'.$folder.'</span></a> ';
            }
        }

    print '</div>';
}

function list_file()
{
    $dir = "./";
    $files = array_diff(scandir($dir), array('.', '..'));

    print '<div class="file-container">';

        foreach ($files as $file) 
        {
            if (is_file($file))
            {
                print '<a class="files" href="'.$file.'"><i class="fa fa-file" aria-hidden="true"></i><span>'.$file.'</span></a>';
            }
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

    <title>listfilesanddirs.tmp</title>

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
    <link rel="apple-touch-icon" href="./img/touch.png" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <h1>Folders</h1>
        <?php
            try 
            {
                list_dir();
            } 
            catch (Error $e) 
            {
                print '<div class="alert failed">An error occurd: ' . $e->getMessage() . '</div>';
            }
        ?>
    </div>
    <div class="row">
        <h1>Files</h1>
        <?php
            try 
            {
                list_file();
            } 
            catch (Error $e) 
            {
                print '<div class="alert failed">An error occurd: ' . $e->getMessage() . '</div>';
            }
        ?>
    </div>
</body>

</html>