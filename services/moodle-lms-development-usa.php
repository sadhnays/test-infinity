<?php
// services/moodle-lms-development-usa.php
$pageTitle = "Moodle Developer USA | Custom LMS Development | Infinity SoftHub";
$pageDescription = "Top Rated Moodle developers for US schools, universities and companies: custom plugins, SSO, payment integration, branded mobile apps, upgrades and AWS hosting.";
$pageKeywords = "Moodle developer USA, Moodle development company USA, custom Moodle plugins, Moodle SSO integration, Moodle mobile app, LearnDash developer USA";
$activePage = 'services';

require_once '../includes/functions.php';

$usFaqs = [
    ['q' => 'Can you work US business hours?',
     'a' => 'We overlap with the US East Coast morning (our evening in India) and schedule calls and demos in that window. For West Coast clients we agree a fixed weekly call time. Development continues during our day, so progress is usually ready when your day starts.'],
    ['q' => 'Can you add single sign-on to Moodle?',
     'a' => 'Yes. We connect Moodle to OAuth2 and SAML providers such as Google, Microsoft Entra ID and Okta, and to your own web app. One of our Upwork projects was a Laravel and Moodle OAuth2 single sign-on integration.'],
    ['q' => 'Can we sell courses and take payments in USD?',
     'a' => 'Yes. We set up paid enrolment with Stripe or PayPal and build custom Moodle payment plugins when the standard options do not fit. A custom Moodle payment plugin is one of our 5-star Upwork projects.'],
    ['q' => 'Do you build a branded mobile app for our Moodle?',
     'a' => 'Yes. We set up a branded Moodle mobile app with your name, logo and colors for iOS and Android, and connect it to your Moodle site.'],
    ['q' => 'How do you handle student data?',
     'a' => 'We work on staging copies, limit access to what the task needs, and can configure roles, audit logs and data-minimization so your Moodle supports your FERPA and privacy policies. Compliance decisions stay with your institution.'],
    ['q' => 'Moodle or LearnDash, which should we choose?',
     'a' => 'Moodle suits schools, universities and larger training programs that need gradebooks, roles and multi-tenant setups. LearnDash suits businesses that already run WordPress and mainly sell courses. We build on both and will recommend one after hearing your requirements.'],
];

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Moodle LMS Development for US Organizations',
            'serviceType' => 'Moodle LMS development, integration, mobile app, hosting and support',
            'provider' => ['@type' => 'Organization', 'name' => 'Infinity SoftHub Technologies', 'url' => 'https://infinitysofthub.com/'],
            'areaServed' => ['@type' => 'Country', 'name' => 'United States'],
            'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
        ],
        faq_schema_array($usFaqs),
    ],
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

<!-- What US clients ask us to build -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Typical US Projects</div>
            <h2>What US Clients <span class="gradient-text">Ask Us to Build</span></h2>
            <p class="lead">From a single plugin fix to a full LMS with a branded mobile app, these are the jobs US schools, universities and companies hire us for most often.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-graduation-cap"></i></div>
                <h4>K-12 &amp; Higher Education</h4>
                <p>Course and gradebook setup, teacher and admin dashboards, Google Workspace or Microsoft sign-in, and roster sync through CSV or API.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-building"></i></div>
                <h4>Corporate Training &amp; Onboarding</h4>
                <p>Onboarding paths, compliance courses with due dates, certificates, manager reports, and IOMAD portals for training companies with many client businesses.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-credit-card"></i></div>
                <h4>Selling Courses Online</h4>
                <p>Paid enrolment in USD with Stripe or PayPal, custom payment plugins, coupons and bundles, on Moodle or LearnDash with WordPress.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-mobile-screen"></i></div>
                <h4>Branded Mobile App</h4>
                <p>Your own Moodle app for iOS and Android with your name, logo and colors, so learners study and get notifications on their phones.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-right-to-bracket"></i></div>
                <h4>SSO &amp; App Integrations</h4>
                <p>OAuth2 and SAML single sign-on with Google, Entra ID, Okta or your own app, plus REST API sync with your CRM, HR or student system.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-cloud"></i></div>
                <h4>AWS Hosting &amp; Upgrades</h4>
                <p>Moodle on AWS in a US region, upgrades from old versions, backups, monitoring and performance tuning for busy exam periods.</p>
            </div>
        </div>
    </div>
</section>

<!-- Proof from real projects -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Client Feedback</div>
            <h2>What Clients Say <span class="gradient-text">on Upwork</span></h2>
        </div>
        <div class="upwork-reviews" style="margin-top:2.5rem;">
            <figure class="upwork-review">
                <blockquote>&ldquo;This freelancer helped us save a lot of money, thanks to her advanced knowledge of Moodle plug-ins and customizations which are feasible without purchasing extra plug-ins.&rdquo;</blockquote>
                <figcaption><strong>Moodle-based LMS &amp; Branded Mobile App Setup</strong><span>Upwork client &middot; 5.0 &middot; Dec 2025 &ndash; May 2026</span></figcaption>
            </figure>
            <figure class="upwork-review">
                <blockquote>&ldquo;Sadhna Yadav is highly skilled and very cooperative. She delivered a secure, user-friendly Moodle payment plugin that met all our needs.&rdquo;</blockquote>
                <figcaption><strong>Moodle Payment Integration Plugin</strong><span>Upwork client &middot; 5.0 &middot; May 2025</span></figcaption>
            </figure>
        </div>
        <div class="proof-strip">
            <span><strong>Top Rated</strong> on Upwork</span>
            <span><strong>100%</strong> Job Success</span>
            <span><strong>4.7/5</strong> from 17 client reviews</span>
            <span><a href="<?php echo base_url('demos/sql-playground.php'); ?>">Try our SQL coding lab demo</a></span>
        </div>
    </div>
</section>

<!-- US FAQ -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">FAQ</div>
            <h2>Questions from <span class="gradient-text">US Clients</span></h2>
        </div>
        <?php echo render_faq($usFaqs); ?>
        <div style="text-align:center; margin-top:2.5rem;">
            <p style="margin-bottom:1rem;">Related services: <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development</a> &middot; <a href="<?php echo base_url('services/learndash-development.php'); ?>">LearnDash development</a> &middot; <a href="<?php echo base_url('services/mobile-elearning.php'); ?>">Mobile e-learning</a> &middot; <a href="<?php echo base_url('services/hosting-migration.php'); ?>">Moodle hosting &amp; migration</a></p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary"><i class="fa fa-calendar-check"></i> Book a Call (ET / PT)</a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
