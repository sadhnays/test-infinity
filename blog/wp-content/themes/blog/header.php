<?php
/**
 * Site header.
 *
 * @package Infinity_Softhub_Blog
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#062b6f">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Skip to content', 'ish-blog-theme'); ?></a>

<header class="site-header" id="site-header">
    <nav class="navbar" id="navbar" aria-label="<?php esc_attr_e('Primary navigation', 'ish-blog-theme'); ?>">
        <div class="container nav-container">
            <a href="<?php echo esc_url(get_main_site_url()); ?>" class="logo ish-site-logo" aria-label="<?php esc_attr_e('Infinity Softhub Technologies home', 'ish-blog-theme'); ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                if ($custom_logo_id) {
                    echo wp_get_attachment_image(
                        $custom_logo_id,
                        'full',
                        false,
                        array('alt' => 'Infinity Softhub Technologies')
                    );
                } else {
                    ?>
                    <img src="<?php echo esc_url(get_main_site_url('assets/images/ish-logo.svg')); ?>" alt="Infinity Softhub Technologies" width="230" height="58">
                    <?php
                }
                ?>
            </a>

            <div class="ish-nav-panel" id="navMenu">
                <button class="mobile-close-btn" id="navCloseBtn" type="button" aria-label="<?php esc_attr_e('Close navigation', 'ish-blog-theme'); ?>">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'ish-nav-menu',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => 'ish_blog_primary_menu_fallback',
                        'depth'          => 2,
                    )
                );
                ?>
            </div>

            <button class="nav-toggle" id="navToggle" type="button" aria-controls="navMenu" aria-expanded="false" aria-label="<?php esc_attr_e('Open navigation', 'ish-blog-theme'); ?>">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </button>
        </div>
    </nav>
    <div class="mobile-overlay" id="mobileOverlay" aria-hidden="true"></div>
</header>
