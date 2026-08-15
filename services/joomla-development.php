<?php
$pageTitle = "Joomla Development Services | Custom CMS Solutions | Infinity SoftHub Technologies";
$pageDescription = "Professional Joomla development services. Custom Joomla websites, extensions, templates, and enterprise CMS solutions with 8+ years of experience.";
$pageKeywords = "Joomla development, Joomla website, Joomla customization, Joomla extensions, Joomla templates, CMS development";
$activePage = 'services';
require_once '../includes/header.php';
?>

<style>
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%),
                url('https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=1920&h=600&fit=crop') center/cover;
}

.check-list li { list-style:none; padding-left:2rem; margin-bottom:0.75rem; position:relative; }
.check-list li::before { content:'\f00c'; font-family:'Font Awesome 5 Free'; font-weight:900; position:absolute; left:0; color:#00ccff; }

.overview-image { position:relative; overflow:hidden; }
.overview-image::before { content:''; position:absolute; top:-20px; left:-20px; right:20px; bottom:20px; border:3px solid #00ccff; border-radius:20px; z-index:-1; }
.overview-image img { transition:transform 0.4s ease; }
.overview-image:hover img { transform:scale(1.03); }

.feature-card { background:white; border-radius:16px; padding:2rem; transition:all 0.3s ease; border:1px solid transparent; }
.feature-card:hover { transform:translateY(-8px); box-shadow:0 20px 40px rgba(0,0,0,0.1); border-color:#00ccff; }
.feature-icon { width:60px; height:60px; background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; font-size:1.5rem; color:white; }

.step-number { width:70px; height:70px; background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; font-size:1.5rem; font-weight:700; color:white; box-shadow:0 10px 30px rgba(0,204,255,0.3); }

.stats-card { background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); border-radius:16px; padding:2rem; text-align:center; backdrop-filter:blur(10px); transition:all 0.3s ease; }
.stats-card:hover { border-color:#00ccff; transform:translateY(-5px); }
.stats-number { font-size:3rem; font-weight:700; background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.stats-suffix { font-size:1.5rem; font-weight:600; color:#00ccff; }
.stats-label { color:rgba(255,255,255,0.7); font-size:0.95rem; margin-top:0.5rem; text-transform:uppercase; letter-spacing:1px; }

.cta-section { background:linear-gradient(135deg, #00ccff 0%, #00ffcc 100%); border-radius:24px; padding:3rem; text-align:center; }
.cta-section .btn { background:white !important; color:#00ccff !important; padding:1rem 2rem; border-radius:50px; font-weight:600; transition:all 0.3s ease; }
.cta-section .btn:hover { transform:scale(1.05); box-shadow:0 10px 30px rgba(0,0,0,0.2); }

@media (max-width: 768px) { .stats-number { font-size:2.5rem; } .cta-section { padding:2rem 1.5rem; } }
</style>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div style="margin-bottom:1.5rem; display:inline-flex; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; border:1px solid #00ccff; color:#00ccff;">
                <i class="fab fa-joomla" style="margin-right:0.5rem;"></i> CMS Solutions
            </div>
            <h1>Joomla <span class="gradient-text">Development</span></h1>
            <p>Build powerful, scalable websites with Joomla CMS. From custom templates to complex extensions, we deliver professional Joomla solutions.</p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Why Choose <span class="gradient-text">Joomla?</span></h2>
                <p style="margin-bottom:1.5rem; color:var(--text-secondary);">Joomla is one of the world's most powerful content management systems. We help you leverage its enterprise-grade features for websites of any size.</p>
                <ul class="check-list" style="padding:0; margin:1.5rem 0;">
                    <li><strong>Enterprise Security</strong> - Built-in security features and updates</li>
                    <li><strong>Scalable</strong> - From small sites to large portals</li>
                    <li><strong>Multilingual</strong> - 70+ languages supported out of the box</li>
                    <li><strong>Extensible</strong> - 8,000+ extensions available</li>
                    <li><strong>SEO Friendly</strong> - Built-in SEO tools and URL management</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="padding:1rem 2rem; border-radius:50px;">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left overview-image">
                <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=600&h=500&fit=crop" alt="Joomla Development" style="width:100%; border-radius:16px; box-shadow:0 20px 60px rgba(0,0,0,0.2);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">What We Offer</div>
            <h2>Joomla <span class="gradient-text">Services</span></h2>
            <p class="lead">Complete Joomla solutions from development to maintenance.</p>
        </div>
        <div class="grid grid-2" style="margin-top:3rem;">
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-laptop-code"></i></div>
                <h4>Custom Website Development</h4>
                <p style="color:var(--text-secondary);">Build unique, feature-rich websites tailored to your requirements.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-palette"></i></div>
                <h4>Template Design & Development</h4>
                <p style="color:var(--text-secondary);">Custom responsive templates aligned with your brand.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-puzzle-piece"></i></div>
                <h4>Extension Development</h4>
                <p style="color:var(--text-secondary);">Custom components, modules, and plugins.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-exchange-alt"></i></div>
                <h4>Migration & Upgrade</h4>
                <p style="color:var(--text-secondary);">Migrate from older versions or other CMS platforms.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-shopping-cart"></i></div>
                <h4>E-commerce Integration</h4>
                <p style="color:var(--text-secondary);">VirtueMart, HikaShop, or other e-commerce solutions.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-lock"></i></div>
                <h4>Security & Maintenance</h4>
                <p style="color:var(--text-secondary);">Security audits, hardening, and ongoing maintenance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">Our Process</div>
            <h2>Development <span class="gradient-text">Lifecycle</span></h2>
            <p class="lead">A structured approach to deliver exceptional Joomla websites.</p>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:2rem; margin-top:3rem;">
            <div class="anim-fade-up" style="text-align:center; padding:1.5rem;">
                <div class="step-number">1</div>
                <h4>Requirements</h4>
                <p style="color:var(--text-secondary);">Define goals</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="100" style="text-align:center; padding:1.5rem;">
                <div class="step-number">2</div>
                <h4>Design</h4>
                <p style="color:var(--text-secondary);">Create mockups</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="200" style="text-align:center; padding:1.5rem;">
                <div class="step-number">3</div>
                <h4>Develop</h4>
                <p style="color:var(--text-secondary);">Build & integrate</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="300" style="text-align:center; padding:1.5rem;">
                <div class="step-number">4</div>
                <h4>Test</h4>
                <p style="color:var(--text-secondary);">QA & security</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="400" style="text-align:center; padding:1.5rem;">
                <div class="step-number">5</div>
                <h4>Launch</h4>
                <p style="color:var(--text-secondary);">Deploy & train</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="grid grid-4 stagger">
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="80">0</div>
                <div class="stats-suffix">+</div>
                <div class="stats-label">Projects</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="100">0</div>
                <div class="stats-suffix">+</div>
                <div class="stats-label">Extensions</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">8+</div>
                <div class="stats-label">Years Experience</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">100%</div>
                <div class="stats-label">Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section">
    <div class="container">
        <div class="cta-section anim-fade-up">
            <h2>Ready for <span style="color:#0a1628;">Joomla?</span></h2>
            <p style="color:rgba(0,0,0,0.7); margin:1rem 0 2rem;">Let's build a powerful, scalable website with Joomla CMS.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
