<?php
$pageTitle = "AI & ML Integration | Infinity SoftHub";
$pageDescription = "AI & ML integration services - personalized solutions, predictive analytics, and intelligent automation.";
$pageKeywords = "AI integration, machine learning, predictive analytics, intelligent automation";
$activePage = 'services';

require_once '../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero" data-aos="fade-up">
        <div class="container">
            <h1>AI & ML <span class="gradient-text">Integration</span></h1>
            <p>Transform your business with cutting-edge AI solutions</p>
        </div>
    </section>

    <!-- Service Description -->
    <section class="section">
        <div class="container" style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div data-aos="fade-right">
                <h2 class="section-title" style="text-align:left;">Smart Solutions with <span class="gradient-text">AI Power</span></h2>
                <div class="blue-underline"></div>
                <p style="color:var(--text-gray); line-height:1.8; margin-bottom:1.5rem;">
                    We integrate advanced AI and machine learning technologies to create personalized, adaptive, and intelligent solutions.
                </p>

                <div style="display:flex; flex-direction:column; gap:0.75rem; margin-top:2rem;">
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Personalized Learning Paths</strong> - AI-driven recommendations</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Predictive Analytics</strong> - Identify trends early</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Automated Grading</strong> - Smart assessment & feedback</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <i class="fas fa-check-circle" style="color:var(--accent);"></i>
                        <span><strong>Chatbots</strong> - 24/7 automated support</span>
                    </div>
                </div>

                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:2rem;">
                    <i class="fas fa-handshake"></i> Get Free Consultation
                </a>
            </div>

            <div data-aos="fade-left">
                <div class="floating-card" style="padding:2rem;">
                    <div style="background:var(--bg-light); padding:2rem; border-radius:var(--radius-md); text-align:center;">
                        <i class="fas fa-brain" style="font-size:3rem; color:var(--accent); margin-bottom:1rem;"></i>
                        <h3 style="margin-bottom:1rem;">AI-Powered Solutions</h3>
                        <p style="color:var(--text-gray);">Transforming businesses with intelligent automation and predictive insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background:var(--bg-light);">
        <div class="container" style="text-align:center;" data-aos="fade-up">
            <h2 class="section-title">Ready to Integrate AI?</h2>
            <p class="section-subtitle">Let's discuss how AI can transform your business</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">
                <i class="fas fa-rocket"></i> Start Your AI Journey
            </a>
        </div>
    </section>

<?php
require_once '../includes/footer.php';
?>
