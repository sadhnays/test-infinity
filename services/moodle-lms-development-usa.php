<?php
// services/moodle-lms-development-usa.php
$pageTitle = "Moodle™ LMS Development for US Organizations | Infinity SoftHub";
$pageDescription = "Remote Moodle™ LMS development for US organizations, including custom plugins, integrations, coding labs, dashboards, migrations and cloud deployment support.";
$pageKeywords = "Moodle LMS development USA, remote Moodle developer USA, custom Moodle plugins USA, LMS integrations USA, eLearning development USA";
$activePage = 'services';

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Remote Moodle LMS Development for US Organizations',
    'serviceType' => 'LMS development, customization, integration and support',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Infinity SoftHub Technologies',
        'url' => 'https://infinitysofthub.com/',
    ],
    'areaServed' => ['@type' => 'Country', 'name' => 'United States'],
    'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-globe"></i> Remote Delivery for US Organizations
            </div>
            <h1>Moodle™ LMS Development <span class="gradient-text">for US Organizations</span></h1>
            <p>Custom Moodle™ and LearnDash engineering for US universities, schools and training businesses—delivered remotely by our team in Faridabad, India.</p>
        </div>
    </div>
</section>

<!-- US Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Secure & Scalable <span class="gradient-text">E-Learning Solutions</span></h2>
                <p style="margin-bottom:1.5rem;">We help educational institutions and businesses across the United States build, customize and scale learning platforms. Our development process prioritizes performance, usability and practical security controls.</p>
                <ul class="check-list">
                    <li><strong>Student-Data Safeguards</strong> - Role permissions, audit trails and data-minimization options configured around your policies.</li>
                    <li><strong>US Timezone Overlap</strong> - Meetings and project updates scheduled during agreed US business hours.</li>
                    <li><strong>US Cloud Regions</strong> - AWS, Azure or Google Cloud regions selected when your project requires US data residency.</li>
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
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We configure, optimize and build custom extensions for single-school installations, training portals and multi-tenant corporate learning platforms.</p>
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
            <div class="section-tag">Privacy & Security Controls</div>
            <h2>Built Around Your <span class="gradient-text">Institutional Requirements</span></h2>
            <p class="lead">We implement technical safeguards that can support your privacy, security and data-hosting policies.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-shield-halved"></i></div>
                <h4>Student Record Controls</h4>
                <p>We can implement role-based access, audit logging and secure data workflows designed around your institution’s student-record policies.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>Secure US Hosting</h4>
                <p>When required, we can deploy your platform to selected AWS, Google Cloud or Azure regions located within the United States.</p>
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
