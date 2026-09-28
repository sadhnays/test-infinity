<?php
// 404.php - Not found page (served by ErrorDocument in .htaccess)
http_response_code(404);
$pageTitle = "Page Not Found | Infinity SoftHub Technologies";
$pageDescription = "The page you are looking for could not be found. Explore our LMS development, AI integration and web development services.";
$robotsMeta = 'noindex, follow';
$activePage = '';

require_once __DIR__ . '/includes/header.php';
?>
<style>
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%);
}
.notfound-links { display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1rem; margin-top:2rem; }
.notfound-links a { display:block; padding:1.25rem 1.5rem; background:#fff; border-radius:12px; box-shadow:0 4px 20px rgba(0,0,0,0.08); color:var(--accent); font-weight:600; text-decoration:none; }
.notfound-links a:hover { transform:translateY(-2px); }
</style>

<section class="page-hero">
    <div class="container">
        <h1>Page <span class="gradient-text">Not Found</span></h1>
        <p>The page you requested has moved or no longer exists.</p>
    </div>
</section>

<section class="section" style="padding:4rem 0;">
    <div class="container" style="max-width:900px;">
        <h2>Popular pages</h2>
        <div class="notfound-links">
            <a href="<?php echo base_url(''); ?>">Home</a>
            <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">LMS &amp; Moodle Development</a>
            <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>">AI &amp; ML LMS Integration</a>
            <a href="<?php echo base_url('demos/sql-playground.php'); ?>">SQL Coding Lab Demo</a>
            <a href="<?php echo base_url('portfolio.php'); ?>">Portfolio</a>
            <a href="<?php echo base_url('blog/'); ?>">Blog</a>
            <a href="<?php echo base_url('contact.php'); ?>">Contact Us</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
