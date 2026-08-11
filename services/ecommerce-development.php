<?php
$pageTitle = "E-commerce Development Services | Custom Online Store | Infinity SoftHub Technologies";
$pageDescription = "Professional e-commerce development services. Build custom online stores, marketplaces, and shopping solutions with WooCommerce, Magento, Shopify and custom platforms.";
$pageKeywords = "e-commerce development, online store, WooCommerce, Magento, Shopify, custom e-commerce, marketplace development";
$activePage = 'services';
require_once '../includes/header.php';
?>

<style>
.page-hero {
    background: linear-gradient(135deg, rgba(10, 22, 40, 0.95) 0%, rgba(26, 45, 74, 0.9) 100%),
                url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1920&h=600&fit=crop') center/cover;
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
                <i class="fa fa-shopping-cart" style="margin-right:0.5rem;"></i> E-commerce Solutions
            </div>
            <h1>E-commerce <span class="gradient-text">Development</span></h1>
            <p>Build powerful online stores and marketplaces that drive sales. From custom solutions to platform-based stores, we deliver e-commerce experiences that convert.</p>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 anim-fade-right">
            <div>
                <h2 style="margin-bottom:1.5rem;">Sell Online with <span class="gradient-text">Confidence</span></h2>
                <p style="margin-bottom:1.5rem; color:var(--text-secondary);">We build e-commerce solutions that are fast, secure, and optimized for conversions. Whether you need a simple store or a complex multi-vendor marketplace, we've got you covered.</p>
                <ul class="check-list" style="padding:0; margin:1.5rem 0;">
                    <li><strong>Custom E-commerce</strong> - Tailored solutions for unique needs</li>
                    <li><strong>Platform Integration</strong> - WooCommerce, Magento, Shopify</li>
                    <li><strong>Marketplace Build</strong> - Multi-vendor platforms</li>
                    <li><strong>Payment Gateway</strong> - Secure payments with Stripe, PayPal</li>
                    <li><strong>SEO Optimized</strong> - Built for search visibility</li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary" style="padding:1rem 2rem; border-radius:50px;">
                        <i class="fa fa-calendar-check"></i> Get Free Consultation
                    </a>
                </div>
            </div>
            <div class="anim-fade-left overview-image">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=500&fit=crop" alt="E-commerce Development" style="width:100%; border-radius:16px; box-shadow:0 20px 60px rgba(0,0,0,0.2);" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="section-header anim-fade-up">
            <div style="display:inline-block; background:rgba(0,204,255,0.2); padding:0.5rem 1rem; border-radius:50px; color:#00ccff; font-size:0.9rem; text-transform:uppercase; letter-spacing:2px; margin-bottom:1rem;">What We Offer</div>
            <h2>E-commerce <span class="gradient-text">Services</span></h2>
            <p class="lead">Complete e-commerce solutions from design to deployment.</p>
        </div>
        <div class="grid grid-2" style="margin-top:3rem;">
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-store"></i></div>
                <h4>Custom Store Development</h4>
                <p style="color:var(--text-secondary);">Build a unique e-commerce experience from scratch with custom functionality.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fab fa-woocommerce"></i></div>
                <h4>WooCommerce Solutions</h4>
                <p style="color:var(--text-secondary);">Powerful WordPress-based stores - flexible, scalable, and cost-effective.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fab fa-magento"></i></div>
                <h4>Magento Development</h4>
                <p style="color:var(--text-secondary);">Enterprise-grade e-commerce for advanced features and scalability.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fab fa-shopify"></i></div>
                <h4>Shopify Development</h4>
                <p style="color:var(--text-secondary);">Quick-to-launch Shopify stores with custom themes.</p>
            </div>
            <div class="feature-card anim-fade-right">
                <div class="feature-icon"><i class="fa fa-users"></i></div>
                <h4>Multi-Vendor Marketplaces</h4>
                <p style="color:var(--text-secondary);">Build platforms like Amazon, Etsy with multi-vendor functionality.</p>
            </div>
            <div class="feature-card anim-fade-left">
                <div class="feature-icon"><i class="fa fa-mobile-alt"></i></div>
                <h4>Mobile Commerce</h4>
                <p style="color:var(--text-secondary);">Fully responsive stores with mobile-first design.</p>
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
            <p class="lead">A proven approach to build high-converting online stores.</p>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:2rem; margin-top:3rem;">
            <div class="anim-fade-up" style="text-align:center; padding:1.5rem;">
                <div class="step-number">1</div>
                <h4>Strategy</h4>
                <p style="color:var(--text-secondary);">Define goals & audience</p>
            </div>
            <div class="anim-fade-up" data-aos-delay="100" style="text-align:center; padding:1.5rem;">
                <div class="step-number">2</div>
                <h4>Design</h4>
                <p style="color:var(--text-secondary);">Conversion-focused UI</p>
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
                <p style="color:var(--text-secondary);">Go live & support</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="grid grid-4 stagger">
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number counter" data-target="100">0</div>
                <div class="stats-suffix">+</div>
                <div class="stats-label">Projects</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">$50M+</div>
                <div class="stats-label">Sales Processed</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">6+</div>
                <div class="stats-label">Platforms</div>
            </div>
            <div class="stats-card" data-aos="zoom-in">
                <div class="stats-number">99%</div>
                <div class="stats-suffix">%</div>
                <div class="stats-label">Uptime</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section">
    <div class="container">
        <div class="cta-section anim-fade-up">
            <h2>Ready to <span style="color:#0a1628;">Sell Online?</span></h2>
            <p style="color:rgba(0,0,0,0.7); margin:1rem 0 2rem;">Let's build an e-commerce store that drives sales and grows your business.</p>
            <a href="<?php echo base_url('contact.php'); ?>" class="btn">
                <i class="fa fa-rocket"></i> Get Free Consultation
            </a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
