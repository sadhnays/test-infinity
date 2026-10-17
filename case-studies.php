<?php
// case-studies.php
$pageTitle = "Moodle & LMS Case Studies | Infinity SoftHub";
$pageDescription = "Moodle and LMS case studies from Infinity SoftHub: a bilingual Moodle platform with iOS and Android apps, SQL coding labs, AI study assistants and automated grading.";
$pageKeywords = "Moodle case study, LMS case study, custom Moodle project, Moodle mobile app, coding lab Moodle, AI grading LMS";
$activePage = 'case-studies';

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$caseFaqs = [
    ['q' => 'Why are client names not shown?', 'a' => 'Most of our clients are schools and training companies that prefer not to be named publicly. We describe the problem, the work and the result, and we can arrange a reference call during a proposal where the client agrees.'],
    ['q' => 'How long does a custom Moodle project take?', 'a' => 'A plugin or integration usually takes a few weeks. A full platform with a custom course format, branding and mobile apps took about six months in the bilingual project described on this page.'],
    ['q' => 'Can you take over a Moodle site another agency built?', 'a' => 'Yes. We start with a code and configuration review, list the risks, and then plan upgrades and fixes on a staging copy before anything goes live.'],
    ['q' => 'Do we own the code you write?', 'a' => 'Yes. Custom plugins, themes and integrations built for your project belong to you, and we hand over the source code and documentation.'],
];
$pageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'CollectionPage',
            'name' => 'Moodle & LMS Case Studies',
            'url' => 'https://infinitysofthub.com/case-studies.php',
            'description' => $pageDescription,
            'dateModified' => '2026-10-17',
        ],
        faq_schema_array($caseFaqs),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="hero-grid"></div>
        <div class="hero-scan-line"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <h1>Case <span class="gradient-text">Studies</span></h1>
                <p>Real Moodle, LMS and software projects: the problem, what we built and what changed.</p>
            </div>
        </div>
    </section>

    <!-- Case Studies Grid -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Success <span class="gradient-text">Stories</span></h2>
                <p class="section-subtitle">Short summaries of LMS and software work. Two detailed case studies follow below.</p>
            </div>

            <div class="case-grid">
                <!-- Case Study 1 -->
                <div class="case-card" data-aos="fade-up">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #062B6F, #2563EB);">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">LMS Customization</span>
                        <h3 class="case-card-title">Interactive SQL & Python Coding Labs</h3>
                        <p class="case-card-desc">Integrated browser-based query editors, database schema explorers, and sandbox coding environments directly into Moodle™ courses for automated coding practice.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Moodle™</span>
                            <span class="case-tech-tag">JavaScript / React</span>
                            <span class="case-tech-tag">SQL Labs</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #0B3D91, #3B82F6);">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">AI E-Learning</span>
                        <h3 class="case-card-title">RAG-Based AI Study Assistant</h3>
                        <p class="case-card-desc">Developed an intelligent learning bot inside LMS platforms allowing students to query PDFs, class notes, and course files using semantic search and AI Q&A.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Vector Databases</span>
                            <span class="case-tech-tag">LangChain</span>
                            <span class="case-tech-tag">FastAPI</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #2563EB, #60A5FA);">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">LMS Automation</span>
                        <h3 class="case-card-title">AI-Powered Automated Grading</h3>
                        <p class="case-card-desc">Connected LearnDash and Moodle™ platforms with OpenAI & Claude APIs to automatically grade student essays and code files, returning written feedback for the teacher to review.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">OpenAI / Claude</span>
                            <span class="case-tech-tag">API Integration</span>
                            <span class="case-tech-tag">Automated Grading</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #041E4D, #0B3D91);">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">Finance</span>
                        <h3 class="case-card-title">FinTech Mobile App</h3>
                        <p class="case-card-desc">Built a secure mobile app with biometric sign-in and live account analytics.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Mobile App</span>
                            <span class="case-tech-tag">Security</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 5 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #0B3D91, #2563EB);">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">Manufacturing</span>
                        <h3 class="case-card-title">IoT Supply Chain Solution</h3>
                        <p class="case-card-desc">Built an IoT tracking system that shows where goods are across the supply chain in real time.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">IoT</span>
                            <span class="case-tech-tag">Cloud</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 6 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #2563EB, #0B3D91);">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">Logistics</span>
                        <h3 class="case-card-title">Fleet Management System</h3>
                        <p class="case-card-desc">Built a real-time fleet tracking platform with route planning and fuel-use reports.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Web App</span>
                            <span class="case-tech-tag">Analytics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Case Studies -->
    <section class="section case-detail">
        <div class="container" style="max-width:900px; line-height:1.8;">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Detailed <span class="gradient-text">Case Studies</span></h2>
            </div>

            <article style="margin-bottom:3rem;">
                <h3>Case study 1: Bilingual Moodle platform with iOS and Android apps</h3>
                <p><strong>Sector:</strong> Education &middot; <strong>Platform:</strong> Moodle&trade;, iOS, Android &middot; <strong>Timeline:</strong> about six months (2025)</p>
                <h4>The problem</h4>
                <p>An education company needed one learning platform for learners who study in French and in English. Its courses were built around video, and the standard Moodle course layout made lessons feel long and hard to follow. Learners also wanted to study on their phones.</p>
                <h4>What we built</h4>
                <ul style="padding-left:1.25rem;">
                    <li>A Moodle site with full French and English language support, so each learner sees the interface and course content in their own language.</li>
                    <li>A custom course format that breaks each course into clear, short steps instead of one long page.</li>
                    <li>Video activities with progress tracking, so learners can continue where they stopped.</li>
                    <li>Student dashboards showing progress across courses.</li>
                    <li>Native iOS and Android apps connected to the same Moodle accounts and courses.</li>
                </ul>
                <h4>The result</h4>
                <p>The company launched one platform for both language groups, on the web and on mobile, instead of managing separate tools. Course authors keep working in standard Moodle while learners see the simpler custom layout.</p>
            </article>

            <article style="margin-bottom:3rem;">
                <h3>Case study 2: Interactive SQL coding labs inside Moodle</h3>
                <p><strong>Sector:</strong> Data and programming education &middot; <strong>Platform:</strong> Moodle&trade;, JavaScript</p>
                <h4>The problem</h4>
                <p>Database courses taught SQL with screenshots and downloadable files. Learners had to install software before their first exercise, and teachers marked queries by hand.</p>
                <h4>What we built</h4>
                <ul style="padding-left:1.25rem;">
                    <li>A browser-based SQL editor placed directly inside course pages, with a schema explorer for the practice tables.</li>
                    <li>A sandboxed dataset, so learners can run any query without risk to real data.</li>
                    <li>Exercises that compare the learner's result with the expected result and give feedback.</li>
                </ul>
                <h4>The result</h4>
                <p>Learners start practising on the first lesson with nothing to install, and teachers spend less time checking basic queries. You can try a public version in our <a href="<?php echo base_url('demos/sql-playground.php'); ?>">SQL coding lab demo</a>.</p>
            </article>

            <h3>Frequently asked questions</h3>
            <?php echo render_faq($caseFaqs); ?>

            <p style="margin-top:2rem;">Planning something similar? Read about our <a href="<?php echo base_url('services/moodle-all-development.php'); ?>">Moodle development services</a> or <a href="<?php echo base_url('contact.php'); ?>">send us your brief</a>.</p>
            <p style="font-size:0.85rem; color:var(--text-gray);">Page last updated: October 2026</p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Impact in <span class="gradient-text">Numbers</span></h2>
                <p class="section-subtitle">Measurable results that demonstrate our commitment to excellence</p>
            </div>

            <div class="case-stats-wrapper">
                <div class="case-stat-card" data-aos="fade-up">
                    <i class="fas fa-users case-stat-icon"></i>
                    <h3 class="case-stat-number">2019</h3>
                    <p class="case-stat-label">Working with Moodle since</p>
                </div>
                <div class="case-stat-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-cubes case-stat-icon"></i>
                    <h3 class="case-stat-number">6+</h3>
                    <p class="case-stat-label">Years of Moodle experience</p>
                </div>
                <div class="case-stat-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-calendar-check case-stat-icon"></i>
                    <h3 class="case-stat-number">24h</h3>
                    <p class="case-stat-label">Reply to every enquiry</p>
                </div>
                <div class="case-stat-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-star case-stat-icon" style="color: var(--accent-green);"></i>
                    <h3 class="case-stat-number" style="color: var(--accent-green);">You</h3>
                    <p class="case-stat-label">Own all custom code</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow premium-cta" data-aos="fade-up">
                <h2 class="cta-title">Ready to Write Your <span class="cta-highlight">Success Story?</span></h2>
                <p class="cta-text">Let's discuss how our digital transformation services can help your business achieve remarkable results.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
