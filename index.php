<?php
// index.php - Homepage
$pageTitle = "Connecting Innovation With Modern Digital Solutions | Infinity SoftHub";
$pageDescription = "Premium enterprise IT consulting and digital transformation services. We connect innovation with modern digital solutions for global enterprises.";
$pageKeywords = "IT consulting, digital transformation, enterprise solutions, web development, AI integration, cloud solutions";
$activePage = 'home';

// Page-specific schema
$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Infinity SoftHub Technologies",
    "alternateName": "Infinity SoftHub",
    "url": "https://infinitysofthub.com/",
    "logo": "https://infinitysofthub.com/assets/images/logo.png",
    "description": "Premium enterprise IT consulting and digital transformation services.",
    "sameAs": [
        "https://www.facebook.com/infinitysofthub",
        "https://twitter.com/InfinitySoftHub",
        "https://www.linkedin.com/company/infinitysofthub/"
    ]
}';

require_once 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero animated-bg" id="home">
        <div class="hero-particles" id="heroParticles"></div>

        <!-- Floating Shapes -->
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="hero-shape shape-3"></div>
        <div class="hero-shape shape-4"></div>
        <div class="hero-shape shape-5"></div>

        <!-- Geometric Shapes -->
        <div class="geo-shape square"></div>
        <div class="geo-shape triangle"></div>
        <div class="geo-shape diamond"></div>

        <!-- Scan Line -->
        <div class="hero-scan-line"></div>

        <!-- Grid Overlay -->
        <div class="hero-grid"></div>

        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge" data-aos="fade-down">
                    <i class="fa fa-check-circle"></i>
                    <span>IT Solutions Experts Since 2015</span>
                </div>
                <h1 data-aos="fade-up">
                    Build Scalable <span class="gradient-text">IT</span> & AI-Powered<br>Digital Solutions
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                    We specialize in <strong style="color:#00ccff;">Moodle development</strong>, AI integration, and enterprise learning platforms. Transform your educational vision into a powerful, scalable reality.
                </p>
                <div class="hero-actions" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg glow-pulse">
                        <i class="fa fa-calendar-check"></i>
                        Get Free Consultation
                    </a>
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">
                        <i class="fa fa-arrow-right"></i>
                        View Services
                    </a>
                </div>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                    <div class="hero-stat">
                        <div class="stat-number counter" data-target="15000" data-suffix="+">0</div>
                        <div class="stat-label">Users Empowered</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-number" style="color:var(--accent-cyan); font-weight:var(--font-weight-extrabold); font-size:var(--font-size-2xl);">8+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-number counter" data-target="200" data-suffix="+">0</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-number" style="color:var(--accent-green); font-weight:var(--font-weight-extrabold); font-size:var(--font-size-2xl);">99%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>

            <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                <div class="floating-card">
                    <div class="card-placeholder">
                        <i class="fas fa-laptop-code"></i>
                        <p>Digital Transformation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Services</span></h2>
                <p class="section-subtitle">From custom development to AI-powered solutions, we deliver end-to-end digital transformation</p>
            </div>
            <div class="services-grid">
                <!-- Web Development -->
                <div class="value-card" data-aos="fade-up">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Custom web solutions built with modern technologies, including LMS platforms and enterprise applications.</p>
                    <a href="<?php echo base_url('services/web-development.php'); ?>" style="color:var(--accent); font-weight:600; font-size:0.9rem; display:inline-flex; align-items:center; gap:0.5rem; margin-top:1rem;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Mobile App Development -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>Native and cross-platform mobile apps for iOS and Android with seamless integration.</p>
                    <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" style="color:var(--accent); font-weight:600; font-size:0.9rem; display:inline-flex; align-items:center; gap:0.5rem; margin-top:1rem;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <!-- AI & ML Integration -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>AI & ML Integration</h3>
                    <p>Integrate AI-powered features - personalized learning paths, intelligent assessments, and predictive analytics.</p>
                    <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" style="color:var(--accent); font-weight:600; font-size:0.9rem; display:inline-flex; align-items:center; gap:0.5rem; margin-top:1rem;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Cloud Solutions -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud Solutions</h3>
                    <p>Secure, scalable cloud infrastructure and migration services for enterprises.</p>
                    <a href="<?php echo base_url('services/cloud-solutions.php'); ?>" style="color:var(--accent); font-weight:600; font-size:0.9rem; display:inline-flex; align-items:center; gap:0.5rem; margin-top:1rem;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <!-- UI/UX Design -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Beautiful, intuitive interfaces that enhance user experience and drive engagement.</p>
                    <a href="<?php echo base_url('services/ui-ux-design.php'); ?>" style="color:var(--accent); font-weight:600; font-size:0.9rem; display:inline-flex; align-items:center; gap:0.5rem; margin-top:1rem;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <!-- Digital Marketing -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>Data-driven marketing strategies to grow your online presence and reach.</p>
                    <a href="<?php echo base_url('services/digital-marketing.php'); ?>" style="color:var(--accent); font-weight:600; font-size:0.9rem; display:inline-flex; align-items:center; gap:0.5rem; margin-top:1rem;">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="section core-values" id="values">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">Guiding principles that drive our success</p>
            </div>

            <div class="values-tabs" data-aos="fade-up" data-aos-delay="100">
                <button class="tab-btn active" data-tab="1">Integrity</button>
                <button class="tab-btn" data-tab="2">Innovation</button>
                <button class="tab-btn" data-tab="3">Excellence</button>
                <button class="tab-btn" data-tab="4">Collaboration</button>
            </div>

            <div class="values-cards">
                <div class="value-card active" data-tab="1" data-aos="fade-up">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We uphold the highest standards of honesty and transparency in all engagements.</p>
                </div>

                <div class="value-card" data-tab="2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We embrace creative solutions and emerging technologies to solve complex challenges.</p>
                </div>

                <div class="value-card" data-tab="3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We are committed to delivering exceptional quality in every project we undertake.</p>
                </div>

                <div class="value-card" data-tab="4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We work closely with clients to achieve shared goals and mutual success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="section industries" id="industries">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Industries We Serve</h2>
                <p class="section-subtitle">Delivering tailored solutions across sectors</p>
            </div>

            <div class="industries-grid">
                <div class="industry-card" data-aos="fade-up">
                    <div class="industry-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Healthcare</h3>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3>Finance</h3>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Retail</h3>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Manufacturing</h3>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education</h3>
                </div>

                <div class="industry-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="industry-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Logistics</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container about-container">
            <div class="about-content" data-aos="fade-right">
                <h2 class="section-title">About Infinity SoftHub</h2>
                <div class="blue-underline"></div>
                <p class="about-text">
                    We are a leading IT consulting firm dedicated to helping enterprises navigate the digital landscape.
                    With over 15 years of experience, we deliver solutions that drive growth, efficiency, and competitive advantage.
                </p>

                <div class="about-stats">
                    <div class="stat-item">
                        <h3 class="counter" data-target="150">0</h3>
                        <p>Global Clients</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter" data-target="200">0</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="counter" data-target="15">0</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>

            <div class="about-cards" data-aos="fade-left">
                <div class="mini-card">
                    <i class="fas fa-rocket"></i>
                    <h4>Digital Strategy</h4>
                    <p>Custom roadmaps for digital transformation.</p>
                </div>

                <div class="mini-card">
                    <i class="fas fa-cloud"></i>
                    <h4>Cloud Solutions</h4>
                    <p>Secure and scalable cloud infrastructure.</p>
                </div>

                <div class="mini-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>App Development</h4>
                    <p>Cross-platform mobile and web applications.</p>
                </div>

                <div class="mini-card">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Cyber Security</h4>
                    <p>Enterprise-grade security solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition Section -->
    <section class="section awards">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Awards & Recognition</h2>
                <p class="section-subtitle">Industry accolades we're proud of</p>
            </div>

            <div class="swiper awards-swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-placeholder">🏆</div>
                            <p>Best IT Consultancy 2025</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-placeholder">🥇</div>
                            <p>Top Digital Transformation</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-placeholder">⭐</div>
                            <p>Excellence in Innovation</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-placeholder">🏅</div>
                            <p>Client Satisfaction Award</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="award-card">
                            <div class="award-placeholder">🎖️</div>
                            <p>Fastest Growing Tech Firm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Offices Section -->
    <section class="section offices" id="offices">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Global Offices</h2>
                <p class="section-subtitle">Serving clients worldwide</p>
            </div>

            <div class="offices-grid">
                <div class="office-card active" data-aos="fade-up">
                    <div class="flag">🇺🇸</div>
                    <h3>United States</h3>
                    <p>New York, NY</p>
                </div>

                <div class="office-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flag">🇬🇧</div>
                    <h3>United Kingdom</h3>
                    <p>London, UK</p>
                </div>

                <div class="office-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flag">🇮🇳</div>
                    <h3>India</h3>
                    <p>Bangalore, KA</p>
                </div>

                <div class="office-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flag">🇦🇺</div>
                    <h3>Australia</h3>
                    <p>Sydney, NSW</p>
                </div>

                <div class="office-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="flag">🇸🇬</div>
                    <h3>Singapore</h3>
                    <p>Singapore</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section why-choose-section" id="why-us">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Why Choose <span class="gradient-text">Infinity SoftHub</span></h2>
                <p class="section-subtitle">We combine deep expertise with cutting-edge technology to deliver exceptional results</p>
            </div>
            <div class="features-grid">
                <div class="feature-item" data-aos="fade-up">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>IT Consulting Expert</h4>
                    <p>15+ years of specialized IT consulting experience with 200+ successful implementations worldwide.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>150+ Global Clients</h4>
                    <p>Our solutions empower businesses worldwide, delivering growth and competitive advantage.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h4>Custom Solutions</h4>
                    <p>Tailor-made IT solutions that extend your platform's functionality exactly how you need it.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h4>Scalable Systems</h4>
                    <p>Architectures designed to grow with you — from 100 to 100,000+ users without performance compromise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="section technologies-section" id="technologies">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Built with <span class="gradient-text">Modern Tech Stack</span></h2>
                <p class="section-subtitle">We leverage industry-leading technologies to build robust, future-proof solutions</p>
            </div>
            <div class="tech-grid">
                <div class="tech-logo" data-aos="fade-up">
                    <img src="<?php echo asset('images/technology-stack/moodle.svg'); ?>" alt="Moodle" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="tech-logo" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo asset('images/technology-stack/python.svg'); ?>" alt="Python" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="tech-logo" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo asset('images/technology-stack/amazon-web-services.svg'); ?>" alt="AWS" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="tech-logo" data-aos="fade-up" data-aos-delay="300">
                    <img src="<?php echo asset('images/technology-stack/microsoft-azure.svg'); ?>" alt="Azure" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="tech-logo" data-aos="fade-up" data-aos-delay="400">
                    <img src="<?php echo asset('images/technology-stack/react.svg'); ?>" alt="React" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="tech-logo" data-aos="fade-up" data-aos-delay="500">
                    <img src="<?php echo asset('images/technology-stack/tensorflow.svg'); ?>" alt="TensorFlow" loading="lazy" onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Showcase Section -->
    <section class="section clients-section" id="clients">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Trusted By <span class="gradient-text">Industry Leaders</span></h2>
                <p class="section-subtitle">We've had the privilege of working with leading organizations across multiple sectors</p>
            </div>
            <div class="clients-grid">
                <div class="client-logo" data-aos="fade-up">
                    <img src="<?php echo asset('images/clients/car-dekho.png'); ?>" alt="CarDekho" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo asset('images/clients/ey.png'); ?>" alt="EY" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo asset('images/clients/jakson.png'); ?>" alt="Jakson" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="300">
                    <img src="<?php echo asset('images/clients/suzuki.png'); ?>" alt="Suzuki" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="400">
                    <img src="<?php echo asset('images/clients/dbcl.png'); ?>" alt="DBCL" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="500">
                    <img src="<?php echo asset('images/clients/orient.png'); ?>" alt="Orient" loading="lazy" onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width:800px; margin:0 auto;">
                <h2 style="color:white; font-size:clamp(1.75rem, 4vw, 3rem); margin-bottom:1.5rem;">
                    Ready to Transform Your <span style="color:#60A5FA;">Business?</span>
                </h2>
                <p style="color:rgba(255,255,255,0.8); font-size:1.1rem; margin-bottom:2.5rem; line-height:1.8;">
                    Let's discuss how our IT consulting and digital transformation services can create powerful, engaging digital experiences for your users.
                </p>
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent); font-weight:600;">
                        <i class="fas fa-rocket"></i> Get Free Consultation
                    </a>
                    <a href="#services" class="btn" style="background:transparent; color:white; border:2px solid rgba(255,255,255,0.3);">
                        <i class="fas fa-play-circle"></i> Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
