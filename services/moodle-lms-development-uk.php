<?php
// services/moodle-lms-development-uk.php
$pageTitle = "Moodle Developer UK | Custom LMS Development | Infinity SoftHub";
$pageDescription = "Top Rated Moodle developers for UK colleges, training providers and businesses: custom plugins, Microsoft 365 SSO, upgrades, IOMAD, UK hosting and WCAG fixes.";
$pageKeywords = "Moodle developer UK, Moodle development company UK, Moodle upgrade UK, custom Moodle plugins UK, IOMAD UK, Moodle hosting UK";
$activePage = 'services';

require_once '../includes/functions.php';

$ukFaqs = [
    ['q' => 'Do you work in UK hours?',
     'a' => 'Yes. India is 4.5 hours ahead of the UK in summer (BST) and 5.5 hours ahead in winter (GMT), so your whole UK morning and early afternoon overlaps with our working day. We schedule calls and demos in that window.'],
    ['q' => 'Can you work on our existing Moodle site?',
     'a' => 'Yes. Most UK projects start with an existing Moodle: upgrades to a supported Moodle version, fixing broken plugins, theme changes, performance problems or adding new features. We review the site first and give you a written scope before any work starts.'],
    ['q' => 'Can our Moodle be hosted in the UK?',
     'a' => 'Yes. We can deploy on AWS, Azure or Google Cloud in a UK region (for example London) or on your own servers. The final provider and region stay your decision after your technical and legal review.'],
    ['q' => 'Can staff and learners log in with Microsoft 365 or Google?',
     'a' => 'Yes. We set up single sign-on with Microsoft 365 (Entra ID), Google Workspace, or any OAuth2 / SAML provider, so users sign in with their existing accounts.'],
    ['q' => 'Do you help with accessibility?',
     'a' => 'Yes. We fix theme and content issues against WCAG 2.2 AA, which UK public-sector bodies are required to meet, and support your independent accessibility audit.'],
    ['q' => 'How is a project priced?',
     'a' => 'Small, well-defined jobs are usually fixed price. Ongoing development and support can be hourly or a monthly retainer. You get a written quote after a short discovery call.'],
];

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Moodle LMS Development for UK Organisations',
            'serviceType' => 'Moodle LMS development, upgrades, integration, hosting and support',
            'provider' => ['@type' => 'Organization', 'name' => 'Infinity SoftHub Technologies', 'url' => 'https://infinitysofthub.com/'],
            'areaServed' => ['@type' => 'Country', 'name' => 'United Kingdom'],
            'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
        ],
        faq_schema_array($ukFaqs),
    ],
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

<!-- What UK clients ask us to build -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Typical UK Projects</div>
            <h2>What UK Organisations <span class="gradient-text">Ask Us to Build</span></h2>
            <p class="lead">Most of our UK work is on an existing Moodle: making it faster, safer, easier to use, or connecting it to the systems you already run.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-school"></i></div>
                <h4>Colleges &amp; Training Providers</h4>
                <p>Course templates, assessment and grading workflows, learner progress dashboards, and evidence logs for apprenticeship off-the-job training.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-briefcase"></i></div>
                <h4>Corporate &amp; Compliance Training</h4>
                <p>Mandatory training with due dates and reminders, certificates, manager reports, and multi-company portals on IOMAD for training firms selling to several clients.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-certificate"></i></div>
                <h4>Professional Bodies &amp; CPD</h4>
                <p>CPD tracking, member-only courses, paid courses with Stripe or PayPal checkout in GBP, and sync with your membership or CRM system.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-arrow-up-right-dots"></i></div>
                <h4>Moodle Upgrades &amp; Rescue</h4>
                <p>Upgrades from old, unsupported Moodle versions, plugin compatibility fixes, broken cron and email, and slow-site performance tuning.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-key"></i></div>
                <h4>Single Sign-On &amp; Integrations</h4>
                <p>Microsoft 365 / Entra ID and Google sign-in, OAuth2 and SAML, REST API sync with HR or student records, and WordPress&ndash;Moodle bridges.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-code"></i></div>
                <h4>Coding Labs &amp; AI Assistants</h4>
                <p>In-course SQL and Python labs with auto-grading for computing courses, and AI assistants that answer learner questions from your own course material.</p>
            </div>
        </div>
    </div>
</section>

<!-- How a UK project runs -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">How We Work</div>
            <h2>How a Project <span class="gradient-text">Usually Runs</span></h2>
            <p class="lead">Calls happen during your UK morning or early afternoon; development continues in our day, so updates are often waiting for you the next morning.</p>
        </div>
        <div class="grid grid-4" style="margin-top:3rem;">
            <div class="process-step">
                <div class="step-number">1</div>
                <h4>Discovery Call</h4>
                <p>We look at your Moodle, your goals and your deadlines.</p>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <h4>Written Scope</h4>
                <p>A clear list of what will be delivered, with a fixed or hourly quote.</p>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <h4>Build on Staging</h4>
                <p>Work is done on a staging copy with regular demos, never straight on your live site.</p>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <h4>Launch &amp; Support</h4>
                <p>Go-live, handover notes, and optional monthly support and updates.</p>
            </div>
        </div>
        <div class="proof-strip">
            <span><strong>Top Rated</strong> on Upwork</span>
            <span><strong>100%</strong> Job Success</span>
            <span><strong>4.7/5</strong> from 17 client reviews</span>
            <span><a href="<?php echo base_url('demos/sql-playground.php'); ?>">Try our SQL coding lab demo</a></span>
        </div>
    </div>
</section>

<!-- UK FAQ -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">FAQ</div>
            <h2>Questions from <span class="gradient-text">UK Clients</span></h2>
        </div>
        <?php echo render_faq($ukFaqs); ?>
        <div style="text-align:center; margin-top:2.5rem;">
            <p style="margin-bottom:1rem;">Related services: <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development</a> &middot; <a href="<?php echo base_url('services/iomad-multi-tenant-lms.php'); ?>">IOMAD multi-tenant LMS</a> &middot; <a href="<?php echo base_url('services/hosting-migration.php'); ?>">Moodle hosting &amp; migration</a> &middot; <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>">AI for LMS</a></p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary"><i class="fa fa-calendar-check"></i> Book a Call in UK Hours</a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
