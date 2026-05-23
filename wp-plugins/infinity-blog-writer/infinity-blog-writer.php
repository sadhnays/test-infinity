<?php
/**
 * Plugin Name: Infinity Blog Writer
 * Plugin URI: https://infinitysofthub.com
 * Description: Beautiful blog management system with local writer support and AI-ready.
 * Version: 1.0.2
 * Author: Infinity SoftHub
 * Author URI: https://infinitysofthub.com
 * License: GPL v2 or later
 * Text Domain: infinity-blog-writer
 */

if (!defined('ABSPATH')) {
    exit;
}

define('IBW_VERSION', '1.0.2');
define('IBW_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('IBW_PLUGIN_URL', plugin_dir_url(__FILE__));
define('IBW_API_KEY_OPTION', 'ibw_api_key');

class Infinity_Blog_Writer {

    private static $instance = null;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
        add_action('wp_ajax_ibw_save_post', array($this, 'ajax_save_post'));
        add_action('wp_ajax_ibw_delete_post', array($this, 'ajax_delete_post'));
        add_action('wp_ajax_ibw_get_posts', array($this, 'ajax_get_posts'));
        add_action('wp_ajax_ibw_generate_api_key', array($this, 'ajax_generate_api_key'));
        add_action('rest_api_init', array($this, 'register_api_routes'));
        add_filter('theme_page_templates', array($this, 'register_page_templates'));
        add_filter('page_template', array($this, 'load_page_template'));

        // Single post template - Only for singular posts, not for admin AJAX
        add_filter('single_template', array($this, 'load_single_post_template'));
    }

    public function load_single_post_template($template) {
        if (is_singular('post')) {
            $custom_template = plugin_dir_path(__FILE__) . 'template-single-blog.php';
            if (file_exists($custom_template)) {
                return $custom_template;
            }
        }
        return $template;
    }

    public function register_page_templates($templates) {
        $templates['template-blog-listing.php'] = 'Blog Listing - Infinity SoftHub';
        $templates['template-single-blog.php'] = 'Single Blog Post - Infinity SoftHub';
        return $templates;
    }

    public function load_page_template($template) {
        global $post;
        if ($post && is_page()) {
            $custom_template = get_post_meta($post->ID, '_wp_page_template', true);
            if ($custom_template && $custom_template !== 'default') {
                $plugin_template = plugin_dir_path(__FILE__) . $custom_template;
                if (file_exists($plugin_template)) {
                    return $plugin_template;
                }
            }
        }
        return $template;
    }

    public function register_api_routes() {
        // Get API key from options
        $api_key = get_option(IBW_API_KEY_OPTION, '');

        // GET all posts
        register_rest_route('ibw/v1', '/posts', array(
            'methods' => 'GET',
            'callback' => array($this, 'api_get_posts'),
            'permission_callback' => function() use ($api_key) {
                $request_api_key = isset($_GET['api_key']) ? $_GET['api_key'] : '';
                return empty($api_key) || $request_api_key === $api_key;
            }
        ));

        // POST create post
        register_rest_route('ibw/v1', '/posts', array(
            'methods' => 'POST',
            'callback' => array($this, 'api_create_post'),
            'permission_callback' => function() use ($api_key) {
                return $this->verify_api_request();
            }
        ));

        // PUT update post
        register_rest_route('ibw/v1', '/posts/(?P<id>\w+)', array(
            'methods' => 'PUT',
            'callback' => array($this, 'api_update_post'),
            'permission_callback' => function() use ($api_key) {
                return $this->verify_api_request();
            }
        ));

        // DELETE post
        register_rest_route('ibw/v1', '/posts/(?P<id>\w+)', array(
            'methods' => 'DELETE',
            'callback' => array($this, 'api_delete_post'),
            'permission_callback' => function() use ($api_key) {
                return $this->verify_api_request();
            }
        ));
    }

    private function verify_api_request() {
        $api_key = get_option(IBW_API_KEY_OPTION, '');
        if (empty($api_key)) {
            return true; // No API key set, allow all
        }

        $request_api_key = '';
        if (isset($_GET['api_key'])) {
            $request_api_key = $_GET['api_key'];
        } else {
            $headers = isset($_SERVER['HTTP_X_API_KEY']) ? $_SERVER['HTTP_X_API_KEY'] : '';
            if (empty($headers)) {
                $headers = isset($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] : '';
            }
            $request_api_key = str_replace('Bearer ', '', $headers);
        }

        return $request_api_key === $api_key;
    }

    public function add_admin_menu() {
        add_menu_page(
            'Blog Writer',
            'Blog Writer',
            'manage_options',
            'infinity-blog-writer',
            array($this, 'admin_page'),
            'dashicons-write',
            30
        );
    }

    public function enqueue_admin_scripts($hook) {
        if ('toplevel_page_infinity-blog-writer' !== $hook) {
            return;
        }

        wp_enqueue_style('ibw-admin', IBW_PLUGIN_URL . 'assets/css/admin.css', array(), IBW_VERSION);
        wp_enqueue_script('ibw-admin', IBW_PLUGIN_URL . 'assets/js/admin.js', array('jquery'), IBW_VERSION, true);

        wp_localize_script('ibw-admin', 'ibw_vars', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('ibw_nonce'),
            'plugin_url' => IBW_PLUGIN_URL
        ));
    }

    public function admin_page() {
        $posts = get_posts(array('post_type' => 'post', 'post_status' => array('publish', 'draft', 'pending'), 'numberposts' => -1));
        $categories = get_categories(array('hide_empty' => 0));
        $api_key = get_option(IBW_API_KEY_OPTION, '');
        $api_key_display = $api_key ? substr($api_key, 0, 8) . '...' . substr($api_key, -4) : 'Not generated';
        include IBW_PLUGIN_DIR . 'templates/admin-page.php';
    }

    public function ajax_save_post() {
        check_ajax_referer('ibw_nonce', 'nonce');

        // Prevent duplicate submission
        if (isset($_POST['_processed'])) {
            wp_send_json_error('Duplicate request detected');
        }

        $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
        $title = isset($_POST['title']) ? sanitize_text_field($_POST['title']) : '';
        $content = isset($_POST['content']) ? wp_kses_post($_POST['content']) : '';
        $status = isset($_POST['status']) ? sanitize_text_field($_POST['status']) : 'draft';
        $tags = isset($_POST['tags']) ? sanitize_text_field($_POST['tags']) : '';

        if (empty($title) || empty($content)) {
            wp_send_json_error('Title and content are required');
        }

        // Check if post already exists with same title in last 5 minutes (prevent duplicates)
        if (!$post_id) {
            global $wpdb;
            $recent_post = $wpdb->get_row($wpdb->prepare(
                "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type = 'post' AND post_date > DATE_SUB(NOW(), INTERVAL 5 MINUTE) LIMIT 1",
                $title
            ));

            if ($recent_post) {
                wp_send_json_error('A post with this title was recently created. Please check your existing posts.');
            }
        }

        $post_data = array(
            'post_title' => $title,
            'post_content' => $content,
            'post_status' => $status,
            'post_type' => 'post'
        );

        if ($post_id) {
            $post_data['ID'] = $post_id;
            $result = wp_update_post($post_data);
        } else {
            $result = wp_insert_post($post_data);
        }

        if ($result && !is_wp_error($result)) {
            if (!empty($tags)) {
                wp_set_post_tags($result, $tags, false);
            }
            update_post_meta($result, '_ibw_ai_analyzed', false);
            wp_send_json_success(array('post_id' => $result, 'message' => $status === 'publish' ? 'Post published!' : 'Draft saved!'));
        } else {
            wp_send_json_error('Failed to save post');
        }
    }

    public function ajax_delete_post() {
        check_ajax_referer('ibw_nonce', 'nonce');

        $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;

        if ($post_id && wp_delete_post($post_id, true)) {
            wp_send_json_success('Post deleted');
        } else {
            wp_send_json_error('Failed to delete post');
        }
    }

    public function ajax_get_posts() {
        check_ajax_referer('ibw_nonce', 'nonce');

        $posts = get_posts(array('post_type' => 'post', 'post_status' => array('publish', 'draft', 'pending'), 'numberposts' => -1));
        $formatted = array();

        foreach ($posts as $post) {
            $cat = get_the_category($post->ID);
            $formatted[] = array(
                'id' => $post->ID,
                'title' => $post->post_title,
                'content' => $post->post_content,
                'status' => $post->post_status,
                'category' => !empty($cat) ? $cat[0]->name : 'Uncategorized',
                'date' => $post->post_date,
                'tags' => wp_get_post_tags($post->ID, array('fields' => 'names'))
            );
        }

        wp_send_json_success($formatted);
    }

    public function ajax_generate_api_key() {
        check_ajax_referer('ibw_nonce', 'nonce');

        // Generate random API key
        $api_key = 'ibw_' . bin2hex(random_bytes(16));

        update_option(IBW_API_KEY_OPTION, $api_key);

        wp_send_json_success(array('api_key' => $api_key));
    }

    // REST API Methods
    public function api_get_posts($request) {
        $posts = get_posts(array('post_type' => 'post', 'post_status' => array('publish', 'draft'), 'numberposts' => -1));
        $formatted = array();

        foreach ($posts as $post) {
            $formatted[] = array(
                'id' => $post->ID,
                'title' => $post->post_title,
                'content' => $post->post_content,
                'status' => $post->post_status,
                'slug' => $post->post_name,
                'date' => $post->post_date,
                'ai_analyzed' => get_post_meta($post->ID, '_ibw_ai_analyzed', true)
            );
        }

        return new WP_REST_Response(array('success' => true, 'posts' => $formatted, 'count' => count($formatted)), 200);
    }

    public function api_create_post($request) {
        $title = $request->get_param('title');
        $content = $request->get_param('content');

        if (empty($title) || empty($content)) {
            return new WP_REST_Response(array('success' => false, 'error' => 'Title and content are required'), 400);
        }

        $post_data = array(
            'post_title' => sanitize_text_field($title),
            'post_content' => wp_kses_post($content),
            'post_status' => $request->get_param('status') ?: 'draft',
            'post_type' => 'post'
        );

        $post_id = wp_insert_post($post_data);

        if ($post_id && !is_wp_error($post_id)) {
            $tags = $request->get_param('tags');
            if ($tags && is_array($tags)) {
                wp_set_post_tags($post_id, array_map('sanitize_text_field', $tags), false);
            }
            update_post_meta($post_id, '_ibw_ai_analyzed', false);
            return new WP_REST_Response(array('success' => true, 'message' => 'Post created', 'post_id' => $post_id), 201);
        }

        return new WP_REST_Response(array('success' => false, 'error' => 'Failed to create post'), 500);
    }

    public function api_update_post($request) {
        $post_id = intval($request->get_param('id'));

        if (!$post_id) {
            return new WP_REST_Response(array('success' => false, 'error' => 'Post ID required'), 400);
        }

        $post_data = array(
            'ID' => $post_id,
            'post_title' => sanitize_text_field($request->get_param('title')),
            'post_content' => wp_kses_post($request->get_param('content')),
            'post_status' => $request->get_param('status')
        );

        $result = wp_update_post($post_data);

        if ($result && !is_wp_error($result)) {
            return new WP_REST_Response(array('success' => true, 'message' => 'Post updated'), 200);
        }

        return new WP_REST_Response(array('success' => false, 'error' => 'Failed to update'), 500);
    }

    public function api_delete_post($request) {
        $post_id = intval($request->get_param('id'));

        if ($post_id && wp_delete_post($post_id, true)) {
            return new WP_REST_Response(array('success' => true, 'message' => 'Post deleted'), 200);
        }

        return new WP_REST_Response(array('success' => false, 'error' => 'Failed to delete'), 500);
    }
}

function ibw_init() {
    return Infinity_Blog_Writer::get_instance();
}
add_action('plugins_loaded', 'ibw_init');

register_deactivation_hook(__FILE__, function() {
    delete_option(IBW_API_KEY_OPTION);
});