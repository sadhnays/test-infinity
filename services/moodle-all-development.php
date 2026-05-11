<?php
$pageTitle = "Moodle Development Services | Complete LMS Solutions | Infinity SoftHub";
$pageDescription = "Complete Moodle development services - custom themes, plugin development, LMS migration, AI integration, and full-scale Moodle solutions. 8+ years experience, 200+ projects delivered.";
$pageKeywords = "Moodle development, custom Moodle themes, Moodle plugin development, LMS migration, Moodle AI integration, eLearning solutions, Moodle customization";
$activePage = 'services';

require_once '../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i> Moodle Development
                </div>
                <h1>Complete <span class="gradient-text">Moodle Development</span></h1>
                <p class="hero-subtitle">End-to-end Moodle LMS solutions - from custom themes to AI-powered learning platforms.</p>
                <div class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">
                        Get Free Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Description with Image -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i> Moodle Expertise
                    </div>
                    <h2 class="h2-mb">Your Trusted <span class="gradient-text">infinitysofthub</span></h2>
                    <p class="text-secondary mb-1rem">With 8+ years of specialized Moodle development experience, we deliver comprehensive LMS solutions that transform how organizations teach and learn.</p>
                    <p class="text-secondary mb-1-5rem">From initial setup to complex customizations, AI integration, and enterprise-scale deployments - we handle every aspect of your Moodle journey.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>8+ Years Specialized Experience</strong> - Dedicated Moodle experts</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>200+ Projects Delivered</strong> - Proven track record</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Custom Plugin Development</strong> - 50+ plugins created</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>AI Integration Ready</strong> - Smart learning capabilities</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-handshake" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div style="position:relative;">
                        <img src="<?php echo asset('images/about/moodle-lms-development.jpg'); ?>" alt="Moodle Development Services" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Moodle+Development'">
                        <div class="exp-number-badge">
                            <div class="exp-number">200+</div>
                            <div class="exp-label">Projects Delivered</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Key Features -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Key Features</div>
                <h2>Moodle <span class="gradient-text">Services</span></h2>
                <p class="lead">Comprehensive Moodle development solutions for educational institutions and enterprises.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <!-- Feature 1 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-palette" aria-hidden="true"></i>
                    </div>
                    <h4>Custom Theme Development</h4>
                    <p>Beautiful, responsive, accessible themes that reflect your brand and provide exceptional user experience.</p>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
                    </div>
                    <h4>Plugin Development</h4>
                    <p>Custom Moodle plugins that extend functionality - from gradebook enhancements to interactive content.</p>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Moodle Migration</h4>
                    <p>Seamless migration from older Moodle versions or other LMS platforms with zero data loss.</p>
                </div>
                <!-- Feature 4 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Performance Optimization</h4>
                    <p>Lightning-fast Moodle implementations with caching, database optimization, and CDN integration.</p>
                </div>
                <!-- Feature 5 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-plug" aria-hidden="true"></i>
                    </div>
                    <h4>Third-Party Integrations</h4>
                    <p>Connect Moodle with Salesforce, SAP, Zoom, Google Workspace, Microsoft 365, and more.</p>
                </div>
                <!-- Feature 6 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Mobile-First Solutions</h4>
                    <p>Responsive designs and custom mobile apps that deliver seamless learning on any device.</p>
                </div>
                <!-- Feature 7 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>
                    </div>
                    <h4>Course Development</h4>
                    <p>Engaging, interactive course content with multimedia, quizzes, assignments, and gamification.</p>
                </div>
                <!-- Feature 8 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Security Hardening</h4>
                    <p>Comprehensive security audits, SSL implementation, and compliance with educational data regulations.</p>
                </div>
                <!-- Feature 9 -->
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-robot" aria-hidden="true"></i>
                    </div>
                    <h4>AI-Powered Learning</h4>
                    <p>Integrate AI for personalized learning paths, automated grading, and predictive analytics.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Technology Stack -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Tech Stack</div>
                <h2>Moodle <span class="gradient-text">Technologies</span></h2>
                <p class="lead">We leverage industry-leading technologies to build robust Moodle solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-php" aria-hidden="true"></i>
                    </div>
                    <h4>PHP & MySQL</h4>
                    <p>Core Moodle technologies for robust backend development.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-js-square" aria-hidden="true"></i>
                    </div>
                    <h4>JavaScript & React</h4>
                    <p>Modern frontend interactions and custom UI components.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h4>AI & Machine Learning</h4>
                    <p>Python, TensorFlow, and OpenAI for intelligent learning features.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-docker" aria-hidden="true"></i>
                    </div>
                    <h4>Docker & Cloud</h4>
                    <p>Scalable deployments on AWS, Azure, and Google Cloud.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Why Choose Us -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Why Us</div>
                <h2>Why Choose Our <span class="gradient-text">Moodle Services</span></h2>
                <p class="lead">We don't just work with Moodle - we've mastered it.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-clock" aria-hidden="true"></i>
                    </div>
                    <h4>8+ Years Experience</h4>
                    <p>Dedicated Moodle development since 2015 with deep platform expertise.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-rocket" aria-hidden="true"></i>
                    </div>
                    <h4>Scalable Architecture</h4>
                    <p>From 100 to 100,000+ concurrent users without performance compromise.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                    <h4>150+ Global Clients</h4>
                    <p>Trusted by educational institutions and enterprises worldwide.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-code-branch" aria-hidden="true"></i>
                    </div>
                    <h4>Multi-Tenant Architecture</h4>
                    <p>Serve multiple organizations from a single Moodle installation.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-gamepad" aria-hidden="true"></i>
                    </div>
                    <h4>Gamification</h4>
                    <p>Badges, points, leaderboards to boost learner engagement.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-headset" aria-hidden="true"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Ongoing maintenance, updates, and technical support for your LMS.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Process Section -->
    <section id="process" class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Process</div>
                <h2>Moodle Development <span class="gradient-text">Lifecycle</span></h2>
                <p class="lead">A proven 6-step process that ensures your Moodle platform exceeds expectations.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">1</div>
                    <h4>Discovery</h4>
                    <p>Understand your educational goals, user needs, and technical requirements.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">2</div>
                    <h4>Design</h4>
                    <p>Create wireframes, mockups, and technical architecture for your LMS.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">3</div>
                    <h4>Develop</h4>
                    <p>Agile development with regular demos, custom plugins, and integrations.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">4</div>
                    <h4>Test</h4>
                    <p>Comprehensive testing across devices, browsers, and user scenarios.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">5</div>
                    <h4>Deploy</h4>
                    <p>Smooth go-live with data migration and user training.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">6</div>
                    <h4>Support</h4>
                    <p>Ongoing maintenance, updates, and technical support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="grid grid-4 stagger">
                <div class="stats-card" data-aos="zoom-in">
                    <div class="stats-number counter" data-target="200">0</div>
                    <div class="stats-label">Projects Delivered</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <div class="stats-number counter" data-target="15000" data-suffix="+">0</div>
                    <div class="stats-label">Users Empowered</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <div class="stats-number" style="color:var(--accent-green);">50+</div>
                    <div class="stats-label">Custom Plugins</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <div class="stats-number" style="color:var(--accent-cyan);">8+</div>
                    <div class="stats-label">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Ready to Build Your <span class="cta-highlight">Moodle Platform?</span></h2>
                <p class="cta-text">Let's discuss how our Moodle expertise can create a powerful learning experience for your users.</p>
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once '../includes/footer.php';
?>
