<?php
$pageTitle = 'Terms of Service | Infinity SoftHub Technologies';
$pageDescription = 'Infinity SoftHub Technologies Terms of Service - Terms and conditions governing the use of our services.';
$pageKeywords = 'terms of service, terms and conditions';
$activePage = 'terms';
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
        <h1>Terms of <span class="gradient-text">Service</span></h1>
        <p>Last updated: <?php echo date('F j, Y'); ?></p>
    </div>
</section>

<section class="section" style="padding:4rem 0;">
    <div class="container" style="max-width:800px;">
        <div style="background:white; padding:3rem; border-radius:16px; box-shadow:0 4px 20px rgba(0,0,0,0.1);">
            <h2 style="color:var(--accent); margin-bottom:1rem;">1. Acceptance of Terms</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">By accessing and using the Infinity SoftHub Technologies website and services, you accept and agree to be bound by the terms and provisions of this agreement.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">2. Services Description</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">We provide IT consulting, software development, Moodle customization, AI integration, and related digital transformation services for enterprises.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">3. Intellectual Property</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">All content, designs, and materials on this website are the property of Infinity SoftHub Technologies and are protected by copyright laws.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">4. Limitation of Liability</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">Infinity SoftHub Technologies shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">5. Project Engagements</h2>
            <p style="color:var(--text-secondary); margin-bottom:1.5rem;">Specific project terms, deliverables, timelines, and pricing will be outlined in individual Statements of Work or Project Agreements.</p>

            <h2 style="color:var(--accent); margin-bottom:1rem;">6. Contact Us</h2>
            <p style="color:var(--text-secondary);">For questions regarding these terms, please contact us at <a href="mailto:info@infinitysofthub.com" style="color:var(--accent);">info@infinitysofthub.com</a></p>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
