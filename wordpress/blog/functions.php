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

// AJAX Load More Posts for Infinite Scroll
add_action('wp_ajax_load_more_posts', 'load_more_posts_handler');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_handler');

function load_more_posts_handler() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    $blog_query = new WP_Query($args);
    
    if ($blog_query->have_posts()) {
        while ($blog_query->have_posts()) {
            $blog_query->the_post();
            $categories = get_the_category();
            $category_html = '';
            if (!empty($categories)) {
                $category_html = '<span class="blog-card-category">' . esc_html($categories[0]->name) . '</span>';
            }
            
            if (has_post_thumbnail()) {
                $img_html = '<div class="blog-card-image-wrapper">
                                <img src="' . get_the_post_thumbnail_url(get_the_ID(), 'medium_large') . '" alt="' . esc_attr(get_the_title()) . '" class="blog-card-image">
                             </div>';
            } else {
                $img_html = '<div class="blog-card-image-wrapper" style="background: linear-gradient(135deg, #020B1E, #062B6F); height: 240px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-blog" style="font-size: 48px; color: rgba(255,255,255,0.1);"></i>
                             </div>';
            }
            
            $tags = get_the_tags();
            $tags_html = '';
            if (!empty($tags)) {
                $tags_html = '<div class="blog-card-tags">';
                foreach (array_slice($tags, 0, 3) as $tag) {
                    $tags_html .= '<span class="blog-tag">' . esc_html($tag->name) . '</span>';
                }
                $tags_html .= '</div>';
            }
            
            echo '<article class="blog-card" data-aos="fade-up">
                    ' . $img_html . '
                    <div class="blog-card-content">
                        ' . $category_html . '
                        <h2 class="blog-card-title">
                            <a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>
                        </h2>
                        <p class="blog-card-excerpt">
                            ' . wp_trim_words(get_the_excerpt(), 25, '...') . '
                        </p>
                        <div class="blog-card-meta">
                            <span class="blog-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                ' . get_the_date('M d, Y') . '
                            </span>
                            <a href="' . esc_url(get_permalink()) . '" class="blog-card-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        ' . $tags_html . '
                    </div>
                  </article>';
        }
    }
    wp_reset_postdata();
    wp_die();
}

// Set post limit to 6 for the home/blog listing page
function ish_blog_modify_main_query($query) {
    if (!is_admin() && $query->is_main_query() && (is_home() || is_archive())) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'ish_blog_modify_main_query');


