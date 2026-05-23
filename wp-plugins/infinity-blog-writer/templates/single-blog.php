<?php
/**
 * Template Name: Single Blog Post - Infinity SoftHub
 * Beautiful single post layout
 */

get_header();
?>

<style>
/* Single Post Hero */
.single-post-hero {
    background: linear-gradient(135deg, #062B6F 0%, #0B3D91 50%, #2563EB 100%);
    padding: 80px 20px 50px;
    text-align: center;
    color: #fff;
    position: relative;
}

.single-post-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.single-post-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 60px 20px;
}

/* Breadcrumb */
.blog-breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 30px;
    font-size: 14px;
    position: relative;
}

.blog-breadcrumb a {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-breadcrumb a:hover {
    color: #fff;
}

.blog-breadcrumb span {
    color: rgba(255,255,255,0.6);
}

/* Post Header */
.post-header {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
}

.post-category {
    display: inline-block;
    padding: 8px 20px;
    background: linear-gradient(135deg, #2563EB, #062B6F);
    color: #fff;
    border-radius: 25px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.post-title {
    font-size: 42px;
    font-weight: 700;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 25px;
}

.post-meta {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    color: rgba(255,255,255,0.9);
    font-size: 15px;
}

.post-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.post-meta-item i {
    color: #3B82F6;
}

/* Featured Image */
.post-featured-image {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 20px;
    margin-bottom: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}

.post-featured-image-placeholder {
    width: 100%;
    height: 400px;
    background: linear-gradient(135deg, #062B6F, #2563EB);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;
}

.post-featured-image-placeholder i {
    font-size: 80px;
    color: rgba(255,255,255,0.3);
}

/* Post Body */
.post-body {
    font-size: 17px;
    line-height: 1.9;
    color: #1E293B;
}

.post-body p {
    margin-bottom: 25px;
}

.post-body h2 {
    color: #062B6F;
    font-size: 28px;
    margin: 40px 0 20px;
}

.post-body h3 {
    color: #062B6F;
    font-size: 22px;
    margin: 30px 0 15px;
}

.post-body ul, .post-body ol {
    margin: 20px 0;
    padding-left: 30px;
}

.post-body li {
    margin-bottom: 10px;
}

.post-body a {
    color: #2563EB;
    text-decoration: underline;
}

.post-body blockquote {
    border-left: 4px solid #2563EB;
    padding: 20px 30px;
    margin: 30px 0;
    background: #F5F7FB;
    border-radius: 0 10px 10px 0;
    font-style: italic;
    color: #64748B;
}

.post-body img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 20px 0;
}

/* Post Tags */
.post-tags-section {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 2px solid #E5EAF3;
}

.post-tags-title {
    font-size: 16px;
    font-weight: 600;
    color: #062B6F;
    margin-bottom: 15px;
}

.post-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.post-tag {
    padding: 8px 18px;
    background: #F5F7FB;
    color: #64748B;
    border-radius: 20px;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
}

.post-tag:hover {
    background: #2563EB;
    color: #fff;
}

/* Share Buttons */
.post-share {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 30px;
}

.post-share-label {
    font-weight: 600;
    color: #062B6F;
}

.share-buttons {
    display: flex;
    gap: 10px;
}

.share-btn {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
}

.share-btn.facebook { background: #1877F2; }
.share-btn.twitter { background: #1DA1F2; }
.share-btn.linkedin { background: #0A66C2; }
.share-btn.whatsapp { background: #25D366; }

.share-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Author Box */
.author-box {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 30px;
    background: linear-gradient(135deg, #062B6F 0%, #0B3D91 100%);
    border-radius: 20px;
    margin-top: 50px;
    color: #fff;
}

.author-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid rgba(255,255,255,0.3);
}

.author-avatar-placeholder {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
}

.author-info h4 {
    font-size: 18px;
    margin-bottom: 5px;
}

.author-info p {
    font-size: 14px;
    opacity: 0.9;
}

/* Related Posts */
.related-posts {
    margin-top: 60px;
}

.related-posts-title {
    font-size: 24px;
    font-weight: 700;
    color: #062B6F;
    margin-bottom: 30px;
    text-align: center;
}

.related-posts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.related-post-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
}

.related-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.related-post-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.related-post-title {
    padding: 15px;
    font-size: 16px;
    font-weight: 600;
    color: #062B6F;
    line-height: 1.4;
}

/* Back Button */
.back-to-blog {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 30px;
    padding: 12px 24px;
    background: #fff;
    color: #062B6F;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.back-to-blog:hover {
    transform: translateX(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.12);
}

/* Responsive */
@media (max-width: 768px) {
    .post-title {
        font-size: 28px;
    }

    .post-meta {
        flex-direction: column;
        gap: 10px;
    }

    .related-posts-grid {
        grid-template-columns: 1fr;
    }

    .author-box {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<!-- Single Post Hero -->
<section class="single-post-hero">
    <div class="single-post-content">
        <!-- Breadcrumb -->
        <div class="blog-breadcrumb">
            <a href="<?php echo home_url('/blog'); ?>">Blog</a>
            <span>/</span>
            <span><?php the_title(); ?></span>
        </div>

        <!-- Post Header -->
        <div class="post-header">
            <?php
            $categories = get_the_category();
            if (!empty($categories)):
                $category = $categories[0];
            ?>
                <span class="post-category"><?php echo esc_html($category->name); ?></span>
            <?php endif; ?>

            <h1 class="post-title"><?php the_title(); ?></h1>

            <div class="post-meta">
                <div class="post-meta-item">
                    <i class="fas fa-calendar-alt"></i>
                    <?php echo get_the_date('F d, Y'); ?>
                </div>
                <div class="post-meta-item">
                    <i class="fas fa-user"></i>
                    <?php the_author(); ?>
                </div>
                <div class="post-meta-item">
                    <i class="fas fa-comment"></i>
                    <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                </div>
                <div class="post-meta-item">
                    <i class="fas fa-eye"></i>
                    <?php echo get_post_views(get_the_ID()); ?> Views
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Post Content -->
<div class="single-post-content">
    <a href="<?php echo home_url('/blog'); ?>" class="back-to-blog">
        <i class="fas fa-arrow-left"></i> Back to Blog
    </a>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('large'); ?>"
             alt="<?php the_title(); ?>"
             class="post-featured-image">
    <?php else: ?>
        <div class="post-featured-image-placeholder">
            <i class="fas fa-blog"></i>
        </div>
    <?php endif; ?>

    <!-- Post Body -->
    <div class="post-body">
        <?php
        the_content();
        ?>
    </div>

    <!-- Post Tags -->
    <?php
    $tags = get_the_tags();
    if (!empty($tags)):
    ?>
        <div class="post-tags-section">
            <h4 class="post-tags-title"><i class="fas fa-tags"></i> Related Topics</h4>
            <div class="post-tags">
                <?php foreach ($tags as $tag): ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post-tag">
                        <?php echo esc_html($tag->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Share Buttons -->
    <div class="post-share">
        <span class="post-share-label">Share this post:</span>
        <div class="share-buttons">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
               target="_blank" class="share-btn facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>"
               target="_blank" class="share-btn twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"
               target="_blank" class="share-btn linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://wa.me/?text=<?php the_permalink(); ?>"
               target="_blank" class="share-btn whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <!-- Author Box -->
    <div class="author-box">
        <?php
        $author_id = get_the_author_meta('ID');
        $author_avatar = get_avatar_url($author_id, array('size' => 80));
        ?>
        <?php if ($author_avatar): ?>
            <img src="<?php echo $author_avatar; ?>" alt="<?php the_author(); ?>" class="author-avatar">
        <?php else: ?>
            <div class="author-avatar-placeholder">
                <i class="fas fa-user"></i>
            </div>
        <?php endif; ?>
        <div class="author-info">
            <h4><?php the_author(); ?></h4>
            <p><?php the_author_meta('description'); ?></p>
        </div>
    </div>

    <!-- Related Posts -->
    <?php
    $related_posts = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'post__not_in' => array(get_the_ID()),
        'cat' => !empty($categories) ? $categories[0]->term_id : 0
    ));

    if ($related_posts->have_posts()):
    ?>
        <div class="related-posts">
            <h3 class="related-posts-title">Related Posts</h3>
            <div class="related-posts-grid">
                <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="related-post-card">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                 alt="<?php the_title(); ?>"
                                 class="related-post-image">
                        <?php else: ?>
                            <div class="related-post-image" style="background: linear-gradient(135deg, #062B6F, #2563EB);"></div>
                        <?php endif; ?>
                        <h4 class="related-post-title"><?php the_title(); ?></h4>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; wp_reset_postdata(); ?>

    <!-- Comments -->
    <?php
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
    ?>
</div>

<?php get_footer(); ?>