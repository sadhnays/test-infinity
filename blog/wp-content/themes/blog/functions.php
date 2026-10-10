<?php
/**
 * Theme setup and assets.
 *
 * @package Infinity_Softhub_Blog
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/functions-helper.php';

/**
 * Register standard WordPress theme capabilities.
 */
function ish_blog_theme_setup() {
    load_theme_textdomain('ish-blog-theme', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support(
        'html5',
        array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
    );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 64,
            'width'       => 260,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    register_nav_menus(
        array(
            'primary' => __('Primary navigation', 'ish-blog-theme'),
            'footer'  => __('Footer navigation', 'ish-blog-theme'),
        )
    );

    add_image_size('ish-blog-card', 760, 460, true);
    add_image_size('ish-blog-hero', 1280, 720, true);
}
add_action('after_setup_theme', 'ish_blog_theme_setup');

/**
 * Content width used by WordPress embeds and media.
 */
function ish_blog_content_width() {
    $GLOBALS['content_width'] = apply_filters('ish_blog_content_width', 840);
}
add_action('after_setup_theme', 'ish_blog_content_width', 0);

/**
 * Version a local theme file with its modification time.
 */
function ish_blog_asset_version($relative_path) {
    $file = get_template_directory() . '/' . ltrim($relative_path, '/');

    return file_exists($file) ? (string) filemtime($file) : wp_get_theme()->get('Version');
}

/**
 * Load only the assets used by the blog theme.
 */
function ish_blog_enqueue_assets() {
    wp_enqueue_style(
        'ish-blog-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'ish-blog-icons',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    wp_enqueue_style(
        'ish-main-site',
        get_main_site_url('assets/css/new-style.css'),
        array('ish-blog-fonts'),
        '2026.08'
    );
    wp_enqueue_style(
        'ish-blog-style',
        get_stylesheet_uri(),
        array('ish-main-site', 'ish-blog-icons'),
        ish_blog_asset_version('style.css')
    );

    wp_enqueue_script(
        'ish-blog-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        ish_blog_asset_version('assets/js/theme.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ish_blog_enqueue_assets');

/**
 * Add early connections for third-party font and icon assets.
 */
function ish_blog_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array('href' => 'https://fonts.googleapis.com');
        $urls[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous');
        $urls[] = array('href' => 'https://cdnjs.cloudflare.com');
    }

    return $urls;
}
add_filter('wp_resource_hints', 'ish_blog_resource_hints', 10, 2);

/**
 * Use the main-site favicon until a Site Icon is uploaded in WordPress.
 */
function ish_blog_fallback_favicon() {
    if (has_site_icon()) {
        return;
    }
    ?>
    <link rel="icon" href="<?php echo esc_url(get_main_site_url('favicon.ico')); ?>" sizes="48x48">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url(get_main_site_url('assets/images/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_main_site_url('assets/images/favicon-192x192.png')); ?>">
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_main_site_url('assets/images/infinity-svg.svg')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_main_site_url('assets/images/apple-touch-icon.png')); ?>">
    <?php
}
add_action('wp_head', 'ish_blog_fallback_favicon', 1);

/**
 * Add useful body context for theme styling.
 */
function ish_blog_body_classes($classes) {
    $classes[] = 'ish-blog-site';

    if (is_singular()) {
        $classes[] = 'ish-blog-singular';
    }

    return $classes;
}
add_filter('body_class', 'ish_blog_body_classes');

/**
 * Show a concise excerpt on listing cards.
 */
function ish_blog_excerpt_length() {
    return 28;
}
add_filter('excerpt_length', 'ish_blog_excerpt_length', 99);

function ish_blog_excerpt_more() {
    return '&hellip;';
}
add_filter('excerpt_more', 'ish_blog_excerpt_more');

/**
 * Keep listing pages focused and predictable.
 */
function ish_blog_modify_main_query($query) {
    if (!is_admin() && $query->is_main_query() && ($query->is_home() || $query->is_archive() || $query->is_search())) {
        $query->set('posts_per_page', 9);
        $query->set('ignore_sticky_posts', false);
    }
}
add_action('pre_get_posts', 'ish_blog_modify_main_query');

/**
 * Default navigation matching the main PHP website. It is replaced
 * automatically when a Primary menu is assigned in WordPress.
 */
function ish_blog_primary_menu_fallback($args = array()) {
    $menu_class = !empty($args['menu_class']) ? $args['menu_class'] : 'ish-nav-menu';
    ?>
    <ul class="<?php echo esc_attr($menu_class); ?>">
        <li><a href="<?php echo esc_url(get_main_site_url()); ?>"><?php esc_html_e('Home', 'ish-blog-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(get_main_site_url('about.php')); ?>"><?php esc_html_e('About', 'ish-blog-theme'); ?></a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(get_main_site_url('what-we-do.php')); ?>"><?php esc_html_e('Services', 'ish-blog-theme'); ?></a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url(get_main_site_url('services/moodle-all-development.php')); ?>"><?php esc_html_e('LMS Development', 'ish-blog-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_main_site_url('services/web-development.php')); ?>"><?php esc_html_e('Web Development', 'ish-blog-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_main_site_url('services/mobile-app-development.php')); ?>"><?php esc_html_e('Mobile App Development', 'ish-blog-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_main_site_url('services/ai-ml-integration.php')); ?>"><?php esc_html_e('AI & ML Integration', 'ish-blog-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_main_site_url('services/cloud-solutions.php')); ?>"><?php esc_html_e('Cloud Solutions', 'ish-blog-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_main_site_url('services/ui-ux-design.php')); ?>"><?php esc_html_e('UI/UX Design', 'ish-blog-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_main_site_url('services/digital-marketing.php')); ?>"><?php esc_html_e('Digital Marketing', 'ish-blog-theme'); ?></a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url(get_main_site_url('industry-expertise.php')); ?>"><?php esc_html_e('Industries', 'ish-blog-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(get_main_site_url('portfolio.php')); ?>"><?php esc_html_e('Portfolio', 'ish-blog-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(get_main_site_url('our-locations.php')); ?>"><?php esc_html_e('Global Delivery', 'ish-blog-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(get_main_site_url('case-studies.php')); ?>"><?php esc_html_e('Case Studies', 'ish-blog-theme'); ?></a></li>
        <li class="current-menu-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Blog', 'ish-blog-theme'); ?></a></li>
        <li class="menu-item-cta"><a href="<?php echo esc_url(get_main_site_url('contact.php')); ?>"><?php esc_html_e('Get in Touch', 'ish-blog-theme'); ?></a></li>
    </ul>
    <?php
}

/**
 * Give a Contact item created in Appearance > Menus the CTA treatment.
 */
function ish_blog_menu_item_classes($classes, $menu_item, $args) {
    if (!empty($args->theme_location) && 'primary' === $args->theme_location) {
        $path = wp_parse_url($menu_item->url, PHP_URL_PATH);
        if ($path && preg_match('#/contact(?:\.php)?/?$#', $path)) {
            $classes[] = 'menu-item-cta';
        }
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'ish_blog_menu_item_classes', 10, 3);

/**
 * SEO: keep <title> under ~60 characters.
 * Rank Math appends " - Infinity Softhub Technologies" to every post title, which
 * pushes long post titles past what Google shows. Use a short brand suffix, and
 * drop it entirely when the post title alone is already long.
 */
function ish_blog_short_seo_title($title) {
    $brands = array(' - Infinity Softhub Technologies', ' | Infinity Softhub Technologies', ' - Infinity SoftHub Technologies', ' | Infinity SoftHub Technologies');
    foreach ($brands as $brand) {
        $len = strlen($brand);
        if (strlen($title) > $len && substr($title, -$len) === $brand) {
            $base = substr($title, 0, -$len);
            $short = $base . ' | Infinity SoftHub';
            if (mb_strlen($short) <= 60) {
                return $short;
            }
            return $base;
        }
    }
    return $title;
}
add_filter('rank_math/frontend/title', 'ish_blog_short_seo_title', 20);

/**
 * SEO: meta descriptions for category archives that have no description set
 * in WordPress (Posts > Categories). A description entered in WordPress wins.
 */
function ish_blog_category_meta_description($description) {
    if (!is_category() || trim((string) $description) !== '') {
        return $description;
    }
    $fallbacks = array(
        'moodle-lms-development' => 'Guides on Moodle LMS development: custom plugins, themes, IOMAD, upgrades, hosting and integrations from the Infinity SoftHub team.',
        'ai-in-elearning'        => 'How to use AI in e-learning: AI tutors, course Q&A assistants, RAG chatbots and automation for Moodle and LearnDash platforms.',
        'mobile-app-development' => 'Articles on mobile app development for learning and business: Ionic, Flutter, React Native and LMS mobile apps.',
    );
    $term = get_queried_object();
    if ($term && isset($term->slug) && isset($fallbacks[$term->slug])) {
        return $fallbacks[$term->slug];
    }
    if ($term && isset($term->name)) {
        return sprintf('Articles about %s from Infinity SoftHub: practical guides on LMS, Moodle, AI and software development.', $term->name);
    }
    return $description;
}
add_filter('rank_math/frontend/description', 'ish_blog_category_meta_description', 20);

/**
 * Performance/SEO: serve the compressed WebP copy of an uploaded JPG/PNG
 * when one exists next to it (image.jpg -> image.jpg.webp). Keeps every
 * image on blog pages under 100 KB without touching the media library.
 */
function ish_blog_webp_url($url) {
    if (!is_string($url) || !preg_match('~\.(jpe?g|png)$~i', $url)) {
        return $url;
    }
    static $uploads = null;
    if ($uploads === null) {
        $uploads = wp_get_upload_dir();
    }
    if (empty($uploads['baseurl']) || strpos($url, $uploads['baseurl']) !== 0) {
        return $url;
    }
    $path = $uploads['basedir'] . substr($url, strlen($uploads['baseurl']));
    return file_exists($path . '.webp') ? $url . '.webp' : $url;
}

function ish_blog_webp_srcset($srcset) {
    return preg_replace_callback('~(https?://[^\s,]+\.(?:jpe?g|png))(\s)~i', function ($m) {
        return ish_blog_webp_url($m[1]) . $m[2];
    }, $srcset . ' ');
}

add_filter('wp_get_attachment_image_attributes', function ($attr) {
    if (!empty($attr['src'])) {
        $attr['src'] = ish_blog_webp_url($attr['src']);
    }
    if (!empty($attr['srcset'])) {
        $attr['srcset'] = trim(ish_blog_webp_srcset($attr['srcset']));
    }
    return $attr;
}, 20);

add_filter('the_content', function ($html) {
    return preg_replace_callback('~(https?://[^"\'\s,]+/wp-content/uploads/[^"\'\s,]+\.(?:jpe?g|png))~i', function ($m) {
        return ish_blog_webp_url($m[1]);
    }, $html);
}, 20);

/**
 * Blog home has no featured image, so Rank Math outputs no og:image there.
 * Add the site's default share image so LinkedIn/WhatsApp previews show a picture.
 */
function ish_blog_home_og_image() {
    if (!is_home() || is_paged()) {
        return;
    }
    $img = get_main_site_url('assets/images/og-image.png');
    ?>
    <meta property="og:image" content="<?php echo esc_url($img); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Infinity SoftHub blog: Moodle, LMS and AI guides">
    <meta name="twitter:image" content="<?php echo esc_url($img); ?>">
    <?php
}
add_action('wp_head', 'ish_blog_home_og_image', 30);
