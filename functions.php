<?php
/*
* Functions definitions for the theme
*/
?>

<?php

function sabinecorman_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sabinecorman_setup');

function sabinecorman_scripts(){
    // Add styles
    wp_enqueue_style('custom', get_template_directory_uri() .'/style.css');

    //wp_enqueue_script('app.js', get_template_directory_uri() .'./js/app.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'sabinecorman_scripts');

?>