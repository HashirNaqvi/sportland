<?php 


// Add theme support for title tag
add_theme_support('title-tag');

// Add theme support for post thumbnails
add_theme_support('post-thumbnails');

// styles and scripts 
function sportland_theme_scripts_and_styles(){
    wp_enqueue_style( 'main-style.css', get_stylesheet_uri() );
    wp_enqueue_style( 'style-css', get_theme_file_uri('/css/style.css') );
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri('/css/bootstrap.css') );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
    wp_enqueue_style( 'fonts-css', get_theme_file_uri('/css/fonts.css') );

    wp_enqueue_script( 'core-main-js', get_theme_file_uri('/js/core.min.js'), array(), NULL, true);
    wp_enqueue_script( 'custom-script-js', get_theme_file_uri('/js/script.js'), array(), NULL, true);
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'sportland_theme_scripts_and_styles' );



// Register navigation menu
// function register_nav_menu() {
//     register_nav_menu('primary', 'Primary Navigation');
// }
// add_action('init', 'register_nav_menu');



// //register_footer_menu
// function register_footer_menu() {
//     register_nav_menu('footer-menu', 'Footer Menu');
// }
// add_action('init', 'register_footer_menu');

?>