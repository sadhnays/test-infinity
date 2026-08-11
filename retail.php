<?php
$pageTitle = "Retail IT Solutions | Infinity SoftHub";
$pageDescription = "Specialized retail IT solutions including e-commerce platforms, POS systems, inventory management, and customer experience software for modern retail businesses.";
$pageKeywords = "retail IT, e-commerce, POS, inventory management, customer experience, retail software";
$activePage = 'industries';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-store" aria-hidden="true"></i> Retail
                </div>
                <h1>Specialized <span class="gradient-text">Retail IT Solutions</span></h1>
                <p class="hero-subtitle">We deliver innovative technology solutions for retail businesses to enhance customer experiences, optimize operations, and drive sales through omnichannel retail technologies.</p>
                <div class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">
                        Get Free Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="#services" class="btn btn-outline btn-lg">Our Retail Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Overview -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i> Retail Expertise
                    </div>
                    <h2 class="h2-mb">Transforming Retail Through <span class="gradient-text">Technology Innovation</span></h2>
                    <p class="text-secondary mb-1rem">We understand the unique challenges of the retail industry - from omnichannel experiences to inventory management. Our solutions help retailers improve customer engagement, streamline operations, and increase sales through integrated retail technologies.</p>
                    <p class="text-secondary mb-1-5rem">With deep expertise in retail technology, we deliver scalable solutions that connect online and offline channels, optimize inventory, and provide personalized shopping experiences for modern consumers.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>E-Commerce Platforms</strong> - Custom online stores and marketplaces</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>POS Systems</strong> - Modern point-of-sale and checkout solutions</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Inventory Management</strong> - Real-time stock tracking and optimization</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Customer Experience</strong> - Personalization and loyalty programs</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-handshake" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div style="position:relative;">
                        <img src="<?php echo asset('images/Industries-We-Serve/Retail.webp'); ?>" alt="Retail IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/00ccff/ffffff?text=Retail+IT'">
                        <div class="exp-number-badge">
                            <div class="exp-number">85+</div>
                            <div class="exp-label">Retail Projects</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Key Features -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Retail Services</div>
                <h2>Retail <span class="gradient-text">IT Solutions</span></h2>
                <p class="lead">Comprehensive technology solutions tailored for the retail industry.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <h4>E-Commerce Platforms</h4>
                    <p>Custom online stores, marketplaces, mobile commerce, and omnichannel retail solutions with secure payment processing.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-credit-card" aria-hidden="true"></i>
                    </div>
                    <h4>POS Systems</h4>
                    <p>Modern point-of-sale systems, mobile POS, self-checkout kiosks, and integrated payment solutions for seamless checkout experiences.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-boxes" aria-hidden="true"></i>
                    </div>
                    <h4>Inventory Management</h4>
                    <p>Real-time inventory tracking, warehouse management, demand forecasting, and automated replenishment systems.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Mobile & Customer Engagement</h4>
                    <p>Mobile shopping apps, loyalty programs, personalized recommendations, and customer engagement platforms.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Data Security & Compliance</h4>
                    <p>PCI-DSS compliance, data encryption, fraud detection, and customer data protection solutions for retail operations.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <h4>Retail Analytics</h4>
                    <p>Sales analytics, customer behavior analysis, foot traffic analytics, and predictive analytics for data-driven retail decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Technology Stack -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Tech Stack</div>
                <h2>Technologies We <span class="gradient-text">Use for Retail</span></h2>
                <p class="lead">We leverage retail-specific technologies and standards to build engaging, efficient, and secure retail solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-store" aria-hidden="true"></i>
                    </div>
                    <h4>Retail Standards</h4>
                    <p>PCI-DSS, EMV, NFC, and retail data standards for secure payments and interoperability.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Security & Compliance</h4>
                    <p>PCI-DSS compliance, data encryption, and fraud prevention solutions for secure retail transactions.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Mobile & Digital</h4>
                    <p>Responsive design, progressive web apps, native mobile applications, and beacon technology for omnichannel retail experiences.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h4>AI/ML in Retail</h4>
                    <p>Artificial intelligence for demand forecasting, personalized recommendations, inventory optimization, and customer churn prediction.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Process Section -->
    <section id="process" class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Process</div>
                <h2>Retail <span class="gradient-text">Solution Process</span></h2>
                <p class="lead">A structured approach to delivering retail-specific solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">1</div>
                    <h4>Discovery & Analysis</h4>
                    <p>Understanding retail operations, customer journeys, and business goals while identifying improvement opportunities.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">2</div>
                    <h4>Design & Architecture</h4>
                    <p>Creating scalable architectures that integrate with existing retail systems and support omnichannel operations.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">3</div>
                    <h4>Development & Testing</h4>
                    <p>Agile development with rigorous testing, including usability testing, performance testing, and security assessments.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">4</div>
                    <h4>Deployment & Training</h4>
                    <p>Phased deployment with comprehensive training for retail staff, plus ongoing support and maintenance.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- CTA Section -->
    <section class="content-section">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Ready to Transform Your <span class="cta-highlight">Retail Business</span>?</h2>
                <p class="cta-text">Let's discuss how our retail IT solutions can enhance customer experiences, optimize operations, and drive sales through modern retail technologies.</p>
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>