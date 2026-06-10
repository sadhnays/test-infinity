<?php
// what-we-do.php
$pageTitle = 'What We Do | Infinity SoftHub - Premium IT Services & Digital Solutions';
$pageDescription = 'Discover Infinity SoftHub services - custom software engineering, LMS development, AI/ML integrations, cloud solutions, and mobile app design.';
$pageKeywords = 'IT services, custom software, LMS development, AI integration, web development, mobile apps, DevOps cloud';
$activePage = 'what-we-do';

require_once 'includes/header.php';
?>

    <style>
    /* Custom Service Grid Styles */
    .services-grid-premium {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .service-card-v3 {
        background: #ffffff;
        border-radius: var(--radius-xl);
        border: 1px solid rgba(229, 234, 243, 0.8);
        padding: 2.5rem 2rem;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
        height: 100%;
        position: relative;
        overflow: hidden;
        text-decoration: none;
    }

    .service-card-v3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--accent), var(--accent-cyan));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .service-card-v3:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 102, 255, 0.08);
        border-color: rgba(0, 102, 255, 0.25);
    }

    .service-card-v3:hover::after {
        opacity: 1;
    }

    .service-icon-v3 {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: var(--bg-light);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        color: var(--accent);
    }

    .service-icon-v3 i {
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .service-card-v3:hover .service-icon-v3 {
        background: linear-gradient(135deg, var(--accent), var(--accent-cyan));
        color: #ffffff;
        transform: scale(1.08) rotate(5deg);
        box-shadow: 0 8px 20px rgba(0, 102, 255, 0.2);
    }

    .service-card-v3 h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
        transition: color 0.3s ease;
    }

    .service-card-v3:hover h3 {
        color: var(--accent);
    }

    .service-card-v3 p {
        font-size: 0.9rem;
        color: var(--text-gray);
        line-height: 1.6;
        margin-bottom: 1.5rem;
        flex-grow: 1;
    }

    .service-learn-more {
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--accent);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: gap 0.2s ease, color 0.2s ease;
    }

    .service-card-v3:hover .service-learn-more {
        color: #0052cc;
        gap: 0.75rem;
    }

    /* Process steps adjustments */
    .process-step-num {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--accent), var(--accent-cyan));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.25rem;
        color: white;
        font-size: 1.5rem;
        font-weight: 800;
        box-shadow: 0 4px 10px rgba(0, 102, 255, 0.2);
        transition: transform 0.3s ease;
    }

    .industry-card:hover .process-step-num {
        transform: scale(1.1);
    }
    </style>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="hero-grid"></div>
        <div class="hero-scan-line"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-cubes" aria-hidden="true"></i> Expertise & Capabilities
                </div>
                <h1>Services We <span class="gradient-text">Deliver</span></h1>
                <p>Resilient software engineering and strategic digital solutions built to drive enterprise efficiency, user retention, and technical scale.</p>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-tag">Core Offerings</div>
                <h2>Our Technical <span class="gradient-text">Capabilities</span></h2>
                <p class="section-subtitle">Combining deep engineering experience with industry-best workflows to design, build, and deploy premium enterprise platforms.</p>
            </div>

            <div class="services-grid-premium">
                <!-- Moodle Development -->
                <a href="<?php echo base_url('services/moodle-development.php'); ?>" class="service-card-v3" data-aos="fade-up">
                    <div class="service-icon-v3">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h3>Moodle Development</h3>
                    <p>Build enterprise-grade virtual campuses, custom theme configurations, and module extensions tailored for scaling learning operations.</p>
                    <div class="service-learn-more">
                        Explore LMS Services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- Web Development -->
                <a href="<?php echo base_url('services/web-development.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-icon-v3">
                        <i class="fas fa-code" aria-hidden="true"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Design and develop high-performance database portals, API structures, secure SaaS layers, and modern responsive websites.</p>
                    <div class="service-learn-more">
                        Explore Web Services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- Mobile App Development -->
                <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon-v3">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h3>Mobile Apps</h3>
                    <p>Develop native and cross-platform mobile products for iOS and Android environments using React Native and Flutter.</p>
                    <div class="service-learn-more">
                        Explore Mobile Services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- AI & ML Integration -->
                <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-icon-v3">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h3>AI & ML Integration</h3>
                    <p>Integrate smart predictive classifiers, NLP tools, speech models, and dynamic business calculation automation routines.</p>
                    <div class="service-learn-more">
                        Explore AI Solutions <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- Cloud Solutions -->
                <a href="<?php echo base_url('services/cloud-solutions.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon-v3">
                        <i class="fas fa-cloud" aria-hidden="true"></i>
                    </div>
                    <h3>Cloud Solutions</h3>
                    <p>Configure high-availability server clusters, auto-scaling instances, CDN delivery, and microservices on AWS and Azure cloud.</p>
                    <div class="service-learn-more">
                        Explore Cloud Services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- UI/UX Design -->
                <a href="<?php echo base_url('services/ui-ux-design.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="250">
                    <div class="service-icon-v3">
                        <i class="fas fa-paint-brush" aria-hidden="true"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Craft modern wireframes, user journeys, responsive screen layouts, interactive dashboard prototypes, and unified design systems.</p>
                    <div class="service-learn-more">
                        Explore UX Services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- LearnDash Development -->
                <a href="<?php echo base_url('services/learndash-development.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon-v3">
                        <i class="fas fa-book-open" aria-hidden="true"></i>
                    </div>
                    <h3>LearnDash Development</h3>
                    <p>Create customized educational sites on WordPress utilizing LearnDash LMS structures, course builders, and payment checkouts.</p>
                    <div class="service-learn-more">
                        Explore LearnDash <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- Joomla Development -->
                <a href="<?php echo base_url('services/joomla-development.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="350">
                    <div class="service-icon-v3">
                        <i class="fab fa-joomla" aria-hidden="true"></i>
                    </div>
                    <h3>Joomla Development</h3>
                    <p>Configure scalable corporate portals, custom Joomla templates, component hooks, and secure database installations.</p>
                    <div class="service-learn-more">
                        Explore Joomla Services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- E-commerce Solutions -->
                <a href="<?php echo base_url('services/ecommerce-development.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon-v3">
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <h3>E-commerce Solutions</h3>
                    <p>Build high-conversion shopping portals, secure payment checkouts, dynamic inventory grids, and localized search options.</p>
                    <div class="service-learn-more">
                        Explore E-commerce <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>

                <!-- Mobile e-Learning -->
                <a href="<?php echo base_url('services/mobile-elearning.php'); ?>" class="service-card-v3" data-aos="fade-up" data-aos-delay="450">
                    <div class="service-icon-v3">
                        <i class="fas fa-tablet-alt" aria-hidden="true"></i>
                    </div>
                    <h3>Mobile e-Learning</h3>
                    <p>Develop responsive, offline-ready course platforms with complete SCORM/xAPI compliance for tracking analytics.</p>
                    <div class="service-learn-more">
                        Explore Mobile e-Learning <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Moodle IT Development Detail -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="content-grid-2">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i> LMS Architecture
                    </div>
                    <h2 class="h2-mb">Moodle <span class="gradient-text">IT Architecture</span></h2>
                    <p>We configure stable, secure digital learning hubs with robust server setups. Our customized engineering integrates learning databases directly with your core corporate software tools.</p>

                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Custom Theme Design</strong> – Tailored brand templates and accessibility.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Advanced Module Engineering</strong> – Built over 50 custom enrollment plug-ins.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Seamless Backend Integration</strong> – Fast connections to Salesforce, SAP, and Zoom.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>System Performance Tuning</strong> – Lightning-fast database indexing and queries.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Multi-Tenant Deployments</strong> – Efficiently host isolated workspaces for companies.</span></li>
                    </ul>

                    <div class="mt-2rem">
                        <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                            <i class="fas fa-arrow-right" aria-hidden="true"></i> Initiate Project Consultation
                        </a>
                    </div>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/about/what_we_do_lms.png'); ?>" alt="Infinity SoftHub Moodle IT Development Workspace Design" class="img-rounded" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Automation Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 reverse">
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-brain" aria-hidden="true"></i> Smart Automation
                    </div>
                    <h2 class="h2-mb">AI & Smart <span class="gradient-text">Automation</span></h2>
                    <p>Upgrade operating systems and automate data flows with modern AI capabilities. We integrate analytical formulas, neural classifications, and automation algorithms to refine operating speed.</p>

                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Adaptive Logic Systems</strong> – Smart learning paths calculated dynamically.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Automated Evaluation Systems</strong> – Intelligent quiz checks and data validation.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Active Assistance Hubs</strong> – Chatbots answering client questions 24/7.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Predictive Metrics</strong> – Flag user attrition trends from core data signals.</span></li>
                        <li><i class="fas fa-circle-check" aria-hidden="true"></i><span><strong>Advanced Analytics</strong> – Deep data reporting and visual dashboards.</span></li>
                    </ul>

                    <div class="mt-2rem">
                        <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                            <i class="fas fa-arrow-right" aria-hidden="true"></i> Explore Automation Solutions
                        </a>
                    </div>
                </div>
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/about/what_we_do_ai.png'); ?>" alt="Infinity SoftHub AI Cloud Automation Network Layout" class="img-rounded" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-tag">Technology Division</div>
                <h2 class="section-title">Our Technical <span class="gradient-text">Stack</span></h2>
                <p class="section-subtitle">We deploy reliable, industry-leading technologies to build high-performance systems.</p>
            </div>

            <div class="industries-grid" style="margin-top:2rem;">
                <div class="industry-card" data-aos="fade-up">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h3>LMS Engines</h3>
                    <p style="padding:0 1rem; font-size:0.9rem; color:var(--text-gray);">Moodle LMS, Canvas, Totara configurations, LearnDash modules</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h3>AI & ML Tools</h3>
                    <p style="padding:0 1rem; font-size:0.9rem; color:var(--text-gray);">Python scripts, TensorFlow, OpenAI endpoints, NLP libraries</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-icon">
                        <i class="fas fa-cloud" aria-hidden="true"></i>
                    </div>
                    <h3>Cloud & DevOps</h3>
                    <p style="padding:0 1rem; font-size:0.9rem; color:var(--text-gray);">AWS server nodes, Microsoft Azure cloud, Docker, Kubernetes pipelines</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-icon">
                        <i class="fas fa-code" aria-hidden="true"></i>
                    </div>
                    <h3>Development Code</h3>
                    <p style="padding:0 1rem; font-size:0.9rem; color:var(--text-gray);">React JS, Node.js routers, Laravel PHP controllers, Swift mobile code</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-tag">Execution Method</div>
                <h2 class="section-title">Our Development <span class="gradient-text">Process</span></h2>
                <p class="section-subtitle">A standardized 5-phase engineering process prioritizing quality control, transparency, and speed.</p>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:2rem; margin-top:3rem;">
                <div class="industry-card" data-aos="fade-up" style="text-align:center;">
                    <div class="process-step-num">1</div>
                    <h3>Discovery</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray);">Detail client metrics, database requirements, and timeline expectations.</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="100" style="text-align:center;">
                    <div class="process-step-num">2</div>
                    <h3>Design</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray);">Map application architecture wireframes and database endpoints.</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="200" style="text-align:center;">
                    <div class="process-step-num">3</div>
                    <h3>Develop</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray);">Agile code implementation cycles accompanied by routine demo showcases.</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="300" style="text-align:center;">
                    <div class="process-step-num">4</div>
                    <h3>Verify</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray);">Comprehensive automated unit testing and quality assurance checks.</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="400" style="text-align:center;">
                    <div class="process-step-num">5</div>
                    <h3>Launch</h3>
                    <p style="font-size:0.9rem; color:var(--text-gray);">Deploy code packages to production clouds alongside employee onboarding support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow premium-cta" data-aos="fade-up">
                <h2 class="cta-title">Have a Complex Project in <span class="cta-highlight">Mind?</span></h2>
                <p class="cta-text">Let's consult on how our technical consultancy, custom software development, and automation tools can bring your goals to life.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Technical Consultation
                </a>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
