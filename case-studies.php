<?php
// case-studies.php
$pageTitle = "Case Studies | Infinity SoftHub - Success Stories";
$pageDescription = "Explore our case studies and success stories. See how Infinity SoftHub delivers digital transformation solutions to global enterprises.";
$pageKeywords = "case studies, success stories, digital transformation, IT consulting, enterprise solutions";
$activePage = 'case-studies';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="hero-grid"></div>
        <div class="hero-scan-line"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <h1>Case <span class="gradient-text">Studies</span></h1>
                <p>Explore our success stories and digital transformation projects</p>
            </div>
        </div>
    </section>

    <!-- Case Studies Grid -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Success <span class="gradient-text">Stories</span></h2>
                <p class="section-subtitle">Real results for real clients across industries</p>
            </div>

            <div class="case-grid">
                <!-- Case Study 1 -->
                <div class="case-card" data-aos="fade-up">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #062B6F, #2563EB);">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">Education</span>
                        <h3 class="case-card-title">Moodle LMS for Global University</h3>
                        <p class="case-card-desc">Delivered a custom Moodle platform serving 10,000+ students with AI-powered personalized learning paths.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Moodle</span>
                            <span class="case-tech-tag">AI Integration</span>
                            <span class="case-tech-tag">Cloud</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #0B3D91, #3B82F6);">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">Healthcare</span>
                        <h3 class="case-card-title">Healthcare Portal Development</h3>
                        <p class="case-card-desc">Built a HIPAA-compliant patient portal with telemedicine features, serving 50+ clinics nationwide.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Web Development</span>
                            <span class="case-tech-tag">Security</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="case-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-card-image" style="background: linear-gradient(135deg, #2563EB, #60A5FA);">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="case-card-content">
                        <span class="case-card-tag">Retail</span>
                        <h3 class="case-card-title">E-Commerce Platform Migration</h3>
                        <p class="case-card-desc">Migrated a retail chain's e-commerce platform to a scalable cloud architecture, increasing sales by 40%.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Cloud</span>
                            <span class="case-tech-tag">DevOps</span>
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
                        <p class="case-card-desc">Developed a secure mobile banking app with biometric authentication and real-time analytics.</p>
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
                        <p class="case-card-desc">Implemented IoT-based supply chain tracking system, reducing delivery times by 30%.</p>
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
                        <p class="case-card-desc">Built a real-time fleet tracking platform with route optimization, saving $2M annually in fuel costs.</p>
                        <div class="case-card-tech">
                            <span class="case-tech-tag">Web App</span>
                            <span class="case-tech-tag">Analytics</span>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h3 class="case-stat-number counter" data-target="15000">0</h3>
                    <p class="case-stat-label">Users Empowered</p>
                </div>
                <div class="case-stat-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-cubes case-stat-icon"></i>
                    <h3 class="case-stat-number counter" data-target="200">0</h3>
                    <p class="case-stat-label">Projects Completed</p>
                </div>
                <div class="case-stat-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-calendar-check case-stat-icon"></i>
                    <h3 class="case-stat-number counter" data-target="15">0</h3>
                    <p class="case-stat-label">Years Experience</p>
                </div>
                <div class="case-stat-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-star case-stat-icon" style="color: var(--accent-green);"></i>
                    <h3 class="case-stat-number" style="color: var(--accent-green);">99%</h3>
                    <p class="case-stat-label">Client Satisfaction</p>
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
