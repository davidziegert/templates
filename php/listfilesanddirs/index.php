<?php

function list_dir()
{
    $dir = "./";
    $folders = array_diff(scandir($dir), array('.', '..'));

    print "<div class='folder-container'>";

    foreach ($folders as $folder) {
        if (is_dir($folder)) {

            print "            
                <a class='folders' href='$dir$folder/'>
                    <i class='gg-folder'></i>
                    <span>$folder</span>
                </a>
            ";
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
                <a class='files' href='$dir$file'>
                    <i class='gg-file'></i>
                    <span>$file</span>
                </a>
            ";
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

    <title>list_files_and_dirs.tmp</title>

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
    <div id="wrapper">
        <header>

        </header>

        <nav>

        </nav>

        <main>
            <h1>Directory:</h1>

            <article>
                <section>
                    <?php
                        try {
                            list_dir();
                            list_file();
                        } 
                        catch (Error $e) {
                            print "An error occurd!";
                            print $e->getMessage();
                        }
                    ?>
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