<?php
/**
 * Main listing template for the blog, archives, and search results.
 *
 * @package Infinity_Softhub_Blog
 */

get_header();

$hero_title       = __('Moodle, LMS & AI Insights', 'ish-blog-theme');
$hero_description = __('Practical guides on custom learning platforms, Moodle development, AI-powered education, integrations, and scalable software.', 'ish-blog-theme');
$hero_label       = __('Infinity Softhub Technologies Blog', 'ish-blog-theme');

if (is_search()) {
    $hero_title       = sprintf(__('Search results for: %s', 'ish-blog-theme'), get_search_query());
    $hero_description = __('Browse matching articles, tutorials, and technical insights from our team.', 'ish-blog-theme');
    $hero_label       = __('Search', 'ish-blog-theme');
} elseif (is_archive()) {
    $hero_title       = wp_strip_all_tags(get_the_archive_title());
    $archive_text     = wp_strip_all_tags(get_the_archive_description());
    $hero_description = $archive_text ?: __('Browse focused articles and practical guidance from our LMS and software specialists.', 'ish-blog-theme');
    $hero_label       = __('Topic archive', 'ish-blog-theme');
}
?>

<main id="main-content" class="blog-main" tabindex="-1">
    <section class="blog-hero" aria-labelledby="blog-page-title">
        <div class="blog-hero-shape blog-hero-shape-one" aria-hidden="true"></div>
        <div class="blog-hero-shape blog-hero-shape-two" aria-hidden="true"></div>
        <div class="container blog-hero-inner">
            <p class="blog-eyebrow"><i class="fas fa-book-open" aria-hidden="true"></i><?php echo esc_html($hero_label); ?></p>
            <h1 id="blog-page-title"><?php echo esc_html($hero_title); ?></h1>
            <p class="blog-hero-description"><?php echo esc_html($hero_description); ?></p>
            <div class="blog-hero-actions">
                <?php get_search_form(); ?>
                <a class="blog-hero-cta" href="<?php echo esc_url(get_main_site_url('contact.php')); ?>">Discuss Your LMS Project <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <?php
    $topic_categories = get_categories(
        array(
            'hide_empty' => true,
            'number'     => 6,
            'orderby'    => 'count',
            'order'      => 'DESC',
        )
    );
    if (!is_search() && !empty($topic_categories)) :
        ?>
        <nav class="topic-strip" aria-label="<?php esc_attr_e('Blog topics', 'ish-blog-theme'); ?>">
            <div class="container topic-strip-inner">
                <span class="topic-label"><?php esc_html_e('Explore topics:', 'ish-blog-theme'); ?></span>
                <?php foreach ($topic_categories as $topic_category) : ?>
                    <a href="<?php echo esc_url(get_category_link($topic_category)); ?>"><?php echo esc_html($topic_category->name); ?></a>
                <?php endforeach; ?>
            </div>
        </nav>
    <?php endif; ?>

    <section class="blog-list-section" aria-labelledby="latest-articles-title">
        <div class="blog-container">
            <header class="section-heading">
                <div>
                    <p class="section-kicker"><?php echo is_home() ? esc_html__('Knowledge for better learning platforms', 'ish-blog-theme') : esc_html__('Browse our knowledge base', 'ish-blog-theme'); ?></p>
                    <h2 id="latest-articles-title"><?php echo is_home() ? esc_html__('Latest Articles', 'ish-blog-theme') : esc_html__('Articles', 'ish-blog-theme'); ?></h2>
                </div>
                <?php if (is_home()) : ?>
                    <p>Technical guidance written for schools, universities, training organizations, and businesses.</p>
                <?php endif; ?>
            </header>

            <?php if (have_posts()) : ?>
                <div class="blog-grid">
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/post', 'card');
                    endwhile;
                    ?>
                </div>

                <?php
                the_posts_pagination(
                    array(
                        'mid_size'           => 1,
                        'prev_text'          => '<i class="fas fa-arrow-left" aria-hidden="true"></i><span>' . esc_html__('Previous', 'ish-blog-theme') . '</span>',
                        'next_text'          => '<span>' . esc_html__('Next', 'ish-blog-theme') . '</span><i class="fas fa-arrow-right" aria-hidden="true"></i>',
                        'screen_reader_text' => __('Articles navigation', 'ish-blog-theme'),
                    )
                );
                ?>
            <?php else : ?>
                <div class="no-posts">
                    <span class="no-posts-icon" aria-hidden="true"><i class="fas fa-magnifying-glass"></i></span>
                    <h2><?php esc_html_e('No articles found', 'ish-blog-theme'); ?></h2>
                    <p><?php esc_html_e('Try another search or return to the latest articles.', 'ish-blog-theme'); ?></p>
                    <a class="button-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('View all articles', 'ish-blog-theme'); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="blog-bottom-cta" aria-labelledby="blog-cta-title">
        <div class="container blog-bottom-cta-inner">
            <div>
                <p class="section-kicker">Need a solution built around your workflow?</p>
                <h2 id="blog-cta-title">Turn your LMS idea into a scalable platform</h2>
                <p>Work directly with an experienced Moodle, LMS, AI, and full-stack development team.</p>
            </div>
            <a class="button-light" href="<?php echo esc_url(get_main_site_url('contact.php')); ?>">Start a Conversation <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
