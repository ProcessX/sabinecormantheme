<?php
/*
* Functions definitions for the theme
*/
?>

<?php

if(!isset($content_width)){
    $content_width = 660;
}

function sabinecorman_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sabinecorman_setup');

function sabinecorman_script(){
    /** Add styles */
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap');

    /** Add script */
    wp_enqueue_script('app', get_template_directory_uri() . './js/app.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'sabinecorman_script')

?>