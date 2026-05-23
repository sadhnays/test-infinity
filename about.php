<?php
// about.php
$pageTitle = "About Infinity SoftHub | Enterprise IT Consulting Experts";
$pageKeywords = "about Infinity SoftHub, IT consulting, digital transformation, enterprise solutions, company story";
$activePage = 'about';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="hero-grid"></div>
        <div class="hero-scan-line"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-info-circle" aria-hidden="true"></i> About Infinity SoftHub Technologies
                </div>
                <h1>Building the Future of <span class="gradient-text">Digital Learning</span></h1>
                <p>From custom Web development to AI-powered LMS solutions, we're on a mission to transform how the world learns.</p>
            </div>
        </div>
    </section>

    <!-- About Story Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 anim-fade-right" data-aos="fade-right">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-clock-rotate-left" aria-hidden="true"></i> Our Story
                    </div>
                    <h2 class="h2-mb">A Decade of <span class="gradient-text">Moodle Excellence</span></h2>
                    <p>Founded in 2015, Infinity SoftHub Technologies began with a simple mission: to make learning management systems more accessible, powerful, and user-friendly.</p>
                    <p>Over the past 8+ years, we've grown from a small Moodle customization shop to a full-service Web Development and AI integration powerhouse. Our team has delivered 200+ projects across 15+ countries.</p>
                    <p>Today, we're proud to serve educational institutions, corporations, and training organizations worldwide, empowering 15,000+ learners through our solutions.</p>
                    <div class="mt-2rem">
                        <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                            <i class="fas fa-handshake" aria-hidden="true"></i> Work With Us
                        </a>
                    </div>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="assets/images/about-illustration.svg" alt="Infinity SoftHub Team" class="img-rounded" onerror="this.src='https://via.placeholder.com/600x500/111640/ffffff?text=Team+Experts'">
                        <div class="experience-badge glassmorphic">
                            <div class="exp-number">8+</div>
                            <div class="exp-label">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="grid grid-4 stagger">
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-cubes stats-card-icon"></i>
                    <div class="stats-number counter" data-target="200">0</div>
                    <div class="stats-label">Projects Delivered</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-users-gear stats-card-icon"></i>
                    <div class="stats-number counter" data-target="15000" data-suffix="+">0</div>
                    <div class="stats-label">Users Empowered</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-circle-check stats-card-icon" style="color: var(--accent-green);"></i>
                    <div class="stats-number stats-green">99%</div>
                    <div class="stats-label">Client Satisfaction</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-globe stats-card-icon" style="color: var(--accent-cyan);"></i>
                    <div class="stats-number stats-cyan">15+</div>
                    <div class="stats-label">Countries Served</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Moodle Expertise Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Expertise</div>
                <h2>Web Development <span class="gradient-text">Specialists</span></h2>
                <p class="lead">We don't just work with Moodle - we've mastered it. Here's what sets us apart.</p>
            </div>
            <div class="content-grid-2 mt-3rem">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="img-wrapper">
                        <img src="assets/images/about/Professional-businessman.jpg" alt="Moodle Development Expertise" class="img-rounded" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Moodle+Expertise'">
                    </div>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <h3 class="h3-mb">Why We're Moodle <span class="gradient-text">Experts</span></h3>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>8+ Years Specialized Experience</strong> - Dedicated Moodle development since 2015</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Custom Plugin Development</strong> - 50+ custom Moodle plugins created</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Theme Development</strong> - Beautiful, responsive, accessible themes</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Performance Optimization</strong> - Lightning-fast LMS implementations</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Third-Party Integrations</strong> - Salesforce, SAP, Zoom, and more</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>AI Integration</strong> - Smart learning paths, automated grading, predictive analytics</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Migration Experts</strong> - Zero-downtime Moodle version upgrades</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Scalable Architecture</strong> - From 100 to 100,000+ concurrent users</span></li>
                    </ul>
                    <div class="mt-2rem">
                        <a href="<?php echo base_url('services/web-development.php'); ?>" class="btn btn-outline">
                            <i class="fas fa-graduation-cap" aria-hidden="true"></i> Explore Moodle Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI + LMS Integration -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Innovation</div>
                <h2>AI + LMS <span class="gradient-text">Integration</span></h2>
                <p class="lead">We're pioneering the future of learning by combining Moodle's robustness with cutting-edge AI capabilities.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-robot" aria-hidden="true"></i>
                    </div>
                    <h4>Personalized Learning</h4>
                    <p>AI-powered learning paths that adapt to each student's pace, style, and goals.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <h4>Predictive Analytics</h4>
                    <p>Identify at-risk students early with machine learning models that analyze engagement patterns.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-language" aria-hidden="true"></i>
                    </div>
                    <h4>Natural Language Processing</h4>
                    <p>Automated content tagging, sentiment analysis, and intelligent discussion forum moderation.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h4>Smart Assessments</h4>
                    <p>AI-generated quizzes, automated grading, and intelligent feedback systems.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-microphone" aria-hidden="true"></i>
                    </div>
                    <h4>Voice-Enabled Learning</h4>
                    <p>Voice commands, speech-to-text, and AI voice assistants integrated into your LMS.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>AI Security Monitoring</h4>
                    <p>Proactive threat detection and anomaly monitoring powered by machine learning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Portfolio</div>
                <h2>Featured <span class="gradient-text">Projects</span></h2>
                <p class="lead">Take a look at some of our most impactful Moodle and LMS implementations.</p>
            </div>
            <div class="grid grid-2 mt-3rem">
                <!-- Project 1 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/moodle-lms-development.jpg'); ?>" alt="University LMS Transformation" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/0066ff/ffffff?text=University+LMS'">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Education</div>
                        <h4>University LMS Transformation</h4>
                        <p>A complete Moodle overhaul for a leading university with 8,000+ students. Implemented custom themes, 15+ plugins, and AI-powered course recommendations.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 8,000+ Active Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 40% Engagement Boost</span>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/ai-lms2.jpg'); ?>" alt="Enterprise Training Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/10B981/ffffff?text=Enterprise+Training'">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Corporate</div>
                        <h4>Enterprise Training Platform</h4>
                        <p>Built a custom Moodle-based corporate training platform for a Fortune 500 company with 5,000+ employees. Integrated with SAP and Salesforce.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 5,000+ Employees</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 60% Faster Onboarding</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/Professional.jpg'); ?>" alt="Medical Training LMS" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/0066ff/ffffff?text=Medical+Training'">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Healthcare</div>
                        <h4>Medical Training LMS</h4>
                        <p>Developed a specialized Moodle platform for medical professionals with CME tracking, certification management, and AI-powered content recommendations.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 2,000+ Doctors</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 100% Compliance</span>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/Digital-Solutions.jpg'); ?>" alt="Product Training Portal" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x220/10B981/ffffff?text=Product+Training'">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">E-commerce</div>
                        <h4>Product Training Portal</h4>
                        <p>Created a customer education portal with interactive courses, quizzes, and certification for a leading e-commerce platform.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 10,000+ Customers</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 85% Course Completion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow premium-cta" data-aos="fade-up">
                <h2 class="cta-title">Ready to Build Your <span class="cta-highlight">Dream LMS?</span></h2>
                <p class="cta-text">Let's discuss how our Moodle expertise and AI integration can transform your learning platform.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
