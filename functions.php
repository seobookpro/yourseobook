<?php


//Adding the Open Graph in the Language Attributes
function yourseobook_add_opengraph_doctype( $output ) {
		return $output . ' xmlns:og="https://opengraphprotocol.org/schema/" xmlns:fb="https://www.facebook.com/2008/fbml"';
	}
add_filter('language_attributes', 'yourseobook_add_opengraph_doctype');

//Lets add Open Graph Meta Info

function yourseobook_insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
		//echo '<meta property="fb:app_id" content="' . $options['facebooksdk'] . '"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
		echo '<meta property="og:description" content="' . get_bloginfo( 'name' ) . '"/>';
        echo '<meta property="og:type" content="blog"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="' . get_the_title() . '"/>';
	if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
		$default_image=""; //replace this with a default image on your server or an image in your media library
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
	echo "
";
}
add_action( 'wp_head', 'yourseobook_insert_fb_in_head', 10, 2 );

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
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/head/header-menu-controlller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/footer/footer-main-controller.php';

// /public_html/wp-content/themes/yourseobook/inc/layout/head/header-menu-controlller.php

function enqueue_custom_scripts() {
    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ), '1.0', true );

    // Define the template directory path
    wp_localize_script( 'custom-scripts', 'themeData', array(
        'templateDir' => get_template_directory_uri()
    ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );




