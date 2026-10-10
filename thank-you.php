<?php
// thank-you.php - shown after a successful contact form submission
$pageTitle = "Thank You | Infinity SoftHub Technologies";
$pageDescription = "Thanks for contacting Infinity SoftHub. Our team will reply within 24 hours.";
$robotsMeta = 'noindex, follow';
$activePage = 'contact';

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$thanksName = $_SESSION['contact_thanks_name'] ?? '';
unset($_SESSION['contact_thanks_name']);

require_once __DIR__ . '/includes/header.php';
?>
<style>
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%);
}
.thanks-steps { display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1rem; margin:2rem 0; }
.thanks-steps div { padding:1.25rem 1.5rem; background:#fff; border-radius:12px; box-shadow:0 4px 20px rgba(0,0,0,0.08); }
.thanks-steps strong { display:block; color:var(--accent); margin-bottom:.4rem; }
.thanks-links { display:flex; flex-wrap:wrap; gap:.75rem; margin-top:1.5rem; }
</style>

<section class="page-hero">
    <div class="container">
        <h1>Thank <span class="gradient-text">You<?php echo $thanksName !== '' ? ', ' . e($thanksName) : ''; ?></span></h1>
        <p>Your message has been sent. We will reply within 24 hours.</p>
    </div>
</section>

<section class="section" style="padding:4rem 0;">
    <div class="container" style="max-width:900px;">
        <h2>What happens next</h2>
        <div class="thanks-steps">
            <div><strong>1. We read your brief</strong>A developer (not a sales bot) reviews your requirements.</div>
            <div><strong>2. We reply within 24 hours</strong>With questions, a suggested approach and a rough estimate.</div>
            <div><strong>3. Quick call (optional)</strong>A short video call to agree scope, timeline and budget.</div>
        </div>

        <p>Need a faster answer? Email <a href="mailto:info@infinitysofthub.com">info@infinitysofthub.com</a> or call <a href="tel:+918130940062">+91-8130940062</a>.</p>

        <h2 style="margin-top:2.5rem;">While you wait</h2>
        <div class="thanks-links">
            <a class="btn btn-outline" href="<?php echo base_url('portfolio.php'); ?>">See our portfolio</a>
            <a class="btn btn-outline" href="<?php echo base_url('case-studies.php'); ?>">Read case studies</a>
            <a class="btn btn-outline" href="<?php echo base_url('demos/sql-playground.php'); ?>">Try the SQL lab demo</a>
            <a class="btn btn-outline" href="<?php echo base_url('blog/'); ?>">Visit the blog</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
