<?php
$pageTitle = 'What We Do | IT Development, AI & Custom Software | Infinity SoftHub Technologies';
$pageDescription = 'Discover what Infinity SoftHub Technologies does best - Moodle IT development, AI automation, custom software solutions, and enterprise learning platforms.';
$pageKeywords = 'IT development, AI automation, custom software, Moodle development, eLearning platforms, Infinity SoftHub Technologies services';
$activePage = 'what-we-do';
require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up">
                <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                    <i class="fa fa-briefcase"></i> What We Do
                </div>
                <h1>Our <span class="gradient-text">Core Services</span></h1>
                <p>We deliver end-to-end digital solutions with a focus on Moodle IT, AI automation, and custom software development for educational institutions and enterprises.</p>
            </div>
        </div>
    </section>

    <!-- IT Development Section -->
    <section class="content-section" id="lms-development">
        <div class="container">
            <div class="content-grid-2 anim-fade-right">
                <div>
                    <div class="badge badge-primary" style="margin-bottom:1rem; display:inline-flex;">
                        <i class="fa fa-graduation-cap"></i> Core Service
                    </div>
                    <h2 style="margin-bottom:1.5rem;">Moodle <span class="gradient-text">IT Development</span></h2>
                    <p style="margin-bottom:1.5rem;">We are Moodle specialists with 8+ years of experience building custom learning management systems. From initial setup to complex customizations, we handle every aspect of your IT journey.</p>
                    <ul class="check-list" style="margin-bottom:2rem;">
                        <li><strong>Custom Theme Development</strong> - Responsive, accessible, branded themes</li>
                        <li><strong>Plugin Development</strong> - 50+ custom plugins created</li>
                        <li><strong>Course Development</strong> - Engaging, interactive course content</li>
                        <li><strong>Third-Party Integrations</strong> - Salesforce, SAP, Zoom, and more</li>
                        <li><strong>Performance Optimization</strong> - Lightning-fast IT performance</li>
                        <li><strong>Mobile-Friendly Solutions</strong> - Responsive design for all devices</li>
                        <li><strong>Multi-Tenant Architecture</strong> - Serve multiple organizations</li>
                        <li><strong>Gamification</strong> - Badges, points, leaderboards</li>
                    </ul>
                    <a href="<?php echo base_url('services/moodle-development.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-arrow-right"></i> Learn More About Moodle
                    </a>
                </div>
                <div class="anim-fade-left">
                    <img src="<?php echo asset('images/about/moodle-lms-development.jpg'); ?>" alt="Moodle IT Development" style="width:100%; border-radius:var(--radius-xl);" loading="lazy" onerror="this.src='https://via.placeholder.com/600x500/0066ff/ffffff?text=Moodle+IT+Development'">
                </div>
            </div>
        </div>
    </section>

    <!-- AI Automation Section -->
    <section class="content-section bg-alt" id="ai-automation">
        <div class="container">
            <div class="content-grid-2 reverse anim-fade-left">
                <div>
                    <div class="badge badge-success" style="margin-bottom:1rem; display:inline-flex;">
                        <i class="fa fa-robot"></i> Innovation
                    </div>
                    <h2 style="margin-bottom:1.5rem;">AI <span class="gradient-text">Automation</span></h2>
                    <p style="margin-bottom:1.5rem;">Transform your IT with cutting-edge AI technologies. We integrate machine learning, natural language processing, and predictive analytics into your learning platform.</p>
                    <ul class="check-list" style="margin-bottom:2rem;">
                        <li><strong>Personalized Learning Paths</strong> - AI-driven course recommendations</li>
                        <li><strong>Automated Grading</strong> - Smart assessment and instant feedback</li>
                        <li><strong>Predictive Analytics</strong> - Identify at-risk students early</li>
                        <li><strong>Chatbots & Virtual Assistants</strong> - 24/7 student support</li>
                        <li><strong>Content Generation</strong> - AI-powered quiz and content creation</li>
                        <li><strong>Natural Language Processing</strong> - Smart discussion forums</li>
                        <li><strong>Voice-Enabled Learning</strong> - Speech-to-text, voice commands</li>
                        <li><strong>Learning Analytics</strong> - Deep insights into learning patterns</li>
                    </ul>
                    <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" class="btn btn-secondary">
                        <i class="fa fa-brain"></i> Explore AI Solutions
                    </a>
                </div>
                <div class="anim-fade-right">
                    <img src="<?php echo asset('images/about/AI-automation.jpg'); ?>" alt="AI Automation in IT" style="width:100%; border-radius:var(--radius-xl);" loading="lazy" onerror="this.src='https://via.placeholder.com/600x500/00ccff/ffffff?text=AI+Automation'">
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Software Section -->
    <section class="content-section" id="custom-software">
        <div class="container">
            <div class="content-grid-2 anim-fade-right">
                <div>
                    <div class="badge badge-primary" style="margin-bottom:1rem; display:inline-flex;">
                        <i class="fa fa-code"></i> Development
                    </div>
                    <h2 style="margin-bottom:1.5rem;">Custom <span class="gradient-text">Software Solutions</span></h2>
                    <p style="margin-bottom:1.5rem;">Beyond IT, we build custom web and mobile applications tailored to your unique business needs. Scalable, secure, and user-friendly solutions.</p>
                    <ul class="check-list" style="margin-bottom:2rem;">
                        <li><strong>Web Application Development</strong> - React, Node.js, Python, PHP</li>
                        <li><strong>Mobile App Development</strong> - iOS, Android, React Native</li>
                        <li><strong>E-commerce Solutions</strong> - Custom online stores and marketplaces</li>
                        <li><strong>API Development</strong> - RESTful APIs, GraphQL, microservices</li>
                        <li><strong>Database Design</strong> - MySQL, PostgreSQL, MongoDB</li>
                        <li><strong>Cloud Integration</strong> - AWS, Azure, Google Cloud</li>
                        <li><strong>DevOps & CI/CD</strong> - Automated deployment pipelines</li>
                        <li><strong>Legacy Modernization</strong> - Upgrade older systems</li>
                    </ul>
                    <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-mobile-alt"></i> View Development Services
                    </a>
                </div>
                <div class="anim-fade-left">
                    <img src="<?php echo asset('images/about/custom.jpg'); ?>" alt="Custom Software Development" style="width:100%; border-radius:var(--radius-xl);" loading="lazy" onerror="this.src='https://via.placeholder.com/600x500/00ffcc/ffffff?text=Custom+Software'">
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up">
                <div class="section-tag">Our Tech Stack</div>
                <h2>Technologies We <span class="gradient-text">Master</span></h2>
                <p class="lead">We use industry-leading technologies to build robust, future-proof solutions.</p>
            </div>
            <div class="grid grid-4 stagger" style="margin-top:3rem;">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h4>IT Platforms</h4>
                    <p>Moodle, Canvas, Blackboard, Totara, LearnDash, Teachable</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fa fa-brain"></i>
                    </div>
                    <h4>AI & ML</h4>
                    <p>Python, TensorFlow, PyTorch, OpenAI, NLP, Scikit-learn</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <h4>Cloud & DevOps</h4>
                    <p>AWS, Azure, Google Cloud, Docker, Kubernetes, Jenkins</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <h4>Development</h4>
                    <p>React, Node.js, PHP, Python, Java, Swift, Kotlin</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Overview -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up">
                <div class="section-tag">Our Process</div>
                <h2>How We <span class="gradient-text">Deliver</span></h2>
                <p class="lead">A proven 5-step process that ensures quality, timeliness, and your complete satisfaction.</p>
            </div>
            <div class="process-grid stagger" style="margin-top:3rem;">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">1</div>
                    <div class="step-connector"></div>
                    <h4>Discovery</h4>
                    <p>Understand your goals, users, and technical requirements.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">2</div>
                    <div class="step-connector"></div>
                    <h4>Design</h4>
                    <p>Create wireframes, mockups, and technical architecture.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">3</div>
                    <div class="step-connector"></div>
                    <h4>Develop</h4>
                    <p>Agile development with regular demos and feedback.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">4</div>
                    <div class="step-connector"></div>
                    <h4>Test</h4>
                    <p>Comprehensive testing across devices and use cases.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">5</div>
                    <h4>Launch</h4>
                    <p>Smooth deployment with training and ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up" style="margin:0 auto; max-width:900px;">
                <h2 style="color:white; margin-bottom:1rem;">Have a Project in <span style="color:#00ffcc;">Mind?</span></h2>
                <p style="color:rgba(255,255,255,0.8); margin-bottom:2rem;">Let's discuss how our Moodle expertise and custom software development can bring your vision to life.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent-blue); font-weight:var(--font-weight-bold);">
                    <i class="fa fa-rocket"></i> Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
