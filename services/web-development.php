<?php
$pageTitle = 'Web Development Services | Infinity SoftHub';
$pageDescription = 'Expert web development services including CMS, eCommerce, and enterprise web applications. Get a free quote today.';
$pageKeywords = 'web development, enterprise web applications, CMS development, eCommerce solutions';
$activePage = 'services';

require_once '../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>Web <span class="gradient-text">Development</span></h1>
            <p>Custom web solutions built with modern technologies</p>
        </div>
    </section>

    <!-- Service Description -->
    <section class="section">
        <div class="container" style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div data-aos="fade-right">
                <h2 class="section-title" style="text-align:left;">Building Digital Experiences That <span class="gradient-text">Drive Results</span></h2>
                <div class="blue-underline"></div>
                <p style="color:var(--text-gray); line-height:1.8; margin-bottom:1.5rem;">
                    We deliver end-to-end web development solutions tailored to your business needs. From custom CMS platforms to enterprise-grade applications.
                </p>
                <p style="color:var(--text-gray); line-height:1.8; margin-bottom:1.5rem;">
                    Our team integrates AI capabilities into web applications, enabling smart automation, personalized user experiences, and data-driven insights.
                </p>

                <div style="display:flex; flex-direction:column; gap:0.75rem; margin-top:2rem;">
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span>Custom LMS & CMS Development</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span>AI-Powered Web Applications</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span>Responsive & Mobile-First Design</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span>Enterprise-Grade Security</span>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left">
                <div class="floating-card" style="padding:2rem;">
                    <div style="background:var(--bg-light); padding:2rem; border-radius:var(--radius-md); text-align:center;">
                        <i class="fas fa-code" style="font-size:3rem; color:var(--accent); margin-bottom:1rem;"></i>
                        <h3 style="margin-bottom:1rem;">150+ Projects Delivered</h3>
                        <p style="color:var(--text-gray);">Successfully delivered web solutions across various industries worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background:var(--bg-light);">
        <div class="container" style="text-align:center;" data-aos="fade-up">
            <h2 class="section-title">Ready to Build Your Web Solution?</h2>
            <p class="section-subtitle">Let's discuss how our web development services can help your business grow</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">
                <i class="fas fa-handshake"></i> Get a Free Consultation
            </a>
        </div>
    </section>

<?php
require_once '../includes/footer.php';
?>
