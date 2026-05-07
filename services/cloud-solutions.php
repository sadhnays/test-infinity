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
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-cloud"></i> Cloud Solutions
            </div>
            <h1>Scalable <span class="gradient-text">Cloud Solutions</span></h1>
            <p class="hero-subtitle">Transform your business with AI-powered cloud infrastructure, seamless migration, and managed cloud services.</p>
            <div class="hero-cta" style="margin-top:2rem;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fa fa-arrow-right"></i></a>
                <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="content-section">
    <div class="container">
        <div class="grid grid-2" style="gap:3rem; align-items:center;">
            <div class="anim-fade-right">
                <div class="badge badge-secondary" style="margin-bottom:1rem;">Cloud Expertise</div>
                <h2>Future-Proof Your <span class="gradient-text">Infrastructure</span></h2>
                <p>We help businesses migrate to the cloud with minimal downtime, implementing AI-driven solutions for smarter operations and data management.</p>
                <p>Our cloud experts design scalable architectures that grow with your business, reducing costs while improving performance and reliability.</p>
                <ul class="feature-list" style="margin-top:1.5rem; list-style:none; padding:0;">
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> AI-Enhanced Cloud Infrastructure</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> Seamless Cloud Migration</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> AWS, Azure & Google Cloud</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> 24/7 Monitoring & Support</li>
                </ul>
            </div>
            <div class="anim-fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/about/cloud-ai.jpg'); ?>" alt="Cloud Solutions Services" style="width:100%; border-radius:var(--radius-xl); border:1px solid var(--glass-border);" loading="lazy">
                    <div style="position:absolute; bottom:-1.5rem; left:-1.5rem; background:var(--gradient-primary); padding:1.5rem; border-radius:var(--radius-lg); box-shadow:var(--shadow-lg);">
                        <div style="color:white; font-size:2rem; font-weight:700;">99.9%</div>
                        <div style="color:rgba(255,255,255,0.9); font-size:0.875rem;">Uptime Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="text-center anim-fade-up" style="margin-bottom:3rem;">
            <div class="badge badge-primary" style="margin-bottom:1rem; display:inline-flex;">
                <i class="fa fa-star"></i> Key Features
            </div>
            <h2>Cloud Services <span class="gradient-text">We Offer</span></h2>
            <p style="color:var(--text-secondary); max-width:600px; margin:0 auto;">Comprehensive cloud solutions designed to optimize your business operations.</p>
        </div>
        <div class="grid grid-3" style="gap:1.5rem;">
            <!-- Feature 1 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-migration" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Cloud Migration</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Seamless migration from on-premise to cloud with zero data loss and minimal downtime. Support for legacy systems and modern applications.</p>
            </div>
            <!-- Feature 2 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-robot" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">AI-Cloud Integration</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Integrate AI/ML models into your cloud infrastructure for predictive analytics, automated workflows, and intelligent decision-making.</p>
            </div>
            <!-- Feature 3 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-shield-alt" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Cloud Security</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Enterprise-grade security with encryption, IAM, compliance management, and 24/7 threat monitoring for your cloud environment.</p>
            </div>
            <!-- Feature 4 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-aws" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">AWS Services</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Expert implementation of AWS services including EC2, S3, Lambda, RDS, and more for scalable cloud solutions.</p>
            </div>
            <!-- Feature 5 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-microsoft" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Azure Cloud</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Microsoft Azure implementation, migration, and management. Integrate with existing Microsoft ecosystem seamlessly.</p>
            </div>
            <!-- Feature 6 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-chart-line" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">DevOps & CI/CD</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Automated deployment pipelines, infrastructure as code, and continuous monitoring for faster, reliable releases.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="content-section">
    <div class="container">
        <div class="text-center anim-fade-up" style="margin-bottom:3rem;">
            <div class="badge badge-primary" style="margin-bottom:1rem; display:inline-flex;">
                <i class="fa fa-tasks"></i> Our Process
            </div>
            <h2>Cloud Migration <span class="gradient-text">Process</span></h2>
            <p style="color:var(--text-secondary); max-width:600px; margin:0 auto;">A structured approach to ensure smooth, risk-free cloud adoption.</p>
        </div>
        <div class="grid grid-4" style="gap:1.5rem;">
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">1</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Assessment</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Evaluate current infrastructure, identify dependencies, and create a tailored cloud strategy.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">2</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Architecture</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Design scalable cloud architecture with AI integration points and security best practices.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">3</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Migration</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Execute phased migration with minimal downtime, data integrity checks, and rollback plans.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">4</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Optimization</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Continuous monitoring, cost optimization, and performance tuning for your cloud environment.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="text-center anim-fade-up" style="max-width:700px; margin:0 auto;">
            <h2>Ready to Move to the <span class="gradient-text">Cloud</span>?</h2>
            <p style="color:var(--text-secondary); font-size:1.1rem; margin-bottom:2rem;">Get in touch with our cloud experts today for a free infrastructure assessment and migration plan.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fa fa-arrow-right"></i></a>
                <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
