<?php 

	/* ********************* */
	/* Register Custom Theme */
	/* ********************* */

	if ( ! function_exists( 'myfirsttheme_setup' ) ) :
        function myfirsttheme_setup()
        {
            /* Make theme available for translation. Translations can be placed in the /languages/ directory. */
            load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

            /* Add default posts and comments RSS feed links */
            add_theme_support( 'automatic-feed-links' );

            /* Enable support for post thumbnails and featured images. */
            add_theme_support( 'post-thumbnails' );

            /* Enable support for the following post formats: aside, gallery, quote, image, and video */
            add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        }
	endif;

	add_action( 'after_setup_theme', 'myfirsttheme_setup' );

	/* *********** */
	/* Random Site */
	/* *********** */

	function get_randomsite() 
	{
		$count_pages = wp_count_posts('page');
		$total_pages = $count_pages->publish;
		$random_page = rand(1, $total_pages);
		$random_link = "?p=".$random_page;
		echo "<a href=". $random_link .">Random Page</a>";
	}

    /* ************* */
	/* WP-JSON-Users */
	/* ************* */

    add_filter('rest_endpoints', function( $endpoints ) {
        if ( isset( $endpoints['/wp/v2/users'] ) )
        {
            unset( $endpoints['/wp/v2/users'] );
        }
        if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) 
        {
            unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
        }
        return $endpoints;
    });