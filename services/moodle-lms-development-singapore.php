<?php
// services/moodle-lms-development-singapore.php
$pageTitle = "Custom Moodle™ LMS Developer Singapore | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS in Singapore. We build custom Moodle™ plugins, themes, and secure PDPA-compliant cloud portals.";
$pageKeywords = "Moodle LMS Specialist Singapore, Moodle developer Singapore, LearnDash developer Singapore, PDPA compliant LMS, AWS Singapore hosting";
$activePage = 'services';

// Add Service Schema for Google Rich Snippets (Rating Stars)
$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Moodle™ LMS Development & Customization Services",
    "serviceType": "LMS Plugin Development, Theme Customization & Cloud Hosting",
    "provider": {
        "@type": "LocalBusiness",
        "name": "Infinity SoftHub Technologies",
        "image": "https://infinitysofthub.com/assets/images/logo.png",
        "priceRange": "$$"
    },
    "areaServed": {
        "@type": "Country",
        "name": "SG"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "15",
        "bestRating": "5",
        "worstRating": "1"
    }
}';

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-map-marker-alt"></i> Singapore E-Learning
            </div>
            <h1>Custom Moodle™ <span class="gradient-text">Developer Singapore</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for Singapore training centers, corporate academies, and schools. 100% PDPA-compliant, secure AWS Singapore hosting.</p>
        </div>
    </div>
</section>

<!-- Singapore Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">PDPA-Compliant <span class="gradient-text">E-Learning Systems</span></h2>
                <p style="margin-bottom:1.5rem;">We help Singaporean businesses and institutions build secure, scalable, and compliant LMS platforms. Our experience includes connecting Moodle with local HR systems, creating custom reporting databases, and building AI study tools.</p>
                <ul class="check-list">
                    <li><strong>PDPA Data Protection</strong> - Rigorous data protection matching Singapore’s Personal Data Protection Act.</li>
                    <li><strong>SGT Timezone Support</strong> - Communication and meetings aligned with Singapore Standard Time (UTC+8).</li>
                    <li><strong>AWS Singapore Hosting</strong> - Minimum latency for students across South East Asia.</li>
                    <li><strong>Custom Coding Sandboxes</strong> - Interactive SQL & Python environments built right into courses.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Singapore Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-building"></i> Corporate Academies & Training</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We specialize in building multi-tenant LMS configurations (Moodle Workplace / IOMAD) for large businesses and government training centers.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">PDPA</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">AWS SG</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™ SG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compliance & Security Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">PDPA Compliance</div>
            <h2>LMS Built to Match <span class="gradient-text">Singapore Guidelines</span></h2>
            <p class="lead">Delivering high-performance, secure learning environments locally.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-shield"></i></div>
                <h4>PDPA Alignment</h4>
                <p>We deploy secure database setups and security protocols that align with Singapore's Personal Data Protection Act (PDPA).</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>AWS Singapore Hosting</h4>
                <p>Deploy your courses in the local AWS Singapore region for maximum compliance and extremely fast page loads across SEA.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-chart-line"></i></div>
                <h4>Administrative Dashboards</h4>
                <p>Custom dashboards for student tracking, training assessment, and reporting built directly inside Moodle Workplace.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
