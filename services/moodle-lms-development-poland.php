<?php
// services/moodle-lms-development-poland.php
$pageTitle = "Custom Moodle™ LMS Developer Poland | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS in Poland. We build custom Moodle™ plugins, themes, and secure GDPR-compliant cloud portals.";
$pageKeywords = "Custom Moodle Developer Poland, Moodle plugin development Warsaw, LMS customization Poland, GDPR compliant LMS, e-learning developer Poland";
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
        "name": "PL"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "12",
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
                <i class="fa fa-map-marker-alt"></i> Poland E-Learning
            </div>
            <h1>Custom Moodle™ <span class="gradient-text">Developer Poland</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for Polish universities, language schools, and corporate academies. 100% GDPR-compliant, secure AWS Europe hosting.</p>
        </div>
    </div>
</section>

<!-- Poland Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">GDPR-Compliant & Fast <span class="gradient-text">LMS Infrastructures</span></h2>
                <p style="margin-bottom:1.5rem;">We help Polish educational institutions and corporations build, customize, and maintain secure LMS architectures. Our full-stack development workflow supports custom Moodle™ plugins and theme designs matching EU web safety standards.</p>
                <ul class="check-list">
                    <li><strong>EU GDPR Data Protection</strong> - Complete alignment with European data privacy principles.</li>
                    <li><strong>CET Timezone Support</strong> - Communication and standups scheduled during Central European Time hours.</li>
                    <li><strong>AWS Europe Data Hosting</strong> - Hosting deployed in AWS Frankfurt or Stockholm for minimum latency in Poland.</li>
                    <li><strong>Interactive CS Sandboxes</strong> - Web-based SQL and Python workspaces built inside courses.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Poland Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-graduation-cap"></i> Polish E-Learning</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We build custom functionality aligned with European academic and corporate workflows, including multi-tenant structures for distributed campuses and regional offices.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™ PL</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">GDPR</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">AWS EU</span>
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
            <div class="section-tag">Polish Standards</div>
            <h2>LMS Built to Match <span class="gradient-text">EU Regulations</span></h2>
            <p class="lead">Delivering high-performance, secure learning environments locally.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-user-lock"></i></div>
                <h4>GDPR Compliance</h4>
                <p>We deploy secure database setups and security protocols that align with European General Data Protection Regulation (GDPR).</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>AWS Europe Hosting</h4>
                <p>Deploy your courses in AWS Europe regions for maximum compliance and extremely fast page loads in Poland.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-language"></i></div>
                <h4>Polish Localization</h4>
                <p>Configure Moodle™ translations and localized layouts to support Polish language smoothly.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
