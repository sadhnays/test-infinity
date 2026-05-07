<?php
// case-studies.php
$pageTitle = "Case Studies | Infinity SoftHub - Success Stories";
$pageDescription = "Explore our case studies and success stories. See how Infinity SoftHub delivers digital transformation solutions to global enterprises.";
$pageKeywords = "case studies, success stories, digital transformation, IT consulting, enterprise solutions";
$activePage = 'case-studies';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Case <span class="gradient-text">Studies</span></h1>
            <p>Explore our success stories and digital transformation projects</p>
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
                <div class="value-card" data-aos="fade-up">
                    <div class="case-image" style="background: linear-gradient(135deg, #062B6F, #2563EB); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-graduation-cap" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="case-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Education</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Moodle LMS for Global University</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Delivered a custom Moodle platform serving 10,000+ students with AI-powered personalized learning paths.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Moodle</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">AI Integration</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Cloud</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-image" style="background: linear-gradient(135deg, #0B3D91, #3B82F6); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-hospital" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="case-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Healthcare</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Healthcare Portal Development</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Built a HIPAA-compliant patient portal with telemedicine features, serving 50+ clinics nationwide.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Web Development</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Security</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-image" style="background: linear-gradient(135deg, #2563EB, #60A5FA); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-shopping-cart" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="case-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Retail</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">E-Commerce Platform Migration</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Migrated a retail chain's e-commerce platform to a scalable cloud architecture, increasing sales by 40%.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Cloud</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">DevOps</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="case-image" style="background: linear-gradient(135deg, #041E4D, #0B3D91); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-university" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="case-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Finance</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">FinTech Mobile App</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Developed a secure mobile banking app with biometric authentication and real-time analytics.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Mobile App</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Security</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 5 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="case-image" style="background: linear-gradient(135deg, #0B3D91, #2563EB); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-industry" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="case-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Manufacturing</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">IoT Supply Chain Solution</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Implemented IoT-based supply chain tracking system, reducing delivery times by 30%.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">IoT</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Cloud</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 6 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="case-image" style="background: linear-gradient(135deg, #2563EB, #0B3D91); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-shipping-fast" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="case-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Logistics</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Fleet Management System</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Built a real-time fleet tracking platform with route optimization, saving $2M annually in fuel costs.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Web App</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Analytics</span>
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

            <div class="about-stats" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="stat-item" data-aos="fade-up">
                    <h3 class="counter" data-target="15000">0</h3>
                    <p>Users Empowered</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="counter" data-target="200">0</h3>
                    <p>Projects Completed</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="counter" data-target="15">0</h3>
                    <p>Years Experience</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <h3 style="color: var(--accent);">99%</h3>
                    <p>Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: white; font-size: clamp(1.75rem, 4vw, 3rem); margin-bottom: 1.5rem;">
                    Ready to Write Your <span style="color: #60A5FA;">Success Story?</span>
                </h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; margin-bottom: 2.5rem; line-height: 1.8;">
                    Let's discuss how our digital transformation services can help your business achieve remarkable results.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background: white; color: var(--accent); font-weight: 600;">
                        <i class="fas fa-rocket"></i> Get Free Consultation
                    </a>
                    <a href="#services" class="btn" style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3);">
                        <i class="fas fa-play-circle"></i> View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
