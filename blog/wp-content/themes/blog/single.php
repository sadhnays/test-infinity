<?php
/**
 * Single article template.
 *
 * @package Infinity_Softhub_Blog
 */

get_header();
?>

<main id="main-content" class="single-main" tabindex="-1">
    <?php
    while (have_posts()) :
        the_post();

        $post_id          = get_the_ID();
        $primary_category = ish_blog_primary_category($post_id);
        $published_time   = get_the_date(DATE_W3C);
        $modified_time    = get_the_modified_date(DATE_W3C);
        $author_id        = (int) get_the_author_meta('ID');
        ?>
        <article <?php post_class('single-article'); ?>>
            <header class="post-hero">
                <div class="container post-hero-inner">
                    <nav class="breadcrumbs" aria-label="<?php esc_attr_e('Breadcrumb', 'ish-blog-theme'); ?>">
                        <a href="<?php echo esc_url(get_main_site_url()); ?>">Home</a>
                        <span aria-hidden="true">/</span>
                        <a href="<?php echo esc_url(home_url('/')); ?>">Blog</a>
                        <?php if ($primary_category) : ?>
                            <span aria-hidden="true">/</span>
                            <a href="<?php echo esc_url(get_category_link($primary_category)); ?>"><?php echo esc_html($primary_category->name); ?></a>
                        <?php endif; ?>
                    </nav>

                    <?php if ($primary_category) : ?>
                        <a class="post-category" href="<?php echo esc_url(get_category_link($primary_category)); ?>"><?php echo esc_html($primary_category->name); ?></a>
                    <?php endif; ?>

                    <h1><?php the_title(); ?></h1>
                    <?php if (has_excerpt()) : ?>
                        <p class="post-deck"><?php echo esc_html(get_the_excerpt()); ?></p>
                    <?php endif; ?>

                    <div class="post-meta">
                        <a class="post-author-mini" href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
                            <?php echo get_avatar($author_id, 42, '', get_the_author(), array('loading' => 'eager')); ?>
                            <span><small>Written by</small><?php echo esc_html(get_the_author()); ?></span>
                        </a>
                        <span><i class="far fa-calendar" aria-hidden="true"></i><time datetime="<?php echo esc_attr($published_time); ?>"><?php echo esc_html(get_the_date('F j, Y')); ?></time></span>
                        <span><i class="far fa-clock" aria-hidden="true"></i><?php echo esc_html(ish_blog_reading_time($post_id)); ?> min read</span>
                    </div>
                </div>
            </header>

            <div class="container single-layout">
                <div class="single-content-column">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="post-featured-image">
                            <?php
                            the_post_thumbnail(
                                'ish-blog-hero',
                                array(
                                    'loading'       => 'eager',
                                    'fetchpriority' => 'high',
                                    'alt'           => get_the_title(),
                                )
                            );
                            ?>
                            <?php if (wp_get_attachment_caption(get_post_thumbnail_id())) : ?>
                                <figcaption><?php echo esc_html(wp_get_attachment_caption(get_post_thumbnail_id())); ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    <?php endif; ?>

                    <div class="post-content entry-content">
                        <?php the_content(); ?>
                        <?php
                        wp_link_pages(
                            array(
                                'before' => '<nav class="page-links" aria-label="' . esc_attr__('Article pages', 'ish-blog-theme') . '"><span>' . esc_html__('Pages:', 'ish-blog-theme') . '</span>',
                                'after'  => '</nav>',
                            )
                        );
                        ?>
                    </div>

                    <?php if ($published_time !== $modified_time) : ?>
                        <p class="post-updated"><i class="fas fa-rotate" aria-hidden="true"></i>Last updated <time datetime="<?php echo esc_attr($modified_time); ?>"><?php echo esc_html(get_the_modified_date('F j, Y')); ?></time></p>
                    <?php endif; ?>

                    <?php $tags = get_the_tags(); ?>
                    <?php if ($tags) : ?>
                        <div class="post-tags" aria-label="<?php esc_attr_e('Article tags', 'ish-blog-theme'); ?>">
                            <span><i class="fas fa-tags" aria-hidden="true"></i><?php esc_html_e('Topics', 'ish-blog-theme'); ?></span>
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag)); ?>"><?php echo esc_html($tag->name); ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <section class="article-cta" aria-labelledby="article-cta-title">
                        <div class="article-cta-icon" aria-hidden="true"><i class="fas fa-layer-group"></i></div>
                        <div>
                            <p>Need help with your learning platform?</p>
                            <h2 id="article-cta-title">Build a custom LMS solution around your real requirements</h2>
                            <a href="<?php echo esc_url(get_main_site_url('contact.php')); ?>">Discuss your project <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </section>

                    <section class="author-box" aria-labelledby="author-box-title">
                        <?php echo get_avatar($author_id, 96, '', get_the_author(), array('loading' => 'lazy')); ?>
                        <div>
                            <p class="author-label">About the author</p>
                            <h2 id="author-box-title"><?php echo esc_html(get_the_author()); ?></h2>
                            <p><?php echo esc_html(get_the_author_meta('description') ?: 'Moodle, LMS, AI, and full-stack development specialist at Infinity Softhub Technologies.'); ?></p>
                            <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">View all articles</a>
                        </div>
                    </section>

                    <div class="post-share" aria-label="<?php esc_attr_e('Share this article', 'ish-blog-theme'); ?>">
                        <strong>Share this article</strong>
                        <div class="share-buttons">
                            <a href="<?php echo esc_url(add_query_arg('u', get_permalink(), 'https://www.facebook.com/sharer/sharer.php')); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="<?php echo esc_url(add_query_arg(array('url' => get_permalink(), 'text' => get_the_title()), 'https://twitter.com/intent/tweet')); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on X"><i class="fab fa-x-twitter" aria-hidden="true"></i></a>
                            <a href="<?php echo esc_url(add_query_arg('url', get_permalink(), 'https://www.linkedin.com/sharing/share-offsite/')); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            <a href="<?php echo esc_url('https://wa.me/?text=' . rawurlencode(get_the_title() . ' ' . get_permalink())); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-direction">' . esc_html__('Previous article', 'ish-blog-theme') . '</span><span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-direction">' . esc_html__('Next article', 'ish-blog-theme') . '</span><span class="nav-title">%title</span>',
                        )
                    );
                    ?>

                    <?php
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                    ?>
                </div>

                <aside class="post-sidebar" aria-label="<?php esc_attr_e('Related resources', 'ish-blog-theme'); ?>">
                    <section class="sidebar-card sidebar-service-card">
                        <span class="sidebar-icon" aria-hidden="true"><i class="fas fa-graduation-cap"></i></span>
                        <p class="sidebar-kicker">Custom learning solutions</p>
                        <h2>Moodle, LMS &amp; AI development</h2>
                        <p>From custom plugins and coding labs to AI assistants, integrations, and cloud deployment.</p>
                        <a href="<?php echo esc_url(get_main_site_url('services/moodle-all-development.php')); ?>">Explore LMS services <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                    </section>

                    <?php
                    $sidebar_categories = get_categories(array('hide_empty' => true, 'number' => 8));
                    if ($sidebar_categories) :
                        ?>
                        <nav class="sidebar-card sidebar-topics" aria-labelledby="sidebar-topics-title">
                            <h2 id="sidebar-topics-title">Explore Topics</h2>
                            <?php foreach ($sidebar_categories as $sidebar_category) : ?>
                                <a href="<?php echo esc_url(get_category_link($sidebar_category)); ?>"><span><?php echo esc_html($sidebar_category->name); ?></span><small><?php echo esc_html($sidebar_category->count); ?></small></a>
                            <?php endforeach; ?>
                        </nav>
                    <?php endif; ?>
                </aside>
            </div>
        </article>

        <?php
        $related_args = array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 3,
            'post__not_in'        => array($post_id),
            'ignore_sticky_posts' => true,
        );
        if ($primary_category) {
            $related_args['category__in'] = array($primary_category->term_id);
        }
        $related_posts = new WP_Query($related_args);
        if (!$related_posts->have_posts() && $primary_category) {
            unset($related_args['category__in']);
            $related_posts = new WP_Query($related_args);
        }
        if ($related_posts->have_posts()) :
            ?>
            <section class="related-posts-section" aria-labelledby="related-posts-title">
                <div class="blog-container">
                    <header class="section-heading compact">
                        <div>
                            <p class="section-kicker">Continue learning</p>
                            <h2 id="related-posts-title">Related Articles</h2>
                        </div>
                    </header>
                    <div class="blog-grid related-grid">
                        <?php
                        while ($related_posts->have_posts()) :
                            $related_posts->the_post();
                            get_template_part('template-parts/post', 'card');
                        endwhile;
                        ?>
                    </div>
                </div>
            </section>
            <?php
            wp_reset_postdata();
        endif;
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
