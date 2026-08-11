<?php
/**
 * Blog Display - Infinity SoftHub
 * Shows published blog posts on your website
 */

$blogFile = __DIR__ . '/../blog-admin/data/posts.json';
$posts = file_exists($blogFile) ? json_decode(file_get_contents($blogFile), true) : [];
$posts = array_filter($posts, fn($p) => $p['status'] === 'published');
usort($posts, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));

$pageTitle = "Blog - Infinity SoftHub";
$pageDescription = "Latest insights, tutorials, and updates from Infinity SoftHub Technologies.";
$activePage = 'blog';

require_once __DIR__ . '/../includes/header.php';
?>
    <style>
        /* Blog Specific Styles */
        .blog-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            padding: 100px 0 60px;
            text-align: center;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .blog-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .blog-hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
        }

        .blog-hero p {
            font-size: 18px;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .blog-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .blog-card-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        }

        .blog-card-image.placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: rgba(255,255,255,0.5);
        }

        .blog-card-content {
            padding: 25px;
        }

        .blog-card-category {
            display: inline-block;
            padding: 6px 14px;
            background: rgba(37, 99, 235, 0.1);
            color: var(--accent);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .blog-card-title {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .blog-card-title a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease;
        }

        .blog-card-title a:hover {
            color: var(--accent);
        }

        .blog-card-excerpt {
            color: var(--text-gray);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .blog-card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid var(--border);
            font-size: 13px;
            color: var(--text-gray);
        }

        .blog-card-meta i {
            margin-right: 6px;
            color: var(--accent);
        }

        .blog-card-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 12px;
        }

        .blog-tag {
            padding: 4px 12px;
            background: var(--bg-light);
            border-radius: 15px;
            font-size: 12px;
            color: var(--text-gray);
        }

        /* Single Post Page */
        .single-post {
            max-width: 800px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .single-post-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .single-post-category {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(37, 99, 235, 0.1);
            color: var(--accent);
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .single-post-title {
            font-size: 42px;
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.3;
            margin-bottom: 20px;
        }

        .single-post-meta {
            display: flex;
            justify-content: center;
            gap: 30px;
            color: var(--text-gray);
            font-size: 14px;
        }

        .single-post-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .single-post-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: var(--radius-lg);
            margin-bottom: 40px;
        }

        .single-post-content {
            font-size: 17px;
            line-height: 1.8;
            color: var(--text-dark);
        }

        .single-post-content p {
            margin-bottom: 20px;
        }

        .back-to-blog {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 40px;
            padding: 12px 24px;
            background: var(--primary);
            color: var(--white);
            border-radius: var(--radius-md);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .back-to-blog:hover {
            background: var(--accent);
            transform: translateX(-5px);
        }

        /* No Posts */
        .no-posts {
            text-align: center;
            padding: 80px 20px;
        }

        .no-posts i {
            font-size: 64px;
            color: var(--border);
            margin-bottom: 20px;
        }

        .no-posts h3 {
            color: var(--text-gray);
            margin-bottom: 10px;
        }

        .no-posts p {
            color: var(--text-gray);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .blog-hero h1 {
                font-size: 32px;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .single-post-title {
                font-size: 28px;
            }

            .single-post-meta {
                flex-direction: column;
                gap: 10px;
            }
        }


    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="container">
            <h1>Our Blog</h1>
            <p>Insights, tutorials, and updates from the world of technology</p>
        </div>
    </section>

    <!-- Blog Content -->
    <div class="blog-container">
        <?php if (empty($posts)): ?>
            <div class="no-posts">
                <i class="fas fa-blog"></i>
                <h3>No posts yet</h3>
                <p>Check back soon for new content!</p>
            </div>
        <?php else: ?>
            <div class="blog-grid">
                <?php foreach ($posts as $post): ?>
                    <article class="blog-card">
                        <?php if (!empty($post['featured_image'])): ?>
                            <img src="<?= htmlspecialchars($post['featured_image']) ?>"
                                 alt="<?= htmlspecialchars($post['title']) ?>"
                                 class="blog-card-image">
                        <?php else: ?>
                            <div class="blog-card-image placeholder">
                                <i class="fas fa-article"></i>
                            </div>
                        <?php endif; ?>

                        <div class="blog-card-content">
                            <span class="blog-card-category"><?= htmlspecialchars($post['category']) ?></span>
                            <h2 class="blog-card-title">
                                <a href="?post=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a>
                            </h2>
                            <p class="blog-card-excerpt"><?= htmlspecialchars($post['excerpt'] ?? substr(strip_tags($post['content']), 0, 120) . '...') ?></p>

                            <div class="blog-card-meta">
                                <span><i class="fas fa-calendar"></i> <?= date('M d, Y', strtotime($post['created_at'])) ?></span>
                            </div>

                            <?php if (!empty($post['tags'])): ?>
                                <div class="blog-card-tags">
                                    <?php foreach ($post['tags'] as $tag): ?>
                                        <span class="blog-tag"><?= htmlspecialchars($tag) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>