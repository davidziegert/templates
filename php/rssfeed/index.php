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

      echo '<h2>' . $TITLE . '</h2>';
      echo '<em>Last update: ' . $LASTBUILDDATE . '</em>';
      echo '<hr>';
    }

    foreach ($FEED->channel->item as $ITEM) {
      $TITLE = $ITEM->title;
      $DESCRIPTION = $ITEM->description;
      $LINK = $ITEM->link;
      $PUBDATE = $ITEM->pubDate;

      echo '<div class="feed">';
      echo '<h3><a href="' . $LINK . '" target="_blank">' . $TITLE . '</a></h3>';
      echo '<em>Author: Unknown | ' . $PUBDATE . '</em>';
      echo '<p>' . $DESCRIPTION . '</p>';
      echo '</div>';
    }
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
  <meta name="author" content="AUTHOR" />
  <meta name="description" content="DESCRIPTION" />
  <meta name="keywords" content="KEYWORD, KEYWORD" />

  <title>rssfeed.tmp</title>

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
      <h1>RSS-Feed</h1>
      <div class="feed-search">
        <form method="post">
          <fieldset>
            <select name="sel-search">
              <option selected disabled>Choose channel ...</option>
              <option value="http://rss.dw.com/xml/rss-de-top">DW: Themen des Tages</option>
              <option value="http://rss.dw.com/xml/rss-de-wissenschaft">DW: Wissenschaft</option>
              <option value="http://rss.dw.com/xml/rss-de-eco">DW: Wirtschaft</option>
              <option value="http://rss.dw.com/xml/rss-de-cul">DW: Kultur</option>
            </select>
            <button type="submit" name="btn-search">&#128269;</button>
          </fieldset>
        </form>
      </div>
      <div class="feed-results">
        <?php if (isset($_POST['btn-search'])) {
          if (isset($_POST['sel-search'])) {
            printRSSFeed($_POST['sel-search']);
          }
        } ?>
      </div>
    </main>
  </div>
</body>

</html>