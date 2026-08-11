<?php
// services/moodle-lms-development-australia.php
$pageTitle = "Custom Moodle™ LMS Developer Australia | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS in Australia. We build custom plugins, themes, and secure Privacy Act-compliant cloud portals.";
$pageKeywords = "Custom Moodle Developer Australia, Moodle plugin development Sydney, LMS customization Melbourne, Privacy Act compliant LMS, e-learning developer Australia";
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
        "name": "AU"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "19",
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
                <i class="fa fa-map-marker-alt"></i> Australia E-Learning
            </div>
            <h1>Custom Moodle™ <span class="gradient-text">Developer Australia</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for Australian universities, TAFE colleges, and corporates. 100% Privacy Act-compliant, secure AWS Sydney hosting.</p>
        </div>
    </div>
</section>

<!-- Australia Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Compliant & High-Performance <span class="gradient-text">LMS Environments</span></h2>
                <p style="margin-bottom:1.5rem;">We help Australian educational academies and businesses build custom, high-speed LMS infrastructures. Our engineers specialize in building bespoke plugin integrations, interactive coding widgets, and custom administrative reports.</p>
                <ul class="check-list">
                    <li><strong>Australian Privacy Principles (APPs)</strong> - Complete compliance with national data laws.</li>
                    <li><strong>Australia Timezone Alignment</strong> - Communication and standups scheduled during AEST and AWST business hours.</li>
                    <li><strong>AWS Sydney Data Residency</strong> - Deployed locally in AWS Sydney for low latency and data residency requirements.</li>
                    <li><strong>Interactive CS Sandboxes</strong> - Web-based SQL and Python workspaces built inside courses.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Australian Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-graduation-cap"></i> Australian E-Learning</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We build custom e-learning platforms tailored for TAFE education systems and enterprise training portals with robust multi-tenant configurations.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">TAFE LMS</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™ AU</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">AWS Sydney</span>
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
            <div class="section-tag">Australian Standards</div>
            <h2>LMS Security Aligned with <span class="gradient-text">Australian Principles</span></h2>
            <p class="lead">Delivering secure, localized platforms for Australian schools and businesses.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-user-lock"></i></div>
                <h4>APP Privacy Standards</h4>
                <p>Our code structures and security configurations strictly follow the Australian Privacy Principles (APPs) to keep student profiles secure.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-database"></i></div>
                <h4>AWS Sydney Hosting</h4>
                <p>Deploy cloud platforms inside the local AWS Sydney data center to guarantee compliance and extremely low page load times.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-puzzle-piece"></i></div>
                <h4>Custom Reporting</h4>
                <p>We build tailored progress reports and dashboards that help instructors track performance metrics inside Moodle Workplace.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
