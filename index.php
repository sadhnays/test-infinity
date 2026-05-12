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
<style>
/* Consolidated styles previously inline */
.hero-content {
    text-align: left;
    color: #ffffff;
    z-index: 15;
    position: relative;
}

/* Industries Section Styles */
.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.industry-link {
    text-decoration: none;
    color: inherit;
    display: block;
}

.industry-card {
    background: var(--bg-color);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.industry-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
}

.industry-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.industry-icon {
    background: var(--accent);
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin: 1.5rem auto 1rem;
    color: white;
}

.industry-card h3 {
    text-align: center;
    color: var(--text-color);
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive adjustments for industries section */
@media (max-width: 768px) {
    .industries-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }

    .industry-image {
        height: 150px;
    }

    .industry-icon {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }

    .industry-card h3 {
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .industries-grid {
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }

    .industry-image {
        height: 130px;
    }
}
.hero-badge {
    display: inline-flex;
    color: #ffffff;
}
.hero-heading {
    color: #ffffff;
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    text-align: left;
    text-shadow: 0 2px 15px rgba(0,0,0,0.5);
}
.hero-subtext {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
    text-align: left;
}
.hero-buttons {
    display: flex;
    gap: 1rem;
    justify-content: flex-start;
}
.hero-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    text-align: center;
}
.stat-number {
    color: #ffffff;
    font-size: 2rem;
    font-weight: 700;
}
.stat-label {
    color: rgba(255,255,255,0.8);
}
.service-link {
    color: var(--accent);
    font-weight: 600;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
}
.cta-fullwidth h2 {
    color: white;
    font-size: clamp(1.75rem, 4vw, 3rem);
    margin-bottom: 1.5rem;
}
.cta-fullwidth p {
    color: rgba(255,255,255,0.8);
    font-size: 1.1rem;
    margin-bottom: 2.5rem;
    line-height: 1.8;
}
.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}
.cta-fullwidth .btn:first-child {
    background: white;
    color: var(--accent);
    font-weight: 600;
}
.cta-fullwidth .btn:last-child {
    background: transparent;
    color: white;
    border: 2px solid rgba(255,255,255,0.3);
}
/* Responsive Adjustments */
@media (max-width: 768px) {
    .hero-stats {
        grid-template-columns: repeat(2, 1fr);
    }
    .hero-buttons {
        flex-direction: column;
        align-items: flex-start;
    }
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}
/* Technology Stack Icons */
.hero-tech-stack {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 2rem;
    flex-wrap: wrap;
}
.tech-label {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    font-weight: 500;
}
.tech-icons {
    display: flex;
    gap: 1.25rem;
    flex-wrap: wrap;
}
.tech-icons i {
    font-size: 1.75rem;
    color: rgba(255, 255, 255, 0.6);
    transition: all 0.3s ease;
    cursor: default;
}
.tech-icons i:hover {
    color: #00ccff;
    transform: translateY(-3px);
}

@media (max-width: 480px) {
    .hero-stats {
        grid-template-columns: 1fr;
    }
    .hero-tech-stack {
        flex-direction: column;
        align-items: flex-start;
    }
    .tech-icons {
        gap: 1rem;
    }
    .tech-icons i {
        font-size: 1.5rem;
    }
}
</style>

    <!-- Hero Section -->
    <section class="hero animated-bg" id="home">
        <!-- Background Elements -->
        <div class="hero-particles" id="heroParticles"></div>
        <div class="hero-bg-shapes">
            <div class="glow-circle circle-1"></div>
            <div class="glow-circle circle-2"></div>
            <div class="glow-circle circle-3"></div>
        </div>

        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge" data-aos="fade-down">
                    <i aria-hidden="true" class="fa fa-check-circle"></i>
                    <span>IT Solutions Experts Since 2015</span>
                </div>
                <h1 class="hero-heading" data-aos="fade-up">
                    Build Scalable <span class="gradient-text">IT</span> & AI-Powered<br>Digital Solutions
                </h1>
                <p class="hero-subtext" data-aos="fade-up" data-aos-delay="100">
                    We specialize in <strong style="color:#00ccff;">Moodle development</strong>, AI integration, and enterprise learning platforms. Transform your educational vision into a powerful, scalable reality.
                </p>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary glow-pulse">
                        <i aria-hidden="true" class="fa fa-calendar-check"></i>
                        Get Free Consultation
                    </a>
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline">
                        <i aria-hidden="true" class="fa fa-arrow-right"></i>
                        View Services
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number counter" data-target="15000" data-suffix="+" >0</div>
                        <div class="stat-label" >Users Empowered</div>
                    </div>
                    <div class="hero-stat" data-aos="fade-up" data-aos-delay="350">
                        <div class="stat-number" >8+</div>
                        <div class="stat-label" >Years Experience</div>
                    </div>
                    <div class="hero-stat" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-number counter" data-target="200" data-suffix="+" >0</div>
                        <div class="stat-label" >Projects Delivered</div>
                    </div>
                    <div class="hero-stat" data-aos="fade-up" data-aos-delay="450">
                        <div class="stat-number" >99%</div>
                        <div class="stat-label" >Client Satisfaction</div>
                    </div>
                </div>

                <!-- Technology Stack Icons -->
                <div class="hero-tech-stack" data-aos="fade-up" data-aos-delay="500">
                    <span class="tech-label">Tech Stack:</span>
                    <div class="tech-icons">
                        <i class="fab fa-php" title="PHP"></i>
                        <i class="fab fa-java" title="Java"></i>
                        <i class="fab fa-python" title="Python"></i>
                        <i class="fab fa-react" title="React"></i>
                        <i class="fab fa-angular" title="Angular"></i>
                        <i class="fab fa-node-js" title="Node.js"></i>
                        <i class="fab fa-docker" title="Docker"></i>
                        <i class="fab fa-aws" title="AWS"></i>
                        <i class="fab fa-microsoft" title="Azure"></i>
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
            <div class="industries-grid">
                <!-- Web Development -->
                <a href="<?php echo base_url('services/web-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop" alt="Web Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-code"></i>
                        </div>
                        <h3>Web Development</h3>
                    </div>
                </a>
                <!-- Mobile App Development -->
                <a href="<?php echo base_url('services/mobile-app-development.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=300&fit=crop" alt="Mobile App Development" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Apps</h3>
                    </div>
                </a>
                <!-- AI & ML Integration -->
                <a href="<?php echo base_url('services/ai-ml-integration.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400&h=300&fit=crop" alt="AI & ML Integration" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-brain"></i>
                        </div>
                        <h3>AI & ML</h3>
                    </div>
                </a>
                <!-- Cloud Solutions -->
                <a href="<?php echo base_url('services/cloud-solutions.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&h=300&fit=crop" alt="Cloud Solutions" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-cloud"></i>
                        </div>
                        <h3>Cloud Solutions</h3>
                    </div>
                </a>
                <!-- UI/UX Design -->
                <a href="<?php echo base_url('services/ui-ux-design.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=300&fit=crop" alt="UI/UX Design" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-paint-brush"></i>
                        </div>
                        <h3>UI/UX Design</h3>
                    </div>
                </a>
                <!-- Digital Marketing -->
                <a href="<?php echo base_url('services/digital-marketing.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="500">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop" alt="Digital Marketing" class="industry-image" loading="lazy">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-chart-line"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                    </div>
                </a>
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
                        <i aria-hidden="true" class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We uphold the highest standards of honesty and transparency in all engagements.</p>
                </div>

                <div class="value-card" data-tab="2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i aria-hidden="true" class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We embrace creative solutions and emerging technologies to solve complex challenges.</p>
                </div>

                <div class="value-card" data-tab="3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i aria-hidden="true" class="fas fa-trophy"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We are committed to delivering exceptional quality in every project we undertake.</p>
                </div>

                <div class="value-card" data-tab="4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i aria-hidden="true" class="fas fa-handshake"></i>
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
                <a href="<?php echo base_url('healthcare.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up">
                        <img src="<?php echo asset('images/Industries-We-Serve/Healthcare.webp'); ?>" alt="Healthcare Industry" class="industry-image">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-hospital"></i>
                        </div>
                        <h3>Healthcare</h3>
                    </div>
                </a>

                <a href="<?php echo base_url('finance.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo asset('images/Industries-We-Serve/Finance.webp'); ?>" alt="Finance Industry" class="industry-image">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-university"></i>
                        </div>
                        <h3>Finance</h3>
                    </div>
                </a>

                <a href="<?php echo base_url('retail.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo asset('images/Industries-We-Serve/Retail.webp'); ?>" alt="Retail Industry" class="industry-image">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-shopping-cart"></i>
                        </div>
                        <h3>Retail</h3>
                    </div>
                </a>

                <a href="<?php echo base_url('manufacturing.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo asset('images/Industries-We-Serve/Manufacturing.webp'); ?>" alt="Manufacturing Industry" class="industry-image">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-industry"></i>
                        </div>
                        <h3>Manufacturing</h3>
                    </div>
                </a>

                <a href="<?php echo base_url('education.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo asset('images/Industries-We-Serve/Education.webp'); ?>" alt="Education Industry" class="industry-image">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Education</h3>
                    </div>
                </a>

                <a href="<?php echo base_url('logistics.php'); ?>" class="industry-link">
                    <div class="industry-card" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo asset('images/Industries-We-Serve/Logistics.webp'); ?>" alt="Logistics Industry" class="industry-image">
                        <div class="industry-icon">
                            <i aria-hidden="true" class="fas fa-shipping-fast"></i>
                        </div>
                        <h3>Logistics</h3>
                    </div>
                </a>
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
                    <i aria-hidden="true" class="fas fa-rocket"></i>
                    <h4>Digital Strategy</h4>
                    <p>Custom roadmaps for digital transformation.</p>
                </div>

                <div class="mini-card">
                    <i aria-hidden="true" class="fas fa-cloud"></i>
                    <h4>Cloud Solutions</h4>
                    <p>Secure and scalable cloud infrastructure.</p>
                </div>

                <div class="mini-card">
                    <i aria-hidden="true" class="fas fa-mobile-alt"></i>
                    <h4>App Development</h4>
                    <p>Cross-platform mobile and web applications.</p>
                </div>

                <div class="mini-card">
                    <i aria-hidden="true" class="fas fa-shield-alt"></i>
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
                        <i aria-hidden="true" class="fas fa-award"></i>
                    </div>
                    <h4>IT Consulting Expert</h4>
                    <p>15+ years of specialized IT consulting experience with 200+ successful implementations worldwide.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-users"></i>
                    </div>
                    <h4>150+ Global Clients</h4>
                    <p>Our solutions empower businesses worldwide, delivering growth and competitive advantage.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-puzzle-piece"></i>
                    </div>
                    <h4>Custom Solutions</h4>
                    <p>Tailor-made IT solutions that extend your platform's functionality exactly how you need it.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon-wrapper">
                        <i aria-hidden="true" class="fas fa-expand-arrows-alt"></i>
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
                    <img src="<?php echo asset('images/clients/logo.webp'); ?>" alt="CarDekho" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo asset('images/clients/datasosi-logo-final-v3-1.webp'); ?>" alt="EY" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo asset('images/clients/63f1e54c7e596_Logo-01-2048x632.webp'); ?>" alt="Jakson" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="300">
                    <img src="<?php echo asset('images/clients/Logo_1-removebg-preview-300x169-1.webp'); ?>" alt="Suzuki" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="400">
                    <img src="<?php echo asset('images/clients/xd-academy-logo-blue-bg.webp'); ?>" alt="DBCL" loading="lazy" onerror="this.style.display='none'">
                </div>
                <div class="client-logo" data-aos="fade-up" data-aos-delay="500">
                    <img src="<?php echo asset('images/clients/logo_dc12b217ec79ff9b16bcb03607178ce7_1x.png'); ?>" alt="Orient" loading="lazy" onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-fullwidth">
        <div class="container">
            <div data-aos="fade-up" style="max-width:800px; margin:0 auto;">
                <h2>
                    Ready to Transform Your <span style="color:#60A5FA;">Business?</span>
                </h2>
                <p>
                    Let's discuss how our IT consulting and digital transformation services can create powerful, engaging digital experiences for your users.
                </p>
                <div class="cta-buttons">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                    <a href="#services" class="btn">
                        <i class="fas fa-play-circle" aria-hidden="true"></i> Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
