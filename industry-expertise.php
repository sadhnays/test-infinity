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
                <p class="hero-subtitle">We deliver custom IT solutions tailored to the unique challenges of education, healthcare, manufacturing, finance, retail, government, corporate training, and IT & software training sectors.</p>
            </div>
        </div>
    </section>

    <!-- IT & Software Training Section (Top Priority) -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-laptop-code" aria-hidden="true"></i> IT & Software Training
                    </div>
                    <h2 class="h2-mb">Digital Solutions for <span class="gradient-text">IT & Software Training</span></h2>
                    <p class="text-secondary mb-1rem">The IT training sector is booming with demand for upskilling in web development, mobile apps, AI/ML, cloud computing, and more. We build platforms that make learning interactive and effective.</p>
                    <p class="text-secondary mb-1-5rem">We develop custom LMS platforms, coding bootcamp portals, hands-on lab environments, and progress tracking systems that help training institutes deliver high-quality technical education.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>LMS for IT Training</strong> - Custom platforms for coding courses</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Virtual Lab Environments</strong> - Browser-based coding labs and sandboxes</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Progress Tracking</strong> - Real-time student performance analytics</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Certification Systems</strong> - Automated testing and credential issuance</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/digital-solutions-it.jpg'); ?>" alt="IT & Software Training IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=IT+Training+IT'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Education & E-Learning Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/digital-solutions-new.jpg'); ?>" alt="Education & E-Learning IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Education+IT'">
                    </div>
                </div>
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i> Education & E-Learning
                    </div>
                    <h2 class="h2-mb">Digital Solutions for <span class="gradient-text">Education</span></h2>
                    <p class="text-secondary mb-1rem">The education sector is rapidly embracing digital transformation with e-learning platforms, virtual classrooms, and AI-powered personalized learning experiences.</p>
                    <p class="text-secondary mb-1-5rem">We build custom learning management systems, virtual classroom platforms, and educational apps that enhance student engagement and improve learning outcomes.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>LMS Platforms</strong> - Custom learning management systems</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>E-Learning Apps</strong> - Interactive mobile learning experiences</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Virtual Classrooms</strong> - Video conferencing and collaboration tools</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>AI-Powered Learning</strong> - Personalized learning paths and analytics</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Corporate Training Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-success badge-mb-sm">
                        <i class="fas fa-chalkboard-user" aria-hidden="true"></i> Corporate Training
                    </div>
                    <h2 class="h2-mb">Smart Solutions for <span class="gradient-text">Corporate Training</span></h2>
                    <p class="text-secondary mb-1rem">Modern organizations need effective training platforms to upskill their workforce with on-demand learning, progress tracking, and certification management.</p>
                    <p class="text-secondary mb-1-5rem">We develop corporate training portals, skill assessment tools, and gamified learning platforms that boost employee performance and retention.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>Training Portals</strong> - Centralized learning hubs</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Skill Assessments</strong> - Automated testing and certification</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Gamified Learning</strong> - Engaging training experiences</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Progress Analytics</strong> - Track and measure learning outcomes</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/corporate-training.jpg'); ?>" alt="Corporate Training IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/00ccff/ffffff?text=Corporate+Training+IT'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Healthcare & Medical Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/healthcare.jpg'); ?>" alt="Healthcare & Medical IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/00ffcc/ffffff?text=Healthcare+IT'">
                    </div>
                </div>
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-heart-pulse" aria-hidden="true"></i> Healthcare & Medical
                    </div>
                    <h2 class="h2-mb">Digital Transformation for <span class="gradient-text">Healthcare</span></h2>
                    <p class="text-secondary mb-1rem">Healthcare organizations need secure, HIPAA-compliant solutions for patient management, telemedicine, and electronic health records.</p>
                    <p class="text-secondary mb-1-5rem">We develop patient portals, telemedicine platforms, and AI-powered diagnostic tools that improve patient outcomes and operational efficiency.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>Patient Portals</strong> - Secure access to medical records</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Telemedicine Apps</strong> - Video consultations and monitoring</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>AI Diagnostics</strong> - Machine learning for medical imaging</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Practice Management</strong> - Scheduling and billing systems</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Manufacturing & Industrial Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-industry" aria-hidden="true"></i> Manufacturing & Industrial
                    </div>
                    <h2 class="h2-mb">Industry 4.0 for <span class="gradient-text">Manufacturing</span></h2>
                    <p class="text-secondary mb-1rem">Modern manufacturing demands smart factories with IoT sensors, predictive maintenance, and real-time analytics to optimize production.</p>
                    <p class="text-secondary mb-1-5rem">Our solutions include smart factory applications, supply chain management systems, and AI-powered quality control that reduce costs and improve throughput.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>Smart Factory Apps</strong> - IoT-enabled monitoring</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Predictive Maintenance</strong> - AI-powered equipment monitoring</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Supply Chain Systems</strong> - End-to-end visibility</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Quality Control</strong> - Automated inspection and reporting</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/manufacturing.jpg'); ?>" alt="Manufacturing & Industrial IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/8b5cf6/ffffff?text=Manufacturing+IT'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Banking & Finance Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/banking.jpg'); ?>" alt="Banking & Finance IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Banking+IT'">
                    </div>
                </div>
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-success badge-mb-sm">
                        <i class="fas fa-university" aria-hidden="true"></i> Banking & Finance
                    </div>
                    <h2 class="h2-mb">FinTech Solutions for <span class="gradient-text">Banking</span></h2>
                    <p class="text-secondary mb-1rem">Financial institutions require secure, compliant, and scalable digital solutions for online banking, fraud detection, and customer engagement.</p>
                    <p class="text-secondary mb-1-5rem">We build custom banking platforms, mobile wallets, risk management systems, and AI-driven fraud detection tools that enhance security and user experience.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>Digital Banking</strong> - Web and mobile banking platforms</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Fraud Detection</strong> - AI-powered security systems</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Wealth Management</strong> - Portfolio tracking and analytics</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Compliance Tools</strong> - Automated reporting and auditing</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Retail & Sales Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-cart-shopping" aria-hidden="true"></i> Retail & Sales
                    </div>
                    <h2 class="h2-mb">Digital Solutions for <span class="gradient-text">Retail</span></h2>
                    <p class="text-secondary mb-1rem">Retail and sales businesses need seamless point-of-sale systems, inventory management, and personalized shopping experiences to thrive in the digital age.</p>
                    <p class="text-secondary mb-1-5rem">We build custom e-commerce platforms, mobile shopping apps, and AI-powered recommendation engines that increase conversion rates and customer satisfaction.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>E-commerce Platforms</strong> - Custom online stores</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>POS Systems</strong> - Integrated in-store and online sales</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>AI Recommendations</strong> - Personalized product suggestions</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Inventory Management</strong> - Real-time stock tracking</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/retail.jpg'); ?>" alt="Retail & Sales IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/00ccff/ffffff?text=Retail+IT'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Government & NGOs Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/industry/government.jpg'); ?>" alt="Government & NGOs IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/8b5cf6/ffffff?text=Government+IT'">
                    </div>
                </div>
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-success badge-mb-sm">
                        <i class="fas fa-landmark" aria-hidden="true"></i> Government & NGOs
                    </div>
                    <h2 class="h2-mb">Digital Transformation for <span class="gradient-text">Government</span></h2>
                    <p class="text-secondary mb-1rem">Government agencies and NGOs need transparent, efficient, and citizen-centric digital solutions for public service delivery and program management.</p>
                    <p class="text-secondary mb-1-5rem">We develop citizen portals, grant management systems, and data analytics platforms that improve transparency, efficiency, and public engagement.</p>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>Citizen Portals</strong> - Online government services</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Grant Management</strong> - NGO funding and project tracking</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Data Analytics</strong> - Public policy and program insights</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Transparency Tools</strong> - Open data and reporting systems</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i> Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow premium-cta" data-aos="fade-up">
                <h2 class="cta-title">Have a Project in <span class="cta-highlight">Mind?</span></h2>
                <p class="cta-text">Let's discuss how our IT solutions can transform your business, whether you're in education, healthcare, manufacturing, finance, retail, government, corporate training, or IT & software training. We deliver custom digital solutions that drive growth.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
