<?php
$pageTitle = "Hosting & Migration | Moodle Hosting Solutions | Infinity SoftHub Technologies";
$pageDescription = "Secure, scalable Moodle hosting solutions with zero-downtime migration services and 24/7 technical support.";
$pageKeywords = "Moodle hosting, LMS hosting, Moodle migration, zero-downtime migration, scalable hosting";
$activePage = 'services';
require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-cloud-upload-alt"></i> Hosting & Migration
            </div>
            <h1>Hosting & <span class="gradient-text">Migration</span></h1>
            <p>Secure, scalable Moodle hosting with zero-downtime migration services and 24/7 expert support.</p>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Reliable <span class="gradient-text">Moodle Hosting</span></h2>
                <p style="margin-bottom:1.5rem;">We provide secure, high-performance Moodle hosting solutions that scale with your organization. From small schools to large universities - we've got you covered.</p>
                <ul class="check-list">
                    <li><strong>Managed Moodle Hosting</strong> - Fully managed, worry-free hosting</li>
                    <li><strong>Auto-Scaling</strong> - Resources scale with your traffic</li>
                    <li><strong>Daily Backups</strong> - Automated backups with 30-day retention</li>
                    <li><strong>24/7 Monitoring</strong> - Proactive monitoring and alerts</li>
                    <li><strong>CDN Integration</strong> - Global content delivery network</li>
                    <li><strong>Zero-Downtime Migration</strong> - Seamless site transfers</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <img src="<?php echo asset('images/about/hosting-migration.jpg'); ?>" alt="Moodle Hosting & Migration" style="width:100%; border-radius:var(--radius-xl);" loading="lazy" onerror="this.src='https://via.placeholder.com/600x500/0066ff/ffffff?text=Hosting+Migration'">
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">What We Offer</div>
            <h2>Hosting & Migration <span class="gradient-text">Services</span></h2>
            <p class="lead">Complete hosting and migration solutions tailored to your needs.</p>
        </div>
        <div class="grid grid-3 stagger" style="margin-top:3rem;">
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-server"></i></div>
                <h4>Managed Hosting</h4>
                <p>Fully managed Moodle hosting with automatic updates, security patches, and performance optimization.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-exchange-alt"></i></div>
                <h4>Zero-Downtime Migration</h4>
                <p>Seamless migration from your existing LMS or Moodle version with zero user impact.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-tachometer-alt"></i></div>
                <h4>Performance Optimization</h4>
                <p>Caching, CDN, database optimization for lightning-fast performance.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-shield-alt"></i></div>
                <h4>Security Management</h4>
                <p>SSL certificates, firewall configuration, and proactive security monitoring.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-database"></i></div>
                <h4>Backup & Recovery</h4>
                <p>Automated daily backups with point-in-time recovery options.</p>
            </div>
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon"><i class="fa fa-headset"></i></div>
                <h4>24/7 Support</h4>
                <p>Round-the-clock technical support via chat, email, and phone.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hosting Plans -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Hosting Plans</div>
            <h2>Scalable <span class="gradient-text">Hosting Solutions</span></h2>
            <p class="lead">Choose the hosting plan that fits your organization's needs.</p>
        </div>
        <div class="grid grid-3 stagger" style="margin-top:3rem;">
            <div class="card" style="text-align:center; padding:2.5rem;" data-aos="zoom-in">
                <h4 style="color:var(--accent-cyan);">Starter</h4>
                <div style="font-size:2.5rem; font-weight:var(--font-weight-extrabold); margin:1rem 0;">$49<span style="font-size:1rem; color:var(--text-muted);">/mo</span></div>
                <ul class="check-list" style="text-align:left;">
                    <li>Up to 500 users</li>
                    <li>10GB storage</li>
                    <li>Free SSL certificate</li>
                    <li>Daily backups</li>
                    <li>Email support</li>
                </ul>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-outline" style="margin-top:1.5rem; width:100%;">Get Started</a>
            </div>
            <div class="card" style="text-align:center; padding:2.5rem; border:2px solid var(--accent-cyan); position:relative;" data-aos="zoom-in">
                <div style="position:absolute; top:-15px; left:50%; transform:translateX(-50%); background:var(--gradient-primary); color:white; padding:0.25rem 1rem; border-radius:var(--radius-full); font-size:var(--font-size-xs);">POPULAR</div>
                <h4 style="color:var(--accent-blue);">Professional</h4>
                <div style="font-size:2.5rem; font-weight:var(--font-weight-extrabold); margin:1rem 0;">$99<span style="font-size:1rem; color:var(--text-muted);">/mo</span></div>
                <ul class="check-list" style="text-align:left;">
                    <li>Up to 5,000 users</li>
                    <li>50GB storage</li>
                    <li>Free SSL + CDN</li>
                    <li>Daily backups + Staging</li>
                    <li>Priority support</li>
                </ul>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:1.5rem; width:100%;">Get Started</a>
            </div>
            <div class="card" style="text-align:center; padding:2.5rem;" data-aos="zoom-in">
                <h4 style="color:var(--accent-green);">Enterprise</h4>
                <div style="font-size:2.5rem; font-weight:var(--font-weight-extrabold); margin:1rem 0;">Custom</div>
                <ul class="check-list" style="text-align:left;">
                    <li>Unlimited users</li>
                    <li>Custom storage</li>
                    <li>Multi-region CDN</li>
                    <li>Real-time backups</li>
                    <li>24/7 dedicated support</li>
                </ul>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-secondary" style="margin-top:1.5rem; width:100%;">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="cta-section anim-fade-up" style="margin:0 auto; max-width:900px;">
            <h2 style="color:white; margin-bottom:1rem;">Ready for Reliable <span style="color:#00ffcc;">Moodle Hosting?</span></h2>
            <p style="color:rgba(255,255,255,0.8); margin-bottom:2rem;">Let's discuss your hosting needs and find the perfect solution.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent-blue); font-weight:var(--font-weight-bold);">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
