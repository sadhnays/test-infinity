<?php
$pageTitle = "Custom Moodle™ LMS Development & Integration | Infinity SoftHub";
$pageDescription = "Custom services for Moodle™ LMS. We build custom plugins, interactive SQL/Python coding playgrounds, AI study assistants, and custom theme designs.";
$pageKeywords = "Moodle plugin development, custom Moodle themes, Moodle developer, SQL coding playgrounds, Python coding labs inside Moodle, LMS customization services";
$activePage = 'services';
require_once '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-graduation-cap"></i> Our Specialty
            </div>
            <h1>Moodle <span class="gradient-text">Development</span></h1>
            <p>Expert Moodle development services with 8+ years of specialized experience. From custom themes to complex plugin development - we build LMS platforms that transform learning.</p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Why Choose Our <span class="gradient-text">Moodle Development</span>?</h2>
                <p style="margin-bottom:1.5rem;">Moodle is the world's most popular learning management system, and we've mastered it. Our team delivers end-to-end Moodle solutions tailored to your educational needs.</p>
                <ul class="check-list">
                    <li><strong>8+ Years Specialized Experience</strong> - Dedicated Moodle experts since 2015</li>
                    <li><strong>200+ Successful Projects</strong> - Proven track record across industries</li>
                    <li><strong>Custom Plugin Development</strong> - 50+ plugins created and deployed</li>
                    <li><strong>Scalable Solutions</strong> - From 100 to 100,000+ users</li>
                    <li><strong>Full-Cycle Services</strong> - Design, develop, deploy, and support</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left">
                <img src="<?php echo asset('images/about/moodle-development.jpg'); ?>" alt="Moodle Development Services" style="width:100%; border-radius:var(--radius-xl);" loading="lazy" onerror="this.src='https://via.placeholder.com/600x500/0066ff/ffffff?text=Moodle+Development'">
            </div>
        </div>
    </div>
</section>

<!-- Services List -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">What We Offer</div>
            <h2>Comprehensive <span class="gradient-text">Moodle Services</span></h2>
            <p class="lead">Everything you need to build, customize, and scale your Moodle LMS platform.</p>
        </div>
        <div class="grid grid-2" style="margin-top:3rem;">
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fa fa-palette"></i>
                </div>
                <h4>Custom Moodle™ Themes & UI/UX</h4>
                <p>Responsive, modern, and accessible interface designs that reflect your brand identity and simplify student navigation.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-puzzle-piece"></i>
                </div>
                <h4>Custom Moodle™ Plugin Development</h4>
                <p>Tailored plugin creation built around your specific workflow, including gradebook extensions and custom activity blocks.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fa fa-code"></i>
                </div>
                <h4>Interactive SQL & Python Coding Labs</h4>
                <p>Browser-based query editors, database builders, and sandbox coding environments integrated directly into LMS courses.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-robot"></i>
                </div>
                <h4>AI-Powered Study & Coding Assistants</h4>
                <p>Integrating document Q&A (RAG-based search on course materials) and smart AI debugging guides inside courses.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fa fa-plug"></i>
                </div>
                <h4>Third-Party Integrations & REST APIs</h4>
                <p>Connect Moodle™ seamlessly with external systems, including Salesforce, SAP, Active Directory, Zoom, and custom REST APIs.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-users-cog"></i>
                </div>
                <h4>Moodle™ Multi-Tenancy & Administration</h4>
                <p>Multi-tenant architecture (Moodle Workplace / IOMAD) setup, version upgrades, security audits, and cloud deployments.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon">
                    <i class="fa fa-shield-alt"></i>
                </div>
                <h4>LMS Security & Performance Tuning</h4>
                <p>Optimization of database structures, caching, CDN integration, security hardening, and database server scaling.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon">
                    <i class="fa fa-chart-bar"></i>
                </div>
                <h4>E-Learning Analytics & Reporting</h4>
                <p>Custom dashboards for student progress tracking, instructor feedback, manager reports, and data visualization tools.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Our Process</div>
            <h2>Moodle Development <span class="gradient-text">Lifecycle</span></h2>
            <p class="lead">A proven 6-step process that ensures your Moodle platform exceeds expectations.</p>
        </div>
        <div class="process-grid stagger" style="margin-top:3rem;">
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">1</div>
                <div class="step-connector"></div>
                <h4>Discovery</h4>
                <p>Understand your educational goals, user needs, and technical requirements.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">2</div>
                <div class="step-connector"></div>
                <h4>Design</h4>
                <p>Create wireframes, mockups, and technical architecture for your LMS.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">3</div>
                <div class="step-connector"></div>
                <h4>Develop</h4>
                <p>Agile development with regular demos and custom plugin creation.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">4</div>
                <div class="step-connector"></div>
                <h4>Test</h4>
                <p>Comprehensive testing across devices, browsers, and user scenarios.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">5</div>
                <div class="step-connector"></div>
                <h4>Deploy</h4>
                <p>Smooth go-live with data migration and user training.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">6</div>
                <h4>Support</h4>
                <p>Ongoing maintenance, updates, and technical support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div class="section-tag">Technologies</div>
            <h2>Our Moodle <span class="gradient-text">Tech Stack</span></h2>
        </div>
        <div class="tech-grid stagger" style="margin-top:3rem;">
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/moodle.svg'); ?>" alt="Moodle" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/php.svg'); ?>" alt="PHP" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/mysql.svg'); ?>" alt="MySQL" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/javascript.svg'); ?>" alt="JavaScript" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/react.svg'); ?>" alt="React" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/python.svg'); ?>" alt="Python" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/amazon-web-services.svg'); ?>" alt="AWS" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="tech-logo" data-aos="zoom-in">
                <img src="<?php echo asset('images/technology-stack/microsoft-azure.svg'); ?>" alt="Azure" loading="lazy" onerror="this.style.display='none'">
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="content-section">
    <div class="container">
        <div class="grid grid-4 stagger">
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="200">0</div>
                <div class="stats-label">Projects Delivered</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="15000" data-suffix="+">0</div>
                <div class="stats-label">Users Empowered</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number" style="color:var(--accent-green);">50+</div>
                <div class="stats-label">Custom Plugins</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number" style="color:var(--accent-cyan);">8+</div>
                <div class="stats-label">Years Experience</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="cta-section anim-fade-up" style="margin:0 auto; max-width:900px;">
            <h2 style="color:white; margin-bottom:1rem;">Ready to Build Your <span style="color:#00ffcc;">Moodle Platform?</span></h2>
            <p style="color:rgba(255,255,255,0.8); margin-bottom:2rem;">Let's discuss how our Moodle expertise can create a powerful learning experience for your users.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn" style="background:white; color:var(--accent-blue); font-weight:var(--font-weight-bold);">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php
require_once '../includes/footer.php';
?>
