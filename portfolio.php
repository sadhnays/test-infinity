<?php
// portfolio.php
$pageTitle = "Portfolio | Infinity SoftHub - Our Work & Projects";
$pageDescription = "Explore Infinity SoftHub's portfolio of digital transformation projects, web development, and enterprise solutions.";
$pageKeywords = "portfolio, our work, digital transformation projects, web development portfolio";
$activePage = 'portfolio';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Our <span class="gradient-text">Portfolio</span></h1>
            <p>Showcasing our best digital transformation work</p>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
                <p class="section-subtitle">A selection of our best work across industries</p>
            </div>

            <div class="portfolio-grid">
                <!-- Project 1 -->
                <div class="value-card" data-aos="fade-up">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #062B6F, #2563EB); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-graduation-cap" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Education</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Moodle LMS for Global University</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Delivered a custom Moodle platform serving 10,000+ students with AI-powered personalized learning paths.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #0B3D91, #3B82F6); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-hospital" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Healthcare</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Healthcare Portal Development</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Built a HIPAA-compliant patient portal with telemedicine features, serving 50+ clinics nationwide.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #2563EB, #60A5FA); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-shopping-cart" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Retail</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">E-Commerce Platform Migration</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Migrated a retail chain's e-commerce platform to a scalable cloud architecture, increasing sales by 40%.</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #041E4D, #0B3D91); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-university" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Finance</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">FinTech Mobile App</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Developed a secure mobile banking app with biometric authentication and real-time analytics.</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #0B3D91, #2563EB); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-industry" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Manufacturing</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">IoT Supply Chain Solution</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Implemented IoT-based supply chain tracking system, reducing delivery times by 30%.</p>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #2563EB, #0B3D91); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-shipping-fast" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Logistics</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Fleet Management System</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Built a real-time fleet tracking platform with route optimization, saving $2M annually in fuel costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width: 800px; margin: 0 auto;">
                <h2 style="color: white; font-size: clamp(1.75rem, 4vw, 3rem); margin-bottom: 1.5rem;">
                    Ready to Build Your <span style="color: #60A5FA;">Next Project?</span>
                </h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; margin-bottom: 2.5rem; line-height: 1.8;">
                    Let's discuss how our digital transformation services can bring your vision to life.
                </p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background: white; color: var(--accent); font-weight: 600;">
                    <i class="fas fa-rocket"></i> Start Your Project
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
