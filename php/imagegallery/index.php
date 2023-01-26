<?php

	function load_images_first()
	{
		$images = glob("images/*.webp");

		print '<div class="gallery">';
		
		foreach ($images as $image) 
		{
			print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
		}
		
		print '</div>';
	}


	function load_images_second()
	{
		$images = glob("images/*.webp");
		$count = count($images)/3;
        $rest = fmod(count($images), 3);
        $float = is_float($count); 
        $i = 1;
        $stop = false;
		
		print '<div class="gallery">';

            if ($float == true)
            {
                foreach ($images as $image) 
                {
                    switch ($i) 
                    {
                        case 1:
                            print '<div class="gallery-column">';
                            print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                            $i++;                            
                            break;
                        case 2:
                            print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                            $i++;                            
                            break;
                        case 3:
                            print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                            $i++;                            
                            break;
                        case 4:
                            if($stop == false)
                            {
                                if ($rest == 2)
                                {
                                    print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                                    print '</div>';
    
                                    $rest = 1;
                                    $i = 1;
                                }                         
                                elseif ($rest == 1)
                                {
                                    print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                                    print '</div>';
    
                                    $rest = 0;
                                    $i = 1;
    
                                    $stop = true;
                                }
                            }
                            else
                            {
                                print '</div>';
                                print '<div class="gallery-column">';
                                print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                                $i=2;
                            }
                            break;
                    }
                } 
            }
            else 
            {
                foreach ($images as $image) 
                {
                    if ($i == 1)
                    {
                        print '<div class="gallery-column">';
                        print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                        $i++;
                    }
                    elseif ($i == $count)
                    {
                        print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                        print '</div>';
                        $i = 1;
                    }
                    else
                    {
                        print '<figure class="lightbox"><img title="not title" src="' . $image . '" loading="lazy" alt="image loading"/><figcaption>no figcaption</figcaption></figure>';
                        $i++;  
                    }
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

    <title>imagegallery.tmp</title>

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
</head>

<body>

    <div class="row first">
        <h1>ImageGallery with FlexBox</h1>
        <?php load_images_first(); ?>
    </div>

    <div class="row second">
        <h1>ImageGallery with Columns</h1>
        <?php load_images_second(); ?>
    </div>

</body>

</html>