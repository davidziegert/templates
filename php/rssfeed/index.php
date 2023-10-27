<?php
function printRSSFeed($SELECTED_URL)
{
    libxml_use_internal_errors(true);
    $URL = $SELECTED_URL;
    $FEED = simplexml_load_file($URL);

    if (!$FEED) {
        echo '<code class="warning">';
            echo '<strong>An error occured while connecting to the RSS-Feed:</strong>';
        echo '<br>';
        foreach (libxml_get_errors() as $ERROR) {
            echo $ERROR;
        }
        echo '</code>';
        libxml_clear_errors();
        exit;
    } else {
        foreach ($FEED->channel as $CHANNEL) {
            $TITLE = $CHANNEL->title;
            $DESCRIPTION = $CHANNEL->description;
            $LINK = $CHANNEL->link;
            $LASTBUILDDATE = $CHANNEL->lastBuildDate;

            echo '<div class="selected-channel">';
                echo '<h1>' . $TITLE . '</h1>';
                echo '<em>Last update: ' . $LASTBUILDDATE . '</em>';
            echo '</div>';
        }

        echo '<div class="selected-feeds">';
        foreach ($FEED->channel->item as $ITEM) {
            $TITLE = $ITEM->title;
            $DESCRIPTION = $ITEM->description;
            $LINK = $ITEM->link;
            $PUBDATE = $ITEM->pubDate;

            echo '<div class="feed">';
                echo '<div class="feed-header">';
                    echo '<img src="https://picsum.photos/id/' . rand(1, 1000) . '/300/200" alt="image loading" loading="lazy">';
                echo '</div>';
                echo '<div class="feed-content">';
                    echo '<h2><a href="' . $LINK . '" target="_blank">' . $TITLE . '</a></h2>';
                    echo '<p>' . $DESCRIPTION . '</p>';
                echo '</div>';
                echo '<div class="feed-footer">';
                    echo '<em>Author: Unknown</em>';
                    echo '<em>' . $PUBDATE . '</em>';
                echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>rssfeed.tmp</title>

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
        <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="search">
                <form method="post">
                    <select name="sel-search">
                        <option selected disabled>Choose here ...</option>
                        <option value="http://rss.dw.com/xml/rss-de-top">DW: Themen des Tages</option>
                        <option value="http://rss.dw.com/xml/rss-de-wissenschaft">DW: Wissenschaft</option>
                        <option value="http://rss.dw.com/xml/rss-de-eco">DW: Wirtschaft</option>
                        <option value="http://rss.dw.com/xml/rss-de-cul">DW: Kultur</option>
                    </select>
                    <button type="submit" name="btn-search">&#128269;</button>
                </form>
            </div>
            <div class="results">
                <?php
                if (isset($_POST['btn-search'])) {
                    if (isset($_POST['sel-search'])) {
                        printRSSFeed($_POST['sel-search']);
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>