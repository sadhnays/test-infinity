<?php
$pageTitle = 'Privacy Policy | Infinity SoftHub Technologies';
$pageDescription = 'Infinity SoftHub Technologies Privacy Policy - Learn how we collect, use, and protect your personal information.';
$pageKeywords = 'privacy policy, data protection, GDPR';
$activePage = 'privacy';
require_once 'includes/header.php';
?>

<style>
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%),
                url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920&h=400&fit=crop') center/cover;
}
</style>

<section class="page-hero">
    <div class="container">
        <h1>Privacy <span class="gradient-text">Policy</span></h1>
        <p>Last updated: <?php echo date('F j, Y'); ?></p>
    </div>
</section>

<section class="section" style="padding:4rem 0;">
    <div class="container" style="max-width:800px;">
        <div style="background:white; padding:3rem; border-radius:16px; box-shadow:0 4px 20px rgba(0,0,0,0.1);">
            <h2 style="color:var(--accent); margin-bottom:1rem;">1. Information We Collect</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">We collect information you provide directly to us, such as when you request a consultation, subscribe to our newsletter, or contact us through our website.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">2. How We Use Your Information</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">We use the information we collect to provide, maintain, and improve our services, communicate with you, and ensure a better user experience.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">3. Information Sharing</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">4. Data Security</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">5. Cookies</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">Our website uses cookies to enhance your browsing experience. You can control cookie settings through your browser preferences.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">6. Contact Us</h2>
            <p style="color:var(--text-secondary);">If you have any questions about this Privacy Policy, please contact us at <a href="mailto:info@infinitysofthub.com" style="color:var(--accent);">info@infinitysofthub.com</a></p>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
