<?php
$pageTitle = "Mobile App Development | iOS & Android | Infinity SoftHub";
$pageDescription = "Mobile app development services - native iOS, Android, and cross-platform apps with seamless integration.";
$pageKeywords = "mobile app development, iOS app, Android app, React Native, cross-platform apps";
$activePage = 'services';

require_once '../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Mobile App <span class="gradient-text">Development</span></h1>
            <p>Native and cross-platform mobile apps for iOS and Android</p>
        </div>
    </section>

    <!-- Service Description -->
    <section class="section">
        <div class="container" style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div data-aos="fade-right">
                <h2 class="section-title" style="text-align:left;">Powerful <span class="gradient-text">Mobile Apps</span> for Your Business</h2>
                <div class="blue-underline"></div>
                <p style="color:var(--text-gray); line-height:1.8; margin-bottom:1.5rem;">
                    We build mobile applications that bring your services to users' fingertips. Native performance, beautiful design, and seamless offline capabilities.
                </p>

                <div style="display:flex; flex-direction:column; gap:0.75rem; margin-top:2rem;">
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>iOS & Android</strong> - Native apps for both platforms</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Cross-Platform</strong> - React Native, Flutter solutions</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Offline Mode</strong> - Work without internet connection</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Push Notifications</strong> - Engage users effectively</span>
                    </div>
                </div>

                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:2rem;">
                    <i class="fas fa-handshake"></i> Get Free Consultation
                </a>
            </div>

            <div data-aos="fade-left">
                <div class="floating-card" style="padding:2rem;">
                    <div style="background:var(--bg-light); padding:2rem; border-radius:var(--radius-md); text-align:center;">
                        <i class="fas fa-mobile-alt" style="font-size:3rem; color:var(--accent); margin-bottom:1rem;"></i>
                        <h3 style="margin-bottom:1rem;">50+ Apps Delivered</h3>
                        <p style="color:var(--text-gray);">Successfully launched on App Store and Google Play.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background:var(--bg-light);">
        <div class="container" style="text-align:center;" data-aos="fade-up">
            <h2 class="section-title">Ready to Build Your Mobile App?</h2>
            <p class="section-subtitle">Let's discuss how our mobile development services can help your business grow</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">
                <i class="fas fa-rocket"></i> Start Your Project
            </a>
        </div>
    </section>

<?php
require_once '../includes/footer.php';
?>
