<?php
$pageTitle = "Healthcare IT Solutions | Infinity SoftHub";
$pageDescription = "Specialized healthcare IT solutions including EHR/EMR systems, telemedicine platforms, healthcare analytics, and medical device integration. HIPAA-compliant and secure.";
$pageKeywords = "healthcare IT, EHR EMR, telemedicine, medical software, healthcare analytics, HIPAA compliance";
$activePage = 'industries';

require_once 'includes/header.php';
?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="anim-fade-up" data-aos="fade-up">
                <div class="badge badge-primary badge-mb">
                    <i class="fas fa-hospital" aria-hidden="true"></i> Healthcare
                </div>
                <h1>Specialized <span class="gradient-text">Healthcare IT Solutions</span></h1>
                <p class="hero-subtitle">We deliver secure, compliant, and innovative technology solutions for healthcare providers, payers, and life sciences organizations.</p>
                <div class="mt-2rem">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">
                        Get Free Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a href="#services" class="btn btn-outline btn-lg">Our Healthcare Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Overview -->
    <section class="content-section">
        <div class="container">
            <div class="content-grid-2 mt-3rem" style="align-items:center;">
                <div class="anim-fade-right" data-aos="fade-right">
                    <div class="badge badge-primary badge-mb-sm">
                        <i class="fas fa-heartbeat" aria-hidden="true"></i> Healthcare Expertise
                    </div>
                    <h2 class="h2-mb">Transforming Healthcare Through <span class="gradient-text">Technology Innovation</span></h2>
                    <p class="text-secondary mb-1rem">We understand the unique challenges of the healthcare industry - from regulatory compliance to patient care optimization. Our solutions help healthcare organizations improve outcomes, reduce costs, and enhance patient experiences.</p>
                    <p class="text-secondary mb-1-5rem">With deep expertise in healthcare IT, we deliver HIPAA-compliant solutions that integrate seamlessly with existing systems while preparing organizations for the future of digital health.</p>
                    <ul class="check-list">
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>HIPAA Compliance & Security</strong> - Ensuring patient data privacy and security</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>EHR/EMR Integration</strong> - Seamless connectivity with existing systems</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Telemedicine Platforms</strong> - Remote care and virtual consultations</span></li>
                        <li><span class="li-icon">✓</span><span class="li-text"><strong>Healthcare Analytics</strong> - Data-driven insights for better decisions</span></li>
                    </ul>
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary mt-2rem">
                        <i class="fas fa-handshake" aria-hidden="true"></i> Get Free Consultation
                    </a>
                </div>
                <div class="anim-fade-left" data-aos="fade-left">
                    <div style="position:relative;">
                        <img src="<?php echo asset('images/Industries-We-Serve/Healthcare.webp'); ?>" alt="Healthcare IT Solutions" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Healthcare+IT'">
                        <div class="exp-number-badge">
                            <div class="exp-number">200+</div>
                            <div class="exp-label">Healthcare Projects</div>
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
                <div class="section-tag">Our Healthcare Services</div>
                <h2>Healthcare <span class="gradient-text">IT Solutions</span></h2>
                <p class="lead">Comprehensive technology solutions tailored for the healthcare industry.</p>
            </div>
            <div class="grid grid-3 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-hospital-user" aria-hidden="true"></i>
                    </div>
                    <h4>EHR/EMR Systems</h4>
                    <p>Electronic Health Record and Electronic Medical Record systems optimized for clinical workflows, interoperability, and regulatory compliance.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-video" aria-hidden="true"></i>
                    </div>
                    <h4>Telemedicine Platforms</h4>
                    <p>Secure video conferencing, remote patient monitoring, and virtual care platforms that extend healthcare access beyond traditional settings.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <h4>Healthcare Analytics</h4>
                    <p>Advanced analytics and business intelligence solutions for population health management, clinical decision support, and operational optimization.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h4>HIPAA Compliance & Security</h4>
                    <p>Ensuring PHI protection through encryption, access controls, audit trails, and comprehensive security assessments.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-pills" aria-hidden="true"></i>
                    </div>
                    <h4>Pharmacy & Medication Management</h4>
                    <p>Systems for medication tracking, pharmacy operations, e-prescribing, and pharmacy benefit management.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-user-md" aria-hidden="true"></i>
                    </div>
                    <h4>Patient Engagement Solutions</h4>
                    <p>Patient portals, mobile apps, and engagement platforms that improve communication, adherence, and satisfaction.</p>
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
                <h2>Technologies We <span class="gradient-text">Use for Healthcare</span></h2>
                <p class="lead">We leverage healthcare-specific technologies and standards to build compliant, interoperable solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-hospital" aria-hidden="true"></i>
                    </div>
                    <h4>HL7 & FHIR</h4>
                    <p>Healthcare data exchange standards for seamless interoperability between systems.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-file-medical" aria-hidden="true"></i>
                    </div>
                    <h4>HIPAA Compliance Tools</h4>
                    <p>Encryption, access controls, and auditing solutions to ensure PHI protection.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-heartbeat" aria-hidden="true"></i>
                    </div>
                    <h4>Medical Device Integration</h4>
                    <p>Connecting medical devices, wearables, and IoT sensors to healthcare systems for real-time monitoring.</p>
                </div>
                <div class="feature-card" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-brain" aria-hidden="true"></i>
                    </div>
                    <h4>AI/ML in Healthcare</h4>
                    <p>Artificial intelligence for diagnostics, predictive analytics, and personalized treatment plans.</p>
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
                <h2>Healthcare <span class="gradient-text">Solution Process</span></h2>
                <p class="lead">A structured approach to delivering healthcare-specific solutions.</p>
            </div>
            <div class="grid grid-4 stagger mt-3rem">
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">1</div>
                    <h4>Discovery & Compliance</h4>
                    <p>Understanding clinical workflows, regulatory requirements, and stakeholder needs while ensuring HIPAA compliance from the start.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">2</div>
                    <h4>Design & Architecture</h4>
                    <p>Creating secure, scalable architectures that integrate with existing healthcare systems and support future growth.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">3</div>
                    <h4>Development & Testing</h4>
                    <p>Agile development with rigorous testing, including security assessments and clinical validation.</p>
                </div>
                <div class="process-step" data-aos="zoom-in">
                    <div class="step-number">4</div>
                    <h4>Deployment & Training</h4>
                    <p>Phased deployment with comprehensive training for clinical and administrative staff, plus ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="content-section">
        <div class="container">
            <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
                <h2 class="cta-title">Ready to Transform Your <span class="cta-highlight">Healthcare Organization</span>?</h2>
                <p class="cta-text">Let's discuss how our healthcare IT solutions can improve patient outcomes, reduce costs, and ensure regulatory compliance.</p>
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
require_once 'includes/footer.php';
?>