<?php
$pageTitle = "IOMAD Multi-Tenant LMS Development | Infinity SoftHub";
$pageDescription = "IOMAD multi-tenant LMS development for secure company separation, delegated managers, course allocation, reporting, SSO, migration and support.";
$pageKeywords = "IOMAD multi-tenant LMS development, IOMAD setup, Moodle multi-tenancy, company LMS, delegated administration, IOMAD migration, IOMAD SSO integration";
$activePage = 'services';

$faqItems = [
    [
        'question' => 'What is IOMAD?',
        'answer' => 'IOMAD is an open-source, Moodle-based platform designed for organizations that need to manage multiple companies or tenants from one LMS.',
    ],
    [
        'question' => 'Does every IOMAD tenant use a separate database?',
        'answer' => 'A standard IOMAD installation uses logical tenant separation inside one application and database. If a project requires physical database isolation, separate Moodle or IOMAD instances should be considered.',
    ],
    [
        'question' => 'Can company managers manage only their own learners?',
        'answer' => 'Yes. Roles and company structures can be configured so delegated managers create or suspend users, allocate courses and view reports for their own organization without managing other companies.',
    ],
    [
        'question' => 'Can existing Moodle courses be migrated to IOMAD?',
        'answer' => 'Yes. Existing Moodle courses, question banks and supported activities can be assessed, backed up, restored and tested in IOMAD. Custom plugins require a compatibility review before migration.',
    ],
    [
        'question' => 'Can IOMAD connect to an existing website or identity provider?',
        'answer' => 'Yes. Depending on the portal and identity provider, integration can use OpenID Connect, OAuth 2.0, SAML, web services or a custom provisioning workflow.',
    ],
    [
        'question' => 'Do you provide hosting and ongoing support?',
        'answer' => 'We can deploy IOMAD to an agreed cloud or managed hosting environment and provide backups, monitoring, upgrades, security maintenance and technical support as a separate service.',
    ],
];

$faqSchema = [];
foreach ($faqItems as $item) {
    $faqSchema[] = [
        '@type' => 'Question',
        'name' => $item['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $item['answer'],
        ],
    ];
}

$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            '@id' => 'https://infinitysofthub.com/services/iomad-multi-tenant-lms.php#service',
            'name' => 'IOMAD Multi-Tenant LMS Development',
            'serviceType' => 'IOMAD multi-tenant LMS setup, customization, migration and integration',
            'description' => $pageDescription,
            'url' => 'https://infinitysofthub.com/services/iomad-multi-tenant-lms.php',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Infinity SoftHub Technologies',
                'url' => 'https://infinitysofthub.com/',
            ],
            'areaServed' => 'Worldwide',
        ],
        [
            '@type' => 'FAQPage',
            '@id' => 'https://infinitysofthub.com/services/iomad-multi-tenant-lms.php#faq',
            'mainEntity' => $faqSchema,
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once '../includes/header.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-building" aria-hidden="true"></i> IOMAD Multi-Tenancy
                </div>
                <h1>IOMAD <span class="gradient-text">Multi-Tenant LMS Development</span></h1>
                <p class="hero-subtitle">Manage multiple companies, client groups or branches from one Moodle-based platform with controlled access, delegated administration and tenant-aware reporting.</p>
                <div class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">
                        Discuss Your IOMAD Project <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="#capabilities" class="btn btn-outline btn-lg">Explore Capabilities</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-layer-group" aria-hidden="true"></i> One Platform, Multiple Organizations
                    </div>
                    <h2 class="h2-mb">A Structured LMS for <span class="gradient-text">Multi-Company Training</span></h2>
                    <p class="text-secondary mb-1rem">IOMAD extends Moodle with company, department and delegated-management features. It is designed for training providers, enterprise groups, franchises and organizations that serve separate client audiences.</p>
                    <p class="text-secondary mb-1-5rem">We plan the tenant model, permissions, course allocation, reporting, branding and integrations around your operating workflow—then configure, test and deploy the platform.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Company separation</strong> - Users and management views scoped by organization</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Delegated administration</strong> - Controlled manager access for each company</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Shared or dedicated learning</strong> - Allocate suitable courses by tenant</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Central oversight</strong> - Platform-wide control for your main administrators</span></li>
                    </ul>
                    <p class="text-secondary mt-2rem">Learn more about the platform on the <a href="https://www.iomad.org/multi-tenancy/" target="_blank" rel="noopener noreferrer">official IOMAD multi-tenancy page</a>.</p>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div style="position:relative;">
                        <img src="<?php echo asset('images/about/moodle-lms-development.webp'); ?>" alt="IOMAD multi-tenant LMS dashboard planning for multiple organizations" class="img-rounded" loading="lazy">
                        <div class="exp-number-badge">
                            <div class="exp-number"><i class="fas fa-sitemap" aria-hidden="true"></i></div>
                            <div class="exp-label">Tenant-Aware Structure</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <section id="capabilities" class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">IOMAD Capabilities</div>
                <h2>Multi-Tenant LMS <span class="gradient-text">Services</span></h2>
                <p class="lead">The configuration and engineering needed to make a multi-company learning platform practical, secure and manageable.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-sitemap" aria-hidden="true"></i></div>
                    <h3>Companies & Departments</h3>
                    <p>Design company hierarchies, departments and user allocation rules around your real organizational structure.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-user-shield" aria-hidden="true"></i></div>
                    <h3>Roles & Permissions</h3>
                    <p>Configure central administrators, company managers, reporters and learners with carefully scoped capabilities.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-book-open" aria-hidden="true"></i></div>
                    <h3>Course Allocation</h3>
                    <p>Provide shared courses across companies or assign learning to selected organizations and departments.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-chart-bar" aria-hidden="true"></i></div>
                    <h3>Tenant-Aware Reports</h3>
                    <p>Give company managers appropriate staff progress and completion views while retaining central reporting.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-palette" aria-hidden="true"></i></div>
                    <h3>Branding & Access</h3>
                    <p>Configure company branding and access journeys, including tenant-specific presentation where supported.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-certificate" aria-hidden="true"></i></div>
                    <h3>Compliance Training</h3>
                    <p>Build completion, certification and recurring-training workflows for regulated or mandatory learning.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-key" aria-hidden="true"></i></div>
                    <h3>SSO & User Provisioning</h3>
                    <p>Integrate identity and user flows using OpenID Connect, OAuth 2.0, SAML, APIs or agreed custom logic.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-exchange-alt" aria-hidden="true"></i></div>
                    <h3>Moodle Migration</h3>
                    <p>Assess and migrate supported courses, users and learning data with structured validation before launch.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-server" aria-hidden="true"></i></div>
                    <h3>Hosting & Maintenance</h3>
                    <p>Plan deployment, backups, monitoring, upgrades and security maintenance for ongoing platform operation.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Access Model</div>
                <h2>Clear Control at <span class="gradient-text">Every Level</span></h2>
                <p class="lead">A practical role design keeps daily administration simple without exposing another organization’s management functions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number"><i class="fas fa-globe" aria-hidden="true"></i></div>
                    <h3>Central Admin</h3>
                    <p>Controls the full platform, companies, courses, integrations and global reports.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number"><i class="fas fa-network-wired" aria-hidden="true"></i></div>
                    <h3>Group Manager</h3>
                    <p>Oversees an agreed group, division or collection of company structures.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number"><i class="fas fa-user-tie" aria-hidden="true"></i></div>
                    <h3>Company Manager</h3>
                    <p>Manages permitted users, course allocations and reports for their own company.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number"><i class="fas fa-user-graduate" aria-hidden="true"></i></div>
                    <h3>Learner</h3>
                    <p>Accesses assigned learning, assessments, feedback and completion records.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-alt">
        <div class="container">
            <div class="content-grid-2" style="align-items:start;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="section-tag">Migration</div>
                    <h2 class="h2-mb">Move Existing Learning into <span class="gradient-text">IOMAD</span></h2>
                    <p class="text-secondary mb-1rem">We begin with a discovery and compatibility review. This identifies Moodle versions, plugins, authentication, course backups, question banks, certificates and reporting requirements before any production move.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text">Course backup and restore testing</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">Quiz, question-bank and completion checks</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">Custom plugin compatibility review</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">User and company mapping plan</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">Staging validation before production release</span></li>
                    </ul>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="section-tag">Integrations</div>
                    <h2 class="h2-mb">Connect Your <span class="gradient-text">Existing Systems</span></h2>
                    <p class="text-secondary mb-1rem">Authentication is only one part of a reliable integration. We also define identity ownership, field mapping, company assignment, account lifecycle, logout behavior and failure handling.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text">OpenID Connect and OAuth 2.0</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">SAML identity-provider integration</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">Web services and custom APIs</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">Automated enrolment and provisioning workflows</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text">Role and tenant mapping validation</span></li>
                    </ul>
                    <a href="<?php echo base_url('blog/2026/09/15/moodle-sso-integration/'); ?>" class="btn btn-outline mt-2rem">Read the Moodle SSO Guide</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Use Cases</div>
                <h2>Who Needs an <span class="gradient-text">IOMAD Platform?</span></h2>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i></div>
                    <h3>Training Providers</h3>
                    <p>Deliver learning to multiple corporate clients while giving each client a controlled management view.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-heartbeat" aria-hidden="true"></i></div>
                    <h3>Healthcare & Care Groups</h3>
                    <p>Coordinate mandatory learning across care homes, clinics or departments with completion visibility.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon"><i class="fas fa-store-alt" aria-hidden="true"></i></div>
                    <h3>Franchises & Enterprises</h3>
                    <p>Standardize learning centrally while allowing approved local management and organization-level reporting.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <section id="process" class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Implementation Process</div>
                <h2>From Requirements to <span class="gradient-text">Reliable Launch</span></h2>
                <p class="lead">Each phase has a clear purpose, validation point and agreed output.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in"><div class="step-number">1</div><h3>Discovery</h3><p>Confirm tenants, users, permissions, courses, reports, integrations and hosting needs.</p></div>
                <div class="process-step" data-aos="zoom-in"><div class="step-number">2</div><h3>Architecture</h3><p>Define the company structure, access model, environments and deployment plan.</p></div>
                <div class="process-step" data-aos="zoom-in"><div class="step-number">3</div><h3>Configuration</h3><p>Install and configure IOMAD, roles, companies, courses, branding and workflows.</p></div>
                <div class="process-step" data-aos="zoom-in"><div class="step-number">4</div><h3>Integration</h3><p>Implement SSO, provisioning, APIs and required custom development.</p></div>
                <div class="process-step" data-aos="zoom-in"><div class="step-number">5</div><h3>Validation</h3><p>Test permissions, tenant boundaries, learning flows, reports, backups and recovery.</p></div>
                <div class="process-step" data-aos="zoom-in"><div class="step-number">6</div><h3>Launch & Support</h3><p>Release through an agreed cutover plan, then monitor and maintain the platform.</p></div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Frequently Asked Questions</div>
                <h2>IOMAD Multi-Tenant LMS <span class="gradient-text">FAQ</span></h2>
            </div>
            <div class="grid grid-2 stagger mt-3rem">
                <?php foreach ($faqItems as $item): ?>
                    <article class="feature-card" data-aos="fade-up">
                        <h3><?php echo e($item['question']); ?></h3>
                        <p><?php echo e($item['answer']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Planning a <span class="cta-highlight">Multi-Tenant LMS?</span></h2>
                <p class="cta-text">Tell us how many organizations, managers, learners and courses you need to support. We will help you define a practical IOMAD implementation plan.</p>
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                        <i class="fas fa-comments" aria-hidden="true"></i> Request a Consultation
                    </a>
                    <a href="<?php echo base_url('services/moodle-all-development.php'); ?>" class="btn btn-outline btn-lg">Explore Moodle Services</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once '../includes/footer.php';
?>
