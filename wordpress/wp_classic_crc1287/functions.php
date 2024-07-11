<?php

/* ********************* */
/* Register Custom Theme */
/* ********************* */

if (!function_exists('my_theme_setup')) :
    function my_theme_setup()
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

add_action('after_setup_theme', 'my_theme_setup');

/* ********************* */
/* Register Custom Menus */
/* ********************* */

/* ********************* */
/* Register Custom Menus */
/* ********************* */

function insert_main_menu()
{
    register_nav_menu('my-main-menu', __('Hauptmenu'));
}

function insert_lang_menu()
{
    register_nav_menu('my-lang-menu', __('Sprachmenu'));
}

function insert_intern_menu()
{
    register_nav_menu('my-intern-menu', __('Internal'));
}

function insert_extern_menu()
{
    register_nav_menu('my-extern-menu', __('External'));
}

function insert_websites_menu()
{
    register_nav_menu('my-websites-menu', __('Websites'));
}

add_action('init', 'insert_main_menu');
add_action('init', 'insert_lang_menu');
add_action('init', 'insert_intern_menu');
add_action('init', 'insert_extern_menu');
add_action('init', 'insert_websites_menu');

/* *********** */
/* Breadcrumbs */
/* *********** */

function insert_breadcrumbs()
{
    echo '<div class="breadcrumbs">';
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';

    if (is_category() || is_single()) {
        echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
        the_category(' &bull; ');

        if (is_single()) {
            echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
            the_title();
        }
    } elseif (is_page()) {
        echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
        echo the_title();
    } elseif (is_search()) {
        echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }

    echo '</div>';
}

/* *********** */
/* Random Page */
/* *********** */

function insert_random_link()
{
    $pages = get_pages();
    $randomKey = (mt_rand(1, count($pages)) - 1);
    $page = $pages[$randomKey];
    $pageLink = get_page_link($page->ID);
    echo '<a href="' . $pageLink . '">Random Page</a>';
}

/* ******************** */
/* SEO Meta-Description */
/* ******************** */

function insert_meta_description()
{
    $post_id = get_the_ID();
    $post = get_post($post_id);
    setup_postdata($post);
    $excerpt = esc_attr(strip_tags(get_the_excerpt()));
    echo $excerpt;
    wp_reset_postdata();
}

/* *********** */
/* Page Author */
/* *********** */

function insert_author()
{
    if (have_posts()) : while (have_posts()) : the_post();
            echo get_the_author();
        endwhile;
    endif;
}

/* ************************* */
/* Blog-Post with Navigation */
/* ************************* */

function insert_blog_pagination($pages, $range)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<div class="post-pagination-wrapper">';
        echo '<span class="post-pagination">&#187;';

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? '<span>' . $i . '</span>' : '<a href="' . get_pagenum_link($i) . '">' . $i . '</a>';
            }
        }

        echo '&#171;</span>';
        echo '<small>Page ' . $paged . ' of ' . $pages . '</small>';
        echo '</div>';
    }
}

/* ************************* */
/* Excerpt Length of Words */
/* ************************* */

function my_excerpt_length($length)
{
    return 15;
}

add_filter('excerpt_length', 'my_excerpt_length');

/* ******************* */
/* Block WP-JSON-Users */
/* ******************* */

add_filter('rest_endpoints', function ($endpoints) {
    if (isset($endpoints['/wp/v2/users'])) {
        unset($endpoints['/wp/v2/users']);
    }
    if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }
    return $endpoints;
});
