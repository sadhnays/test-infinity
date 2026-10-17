<?php
$pageTitle = "LearnDash Development | WordPress LMS | Infinity SoftHub";
$pageDescription = "Professional LearnDash development services. Custom WordPress LMS solutions with LearnDash - course building, quiz systems, certificates & more.";
$pageKeywords = "LearnDash development, LearnDash WordPress LMS, LearnDash course development, LearnDash customization, WordPress LMS";
$activePage = 'services';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$learndashFaqs = [
    ['q' => 'What is LearnDash?', 'a' => 'LearnDash is a learning management plugin for WordPress. It adds courses, lessons, quizzes, certificates and student progress to a WordPress site, so you can sell or deliver training from your own website.'],
    ['q' => 'Should I choose LearnDash or Moodle?', 'a' => 'LearnDash suits businesses that already use WordPress and want to sell courses or run a branded training site. Moodle suits schools, universities and organisations that need complex grading, many teachers or a large number of courses. We build on both and can advise after a short call.'],
    ['q' => 'Can you sell LearnDash courses with WooCommerce or memberships?', 'a' => 'Yes. We connect LearnDash with WooCommerce, Stripe or PayPal for one-off sales, subscriptions and bundles, and with membership plugins for access levels.'],
    ['q' => 'Can you migrate courses from another platform to LearnDash?', 'a' => 'Yes. We move course content, quizzes and, where the source platform allows export, users and progress. We test the migration on a staging site before switching over.'],
    ['q' => 'Do you build custom LearnDash plugins?', 'a' => 'Yes. We write custom PHP plugins for features LearnDash does not offer out of the box, such as custom reports, integrations with your CRM or HR system, or new quiz types. You own the code.'],
];
$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'LearnDash Development',
            'serviceType' => 'LearnDash and WordPress LMS development',
            'url' => 'https://infinitysofthub.com/services/learndash-development.php',
            'description' => $pageDescription,
            'areaServed' => 'Worldwide',
            'provider' => ['@type' => 'Organization', 'name' => 'Infinity SoftHub Technologies', 'url' => 'https://infinitysofthub.com/'],
        ],
        faq_schema_array($learndashFaqs),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once __DIR__ . '/../includes/header.php';
?>

<style>
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%),
                url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=1920&h=600&fit=crop') center/cover;
}

.check-list li { list-style:none; padding-left:2rem; margin-bottom:0.75rem; position:relative; }
.check-list li::before { content:'\f00c'; font-family:'Font Awesome 5 Free'; font-weight:900; position:absolute; left:0; color:#00ccff; }

.overview-image { position:relative; overflow:hidden; }
.overview-image::before { content:''; position:absolute; top:-20px; left:-20px; right:20px; bottom:20px; border:3px solid #00ccff; border-radius:20px; z-index:-1; }
.overview-image img { transition:transform 0.4s ease; }
.overview-image:hover img { transform:scale(1.03); }

.feature-card { background:white; border-radius:16px; padding:2rem; transition:all 0.3s ease; border:1px solid transparent; }
.feature-card:hover { transform:translateY(-8px); box-shadow:0 20px 40px rgba(0,0,0,0.1); border-color:#00ccff; }
.feature-icon { width:60px; height:60px; background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; font-size:1.5rem; color:white; }

.step-number { width:70px; height:70px; background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; font-size:1.5rem; font-weight:700; color:white; box-shadow:0 10px 30px rgba(0,204,255,0.3); }

.stats-card { background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); border-radius:16px; padding:2rem; text-align:center; backdrop-filter:blur(10px); transition:all 0.3s ease; }
.stats-card:hover { border-color:#00ccff; transform:translateY(-5px); }
.stats-number { font-size:3rem; font-weight:700; background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.stats-suffix { font-size:1.5rem; font-weight:600; color:#00ccff; }
.stats-label { color:rgba(255,255,255,0.7); font-size:0.95rem; margin-top:0.5rem; text-transform:uppercase; letter-spacing:1px; }

.cta-section { background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); border-radius:24px; padding:3rem; text-align:center; }
.cta-section .btn { background:white !important; color:#00ccff !important; padding:1rem 2rem; border-radius:50px; font-weight:600; transition:all 0.3s ease; }
.cta-section .btn:hover { transform:scale(1.05); box-shadow:0 10px 30px rgba(0,0,0,0.2); }

@media (max-width: 768px) { .stats-number { font-size:2.5rem; } .cta-section { padding:2rem 1.5rem; } }
</style>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div style="margin-bottom:1.5rem; display:inline-flex; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; border:1px solid #00ccff; color:#00ccff;">
                <i class="fa fa-book-open" style="margin-right:0.5rem;"></i> LearnDash Expert
            </div>
            <h1>LearnDash <span class="gradient-text">Development</span></h1>
            <p>Transform your WordPress site into a powerful learning platform with LearnDash. Expert development, customization, and integration services.</p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Build Courses with <span class="gradient-text">LearnDash</span></h2>
                <p style="margin-bottom:1.5rem; color:var(--text-secondary);">LearnDash is one of the most powerful WordPress LMS plugins available. We help you leverage its full potential to create engaging, profitable course platforms.</p>
                <ul class="check-list" style="padding:0; margin:1.5rem 0;">
                    <li><strong>LearnDash Certified</strong> - Our team is LearnDash expert certified</li>
                    <li><strong>Custom Course Builder</strong> - Multi-tier courses, lessons, topics</li>
                    <li><strong>Advanced Quizzes</strong> - Multiple quiz types with grading</li>
                    <li><strong>Certificates & Badges</strong> - Custom designs and gamification</li>
                    <li><strong>WooCommerce Integration</strong> - Sell courses with full e-commerce</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="padding:1rem 2rem; border-radius:50px;">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left overview-image">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&h=500&fit=crop" alt="LearnDash WordPress LMS development and customization" style="width:100%; border-radius:16px; box-shadow:0 20px 60px rgba(0,0,0,0.2);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">What We Offer</div>
            <h2>LearnDash <span class="gradient-text">Services</span></h2>
            <p class="lead">Comprehensive LearnDash solutions for your online course platform.</p>
        </div>
        <div class="grid grid-2" style="margin-top:3rem;">
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-cog"></i></div>
                <h4>Setup & Configuration</h4>
                <p style="color:var(--text-secondary);">Complete LearnDash installation, configuration, and optimization.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-palette"></i></div>
                <h4>Custom Theme Development</h4>
                <p style="color:var(--text-secondary);">Beautiful, branded LearnDash-compatible themes.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-puzzle-piece"></i></div>
                <h4>Custom Functionality</h4>
                <p style="color:var(--text-secondary);">Extend LearnDash with custom plugins.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-question-circle"></i></div>
                <h4>Advanced Quiz Development</h4>
                <p style="color:var(--text-secondary);">Complex quiz formats and grading options.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-certificate"></i></div>
                <h4>Certificates & Badges</h4>
                <p style="color:var(--text-secondary);">Custom certificates and gamification features.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-users"></i></div>
                <h4>Group & Membership Sites</h4>
                <p style="color:var(--text-secondary);">Bulk enrollments and subscription models.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">Our Process</div>
            <h2>Development <span class="gradient-text">Process</span></h2>
            <p class="lead">From concept to launch in 5 proven steps.</p>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:2rem; margin-top:3rem;">
            <div class="anim-fade-up" style="text-align:center; padding:1.5rem;">
                <div class="step-number">1</div>
                <h4>Discovery</h4>
                <p style="color:var(--text-secondary);">Understand your courses</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="100" style="text-align:center; padding:1.5rem;">
                <div class="step-number">2</div>
                <h4>Setup</h4>
                <p style="color:var(--text-secondary);">Install & configure</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="200" style="text-align:center; padding:1.5rem;">
                <div class="step-number">3</div>
                <h4>Customize</h4>
                <p style="color:var(--text-secondary);">Theme & plugins</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="300" style="text-align:center; padding:1.5rem;">
                <div class="step-number">4</div>
                <h4>Content</h4>
                <p style="color:var(--text-secondary);">Build course structure</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="400" style="text-align:center; padding:1.5rem;">
                <div class="step-number">5</div>
                <h4>Launch</h4>
                <p style="color:var(--text-secondary);">Go live with training</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="grid grid-4 stagger">
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">Full-Stack</div>
                <div class="stats-label">WordPress, PHP &amp; LMS</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">24h</div>
                <div class="stats-label">Reply to every enquiry</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">5+</div>
                <div class="stats-label">Years LearnDash</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">100%</div>
                <div class="stats-label">Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed guide -->
<section class="content-section service-guide">
    <div class="container" style="max-width:900px; line-height:1.8;">

            <h2>What we do with LearnDash</h2>
            <p>LearnDash turns a WordPress website into a learning platform. Out of the box it gives you courses, lessons, quizzes and certificates. Most businesses need more than that: a design that matches their brand, a checkout that works with their payment provider, reports their managers can read, and integrations with the tools they already use. That is where we come in.</p>

            <h2>Typical LearnDash projects</h2>
            <ul style="padding-left:1.25rem;">
                <li><strong>Course-selling websites:</strong> LearnDash with WooCommerce or Stripe, coupons, bundles and subscriptions.</li>
                <li><strong>Employee and partner training:</strong> groups, group leaders, assigned courses, due dates and completion reports.</li>
                <li><strong>Membership sites:</strong> content locked by plan, drip-fed lessons and member dashboards.</li>
                <li><strong>Custom features:</strong> new quiz types, custom certificates, gamification and points, and reports built for your team.</li>
                <li><strong>Integrations:</strong> CRMs, email marketing tools, Zoom, and AI features such as automated feedback or course search.</li>
                <li><strong>Speed and stability fixes:</strong> slow course pages, plugin conflicts and broken upgrades.</li>
            </ul>

            <h2>How a LearnDash project runs</h2>
            <p>We start with a short call to understand your courses, learners and how you sell or assign training. We then send a written scope with a fixed price or an hourly estimate. Work is done on a staging site that you can review at any time. Once you approve, we move it live, check payments and emails end to end, and hand over admin notes so your team can add courses on their own.</p>

            <h2>Why work with us on LearnDash</h2>
            <p>We are full-stack PHP and WordPress developers who also build Moodle platforms, so we understand both the WordPress side and how learning platforms should work for teachers and learners. You talk directly to the developer, you get a reply within 24 hours, and you own every line of custom code we write. Read our guide to <a href="https://infinitysofthub.com/blog/">LMS development on our blog</a>, or compare with our <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development services</a>.</p>

            <h2>Frequently asked questions</h2>
            <?php echo render_faq($learndashFaqs); ?>
            <p style="font-size:0.85rem; color:var(--text-gray); margin-top:2rem;">Page last updated: October 2026</p>
    </div>
</section>

<!-- CTA -->
<section class="content-section">
    <div class="container">
        <div class="cta-section anim-fade-up">
            <h2>Ready for <span style="color:#0a1628;">LearnDash?</span></h2>
            <p style="color:rgba(0,0,0,0.7); margin:1rem 0 2rem;">Let's build a powerful online course platform with LearnDash.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
