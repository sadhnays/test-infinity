<?php
// services/moodle-lms-development-uk.php
$pageTitle = "Moodle™ LMS Development for UK Organizations | Infinity SoftHub";
$pageDescription = "Remote Moodle™ LMS development for UK organizations, including custom plugins, integrations, migrations, dashboards, accessibility improvements and hosting support.";
$pageKeywords = "Moodle LMS development UK, remote Moodle developer UK, custom Moodle plugins UK, LearnDash developer UK, UK eLearning services";
$activePage = 'services';

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Remote Moodle LMS Development for UK Organizations',
    'serviceType' => 'LMS development, customization, integration and support',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Infinity SoftHub Technologies',
        'url' => 'https://infinitysofthub.com/',
    ],
    'areaServed' => ['@type' => 'Country', 'name' => 'United Kingdom'],
    'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-globe"></i> Remote Delivery for UK Organizations
            </div>
            <h1>Moodle™ LMS Development <span class="gradient-text">for UK Organizations</span></h1>
            <p>Custom Moodle™ and LearnDash engineering for UK colleges, training providers and businesses—delivered remotely by our team in Faridabad, India.</p>
        </div>
    </div>
</section>

<!-- UK Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Privacy-Conscious <span class="gradient-text">Learning Environments</span></h2>
                <p style="margin-bottom:1.5rem;">We help businesses, educational institutions, and training organizations across the United Kingdom maximize their e-learning potential. Our approach emphasizes user experience, responsive mobile-first structures, and robust data protection.</p>
                <ul class="check-list">
                    <li><strong>Privacy Controls</strong> - Access, retention, export and deletion workflows configured around your requirements.</li>
                    <li><strong>UK Timezone Overlap</strong> - Planned communication and meetings during agreed GMT or BST hours.</li>
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
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Security Review</span>
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
            <div class="section-tag">Data Protection & Hosting Options</div>
            <h2>Security Designed Around <span class="gradient-text">Your Requirements</span></h2>
            <p class="lead">We implement technical safeguards and hosting choices that can support your organization’s privacy and data-residency requirements.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-user-shield"></i></div>
                <h4>Data Anonymisation</h4>
                <p>We can configure data-minimization and anonymisation workflows before approved information is sent to external services or AI integrations.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-location-dot"></i></div>
                <h4>UK Data Residency</h4>
                <p>When required, we can deploy to selected UK or EU cloud regions. The final provider and region remain subject to your technical and legal review.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-universal-access"></i></div>
                <h4>Accessibility Improvements</h4>
                <p>We can implement WCAG-aligned interface improvements and support independent accessibility testing for public-sector and education projects.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
