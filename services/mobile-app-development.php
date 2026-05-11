<?php
$pageTitle = "Mobile App Development | iOS & Android | Infinity SoftHub";
$pageDescription = "Mobile app development services - native iOS, Android, and cross-platform apps with seamless integration.";
$pageKeywords = "mobile app development, iOS app, Android app, React Native, cross-platform apps, Flutter";
$activePage = 'services';

require_once '../includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-mobile-alt" aria-hidden="true"></i> Mobile Development
                </div>
                <h1>Mobile App <span class="gradient-text">Development</span></h1>
                <p class="hero-subtitle">Native and cross-platform mobile apps for iOS and Android with seamless integration.</p>
                <div class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">
                        Get Free Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Description with Image -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i> Mobile Expertise
                    </div>
                    <h2 class="h2-mb">Powerful <span class="gradient-text">Mobile Apps</span> for Learning</h2>
                    <p class="text-secondary mb-1rem">We build mobile applications that bring your platform to users' fingertips. Native performance, beautiful design, and seamless offline capabilities.</p>
                    <p class="text-secondary mb-1-5rem">Our mobile apps integrate with your LMS, enabling learning on-the-go with push notifications, offline mode, and intuitive user experiences.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>iOS & Android</strong> - Native apps for both platforms</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Cross-Platform</strong> - React Native, Flutter solutions</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>LMS Integration</strong> - Seamless Moodle API integration</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Offline Mode</strong> - Learn without internet connection</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-handshake" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div style="position:relative;">
                        <img src="<?php echo asset('images/about/Mobile-app2.jpg'); ?>" alt="Mobile App Development" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Mobile+Apps'">
                        <div class="exp-number-badge">
                            <div class="exp-number">50+</div>
                            <div class="exp-label">Apps Delivered</div>
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
                <h2>Mobile App <span class="gradient-text">Services</span></h2>
                <p class="lead">Complete mobile app solutions from concept to deployment.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-apple" aria-hidden="true"></i>
                    </div>
                    <h4>iOS Development</h4>
                    <p>Native iOS apps with Swift, beautiful UI, and seamless LMS integration for iPhone and iPad.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-android" aria-hidden="true"></i>
                    </div>
                    <h4>Android Development</h4>
                    <p>Native Android apps with Kotlin, material design, and robust performance across all devices.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Cross-Platform</h4>
                    <p>React Native and Flutter apps that run on both iOS and Android with single codebase.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-plug" aria-hidden="true"></i>
                    </div>
                    <h4>LMS Integration</h4>
                    <p>Seamless integration with Moodle, Canvas, and other LMS platforms via RESTful APIs.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-wifi-slash" aria-hidden="true"></i>
                    </div>
                    <h4>Offline Capabilities</h4>
                    <p>Download courses, learn offline, and sync progress when connected to the internet.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-bell" aria-hidden="true"></i>
                    </div>
                    <h4>Push Notifications</h4>
                    <p>Engage users with personalized notifications, reminders, and course updates.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Technology Stack -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Tech Stack</div>
                <h2>Mobile <span class="gradient-text">Technologies</span></h2>
                <p class="lead">We use industry-leading technologies to build powerful mobile applications.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-react" aria-hidden="true"></i>
                    </div>
                    <h4>React Native</h4>
                    <p>Cross-platform apps with native performance and JavaScript.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-google" aria-hidden="true"></i>
                    </div>
                    <h4>Flutter</h4>
                    <p>Google's UI toolkit for building beautiful native apps.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-apple" aria-hidden="true"></i>
                    </div>
                    <h4>Swift (iOS)</h4>
                    <p>Native iOS development with Apple's modern language.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fab fa-android" aria-hidden="true"></i>
                    </div>
                    <h4>Kotlin (Android)</h4>
                    <p>Modern Android development with concise, expressive code.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Process Section -->
    <section id="process" class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Process</div>
                <h2>Mobile App <span class="gradient-text">Process</span></h2>
                <p class="lead">A structured approach to delivering exceptional mobile experiences.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">1</div>
                    <h4>Discovery</h4>
                    <p>Understand your app requirements, target audience, and platform-specific needs.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">2</div>
                    <h4>Design</h4>
                    <p>Create wireframes, UI/UX mockups, and interactive prototypes for approval.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">3</div>
                    <h4>Development</h4>
                    <p>Agile development with regular builds, testing on real devices, and iterative feedback.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">4</div>
                    <h4>Launch</h4>
                    <p>App Store and Google Play deployment with ongoing support and updates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Ready to Build Your <span class="cta-highlight">Mobile App</span>?</h2>
                <p class="cta-text">Let's discuss how our mobile app development services can bring your platform to users' fingertips.</p>
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                        <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                    </a>
                    <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once '../includes/footer.php';
?>
