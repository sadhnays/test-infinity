<?php
$pageTitle = 'UI/UX Design Services | Infinity SoftHub Technologies';
$pageDescription = 'Professional UI/UX design services for web and mobile applications. User-centered design, prototyping, and AI-driven user experience optimization.';
$pageKeywords = 'UI UX design, user experience, user interface, web design, mobile app design, prototyping, Figma, Adobe XD, user research, AI design tools';
$activePage = 'services';

require_once '../includes/header.php';
?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="anim-fade-up">
            <div class="badge badge-primary" style="margin-bottom:1.5rem; display:inline-flex;">
                <i class="fa fa-palette"></i> UI/UX Design
            </div>
            <h1>Stunning <span class="gradient-text">UI/UX Design</span></h1>
            <p class="hero-subtitle">User-centered design solutions that engage users and drive conversions for web and mobile platforms.</p>
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
                <div class="badge badge-secondary" style="margin-bottom:1rem;">Design Expertise</div>
                <h2>Design That <span class="gradient-text">Delights Users</span></h2>
                <p>We create intuitive, visually appealing interfaces that enhance user satisfaction and drive business goals. Our designs work seamlessly across web and mobile platforms.</p>
                <p>Using AI-powered design tools, we analyze user behavior to create data-driven designs that convert visitors into customers.</p>
                <ul class="feature-list" style="margin-top:1.5rem; list-style:none; padding:0;">
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> User-Centered Design Process</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> AI-Enhanced User Research</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> Responsive Web & Mobile Design</li>
                    <li style="margin-bottom:0.75rem;"><i class="fa fa-check-circle" style="color:var(--accent-cyan); margin-right:0.5rem;"></i> Interactive Prototyping</li>
                </ul>
            </div>
            <div class="anim-fade-left">
                <div style="position:relative;">
                    <img src="<?php echo asset('images/about/ui-ux.jpg'); ?>" alt="UI UX Design Services" style="width:100%; border-radius:var(--radius-xl); border:1px solid var(--glass-border);" loading="lazy">
                    <div style="position:absolute; bottom:-1.5rem; right:-1.5rem; background:var(--gradient-primary); padding:1.5rem; border-radius:var(--radius-lg); box-shadow:var(--shadow-lg);">
                        <div style="color:white; font-size:2rem; font-weight:700;">98%</div>
                        <div style="color:rgba(255,255,255,0.9); font-size:0.875rem;">Client Satisfaction</div>
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
            <h2>Design Services <span class="gradient-text">We Offer</span></h2>
            <p style="color:var(--text-secondary); max-width:600px; margin:0 auto;">Comprehensive UI/UX design services for digital products that users love.</p>
        </div>
        <div class="grid grid-3" style="gap:1.5rem;">
            <!-- Feature 1 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-search" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">User Research</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">In-depth user research using AI analytics tools to understand user behavior, needs, and pain points for LMS and web applications.</p>
            </div>
            <!-- Feature 2 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-pencil-ruler" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Wireframing & Prototyping</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Interactive wireframes and prototypes using Figma, Adobe XD, and InVision to visualize your product before development.</p>
            </div>
            <!-- Feature 3 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-mobile-alt" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Mobile App Design</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Native and cross-platform mobile app designs for iOS and Android. Optimized for usability and engagement.</p>
            </div>
            <!-- Feature 4 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-laptop" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Web Interface Design</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Modern, responsive web interfaces for LMS platforms, dashboards, and custom web applications with AI personalization.</p>
            </div>
            <!-- Feature 5 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-eye" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">Usability Testing</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Rigorous usability testing with real users to identify and fix pain points before launch.</p>
            </div>
            <!-- Feature 6 -->
            <div class="card anim-fade-up" style="padding:2rem;">
                <div class="card-icon" style="width:60px; height:60px; background:var(--gradient-primary); border-radius:var(--radius-md); display:flex; align-items:center; justify-content:center; margin-bottom:1.5rem;">
                    <i class="fa fa-robot" style="color:white; font-size:1.5rem;"></i>
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:1rem;">AI-Driven Design</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6;">Leverage AI tools for automated layout suggestions, color palette optimization, and accessibility compliance.</p>
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
            <h2>Design Process <span class="gradient-text">We Follow</span></h2>
            <p style="color:var(--text-secondary); max-width:600px; margin:0 auto;">A user-centered design process that delivers results-driven digital experiences.</p>
        </div>
        <div class="grid grid-4" style="gap:1.5rem;">
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">1</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Discover</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Understand business goals, target audience, and user needs through stakeholder interviews and market research.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">2</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Define</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Create user personas, journey maps, and information architecture to guide the design process.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">3</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Design</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Develop wireframes, prototypes, and high-fidelity designs with iterative feedback from stakeholders.</p>
            </div>
            <div class="text-center anim-fade-up" style="padding:2rem;">
                <div style="width:80px; height:80px; background:var(--gradient-primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:1.5rem; color:white; font-weight:700;">4</div>
                <h3 style="font-size:1.1rem; margin-bottom:0.75rem;">Deliver</h3>
                <p style="color:var(--text-secondary); font-size:0.9rem;">Hand off design assets, style guides, and specifications to development team for implementation.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section bg-alt">
    <div class="container">
        <div class="text-center anim-fade-up" style="max-width:700px; margin:0 auto;">
            <h2>Ready to Elevate Your <span class="gradient-text">User Experience</span>?</h2>
            <p style="color:var(--text-secondary); font-size:1.1rem; margin-bottom:2rem;">Get in touch with our design team today for a free UX audit and design consultation.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo base_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Free Quote <i class="fa fa-arrow-right"></i></a>
                <a href="<?php echo base_url('what-we-do.php'); ?>" class="btn btn-outline btn-lg">Explore More Services</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
