<?php
/**
 * Small presentation helpers shared by the theme templates.
 *
 * @package Infinity_Softhub_Blog
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Return a URL on the parent Infinity Softhub website.
 *
 * The WordPress installation lives in /blog, so the production parent URL is
 * kept explicit. Local installs continue to work when the blog directory is
 * present in the local URL.
 */
function get_main_site_url($path = '') {
    $base = 'https://infinitysofthub.com';

    if (function_exists('wp_get_environment_type') && 'production' !== wp_get_environment_type()) {
        $home = untrailingslashit(home_url('/'));

        if (preg_match('#/blog$#i', $home)) {
            $base = preg_replace('#/blog$#i', '', $home);
        }
    }

    return trailingslashit($base) . ltrim((string) $path, '/');
}

/**
 * Estimated reading time for a post.
 */
function ish_blog_reading_time($post_id = null) {
    $post_id = $post_id ?: get_the_ID();
    $content = get_post_field('post_content', $post_id);
    $words   = str_word_count(wp_strip_all_tags(strip_shortcodes((string) $content)));

    return max(1, (int) ceil($words / 220));
}

/**
 * First category for a post, if available.
 */
function ish_blog_primary_category($post_id = null) {
    $categories = get_the_category($post_id ?: get_the_ID());

    return !empty($categories) ? $categories[0] : null;
}
