<?php
$pageTitle = 'Cloud Solutions | Infinity SoftHub Technologies';
$pageDescription = 'Modern cloud solutions including AI integration, cloud migration, AWS/Azure services, and scalable cloud infrastructure for businesses of all sizes.';
$pageKeywords = 'cloud solutions, cloud migration, AWS services, Azure cloud, AI integration, cloud security, scalable infrastructure, DevOps, cloud consulting';
$activePage = 'services';

require_once '../includes/header.php';
?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up" data-aos="fade-up">
            <div class="badge badge-primary badge-mb">
                <i class="fas fa-cloud" aria-hidden="true"></i> Cloud Solutions
            </div>
            <h1>Scalable <span class="gradient-text">Cloud Solutions</span></h1>
            <p class="hero-subtitle">Transform your business with AI-powered cloud infrastructure, seamless migration, and managed cloud services.</p>
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
                    <i class="fas fa-server" aria-hidden="true"></i> Cloud Expertise
                </div>
                <h2 class="h2-mb">Future-Proof Your <span class="gradient-text">Infrastructure</span></h2>
                <p class="text-secondary mb-1rem">We help businesses migrate to the cloud with minimal downtime, implementing AI-driven solutions for smarter operations and data management.</p>
                <p class="text-secondary mb-1-5rem">Our cloud experts design scalable architectures that grow with your business, reducing costs while improving performance and reliability.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AI-Enhanced Cloud Infrastructure</strong> - Smarter operations</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Seamless Cloud Migration</strong> - Zero data loss</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AWS, Azure & Google Cloud</strong> - Multi-cloud expertise</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>24/7 Monitoring & Support</strong> - Always on</span></li>
                </ul>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/about/cloud-ai.jpg'); ?>" alt="Cloud Solutions Services" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Cloud+Solutions'">
                    <div class="exp-number-badge">
                        <div class="exp-number">99.9%</div>
                        <div class="exp-label">Uptime Guarantee</div>
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
            <h2>Cloud Services <span class="gradient-text">We Offer</span></h2>
            <p class="lead">Comprehensive cloud solutions designed to optimize your business operations.</p>
        </div>
        <div class="grid grid-3 stagger mt-3rem">
            <!-- Feature 1 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-route" aria-hidden="true"></i>
                </div>
                <h4>Cloud Migration</h4>
                <p>Seamless migration from on-premise to cloud with zero data loss and minimal downtime. Support for legacy systems and modern applications.</p>
            </div>
            <!-- Feature 2 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-robot" aria-hidden="true"></i>
                </div>
                <h4>AI-Cloud Integration</h4>
                <p>Integrate AI/ML models into your cloud infrastructure for predictive analytics, automated workflows, and intelligent decision-making.</p>
            </div>
            <!-- Feature 3 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                </div>
                <h4>Cloud Security</h4>
                <p>Enterprise-grade security with encryption, IAM, compliance management, and 24/7 threat monitoring for your cloud environment.</p>
            </div>
            <!-- Feature 4 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fab fa-aws" aria-hidden="true"></i>
                </div>
                <h4>AWS Services</h4>
                <p>Expert implementation of AWS services including EC2, S3, Lambda, RDS, and more for scalable cloud solutions.</p>
            </div>
            <!-- Feature 5 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fab fa-microsoft" aria-hidden="true"></i>
                </div>
                <h4>Azure Cloud</h4>
                <p>Microsoft Azure implementation, migration, and management. Integrate with existing Microsoft ecosystem seamlessly.</p>
            </div>
            <!-- Feature 6 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-chart-line" aria-hidden="true"></i>
                </div>
                <h4>DevOps & CI/CD</h4>
                <p>Automated deployment pipelines, infrastructure as code, and continuous monitoring for faster, reliable releases.</p>
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
            <h2>Cloud Migration <span class="gradient-text">Process</span></h2>
            <p class="lead">A structured approach to ensure smooth, risk-free cloud adoption.</p>
        </div>
        <div class="grid grid-4 stagger mt-3rem">
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">1</div>
                <h4>Assessment</h4>
                <p>Evaluate current infrastructure, identify dependencies, and create a tailored cloud strategy.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">2</div>
                <h4>Architecture</h4>
                <p>Design scalable cloud architecture with AI integration points and security best practices.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">3</div>
                <h4>Migration</h4>
                <p>Execute phased migration with minimal downtime, data integrity checks, and rollback plans.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">4</div>
                <h4>Optimization</h4>
                <p>Continuous monitoring, cost optimization, and performance tuning for your cloud environment.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
            <h2 class="cta-title">Ready to Move to the <span class="cta-highlight">Cloud</span>?</h2>
            <p class="cta-text">Get in touch with our cloud experts today for a free infrastructure assessment and migration plan.</p>
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
