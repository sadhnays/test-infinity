<?php
/**
 * Accessible search form.
 *
 * @package Infinity_Softhub_Blog
 */
?>
<?php $search_id = wp_unique_id('blog-search-'); ?>
<form role="search" method="get" class="blog-search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="<?php echo esc_attr($search_id); ?>"><?php esc_html_e('Search articles', 'ish-blog-theme'); ?></label>
    <i class="fas fa-magnifying-glass" aria-hidden="true"></i>
    <input id="<?php echo esc_attr($search_id); ?>" type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="Search Moodle, LMS and AI articles" required>
    <button type="submit"><?php esc_html_e('Search', 'ish-blog-theme'); ?></button>
</form>
