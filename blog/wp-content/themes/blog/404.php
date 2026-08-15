<?php
/**
 * Not found template.
 *
 * @package Infinity_Softhub_Blog
 */

get_header();
?>
<main id="main-content" class="not-found-main" tabindex="-1">
    <div class="container not-found-card">
        <p class="error-code">404</p>
        <h1>We could not find that page</h1>
        <p>The article may have moved. Search the blog or return to the latest insights.</p>
        <?php get_search_form(); ?>
        <div class="not-found-actions">
            <a class="button-primary" href="<?php echo esc_url(home_url('/')); ?>">Visit the blog</a>
            <a class="button-secondary" href="<?php echo esc_url(get_main_site_url()); ?>">Main website</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>

