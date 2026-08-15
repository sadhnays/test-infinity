<?php
// services/moodle-lms-development-canada.php
$pageTitle = "Moodle™ LMS Development Canada | Infinity SoftHub";
$pageDescription = "Remote Moodle™ LMS development for Canadian organizations, including custom plugins, integrations, bilingual setup, coding labs, migrations and cloud support.";
$pageKeywords = "Moodle LMS development Canada, remote Moodle developer Canada, custom Moodle plugins Canada, bilingual LMS Canada, eLearning development Canada";
$activePage = 'services';

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Remote Moodle LMS Development for Canadian Organizations',
    'serviceType' => 'LMS development, customization, integration and support',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Infinity SoftHub Technologies',
        'url' => 'https://infinitysofthub.com/',
    ],
    'areaServed' => ['@type' => 'Country', 'name' => 'Canada'],
    'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-globe"></i> Remote Delivery for Canadian Organizations
            </div>
            <h1>Moodle™ LMS Development <span class="gradient-text">for Canadian Organizations</span></h1>
            <p>Custom Moodle™ and LearnDash engineering for Canadian schools, universities and training organizations—delivered remotely by our team in Faridabad, India.</p>
        </div>
    </div>
</section>

<!-- Canada Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Secure, Flexible <span class="gradient-text">E-Learning Ecosystems</span></h2>
                <p style="margin-bottom:1.5rem;">We help Canadian organizations build, customize and maintain LMS platforms. Our full-stack workflow supports integrations, custom modules and technical safeguards configured around your privacy requirements.</p>
                <ul class="check-list">
                    <li><strong>Privacy Controls</strong> - Role permissions, audit logs and data workflows configured around your organizational policies.</li>
                    <li><strong>Canada Timezone Overlap</strong> - Communication planned around agreed Eastern, Mountain or Pacific hours.</li>
                    <li><strong>Canadian Cloud Regions</strong> - Canadian hosting regions selected when your data-residency policy requires them.</li>
                    <li><strong>Coding Sandboxes</strong> - Custom SQL & Python labs built directly into course structures.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Canadian Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-graduation-cap"></i> Canadian E-Learning</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We build custom functionality aligned with Canadian academic and corporate workflows, including multi-tenant structures for distributed campuses and regional offices.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">LearnDash</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Bilingual LMS</span>
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
            <div class="section-tag">Privacy, Hosting & Localization</div>
            <h2>Configured Around <span class="gradient-text">Canadian Requirements</span></h2>
            <p class="lead">Practical security controls, hosting-region choices and bilingual platform options for Canadian teams.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-shield-halved"></i></div>
                <h4>Privacy-Supporting Controls</h4>
                <p>We can configure access control, retention and secure data-handling workflows around requirements defined by your organization and legal advisers.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>Canada Data Residency</h4>
                <p>When required, we can deploy to selected Canadian cloud regions so your team can implement its chosen data-residency approach.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-globe"></i></div>
                <h4>Multi-Lingual Setup</h4>
                <p>Configure Moodle™ language packs, translated content workflows and localized layouts for English and French learner experiences.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
