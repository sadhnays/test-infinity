<?php
$pageTitle = "Web Development Services | Infinity SoftHub";
$pageDescription = "Custom web development services including CMS, eCommerce, enterprise web applications, and AI-powered solutions. Get a free quote today.";
$pageKeywords = "web development, custom web applications, CMS development, eCommerce solutions, responsive design, enterprise web development";
$activePage = 'services';

require_once '../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-code" aria-hidden="true"></i> Web Development
                </div>
                <h1>Custom <span class="gradient-text">Web Development</span></h1>
                <p class="hero-subtitle">Build powerful, scalable, and engaging web solutions tailored to your business needs.</p>
                <div class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">
                        Get Free Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Description with Image -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-laptop-code" aria-hidden="true"></i> Web Expertise
                    </div>
                    <h2 class="h2-mb">Building Digital Experiences That <span class="gradient-text">Drive Results</span></h2>
                    <p class="text-secondary mb-1rem">We deliver end-to-end web development solutions tailored to your business needs. From custom CMS platforms to enterprise-grade applications, we build solutions that scale.</p>
                    <p class="text-secondary mb-1-5rem">Our team integrates AI capabilities into web applications, enabling smart automation, personalized user experiences, and data-driven insights.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Custom LMS & CMS Development</strong> - Tailored content management</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>AI-Powered Web Applications</strong> - Smart automation & insights</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Responsive & Mobile-First Design</strong> - Optimized for all devices</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Enterprise-Grade Security</strong> - Protected & compliant</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-handshake" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div style="position:relative;">
                        <img src="<?php echo asset('images/about/web-ai.jpg'); ?>" alt="Web Development Services" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Web+Development'">
                        <div class="exp-number-badge">
                            <div class="exp-number">150+</div>
                            <div class="exp-label">Projects Delivered</div>
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
                <div class="section-tag">Key Features</div>
                <h2>Web Development <span class="gradient-text">Services</span></h2>
                <p class="lead">Comprehensive web development solutions to establish and grow your digital presence.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-cms" aria-hidden="true"></i>
                    </div>
                    <h4>CMS Development</h4>
                    <p>Custom content management systems including WordPress, Drupal, and Joomla with tailored themes and plugins.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <h4>eCommerce Solutions</h4>
                    <p>Scalable online stores with WooCommerce, Shopify, and custom eCommerce platforms for seamless shopping experiences.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-robot" aria-hidden="true"></i>
                    </div>
                    <h4>AI-Powered Web Apps</h4>
                    <p>Intelligent web applications with AI integration for personalized user experiences and smart automation.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Responsive Design</h4>
                    <p>Mobile-first, responsive designs that deliver optimal user experiences across all devices and screen sizes.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Web Security</h4>
                    <p>Enterprise-grade security with SSL, firewalls, secure authentication, and compliance with industry standards.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Performance Optimization</h4>
                    <p>Lightning-fast websites with advanced caching, image optimization, and code minification for superior performance.</p>
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
                <h2>Technologies We <span class="gradient-text">Use</span></h2>
                <p class="lead">We leverage modern technologies to build robust, scalable web solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-php" aria-hidden="true"></i>
                    </div>
                    <h4>PHP & Frameworks</h4>
                    <p>Laravel, CodeIgniter, Symfony for robust backend development.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-react" aria-hidden="true"></i>
                    </div>
                    <h4>React & Vue.js</h4>
                    <p>Modern frontend frameworks for interactive user interfaces.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-wordpress" aria-hidden="true"></i>
                    </div>
                    <h4>WordPress</h4>
                    <p>Custom themes, plugins, and WooCommerce development.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-node-js" aria-hidden="true"></i>
                    </div>
                    <h4>Node.js & Express</h4>
                    <p>Scalable server-side applications and RESTful APIs.</p>
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
                <h2>Web Development <span class="gradient-text">Process</span></h2>
                <p class="lead">A structured approach to delivering exceptional web solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">1</div>
                    <h4>Discovery</h4>
                    <p>Understand your business goals, target audience, and technical requirements.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">2</div>
                    <h4>Design</h4>
                    <p>Create wireframes, mockups, and interactive prototypes for your approval.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">3</div>
                    <h4>Development</h4>
                    <p>Agile development with regular demos, clean code, and best practices.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">4</div>
                    <h4>Launch</h4>
                    <p>Thorough testing, deployment, and ongoing support for your web solution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Ready to Build Your <span class="cta-highlight">Web Solution</span>?</h2>
                <p class="cta-text">Let's discuss how our web development services can help your business grow and succeed online.</p>
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
require_once '../includes/footer.php';
?>
