<?php
// services/moodle-lms-development-singapore.php
$pageTitle = "Moodle Developer Singapore | Custom LMS | Infinity SoftHub";
$pageDescription = "Moodle developers for Singapore training providers, schools and companies: custom plugins, PDPA-ready setup, SSO, upgrades and AWS Singapore hosting.";
$pageKeywords = "Moodle developer Singapore, Moodle development company Singapore, Moodle for training providers Singapore, PDPA LMS, Moodle hosting Singapore";
$activePage = 'services';

require_once '../includes/functions.php';

$sgFaqs = [
    ['q' => 'How much of our working day overlaps with yours?',
     'a' => 'Singapore is only 2.5 hours ahead of India, so almost the whole working day overlaps. Calls, demos and urgent fixes can happen during your normal office hours.'],
    ['q' => 'Do you work with training providers?',
     'a' => 'Yes. We build attendance tracking, assessment and certificate records, trainer dashboards and reports that training providers commonly need for course runs and funded programmes. Your team stays responsible for meeting the funding body’s rules; we make sure the LMS records the data cleanly.'],
    ['q' => 'Can our Moodle be hosted in Singapore?',
     'a' => 'Yes. We can deploy on AWS or Azure in their Singapore regions, or on your own servers, which also gives fast page loads for learners across South East Asia.'],
    ['q' => 'Do you help with PDPA requirements?',
     'a' => 'We configure roles and permissions, consent text, data retention, export and deletion, and audit logs around the requirements your organisation sets under the Personal Data Protection Act. Legal assessment stays with your data protection officer or advisers.'],
    ['q' => 'Can Moodle support multiple languages?',
     'a' => 'Yes. We install language packs such as Chinese, Malay and Tamil alongside English, and set up language switching so learners can use the platform in their preferred language.'],
    ['q' => 'How is a project priced?',
     'a' => 'Well-defined jobs are usually fixed price. Ongoing development and support can be hourly or a monthly retainer, billed in USD or SGD. You get a written quote after a short discovery call.'],
];

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Moodle LMS Development for Singapore Organisations',
            'serviceType' => 'Moodle LMS development, upgrades, integration, hosting and support',
            'provider' => ['@type' => 'Organization', 'name' => 'Infinity SoftHub Technologies', 'url' => 'https://infinitysofthub.com/'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Singapore'],
            'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
        ],
        faq_schema_array($sgFaqs),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-map-marker-alt"></i> Singapore E-Learning
            </div>
            <h1>Custom Moodle™ <span class="gradient-text">Developer Singapore</span></h1>
            <p>Bespoke Moodle™ and LearnDash development services tailored for Singapore training centers, corporate academies, and schools. Privacy controls configured around your PDPA requirements, with hosting in Singapore.</p>
        </div>
    </div>
</section>

<!-- Singapore Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Privacy-Conscious <span class="gradient-text">E-Learning Systems</span></h2>
                <p style="margin-bottom:1.5rem;">We help Singaporean businesses and institutions build secure, scalable LMS platforms. Our experience includes connecting Moodle with local HR systems, creating custom reporting databases, and building AI study tools.</p>
                <ul class="check-list">
                    <li><strong>PDPA Data Protection</strong> - Access, retention and deletion controls configured around your obligations under the Personal Data Protection Act.</li>
                    <li><strong>SGT Timezone Support</strong> - Communication and meetings aligned with Singapore Standard Time (UTC+8).</li>
                    <li><strong>AWS Singapore Hosting</strong> - Minimum latency for students across South East Asia.</li>
                    <li><strong>Custom Coding Sandboxes</strong> - Interactive SQL & Python environments built right into courses.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book Singapore Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-building"></i> Corporate Academies & Training</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">We specialize in building multi-tenant LMS configurations (IOMAD) for large businesses and government training centers.</p>
                    <div style="display: flex; gap: 1rem;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">PDPA</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">AWS SG</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™ SG</span>
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
            <div class="section-tag">PDPA Compliance</div>
            <h2>LMS Built to Match <span class="gradient-text">Singapore Guidelines</span></h2>
            <p class="lead">Delivering high-performance, secure learning environments locally.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-shield"></i></div>
                <h4>PDPA Alignment</h4>
                <p>We deploy secure database setups and security protocols that align with Singapore's Personal Data Protection Act (PDPA).</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.1s;">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>AWS Singapore Hosting</h4>
                <p>Deploy your courses in the local AWS Singapore region for data-residency needs and fast page loads across South East Asia.</p>
            </div>
            <div class="feature-card anim-fade-up" style="animation-delay: 0.2s;">
                <div class="feature-icon"><i class="fa fa-chart-line"></i></div>
                <h4>Administrative Dashboards</h4>
                <p>Custom dashboards for student tracking, training assessment, and reporting built directly inside Moodle.</p>
            </div>
        </div>
    </div>
</section>

<!-- Typical Singapore projects -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Typical Singapore Projects</div>
            <h2>What Singapore Organisations <span class="gradient-text">Ask Us to Build</span></h2>
            <p class="lead">Singapore projects range from new training portals to upgrading and extending an existing Moodle.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-chalkboard-user"></i></div>
                <h4>Training Providers</h4>
                <p>Course runs, attendance and assessment records, certificates, trainer dashboards and the reports your funding claims depend on.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-building"></i></div>
                <h4>Corporate Academies</h4>
                <p>Onboarding and compliance training, manager reports and multi-company portals on IOMAD for regional offices or clients.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-school"></i></div>
                <h4>Schools &amp; Institutes</h4>
                <p>Course templates, assessment workflows, parent or sponsor reports and multilingual learner experiences.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-credit-card"></i></div>
                <h4>Paid Courses</h4>
                <p>Course selling with Stripe or PayPal checkout in SGD, coupons, enrolment on payment and automated receipts.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-key"></i></div>
                <h4>Single Sign-On &amp; Integrations</h4>
                <p>Microsoft 365 and Google sign-in, OAuth2 and SAML, and REST API sync with HR or CRM systems.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-code"></i></div>
                <h4>Coding Labs &amp; AI Assistants</h4>
                <p>In-course SQL and Python labs with auto-grading, and AI assistants that answer learner questions from your course material.</p>
            </div>
        </div>
    </div>
</section>

<!-- How a project runs -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">How We Work</div>
            <h2>How a Project <span class="gradient-text">Usually Runs</span></h2>
            <p class="lead">With only 2.5 hours between us, we work in your office hours: quick calls, same-day replies and regular demos.</p>
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
                <p>A clear list of deliverables with a fixed or hourly quote.</p>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <h4>Build on Staging</h4>
                <p>Work happens on a staging copy with regular demos, never on your live site.</p>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <h4>Launch &amp; Support</h4>
                <p>Go-live, handover notes and optional monthly support.</p>
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

<!-- FAQ -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">FAQ</div>
            <h2>Questions from <span class="gradient-text">Singapore Clients</span></h2>
        </div>
        <?php echo render_faq($sgFaqs); ?>
        <div style="text-align:center; margin-top:2.5rem;">
            <p style="margin-bottom:1rem;">Related services: <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development</a> &middot; <a href="<?php echo base_url('services/iomad-multi-tenant-lms.php'); ?>">IOMAD multi-tenant LMS</a> &middot; <a href="<?php echo base_url('services/hosting-migration.php'); ?>">Moodle hosting &amp; migration</a> &middot; <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>">AI for LMS</a></p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary"><i class="fa fa-calendar-check"></i> Book a Call</a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
