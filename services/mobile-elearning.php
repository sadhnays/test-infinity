<?php
$pageTitle = "Mobile e-Learning Solutions | Responsive LMS | Infinity SoftHub Technologies";
$pageDescription = "Professional mobile e-Learning development services. Build responsive learning platforms that work seamlessly on smartphones, tablets & desktop devices.";
$pageKeywords = "mobile e-Learning, responsive LMS, m-learning, mobile learning solutions, responsive elearning";
$activePage = 'services';
require_once '../includes/header.php';
?>

<style>
/* Service Page Specific Styles */
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%),
                url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=1920&h=600&fit=crop') center/cover;
}

.check-list li {
    position: relative;
    padding-left: 2rem;
    margin-bottom: 0.75rem;
}

.check-list li::before {
    content: '\f00c';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: #00ccff;
}

.overview-image {
    position: relative;
    overflow: hidden;
}

.overview-image::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: 20px;
    bottom: 20px;
    border: 3px solid #00ccff;
    border-radius: 20px;
    z-index: -1;
}

.overview-image img {
    transition: transform 0.4s ease;
}

.overview-image:hover img {
    transform: scale(1.03);
}

/* Feature Cards Improved */
.feature-card {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-color: #00ccff;
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #00ccff 0%, #00ffcc 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
    font-size: 1.5rem;
    color: white;
}

/* Process Steps */
.process-step {
    position: relative;
    text-align: center;
    padding: 1.5rem;
}

.step-number {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #00ccff 0%, #00ffcc 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    box-shadow: 0 10px 30px rgba(0, 204, 255, 0.3);
}

/* Stats Cards */
.stats-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px;
    padding: 2rem;
    text-align: center;
    backdrop-filter: blur(10px);
}

.stats-card:hover {
    border-color: #00ccff;
    transform: translateY(-5px);
}

.stats-number {
    font-size: 3rem;
    font-weight: 700;
    background: linear-gradient(135deg, #00ccff 0%, #00ffcc 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.stats-suffix {
    font-size: 1.5rem;
    font-weight: 600;
    color: #00ccff;
}

.stats-label {
    color: rgba(255,255,255,0.7);
    font-size: 0.95rem;
    margin-top: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, #00ccff 0%, #00ffcc 100%);
    border-radius: 24px;
    padding: 3rem;
    text-align: center;
}

.cta-section h2 {
    font-size: 2rem;
}

.cta-section .btn {
    background: white !important;
    color: #00ccff !important;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.cta-section .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Responsive */
@media (max-width: 768px) {
    .stats-number {
        font-size: 2.5rem;
    }
    .cta-section {
        padding: 2rem 1.5rem;
    }
    .cta-section h2 {
        font-size: 1.5rem;
    }
}
</style>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; border:1px solid #00ccff;">
                <i class="fa fa-tablet-alt" style="margin-right:0.5rem;"></i> Mobile Learning
            </div>
            <h1>Mobile <span class="gradient-text">e-Learning</span></h1>
            <p>Deliver seamless learning experiences on any device. Our mobile-first e-Learning solutions ensure your learners can access content anywhere, anytime.</p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Learn Anywhere, <span class="gradient-text">Anytime</span></h2>
                <p style="margin-bottom:1.5rem; color:var(--text-secondary);">In today's fast-paced world, learning must happen on-the-go. Our mobile e-Learning solutions deliver engaging, responsive experiences across all devices.</p>
                <ul class="check-list" style="list-style:none; padding:0; margin:1.5rem 0;">
                    <li><strong>Responsive Design</strong> - Flawless experience on all screen sizes</li>
                    <li><strong>Offline Access</strong> - Download content for offline learning</li>
                    <li><strong>Push Notifications</strong> - Keep learners engaged and on track</li>
                    <li><strong>Progress Sync</strong> - Seamless sync across all devices</li>
                    <li><strong>Native Apps</strong> - iOS and Android native options</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="padding:1rem 2rem; border-radius:50px;">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left overview-image">
                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=600&h=500&fit=crop" alt="Mobile e-Learning Solutions" style="width:100%; border-radius:16px; box-shadow:0 20px 60px rgba(0,0,0,0.2);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag" style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">What We Offer</div>
            <h2>Mobile Learning <span class="gradient-text">Features</span></h2>
            <p class="lead">Comprehensive mobile e-Learning solutions for modern learners.</p>
        </div>
        <div class="grid grid-2" style="margin-top:3rem;">
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fa fa-mobile-alt"></i>
                </div>
                <h4>Responsive LMS Design</h4>
                <p style="color:var(--text-secondary);">Fully responsive learning platforms that adapt perfectly to smartphones, tablets, and desktop computers.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-download"></i>
                </div>
                <h4>Offline Content Access</h4>
                <p style="color:var(--text-secondary);">Allow learners to download courses and continue learning without an internet connection.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fa fa-bell"></i>
                </div>
                <h4>Push Notifications</h4>
                <p style="color:var(--text-secondary);">Engage learners with timely reminders, course updates, and achievement notifications.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-sync-alt"></i>
                </div>
                <h4>Cross-Device Sync</h4>
                <p style="color:var(--text-secondary);">Progress and data sync seamlessly across all devices - start on mobile, continue on desktop.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fab fa-apple"></i>
                </div>
                <h4>iOS & Android Apps</h4>
                <p style="color:var(--text-secondary);">Native mobile apps for iOS and Android with full LMS functionality.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-video"></i>
                </div>
                <h4>Mobile Video Streaming</h4>
                <p style="color:var(--text-secondary);">Optimized video delivery with adaptive streaming for the best viewing experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag" style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">Our Process</div>
            <h2>Development <span class="gradient-text">Lifecycle</span></h2>
            <p class="lead">A proven approach to deliver engaging mobile learning experiences.</p>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:2rem; margin-top:3rem;">
            <div class="process-step" data-aos="fade-up">
                <div class="step-number">1</div>
                <h4>Requirements</h4>
                <p style="color:var(--text-secondary);">Understand learner needs</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">2</div>
                <h4>Design</h4>
                <p style="color:var(--text-secondary);">Mobile-first UI/UX</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">3</div>
                <h4>Develop</h4>
                <p style="color:var(--text-secondary);">Build LMS & apps</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">4</div>
                <h4>Test</h4>
                <p style="color:var(--text-secondary);">Cross-platform QA</p>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">5</div>
                <h4>Deploy</h4>
                <p style="color:var(--text-secondary);">Launch & support</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="grid grid-4 stagger">
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="95">0</div>
                <div class="stats-suffix">%</div>
                <div class="stats-label">Mobile Traffic</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="50">0</div>
                <div class="stats-suffix">+</div>
                <div class="stats-label">Projects</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">24/7</div>
                <div class="stats-label">Offline Access</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">5+</div>
                <div class="stats-label">Years Focus</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section">
    <div class="container">
        <div class="cta-section anim-fade-up">
            <h2>Ready for <span style="color:#0a1628;">Mobile Learning?</span></h2>
            <p style="color:rgba(0,0,0,0.7); margin:1rem 0 2rem; max-width:500px; margin-left:auto; margin-right:auto;">Let's build a mobile-first learning experience that engages your learners on any device.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
