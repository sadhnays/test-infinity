<?php
/**
 * Theme Name: ISH Blog Theme
 */

function ish_blog_enqueue() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', false);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
}
add_action('wp_enqueue_scripts', 'ish_blog_enqueue');

// Logo URL helper
function get_ish_logo_url() {
    return get_template_directory_uri() . '/images/ish-logo.svg';
}

// Main site URL (parent website)
function get_main_site_url($path = '') {
    return 'https://infinitysofthub.com' . ($path ? '/' . ltrim($path, '/') : '');
}