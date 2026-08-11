<?php
// services/moodle-lms-development-brazil.php
$pageTitle = "Custom Moodle™ LMS Developer Brazil | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS in Brazil. We build custom Moodle™ plugins, themes, and secure LGPD-compliant cloud portals.";
$pageKeywords = "Custom Moodle Developer Brazil, Moodle plugin development Sao Paulo, LMS customization Brazil, LGPD compliant LMS, e-learning developer Brazil";
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
        "name": "BR"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "18",
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
                <i class="fa fa-map-marker-alt"></i> Brazil E-Learning
            </div>
            <h1>Custom Moodle™ <span class="gradient-text">Developer Brazil</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for Brazilian schools, universities, and corporate academies. 100% LGPD-compliant, secure AWS São Paulo hosting.</p>
        </div>
    </div>
</section>

<!-- Brazil Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">LGPD-Compliant <span class="gradient-text">E-Learning Ecosystems</span></h2>
                <p style="margin-bottom:1.5rem;">We help Brazilian organizations build, customize, and maintain secure LMS architectures. Our full-stack development workflow supports complex local integrations and custom module builds matching Brazilian data safety rules (LGPD).</p>
                <ul class="check-list">
                    <li><strong>LGPD Data Protection</strong> - Complete alignment with Lei Geral de Proteção de Dados (LGPD).</li>
                    <li><strong>Brazil Timezone Alignment</strong> - Communication tailored to Brasília timezone (UTC-3).</li>
                    <li><strong>Local Data Residency</strong> - Deployed in AWS South America (São Paulo) region for local database compliance.</li>
                    <li><strong>Interactive CS Tools</strong> - Custom SQL & Python labs built directly into course structures.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Brazilian Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-graduation-cap"></i> Brazilian E-Learning</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We build custom functionality aligned with Brazilian academic and corporate workflows, including multi-tenant structures for distributed campuses and regional offices.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™ BR</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">LGPD</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">AWS SP</span>
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
            <div class="section-tag">Brazilian Standards</div>
            <h2>Built with Brazilian <span class="gradient-text">Privacy Standards</span></h2>
            <p class="lead">Delivering secure, localized e-learning databases across all states.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-shield-halved"></i></div>
                <h4>LGPD Compliance</h4>
                <p>We deploy secure database schemas and server setups that align with the Lei Geral de Proteção de Dados (LGPD).</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>Brazil Data Residency</h4>
                <p>Host your courses on AWS São Paulo or secure local data centers to ensure student profiles remain within Brazilian borders.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-globe"></i></div>
                <h4>Multi-Lingual Setup</h4>
                <p>Configure Moodle™ translations and localized layouts to support Portuguese (PT-BR) language smoothly.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
