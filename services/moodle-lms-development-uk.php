<?php
// services/moodle-lms-development-uk.php
$pageTitle = "Custom Moodle™ LMS Specialist UK | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS in the United Kingdom. We build custom Moodle™ plugins, themes, and GDPR-compliant secure hosting architectures.";
$pageKeywords = "Moodle LMS Specialist UK, custom Moodle plugins London, LearnDash developer UK, GDPR compliant LMS, UK e-learning services";
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
        "name": "GB"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "27",
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
                <i class="fa fa-union-jack"></i> UK E-Learning Specialists
            </div>
            <h1>Moodle™ LMS <span class="gradient-text">Specialist UK</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for UK colleges, training academies, and corporates. Fully GDPR-compliant cloud systems.</p>
        </div>
    </div>
</section>

<!-- UK Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">GDPR-Compliant <span class="gradient-text">Learning Environments</span></h2>
                <p style="margin-bottom:1.5rem;">We help businesses, educational institutions, and training organizations across the United Kingdom maximize their e-learning potential. Our approach emphasizes user experience, responsive mobile-first structures, and robust data protection.</p>
                <ul class="check-list">
                    <li><strong>Strict GDPR Compliance</strong> - Secure data controls and encryption.</li>
                    <li><strong>UK Timezone Alignment</strong> - Communication and meetings during GMT and BST hours.</li>
                    <li><strong>Bespoke Plugin Workflows</strong> - Grading automation, reporting modules, and custom widgets.</li>
                    <li><strong>H5P & SCORM Support</strong> - Smooth integration of next-gen interactive learning files.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Consultation (GMT/BST)
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-graduation-cap"></i> UK Academic & Training Portals</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We build custom functionality aligned with UK educational standards. From school platforms to corporate compliance academies running multi-tenant (Moodle Workplace / IOMAD) environments.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle Workplace</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">GDPR Audit</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">IOMAD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GDPR & Standards Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">GDPR & Data Safety</div>
            <h2>Secure UK & EU <span class="gradient-text">Data Architectures</span></h2>
            <p class="lead">We deploy LMS systems matching strict data residency and EU/UK security standards.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-user-shield"></i></div>
                <h4>Data Anonymisation</h4>
                <p>We configure Moodle™ clean-up routines to strip student PII before external API transfers (like automated OpenAI evaluations) ensuring full GDPR alignment.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-location-dot"></i></div>
                <h4>UK Data Residency</h4>
                <p>Deploy cloud platforms inside AWS London or EU (Dublin/Frankfurt) locations to satisfy legal data storage and regional residency constraints.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-universal-access"></i></div>
                <h4>Accessibility Compliance</h4>
                <p>Themes and UI improvements created matching WCAG 2.1 AA accessibility standards for public sector and university LMS deployments in the UK.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
