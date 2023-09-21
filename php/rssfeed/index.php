<?php

  function printRSSFeed($selected_url)
  {
    //error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    libxml_use_internal_errors(true);

    $URL = $selected_url;
    $FEED = simplexml_load_file($URL);

    if(!$FEED)
    {
      echo'<code class="warning">';
        echo'<strong>An error occured while connecting to the RSS-Feed:</strong>';
        echo'<br>';

        foreach(libxml_get_errors() as $ERROR)
        {
          echo $ERROR;
        }

      echo'</code>';
      
      exit;
    }
    else
    {
      libxml_clear_errors();
      //print_r($FEED);

      foreach($FEED->channel as $CHANNEL)
      {
        $TITLE = $CHANNEL->title;
        $DESCRIPTION = $CHANNEL->description;
        $LINK = $CHANNEL->link;
        $LASTBUILDDATE = $CHANNEL->lastBuildDate;

        echo '<div class="banner">';
          echo '<h1>' . $TITLE . '</h1>';
          echo '<em>Last update: ' . $LASTBUILDDATE . '</em>';
        echo '</div>';
      }

      echo '<div class="container">';

        foreach($FEED->channel->item as $ITEM)
        {
          $TITLE = $ITEM->title;
          $DESCRIPTION = $ITEM->description;
          $LINK = $ITEM->link;
          $PUBDATE = $ITEM->pubDate;

          echo '<div class="card">';
            echo '<div class="card-header">';
              echo '<figure>';
                echo '<img src="https://picsum.photos/id/' . rand(1,1000) . '/300/200" alt="image loading" loading="lazy" width="300" height="200" style="object-fit: cover;">';
              echo '</figure>';
            echo '</div>';
            echo '<div class="card-content">';
              echo '<h2><a href="' . $LINK . '" target="_blank">' . $TITLE . '</a></h2>';
              echo '<p>' . $DESCRIPTION . '</p>';
            echo '</div>';
            echo '<div class="card-footer">';
              echo '<em>Author: John Doe</em>';
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

        <!-- GoogleFonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
      <div class="wrapper">

      <div class="search">
        <form method="post">
          <select name="sel_search">
            <option selected disabled>Choose here ...</option>
            <option value="http://rss.dw.com/xml/rss-de-top">Themen des Tages</option>
            <option value="http://rss.dw.com/xml/rss-de-wissenschaft">Wissenschaft</option>
            <option value="http://rss.dw.com/xml/rss-de-eco">Wirtschaft</option>
            <option value="http://rss.dw.com/xml/rss-de-cul">Kultur</option>
          </select>
          <button type="submit" name="btn_search"><i class="fa fa-search"></i></button>
        </form>
      </div>             

        <?php
          if(isset($_POST['btn_search'])) 
          {
            $selected_url = $_POST['sel_search'];
            printRSSFeed($selected_url);
          }
        ?>

      </div>
    </body>
</html>