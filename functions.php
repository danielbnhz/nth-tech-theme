<?php
function nth_tech_enqueue_scripts() {
    wp_enqueue_style('nth-tech-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nth_tech_enqueue_scripts');