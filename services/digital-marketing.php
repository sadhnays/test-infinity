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
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-bullhorn"></i> Digital Marketing
            </div>
            <h1>Grow Your Business with <span class="gradient-text">Digital Marketing</span></h1>
            <p class="hero-subtitle">AI-powered digital marketing strategies that drive traffic, engagement, and conversions for your business.</p>
            <div class="hero-cta" style="margin-top:2rem;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fa fa-arrow-right"></i></a>
                <a href="#process" class="btn btn-outline btn-lg">Our Process</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Description -->
<section class="content-section">
    <div class="container">
        <div class="grid grid-2" style="gap:3rem; align-items:center;">
            <div class="anim-fade-right">
                <div class="badge badge-secondary" style="margin-bottom:1rem;">Marketing Expertise</div>
                <h2>Data-Driven <span class="gradient-text">Marketing Solutions</span></h2>
                <p>We combine traditional digital marketing with AI technology to deliver campaigns that reach the right audience at the right time.</p>
                <p>From LMS platforms to web applications, we help you market your digital products effectively to your target audience.</p>
                <ul class="feature-list" style="margin-top:1.5rem; list-style:none; padding:0;">
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> AI-Powered Campaign Optimization</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> SEO for Web & LMS Platforms</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> Social Media & Content Marketing</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> Performance Analytics & Reporting</li>
                </ul>
            </div>
            <div class="anim-fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/digital-marketing.jpg'); ?>" alt="Digital Marketing Services" style="width:100%; border-radius:var(--radius-xl); border:1px solid var(--glass-border);" loading="lazy">
                    <div style="position:absolute; bottom:-1.5rem; left:-1.5rem; background:var(--gradient-primary); padding:1.5rem; border-radius:var(--radius-lg); box-shadow:var(--shadow-lg);">
                        <div style="color:white; font-size:2rem; font-weight:700;">3x</div>
                        <div style="color:rgba(255,255,255,0.9); font-size:0.875rem;">Average ROI</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="text-center anim-fade-up" style="margin-bottom:3rem;">
            <div class="badge badge-primary" style="margin-bottom:1rem; display:inline-flex;">
                <i class="fa fa-star"></i> Key Features
            </div>
            <h2>Marketing Services <span class="gradient-text">We Offer</span></h2>
            <p style="color:var(--text-secondary); max-width:600px; margin:0 auto;">Comprehensive digital marketing services to boost your online presence.</p>
        </div>
        <div class="grid grid-3" style="gap:1.5rem;">
            <!-- Feature 1 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-search" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Search Engine Optimization</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Technical SEO, keyword optimization, and content strategies to rank your web and LMS platforms higher in search results.</p>
            </div>
            <!-- Feature 2 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-robot" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">AI Marketing Tools</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Leverage AI for predictive customer behavior analysis, automated ad placement, and personalized content recommendations.</p>
            </div>
            <!-- Feature 3 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-ad" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">PPC & Paid Ads</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Google Ads, social media ads, and retargeting campaigns managed by AI for maximum ROI and conversion.</p>
            </div>
            <!-- Feature 4 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-share-alt" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Social Media Marketing</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Strategic social media campaigns across LinkedIn, Facebook, Twitter, and Instagram to build brand awareness.</p>
            </div>
            <!-- Feature 5 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-envelope" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Email Marketing</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">AI-powered email campaigns with personalized content, automated workflows, and detailed performance analytics.</p>
            </div>
            <!-- Feature 6 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-chart-bar" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Analytics & Reporting</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Comprehensive analytics dashboards with AI insights to track campaign performance and optimize strategies.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="content-section">
    <div class="container">
        <div class="text-center anim-fade-up" style="margin-bottom:3rem;">
            <div class="badge badge-primary" style="margin-bottom:1rem; display:inline-flex;">
                <i class="fa fa-tasks"></i> Our Process
            </div>
            <h2>Marketing Process <span class="gradient-text">We Follow</span></h2>
            <p style="color:var(--text-secondary); max-width:600px; margin:0 auto;">A data-driven approach to digital marketing that delivers measurable results.</p>
        </div>
        <div class="grid grid-4" style="gap:1.5rem;">
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">1</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Research</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Analyze your market, competitors, and target audience using AI-powered research tools.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">2</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Strategy</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Develop customized marketing strategy with AI-optimized channel selection and budget allocation.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">3</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Execute</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Launch campaigns across selected channels with AI-driven content creation and ad placement.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">4</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Optimize</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Continuous AI-powered optimization based on performance data to maximize ROI.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="text-center anim-fade-up" style="max-width:700px; margin:0 auto;">
            <h2>Ready to Grow Your <span class="gradient-text">Online Presence</span>?</h2>
            <p style="color:var(--text-secondary); font-size:1.1rem; margin-bottom:2rem;">Get in touch with our marketing team today for a free digital marketing audit and strategy session.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fa fa-arrow-right"></i></a>
                <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
