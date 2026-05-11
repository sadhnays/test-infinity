<?php
$pageTitle = 'UI/UX Design Services | Infinity SoftHub Technologies';
$pageDescription = 'Professional UI/UX design services for web and mobile applications. User-centered design, prototyping, and AI-driven user experience optimization.';
$pageKeywords = 'UI UX design, user experience, user interface, web design, mobile app design, prototyping, Figma, Adobe XD, user research, AI design tools';
$activePage = 'services';

require_once '../includes/header.php';
?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up" data-aos="fade-up">
            <div class="badge badge-primary badge-mb">
                <i class="fas fa-palette" aria-hidden="true"></i> UI/UX Design
            </div>
            <h1>Stunning <span class="gradient-text">UI/UX Design</span></h1>
            <p class="hero-subtitle">User-centered design solutions that engage users and drive conversions for web and mobile platforms.</p>
            <div class="mt-2rem">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 mt-3rem" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-lightbulb" aria-hidden="true"></i> Design Expertise
                </div>
                <h2 class="h2-mb">Design That <span class="gradient-text">Delights Users</span></h2>
                <p class="text-secondary mb-1rem">We create intuitive, visually appealing interfaces that enhance user satisfaction and drive business goals. Our designs work seamlessly across web and mobile platforms.</p>
                <p class="text-secondary mb-1-5rem">Using AI-powered design tools, we analyze user behavior to create data-driven designs that convert visitors into customers.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>User-Centered Design Process</strong> - Research-driven design decisions</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AI-Enhanced User Research</strong> - Data-driven insights</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Responsive Web & Mobile Design</strong> - Seamless across devices</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Interactive Prototyping</strong> - Test before you build</span></li>
                </ul>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/about/ui-ux.jpg'); ?>" alt="UI UX Design Services" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=UI+UX+Design'">
                    <div class="exp-number-badge">
                        <div class="exp-number">98%</div>
                        <div class="exp-label">Client Satisfaction</div>
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
            <h2>Design Services <span class="gradient-text">We Offer</span></h2>
            <p class="lead">Comprehensive UI/UX design services for digital products that users love.</p>
        </div>
        <div class="grid grid-3 stagger mt-3rem">
            <!-- Feature 1 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
                <h4>User Research</h4>
                <p>In-depth user research using AI analytics tools to understand user behavior, needs, and pain points for LMS and web applications.</p>
            </div>
            <!-- Feature 2 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-pencil-ruler" aria-hidden="true"></i>
                </div>
                <h4>Wireframing & Prototyping</h4>
                <p>Interactive wireframes and prototypes using Figma, Adobe XD, and InVision to visualize your product before development.</p>
            </div>
            <!-- Feature 3 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                </div>
                <h4>Mobile App Design</h4>
                <p>Native and cross-platform mobile app designs for iOS and Android. Optimized for usability and engagement.</p>
            </div>
            <!-- Feature 4 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-laptop" aria-hidden="true"></i>
                </div>
                <h4>Web Interface Design</h4>
                <p>Modern, responsive web interfaces for LMS platforms, dashboards, and custom web applications with AI personalization.</p>
            </div>
            <!-- Feature 5 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-eye" aria-hidden="true"></i>
                </div>
                <h4>Usability Testing</h4>
                <p>Rigorous usability testing with real users to identify and fix pain points before launch.</p>
            </div>
            <!-- Feature 6 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-robot" aria-hidden="true"></i>
                </div>
                <h4>AI-Driven Design</h4>
                <p>Leverage AI tools for automated layout suggestions, color palette optimization, and accessibility compliance.</p>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Process Section -->
<section id="process" class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up" data-aos="fade-up">
            <div class="section-tag">Our Process</div>
            <h2>Design Process <span class="gradient-text">We Follow</span></h2>
            <p class="lead">A user-centered design process that delivers results-driven digital experiences.</p>
        </div>
        <div class="grid grid-4 stagger mt-3rem">
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">1</div>
                <h4>Discover</h4>
                <p>Understand business goals, target audience, and user needs through stakeholder interviews and market research.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">2</div>
                <h4>Define</h4>
                <p>Create user personas, journey maps, and information architecture to guide the design process.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">3</div>
                <h4>Design</h4>
                <p>Develop wireframes, prototypes, and high-fidelity designs with iterative feedback from stakeholders.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">4</div>
                <h4>Deliver</h4>
                <p>Hand off design assets, style guides, and specifications to development team for implementation.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
            <h2 class="cta-title">Ready to Elevate Your <span class="cta-highlight">User Experience</span>?</h2>
            <p class="cta-text">Get in touch with our design team today for a free UX audit and design consultation.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                </a>
                <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
