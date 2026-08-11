<?php
// services/moodle-lms-development-usa.php
$pageTitle = "Custom Moodle™ LMS Developer USA | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS in the USA. We develop custom plugins, interactive CS coding labs, and secure FERPA-compliant cloud portals.";
$pageKeywords = "Custom Moodle Developer USA, Moodle plugin development California, LMS customization New York, FERPA compliant LMS, e-learning developer USA";
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
        "name": "US"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "38",
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
                <i class="fa fa-flag-usa"></i> US Enterprise LMS
            </div>
            <h1>Custom Moodle™ <span class="gradient-text">Developer USA</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for US universities, schools, and corporate training. 100% FERPA-compliant, secure cloud architectures.</p>
        </div>
    </div>
</section>

<!-- US Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Secure & Scalable <span class="gradient-text">E-Learning Solutions</span></h2>
                <p style="margin-bottom:1.5rem;">We help educational institutions and corporations across the United States build, customize, and scale their learning ecosystems. Our development process prioritizes extreme platform performance, usability, and rigorous data security standard compliance.</p>
                <ul class="check-list">
                    <li><strong>FERPA & HIPAA Compliant</strong> - Rigorous data protection safeguards.</li>
                    <li><strong>USA Timezone Support</strong> - Dedicated developers available during EST, CST, and PST hours.</li>
                    <li><strong>AWS US Regions Hosting</strong> - Hosting deployed locally in AWS Virginia, Ohio, or Oregon for minimum latency.</li>
                    <li><strong>Interactive CS Tools</strong> - SQL coding sandboxes, Python play environments, and AI-powered document helpers.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Consultation (EST/PST)
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-university"></i> Academic & Corporate LMS</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We configure, optimize, and build bespoke extensions for your platforms. From single-school installations to massive multi-tenant corporate platforms supporting 50,000+ active students.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">LearnDash</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">WordPress</span>
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
            <div class="section-tag">Rigorous Standards</div>
            <h2>Built with US <span class="gradient-text">Compliance in Mind</span></h2>
            <p class="lead">Protecting student privacy and security is central to our custom plugin development workflows.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-shield-halved"></i></div>
                <h4>FERPA Compliance</h4>
                <p>We implement database-level security and access control procedures that fully protect student records under the Family Educational Rights and Privacy Act (FERPA).</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>Secure US Hosting</h4>
                <p>Deploy your Moodle™ platform to secure AWS, Google Cloud, or Azure data centers located physically within the United States for speed and compliance.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-fingerprint"></i></div>
                <h4>SSO & Auth Integration</h4>
                <p>Seamless integrations with OKTA, Active Directory, Azure AD, Shibboleth, and other SAML/OAuth Single Sign-On systems popular in US campuses.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
