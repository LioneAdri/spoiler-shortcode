<?php
/**
* Plugin Name: Spoiler Shortcode
* Plugin URI: https://github.com/LioneAdri/spoiler-shortcode
* Description: Hide and display spoiler using a shortcode to insert in a page or post
* Version: 0.1
* Text Domain: visionspring-spoiler-shortcode
* Author: Sallai Adrienn "Lione"
* Author URI: https://www.visionspring.eu
*/

// register jquery and style on initialization
add_action('init', 'register_script');
function register_script() {
    wp_register_script( 'spoiler_js', plugins_url('/js/spoiler.js', __FILE__), [], "1.0.0", true);
    wp_register_style( 'spoiler_css', plugins_url('/css/spoiler.css', __FILE__), false, '1.0.0', 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style');

function enqueue_style(){
    wp_enqueue_script('spoiler_js');
    wp_enqueue_style('spoiler_css');
}

function visionspring_create_spoiler_shortcode($attributes, $content = '') {

    extract( shortcode_atts( array(
        'title' => 'spoiler',
        'tooltip' => 'Click to show the content!'
    ), $attributes ) );

    // Return a string to display on the page
    return '<span class="spoiler_link" data-spoiler="'.$content.'" title="'.$tooltip.'" >'.$title.'</span>';

    return $content;
}

add_shortcode('spoiler', 'visionspring_create_spoiler_shortcode');