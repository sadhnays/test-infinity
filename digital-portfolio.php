<?php
// digital-portfolio.php
$pageTitle = "Digital Portfolio | Infinity SoftHub - Web & App Projects";
$pageDescription = "Explore Infinity SoftHub's digital portfolio - web development, mobile apps, and digital transformation projects.";
$pageKeywords = "digital portfolio, web development projects, mobile app portfolio, digital transformation showcase";
$activePage = 'digital-portfolio';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Digital <span class="gradient-text">Portfolio</span></h1>
            <p>Showcasing our web, mobile, and cloud projects</p>
        </div>
    </section>

    <!-- Digital Portfolio Grid -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Digital <span class="gradient-text">Projects</span></h2>
                <p class="section-subtitle">Modern web apps, mobile solutions, and cloud platforms</p>
            </div>

            <div class="portfolio-grid">
                <!-- Web Project 1 -->
                <div class="value-card" data-aos="fade-up">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #062B6F, #2563EB); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-laptop-code" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Web Development</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">E-Learning Platform</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Built a scalable e-learning platform serving 5,000+ students with real-time progress tracking.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">React</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Node.js</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Mobile App 1 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #0B3D91, #3B82F6); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-mobile-alt" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Mobile App</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Fitness Tracking App</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">React Native app with health tracking, workout plans, and social sharing features.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">React Native</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Firebase</span>
                        </div>
                    </div>
                </div>

                <!-- Cloud Project 1 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #2563EB, #60A5FA); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-cloud" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Cloud Solutions</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Cloud Migration</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Migrated 50+ servers to AWS with zero-downtime and 40% cost reduction.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">AWS</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Docker</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Kubernetes</span>
                        </div>
                    </div>
                </div>

                <!-- UI/UX Project -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #041E4D, #0B3D91); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-paint-brush" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">UI/UX Design</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">Banking Dashboard</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Designed a modern banking dashboard with real-time analytics and intuitive navigation.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Figma</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Adobe XD</span>
                        </div>
                    </div>
                </div>

                <!-- AI Project -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #0B3D91, #2563EB); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-brain" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">AI & ML</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">AI Chatbot</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Built an AI-powered chatbot with NLP for customer support, handling 1,000+ queries/day.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Python</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">TensorFlow</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">OpenAI</span>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-image" style="background: linear-gradient(135deg, #2563EB, #0B3D91); height: 200px; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fas fa-chart-line" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <div class="portfolio-content">
                        <span style="color: var(--accent); font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Digital Marketing</span>
                        <h3 style="margin: 0.75rem 0; font-size: 1.2rem;">SEO Campaign</h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">Increased organic traffic by 300% and lead generation by 150% in 6 months.</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem; flex-wrap: wrap;">
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">SEO</span>
                            <span style="background: var(--bg-light); padding: 4px 12px; border-radius: 50px; font-size: 0.8rem; color: var(--text-gray);">Google Ads</span>
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
                <h2 class="section-title">Portfolio <span class="gradient-text">Impact</span></h2>
                <p class="section-subtitle">Numbers that showcase our digital excellence</p>
            </div>

            <div class="about-stats" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="stat-item" data-aos="fade-up">
                    <h3 class="counter" data-target="50">0</h3>
                    <p>Projects Delivered</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="counter" data-target="30">0</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="counter" data-target="5">0</h3>
                    <p>Years Experience</p>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <h3 style="color: var(--accent);">98%</h3>
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
                    Ready to Build Your <span style="color: #60A5FA;">Digital Project?</span>
                </h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; margin-bottom: 2.5rem; line-height: 1.8;">
                    Let's discuss how our digital solutions can bring your vision to life.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background: white; color: var(--accent); font-weight: 600;">
                        <i class="fas fa-rocket"></i> Start Your Project
                    </a>
                    <a href="#services" class="btn" style="background: transparent; color: white; border: 2px solid rgba(255,255,255,0.3);">
                        <i class="fas fa-play-circle"></i> View Services
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
