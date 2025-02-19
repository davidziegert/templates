<?php

function RssFeed($select)
{
    // XML
    libxml_use_internal_errors(true);
    $feed = simplexml_load_file($select);

    if (isset($feed) && !empty($feed)) {

        echo "<hr>";

        foreach ($feed->channel as $channel) {
            $title = $channel->title;
            $description = $channel->description;
            $link = $channel->link;
            $lastBuildDate = $channel->lastBuildDate;

            echo "<h2>" . $title . "</h2>";
            echo "<p><em>Last update: " . $lastBuildDate . "</em></p>";
        }

        echo "<hr>";

        echo "<div class='feed-box'>";

        foreach ($feed->channel->item as $item) {
            $title = $item->title;
            $description = $item->description;
            $link = $item->link;
            $pubDate = $item->pubDate;

            echo "<article>";
            echo "<h3><a href='" . $link . "' target='_blank'>" . $title . "</a></h3>";
            echo "<p><em>Author: Unknown | " . $pubDate . "</em></p>";
            echo "<p>" . $description . "</p>";
            echo "</article>";
        }

        echo "</div>";
    }
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
    <title>rddfeed.tmp</title>

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
                <h1>RSS-Feed</h1>
                <form enctype="multipart/form-data" method="POST" action="">
                    <fieldset>
                        <label>RSS-entry:</label>
                        <select id="select" name="select">
                            <option selected disabled>Choose entry ...</option>
                            <option value="http://rss.dw.com/xml/rss-de-top">DW: Themen des Tages</option>
                            <option value="http://rss.dw.com/xml/rss-de-wissenschaft">DW: Wissenschaft</option>
                            <option value="http://rss.dw.com/xml/rss-de-eco">DW: Wirtschaft</option>
                            <option value="http://rss.dw.com/xml/rss-de-cul">DW: Kultur</option>
                        </select>
                        <br>
                        <input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
                <?php if (isset($_POST["submit"])) {
                    RssFeed($_POST["select"]);
                } ?>
            </div>
        </main>
    </div>
</body>

</html>