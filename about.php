<?php
// about.php
$pageTitle = "About Infinity SoftHub | Premium Enterprise IT Consulting & Software Engineering";
$pageKeywords = "about Infinity SoftHub, IT consulting, custom software development, enterprise solutions, LMS experts, cloud DevOps, company story";
$activePage = 'about';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="hero-grid"></div>
        <div class="hero-scan-line"></div>
        <div class="hero-particles"></div>
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-info-circle" aria-hidden="true"></i> About Infinity SoftHub Technologies
                </div>
                <h1>Architecting the Future of <span class="gradient-text">Enterprise IT</span></h1>
                <p>We build highly scalable software solutions, intelligent digital workspaces, and cloud infrastructure to drive business growth.</p>
            </div>
        </div>
    </section>

    <!-- About Story Section -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 anim-fade-right" data-aos="fade-right">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-clock-rotate-left" aria-hidden="true"></i> Our Story
                    </div>
                    <h2 class="h2-mb">A Legacy of <span class="gradient-text">Technical Innovation</span></h2>
                    <p>Established with a vision to deliver premium enterprise software engineering, Infinity SoftHub Technologies has evolved into a trusted global IT consulting partner. We bridge the gap between complex backend engineering and elegant, user-centric interfaces.</p>
                    <p>Over the years, we have scaled our capabilities from advanced online learning architectures to complete custom product designs, enterprise database configurations, and robust cloud integrations. Our engineering team has successfully shipped over 200 high-performance platforms across 15+ countries.</p>
                    <p>Today, we empower global corporations, healthcare institutions, and educational academies by designing resilient software products that effortlessly support hundreds of thousands of active users worldwide.</p>
                    <div class="mt-2rem">
                        <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                            <i class="fas fa-handshake" aria-hidden="true"></i> Collaborate With Us
                        </a>
                    </div>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/about/about_team_collaboration.png'); ?>" alt="Infinity SoftHub Software Engineering Team" class="img-rounded" loading="lazy">
                        <div class="experience-badge glassmorphic">
                            <div class="exp-number">15+</div>
                            <div class="exp-label">Years IT Expertise</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="grid grid-4 stagger">
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-cubes stats-card-icon"></i>
                    <div class="stats-number counter" data-target="200">0</div>
                    <div class="stats-label">Platforms Delivered</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-users-gear stats-card-icon"></i>
                    <div class="stats-number counter" data-target="15000" data-suffix="+">0</div>
                    <div class="stats-label">Active Users Empowered</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-circle-check stats-card-icon" style="color: var(--accent-green);"></i>
                    <div class="stats-number stats-green">99%</div>
                    <div class="stats-label">Client Retention & Satisfaction</div>
                </div>
                <div class="stats-card" data-aos="zoom-in">
                    <i class="fas fa-globe stats-card-icon" style="color: var(--accent-cyan);"></i>
                    <div class="stats-number stats-cyan">15+</div>
                    <div class="stats-label">Countries Served Globally</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Our Competencies</div>
                <h2>Custom Software & LMS <span class="gradient-text">Specialists</span></h2>
                <p class="lead">We deliver scalable architectures, custom modules, and high-performance server logic tailored to your exact requirements.</p>
            </div>
            <div class="content-grid-2 mt-3rem">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="img-wrapper">
                        <img src="<?php echo asset('images/about/about_developers_team.png'); ?>" alt="Infinity SoftHub Software Developers Coding Workstations" class="img-rounded" loading="lazy">
                    </div>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <h3 class="h3-mb">Why Partners <span class="gradient-text">Trust Us</span></h3>
                    <ul class="premium-check-list">
                        <li><i class="fas fa-circle-check"></i><span><strong>15+ Years IT Consulting Expertise</strong> - Delivering robust results for workflows.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Custom Application Development</strong> - Tailored web, desktop, and mobile products.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Custom LMS & Extension Design</strong> - Rich plugin creation and specialized platforms.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Cloud Infrastructure & DevOps</strong> - Highly available, auto-scaling setups on AWS and Azure.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Enterprise Integrations</strong> - Connecting database operations directly to SAP and Salesforce APIs.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Intelligent Automation</strong> - Introducing analytics formulas and workflow schedulers.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Database Management</strong> - Handling seamless upgrades, security audits, and backups.</span></li>
                        <li><i class="fas fa-circle-check"></i><span><strong>Scalable Engineering</strong> - Architectures built to support over 100,000 active concurrent users.</span></li>
                    </ul>
                    <div class="mt-2rem">
                        <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline">
                            <i class="fas fa-rocket" aria-hidden="true"></i> View Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI + Smart Automation -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Innovation</div>
                <h2>Intelligent AI & Cloud <span class="gradient-text">Solutions</span></h2>
                <p class="lead">We shape modern digital workflows by combining scalable application code with intelligent AI processing elements.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-robot" aria-hidden="true"></i>
                    </div>
                    <h4>Intelligent Workflows</h4>
                    <p>Dynamic recommendation engines and algorithms that optimize daily operating paths for team members.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <h4>Predictive Analytics</h4>
                    <p>Identify critical patterns early using machine learning models built to compute database trends.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-language" aria-hidden="true"></i>
                    </div>
                    <h4>Natural Language Processing</h4>
                    <p>Automated text categorization, chat interfaces, content taggers, and intelligent forum scanners.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h4>Smart Platforms</h4>
                    <p>Automated assessment generators, digital grading tools, and real-time database validation rules.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-microphone" aria-hidden="true"></i>
                    </div>
                    <h4>Voice & Media Tools</h4>
                    <p>Speech parsing, audio-to-text converters, and audio transcription services integrated directly.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>Smart Cyber Safeguards</h4>
                    <p>Machine learning analytics monitors that identify network activity threats and database abnormalities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="content-section">
        <div class="container">
            <div class="section-header anim-fade-up" data-aos="fade-up">
                <div class="section-tag">Case Studies</div>
                <h2>Featured Enterprise <span class="gradient-text">Deliveries</span></h2>
                <p class="lead">A closer look at some of our custom software solutions and system migrations.</p>
            </div>
            <div class="grid grid-2 mt-3rem">
                <!-- Project 1 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/about_university_lms.png'); ?>" alt="Scalable Academic LMS Platform Customization" class="card-img" loading="lazy">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Education</div>
                        <h4>Scalable E-Learning Platform Transformation</h4>
                        <p>A complete software overhaul for an academic institution supporting 10,000+ active users. Implemented secure plugin modules, custom theme styling, and cloud database indexing.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 10,000+ Active Users</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 40% Engagement Boost</span>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/about_enterprise_training.png'); ?>" alt="Custom Corporate Training Dashboard Portal" class="card-img" loading="lazy">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">Corporate</div>
                        <h4>Enterprise Performance Portal</h4>
                        <p>Developed a secure database portal for a multinational organization with 5,000+ team members. Integrated with CRM platforms and custom ERP tools.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 5,000+ Daily Members</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 60% Process Optimization</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/about_medical_training.png'); ?>" alt="Specialized Medical Education Platform" class="card-img" loading="lazy">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-primary mb-1rem">Healthcare</div>
                        <h4>Medical Knowledge Base LMS</h4>
                        <p>Built a customized web platform for clinical certification, professional CME metrics tracker, and compliance verification modules.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 2,000+ Medical Professionals</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 100% Audit Compliance</span>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="card" data-aos="fade-up">
                    <div class="card-img-wrapper">
                        <img src="<?php echo asset('images/about/about_product_training.png'); ?>" alt="Ecommerce Customer Portal with Automated Certificates" class="card-img" loading="lazy">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="badge badge-success mb-1rem">E-commerce</div>
                        <h4>Interactive Service & Onboarding System</h4>
                        <p>Engineered a custom service and onboarding workspace featuring interactive content widgets, quizzes, and automated certificate issuance.</p>
                        <div class="mt-1-5rem">
                            <span class="check-item"><i class="fas fa-circle-check" aria-hidden="true"></i> 10,000+ Customers Served</span>
                            <span class="check-item ml-1rem"><i class="fas fa-circle-check" aria-hidden="true"></i> 85% Target Success Rate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="content-section bg-alt">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow premium-cta" data-aos="fade-up">
                <h2 class="cta-title">Ready to Design Your <span class="cta-highlight">Enterprise Platform?</span></h2>
                <p class="cta-text">Let's discuss how our consulting expertise, custom software development, and AI tools can transform your business.</p>
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Tech Consultation
                </a>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
