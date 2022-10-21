<?php

/* ********************* */
/* Register Custom Theme */
/* ********************* */

if (!function_exists('myfirsttheme_setup')) :

    function myfirsttheme_setup()
    {

        /* Make theme available for translation. Translations can be placed in the /languages/ directory. */

        load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');

        /* Add default posts and comments RSS feed links */

        add_theme_support('automatic-feed-links');

        /* Enable support for post thumbnails and featured images. */

        add_theme_support('post-thumbnails');

        /* Enable support for the following post formats: aside, gallery, quote, image, and video */

        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }

endif;

add_action('after_setup_theme', 'myfirsttheme_setup');

/* ********************* */
/* Register Custom Menus */
/* ********************* */

function wpb_main_menu()
{
    register_nav_menu('my-main-menu', __('Hauptmenu'));
}

function wpb_lang_menu()
{
    register_nav_menu('my-lang-menu', __('Sprachmenu'));
}

function wpb_intern_menu()
{
    register_nav_menu('my-intern-menu', __('Internal'));
}

function wpb_extern_menu()
{
    register_nav_menu('my-extern-menu', __('External'));
}

function wpb_websites_menu()
{
    register_nav_menu('my-websites-menu', __('Websites'));
}

add_action('init', 'wpb_main_menu');
add_action('init', 'wpb_lang_menu');
add_action('init', 'wpb_intern_menu');
add_action('init', 'wpb_extern_menu');
add_action('init', 'wpb_websites_menu');

/* *********** */
/* Breadcrumbs */
/* *********** */

function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';

    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');

        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/* *********** */
/* Random Site */
/* *********** */

function get_randomsite()
{
    $count_pages = wp_count_posts('page');
    $total_pages = $count_pages->publish;
    $random_page = rand(1, $total_pages);
    $random_link = "?p=" . $random_page;
    echo "<a href=" . $random_link . ">Enter</a>";
}

/* ********************* */
/* SEO Meta-Descrription */
/* ********************* */

function custom_get_excerpt($post_id)
{
    $temp = $post;
    $post = get_post($post_id);
    setup_postdata($post);

    $excerpt = esc_attr(strip_tags(get_the_excerpt()));

    wp_reset_postdata();
    $post = $temp;

    return $excerpt;
}

function add_custom_meta_description()
{
    $excerpt = custom_get_excerpt(get_the_ID());
    echo $excerpt;
}