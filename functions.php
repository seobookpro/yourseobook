<?php



// Include The Admin Menu Fix Bug for Bootstrap overlaping class navigation .fixed-top
// /public_html/wp-content/themes/yourseobook/api/customizer/func/header/search-bar-functions.php
// include_once trailingslashit( dirname(__FILE__) ) . 'api/admin/admin-functions.php';

function register_yourseobook_admin_functions(){
	require_once get_template_directory() .'/api/admin/admin-functions.php';
 }
 add_action( 'after_setup_theme', 'register_yourseobook_admin_functions' );

// function register_yourseobook_header_nav_search_box_functions(){
//	require_once get_template_directory() .'/api/customizer/func/header/search-bar-functions.php';
 // }
 // add_action( 'after_setup_theme', 'register_yourseobook_header_nav_search_box_functions' );


// function register_yourseobook_chat_gpt_functions(){
//	require_once get_template_directory() .'/api/admin/bot/chatgpt-controls.php';
 //  }
 // add_action( 'after_setup_theme', 'register_yourseobook_chat_gpt_functions' );
// add_action( 'wp_head', 'yourseobook_header_main_navigation_master_menu_styles' );

// /public_html/wp-content/themes/yourseobook/inc/app/bot/chat-gpt-controls.php
function register_my_menu() {
  register_nav_menu('top_header_menu',__( 'Top Header Navigation Menu' ));
  register_nav_menu('main_header_menu',__( 'Main Header Navigation Menu' ));
  register_nav_menu('bottom_header_menu',__( 'Bottom Header Navigation Menu' ));
  register_nav_menu('footer_main_menu',__( 'Footer Navigation Menu' ));
  register_nav_menu('footer_copy_info_menu',__( 'Copyright Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('use_block_editor_for_post', '__return_false');



// Enable Crop Images on Upload 200 pixels wide by 630 pixels tall, soft proportional crop mode
add_image_size( 'custom-size', 1280, 720 );

// Enable WordPress Deafult Lazy Load Functions for Images, Videos, Iframes
add_theme_support( 'wp_lazy_loading_enabled' );

// Enable Website Featured images
add_theme_support( 'post-thumbnails' );

// Remove Image Height Width Attributes on Upload and Display
function yourseobook_remove_img_attr ($html) { return preg_replace('/(width|height)="\d+"\s/', "", $html);}
add_filter( 'post_thumbnail_html', 'yourseobook_remove_img_attr' );

// Function to set the JPEG compression quality
// Increase Image compression in WordPress
add_filter('jpeg_quality', function($arg){return 35;});


// Remove “scaled” in File URL/Name Path when adding new image to library
add_filter( 'big_image_size_threshold', '__return_false' );


// Selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
function custom_excerpt_length( $length ) {
  return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove WordPress Emoji icons and js to speed up the site and low the loaded scrips in the headers
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


function load_dashicons_on_customizer() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'customize_controls_print_styles', 'load_dashicons_on_customizer' );

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}


add_filter( 'use_widgets_block_editor', '__return_false' );
add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_block_editor_for_page', '__return_false' );
add_filter('use_block_editor_for_post_type', '__return_false');

// Load Current and New Styles and JavaScripts from a Folder

foreach( glob( get_template_directory(). '/api/assets/js/*.js' ) as $file ) {
    $filename = substr($file, strrpos($file, '/') + 1);
   wp_enqueue_script( $filename, get_template_directory_uri().'/api/assets/js/'.$filename);
}

foreach( glob( get_template_directory(). '/api/assets/css/*.css' ) as $file ) {
    $filename = substr($file, strrpos($file, '/') + 1);
  wp_enqueue_style( $filename, get_template_directory_uri().'/api/assets/css/'.$filename);
}

// yourseobook - theme name
include_once trailingslashit( dirname(__FILE__) ) . 'inc/yourseobook-customizer.php';
include_once trailingslashit( dirname(__FILE__) ) . 'inc/functions-customizer.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/custom-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/advanced-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/master-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/seo-controller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/class-buttons.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/head/search-bar-controller.php';
// require_once trailingslashit( dirname(__FILE__) ) . 'inc/meta/head/opengraph.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/head/header-menu-controlller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/footer/footer-main-controller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/meta/seo/general/general-seo-controller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/meta/single/seo-single-page-controller.php';
// /public_html/wp-content/themes/yourseobook/inc/meta/seo/general/general-seo-controller.php
// /public_html/wp-content/themes/yourseobook/inc/layout/head/header-menu-controlller.php

function enqueue_custom_scripts() {
    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ), '1.0', true );

    // Define the template directory path
    wp_localize_script( 'custom-scripts', 'themeData', array(
        'templateDir' => get_template_directory_uri()
    ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );


// Include Sitweide Widgets and Sidebars
require_once get_template_directory() . '/design/content/widgets/aside/custom-site-widgets.php';
function restrict_demo_user_customizer($capability, $user_id, $args) {
    $demo_user = 'demo'; // Replace 'demo' with the username of the specific user

    $user = get_user_by('login', $demo_user);

    if ($user && $user_id === $user->ID) {
        // Check if the user is trying to publish changes
        if ($capability === 'publish_posts') {
            // Get the 'Subscriber' role object
            $subscriber_role = get_role('subscriber');

            // Remove the 'publish_posts' capability from the 'Subscriber' role
            if ($subscriber_role) {
                $subscriber_role->remove_cap('publish_posts');
            }
        }
    }

    return $capability;
}
add_filter('map_meta_cap', 'restrict_demo_user_customizer', 10, 3);
function allow_subscriber_customizer_access() {
    $demo_user = 'demo'; // Replace 'demo' with the username of the specific user
    $subscriber_role = get_role('subscriber');

    if ($subscriber_role) {
        $subscriber_role->add_cap('edit_theme_options');
    }

    $demo_user_obj = get_user_by('login', $demo_user);
    
    if ($demo_user_obj) {
        $demo_user_obj->add_cap('edit_theme_options');
    }
}
add_action('init', 'allow_subscriber_customizer_access');


function yourseobook_add_id_class_to_iframe($html) {
    // Check if the content contains an iframe
    if (strpos($html, '<iframe') !== false) {
        // Add the desired ID and class to the iframe
        $html = str_replace('<iframe', '<iframe id="iframe-in-c" class="iframe-in-the-content iframe-container" width="860" height="483.75" autoplay="1" modestbranding="1" playsinline="1" loading="lazy"', $html);
    }
    return $html;
}
add_filter('embed_oembed_html', 'yourseobook_add_id_class_to_iframe');





// Count Pages/Posts/Archives/Categories/Tags/Author/Home/Other Pages View

// Custom Function 9
// Track Posts yourseobook_post_views_count

function yourseobook_set_post_views($postID) {
    $count_key = 'yourseobook_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


// Custom Function 9
// Count Page Views and Imperssions After Activation
function yourseobook_track_post_views ($post_id) {
    if ( !is_singular() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    yourseobook_set_post_views($post_id);
}
add_action( 'wp_head', 'yourseobook_track_post_views');

function yourseobook_get_post_views($postID){
    $count_key = 'yourseobook_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0 Views';
    }
    return $count.' Views';
}


// to display in content echo calculate_reading_time();

function calculate_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 300); // Assuming an average reading speed of 200 words per minute

    return $reading_time . ' min read';
}



//
function yourseobook_generate_table_of_contents() {
    $content = get_post_field('post_content', get_the_ID());
    // Find all h2, h3, and h4 headings
    $pattern = '/<h([2-6])>(.*?)<\/h\1>/';
    preg_match_all($pattern, $content, $headings);

    if (!empty($headings[0])) {
        $toc = '<div id="mySidenav" class="sidenav">';
        $toc .= '<div id="page-toc" class="sp-table-of-contents" style="margin:0px auto;padding: 0px 15px 0px 15px;font-size:20px;color:red;">Table of Contents</div>';
        $toc .= '<ul style="list-style:none;padding:0px;">';

        foreach ($headings[0] as $index => $heading) {
            $level = $headings[1][$index];
            $title = $headings[2][$index];
            $id = sanitize_title($title);
            $brand = get_theme_mod( 'yourseobook_main_brand_name_text_control' );
// echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) )
            // Generate a unique ID for each heading
            $updated_heading = str_replace('<h' . $level . '>', '<h' . $level . ' id="' . $id . '">', $heading);

            // Update the content with the modified heading
            $content = str_replace($heading, $updated_heading, $content);
//  . $title . ', ' . $brand . '
            // Generate the table of contents with jump links
            $toc .= '<li><a href="#' . $id . '" onclick="scrollToHeading(\'' . $id . '\'); return false;" title="'. $title . ' | ' . $brand  .'">';

            // Add indentation based on heading level
            $toc .= str_repeat('&nbsp;', ($level - 2) * 6);

            $toc .= $title . '</a></li>';
        }

        $toc .= '</ul>';
        $toc .= '</div>';

        // Prepend the table of contents to the content
        $content = $toc . $content;
    }

    return $content;
}
