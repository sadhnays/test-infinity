<?php
$pageTitle = 'What We Do | Infinity SoftHub - IT Services & Solutions';
$pageDescription = 'Discover Infinity SoftHub services - Moodle development, AI integration, custom software, web & mobile app development for enterprises.';
$pageKeywords = 'IT services, Moodle development, AI integration, custom software, web development, mobile apps';
$activePage = 'what-we-do';
require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>What We <span class="gradient-text">Do</span></h1>
            <p>End-to-end digital solutions for enterprises - from Moodle development to AI-powered learning platforms</p>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Core <span class="gradient-text">Services</span></h2>
                <p class="section-subtitle">Delivering comprehensive IT solutions with expertise and innovation</p>
            </div>

            <div class="industries-grid">
                <!-- Moodle Development -->
                <a href="<?php echo base_url('services/moodle-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=300&fit=crop" alt="Moodle LMS Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Moodle Development</h3>
                    </div>
                </a>

                <!-- Web Development -->
                <a href="<?php echo base_url('services/web-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop" alt="Web Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Web Development</h3>
                    </div>
                </a>

                <!-- Mobile App Development -->
                <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=300&fit=crop" alt="Mobile App Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Apps</h3>
                    </div>
                </a>

                <!-- AI & ML Integration -->
                <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400&h=300&fit=crop" alt="AI and Machine Learning" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>AI & ML Integration</h3>
                    </div>
                </a>

                <!-- Cloud Solutions -->
                <a href="<?php echo base_url('services/cloud-solutions.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&h=300&fit=crop" alt="Cloud Solutions" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Cloud Solutions</h3>
                    </div>
                </a>

                <!-- UI/UX Design -->
                <a href="<?php echo base_url('services/ui-ux-design.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="500">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=300&fit=crop" alt="UI/UX Design" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>UI/UX Design</h3>
                    </div>
                </a>

                <!-- LearnDash Development -->
                <a href="<?php echo base_url('services/learndash-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="600">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&h=300&fit=crop" alt="LearnDash LMS Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>LearnDash Development</h3>
                    </div>
                </a>

                <!-- Joomla Development -->
                <a href="<?php echo base_url('services/joomla-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="700">
                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=400&h=300&fit=crop" alt="Joomla Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fab fa-joomla"></i>
                        </div>
                        <h3>Joomla Development</h3>
                    </div>
                </a>

                <!-- E-commerce Solutions -->
                <a href="<?php echo base_url('services/ecommerce-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="800">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=300&fit=crop" alt="E-commerce Solutions" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3>E-commerce Solutions</h3>
                    </div>
                </a>

                <!-- Mobile e-Learning -->
                <a href="<?php echo base_url('services/mobile-elearning.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="900">
                        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=400&h=300&fit=crop" alt="Mobile e-Learning Solutions" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>
                        <h3>Mobile e-Learning</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Moodle IT Development Detail -->
    <section class="section bg-light">
        <div class="container">
            <div class="about-container">
                <div class="about-content" data-aos="fade-right">
                    <h2 class="section-title" style="text-align:left;">Moodle <span class="gradient-text">IT Development</span></h2>
                    <div class="blue-underline" style="margin-bottom:1.5rem;"></div>
                    <p>We are Moodle specialists with 8+ years of experience building custom learning management systems. From initial setup to complex customizations, we handle every aspect of your IT journey.</p>

                    <ul style="list-style:none; padding:0; margin:1.5rem 0;">
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Custom Theme Development - Responsive, branded themes</li>
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Plugin Development - 50+ custom plugins created</li>
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Third-Party Integrations - Salesforce, SAP, Zoom</li>
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Performance Optimization - Lightning-fast LMS</li>
                        <li style="padding:0.5rem 0;"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Multi-Tenant Architecture - Serve multiple organizations</li>
                    </ul>

                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i> Get Started
                    </a>
                </div>
                <div class="about-cards" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=500&h=400&fit=crop" alt="Moodle Development" style="width:100%; border-radius:var(--radius-xl); object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- AI Automation Section -->
    <section class="section">
        <div class="container">
            <div class="about-container" style="direction:rtl;">
                <div class="about-content" data-aos="fade-left" style="direction:ltr;">
                    <h2 class="section-title" style="text-align:left;">AI <span class="gradient-text">Automation</span></h2>
                    <div class="blue-underline" style="margin-bottom:1.5rem;"></div>
                    <p>Transform your IT with cutting-edge AI technologies. We integrate machine learning, natural language processing, and predictive analytics into your learning platform.</p>

                    <ul style="list-style:none; padding:0; margin:1.5rem 0;">
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Personalized Learning Paths - AI-driven recommendations</li>
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Automated Grading - Smart assessment & feedback</li>
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Chatbots & Virtual Assistants - 24/7 support</li>
                        <li style="padding:0.5rem 0; border-bottom:1px solid var(--border);"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Predictive Analytics - Identify at-risk learners</li>
                        <li style="padding:0.5rem 0;"><i class="fas fa-check-circle" style="color:var(--accent); margin-right:0.75rem;"></i> Learning Analytics - Deep insights & reporting</li>
                    </ul>

                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i> Explore AI Solutions
                    </a>
                </div>
                <div class="about-cards" data-aos="fade-right" style="direction:ltr;">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=500&h=400&fit=crop" alt="AI Automation" style="width:100%; border-radius:var(--radius-xl); object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Tech <span class="gradient-text">Stack</span></h2>
                <p class="section-subtitle">Industry-leading technologies for robust, future-proof solutions</p>
            </div>

            <div class="industries-grid" style="margin-top:2rem;">
                <div class="industry-card" data-aos="fade-up">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>LMS Platforms</h3>
                    <p style="padding:0 1rem;">Moodle, Canvas, Blackboard, Totara, LearnDash</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>AI & ML</h3>
                    <p style="padding:0 1rem;">Python, TensorFlow, OpenAI, NLP, Scikit-learn</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud & DevOps</h3>
                    <p style="padding:0 1rem;">AWS, Azure, Docker, Kubernetes, Jenkins</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Development</h3>
                    <p style="padding:0 1rem;">React, Node.js, PHP, Python, Java, Swift</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Process</span></h2>
                <p class="section-subtitle">A proven 5-step approach to deliver quality solutions</p>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:2rem; margin-top:3rem;">
                <div class="industry-card" data-aos="fade-up" style="text-align:center;">
                    <div style="width:60px; height:60px; background:var(--accent); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; color:white; font-size:1.5rem; font-weight:bold;">1</div>
                    <h3>Discovery</h3>
                    <p>Understand your goals and requirements</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="100" style="text-align:center;">
                    <div style="width:60px; height:60px; background:var(--accent); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; color:white; font-size:1.5rem; font-weight:bold;">2</div>
                    <h3>Design</h3>
                    <p>Create wireframes and architecture</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="200" style="text-align:center;">
                    <div style="width:60px; height:60px; background:var(--accent); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; color:white; font-size:1.5rem; font-weight:bold;">3</div>
                    <h3>Develop</h3>
                    <p>Agile development with regular demos</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="300" style="text-align:center;">
                    <div style="width:60px; height:60px; background:var(--accent); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; color:white; font-size:1.5rem; font-weight:bold;">4</div>
                    <h3>Test</h3>
                    <p>Comprehensive testing & QA</p>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="400" style="text-align:center;">
                    <div style="width:60px; height:60px; background:var(--accent); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; color:white; font-size:1.5rem; font-weight:bold;">5</div>
                    <h3>Launch</h3>
                    <p>Deploy with training & support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-alt">
        <div class="container" style="text-align:center;">
            <h2 class="section-title" style="color:white;">Have a Project in <span class="gradient-text">Mind?</span></h2>
            <p style="color:rgba(255,255,255,0.8); margin:1rem 0 2rem; max-width:600px; margin-left:auto; margin-right:auto;">Let's discuss how our expertise can bring your vision to life.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="background:white; color:var(--accent);">
                <i class="fas fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
