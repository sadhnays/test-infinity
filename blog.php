<?php
// blog.php - Standalone Blog Listing connecting to WordPress
$pageTitle = "Blog | Infinity SoftHub Technologies";
$pageDescription = "Insights, tutorials, and updates from the world of technology";
$activePage = 'blog';

// Load WordPress environment if available
$wp_loaded = false;
if (file_exists(__DIR__ . '/blog/wp-load.php')) {
    define('WP_USE_THEMES', false);
    require_once __DIR__ . '/blog/wp-load.php';
    $wp_loaded = true;
}

// Handle AJAX infinite scroll request
if (isset($_GET['ajax_load_more']) && $wp_loaded) {
    $paged = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged
    );
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            ?>
            <article class="blog-card" data-aos="fade-up">
                <?php if (has_post_thumbnail()): ?>
                    <div class="blog-card-image-wrapper">
                        <img src="<?php the_post_thumbnail_url('medium_large'); ?>"
                             alt="<?php the_title(); ?>"
                             class="blog-card-image">
                    </div>
                <?php else: ?>
                    <div class="blog-card-image-wrapper" style="background: linear-gradient(135deg, #020B1E, #062B6F); height: 240px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-blog" style="font-size: 48px; color: rgba(255,255,255,0.1);"></i>
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
                </div>
            </article>
            <?php
        }
    }
    exit;
}

require_once 'includes/header.php';
?>

<style>
/* ===== Premium Light Blog Page Styles ===== */
.blog-list-section {
    background: #F8FAFC;
    color: #1E293B;
    font-family: 'Inter', sans-serif;
    padding-top: 120px;
    position: relative;
    overflow: hidden;
}

.blog-list-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 600px;
    background: radial-gradient(circle at top, rgba(37, 99, 235, 0.05) 0%, transparent 60%);
    pointer-events: none;
    z-index: 1;
}

/* Page Hero */
.page-hero-blog {
    position: relative;
    padding: 60px 20px 40px;
    text-align: center;
    z-index: 2;
}

.page-hero-blog h1 {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    color: #0F172A;
    margin-bottom: 15px;
}

.page-hero-blog p {
    font-size: 1.1rem;
    color: #64748B;
    max-width: 600px;
    margin: 0 auto;
}

/* Blog Container */
.blog-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px 80px;
    position: relative;
    z-index: 2;
}

/* Blog Grid */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 30px;
}

/* Blog Card */
.blog-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    overflow: hidden;
    transition: var(--transition, all 0.3s);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
}

.blog-card:hover {
    transform: translateY(-8px);
    border-color: rgba(37, 99, 235, 0.3);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.blog-card-image {
    width: 100%;
    height: 240px;
    object-fit: cover;
    transition: var(--transition, all 0.3s);
}

.blog-card:hover .blog-card-image {
    transform: scale(1.05);
}

.blog-card-image-wrapper {
    overflow: hidden;
    position: relative;
    border-bottom: 1px solid #E2E8F0;
}

.blog-card-image-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 60%, rgba(0, 0, 0, 0.05));
}

.blog-card-content {
    padding: 25px;
}

.blog-card-category {
    display: inline-block;
    padding: 4px 12px;
    background: rgba(37, 99, 235, 0.08);
    color: #2563EB;
    border: 1px solid rgba(37, 99, 235, 0.15);
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.blog-card-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.35rem;
    font-weight: 700;
    color: #0F172A;
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
    transition: var(--transition, all 0.3s);
}

.blog-card-title a:hover {
    color: #2563EB;
}

.blog-card-excerpt {
    color: #475569;
    font-size: 0.95rem;
    line-height: 1.6;
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
    border-top: 1px solid #F1F5F9;
}

.blog-card-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #64748B;
    font-size: 0.85rem;
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
    font-size: 0.9rem;
    text-decoration: none;
    transition: var(--transition, all 0.3s);
}

.blog-card-read-more:hover {
    gap: 12px;
    color: #1D4ED8;
}

.no-posts {
    text-align: center;
    padding: 80px 20px;
}

.no-posts i {
    font-size: 64px;
    color: #CBD5E1;
    margin-bottom: 20px;
    display: block;
}

.no-posts h3 {
    color: #475569;
    margin-bottom: 10px;
}

/* Spinner anim */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<div class="blog-list-section">
    <!-- Hero Section -->
    <section class="page-hero-blog">
        <div class="badge badge-primary badge-mb" data-aos="fade-up">
            <i class="fas fa-blog"></i> Infinity SoftHub Blog
        </div>
        <h1 data-aos="fade-up">Latest <span class="gradient-text">Insights & Trends</span></h1>
        <p data-aos="fade-up">Explore tutorials, industry updates, and expert articles on technology and development.</p>
    </section>

    <!-- Blog Content -->
    <div class="blog-container">
        <?php
        if ($wp_loaded) {
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'paged' => 1
            );
            $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()):
            ?>
                <div class="blog-grid">
                    <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
                        <article class="blog-card" data-aos="fade-up">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="blog-card-image-wrapper">
                                    <img src="<?php the_post_thumbnail_url('medium_large'); ?>"
                                         alt="<?php the_title(); ?>"
                                         class="blog-card-image">
                                </div>
                            <?php else: ?>
                                <div class="blog-card-image-wrapper" style="background: linear-gradient(135deg, #020B1E, #062B6F); height: 240px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-blog" style="font-size: 48px; color: rgba(255,255,255,0.1);"></i>
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
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Loading Indicator -->
                <div id="blog-loading-indicator" style="display: none; text-align: center; padding: 40px 0; width: 100%; z-index: 10;">
                    <div style="margin: 0 auto; width: 40px; height: 40px; border: 3px solid rgba(255, 255, 255, 0.1); border-top: 3px solid var(--accent, #00E5FF); border-radius: 50%; animation: spin 1s linear infinite;"></div>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var page = 2;
                    var loading = false;
                    var maxPages = <?php echo $wp_query->max_num_pages; ?>;

                    if (maxPages <= 1) return;

                    window.addEventListener('scroll', function() {
                        if (loading || page > maxPages) return;

                        if ((window.innerHeight + window.scrollY) >= (document.documentElement.scrollHeight - 300)) {
                            loading = true;
                            document.getElementById('blog-loading-indicator').style.display = 'block';

                            var xhr = new XMLHttpRequest();
                            xhr.open('GET', 'blog.php?ajax_load_more=1&page=' + page, true);
                            xhr.onload = function() {
                                if (xhr.status >= 200 && xhr.status < 400) {
                                    var response = xhr.responseText.trim();
                                    if (response !== '') {
                                        var tempDiv = document.createElement('div');
                                        tempDiv.innerHTML = response;
                                        
                                        var grid = document.querySelector('.blog-grid');
                                        if (grid) {
                                            while (tempDiv.firstChild) {
                                                grid.appendChild(tempDiv.firstChild);
                                            }
                                        }
                                        page++;
                                        loading = false;
                                        if (typeof AOS !== 'undefined') {
                                            AOS.refresh();
                                        }
                                    } else {
                                        maxPages = page - 1;
                                    }
                                }
                                document.getElementById('blog-loading-indicator').style.display = 'none';
                            };
                            xhr.send();
                        }
                    });
                });
                </script>

            <?php else: ?>
                <div class="no-posts">
                    <i class="fas fa-blog"></i>
                    <h3>No posts found</h3>
                    <p>Check back soon for new content!</p>
                </div>
            <?php endif;
            wp_reset_postdata();
        } else {
            // Fallback to local posts.json if wordpress is not installed
            $blogFile = __DIR__ . '/blog-admin/data/posts.json';
            $posts = file_exists($blogFile) ? json_decode(file_get_contents($blogFile), true) : [];
            $posts = array_filter($posts, fn($p) => isset($p['status']) && $p['status'] === 'published');
            
            if (!empty($posts)):
                usort($posts, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));
            ?>
                <div class="blog-grid">
                    <?php foreach ($posts as $post): ?>
                        <article class="blog-card" data-aos="fade-up">
                            <?php if (!empty($post['featured_image'])): ?>
                                <div class="blog-card-image-wrapper">
                                    <img src="<?= htmlspecialchars($post['featured_image']) ?>"
                                         alt="<?= htmlspecialchars($post['title']) ?>"
                                         class="blog-card-image">
                                </div>
                            <?php else: ?>
                                <div class="blog-card-image-wrapper" style="background: linear-gradient(135deg, #020B1E, #062B6F); height: 240px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-blog" style="font-size: 48px; color: rgba(255,255,255,0.1);"></i>
                                </div>
                            <?php endif; ?>

                            <div class="blog-card-content">
                                <span class="blog-card-category"><?= htmlspecialchars($post['category']) ?></span>
                                <h2 class="blog-card-title">
                                    <a href="blog/index.php?post=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a>
                                </h2>
                                <p class="blog-card-excerpt"><?= htmlspecialchars($post['excerpt'] ?? substr(strip_tags($post['content']), 0, 120) . '...') ?></p>

                                <div class="blog-card-meta">
                                    <span><i class="fas fa-calendar"></i> <?= date('M d, Y', strtotime($post['created_at'])) ?></span>
                                    <a href="blog/index.php?post=<?= $post['id'] ?>" class="blog-card-read-more">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="no-posts">
                    <i class="fas fa-blog"></i>
                    <h3>No posts found</h3>
                    <p>Check back soon for new content!</p>
                </div>
            <?php endif;
        }
        ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
