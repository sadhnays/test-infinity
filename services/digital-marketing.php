<?php
$pageTitle = 'Digital Marketing Services | Infinity SoftHub Technologies';
$pageDescription = 'Comprehensive digital marketing services including SEO, AI-powered marketing, social media, and PPC campaigns to grow your business online.';
$pageKeywords = 'digital marketing, SEO services, AI marketing, social media marketing, PPC campaigns, content marketing, email marketing, web analytics';
$activePage = 'services';

require_once '../includes/header.php';
?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up" data-aos="fade-up">
            <div class="badge badge-primary badge-mb">
                <i class="fas fa-bullhorn" aria-hidden="true"></i> Digital Marketing
            </div>
            <h1>Grow Your Business with <span class="gradient-text">Digital Marketing</span></h1>
            <p class="hero-subtitle">AI-powered digital marketing strategies that drive traffic, engagement, and conversions for your business.</p>
            <div class="hero-cta mt-2rem">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="content-section">
    <div class="container">
        <div class="content-grid-2 mt-3rem" style="align-items:center;">
            <div class="anim-fade-right" data-aos="fade-right">
                <div class="badge badge-primary badge-mb-sm">
                    <i class="fas fa-chart-line" aria-hidden="true"></i> Marketing Expertise
                </div>
                <h2 class="h2-mb">Data-Driven <span class="gradient-text">Marketing Solutions</span></h2>
                <p class="text-secondary mb-1rem">We combine traditional digital marketing with AI technology to deliver campaigns that reach the right audience at the right time.</p>
                <p class="text-secondary mb-1-5rem">From LMS platforms to web applications, we help you market your digital products effectively to your target audience.</p>
                <ul class="check-list">
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>AI-Powered Campaign Optimization</strong> - Smarter ad spend, better results</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>SEO for Web & LMS Platforms</strong> - Rank higher in search results</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Social Media & Content Marketing</strong> - Engage your audience</span></li>
                    <li><span class="li-icon">✓</span><span class="li-text"><strong>Performance Analytics & Reporting</strong> - Measure what matters</span></li>
                </ul>
            </div>
            <div class="anim-fade-left" data-aos="fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/digital-marketing.jpg'); ?>" alt="Digital Marketing Services" class="img-rounded" loading="lazy" onerror="this.src='https://via.placeholder.com/600x400/0066ff/ffffff?text=Digital+Marketing'">
                    <div class="exp-number-badge">
                        <div class="exp-number">3x</div>
                        <div class="exp-label">Average ROI</div>
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
            <h2>Marketing Services <span class="gradient-text">We Offer</span></h2>
            <p class="lead">Comprehensive digital marketing services to boost your online presence.</p>
        </div>
        <div class="grid grid-3 stagger mt-3rem">
            <!-- Feature 1 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
                <h4>Search Engine Optimization</h4>
                <p>Technical SEO, keyword optimization, and content strategies to rank your web and LMS platforms higher in search results.</p>
            </div>
            <!-- Feature 2 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-robot" aria-hidden="true"></i>
                </div>
                <h4>AI Marketing Tools</h4>
                <p>Leverage AI for predictive customer behavior analysis, automated ad placement, and personalized content recommendations.</p>
            </div>
            <!-- Feature 3 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-ad" aria-hidden="true"></i>
                </div>
                <h4>PPC & Paid Ads</h4>
                <p>Google Ads, social media ads, and retargeting campaigns managed by AI for maximum ROI and conversion.</p>
            </div>
            <!-- Feature 4 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-share-alt" aria-hidden="true"></i>
                </div>
                <h4>Social Media Marketing</h4>
                <p>Strategic social media campaigns across LinkedIn, Facebook, Twitter, and Instagram to build brand awareness.</p>
            </div>
            <!-- Feature 5 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                </div>
                <h4>Email Marketing</h4>
                <p>AI-powered email campaigns with personalized content, automated workflows, and detailed performance analytics.</p>
            </div>
            <!-- Feature 6 -->
            <div class="feature-card" data-aos="zoom-in">
                <div class="feature-icon">
                    <i class="fas fa-chart-bar" aria-hidden="true"></i>
                </div>
                <h4>Analytics & Reporting</h4>
                <p>Comprehensive analytics dashboards with AI insights to track campaign performance and optimize strategies.</p>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Process Section -->
<section id="process" class="content-section">
    <div class="container">
        <div class="section-header anim-fade-up" data-aos="fade-up">
            <div class="section-tag">Our Process</div>
            <h2>Marketing Process <span class="gradient-text">We Follow</span></h2>
            <p class="lead">A data-driven approach to digital marketing that delivers measurable results.</p>
        </div>
        <div class="grid grid-4 stagger mt-3rem">
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">1</div>
                <h4>Research</h4>
                <p>Analyze your market, competitors, and target audience using AI-powered research tools.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">2</div>
                <h4>Strategy</h4>
                <p>Develop customized marketing strategy with AI-optimized channel selection and budget allocation.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">3</div>
                <h4>Execute</h4>
                <p>Launch campaigns across selected channels with AI-driven content creation and ad placement.</p>
            </div>
            <div class="process-step" data-aos="zoom-in">
                <div class="step-number">4</div>
                <h4>Optimize</h4>
                <p>Continuous AI-powered optimization based on performance data to maximize ROI.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="cta-section anim-fade-up cta-narrow" data-aos="fade-up">
            <h2 class="cta-title">Ready to Grow Your <span class="cta-highlight">Online Presence</span>?</h2>
            <p class="cta-text">Get in touch with our marketing team today for a free digital marketing audit and strategy session.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn cta-btn">
                    <i class="fas fa-rocket" aria-hidden="true"></i> Get Free Consultation
                </a>
                <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
