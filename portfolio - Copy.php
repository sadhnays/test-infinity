<?php
// portfolio.php
$pageTitle = "Portfolio | Infinity SoftHub - Our Work & Projects";
$pageDescription = "Explore Infinity SoftHub's portfolio of digital transformation projects, web development, mobile apps, and enterprise solutions.";
$pageKeywords = "portfolio, our work, digital transformation projects, web development portfolio, mobile app portfolio";
$activePage = 'portfolio';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-briefcase" aria-hidden="true"></i> Our Portfolio
                </div>
                <h1>Our <span class="gradient-text">Portfolio</span></h1>
                <p class="hero-subtitle">Showcasing our best digital transformation work across technologies and industries.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Work</div>
                <h2>Featured <span class="gradient-text">Projects</span></h2>
                <p class="lead">A selection of our best work across Moodle, Angular, WordPress, Mobile CMS, and more.</p>
            </div>

            <div class="grid grid-2 stagger">
                <!-- Project 1 - Moodle LMS -->
                <div class="card" data-aos="zoom-in">
                    <img src="<?php echo asset('images/portfolio/moodle-lms.jpg'); ?>" alt="Moodle LMS Project" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Moodle+LMS'">
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Moodle / LMS</div>
                        <h4>University LMS Transformation</h4>
                        <p class="text-secondary mb-1rem">Custom Moodle platform for 10,000+ students with AI-powered course recommendations and mobile app integration.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 10,000+ Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 40% Engagement</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 - Angular App -->
                <div class="card" data-aos="zoom-in">
                    <img src="<?php echo asset('images/portfolio/angular-app.jpg'); ?>" alt="Angular Web Application" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0B3D91/ffffff?text=Angular+App'">
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Angular / Web</div>
                        <h4>Enterprise Dashboard Platform</h4>
                        <p class="text-secondary mb-1rem">Built with Angular 17+ featuring real-time analytics, role-based access, and AI-driven insights for enterprise clients.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 5,000+ Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 60% Faster Load</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 - WordPress CMS -->
                <div class="card" data-aos="zoom-in">
                    <img src="<?php echo asset('images/portfolio/wordpress-cms.jpg'); ?>" alt="WordPress CMS Project" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/10B981/ffffff?text=WordPress+CMS'">
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">WordPress / CMS</div>
                        <h4>Corporate Website & Blog Portal</h4>
                        <p class="text-secondary mb-1rem">Custom WordPress theme with headless CMS architecture, SEO optimization, and WooCommerce integration.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 200+ Pages</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 85% Traffic Boost</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4 - Mobile CMS -->
                <div class="card" data-aos="zoom-in">
                    <img src="<?php echo asset('images/portfolio/mobile-cms.jpg'); ?>" alt="Mobile CMS Project" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/8B5CF6/ffffff?text=Mobile+CMS'">
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Mobile CMS</div>
                        <h4>Retail Mobile App & CMS</h4>
                        <p class="text-secondary mb-1rem">Cross-platform mobile app (iOS/Android) with headless CMS backend, push notifications, and offline sync.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 50K+ Downloads</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 4.8★ Rating</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5 - Healthcare -->
                <div class="card" data-aos="zoom-in">
                    <img src="<?php echo asset('images/portfolio/healthcare.jpg'); ?>" alt="Healthcare LMS Project" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/EF4444/ffffff?text=Healthcare+LMS'">
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Moodle / Healthcare</div>
                        <h4>Medical Training LMS</h4>
                        <p class="text-secondary mb-1rem">Specialized Moodle platform for medical professionals with CME tracking, AI content recommendations, and HIPAA compliance.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 2,000+ Doctors</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 100% Compliance</span>
                        </div>
                    </div>
                </div>

                <!-- Project 6 - Corporate Training -->
                <div class="card" data-aos="zoom-in">
                    <img src="<?php echo asset('images/portfolio/corporate-training.jpg'); ?>" alt="Corporate Training Platform" class="card-img" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/F59E0B/ffffff?text=Corporate+Training'">
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Angular / Corporate</div>
                        <h4>Enterprise Training Portal</h4>
                        <p class="text-secondary mb-1rem">Angular-based training portal with Moodle integration, progress tracking, certification management, and AI analytics.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-check-circle" aria-hidden="true"></i> 5,000+ Employees</span>
                            <span class="check-item ml-1rem"><i class="fas fa-check-circle" aria-hidden="true"></i> 60% Faster</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Technologies</div>
                <h2>Technologies We <span class="gradient-text">Use</span></h2>
                <p class="lead">We leverage industry-leading technologies to build robust, future-proof solutions.</p>
            </div>
            <div class="grid grid-4 stagger">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-wordpress" aria-hidden="true"></i>
                    </div>
                    <h4>WordPress / CMS</h4>
                    <p>Custom themes, headless CMS, WooCommerce, and plugin development for scalable content platforms.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-angular" aria-hidden="true"></i>
                    </div>
                    <h4>Angular</h4>
                    <p>Modern Angular applications with TypeScript, RxJS, NgRx, and enterprise-grade architecture patterns.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <h4>Moodle LMS</h4>
                    <p>Custom Moodle development, plugin creation, theme design, and AI-powered learning solutions.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Mobile CMS</h4>
                    <p>Cross-platform mobile apps with headless CMS backends, offline sync, and push notifications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Have a Project in <span class="cta-highlight">Mind?</span></h2>
                <p class="cta-text">Let's discuss how our expertise in Moodle, Angular, WordPress, and Mobile CMS can bring your vision to life.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
