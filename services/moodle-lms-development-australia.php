<?php
// services/moodle-lms-development-australia.php
$pageTitle = "Moodle™ LMS Development for Australian Organizations | Infinity SoftHub";
$pageDescription = "Remote Moodle™ LMS development for Australian organizations, including custom plugins, integrations, coding labs, reporting, migrations and cloud support.";
$pageKeywords = "Moodle LMS development Australia, remote Moodle developer Australia, custom Moodle plugins Australia, LMS integrations Australia, eLearning development Australia";
$activePage = 'services';

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Remote Moodle LMS Development for Australian Organizations',
    'serviceType' => 'LMS development, customization, integration and support',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Infinity SoftHub Technologies',
        'url' => 'https://infinitysofthub.com/',
    ],
    'areaServed' => ['@type' => 'Country', 'name' => 'Australia'],
    'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-globe"></i> Remote Delivery for Australian Organizations
            </div>
            <h1>Moodle™ LMS Development <span class="gradient-text">for Australian Organizations</span></h1>
            <p>Custom Moodle™ and LearnDash engineering for Australian universities, training providers and businesses—delivered remotely by our team in Faridabad, India.</p>
        </div>
    </div>
</section>

<!-- Australia Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Secure, High-Performance <span class="gradient-text">LMS Environments</span></h2>
                <p style="margin-bottom:1.5rem;">We help Australian educational academies and businesses build custom, high-speed LMS infrastructures. Our engineers specialize in building bespoke plugin integrations, interactive coding widgets, and custom administrative reports.</p>
                <ul class="check-list">
                    <li><strong>Privacy Controls</strong> - Access, retention and secure data workflows configured around your organizational requirements.</li>
                    <li><strong>Australia Timezone Overlap</strong> - Communication and standups scheduled during agreed AEST or AWST hours.</li>
                    <li><strong>Australian Cloud Regions</strong> - Sydney-based hosting selected when your project requires Australian data residency.</li>
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
            <div class="section-tag">Privacy, Hosting & Reporting</div>
            <h2>Configured Around <span class="gradient-text">Australian Requirements</span></h2>
            <p class="lead">Practical security controls, regional hosting choices and custom reporting for Australian learning teams.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-user-lock"></i></div>
                <h4>Privacy-Supporting Controls</h4>
                <p>We can implement role permissions, audit logs and data-handling workflows around requirements defined by your organization and legal advisers.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-database"></i></div>
                <h4>AWS Sydney Hosting</h4>
                <p>When required, we can deploy to selected Australian cloud regions to support your data-residency and performance requirements.</p>
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
