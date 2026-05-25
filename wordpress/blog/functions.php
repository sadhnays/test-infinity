<?php
/**
 * ISH Blog Theme Functions and Definitions
 */

// Include helper functions
require_once get_template_directory() . '/functions-helper.php';

function ish_blog_theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');
    // Add support for title tags
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ish_blog_theme_setup');

// Views counter functions
function set_post_views($postID) {
    $count_key = 'post_views_count';
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
function get_post_views($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
