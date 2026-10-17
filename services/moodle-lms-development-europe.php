<?php
// services/moodle-lms-development-europe.php
// Replaces the former thin Denmark, Netherlands, Norway, Poland, Spain and Sweden pages (301-redirected here).
$pageTitle = "Moodle Developer Europe | Custom Moodle LMS | Infinity SoftHub";
$pageDescription = "Moodle developers for European universities and training teams: custom plugins, upgrades, EU-region hosting, local language packs and GDPR-aware setup.";
$pageKeywords = "Moodle developer Europe, Moodle development Netherlands, Moodle developer Sweden, Moodle developer Denmark, Moodle developer Norway, Moodle Poland, Moodle Spain, GDPR LMS";
$activePage = 'services';
$pageModified = '2026-10-17';

require_once '../includes/functions.php';

$euFaqs = [
    ['q' => 'Do you work with European organisations remotely?',
     'a' => 'Yes. We deliver remotely from India with video calls and written updates. Central European Time mornings overlap with our afternoon, so most calls happen between 9:00 and 13:00 CET.'],
    ['q' => 'Can you host our Moodle site inside the EU?',
     'a' => 'Yes. We can set up and manage Moodle on AWS, Azure or Google Cloud in EU regions such as Frankfurt, Stockholm or Ireland, or work on your existing hosting provider or university servers.'],
    ['q' => 'Is your Moodle setup GDPR compliant?',
     'a' => 'GDPR compliance depends on your organisation as data controller, so we do not promise it on our own. We help you put the technical side in place: EU hosting, Moodle privacy and data-request tools, data retention settings, role permissions, audit logs and a data processing agreement for our work.'],
    ['q' => 'Can Moodle run in Danish, Dutch, Norwegian, Polish, Spanish or Swedish?',
     'a' => 'Yes. Moodle has official language packs for these languages. We install them, translate custom plugins and themes, and can set up multilingual courses so learners switch language themselves.'],
    ['q' => 'Can you connect Moodle to our university login?',
     'a' => 'Yes. We set up single sign-on with SAML, OpenID Connect or OAuth 2.0, including Microsoft Entra ID, Google Workspace and identity federations that use SAML.'],
    ['q' => 'How are European projects priced?',
     'a' => 'Well-defined work is quoted at a fixed price in EUR or USD. Ongoing development and support can be hourly or a monthly retainer. You get a written estimate after a short discovery call.'],
];

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Moodle LMS Development for European Organisations',
            'serviceType' => 'Moodle LMS development, upgrades, integration, hosting and support',
            'provider' => ['@id' => 'https://infinitysofthub.com/#organization'],
            'areaServed' => array_map(function ($c) { return ['@type' => 'Country', 'name' => $c]; },
                ['Denmark', 'Netherlands', 'Norway', 'Poland', 'Spain', 'Sweden', 'Germany', 'Ireland']),
            'availableChannel' => ['@type' => 'ServiceChannel', 'serviceUrl' => 'https://infinitysofthub.com/contact.php'],
        ],
        faq_schema_array($euFaqs),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-globe"></i> Remote Delivery for European Organisations
            </div>
            <h1>Moodle™ Developer <span class="gradient-text">for Europe</span></h1>
            <p>Custom Moodle™ development, upgrades and support for universities, schools and training teams across Europe, delivered remotely by our team in Faridabad, India.</p>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Moodle work for <span class="gradient-text">European teams</span></h2>
                <p style="margin-bottom:1.5rem;">Moodle is widely used across European universities, vocational schools and companies. Most of the work we are asked to do is not a new platform but making an existing one better: upgrading an old version, building a missing feature as a plugin, connecting the university login, or adding reports that managers actually use.</p>
                <p style="margin-bottom:1.5rem;">We work as an extension of your team. Development happens on a staging copy, you see a demo every week, and you own all custom code when the project ends.</p>
                <ul class="check-list">
                    <li><strong>CET-friendly hours</strong> - calls between 9:00 and 13:00 CET overlap with our working day.</li>
                    <li><strong>EU-region hosting</strong> - Frankfurt, Stockholm, Ireland or your own provider.</li>
                    <li><strong>Local languages</strong> - official Moodle language packs plus translated custom plugins.</li>
                    <li><strong>Privacy tooling</strong> - Moodle's built-in data request and retention tools configured for you.</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Book a Call
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <div style="background: linear-gradient(135deg, #0b1528, #1e2e4a); border-radius: var(--radius-xl); padding: 2.5rem; border: 1px solid #2563eb; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #60a5fa; margin-bottom: 1rem;"><i class="fa fa-graduation-cap"></i> Countries we work with</h3>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">Netherlands, Sweden, Denmark, Norway, Poland, Spain, Germany, Ireland and other EU and EEA countries.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">Moodle™</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">IOMAD</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">EU Hosting</span>
                        <span style="background: #1e2e4a; color: #60a5fa; padding: 0.4rem 0.8rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">SSO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy, hosting, accessibility -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Privacy, Hosting &amp; Accessibility</div>
            <h2>What European projects <span class="gradient-text">usually need</span></h2>
            <p class="lead">Three topics come up in almost every European Moodle project.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-user-lock"></i></div>
                <h4>GDPR-aware setup</h4>
                <p>We configure Moodle's privacy API, data requests, retention periods, role permissions and logs, and sign a data processing agreement for our access. Your organisation stays the data controller and decides the policies.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>EU data location</h4>
                <p>When your policy requires it, we deploy Moodle, its database and backups in an EU cloud region, with caching and a CDN so pages load quickly for learners across Europe.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-universal-access"></i></div>
                <h4>Accessibility</h4>
                <p>Custom themes and plugins are built with accessible colours, keyboard navigation and screen-reader labels, following WCAG 2.1 AA, which public bodies and many companies now need to meet.</p>
            </div>
        </div>
    </div>
</section>

<!-- By country -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">By Country</div>
            <h2>Moodle development <span class="gradient-text">by country</span></h2>
            <p class="lead">The core work is the same everywhere; language, login and hosting details change.</p>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <h4>Netherlands</h4>
                <p>Dutch language pack, SAML single sign-on for institutional logins, and upgrades for universities of applied sciences and MBO colleges running older Moodle versions.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <h4>Sweden</h4>
                <p>Swedish interface, hosting in the Stockholm region, and course formats and reports for vocational education and corporate onboarding.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <h4>Denmark</h4>
                <p>Danish language setup, Microsoft or Google sign-in, and dashboards and training records for municipalities, schools and companies.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <h4>Norway</h4>
                <p>Norwegian Bokmål and Nynorsk language packs, EEA hosting, and integrations with existing student and HR systems.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <h4>Poland</h4>
                <p>Polish interface, upgrades of older university Moodle sites, and custom quiz, gradebook and reporting plugins.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <h4>Spain</h4>
                <p>Spanish and co-official language packs such as Catalan, multilingual courses, and certificate and compliance training portals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Services</div>
            <h2>Our Moodle services <span class="gradient-text">for Europe</span></h2>
        </div>
        <div class="grid grid-3" style="margin-top:3rem;">
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-puzzle-piece"></i></div>
                <h4>Custom plugins &amp; themes</h4>
                <p>Activity modules, reports, blocks and branded, accessible themes built to Moodle coding guidelines. <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development</a>.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-arrow-up"></i></div>
                <h4>Upgrades &amp; migration</h4>
                <p>Step-by-step upgrades tested on staging, and moves to EU hosting. <a href="<?php echo base_url('services/hosting-migration.php'); ?>">Hosting &amp; migration</a>.</p>
            </div>
            <div class="feature-card anim-fade-up">
                <div class="feature-icon"><i class="fa fa-building"></i></div>
                <h4>Multi-company training</h4>
                <p>One platform for many companies or departments with IOMAD. <a href="<?php echo base_url('services/iomad-multi-tenant-lms.php'); ?>">IOMAD development</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="content-section">
    <div class="container" style="max-width:900px;">
        <div class="section-header anim-fade-up">
            <div class="section-tag">FAQ</div>
            <h2>Questions from <span class="gradient-text">European teams</span></h2>
        </div>
        <?php echo render_faq($euFaqs); ?>
        <p style="margin-top:2rem; font-size:0.9rem; color:var(--text-gray);">Page last updated: October 2026. Moodle™ is a registered trademark of Moodle Pty Ltd; Infinity SoftHub is an independent developer and not affiliated with Moodle HQ.</p>
    </div>
</section>

<!-- CTA -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="cta-section anim-fade-up cta-narrow">
            <h2 class="cta-title">Planning Moodle work <span class="cta-highlight">in Europe?</span></h2>
            <p class="cta-text">Tell us what you need. You get a reply within 24 hours with questions, an approach and an estimate.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn"><i class="fa fa-paper-plane"></i> Get a Free Estimate</a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
