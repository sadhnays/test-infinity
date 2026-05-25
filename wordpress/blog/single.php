<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage ISH_Blog_Theme
 */

get_header();

// Track views
set_post_views(get_the_ID());

// Get post data
$post_id = get_the_ID();
$categories = get_the_category();
$tags = get_the_tags();
$author_id = get_post_field('post_author', $post_id);
$author_name = get_the_author();
$author_avatar = get_avatar_url($author_id, array('size' => 80));
$author_bio = get_the_author_meta('description', $author_id);
$views = get_post_views($post_id);
?>

<style>
/* ===== Premium Single Post Page Styles ===== */
.post-detail-section {
    background: #020B1E;
    color: var(--text-light, #F8FAFC);
    font-family: 'Inter', sans-serif;
    padding-top: 100px;
    position: relative;
    overflow: hidden;
}

.post-detail-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 600px;
    background: radial-gradient(circle at top, rgba(0, 102, 255, 0.15) 0%, transparent 60%);
    pointer-events: none;
    z-index: 1;
}

.post-hero {
    position: relative;
    padding: 60px 0 40px;
    text-align: center;
    z-index: 2;
}

.post-hero .breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
    font-size: 0.9rem;
    color: var(--text-gray, #94A3B8);
}

.post-hero .breadcrumb a {
    color: var(--accent, #00E5FF);
    text-decoration: none;
    transition: var(--transition, all 0.3s);
}

.post-hero .breadcrumb a:hover {
    color: var(--white, #fff);
}

.post-category {
    display: inline-block;
    padding: 6px 16px;
    background: rgba(0, 229, 255, 0.1);
    color: var(--accent, #00E5FF);
    border: 1px solid rgba(0, 229, 255, 0.2);
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.post-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2rem, 4vw, 3.25rem);
    font-weight: 700;
    color: var(--white, #fff);
    line-height: 1.25;
    max-width: 900px;
    margin: 0 auto 25px;
}

.post-meta {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    color: var(--text-gray, #94A3B8);
    font-size: 0.9rem;
}

.post-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.post-meta-item i {
    color: var(--accent, #00E5FF);
}

.post-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px 20px 80px;
    position: relative;
    z-index: 2;
}

.back-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 30px;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: var(--white, #fff);
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    transition: var(--transition, all 0.3s);
}

.back-btn:hover {
    background: var(--primary-gradient, linear-gradient(135deg, #0052D4, #4364F7));
    border-color: transparent;
    transform: translateX(-5px);
    box-shadow: 0 4px 15px rgba(0, 102, 255, 0.3);
}

.featured-image {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 16px;
    margin-bottom: 40px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.featured-placeholder {
    width: 100%;
    height: 400px;
    background: linear-gradient(135deg, #020B1E, #062B6F);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;
    border: 1px solid rgba(255, 255, 255, 0.08);
}

.featured-placeholder i {
    font-size: 64px;
    color: rgba(255, 255, 255, 0.1);
}

.post-content {
    font-size: 1.1rem;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.85);
}

.post-content p {
    margin-bottom: 25px;
}

.post-content h2 {
    font-family: 'Outfit', sans-serif;
    color: var(--white, #fff);
    font-size: 1.8rem;
    margin: 40px 0 20px;
}

.post-content h3 {
    font-family: 'Outfit', sans-serif;
    color: var(--white, #fff);
    font-size: 1.4rem;
    margin: 30px 0 15px;
}

.post-content ul, .post-content ol {
    margin: 25px 0;
    padding-left: 25px;
}

.post-content li {
    margin-bottom: 10px;
}

.post-content a {
    color: var(--accent, #00E5FF);
    text-decoration: underline;
    transition: var(--transition, all 0.3s);
}

.post-content a:hover {
    color: var(--white, #fff);
}

.post-content blockquote {
    border-left: 4px solid var(--accent, #00E5FF);
    padding: 20px 25px;
    margin: 35px 0;
    background: rgba(255, 255, 255, 0.02);
    border-radius: 0 12px 12px 0;
    font-style: italic;
    color: var(--text-gray, #94A3B8);
}

.post-tags-section {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.post-tags-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--white, #fff);
    margin-bottom: 15px;
}

.post-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.post-tag {
    padding: 6px 14px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: var(--text-gray, #94A3B8);
    border-radius: 50px;
    text-decoration: none;
    font-size: 0.85rem;
    transition: var(--transition, all 0.3s);
}

.post-tag:hover {
    background: rgba(0, 229, 255, 0.1);
    color: var(--accent, #00E5FF);
    border-color: rgba(0, 229, 255, 0.3);
}

.post-share {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 40px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
}

.post-share-label {
    font-weight: 600;
    color: var(--white, #fff);
    font-size: 0.95rem;
}

.share-buttons {
    display: flex;
    gap: 10px;
}

.share-btn {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white, #fff);
    text-decoration: none;
    font-size: 0.9rem;
    transition: var(--transition, all 0.3s);
}

.share-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

.facebook { background: #1877F2; }
.twitter { background: #1DA1F2; }
.linkedin { background: #0A66C2; }
.whatsapp { background: #25D366; }

.author-box {
    display: flex;
    align-items: center;
    gap: 24px;
    padding: 30px;
    background: linear-gradient(135deg, rgba(6, 43, 111, 0.4) 0%, rgba(11, 61, 145, 0.4) 100%);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    margin-top: 50px;
    backdrop-filter: blur(10px);
}

.author-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--accent, #00E5FF);
}

.author-info h4 {
    font-family: 'Outfit', sans-serif;
    font-size: 1.2rem;
    color: var(--white, #fff);
    margin-bottom: 8px;
}

.author-info p {
    font-size: 0.95rem;
    color: var(--text-gray, #94A3B8);
    line-height: 1.5;
}

.related-posts {
    margin-top: 70px;
}

.related-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--white, #fff);
    margin-bottom: 30px;
    text-align: center;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.related-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    transition: var(--transition, all 0.3s);
}

.related-card:hover {
    transform: translateY(-5px);
    border-color: rgba(0, 229, 255, 0.3);
    box-shadow: 0 10px 25px rgba(0, 229, 255, 0.1);
}

.related-image {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.related-card-title {
    padding: 15px;
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--white, #fff);
    line-height: 1.4;
    transition: var(--transition, all 0.3s);
}

.related-card:hover .related-card-title {
    color: var(--accent, #00E5FF);
}

@media (max-width: 768px) {
    .post-hero { padding: 40px 0 20px; }
    .post-title { font-size: 2.25rem; }
    .related-grid { grid-template-columns: 1fr; }
    .author-box { flex-direction: column; text-align: center; }
    .post-share { flex-direction: column; align-items: flex-start; gap: 10px; }
}
</style>

<div class="post-detail-section">
    <div class="container">
        <!-- Hero Header -->
        <section class="post-hero">
            <div class="breadcrumb">
                <a href="<?php echo home_url('/'); ?>">Blog</a>
                <span>/</span>
                <span><?php the_title(); ?></span>
            </div>
            <?php if (!empty($categories)): ?>
                <span class="post-category"><?php echo esc_html($categories[0]->name); ?></span>
            <?php endif; ?>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-meta">
                <div class="post-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('F d, Y'); ?></div>
                <div class="post-meta-item"><i class="fas fa-user"></i> <?php the_author(); ?></div>
                <div class="post-meta-item"><i class="fas fa-comment"></i> <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></div>
                <div class="post-meta-item"><i class="fas fa-eye"></i> <?php echo $views; ?> Views</div>
            </div>
        </section>

        <!-- Main Content Area -->
        <div class="post-container">
            <a href="<?php echo home_url('/'); ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Blog</a>
            
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="featured-image">
            <?php else: ?>
                <div class="featured-placeholder"><i class="fas fa-blog"></i></div>
            <?php endif; ?>

            <div class="post-content">
                <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
            </div>

            <!-- Tags Section -->
            <?php if (!empty($tags)): ?>
                <div class="post-tags-section">
                    <h4 class="post-tags-title"><i class="fas fa-tags"></i> Related Topics</h4>
                    <div class="post-tags">
                        <?php foreach ($tags as $tag): ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post-tag"><?php echo esc_html($tag->name); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Share Buttons -->
            <div class="post-share">
                <span class="post-share-label">Share:</span>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank" class="share-btn twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" class="share-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://wa.me/?text=<?php the_permalink(); ?>" target="_blank" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Author Box -->
            <div class="author-box">
                <?php if ($author_avatar): ?>
                    <img src="<?php echo $author_avatar; ?>" alt="<?php echo $author_name; ?>" class="author-avatar">
                <?php endif; ?>
                <div class="author-info">
                    <h4><?php echo $author_name; ?></h4>
                    <p><?php echo $author_bio ?: 'Technology enthusiast at Infinity SoftHub.'; ?></p>
                </div>
            </div>

            <!-- Related Posts -->
            <?php
            $related = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3, 'post__not_in' => array($post_id), 'cat' => !empty($categories) ? $categories[0]->term_id : 0));
            if ($related->have_posts()):
            ?>
                <div class="related-posts">
                    <h3 class="related-title">Related Posts</h3>
                    <div class="related-grid">
                        <?php while ($related->have_posts()): $related->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="related-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="related-image">
                                <?php else: ?>
                                    <div class="related-image" style="background: linear-gradient(135deg, #020B1E, #062B6F);"></div>
                                <?php endif; ?>
                                <h4 class="related-card-title"><?php the_title(); ?></h4>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; wp_reset_postdata(); ?>

            <!-- Comments Section -->
            <?php
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
