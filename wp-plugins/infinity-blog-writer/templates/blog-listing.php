<?php
/**
 * Template Name: Blog Listing - Infinity SoftHub
 * Description: Beautiful grid layout for blog posts
 * Version: 1.0.0
 */

get_header();
?>

<style>
/* Blog Hero Section */
.blog-hero-section {
    background: linear-gradient(135deg, #062B6F 0%, #0B3D91 50%, #2563EB 100%);
    padding: 100px 20px 60px;
    text-align: center;
    color: #fff;
    position: relative;
}

.blog-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.blog-hero-section h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
    position: relative;
}

.blog-hero-section p {
    font-size: 18px;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
}

/* Blog Container */
.blog-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
}

/* Blog Grid */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 30px;
}

/* Blog Card */
.blog-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.blog-card-image {
    width: 100%;
    height: 240px;
    object-fit: cover;
    transition: all 0.3s ease;
}

.blog-card:hover .blog-card-image {
    transform: scale(1.05);
}

.blog-card-image-wrapper {
    overflow: hidden;
    position: relative;
}

.blog-card-image-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.3));
}

.blog-card-content {
    padding: 25px;
}

.blog-card-category {
    display: inline-block;
    padding: 6px 16px;
    background: linear-gradient(135deg, #2563EB 0%, #062B6F 100%);
    color: #fff;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.blog-card-title {
    font-size: 22px;
    font-weight: 700;
    color: #062B6F;
    margin-bottom: 12px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-card-title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-card-title a:hover {
    color: #2563EB;
}

.blog-card-excerpt {
    color: #64748B;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-card-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid #E5EAF3;
}

.blog-card-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #64748B;
    font-size: 14px;
}

.blog-card-date i {
    color: #2563EB;
}

.blog-card-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #2563EB;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.blog-card-read-more:hover {
    gap: 12px;
    color: #062B6F;
}

.blog-card-tags {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 15px;
}

.blog-tag {
    padding: 4px 12px;
    background: #F5F7FB;
    border-radius: 15px;
    font-size: 12px;
    color: #64748B;
}

/* No Posts */
.no-posts {
    text-align: center;
    padding: 80px 20px;
}

.no-posts i {
    font-size: 64px;
    color: #E5EAF3;
    margin-bottom: 20px;
    display: block;
}

.no-posts h3 {
    color: #64748B;
    margin-bottom: 10px;
}

/* Pagination */
.blog-pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 50px;
}

.blog-pagination a,
.blog-pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.blog-pagination a {
    background: #fff;
    color: #062B6F;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

.blog-pagination a:hover {
    background: #2563EB;
    color: #fff;
}

.blog-pagination span {
    background: linear-gradient(135deg, #2563EB, #062B6F);
    color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
    .blog-hero-section h1 {
        font-size: 32px;
    }

    .blog-grid {
        grid-template-columns: 1fr;
    }

    .blog-card-image {
        height: 200px;
    }
}
</style>

<!-- Hero Section -->
<section class="blog-hero-section">
    <h1>Our Blog</h1>
    <p>Insights, tutorials, and updates from the world of technology</p>
</section>

<!-- Blog Content -->
<div class="blog-container">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 9,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()):
    ?>
        <div class="blog-grid">
            <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
                <article class="blog-card">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="blog-card-image-wrapper">
                            <img src="<?php the_post_thumbnail_url('medium_large'); ?>"
                                 alt="<?php the_title(); ?>"
                                 class="blog-card-image">
                        </div>
                    <?php else: ?>
                        <div class="blog-card-image-wrapper" style="background: linear-gradient(135deg, #062B6F, #2563EB); height: 240px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-blog" style="font-size: 48px; color: rgba(255,255,255,0.5);"></i>
                        </div>
                    <?php endif; ?>

                    <div class="blog-card-content">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)):
                            $category = $categories[0];
                        ?>
                            <span class="blog-card-category"><?php echo esc_html($category->name); ?></span>
                        <?php endif; ?>

                        <h2 class="blog-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="blog-card-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                        </p>

                        <div class="blog-card-meta">
                            <span class="blog-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo get_the_date('M d, Y'); ?>
                            </span>
                            <a href="<?php the_permalink(); ?>" class="blog-card-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <?php
                        $tags = get_the_tags();
                        if (!empty($tags)):
                        ?>
                            <div class="blog-card-tags">
                                <?php foreach (array_slice($tags, 0, 3) as $tag): ?>
                                    <span class="blog-tag"><?php echo esc_html($tag->name); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php if ($blog_query->max_num_pages > 1): ?>
            <div class="blog-pagination">
                <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                    'mid_size' => 2
                ));
                ?>
            </div>
        <?php endif; ?>

    <?php else: ?>
        <div class="no-posts">
            <i class="fas fa-blog"></i>
            <h3>No posts found</h3>
            <p>Check back soon for new content!</p>
        </div>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>