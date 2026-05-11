<?php
$pageTitle = "Security Solutions | LMS Security Services | Infinity SoftHub Technologies";
$pageDescription = "Comprehensive security solutions for LMS platforms - SSL implementation, data protection, compliance management, and proactive monitoring.";
$pageKeywords = "LMS security, Moodle security, SSL implementation, data protection, GDPR compliance, security auditing";
$activePage = 'services';
require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-shield-alt"></i> Security
            </div>
            <h1>Security <span class="gradient-text">Solutions</span></h1>
            <p>Comprehensive security auditing, SSL implementation, data protection, and compliance management for your LMS platform.</p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Secure Your <span class="gradient-text">LMS Platform</span></h2>
                <p style="margin-bottom:1.5rem;">We provide comprehensive security solutions to protect your learning platform， user data, and ensure compliance with educational data regulations.</p>
                <ul class="check-list">
                    <li><strong>Security Auditing</strong> - Comprehensive vulnerability assessments</li>
                    <li><strong>SSL/TLS Implementation</strong> - HTTPS encryption for all traffic</li>
                    <li><strong>Data Protection</strong> - GDPR, FERPA, COPPA compliance</li>
                    <li><strong>Access Control</strong> - Role-based permissions, 2FA</li>
                    <li><strong>Proactive Monitoring</strong> - 24/7 threat detection</li>
                    <li><strong>Backup Security</strong> - Encrypted, offsite backups</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <img src="<?php echo asset('images/about/security-solutions.jpg'); ?>" alt="Security Solutions" style="width:100%; border-radius:var(--radius-xl);" loading="lazy" onerror="this.src='https://via.placeholder.com/600x500/0066ff/ffffff?text=Security+Solutions'">
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">What We Offer</div>
            <h2>Security <span class="gradient-text">Services</span></h2>
            <p class="lead">Protect your LMS with industry-leading security practices.</p>
        </div>
        <div class="grid grid-3 stagger" style="margin-top:3rem;">
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-shield-check"></i></div>
                <h4>Security Auditing</h4>
                <p>Comprehensive vulnerability assessments and penetration testing for your LMS.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-lock"></i></div>
                <h4>SSL/TLS Setup</h4>
                <p>SSL certificate installation, configuration, and forced HTTPS.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-user-shield"></i></div>
                <h4>Access Control</h4>
                <p>Role-based access, 2FA, SSO integration for secure authentication.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-database"></i></div>
                <h4>Data Encryption</h4>
                <p>At-rest and in-transit encryption for all sensitive data.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-clipboard-check"></i></div>
                <h4>Compliance Management</h4>
                <p>GDPR, FERPA, COPPA compliance auditing and certification.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-eye"></i></div>
                <h4>24/7 Monitoring</h4>
                <p>Proactive threat detection and incident response services.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section">
    <div class="container">
        <div class="cta-section anim-fade-up" style="margin:0 auto; max-width:900px;">
            <h2 style="color:white; margin-bottom:1rem;">Secure Your <span style="color:#00ffcc;">LMS Today</span></h2>
            <p style="color:rgba(255,255,255,0.8); margin-bottom:2rem;">Let's discuss your security needs and protect your learning platform.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent-blue); font-weight:var(--font-weight-bold);">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
