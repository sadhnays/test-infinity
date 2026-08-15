<?php
/**
 * Reusable article card.
 *
 * @package Infinity_Softhub_Blog
 */

$primary_category = ish_blog_primary_category();
?>
<article <?php post_class('blog-card'); ?>>
    <a class="blog-card-image-wrapper" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(sprintf(__('Read %s', 'ish-blog-theme'), get_the_title())); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php
            the_post_thumbnail(
                'ish-blog-card',
                array(
                    'class'    => 'blog-card-image',
                    'loading'  => 'lazy',
                    'decoding' => 'async',
                    'alt'      => get_the_title(),
                )
            );
            ?>
        <?php else : ?>
            <span class="blog-card-placeholder" aria-hidden="true"><i class="fas fa-graduation-cap"></i></span>
        <?php endif; ?>
    </a>

    <div class="blog-card-content">
        <?php if ($primary_category) : ?>
            <a class="blog-card-category" href="<?php echo esc_url(get_category_link($primary_category)); ?>"><?php echo esc_html($primary_category->name); ?></a>
        <?php endif; ?>

        <h2 class="blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="blog-card-excerpt"><?php the_excerpt(); ?></div>

        <div class="blog-card-meta">
            <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><i class="far fa-calendar" aria-hidden="true"></i><?php echo esc_html(get_the_date('M j, Y')); ?></time>
            <span><i class="far fa-clock" aria-hidden="true"></i><?php echo esc_html(ish_blog_reading_time()); ?> min read</span>
        </div>

        <a href="<?php the_permalink(); ?>" class="blog-card-read-more">Read article <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</article>

