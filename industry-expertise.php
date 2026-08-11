<?php
// industry-expertise.php
$pageTitle = "Industry Expertise | Infinity SoftHub - Enterprise IT Solutions";
$pageDescription = "Infinity SoftHub serves multiple industries with custom IT solutions and digital transformation services.";
$pageKeywords = "Industry Expertise, Healthcare, Finance, Retail, Manufacturing, Education, Logistics, IT solutions";
$activePage = 'industries';

$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Infinity SoftHub Technologies",
    "url": "https://infinitysofthub.com/",
    "description": "Infinity SoftHub serves multiple industries with IT consulting and digital transformation services."
}';

require_once 'includes/header.php';
?>

<style>
    /* Sticky Navigation Wrapper */
    .sticky-nav-wrapper {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border-bottom: 1px solid var(--border);
        padding: 0.85rem 0;
        position: sticky;
        top: 80px;
        z-index: 900;
        transition: var(--transition);
    }
    
    .sticky-nav-links {
        display: flex;
        gap: 0.75rem;
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding: 0.25rem 0;
    }
    
    .sticky-nav-links::-webkit-scrollbar {
        display: none;
    }
    
    .sticky-nav-link {
        padding: 0.6rem 1.15rem;
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text-gray);
        border: 1px solid transparent;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        white-space: nowrap;
        transition: var(--transition);
        background: rgba(6, 43, 111, 0.03);
    }
    
    .sticky-nav-link:hover, 
    .sticky-nav-link.active {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: var(--white);
        box-shadow: 0 4px 10px rgba(6, 43, 111, 0.15);
    }

    /* Floating Stats Badge */
    .exp-number-badge {
        position: absolute;
        bottom: 20px;
        left: -20px;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
        padding: 1rem 1.5rem;
        border-radius: var(--radius-md);
        z-index: 10;
        animation: float 4s ease-in-out infinite;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 140px;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    .exp-number {
        font-family: var(--font-headings);
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--accent);
        line-height: 1;
        margin-bottom: 0.25rem;
    }

    .exp-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--text-gray);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    @media (max-width: 480px) {
        .exp-number-badge {
            left: 20px !important;
            right: auto !important;
            bottom: -15px;
        }
    }
</style>

<section class="page-hero">
    <div class="hero-grid"></div>
    <div class="hero-scan-line"></div>
    <div class="hero-particles"></div>
    <div class="container">
        <div class="anim-fade-up" data-aos="fade-up">
            <div class="badge badge-primary badge-mb">
                <i class="fas fa-industry" aria-hidden="true"></i> Industries We Serve
            </div>
            <h1>Industry <span class="gradient-text">Expertise</span></h1>
            <p class="hero-subtitle">We deliver custom enterprise-grade IT solutions tailored to the unique goals, compliances, and digital transformations of key global sectors.</p>
        </div>
    </div>
</section>

<!-- Sticky Anchor Quick-Jump Menu -->
<div class="sticky-nav-wrapper" id="stickyNavWrapper">
    <div class="container">
        <div class="sticky-nav-links">
            <a href="#it-training" class="sticky-nav-link active"><i class="fas fa-laptop-code"></i> IT Training</a>
            <a href="#education" class="sticky-nav-link"><i class="fas fa-graduation-cap"></i> Education</a>
            <a href="#corporate-training" class="sticky-nav-link"><i class="fas fa-chalkboard-user"></i> Corporate</a>
            <a href="#healthcare" class="sticky-nav-link"><i class="fas fa-heart-pulse"></i> Healthcare</a>
            <a href="#manufacturing" class="sticky-nav-link"><i class="fas fa-industry"></i> Manufacturing</a>
            <a href="#finance" class="sticky-nav-link"><i class="fas fa-university"></i> Finance</a>
            <a href="#retail" class="sticky-nav-link"><i class="fas fa-cart-shopping"></i> Retail</a>
            <a href="#logistics" class="sticky-nav-link"><i class="fas fa-shipping-fast"></i> Logistics</a>
            <a href="#automotive" class="sticky-nav-link"><i class="fas fa-car"></i> Automotive</a>
            <a href="#government" class="sticky-nav-link"><i class="fas fa-landmark"></i> Government</a>
        </div>
    </div>
</div>

<!-- 1. IT & Software Training Section -->
<section class="content-section" id="it-training">
    <div class="container">
        <div class="content-grid-2" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-laptop-code" aria-hidden="true"></i> IT & Software Training
                </div>
                <h2 class="h2-mb">Digital Solutions for <span class="gradient-text">IT & Software Training</span></h2>
                <p class="text-secondary mb-1rem">The IT training sector is booming with demand for upskilling in web development, mobile apps, AI/ML, cloud computing, and more. We build platforms that make learning interactive and effective.</p>
                <p class="text-secondary mb-1-5rem">We develop custom LMS platforms, coding bootcamp portals, hands-on lab environments, and progress tracking systems that help training institutes deliver high-quality technical education.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>LMS for IT Training</strong> - Custom platforms for coding courses</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Virtual Lab Environments</strong> - Browser-based coding sandboxes</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Progress Tracking</strong> - Real-time student performance analytics</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Certification Systems</strong> - Automated testing and credential issuance</span></li>
                </ul>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                    <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                </a>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/it-opt.jpg'); ?>" alt="IT & Software Training Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=IT+Training'">
                    <div class="exp-number-badge">
                        <div class="exp-number">95%</div>
                        <div class="exp-label">Completion Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 2. Education & E-Learning Section -->
<section class="content-section bg-alt" id="education">
    <div class="container">
        <div class="content-grid-2 reverse" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i> Education & E-Learning
                </div>
                <h2 class="h2-mb">Digital Solutions for <span class="gradient-text">Education</span></h2>
                <p class="text-secondary mb-1rem">The education sector is rapidly embracing digital transformation with e-learning platforms, virtual classrooms, and AI-powered personalized learning experiences.</p>
                <p class="text-secondary mb-1-5rem">We build custom learning management systems, virtual classroom platforms, and educational apps that enhance student engagement and improve learning outcomes.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>LMS Platforms</strong> - Custom learning management systems</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>E-Learning Apps</strong> - Interactive mobile learning experiences</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Virtual Classrooms</strong> - Video conferencing and collaboration tools</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AI-Powered Learning</strong> - Personalized learning paths and analytics</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('education.php'); ?>" class="btn btn-outline">
                        Explore Education Page <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/education-opt.jpg'); ?>" alt="Education & E-Learning Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Education'">
                    <div class="exp-number-badge">
                        <div class="exp-number">15K+</div>
                        <div class="exp-label">Active Learners</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 3. Corporate Training Section -->
<section class="content-section" id="corporate-training">
    <div class="container">
        <div class="content-grid-2" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-success badge-mb-sm">
                    <i class="fas fa-chalkboard-user" aria-hidden="true"></i> Corporate Training
                </div>
                <h2 class="h2-mb">Smart Solutions for <span class="gradient-text">Corporate Training</span></h2>
                <p class="text-secondary mb-1rem">Modern organizations need effective training platforms to upskill their workforce with on-demand learning, progress tracking, and certification management.</p>
                <p class="text-secondary mb-1-5rem">We develop corporate training portals, skill assessment tools, and gamified learning platforms that boost employee performance and retention.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Training Portals</strong> - Centralized learning hubs for global teams</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Skill Assessments</strong> - Automated testing and skill alignment</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Gamified Learning</strong> - Interactive training modules to boost completion</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Progress Analytics</strong> - Comprehensive reporting on employee development</span></li>
                </ul>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                    <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                </a>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/corporate-opt.jpg'); ?>" alt="Corporate Training Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Corporate+Training'">
                    <div class="exp-number-badge">
                        <div class="exp-number">60%</div>
                        <div class="exp-label">Faster Onboarding</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 4. Healthcare & Medical Section -->
<section class="content-section bg-alt" id="healthcare">
    <div class="container">
        <div class="content-grid-2 reverse" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-heart-pulse" aria-hidden="true"></i> Healthcare & Medical
                </div>
                <h2 class="h2-mb">Digital Transformation for <span class="gradient-text">Healthcare</span></h2>
                <p class="text-secondary mb-1rem">Healthcare organizations need secure, HIPAA-compliant solutions for patient management, telemedicine, and electronic health records.</p>
                <p class="text-secondary mb-1-5rem">We develop patient portals, telemedicine platforms, and AI-powered diagnostic tools that improve patient outcomes and operational efficiency.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Patient Portals</strong> - Secure access to medical records and charts</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Telemedicine Apps</strong> - High-definition video consultations</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AI Diagnostics</strong> - Machine learning integration for medical imaging</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Practice Management</strong> - Efficient scheduling and billing automation</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('healthcare.php'); ?>" class="btn btn-outline">
                        Explore Healthcare Page <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/healthcare-opt.jpg'); ?>" alt="Healthcare IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Healthcare'">
                    <div class="exp-number-badge">
                        <div class="exp-number">100%</div>
                        <div class="exp-label">HIPAA Compliant</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 5. Manufacturing & Industrial Section -->
<section class="content-section" id="manufacturing">
    <div class="container">
        <div class="content-grid-2" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-industry" aria-hidden="true"></i> Manufacturing
                </div>
                <h2 class="h2-mb">Industry 4.0 for <span class="gradient-text">Manufacturing</span></h2>
                <p class="text-secondary mb-1rem">Modern manufacturing demands smart factories with IoT sensors, predictive maintenance, and real-time analytics to optimize production.</p>
                <p class="text-secondary mb-1-5rem">Our solutions include smart factory applications, supply chain management systems, and AI-powered quality control that reduce costs and improve throughput.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Smart Factory Apps</strong> - Real-time IoT-enabled dashboard tracking</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Predictive Maintenance</strong> - AI monitors equipment health to limit downtime</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Supply Chain Systems</strong> - End-to-end component visibility and tracking</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Quality Control</strong> - Automated vision-based inspection and reporting</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('manufacturing.php'); ?>" class="btn btn-outline">
                        Explore Manufacturing Page <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/manufacturing-opt.jpg'); ?>" alt="Manufacturing IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Manufacturing'">
                    <div class="exp-number-badge">
                        <div class="exp-number">25%</div>
                        <div class="exp-label">Throughput Increase</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 6. Banking & Finance Section -->
<section class="content-section bg-alt" id="finance">
    <div class="container">
        <div class="content-grid-2 reverse" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-success badge-mb-sm">
                    <i class="fas fa-university" aria-hidden="true"></i> Banking & Finance
                </div>
                <h2 class="h2-mb">FinTech Solutions for <span class="gradient-text">Banking & Finance</span></h2>
                <p class="text-secondary mb-1rem">Financial institutions require secure, compliant, and scalable digital solutions for online banking, fraud detection, and customer engagement.</p>
                <p class="text-secondary mb-1-5rem">We build custom banking platforms, mobile wallets, risk management systems, and AI-driven fraud detection tools that enhance security and user experience.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Digital Banking</strong> - Modern web and mobile banking interfaces</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Fraud Detection</strong> - Real-time AI security audits on transactions</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Wealth Management</strong> - Advanced portfolio allocation algorithms</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Compliance Tools</strong> - Automated financial reporting and audits</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('finance.php'); ?>" class="btn btn-outline">
                        Explore Finance Page <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/finance-opt.jpg'); ?>" alt="Banking & Finance Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Finance'">
                    <div class="exp-number-badge">
                        <div class="exp-number">99.9%</div>
                        <div class="exp-label">Uptime & Security</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 7. Retail & Sales Section -->
<section class="content-section" id="retail">
    <div class="container">
        <div class="content-grid-2" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-cart-shopping" aria-hidden="true"></i> Retail & Sales
                </div>
                <h2 class="h2-mb">Digital Solutions for <span class="gradient-text">Retail</span></h2>
                <p class="text-secondary mb-1rem">Retail and sales businesses need seamless point-of-sale systems, inventory management, and personalized shopping experiences to thrive in the digital age.</p>
                <p class="text-secondary mb-1-5rem">We build custom e-commerce platforms, mobile shopping apps, and AI-powered recommendation engines that increase conversion rates and customer satisfaction.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>E-commerce Platforms</strong> - High-speed, high-conversion online stores</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>POS Integration</strong> - Merged storefront and digital inventory channels</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AI Recommendations</strong> - Dynamic product upselling based on buyer habits</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Inventory Management</strong> - Real-time stock alerts and replenishment logistics</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('retail.php'); ?>" class="btn btn-outline">
                        Explore Retail Page <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/retail-opt.jpg'); ?>" alt="Retail IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Retail'">
                    <div class="exp-number-badge">
                        <div class="exp-number">40%</div>
                        <div class="exp-label">Conversion Boost</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 8. Logistics & Supply Chain Section -->
<section class="content-section bg-alt" id="logistics">
    <div class="container">
        <div class="content-grid-2 reverse" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-shipping-fast" aria-hidden="true"></i> Logistics & Supply Chain
                </div>
                <h2 class="h2-mb">Smart Solutions for <span class="gradient-text">Logistics & Supply Chain</span></h2>
                <p class="text-secondary mb-1rem">We deliver innovative technology solutions for logistics companies, supply chain operators, and transportation businesses to optimize operations and improve visibility.</p>
                <p class="text-secondary mb-1-5rem">With deep expertise in logistics technology, we deliver scalable solutions that optimize supply chains, improve last-mile delivery, and provide real-time tracking.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Supply Chain Management</strong> - Complete supplier-to-delivery visibility</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Transportation Software</strong> - Fleet tracking and optimized dispatch systems</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Warehouse Automation</strong> - Smart WMS and automatic stock counts</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Real-Time Tracking</strong> - Cellular and satellite-based geolocation mapping</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('logistics.php'); ?>" class="btn btn-outline">
                        Explore Logistics Page <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/logistics-opt.jpg'); ?>" alt="Logistics Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Logistics'">
                    <div class="exp-number-badge">
                        <div class="exp-number">30%</div>
                        <div class="exp-label">Route Efficiency</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 9. Automotive & Transportation Section -->
<section class="content-section" id="automotive">
    <div class="container">
        <div class="content-grid-2" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-success badge-mb-sm">
                    <i class="fas fa-car" aria-hidden="true"></i> Automotive & Transportation
                </div>
                <h2 class="h2-mb">OCR & Digital Systems for <span class="gradient-text">Automotive</span></h2>
                <p class="text-secondary mb-1rem">Automotive giants trust us for custom systems like OCR-based document management, checking sheet digitization, and supplier portals.</p>
                <p class="text-secondary mb-1-5rem">We eliminate manual errors, sync gate-entry logs, and build scalable databases to process millions of records with high speed and zero data loss.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>OCR Document Systems</strong> - Automated check-sheet scans via Tesseract OCR</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Gate & DMS Sync</strong> - Real-time entry logs comparison audits</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Legacy Migrations</strong> - Safely migrated millions of vehicle histories</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Staff Permission Portals</strong> - Tailored access for admins and mechanics</span></li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;" class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                    </a>
                    <a href="<?php echo base_url('automotive.php'); ?>" class="btn btn-outline">
                        Explore Case Study <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/automotive-opt.jpg'); ?>" alt="Automotive Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Automotive'">
                    <div class="exp-number-badge">
                        <div class="exp-number">90%</div>
                        <div class="exp-label">Effort Reduced</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- 10. Government & NGOs Section -->
<section class="content-section bg-alt" id="government">
    <div class="container">
        <div class="content-grid-2 reverse" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-success badge-mb-sm">
                    <i class="fas fa-landmark" aria-hidden="true"></i> Government & NGOs
                </div>
                <h2 class="h2-mb">Digital Transformation for <span class="gradient-text">Government & NGOs</span></h2>
                <p class="text-secondary mb-1rem">Government agencies and NGOs need transparent, efficient, and citizen-centric digital solutions for public service delivery and program management.</p>
                <p class="text-secondary mb-1-5rem">We develop citizen portals, grant management systems, and data analytics platforms that improve transparency, efficiency, and public engagement.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Citizen Portals</strong> - Secure online public administration services</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Grant Management</strong> - NGO project funding audits and compliance tracking</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Data Analytics</strong> - In-depth reporting on community outreach metrics</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Open Data Tools</strong> - Secured repositories for transparent reporting</span></li>
                </ul>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                    <i class="fas fa-envelope" aria-hidden="true"></i> Get a Quote
                </a>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/industry/government-opt.jpg'); ?>" alt="Government & NGO Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/062B6F/ffffff?text=Government'">
                    <div class="exp-number-badge">
                        <div class="exp-number">100%</div>
                        <div class="exp-label">Data Encryption</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section">
    <div class="container">
        <div class="cta-section anim-fade-up cta-narrow premium-cta" data-aos="fade-up">
            <h2 class="cta-title">Have a Project in <span class="cta-highlight">Mind?</span></h2>
            <p class="cta-text">Let's discuss how our expert custom engineering and integrations can empower your organization's digital workflow. We build custom web apps, integrations, and LMS setups that drive real ROI.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.content-section[id]');
    const navLinks = document.querySelectorAll('.sticky-nav-link');

    // Scroll Spy using IntersectionObserver
    const observerOptions = {
        root: null,
        rootMargin: '-120px 0px -60% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                        link.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });

    // Smooth scroll for nav links
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerHeight = document.getElementById('navbar') ? document.getElementById('navbar').offsetHeight : 80;
                const stickyNavHeight = document.getElementById('stickyNavWrapper') ? document.getElementById('stickyNavWrapper').offsetHeight : 65;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - (headerHeight + stickyNavHeight - 2);
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>

<?php
require_once 'includes/footer.php';
?>
