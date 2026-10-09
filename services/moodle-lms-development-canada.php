<?php
// services/moodle-lms-development-canada.php
$pageTitle = "Moodle Developer Canada | Custom LMS | Infinity SoftHub";
$pageDescription = "Moodle developers for Canadian colleges and companies: custom plugins, English/French setup, SSO, upgrades, IOMAD and hosting in Canadian regions.";
$pageKeywords = "Moodle developer Canada, Moodle development company Canada, bilingual Moodle, French Moodle, Moodle upgrade Canada, IOMAD Canada, Moodle hosting Canada";
$activePage = 'services';

require_once '../includes/functions.php';

$caFaqs = [
    ['q' => 'Which Canadian time zones can you work with?',
     'a' => 'India is 9.5 hours ahead of Toronto in summer (EDT) and 10.5 hours in winter (EST), and 12.5 to 13.5 hours ahead of Vancouver. We usually hold calls in your early morning on the East Coast or your late afternoon on the West Coast, and development continues overnight, so updates are ready when you start your day.'],
    ['q' => 'Can you set up Moodle in English and French?',
     'a' => 'Yes. We install and configure the French (and Canadian French) language packs, set up language switching for learners, and build course templates so the same course can be delivered in both languages.'],
    ['q' => 'Can our Moodle be hosted in Canada?',
     'a' => 'Yes. We can deploy on AWS (Canada Central, Montreal), Azure (Canada Central in Toronto or Canada East in Quebec City), or your own servers. The final provider and region remain your decision after your technical and legal review.'],
    ['q' => 'Do you help with privacy requirements like PIPEDA?',
     'a' => 'We configure roles, permissions, data retention, data export and deletion, and audit logs around the requirements your privacy or legal team sets, for example under PIPEDA or provincial laws such as Quebec’s Law 25. We are developers, not lawyers, so the legal assessment stays with your advisers.'],
    ['q' => 'Can you upgrade or fix our existing Moodle?',
     'a' => 'Yes. We review the site first, then upgrade to a supported Moodle version, fix incompatible plugins, tune performance and repair cron or email issues. All work is tested on a staging copy before it reaches your live site.'],
    ['q' => 'How is a project priced?',
     'a' => 'Well-defined jobs are usually fixed price. Ongoing development and support can be hourly or a monthly retainer, billed in USD or CAD. You get a written quote after a short discovery call.'],
];

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Moodle LMS Development for Canadian Organizations',
            'serviceType' => 'Moodle LMS development, upgrades, integration, hosting and support',
            'provider' => ['@type' => 'Organization', 'name' => 'Infinity SoftHub Technologies', 'url' => 'https://infinitysofthub.com/'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Canada'],
            'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
        ],
        faq_schema_array($caFaqs),
    ],
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

<!-- Typical Canadian projects -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Typical Canadian Projects</div>
            <h2>What Canadian Organisations <span class="gradient-text">Ask Us to Build</span></h2>
            <p class="lead">Most Canadian projects are about making an existing Moodle work better for two languages, several sites or a growing number of learners.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-school"></i></div>
                <h4>Colleges &amp; Universities</h4>
                <p>Course templates, assessment and gradebook workflows, program dashboards, and integrations with your student information system.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-language"></i></div>
                <h4>Bilingual Training Portals</h4>
                <p>English and French learner experiences with language switching, translated course templates and bilingual certificates.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-helmet-safety"></i></div>
                <h4>Workplace &amp; Compliance Training</h4>
                <p>Mandatory and safety training with due dates, reminders, certificates and manager reports, plus multi-company portals on IOMAD.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-certificate"></i></div>
                <h4>Associations &amp; CPD</h4>
                <p>Member-only courses, CPD credit tracking, and paid courses with Stripe or PayPal checkout in CAD.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-key"></i></div>
                <h4>Single Sign-On &amp; Integrations</h4>
                <p>Microsoft 365 / Entra ID and Google sign-in, OAuth2 and SAML, and REST API sync with HR, CRM or student records.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-code"></i></div>
                <h4>Coding Labs &amp; AI Assistants</h4>
                <p>In-course SQL and Python labs with auto-grading, and AI assistants that answer learner questions from your own course material.</p>
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
            <p class="lead">We agree a regular call slot that suits your time zone; development continues while you sleep, so progress is waiting for you the next morning.</p>
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
            <h2>Questions from <span class="gradient-text">Canadian Clients</span></h2>
        </div>
        <?php echo render_faq($caFaqs); ?>
        <div style="text-align:center; margin-top:2.5rem;">
            <p style="margin-bottom:1rem;">Related services: <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development</a> &middot; <a href="<?php echo base_url('services/iomad-multi-tenant-lms.php'); ?>">IOMAD multi-tenant LMS</a> &middot; <a href="<?php echo base_url('services/hosting-migration.php'); ?>">Moodle hosting &amp; migration</a> &middot; <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>">AI for LMS</a></p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary"><i class="fa fa-calendar-check"></i> Book a Call</a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
